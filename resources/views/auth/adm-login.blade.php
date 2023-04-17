@extends('auth.layout')

@section('authContent')
<section class="overflow-none w-screen h-screen flex justify-center items-center">
    <div class="absolute w-full h-full">
        <img src="{{asset ('images/bg-login.png')}}" alt="" class="w-full h-full object-cover blur-sm">
    </div>
    @if(Session::get('success'))
    <div class="absolute top-0 w-3/4 bg-green-300 h-10 flex justify-center items-center rounded-xl">
        {{Session::get('success')}}
    </div>
    @elseif(Session::get('fail'))
    <div class="absolute top-0 w-3/4 bg-red-300 h-10 flex justify-center items-center rounded-xl">
        {{Session::get('fail')}}
    </div>
    @endif
    <div class="relative z-10 bg-white w-3/4 h-5/6 rounded-xl flex">
        <div class="relative w-1/2 h-full top-0 left-0 rounded-xl ">
            <img src="{{asset ('images/login2.jpg')}}" alt="" class="w-full h-full object-cover rounded-l-xl">
            <span class="absolute top-[35%] text-white text-9xl font-extrabold">ADMIN</span>
        </div>
        <div class="absolute w-full h-full flex items-center justify-center right-1 overflow-none">
            <i class="fa-solid fa-caret-left text-9xl text-white"></i>
        </div>
        <div class="absolute w-1/2 h-full top-0 left-1/2 rounded-xl">
            <img src="{{asset ('images/main logo.jpg')}}" alt="" class="w-full h-full object-cover rounded-r-xl opacity-5">
        </div>
        <div class="w-1/2 h-full flex flex-col justify-center items-center z-10 relative">
            <form action="/admin/check" method="POST" class="w-full h-full flex flex-col justify-center items-center">
                @csrf
                <label for="" class="relative right-36 text-md font-semibold">Email</label>
                <input type="email" name="email" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent ">
                <label for="" class="relative right-32 text-md font-semibold">Password</label>
                <input type="password" name="password" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                <button class="rounded-full bg-red-400 hover:bg-red-300 text-white w-[150px] py-2 transition-all hover:shadow-sm hover:shadow-black">Login</button>
            </form>
        </div>
    </div>
</section>
@endsection