@extends('pages.layout')


@section('content')
<h1 class="pt-10 text-center text-5xl font-bold">EVENTS</h1>
<section class="w-screen grid grid-cols-2 gap-24 px-24 py-20">
    @foreach($events as $event)
    <div class="w-[500px] h-[700px] overflow-none pt-6 bg-gray-200 flex flex-col items-center">
        <img src="{{asset('images/events/' . $event->event_img)}}" alt="" class="w-[450px] h-[400px] object-cover">
        <div class="pt-3 text-center">
            <span class="text-2xl font-bold">{{$event->event_name}}</span>
            <p class="w-[450px] h-[130px] pb-4">{{$event->event_desc}}</p>
            <div class="flex flex-col">
                <span class="font-semibold">{{$event->location}}</span>
                <span class="font-bold">{{$event->event_date}}</span>
            </div>
        </div>
        @if(Session('LoggedUser'))
        <a href="bookEvent/{{$event->id}}">
        <span class="px-5"><button class="rounded-full bg-black text-white w-[200px] px-5 py-2 hover:underline">Book Event</button></span>
        </a>
        @endif
    </div>
    @endforeach


</section>
@endsection