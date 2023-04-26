@extends('pages.layout')

@section('content')
<h1 class="pt-10 text-center text-5xl font-bold">SHOP</h1>
<div class="flex px-5 py-10">
    <section class="w-9/12 grid grid-cols-3 gap-4 pr-5 ">
        @foreach($products as $product)
        <div class="w-[300px] h-max overflow-none border-2 p-3 rounded-xl">
            <a href="/shop/product/{{$product->id}}">
                <img src="{{asset ('images/instruments/' . $product->product_img)}}" alt="" class="w-[300px] h-[300px] object-cover">
            </a>
            <div class="pt-3 text-center group">
                <h2 class="text-xl font-semibold">{{$product->product_name}}</h2>
                <p class="pb-3">Price: ${{$product->product_price}}</p>
                <span class="px-5 invisible group-hover:visible"><button class="rounded-full bg-red-600 hover:bg-red-800 text-white w-[200px] px-5 py-2">View More</button></span>
            </div>
        </div>
        @endforeach
    </section>
    
    <x-categories :categories="$categories" :products="$products"/>

    
</div>
@endsection