@extends('admin.layout')

@section('admin')
    <section class="relative top-0 w-4/5 h-screen overflow-auto scrollbar-none bg">
        <h1 class="px-5 py-2 text-4xl font-bold">Edit Event</h1>
        <div class="py-5">
           <form action="/updateEvent/{{$event->id}}" class="h-full w-full flex flex-col items-center" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
                <label class="text-lg font-medium opacity-70">Event Image</label>
                <input type="file" value="{{$event->event_img}}" name="event_img" class="cursor-pointer border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                @error('event_img')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <label class="text-lg font-medium opacity-70">Event Name</label>
                <input type="text" value="{{$event->event_name}}" name="event_name" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                @error('event_name')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <label class="text-lg font-medium opacity-70">Event Date</label>
                <input type="date" value="{{$event->event_date}}" name="event_date" min="1" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                @error('event_date')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <label class="text-lg font-medium opacity-70">Event location</label>
                <input type="text" value="{{$event->location}}" name="location" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                @error('location')
                <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <label class="text-lg font-medium opacity-70">Description</label>
                <input type="text" value="{{$event->event_desc}}" name="event_desc" class="border-b-2 border-gray-400 w-2/3 mb-5 py-2 pl-5 font-medium outline-none bg-transparent">
                @error('event_desc')
                <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <button class="rounded-full bg-red-600 hover:bg-red-500 group text-white w-[150px] py-2 transition-all hover:shadow-sm hover:shadow-black">
                    <i class="fa-solid fa-check group/item group-hover:text-green-500 transition-all"></i> 
                    <span class="group/item group-hover:text-green-400 transition-all">Update Event</span>
                </button>
           </form>
        </div>
    </section>
@endsection