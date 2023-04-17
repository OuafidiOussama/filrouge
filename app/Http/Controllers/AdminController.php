<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(){
        $data =[
            'title' => 'ADMIN'
        ];
        return view('auth.adm-login', $data);
    }

    public function admCheck(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admInfo = Admin::where('email', '=', $request->email )->first();

        if(!$admInfo){
            return back()->with('fail', 'No Admin    corespond to this email');
        }else{

            if(Hash::check($request->password, $admInfo->password)){
                $request->session()->put('LoggedAdm', $admInfo->id);
                return redirect('admin/dash');
            }else{
                return back()->with('fail', 'Invalid password');
            }
        }
    }

    public function admLogout(){
        if(session()->has('LoggedAdm')){
            session()->pull('LoggedAdm');
            return redirect('/');
        }
    }

    public function dash(){
        $data = [
            'title' => 'Dashboard',
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
        ];
        return view('admin.dash', $data);
    }
}
