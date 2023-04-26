<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
use PhpParser\Node\Stmt\Catch_;

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
            $cart->ordered_qty = 1;
            $cart->product_total = $cart->ordered_qty * $cart->product_price;

            $save = $cart->save();
    
            if($save){
                return redirect('cart')->with('success', 'Product Added !!');
            }else{
                return back()->with('fail', 'Something went Wrong, Please try again later');
            }
        }

    }

    public function updateCart(Request $req){
        // $len = Cart::count();
        
        // $cart->where('id', 'item_id')->update([
        //     $cart->ordered_qty = $req->ordered_qty,
        //     $cart->product_total = $req->product_total,
        //     $cart->sub_total = $req->sub_total,
        //     $cart->grand_total = $req->grand_total
        // ]);

        $carts = Cart::all();

        // dd($req->all());

        //dd($cart[0]->id);

        foreach ($carts as $key => $cart) {
            // print_r($memeber);
            
            $cart->update([
                $cart->ordered_qty = $req->ordered_qty[$key],
                $cart->product_total = trim( $req->product_total[$key], '$'),
                $cart->sub_total = trim($req->sub_total, '$'),
                $cart->grand_total = trim($req->grand_total, '$')
            ]);
            // $band->bandMemebers()->update($data);
        }

        return redirect('cart')->with('success', 'Product Updated !!');
    }

    public function deleteFromCart($id){
        $item = Cart::find($id);
        dd($item);
        $res = $item->delete();
        if($res){
            return redirect('cart')->with('success', 'Product deleted Successfully');
        }else{
            return back()->with('fail', 'Something Went Wrong');
        }
    }
}
