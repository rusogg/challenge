<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discounts;

class DiscountsController extends Controller
{
    public function principal()
    {
        
        return view('principal');
    }
}
