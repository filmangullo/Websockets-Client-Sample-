<?php

namespace App\Http\Livewire\DoubleRangeSlider;

use Livewire\Component;

class ListContent extends Component
{
    public $range = [
      "from" => 1,
      "to" => 10000000
    ];

    public function save()
    {
      dd( $this->range);
    }
    public function render()
    {
        return view('livewire.double-range-slider.list-content');
    }
}
