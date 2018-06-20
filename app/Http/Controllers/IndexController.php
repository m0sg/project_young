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

        $menu = array();

        $item = array('title'=>'Главная', 'alias'=>'home');
        array_push($menu, $item);
        $item = array('title'=>'О программе', 'alias'=>'about');
        array_push($menu, $item);
        $item = array('title'=>'Преимущества', 'alias'=>'advantages');
        array_push($menu, $item);
        $item = array('title'=>'Продукты', 'alias'=>'products');
        array_push($menu, $item);
        $item = array('title'=>'Контакты', 'alias'=>'contact');
        array_push($menu, $item);

        return view('site.index', array(
            'menu'=>$menu,
            'abouts'=>$abouts,
            'advantages'=>$advantages,
            'products'=>$products,
            'reviews'=>$reviews,
            'sliders'=>$sliders,
        ));
    }

}
