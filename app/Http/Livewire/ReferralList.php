<?php

namespace App\Http\Livewire;

use App\Referral;
use Livewire\Component;

class ReferralList extends Component
{

    public function delete($userId)
    {
        $referral = Referral::where('id', $userId);
        $referral->delete();
        return redirect('/admin/referrals');
        
    }

    public function render()
    {
        $referralList = Referral::with('user','referrer')->get();
        return view('livewire.referral-list', ['referralList' => $referralList]);
    }
}
