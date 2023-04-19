@props(['LoggedAdm'])

<header class="relative w-1/5 bg-red-500 h-screen overflow-hidden">
    <div class="full font-['flamenco'] text-white text-3xl font-extrabold border-b-2 py-2 text-center">
        <a href="" class="">
            FLAMENGNAWA
        </a>
    </div>
    
    <ul class="flex flex-col gap-3 pt-4">
        <a href="/admin/dash">
            <li class="py-2 px-5 font-semibold text-white hover:text-black hover:bg-white transition-all">
                <i class="fa-solid fa-chart-area pr-1 text-xl "></i>
                Dashboard
            </li>
        </a>
        <a href="/admin/products">
            <li class="py-2 px-5 font-semibold text-white hover:text-black hover:bg-white transition-all">
                <i class="fa-brands fa-product-hunt pr-1 text-xl "></i>
                Poducts
            </li>
        </a>
        <a href="/admin/categories">
            <li class="py-2 px-5 font-semibold text-white hover:text-black hover:bg-white transition-all">
                <i class="fa-solid fa-chart-pie pr-1 text-xl "></i>
                Categories
            </li>
        </a>
        <a href="/admin/events">
            <li class="py-2 px-5 font-semibold text-white hover:text-black hover:bg-white transition-all">
                <i class="fa-solid fa-calendar-days pr-1 text-xl "></i>
                Events
            </li>
        </a>
        <a href="/admin/logout">
            <li class="py-2 px-5 font-semibold text-white hover:text-black hover:bg-white transition-all">
                <i class="fa-solid fa-right-from-bracket pr-1 text-xl "></i>
                Logout
            </li>
        </a>
    </ul>
    <div class="absolute bg-red-700 w-full h-20 bottom-0 flex items-center px-2">
        <img src="{{asset('images/admins/'. $LoggedAdm->admin_img)}}" alt="" class="w-16 h-16 object-cover rounded-full">
        <span class="pl-2 text-xl font-semibold text-white">{{$LoggedAdm->admin_name}}</span>
    </div>
</header>