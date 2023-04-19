<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;

class CartController extends Controller
{
    public function cart(){
        $data = [
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'LoggedUser' => User::where('id','=', session('LoggedUser'))->first(),
            'title' => 'Cart',
            'nbr' => Cart::count(),
            'items' => Cart::all()
        ];
        return view('pages.cart', $data);
    }

    public function addToCart(Request $req){
        $get = DB::table('Carts')->where('product_id', $req->product_id)->get();
        // $get = Cart::where('product_id', $req->product_id);
        if(count($get) > 0 ){
            return redirect('cart')->with('err', 'Product Already in your Cart');
        } else {
            $cart = new Cart;
    
            $cart->product_name = $req->product_name;
            $cart->product_img = $req->product_img;
            $cart->product_price = $req->product_price;
            $cart->product_id = $req->product_id;
            $cart->user_id = Session('LoggedUser');
    
            $save = $cart->save();
    
            if($save){
                return redirect('cart')->with('success', 'Product Added !!');
            }else{
                return back()->with('fail', 'Something went Wrong, Please try again later');
            }
        }

    }

    public function deleteFromCart($id){
        $item = Cart::find($id);
        $res = $item->delete();
        if($res){
            return redirect('cart')->with('success', 'Product deleted Successfully');
        }else{
            return back()->with('fail', 'Something Went Wrong');
        }
    }
}
