@extends('pages.layout')

@section('content')
<h1 class="pt-10 text-center text-5xl font-bold">Cart</h1>
@if(Session::get('err'))
<div class="relative mt-5 top-0 w-full bg-red-300 h-10 flex justify-center items-center rounded-xl">
    {{Session::get('err')}}
</div>
@endif

<div class="flex px-5 py-10 gap-20">
        
        <div class="w-8/12 h-screen overflow-none border-2 rounded-xl overflow-y-auto scrollbar-none ">
            @foreach($items as $item)
            <div class="allItems flex p-5 relative">
                <div class="absolute top-1 right-3">
                    <form action="/deleteFromCart/{{$item->id}}" method="POST" class="mt-3">
                        @csrf
                        @method('DELETE')
                        <button><i class="fa-regular fa-circle-xmark hover:bg-red-400 rounded-full"></i></button>
                      </form>
                </div>
                <img src="{{asset('images/instruments/'. $item->product_img)}}" alt="" class="w-[200px] h-[200px] object-contain">
                <div class="grid grid-cols-2 grid-rows-2 w-3/4 py-5 px-10 "> 
                    <div>
                        <h2 class="text-3xl font-semibold">{{$item->product_name}}</h2>
                        <div class="relative">
                            <span class="text-gray-700 text-sm opacity-50 font-medium">unit:</span>
                            <span class="unitPrice text-gray-700 text-sm opacity-50 font-medium" id="unit">${{$item->product_price}}</span>
                        </div>
                    </div>   
                    <span class="priceSub text-right text-3xl font-bold" id="unitsub"></span>
                    {{-- counter --}}
                    <div class="custom-number-input h-10 w-32">
                        <label for="custom-input-number" class="w-full text-gray-700 text-sm font-semibold">Quantity
                        </label>
                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                          <button class=" minus bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                            <span class="m-auto text-2xl font-thin">−</span>
                          </button>
                          <input type="number" readonly min="1" value="1" class="quantite outline-none focus:outline-none text-center w-full font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700" name="qty" id="qty" value="0">
                        <button class="plus bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                          <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                      </div>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
        </div>

        <aside class="w-4/12 h-max border-2 rounded-xl px-5 py-5 flex flex-col">
            <div class="w-full relative">
                <p class="text-xl font-bold pb-3">SubTotal :</p>
                <p class="absolute right-0 text-xl font-bold top-0 subtotal" id="prixTotal"></p>
            </div>
            <div class="w-full relative pl-5 opacity-40">
                <p class="text-md font-medium pb-3">Shipping :</p>
                <p class="absolute right-0 text-md font-medium top-0">--</p>
            </div>
            <div class="w-full relative pl-5 opacity-40">
                <p class="text-md font-medium pb-3">Tax :</p>
                <p class="absolute right-0 text-md font-medium top-0">--</p>
            </div>
            <div class="w-full relative mt-14">
                <p class="text-3xl font-bold pb-3">GrandTotal :</p>
                <p class="absolute right-0 text-3xl font-bold top-0" id="grandTotal"></p>
            </div>
            <div>
                <button class="rounded-full bg-red-600 hover:bg-red-800 text-white w-full px-5 py-2 drop-shadow-lg">Check Out</button>
            </div>
        </aside>
</div>

@endsection