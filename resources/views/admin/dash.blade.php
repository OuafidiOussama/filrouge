@extends('admin.layout')

@section('admin')
<section class="relative top-0 w-4/5 h-screen overflow-auto scrollbar-none bg">
    <h1 class="px-5 py-2 text-4xl font-bold">Dashboard</h1>
    <div class="grid grid-cols-3 gap-10 py-4 px-10">
        <a href="/admin/products">
            <div class="group hover:scale-110 transition-all px-5 flex h-20 w-64 items-center justify-start gap-10 bg-red-400 drop-shadow-lg rounded-xl">
                <div class="bg-red-200 rounded-full h-16 w-16 text-3xl font-semibold flex justify-center items-center">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="flex flex-col h-full justify-center">
                    <p class="text-white opacity-70 font-semibold">Products</p>
                    <span class="font-bold text-4xl">{{$pro_count}}</span>
                </div>
            </div>
        </a>
        <a href="">
            <div class="group hover:scale-110 transition-all px-5 flex h-20 w-64 items-center justify-start gap-10 bg-red-400 drop-shadow-lg rounded-xl">
                <div class="bg-red-200 rounded-full h-16 w-16 text-3xl font-semibold flex justify-center items-center">
                    <i class="fa-solid fa-calendar"></i>
                </div>
                <div class="flex flex-col h-full justify-center">
                    <p class="text-white opacity-70 font-semibold">Events</p>
                    <span class="font-bold text-4xl">300</span>
                </div>
            </div>
        </a>
        <a href="">
            <div class="group hover:scale-110 transition-all px-5 flex h-20 w-64 items-center justify-start gap-10 bg-red-400 drop-shadow-lg rounded-xl">
                <div class="bg-red-200 rounded-full h-16 w-16 text-3xl font-semibold flex justify-center items-center">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="flex flex-col h-full justify-center">
                    <p class="text-white opacity-70 font-semibold">Users</p>
                    <span class="font-bold text-4xl">{{$user_count}}</span>
                </div>
            </div>
        </a>
        <a href="">
            <div class="group hover:scale-110 transition-all px-5 flex h-20 w-64 items-center justify-start gap-10 bg-red-400 drop-shadow-lg rounded-xl">
                <div class="bg-red-200 rounded-full h-16 w-16 text-3xl font-semibold flex justify-center items-center">
                    <i class="fa-solid fa-cash-register"></i>
                </div>
                <div class="flex flex-col h-full justify-center">
                    <p class="text-white opacity-70 font-semibold">orders</p>
                    <span class="font-bold text-4xl">300</span>
                </div>
            </div>
        </a>
        <a href="">
            <div class="group hover:scale-110 transition-all px-5 flex h-20 w-64 items-center justify-start gap-10 bg-red-400 drop-shadow-lg rounded-xl">
                <div class="bg-red-200 rounded-full h-16 w-16 text-3xl font-semibold flex justify-center items-center">
                    <i class="fa-regular fa-comment"></i>
                </div>
                <div class="flex flex-col h-full justify-center">
                    <p class="text-white opacity-70 font-semibold">comments</p>
                    <span class="font-bold text-4xl">300</span>
                </div>
            </div>
        </a>
        <a href="/admin/categories">
            <div class="group hover:scale-110 transition-all px-5 flex h-20 w-64 items-center justify-start gap-10 bg-red-400 drop-shadow-lg rounded-xl">
                <div class="group/item bg-red-200 rounded-full h-16 w-16 text-3xl font-semibold flex justify-center items-center">
                    <i class="fa-solid fa-chart-pie"></i>
                </div>
                <div class="flex flex-col h-full justify-center group/item">
                    <p class="text-white opacity-70 font-semibold">Categories</p>
                    <span class="font-bold text-4xl">{{$cat_count}}</span>
                </div>
            </div>
        </a>
    </div>
    
</section>   
@endsection