<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        $data = [
            'title' => 'Products',
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'products' =>Product::all(),
        ];
        return view('admin.products', $data);
    }

    public function addProduct(){
        $data = [
            'title' => 'Products',
            'categories' => Category::all(),
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
        ];
        return view('admin.add.addproduct', $data);
    }
    
    public function saveProduct(Request $req){
        // return $req->file('product_img')->getClientOriginalName();
        $req->validate([
            'product_img' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'qty' => 'required',
            'category_id' => 'required',
        ]);

        $product = new Product;

        $img_destination = "images/instruments";
        $image = $req->file('product_img')->getClientOriginalName();
        $req->product_img->move(public_path($img_destination), $image);

        $product->product_img = $image;
        $product->product_name = $req->product_name;
        $product->product_price = $req->product_price;
        $product->brand = $req->brand;
        $product->body_material = $req->body_material;
        $product->color = $req->color;
        $product->description = $req->description;
        $product->qty = $req->qty;
        $product->category_id = $req->category_id;

        $save = $product->save();

        if($save){
            return redirect('admin/products')->with('success', 'Product Added !!');
        }else{
            return back()->with('fail', 'Something went Wrong, Please try again later');
        }

    }

    public function editProduct($id){
        $data = [
            'title' => 'Products',
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'product' => Product::find($id),
        ];
        return view('admin.edit.editproduct', $data);
    }

    public function updateProduct(Request $req, Product $product){
        // return $req->file('product_img')->getClientOriginalName();
        $mods = $req->validate([
            'product_img' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'qty' => 'required',
        ]);
        $img_destination = "images/instruments";
        if($req->has('product_img')){
            $image = $mods['product_img'] = $req->file('product_img')->getClientOriginalName();
            $req->product_img->move(public_path($img_destination), $image);
        }

        $product->update($mods);

        return redirect('admin/products')->with('success', 'Product Updated !!');
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $res = $product->delete();
        if($res){
            return redirect('admin/products')->with('success', 'Product deleted Successfully');
        }else{
            return back()->with('fail', 'Something Went Wrong');
        }
    }
}
