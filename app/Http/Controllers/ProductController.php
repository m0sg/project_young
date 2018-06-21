<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    //
    public function execute($alias)
    {

        if (!$alias) {
            abort(404);
        }

        if (view()->exists('site.product')) {


            $menu = array();

            $item = array('title' => 'Главная', 'alias' => 'home');
            array_push($menu, $item);
            $item = array('title' => 'О программе', 'alias' => 'about');
            array_push($menu, $item);
            $item = array('title' => 'Преимущества', 'alias' => 'advantages');
            array_push($menu, $item);
            $item = array('title' => 'Продукты', 'alias' => 'products');
            array_push($menu, $item);
            $item = array('title' => 'Контакты', 'alias' => 'contact');
            array_push($menu, $item);


            $product = Products::where('alias', strip_tags($alias))->first();
            $data = [
                'title' => $product->name,
                'product' => $product,







                'menu' => $menu

            ];

            return view('site.product', $data);
        }
        else {
            abort(404);
        }
    }
}
