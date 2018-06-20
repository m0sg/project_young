<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Advantages;
use App\Products;
use App\Reviews;
use App\Sliders;

class IndexController extends Controller
{

    public function execute(Request $request)
    {

        $abouts = about::all();
        $advantages = advantages::all();
        $products = products::all();
        $reviews = reviews::all();
        $sliders = sliders::all();





        return view('site.index');
    }

}
