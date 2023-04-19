@props(['LoggedUser','LoggedAdm', 'nbr'])

<header class="w-screen flex relative top-0 px-40 bg-white text-black h-16 items-center shadow-black-300 shadow">
    <ul class="w-full flex gap-10 items-center px-10 text-xl font-extrabold justify-center">
        <a href="/">
            <li>Home</li>
        </a>
        <a href="/shop">
            <li>Shop</li>
        </a>
        <a href="/">
            <div class="">
                <img src="{{asset ('images/logo.jpg')}}" alt="" class="h-[50px]">
            </div>
        </a>
        <a href="/events">
            <li>Events</li>
        </a>
        <a href="/hireus">
            <li>Hire Us</li>
        </a>
    </ul>
    <x-profil :LoggedUser="$LoggedUser" :LoggedAdm="$LoggedAdm" :nbr="$nbr"/>
</header>