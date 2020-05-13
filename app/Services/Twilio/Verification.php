<?php


namespace App\Services\Twilio;


use App\Verify\Result;
use App\Verify\Service;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;


class Verification implements Service
{

    /**
     * @var Client
     */
    private $client;


    /**
     * @var string
     */
    private $verification_sid;
    
    
    /**
     * Verification constructor.
     * @param $client
     * @param string|null $verification_sid
     * @throws \Twilio\Exceptions\ConfigurationException
     */
    public function __construct($client = null, string $verification_sid = null)
    {
        if ($client === null) {
            $sid = config('app.twilio.account_sid');
            $token = config('app.twilio.auth_token');
            $client = new Client($sid, $token);
        }
        $this->client = $client;
        $this->verification_sid = $verification_sid ?: config('app.twilio.verification_sid');
    }


    /**
     * Start a phone verification process using Twilio Verify V2 API
     *
     * @param $phone_number
     * @param $channel
     * @return Result
     */
    public function startVerification($phone_number, $channel)
    {
        $phone_number = '+62'.substr($phone_number,1);
        try {
            $verification = $this->client->verify->v2->services($this->verification_sid)
            ->verifications
            ->create($phone_number, $channel);
            
            return new Result($verification->sid);
        } catch (TwilioException $exception) {
            return new Result(["Verification failed to start: {$exception->getMessage()}"]);
        }
        
    }
    
    /**
     * Check verification code using Twilio Verify V2 API
     *
     * @param $phone_number
     * @param $code
     * @return Result
     */
    public function checkVerification($phone_number, $code)
    {
        $phone_number = '+62' . substr($phone_number, 1);
        try {
            $verification_check = $this->client->verify->v2->services($this->verification_sid)
            ->verificationChecks
            ->create($code, ['to' => $phone_number]);
            if($verification_check->status === 'approved') {
                return new Result($verification_check->sid);
            }
            return new Result(['Verification check failed: Invalid code.']);
        } catch (TwilioException $exception) {
            return new Result(["Verification check failed: Expired code."]);
        }
    }
}