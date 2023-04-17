<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    //login check
    public function check(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $userInfo = User::where('email', '=', $request->email )->first();

        if(!$userInfo){
            return back()->with('fail', 'No user corespond to this email');
        }else{

            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('/');
            }else{
                return back()->with('fail', 'Invalid password');
            }
        }
    }

    public function login(){
        $data = [
            'title' => 'LOGIN'
        ];
        return view('auth.login',$data);
    }

    public function register(){
        $data = [
            'title' => 'REGISTER'
        ];
        return view('auth.register',$data);
    }

    public function save(Request $request){
        $request->validate([
            'full_name' => 'required',
            'mobile' => 'required',
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        $user = new User;

        $user->full_name = $request->full_name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $save = $user->save();

        if($save){
            return redirect('login')->with('success', 'You have been registered successfully');
        }else{
            return back()->with('fail', 'Something went Wrong, Please try again later');
        }
    }

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }
}
