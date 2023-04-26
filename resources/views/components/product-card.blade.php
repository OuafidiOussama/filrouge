@props(['items'])

@foreach($items as $item)
<div class="allItems flex p-5 relative">
    <div class="absolute top-1 right-3">
        {{-- <form method="POST" class="mt-3">
            @csrf
            @method('DELETE')
            <button formaction="/deleteFromCart/{{$item->id}}"><i class="fa-regular fa-circle-xmark hover:bg-red-400 rounded-full"></i></button>
        </form> --}}
        <button {{URL('/deleteFromCart/' . $item->id)}}><i class="fa-regular fa-circle-xmark hover:bg-red-400 rounded-full"></i></button>
    </div>
    {{-- <input type="hidden" name="item_id[]" value="{{$item->id}}"> --}}
        <img src="{{asset('images/instruments/'. $item->product_img)}}" alt="" class="w-[200px] h-[200px] object-contain">
        <div class="grid grid-cols-2 grid-rows-2 w-3/4 py-5 px-10 relative"> 
            <div>
                <h2 class="text-3xl font-semibold">{{$item->product_name}}</h2>
                <div class="relative">
                    <span class="text-gray-700 text-sm opacity-50 font-medium">unit:</span>
                    <span class="unitPrice text-gray-700 text-sm opacity-50 font-medium" id="unit">${{$item->product_price}}</span>
                </div>
            </div>   
            <input name="product_total[]" class="relative priceSub text-right text-3xl font-bold -top-6" id="unitsub" readonly>
            
            {{-- <span class="text-right text-3xl font-bold">${{$item->product_total}}</span> --}}
            {{-- counter --}}
            <div class="custom-number-input h-10 w-40">
                <label for="custom-input-number" class="w-full text-gray-700 text-sm font-semibold">Quantity
                </label>
                <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                <button type="button" class=" minus bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                    <span class="m-auto text-2xl font-thin">−</span>
                </button>
                <input type="number" readonly min="1" value="1" class="quantite outline-none focus:outline-none text-center w-full font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700" name="ordered_qty[]" id="qty" value="0">
                <button type="button" class="mr-4 plus bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                <span class="m-auto text-2xl font-thin">+</span>
                </button>
                {{-- <div class="">
                    <button class="rounded-full bg-red-600 hover:bg-red-800 text-white w-max px-5 py-2 drop-shadow-lg">
                        <i class="fa-solid fa-calculator"></i>
                    </button>
                </div> --}}
            </div>
        </div>
</div>
</div>
<hr>

@endforeach