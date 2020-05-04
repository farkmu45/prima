<?php

namespace App\Http\Livewire;

use App\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AddProduct extends Component
{

    public $name;
    public $price;
    public $type;
    public $ac;
    public $bedroom;
    public $address;
    public $bathroom;
    public $room_video;
    public $survey_video;
    public $photo;
    public $front_view;
    public $first_floor;
    public $second_floor;
    public $description;


    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => ['string', 'required'],
            'price' => ['numeric', 'required'],
            'address' => ['string', 'required'],
            'type' => ['string', 'required'],
            'ac' => ['string', 'required', 'max:10'],
            'bedroom' => ['string', 'required', 'max:10'],
            'bathroom' => ['string', 'required', 'max:10'],
            'room_video' => ['active_url', 'string', 'required'],
            'survey_video' => ['active_url', 'string', 'required'],
            'survey_video' => ['active_url', 'string', 'required'],
            'photo' => ['between:0,2048','mimes:jpeg,jpg,png', 'required'],
            'front_view' => ['between:0,2048','mimes:jpeg,jpg,png', 'required'],
            'first_floor' => ['between:0,2048','mimes:jpeg,jpg,png', 'required'],
            'second_floor' => ['between:0,2048','mimes:jpeg,jpg,png', 'required'],
            'description' => ['string', 'required'],
        ]);
    }

    public function addProduct()
    {
        // $data = $this->validate([
        //     'name' => ['string', 'required'],
        //     'price' => ['numeric', 'required'],
        //     'type' => ['string', 'required'],
        //     'ac' => ['string', 'required', 'max:10'],
        //     'bedroom' => ['string', 'required', 'max:10'],
        //     'bathroom' => ['string', 'required', 'max:10'],
        //     'room_video' => ['active_url', 'string', 'required'],
        //     'survey_video' => ['active_url', 'string', 'required'],
        //     'survey_video' => ['active_url', 'string', 'required'],
        //     'photo' => ['file', 'between:0,2048', 'mimes:jpeg,jpg,png', 'required'],
        //     'front_view' => ['file', 'between:0,2048', 'mimes:jpeg,jpg,png', 'required'],
        //     'first_floor' => ['file', 'between:0,2048', 'mimes:jpeg,jpg,png', 'required'],
        //     'second_floor' => ['file', 'between:0,2048', 'mimes:jpeg,jpg,png', 'required'],
        //     'description' => ['string', 'required'],
        // ]);

        // $data['photo'] = request()->file('photo')->store('productImages');
        // $data['front_view'] = request()->file('front_view')->store('productImages');
        // $data['first_floor'] = request()->file('first_floor')->store('productImages');
        // $data['second_floor'] = request()->file('second_floor')->store('productImages');

        // request()->file('photo')->store('productImages');
        dd(request()->all());

        return redirect()->to('/admin/products');
    }

    public function render()
    {
        return view('livewire.add-product');
    }
}
