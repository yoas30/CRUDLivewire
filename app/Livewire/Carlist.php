<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class Carlist extends Component
{

    public $all_cars;
    public function mount(){
        $this->all_cars = Car::all();
    }

    public function delete($id){
        try {
            Car::where('id',$id)->delete();
        } catch (\Exception $th) {
            dd($th);
        }
    }

    public function render()
    {
        return view('livewire.carlist',[
            'cars' => $this->all_cars
        ]);
    }
}
