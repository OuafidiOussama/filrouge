@props(['LoggedUser','LoggedAdm','nbr'])

@if(Session('LoggedUser'))
    <div class="absolute left-3/4 pl-10 ">
        <div class="relative ml-3 w-[210px] bg-red-500 rounded-full flex h-12 items-center cursor-pointer prBtn">
            <img src="{{asset ('images/profil.png')}}" alt="" class="ml-1 w-10 h-10 bg-red-100 rounded-full object-cover">
            <span class="px-3 font-semibold">{{$LoggedUser->full_name}}</span>
            <i class="fa-solid fa-angle-down absolute right-3"></i>
        </div>
        
    </div>
    <div class="hidden profil absolute top-16 ml-14 left-3/4 w-[210px] h-max flex flex-col gap-3 z-10 bg-red-500 rounded-xl px-5 py-2" >
        <a href="cart" class="hover:text-white transition-all font-semibold">
            <i class="fa-solid  text-lg fa-bag-shopping pr-4"></i>
            Shopping Cart
            <span class="bg-red-300 px-1 rounded-full text-red-800 ml-1">{{$nbr}}</span>
        </a>
        <a href="cart" class="hover:text-white transition-all font-semibold">
            <i class="fa-solid  text-lg fa-bookmark pr-4"></i>
            WhishList
        </a>
        <a href="profil" class="hover:text-white transition-all font-semibold">
            <i class="fa-solid  text-lg fa-user pr-4"></i>
            Profil
        </a>
        <a href="logout" class="hover:text-white transition-all font-semibold">
            <i class="fa-solid  text-lg fa-right-from-bracket pr-4"></i>
            Logout
        </a>
    </div>
    
    @elseif(Session('LoggedAdm'))
        <div class="absolute left-3/4 pl-10 ">
            <div class="ml-3 w-34 bg-red-500 rounded-full flex h-12 items-center cursor-pointer prBtn">
                <img src="{{asset ('images/admins/' .$LoggedAdm->admin_img)}}" alt="" class="ml-1 w-10 h-10 bg-red-100 rounded-full object-cover">
                <span class="px-3 font-semibold">{{$LoggedAdm->admin_name}}</span>
                <i class="fa-solid fa-angle-down pr-3"></i>
            </div>
            
        </div>
        <div class="hidden profil absolute top-16 ml-14 left-3/4 w-[210px] h-max flex flex-col gap-3 z-10 bg-red-500 rounded-xl px-5 py-2" >
            <a href="admin/logout" class="hover:text-white transition-all font-semibold">
                <i class="fa-solid  text-lg fa-right-from-bracket pr-4"></i>
                Logout
            </a>
        </div>
    @else
        <div class="absolute left-3/4 pl-20">
            <a href="/register"><button class="rounded-full bg-red-600 hover:bg-red-500 text-white w-[100px] py-2 transition-all hover:shadow-sm hover:shadow-black">Register</button></a>
            <a href="/login"><button class="rounded-full bg-red-600 hover:bg-red-500 text-white w-[100px] py-2 transition-all hover:shadow-sm hover:shadow-black">Login</button></a>
        </div>
    @endif