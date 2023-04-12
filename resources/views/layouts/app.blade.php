<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
<aside class="row-span-2 text-lg overflow-y-auto">


</aside>
<aside
    id="sidenav"
    class="fixed z-[1035] h-screen w-60 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
    data-te-sidenav-init
    data-te-sidenav-mode="side"
    data-te-sidenav-hidden="false"
    data-te-sidenav-accordion="true"
    data-te-sidenav-content="#main"
>
    <div class="flex h-16 items-center">
        <img class="h-10 pl-6" src="{{ Vite::asset('resources/images/logo.svg') }}">
        <span class="self-center text-xl pl-2 text-slate-400">Mall</span>
    </div>
    <hr class="border-gray-300">
    <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
        <li class="relative">
            <a
                href="{{url('/admin')}}"
                class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                data-te-sidenav-link-ref="{{url('/admin')}}">
                <i class="mr-4 h-4 w-4 text-gray-400 dark:text-gray-300 fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="relative">
            <a
                class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                data-te-sidenav-link-ref>
                <i class="mr-4 h-4 w-4 text-gray-400 dark:text-gray-300 fas fa-tachometer-alt"></i>
                <span>Demo</span>
                <span
                    class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                    data-te-sidenav-rotate-icon-ref>
                    <i class="fas fa-angle-down" ></i>
                </span>
            </a>
            <ul
                class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                       data-te-sidenav-link-ref="{{url("/admin/demo/form")}}"
                       href="{{url("/admin/demo/form")}}"
                    >Form</a
                    >
                </li>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref
                    >Link 3</a
                    >
                </li>
            </ul>
        </li>
        <li class="relative">
            <a
                class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                data-te-sidenav-link-ref>
                <i class="mr-4 h-4 w-4 text-gray-400 dark:text-gray-300 fas fa-tachometer-alt"></i>
                <span>Link 1</span>
                <span
                    class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                    data-te-sidenav-rotate-icon-ref>
                    <i class="fas fa-angle-down" ></i>
                </span>
            </a>
            <ul
                class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                       data-te-sidenav-link-ref
                    >Link 2</a
                    >
                </li>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                       data-te-sidenav-link-ref
                    >Link 3</a
                    >
                </li>
            </ul>
        </li>
    </ul>
</aside>
<div id="main" class="bg-gray-200 flex h-screen flex-col">
    <header class="flex-no-wrap flex h-16 items-center justify-between bg-neutral-100 py-4 shadow-md shadow-black/5"
            data-te-navbar-ref>
        <div class="ml-6">
            <a class="p-3 text-neutral-900 hover:text-neutral-400 focus:text-neutral-400"
               href="#"
               data-te-sidenav-toggle-ref
               data-te-target="#sidenav"
               aria-controls="#sidenav"
               aria-haspopup="true"
            >
                <i class="fa fa-stream"></i>
            </a>
            <a class="p-3 text-neutral-500 hover:text-neutral-400 focus:text-neutral-400"
                href="#"
                data-te-nav-link-ref
            >
                Home
            </a>
            <a class="p-3 text-neutral-500 hover:text-neutral-400 focus:text-neutral-400"
               href="#"
               data-te-nav-link-ref
            >
                Goods
            </a>
            <a class="p-3 text-neutral-500 hover:text-neutral-400 focus:text-neutral-400"
               href="#"
               data-te-nav-link-ref
            >
                Order
            </a>
        </div>
        <div class="flex items-center mr-3">
            <!-- Icon -->
            <a
                class="text-neutral-500 p-3 hover:text-neutral-700 focus:text-neutral-700"
                href="#">
                <i class="fa fa-shopping-cart"></i>
            </a>
            <div class="relative" data-te-dropdown-ref>
                <a
                    class="hidden-arrow p-3 flex items-center text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                    href="#"
                    id="dropdownMenuButton1"
                    role="button"
                    data-te-dropdown-toggle-ref
                    aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="absolute -mt-2.5 ml-2 rounded-full bg-red-700 py-0 px-1.5 text-xs text-white">1</span>
                </a>
                <ul
                    class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                    aria-labelledby="dropdownMenuButton1"
                    data-te-dropdown-menu-ref>
                    <li>
                        <a
                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                            href="#"
                            data-te-dropdown-item-ref
                        >Action</a
                        >
                    </li>
                    <li>
                        <a
                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                            href="#"
                            data-te-dropdown-item-ref
                        >Another action</a
                        >
                    </li>
                    <li>
                        <a
                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                            href="#"
                            data-te-dropdown-item-ref
                        >Something else here</a
                        >
                    </li>
                </ul>
            </div>
            <div class="relative" data-te-dropdown-ref>
                <a
                    class="hidden-arrow  p-3 flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                    href="#"
                    id="dropdownMenuButton2"
                    role="button"
                    data-te-dropdown-toggle-ref
                    aria-expanded="false">
                    <img
                        src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg"
                        class="rounded-full"
                        style="height: 25px; width: 25px"
                        loading="lazy" />
                </a>
                <ul
                    class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                    aria-labelledby="dropdownMenuButton2"
                    data-te-dropdown-menu-ref>
                    <li>
                        <a
                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                            href="#"
                            data-te-dropdown-item-ref
                        >Action</a
                        >
                    </li>
                    <li>
                        <a
                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                            href="#"
                            data-te-dropdown-item-ref
                        >Another action</a
                        >
                    </li>
                    <li>
                        <a
                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                            href="#"
                            data-te-dropdown-item-ref
                        >Something else here</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main class="m-4 grow overflow-y-auto">
        @yield('content')
    </main>
    <footer class="flex h-10 justify-between items-center px-4 bg-neutral-100">
        <span>Copyright © 2020-2023 xxx.xx. All rights reserved.</span>
        <span>V1.0.0</span>
    </footer>
    @stack('scripts')
</div>
</body>
</html>
