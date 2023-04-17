@extends('pages.layout')

@section('content')
<h1 class="pt-10 text-center text-5xl font-bold">SHOP</h1>
<div class="flex px-5 py-10">
    <section class="w-9/12 grid grid-cols-3 gap-4 pr-5 ">
        <div class="w-[300px] h-max overflow-none border-2 p-3 rounded-xl">
                <a href="/product">
                    <img src="{{asset ('images/instruments/acoustic1.png')}}" alt="" class="w-[300px] h-[300px] object-cover">
                </a>
                <div class="pt-3 text-center group">
                    <h2 class="text-xl font-semibold">Acoustic guitar</h2>
                    <p class="pb-3">Price: 300$</p>
                    <span class="px-5 invisible group-hover:visible"><button class="rounded-full bg-red-600 hover:bg-red-800 text-white w-[200px] px-5 py-2">Add To Cart</button></span>
                </div>
            </div>
        <div class="w-[300px] h-max overflow-none border-2 p-3 rounded-xl">
            <img src="{{asset ('images/instruments/bass1.png')}}" alt="" class="w-[300px] h-[300px] object-cover">
            <div class="pt-3 text-center group">
                <h2 class="text-xl font-semibold">Acoustic guitar</h2>
                <p class="pb-3">Price: 300$</p>
                <span class="px-5 invisible group-hover:visible"><button class="rounded-full bg-red-600 hover:bg-red-800 text-white w-[200px] px-5 py-2">Add To Cart</button></span>
            </div>
        </div>
        <div class="w-[300px] h-max overflow-none border-2 p-3 rounded-xl">
            <img src="{{asset ('images/instruments/bass2.png')}}" alt="" class="w-[300px] h-[300px] object-cover">
            <div class="pt-3 text-center group">
                <h2 class="text-xl font-semibold">Acoustic guitar</h2>
                <p class="pb-3">Price: 300$</p>
                <span class="px-5 invisible group-hover:visible"><button class="rounded-full bg-red-600 hover:bg-red-800 text-white w-[200px] px-5 py-2">Add To Cart</button></span>
            </div>
        </div>
        <div class="w-[300px] h-max overflow-none border-2 p-3 rounded-xl">
            <img src="{{asset ('images/instruments/bass3.png')}}" alt="" class="w-[300px] h-[300px] object-cover">
            <div class="pt-3 text-center group">
                <h2 class="text-xl font-semibold">Acoustic guitar</h2>
                <p class="pb-3">Price: 300$</p>
                <span class="px-5 invisible group-hover:visible"><button class="rounded-full bg-red-600 hover:bg-red-800 text-white w-[200px] px-5 py-2">Add To Cart</button></span>
            </div>
        </div>

    </section>


    <aside class="w-3/12 border-2 rounded-xl px-5 py-2 flex flex-col items-center">
        <span class="text-xl font-semibold pb-3">Categories</span>
        <ul class="w-full flex flex-col gap-3">
            <div class="relative overflow-hidden py-5 bg-red-500 rounded-xl">
                <li class=" text-center text-2xl tracking-widest font-extrabold text-white">Guitars</li>
                <img src="{{asset('images/categories/guitar.png')}}" alt="" class="absolute -top-2 -left-10 opacity-25 w-32">
            </div>

            <div class="relative overflow-hidden py-5 bg-red-500 rounded-xl">
                <li class=" text-center text-2xl tracking-widest font-extrabold text-white">Violins</li>
                <img src="{{asset('images/categories/voilin.png')}}" alt="" class="absolute -top-2 -left-10 opacity-25 w-32">
            </div>

            <div class="relative overflow-hidden py-5 bg-red-500 rounded-xl">
                <li class=" text-center text-2xl tracking-widest font-extrabold text-white">Keyboards</li>
                <img src="{{asset('images/categories/keyboard.png')}}" alt="" class="absolute -top-2 -left-10 opacity-25 w-32">
            </div>

            <div class="relative overflow-hidden py-5 bg-red-500 rounded-xl">
                <li class=" text-center text-2xl tracking-widest font-extrabold text-white">Drums</li>
                <img src="{{asset('images/categories/drum-set.png')}}" alt="" class="absolute -top-2 -left-10 opacity-25 w-32">
            </div>      
        </ul>
    </aside>
</div>
@endsection