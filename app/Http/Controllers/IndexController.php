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

        if ($request->isMethod('post')) {

            $messages = [

                'required' => "Поле :attribute обязательно к заполнению",
                'email' => "Поле :attribute должно соответствовать email адресу"

            ];

            $this->validate($request, [

                'name' => 'required|max:255',
                'email' => 'required|email',
                'text' => 'required'

            ], $messages);


            $data = $request->all();

            $result = Mail::send('site.email', ['data' => $data], function ($message) use ($data) {

                $mail_admin = env('MAIL_ADMIN');

                $message->from($data['email'], $data['name']);
                $message->to($mail_admin, 'Mr. Admin')->subject('Question');


            });

            if ($result) {
                return redirect()->route('home')->with('status', 'Email is send');
            }

            //mail


        }


        $abouts = about::all();
        $advantages = advantages::all();
        $products = products::all();
        $reviews = reviews::all();
        $sliders = sliders::all();

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

        return view('site.index', array(
            'menu' => $menu,
            'abouts' => $abouts,
            'advantages' => $advantages,
            'products' => $products,
            'reviews' => $reviews,
            'sliders' => $sliders,
        ));
    }

}
