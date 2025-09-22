<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <header>
        <nav class="bg-black h-12 flex justify-between items-center px-4 sm:px-4 md:px-4 lg:px-32 text-white">
            <div>
                <span class="font-bold text-xl">{{ env('APP_NAME') }} Wealth</span>
            </div>
            @auth
                <div class="hidden sm:hidden md:hidden lg:block">
                    <ul class="flex gap-8 items-center font-light">
                        <li>
                            <a href="/dashboard/overview">Dashboard</a>
                        </li>
                        <li>
                            <a href="/portfolio">Portfolio</a>
                        </li>
                        <li>
                            <a href="/portfolio">Tradelive</a>
                        </li>
                        <li>
                            <a href="/portfolio">Messages</a>
                        </li>
                        <li>
                            <a class="flex items-center gap-2 bg-orange-700 px-3 py-3" href="/dashboard/overview">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </span>
                                <span>{{ auth()->user()->name }}</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="3" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </a>
                            <div class="hidden w-[183px] absolute top-12 text-black bg-red-100">
                                <ul class="flex flex-col gap-y-5s">
                                    <li class="">
                                        <a class="bg-orange-700 text-white w-full block py-3 px-3 hover:bg-orange-300"
                                            href="">Profile
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="bg-orange-700 text-white w-full block py-3 px-3 hover:bg-orange-300"
                                            href="">Settings
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="bg-orange-700 text-white w-full block py-3 px-3 hover:bg-orange-300"
                                            href="">Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-white hover:text-gray-400 cursor-pointer">
                                    Log out
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="block sm:block md:block lg:hidden">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </span>
                </div>
            @else
                <div class="hidden sm:block">
                    <ul>
                        <li>
                            <a href="/login">Client login</a>
                        </li>
                    </ul>
                </div>
                <div class="sm:hidden">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </span>
                </div>
            @endauth
        </nav>
    </header>

    <section class="px-4 lg:px-32 mt-32">
        @yield('main')
    </section>

    <footer class="border-t border-gray-100 mt-32 text-xs px-4 lg:px-32 py-2">
        <div>
            &copy; {{ date('Y') }}
        </div>
    </footer>
</body>

</html>
