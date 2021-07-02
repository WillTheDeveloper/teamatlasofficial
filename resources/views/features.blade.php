<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/589ed6e880.js" crossorigin="anonymous"></script>
    <title>TeamATLAS | Features</title>
</head>

<body>
<div class="bg-white">
    <div class="relative overflow-hidden">
        <header class="relative">
            <div class="bg-gray-900 pt-6">
                <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6"
                     aria-label="Global">
                    <div class="flex items-center flex-1">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="/">
                                <span class="sr-only">Workflow</span>
                                {{--<img class="h-8 w-auto sm:h-10"
                                     src="https://tailwindui.com/img/logos/workflow-mark-teal-200-cyan-400.svg"
                                     alt="">--}}
                                <i class="fas fa-3x fa-cloud text-white"></i>
                            </a>
                            <div class="-mr-2 flex items-center md:hidden">
                                <button type="button"
                                        class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white"
                                        aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <!-- Heroicon name: outline/menu -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 6h16M4 12h16M4 18h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="hidden space-x-8 md:flex md:ml-10">
                            <a href="/features" class="text-base font-medium text-white hover:text-gray-300">Features</a>

                            <a href="/about" class="text-base font-medium text-white hover:text-gray-300">About Us</a>
                        </div>
                    </div>
                </nav>
            </div>

            <!--
              Mobile menu, show/hide based on menu open state.

              Entering: "duration-150 ease-out"
                From: "opacity-0 scale-95"
                To: "opacity-100 scale-100"
              Leaving: "duration-100 ease-in"
                From: "opacity-100 scale-100"
                To: "opacity-0 scale-95"
            -->
            <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden">
                <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="px-5 pt-4 flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto"
                                 src="https://tailwindui.com/img/logos/workflow-mark-teal-500-cyan-600.svg" alt="">
                        </div>
                        <div class="-mr-2">
                            <button type="button"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-600">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="pt-5 pb-6">
                        <div class="px-2 space-y-1">
                            <a href="#"
                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Product</a>

                            <a href="#"
                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Features</a>

                            <a href="#"
                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Marketplace</a>

                            <a href="#"
                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Company</a>
                        </div>
                        <div class="mt-6 px-5">
                            <a href="#"
                               class="block text-center w-full py-3 px-4 rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 text-white font-medium hover:from-teal-600 hover:to-cyan-700">Start
                                free trial</a>
                        </div>
                        <div class="mt-6 px-5">
                            <p class="text-center text-base font-medium text-gray-500">Existing customer? <a
                                    href="#" class="text-gray-900 hover:underline">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="pt-10 bg-gray-900 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">

            <div class="mx-auto max-w-7xl lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                    <div
                        class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                        <div class="lg:py-24">
                            <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                                <span class="block">TeamATLAS</span>
                            </h1>
                            <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">
                                Development in serverless technologies and machine learning.
                            </p>
                            {{--<div class="mt-10 sm:mt-12">
                                <form action="#" class="sm:max-w-xl sm:mx-auto lg:mx-0">
                                    <div class="sm:flex">
                                        <div class="min-w-0 flex-1">
                                            <label for="email" class="sr-only">Email address</label>
                                            <input id="email" type="email" placeholder="Enter your email" class="block w-full px-4 py-3 rounded-md border-0 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-400 focus:ring-offset-gray-900">
                                        </div>
                                        <div class="mt-3 sm:mt-0 sm:ml-3">
                                            <button type="submit" class="block w-full py-3 px-4 rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 text-white font-medium hover:from-teal-600 hover:to-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-400 focus:ring-offset-gray-900">Start free trial</button>
                                        </div>
                                    </div>
                                    <p class="mt-3 text-sm text-gray-300 sm:mt-4">Start your free 14-day trial, no credit card necessary. By providing your email, you agree to our <a href="#" class="font-medium text-white">terms or service</a>.</p>
                                </form>
                            </div>--}}
                        </div>
                    </div>
                    <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                            <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                            <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                 src="https://tailwindui.com/img/component-images/cloud-illustration-teal-cyan.svg"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

