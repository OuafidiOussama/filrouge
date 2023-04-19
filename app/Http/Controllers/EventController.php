<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function events(){
        $data = [
            'title' => 'Events',
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
        ];
        return view('admin.events', $data);
    }
}
