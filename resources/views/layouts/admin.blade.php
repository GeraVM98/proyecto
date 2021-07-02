<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/dist/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dist/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Ferreteria</title>
</head>

<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Ferreteria</h1>
                </div>
                @auth
                <div class="p-1 flex flex-row items-center">
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="{{Auth::user()->profile_photo_url}}" alt="">
                     <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">{{Auth::user()->name}}</a>
                     <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                         <ul class="list-reset">
                           <li><a href="{{ route('profile.show') }}" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">{{ __('Profile') }}</a></li>
                           <li><hr class="border-t mx-2 border-grey-ligght"></li>
                           <li>
                               <form method="POST" action="{{route('logout')}}">
                                    @csrf
                                    <a href="{{route('logout')}}" class="no-underline px-4 py-2 block text-black hover:bg-grey-light"onclick="event.preventDefault();
                                    this.closest('form').submit();">Log Out</a>
                                </form>
                            </li>
                         </ul>
                     </div>
                 </div>
                @endauth
                @guest
                <div class="p-1 flex flex-row items-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <a href="{{route('register')}}">Registrate</a> 
                    </button>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <a href="{{route('login')}}">Ingresar</a> 
                    </button>
                 </div>
                @endguest
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="/"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            Inicio
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    @auth
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="{{route('departamento.index')}}"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            Departamentos
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="{{route('cliente.index')}}"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            Clientes
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    @endauth
                </ul>

            </aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    @yield('contenido')
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
        </footer>
        <!--/footer-->

    </div>

</div>
<script src="{{ asset('js/main.js')}}"></script>
</body>

</html>