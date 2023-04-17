@extends('pages.layout')

@section('content')
    <section class="w-screen h- px-5 py-10 mb-10">
        <div class="absolute top-0 left-0 -z-10 w-screen h-[350px] opacity-5">
            <img src="{{asset('images/bgnote2.jpg')}}" alt="" class="w-screen h-full object-cover">
        </div>
        <div class="w-full h-[200px] flex flex-col  items-center">
            @if($LoggedUser->profil_picture == NULL)
                <div class="group overflow-none relative h-full w-[200px] flex justify-center items-center">
                    <img src="{{asset('images/profil.png')}}" alt="" class="pr-5 border-2 border-red-500 w-full h-full object-cover rounded-full goup/item group-hover:opacity-75">
                    <i class="fa-solid fa-pen-to-square text-5xl invisible cursor-pointer group/item group-hover:visible absolute"></i>
                </div>
            @else
                <div class="group overflow-none relative h-full w-[200px] flex justify-center items-center">
                    <img src="{{asset('images/' . $LoggedUser->profil_picture)}}" alt="" class="border-2 border-red-500 w-full h-full object-cover rounded-full goup/item group-hover:opacity-50">
                    <i class="fa-solid fa-pen-to-square text-white text-5xl invisible cursor-pointer group/item group-hover:visible absolute"></i>
                </div>
            @endif
            <div class="px-5 pt-3">
                <span class="text-3xl font-semibold">{{$LoggedUser->full_name}}</span>
            </div>
        </div>

    </section>

    <section class="w-screen flex flex-col items-center">
        <span class="text-2xl font-bold pb-5">Personal Informations</span>
        
            <label for="" class="pb-3 text-lg font-semibold ">Phone Number :</label>
            <input type="text" class="w-[500px] mb-3 rounded-lg outline-none py-2 px-4 border-2 border-gray-500">
            <label for="" class="pb-3 text-lg font-semibold ">Address  :</label>
            <input type="text" class="w-[500px] mb-3 rounded-lg outline-none py-2 px-4 border-2 border-gray-500">
            <label for="" class="pb-3 text-lg font-semibold ">City :</label>
            <input type="text" class="w-[500px] mb-3 rounded-lg outline-none py-2 px-4 border-2 border-gray-500">
    </section>


@endsection
    