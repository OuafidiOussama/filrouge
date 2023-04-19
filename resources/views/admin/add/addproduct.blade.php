@extends('admin.layout')

@section('admin')
    <section class="relative top-0 w-4/5 h-screen overflow-auto scrollbar-none bg">
        <h1 class="px-5 py-2 text-4xl font-bold">Add Product</h1>
        <div class="py-5">
           <form action="/saveProduct" class="h-full w-full flex flex-col items-center" method="POST" enctype="multipart/form-data">
            @csrf
                <label class="text-lg font-medium opacity-70">Product Image</label>
                <input type="file" name="product_img" class="cursor-pointer border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                @error('product_img')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <label class="text-lg font-medium opacity-70">Product Name</label>
                <input type="text" name="product_name" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                @error('product_name')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <label class="text-lg font-medium opacity-70">Product Price</label>
                <input type="number" name="product_price" min="1" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                @error('product_price')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <label class="text-lg font-medium opacity-70">Product Brand</label>
                <input type="text" name="brand" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">

                <label class="text-lg font-medium opacity-70">Product Material</label>
                <input type="text" name="body_material" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">

                <label class="text-lg font-medium opacity-70">Product Color</label>
                <input type="text" name="color" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">

                <label class="text-lg font-medium opacity-70">Description</label>
                <textarea name="description" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent"></textarea>

                <label class="text-lg font-medium opacity-70">Quantity</label>
                <input type="number" min="1" name="qty" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">

                <label class="text-lg font-medium opacity-70">Category</label>
                <select name="category_id" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>

                <button class="rounded-full bg-red-600 hover:bg-red-500 group text-white w-[150px] py-2 transition-all hover:shadow-sm hover:shadow-black">
                    <i class="fa-solid fa-check group/item group-hover:text-green-500 transition-all"></i> 
                    <span class="group/item group-hover:text-green-400 transition-all">Add Product</span>
                </button>
           </form>
        </div>
    </section>
@endsection