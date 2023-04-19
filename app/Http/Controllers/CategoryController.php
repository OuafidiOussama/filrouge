<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(){
        $data =[
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'title' => 'Categories',
            'categories' => Category::all()
        ];
        return view('admin.categories', $data);
    }

    public function addCategory(){
        $data = [
            'title' => 'Add Category',
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
        ];
        return view('admin.add.addcategory', $data);
    }
    
    public function saveCategory(Request $req){
        // return $req->file('product_img')->getClientOriginalName();
        $req->validate([
            'category_img' => 'required',
            'category_name' => 'required',
            'category_desc' => 'required',
        ]);

        $category = new Category;

        $img_destination = "images/categories";
        $image = $req->file('category_img')->getClientOriginalName();
        $req->category_img->move(public_path($img_destination), $image);

        $category->category_img = $image;
        $category->category_name = $req->category_name;
        $category->category_desc = $req->category_desc;

        $save = $category->save();

        if($save){
            return redirect('admin/categories')->with('success', 'Category Added !!');
        }else{
            return back()->with('fail', 'Something went Wrong, Please try again later');
        }

    }

    public function editCategory($id){
        $data = [
            'title' => 'Edit' . Category::find($id)->category_name,
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'category' => Category::find($id),
        ];
        return view('admin.edit.editcategory', $data);
    }

    public function updateCategory(Request $req, Category $cat){
        // return $req->file('product_img')->getClientOriginalName();
        $mods = $req->validate([
            'category_img' => 'required',
            'category_name' => 'required',
            'category_desc' => 'required',
        ]);
        $img_destination = "images/categories";
        if($req->has('category_img')){
            $image = $mods['category_img'] = $req->file('category_img')->getClientOriginalName();
            $req->category_img->move(public_path($img_destination), $image);
        }

        $cat->update($mods);

        return redirect('admin/categories')->with('success', 'Category Updated !!');
    }

    public function deleteCategory($id){
        $product = Category::find($id);
        $res = $product->delete();
        if($res){
            return redirect('admin/categories')->with('success', 'Category deleted Successfully');
        }else{
            return back()->with('fail', 'Something Went Wrong');
        }
    }
}
