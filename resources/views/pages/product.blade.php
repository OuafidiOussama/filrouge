@extends('pages.layout')

@section('content')
<section class="w-screen flex px-5 py-20 relative gap-10">
    <div class="w-8/12 h-[800px] overflow-none border-2 p-3 rounded-xl flex">
        <div class="w-[600px]">
            <img src="{{asset ('images/instruments/acoustic1.png')}}" alt="" class="w-full h-full object-contain">

        </div>
        <div class="w-full pt-3 pl-5 relative">
            <h2 class="text-4xl font-semibold text-center pb-10 ">Acoustic guitar</h2>
            <ul class="relative left-0 px-10">
                <div class="flex pb-3">
                    <span class="text-xl font-bold pr-10 w-32">Brand</span><li class="text-xl"> Yamaha</li>

                </div>
                <div class="flex pb-3">
                    <span class="text-xl font-bold pr-10 w-32">Color</span><li class="text-xl"> Beige</li>

                </div>
                <div class="flex pb-3">
                    <span class="text-xl font-bold pr-10 w-32">Body Material</span><li class="text-xl">Wood</li>

                </div>
                <div class="flex pb-3">
                    <span class="text-xl font-bold pr-10 w-32">Strings</span><li class="text-xl">Nylon</li>

                </div>
                <div class="flex pb-3">
                    <span class="text-xl font-bold pr-10 w-32">Hand</span><li class="text-xl">Right</li>

                </div>
                <div class="flex pb-3">
                    <span class="text-xl font-bold pr-10 w-32">Guitar Bridge</span><li class="text-xl">Fixed</li>

                </div>
                <div class="flex pb-3">
                    <span class="text-xl font-bold pr-10 w-32">Number of Strings</span><li class="text-xl">6</li>

                </div>
            </ul>
            <h3 class="text-3xl font-semibold text-center py-5">More Details</h3>
            <p class="px-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ex maiores illo adipisci ipsum explicabo, dolorem debitis unde necessitatibus numquam possimus error natus aliquam culpa beatae nesciunt. Cupiditate, pariatur expedita!</p>
        </div>
    </div>
    <aside class="left-2/3 border-2 mr-5 rounded-xl w-4/12 h-max p-5 bg-gray-200">
        <h1 class="text-4xl font-extrabold pb-5 text-red-600">300$</h1>
        <p class="text-md pb-10">No fees and shipping free of charge</p>
        <div class="w-full flex flex-col gap-3 pb-10">
            <span class="text-center"><button class="rounded-full bg-red-600 hover:bg-red-800 text-white w-full px-5 py-2">ADD TO CART</button></span>
            <span class="text-center"><button class="rounded-full bg-red-600 hover:bg-red-800 text-white w-full px-5 py-2">BUY NOW</button></span>
        </div>
        <p class="text-xl font-semibold pb-5">Status : <span class="text-green-500 text-xl font-semibold">In-Stock</span></p>
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
@endsection