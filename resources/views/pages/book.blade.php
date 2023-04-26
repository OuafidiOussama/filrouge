<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/84ef55bb95.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Flamenco&family=Pacifico&family=Monoton&family=Italianno&display=swap" rel="stylesheet">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
    <link rel="icon" href="{{asset('images/fav.png')}}">
    <title>{{$title}}</title>
</head>

<body class="overflow-hidden scrollbar-none bg-black">
<h1 class="text-white w-screen pt-8 text-5xl font-semibold text-center absolute">PLEASE SCREENSHOT YOUR TICKET</h1>
    <div class="w-screen h-screen flex items-center px-20 relative">
        <img src="{{asset('images/ticket.png')}}" alt="object-cover">
        <div class="absolute">
            <img src="{{asset('images/logo.jpg')}}" alt="" class="rotate-90 pt-24">
            <div class="absolute top-8 left-[310px] text-center">
                <span class="text-5xl font-bold font-['flamenco'] text-white">concert</span>
                <p class="text-4xl font-['monoton'] text-white">{{$event->event_name}}</p>
            </div>
            <div class="absolute top-14 left-[700px] w-full">
                <span class="text-white font-['pacifico'] text-5xl">{{$LoggedUser->full_name}}</span>
            </div>
            <div class="absolute text-white top-[240px] h-full w-full left-[800px] font-['italianno']">
                <span class="font-medium text-2xl pr-5">{{$event->location}}</span>
                <span class="font-semibold text-4xl">{{$event->event_date}}</span>

            </div>
        </div>
     </div>
</body>
</html>
