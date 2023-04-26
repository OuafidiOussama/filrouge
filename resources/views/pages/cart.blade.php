@extends('pages.layout')

@section('content')
<h1 class="pt-10 text-center text-5xl font-bold">Cart</h1>
@if(Session::get('err'))
<div class="relative mt-5 top-0 w-full bg-red-300 h-10 flex justify-center items-center rounded-xl">
    {{Session::get('err')}}
</div>
@endif

<form action="checkout" method="Post" enctype="multipart/form-data">
    @csrf
<div class="flex py-10 px-10 gap-10">
        
        <div class="w-8/12 h-screen overflow-none border-2 rounded-xl overflow-y-auto scrollbar-none ">
            <x-product-card :items="$items"/>
        </div>
        <aside class="w-4/12 h-max border-2 rounded-xl px-5 py-5 flex flex-col">
            <div class="w-full relative">
                <p class="text-xl font-bold pb-3">SubTotal :</p>
                <input name="sub_total" readonly class="outline-none absolute w-20 bg-transparent right-0 text-xl font-bold top-0 subtotal" id="prixTotal">
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
                <input name="grand_total" readonly class="outline-none absolute w-20 bg-transparent right-0 text-3xl font-bold top-0" id="grandTotal">
            </div>
            <div>
                {{-- <button type="submit" class="mb-3 rounded-full bg-red-600 hover:bg-red-800 text-white w-full px-5 py-2 drop-shadow-lg" >Calculate</button> --}}
                <button class="rounded-full bg-red-600 hover:bg-red-800 text-white w-full px-5 py-2 drop-shadow-lg">Check Out</button>
            </div>
        </aside>
    </div>
    </form>


@endsection