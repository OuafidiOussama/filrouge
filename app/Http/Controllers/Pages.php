<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;


class Pages extends Controller
{
    public function home(){
        $data =[
            'LoggedUser' => User::where('id', '=', session('LoggedUser'))->first(),
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'title' => 'FLAMENGNAWA'
        ];
        return view('pages.home', $data);
    }

    public function shop(){
        $data = [
            'LoggedUser' => User::where('id','=', session('LoggedUser'))->first(),
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'title' => 'SHOP'
        ];
        return view('pages.shop', $data);
    }

    public function product(){
        $data = [
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'LoggedUser' => User::where('id','=', session('LoggedUser'))->first(),
            'title' => 'SHOP'
        ];
        return view('pages.product', $data);
    }

    public function events(){
        $data = [
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'LoggedUser' => User::where('id','=', session('LoggedUser'))->first(),
            'title' => 'EVENTS'
        ];
        return view('pages.events', $data);
    }

    public function hireUs(){
        $data = [
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'LoggedUser' => User::where('id','=', session('LoggedUser'))->first(),
            'title' => 'HIRE US'
        ];
        return view('pages.hireus', $data);
    }

    public function profil(){
        $data = [
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'LoggedUser' => User::where('id','=', session('LoggedUser'))->first(),
            'title' => 'PROFIL'
        ];
        return view('pages.profil', $data);
    }
}
