@extends('pages.layout')

@section('content')
<form action="/addToCart" method="POST" enctype="multipart/form-data">
    @csrf
<section class="w-screen flex px-5 py-20 relative gap-10">
    <div class="w-8/12 h-[800px] overflow-none border-2 p-3 rounded-xl flex">
        <div class="w-[600px]">
            <input type="hidden" name="product_id" value={{$product->id}}>
            <input type="hidden" name="product_img" value={{$product->product_img}}>
            <img src="{{asset ('images/instruments/' .$product->product_img)}}" alt="" class="w-full h-full object-contain">

        </div>
        <div class="w-full pt-3 pl-5 relative">
            <input type="hidden" name="product_name" value="{{$product->product_name}}">
            <h2 class="text-4xl font-semibold text-center pb-10 ">{{$product->product_name}}</h2>
            <ul class="relative left-0 px-10">
                <div class="flex pb-3">
                    <span class="text-xl font-bold pr-10 w-32">Brand</span><li class="text-xl"> {{$product->brand}}</li>

                </div>
                <div class="flex pb-3">
                    <span class="text-xl font-bold pr-10 w-32">Color</span><li class="text-xl"> {{$product->color}}</li>

                </div>
                <div class="flex pb-3">
                    <span class="text-xl font-bold pr-10 w-32">Body Material</span><li class="text-xl">{{$product->body_material}}</li>

                </div>
            </ul>

            <h3 class="text-3xl font-semibold text-center py-5">More Details</h3>
            <textarea class="px-5 w-full h-1/2 resize-none outline-none" readonly>{{$product->description}}</textarea>
        </div>
    </div>
    <aside class="left-2/3 border-2 mr-5 rounded-xl w-4/12 h-max p-5 bg-gray-200">
        <input type="hidden" name="product_price" value="{{$product->product_price}}">
        <h1 class="text-4xl font-extrabold pb-5 text-red-600">${{$product->product_price}}</h1>
        <p class="text-md pb-10">No fees and shipping free of charge</p>
        <div class="w-full flex flex-col gap-3 pb-10">
            @if($product->qty == 0)
            <span class="text-center"><button class="rounded-full bg-gray-600 hover:bg-gray-800 text-white w-full px-5 py-2 cursor-not-allowed" disabled>ADD TO CART</button></span>
            <span class="text-center"><button class="rounded-full bg-gray-600 hover:bg-gray-800 text-white w-full px-5 py-2 cursor-not-allowed" disabled>BUY NOW</button></span>
            @else
            <span class="text-center"><button class="rounded-full bg-red-600 hover:bg-red-800 text-white w-full px-5 py-2">ADD TO CART</button></span>
            <span class="text-center"><button class="rounded-full bg-red-600 hover:bg-red-800 text-white w-full px-5 py-2">BUY NOW</button></span>
            @endif
        </div>
        <p class="text-xl font-semibold pb-5">Category :
            <span class=" text-xl font-semibold hover:underline">{{$product->category->category_name}}</span>
        </p>
        <p class="text-xl font-semibold pb-5">Status : 
            @if($product->qty == 0)
            <span class="text-red-500 text-xl font-semibold">Out-Of-Stock</span>
            @else
            <span class="text-green-500 text-xl font-semibold">In-Stock</span>
            @endif
        </p>
        <h2 class="text-xl font-semibold pb-3">Shipping details</h2>
        <div class="pl-10 ">
            <div class="flex pb-3">
                <p class="w-32 text-md font-medium">Ships From  </p> <span>FLAMENGNAWA</span>
            </div>
            <div class="flex pb-3">
                <p class="w-32 text-md font-medium">Sold By  </p> <span>FLAMENGNAWA</span>
            </div>
            <div class="flex pb-3">
                <p class="w-32 text-md font-medium">Returns </p> <span>Withing 7 days of delevery</span>
            </div>
        </div>
    </aside>

</section>
</form>
@endsection