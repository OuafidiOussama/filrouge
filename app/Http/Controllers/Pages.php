<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Admin;
use App\Models\Event;
use App\Models\Product;
use App\Models\Category;


class Pages extends Controller
{
    public function home(){
        $data =[
            'LoggedUser' => User::where('id', '=', session('LoggedUser'))->first(),
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'nbr' => Cart::count(),
            'title' => 'FLAMENGNAWA'
        ];
        return view('pages.home', $data);
    }

    public function shop(){
        $data = [
            'LoggedUser' => User::where('id','=', session('LoggedUser'))->first(),
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'products' => Product::paginate(9),
            'categories' => Category::all(),
            'nbr' => Cart::count(),
            'title' => 'SHOP'
        ];
        return view('pages.shop', $data);
    }

    public function product($id){
        $data = [
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'LoggedUser' => User::where('id','=', session('LoggedUser'))->first(),
            'product' => Product::find($id),
            'nbr' => Cart::count(),
            'title' => Product::find($id)->product_name
        ];
        return view('pages.product', $data);
    }

    public function events(){
        $data = [
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'LoggedUser' => User::where('id','=', session('LoggedUser'))->first(),
            'nbr' => Cart::count(),
            'events' => Event::all(),
            'title' => 'EVENTS'
        ];
        return view('pages.events', $data);
    }

    public function hireUs(){
        $data = [
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'LoggedUser' => User::where('id','=', session('LoggedUser'))->first(),
            'nbr' => Cart::count(),
            'title' => 'HIRE US'
        ];
        return view('pages.hireus', $data);
    }

    public function profil(){
        $data = [
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'LoggedUser' => User::where('id','=', session('LoggedUser'))->first(),
            'nbr' => Cart::count(),
            'title' => 'PROFIL'
        ];
        return view('pages.profil', $data);
    }
}
