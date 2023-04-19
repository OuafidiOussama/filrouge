@extends('admin.layout')

@section('admin')

    <section class="relative top-0 w-4/5 h-screen overflow-auto scrollbar-none bg">
        <h1 class="px-5 py-2 text-4xl font-bold">Categories</h1>
        <div class="absolute top-3 right-5">
            <a href="/admin/addCategory">
                <button class="rounded-full bg-red-600 hover:bg-red-500 text-white w-[150px] py-2 transition-all hover:shadow-sm hover:shadow-black cursor-cell">
                    <i class="fa-solid fa-square-plus text-xl"></i> Add Category
                </button>
            </a>
        </div>
        <div class="flex flex-col py-4 px-5">
            @if(Session::get('success'))
            <div class="relative top-0 w-full bg-green-300 h-10 flex justify-center items-center rounded-xl">
                {{Session::get('success')}}
            </div>
            @elseif(Session::get('fail'))
            <div class="relative top-0 w-full bg-red-300 h-10 flex justify-center items-center rounded-xl">
                {{Session::get('fail')}}
            </div>
            @endif
            <div class="overflow-hidden sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden rounded-t-xl">
                  <table class="min-w-full text-center text-sm font-light">
                    <thead class="border-b bg-neutral-300 font-medium dark:border-neutral-500 dark:text-neutral-800">
                      <tr>
                        <th scope="col" class=" px-6 py-4">Category Image</th>
                        <th scope="col" class=" px-6 py-4">Category Name</th>
                        <th scope="col" class=" px-6 py-4">Category Description</th>
                        <th scope="col" class=" px-6 py-4">Operation</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                      <tr class="border-b dark:border-neutral-500">
                        <td class="whitespace-nowrap  px-6 py-4 w-10"><img src="{{asset('images/categories/'.$category->category_img)}}" alt="" class="w-10 h-14 object-contain"></td>
                        <td class="whitespace-nowrap  px-6 py-4">{{$category->category_name}}</td>
                        <td class="whitespace-nowrap  px-6 py-4">{{$category->category_desc}}</td>
                        <td class="">
                            <a href="/admin/editCategory/{{$category->id}}"><i class="fa-regular fa-pen-to-square text-xl hover:text-green-500 transition-all"></i></a>
                            <form action="/deleteCategory/{{$category->id}}" method="POST" class="mt-3">
                              @csrf
                              @method('DELETE')
                              <button><i class="fa-solid fa-trash text-xl hover:text-red-500 transition-all"></i></button>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </section>
@endsection