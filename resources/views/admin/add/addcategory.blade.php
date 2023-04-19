@extends('admin.layout')

@section('admin')
    <section class="relative top-0 w-4/5 h-screen overflow-auto scrollbar-none bg">
        <h1 class="px-5 py-2 text-4xl font-bold">Add Category</h1>
        <div class="py-5">
           <form action="/saveCategory" class="h-full w-full flex flex-col items-center" method="POST" enctype="multipart/form-data">
            @csrf
                <label class="text-lg font-medium opacity-70">Category Image</label>
                <input type="file" name="category_img" class="cursor-pointer border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                @error('category_img')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <label class="text-lg font-medium opacity-70">Category Name</label>
                <input type="text" name="category_name" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                @error('category_name')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <label class="text-lg font-medium opacity-70">Category Description</label>
                <input type="text" name="category_desc" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                @error('category_desc')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <button class="rounded-full bg-red-600 hover:bg-red-500 group text-white w-[150px] py-2 transition-all hover:shadow-sm hover:shadow-black">
                    <i class="fa-solid fa-check group/item group-hover:text-green-500 transition-all"></i> 
                    <span class="group/item group-hover:text-green-400 transition-all">Add Category</span>
                </button>
           </form>
        </div>
    </section>
@endsection