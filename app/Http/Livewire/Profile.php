<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $name;
    public $place_of_birth;
    public $date_of_birth;
    public $phone_number;
    public $gender;
    public $address;
    public $village;
    public $sub_district;
    public $city;
    public $province;
    public $bank_name;
    public $account_number;

    public function updated($field)
    {
            
    }


    public function render()
    {
        return view('livewire.profile');
    }
}
