<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Discounts;
use App\Models\Discount_ranges;

class ListDiscounts extends Component
{
    public function render()
    {
        $datos = Discounts::orderBy('id', 'desc')->paginate(3);
        return view('livewire.list-discounts', compact('datos'));
    }
}
