@props(['categories','products'])
<div class="flex flex-col w-3/12">
    <aside class="w-full border-2 rounded-xl px-5 py-2 flex flex-col items-center">
        <span class="text-xl font-semibold pb-3">Categories</span>
        <div class="w-full flex flex-col gap-3">
            @foreach($categories as $category)
            <div class="relative overflow-hidden py-5 bg-red-500 rounded-xl">
                <p class=" text-center text-2xl tracking-widest font-extrabold text-white">{{$category->category_name}}</p>
                <img src="{{asset('images/categories/'.$category->category_img)}}" alt="" class="absolute -top-2 -left-10 opacity-25 w-32">
            </div>
            @endforeach
        </div>
    </aside>
    <div class="mt-5">
        {{$products->links()}}
    </div>
</div>
