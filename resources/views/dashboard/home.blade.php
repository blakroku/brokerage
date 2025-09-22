@extends('layouts.app')

@section('title', 'Dashboard Home')

@section('main')
    {{-- <h1>Dashboard Home</h1>
    <div>
        @include('partials.logout')
    </div> --}}
    <section class="border border-gray-200 p-6 rounded-md">
        <header class="flex justify-between items-center mb-12">
            <div>
                <h1>Overview</h1>
            </div>
            <div>
                <ul class="flex gap-4">
                    <li>
                        <a class="btn" href="">Add Funds</a>
                    </li>
                    <li>
                        <a class="btn-primary" href="">Statement</a>
                    </li>
                </ul>
            </div>
        </header>

        <div>
            <div class="">
                <div class="text-sm mb-3">
                    USD
                </div>
                <div class="w-full">
                    <div class="mb-5">
                        <span class="bg-black h-2 block rounded-full"></span>
                    </div>
                    <div class="flex justify-between text-sm items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-square-rounded">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 2c-.218 0 -.432 .002 -.642 .005l-.616 .017l-.299 .013l-.579 .034l-.553 .046c-4.785 .464 -6.732 2.411 -7.196 7.196l-.046 .553l-.034 .579c-.005 .098 -.01 .198 -.013 .299l-.017 .616l-.004 .318l-.001 .324c0 .218 .002 .432 .005 .642l.017 .616l.013 .299l.034 .579l.046 .553c.464 4.785 2.411 6.732 7.196 7.196l.553 .046l.579 .034c.098 .005 .198 .01 .299 .013l.616 .017l.642 .005l.642 -.005l.616 -.017l.299 -.013l.579 -.034l.553 -.046c4.785 -.464 6.732 -2.411 7.196 -7.196l.046 -.553l.034 -.579c.005 -.098 .01 -.198 .013 -.299l.017 -.616l.005 -.642l-.005 -.642l-.017 -.616l-.013 -.299l-.034 -.579l-.046 -.553c-.464 -4.785 -2.411 -6.732 -7.196 -7.196l-.553 -.046l-.579 -.034a28.058 28.058 0 0 0 -.299 -.013l-.616 -.017l-.318 -.004l-.324 -.001z" />
                            </svg>
                        </span>
                        <span>Portfolio</span>
                        <span>USD 3,790,522.49</span>
                        <span>
                            100.00%
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-12">
        <div class="lg:flex lg:w-full lg:gap-8">

            <div class="flex-1 border border-gray-200 p-6 rounded-md mb-4 lg:mb-0">
                <header class="flex justify-between items-center mb-5">
                    <div class="font-bold">
                        TradeLive Portfolio
                    </div>
                    <div>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-exclamation-circle">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M12 9v4" />
                                <path d="M12 16v.01" />
                            </svg>
                        </span>
                    </div>
                </header>
                <div class="mb-5">
                    <div class="font-sm text-gray-400">Portfolio ID</div>
                    <div class="font-bold">112086172</div>
                </div>
                <div class="mb-5">
                    <div class="font-sm text-gray-400">Portfolio Value</div>
                    <div class="font-bold">USD 3,790,522.49</div>
                </div>
                <div>
                    <a class="border border-red-200 block rounded-md py-2 text-center" href="">Details</a>
                </div>
            </div>

            <div class="flex-1 border border-gray-200 p-6 rounded-md mb-4 lg:mb-0">
                <header class="flex justify-between items-center mb-5">
                    <div class="font-bold">
                        {{ env('APP_NAME') }} Liquidity Fund
                    </div>
                    <div>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-exclamation-circle">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M12 9v4" />
                                <path d="M12 16v.01" />
                            </svg>
                        </span>
                    </div>
                </header>
                <div class="mb-5">
                    <div class="font-sm text-gray-400">Portfolio ID</div>
                    <div class="font-bold">112086172</div>
                </div>
                <div class="mb-5">
                    <div class="font-sm text-gray-400">Portfolio Value</div>
                    <div class="font-bold">USD 0.00</div>
                </div>
                <div>
                    <a class="border border-red-200 block rounded-md py-2 text-center" href="">Details</a>
                </div>
            </div>

            <div class="flex-1 border border-gray-200 p-6 rounded-md mb-4 lg:mb-0">
                <header class="mb-5 text-sm text-gray-400">
                    Create an additional portfolio in the {{ env('APP_NAME') }} Liquidity Fund towards a new goal. Invest
                    towards your
                    children’s future, a house, new car or any other needs.
                </header>
                <div>
                    <div>
                        <button class="btn text-sm">Create New Portfolio</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
