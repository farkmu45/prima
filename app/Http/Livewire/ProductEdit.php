<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ProductEdit extends Component
{
    public $name;
    public $price;
    public $unit;
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
    public $product_id;
    public $show_status;
    public $commission;
    public $pdf;


    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => ['string', 'required'],
            'price' => ['numeric', 'required'],
            'address' => ['string', 'required'],
            'unit' => ['string', 'required'],
            'type' => ['string', 'required'],
            'ac' => ['string', 'required', 'max:10'],
            'bedroom' => ['string', 'required', 'max:10'],
            'bathroom' => ['string', 'required', 'max:10'],
            'room_video' => ['active_url', 'string', 'required'],
            'survey_video' => ['active_url', 'string', 'required'],
            'survey_video' => ['active_url', 'string', 'required'],
            'photo' => ['between:0,2048', 'mimes:jpeg,jpg,png', 'required'],
            'front_view' => ['between:0,2048', 'mimes:jpeg,jpg,png', 'required'],
            'first_floor' => ['between:0,2048', 'mimes:jpeg,jpg,png', 'required'],
            'second_floor' => ['between:0,2048', 'mimes:jpeg,jpg,png', 'required'],
            'description' => ['string', 'required'],
            'show_status' => ['in:0,1'],
            'commission' => ['required', 'numeric', 'min:0'],
            'pdf' => ['between:0,5012', 'mimes:pdf', 'required']
        ]);
    }

    public function mount(Product $product)
    {
        $this->show_status = $product->show_status;
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->unit = $product->unit;
        $this->type = $product->type;
        $this->ac = $product->ac;
        $this->bedroom = $product->bedroom;
        $this->address = $product->address;
        $this->bathroom = $product->bathroom;
        $this->room_video = $product->room_video;
        $this->survey_video = $product->survey_video;
        $this->photo = $product->photo;
        $this->front_view = $product->front_view;
        $this->first_floor = $product->first_floor;
        $this->second_floor = $product->second_floor;
        $this->description = $product->description;
        $this->commission = $product->commission;
        $this->pdf = $product->pdf;
    }


    public function render()
    {
        return view('livewire.product-edit')->withPhoto($this->photo)->withFrontView($this->front_view)->withFirstFloor($this->first_floor)->withSecondFloor($this->second_floor)->withId($this->product_id)->withShow_Status($this->show_status)->withPdf($this->pdf);
    }
}
