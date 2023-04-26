@extends('pages.layout')

@section('content')

@include('partials._hero')


{{-- about us  --}}
    <section class="relative w-screen h-[700px] ">
        <div class="opacity-50">
            <img src="{{asset ('images/333.JPEG')}}" alt="" class="w-full h-[700px] object-cover">
        </div>
        <div class="h-full absolute top-0 left-0 w-1/2 px-20 flex flex-col justify-center">
            <h2 class="font-extrabold text-5xl pb-10">About Us</h2>
            <p class="pb-10 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quae deserunt illum facere, eligendi nulla iusto voluptate rerum et. Delectus, porro aut fuga odio velit harum itaque voluptates iure ullam.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab eligendi exercitationem velit pariatur voluptatem sequi similique, maxime sapiente ipsam facilis debitis saepe illum ex temporibus! Ratione assumenda libero facilis ducimus.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima quaerat iusto excepturi quam ab cum debitis harum facere. Tempore temporibus dicta neque nam similique. Quidem, porro! Cupiditate quas unde aliquid!</p>

                <span class="px-5 relative right-5"><button class="rounded-full bg-black text-white w-[200px] px-5 py-2 hover:text-black hover:bg-white transition-all hover:shadow-2xl hover:shadow-black">Read More</button></span>
        </div>
        <div class="h-full absolute top-0 left-1/2 w-1/2 pr-20 flex flex-col justify-center group">
            <img src="{{asset ('images/3.JPG')}}" alt="" class="w-[540px] h-[540px] object-cover rounded-full z-10">
            <span class="absolute w-[500px] h-[500px] bg-[#C81111] rounded-full top-36 left-10 group-hover:scale-[1.05] transition-all "></span>
            <span class="absolute w-[370px] h-[370px] bg-black rounded-full top-20 left-0 group-hover:scale-[1.05] transition-all "></span>
        </div>
        
    </section>

    {{-- upcoming concerts  --}}
    <section class="relative w-screen h-[700px]">
        <div class="opacity-10">
            <img src="{{asset ('images/bgnote1.jpg')}}" alt="" class="w-full h-[700px] object-cover">
        </div>
        <div class="h-full absolute top-0 left-0 w-1/2 pl-10 flex flex-col justify-center">
            <img src="{{asset ('images/White_background.png')}}" alt="" class="w-[540px] h-[540px] object-cover rounded-xl opacity-50">
        </div>
        <div class="h-full absolute top-0 left-0 w-1/2 px-20 flex flex-col justify-center">
                <h2 class="font-extrabold text-5xl pb-10">Upcoming Concerts</h2>
                <p class="pb-10 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quae deserunt illum facere, eligendi nulla iusto voluptate rerum et. Delectus, porro aut fuga odio velit harum itaque voluptates iure ullam.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab eligendi exercitationem velit pariatur voluptatem sequi similique, maxime sapiente ipsam facilis debitis saepe illum ex temporibus! Ratione assumenda libero facilis ducimus.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima quaerat iusto excepturi quam ab cum debitis harum facere. Tempore temporibus dicta neque nam similique. Quidem, porro! Cupiditate quas unde aliquid!</p>
    
                <span class="px-5 relative right-5"><a href="events"><button class="rounded-full bg-black text-white w-[200px] px-5 py-2 hover:text-black hover:bg-gray-300 transition-all hover:shadow-2xl hover:shadow-black">Read More</button></a></span>
        </div>
        <div class="h-full absolute top-0 left-1/2 w-1/2 pr-20 flex flex-col justify-center">
            <img src="{{asset ('images/99.JPEG')}}" alt="" class="w-[540px] h-[540px] object-cover">
        </div>
    </section>
    

    {{-- galery  --}}
    <section class="relative w-screen h-[700px] bg-gray-200">
        <div class="opacity-10">
            <img src="{{asset ('images/bgnote2.jpg')}}" alt="" class="w-full h-[700px] object-cover">
        </div>
        <div class="h-full absolute top-0 left-0 w-4/6 grid grid-rows-2 grid-cols-2 mx-10 py-20">
            <img src="{{asset ('images/666.JPEG')}}" alt="" class="h-[245px] w-[350px] object-cover">
            <img src="{{asset ('images/999.JPEG')}}" alt="" class="h-[245px] w-[350px] object-cover">
            <img src="{{asset ('images/77.JPEG')}}" alt="" class="h-[245px] w-[350px] object-cover">
            <img src="{{asset ('images/6666.jpg')}}" alt="" class="h-[245px] w-[350px] object-cover">
        </div>

        <div class="h-full absolute top-0 left-2/3 w-2/6 flex flex-col justify-center pr-10 text-right">
            <h2 class="font-extrabold text-5xl pb-10">Gallery</h2>
            <p class="pb-10 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quae deserunt illum facere, eligendi nulla iusto voluptate rerum et. Delectus, porro aut fuga odio velit harum itaque voluptates iure ullam.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab eligendi exercitationem velit pariatur voluptatem sequi similique, maxime sapiente ipsam facilis debitis saepe illum ex temporibus! Ratione assumenda libero facilis ducimus.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima quaerat iusto excepturi quam ab cum debitis harum facere. Tempore temporibus dicta neque nam similique. Quidem, porro! Cupiditate quas unde aliquid!</p>

                <span class="px-5 relative left-5"><button class="rounded-full bg-black text-white w-[200px] px-5 py-2 hover:text-black hover:bg-white transition-all hover:shadow-2xl hover:shadow-black">Read More</button></span>
        </div>
    </section>


    {{-- contact us  --}}
    @include('partials._hireform')
@endsection
    