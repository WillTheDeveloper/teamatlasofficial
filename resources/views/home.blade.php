<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/589ed6e880.js" crossorigin="anonymous"></script>
    <title>TeamATLAS | Home</title>
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
                                <a href="/" class="text-base font-medium text-white hover:text-gray-300">Home</a>

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
                    <div class="rounded-lg shadow-md bg-gray-900 ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <i class="fas fa-3x fa-cloud text-white"></i>
                            </div>
                            <div class="-mr-2">
                                <button type="button"
                                        class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-600">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
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
                                   class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-50">Home</a>

                                <a href="#"
                                   class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-50">Features</a>

                                <a href="#"
                                   class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-50">About Us</a>
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
        <!-- Feature section with screenshot -->
        <div class="relative bg-white pt-16 sm:pt-24 lg:pt-32">
            <div class="mx-auto max-w-md px-4 text-center sm:px-6 sm:max-w-3xl lg:px-8 lg:max-w-7xl">
                <div>
                    <h2 class="text-base font-semibold tracking-wider text-cyan-600 uppercase">Serverless</h2>
                    <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                        No server? No problem.
                    </p>
                    <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
                        Serverless technology allows you to deploy sites fast and easily as you do no need to do any provisioning.
                    </p>
                </div>
                <div class="mt-12 -mb-10 sm:-mb-24 lg:-mb-32">
                    <img class="rounded-lg shadow-xl ring-1 ring-black ring-opacity-5"
                         src="https://teamatlasofficial.s3.eu-west-2.amazonaws.com/Screenshot+from+2021-07-02+16-41-46.png" alt="">
                </div>
            </div>
        </div>

        <!-- Feature section with grid -->
        <div class="relative bg-white py-16 sm:py-24 lg:py-32">
            <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                <h2 class="text-base font-semibold tracking-wider text-cyan-600 uppercase">Deploy faster</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                    Everything you need to deploy your app
                </p>
                {{--<p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
                    Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.
                </p>--}}
                <div class="mt-12">
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                      <span
                          class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-md shadow-lg">
                        <!-- Heroicon name: outline/cloud-upload -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                        </svg>
                      </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Push to
                                        Deploy</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Deploying a new server is as simple as creating the page and then pushing it to Vapor! Vapor handles the rest!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                      <span
                          class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-md shadow-lg">
                        <!-- Heroicon name: outline/lock-closed -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                      </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">SSL
                                        Certificates</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        SSL Certificates are automatically generated and signed, meaning you can ensure that the site is valid.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                      <span
                          class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-md shadow-lg">
                        <!-- Heroicon name: outline/refresh -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                      </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Simple Queues</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        If you have lots of data to crunch, then the server will process all of it in the background while you do what you need to do.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                      <span
                          class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-md shadow-lg">
                        <!-- Heroicon name: outline/shield-check -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                      </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Advanced
                                        Security</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Using AWS Virtual Private Servers ensures that nobody will be stealing your data and you can trust its safe.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                      <span
                          class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-md shadow-lg">
                        <!-- Heroicon name: outline/cog -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                      </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Powerful API</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Allowing for different interactions between the client and the server.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                      <span
                          class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-md shadow-lg">
                        <!-- Heroicon name: outline/server -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                        </svg>
                      </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Database
                                        Backups</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Ensuring that the data that you need to keep safe is kept safe in multiple layered database backups.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial section -->
        <div class="bg-gradient-to-r from-teal-500 to-cyan-600 lg:pb-0 lg:z-10 lg:relative">
            <div class="lg:mx-auto flex justify-center lg:max-w-7xl">
                <div class="relative lg:-my-8">
                    <div aria-hidden="true" class="absolute inset-x-0 top-0 bg-white lg:hidden"></div>
                    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                        {{--<div
                            class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                            <img class="object-cover lg:h-full lg:w-full"
                                 src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80"
                                 alt="">
                        </div>--}}
                    </div>
                </div>
                <div class="lg:m-0 max-w-4xl col-span-3">
                    <div class="mx-auto text-center px-4 py-8 sm:px-6 lg:px-0 lg:py-12">
                        <blockquote>
                            <div>
                                <svg class="h-12 w-12 text-white opacity-25" fill="currentColor" viewBox="0 0 32 32"
                                     aria-hidden="true">
                                    <path
                                        d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                                </svg>
                                <p class="mt-6 text-2xl font-medium text-white">
                                    Before, my website was the same as everyone else's but since I started using Laravel and serverless technology, its revolutionised how my website works!
                                </p>
                            </div>
                            <footer class="mt-6">
                                <p class="text-base font-medium text-white">Will Burton</p>
                                <p class="text-base font-medium text-cyan-100">Server Management Leader</p>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>




        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="py-16 bg-white overflow-hidden lg:py-24">
            <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
                <svg class="hidden lg:block absolute left-full transform -translate-x-1/2 -translate-y-1/4" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                    <defs>
                        <pattern id="b1e6e422-73f8-40a6-b5d9-c8586e37e0e7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#b1e6e422-73f8-40a6-b5d9-c8586e37e0e7)" />
                </svg>

                <div class="relative">
                    <h2 class="text-center text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Cost effective alternative for servers
                    </h2>
                    <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-gray-500">
                        Serverless technology means you are not wasting money on server provisioning, instead pay for usages only.
                    </p>
                </div>

                <div class="relative mt-12 lg:mt-24 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="relative">
                        <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
                            Deployment on a global scale
                        </h3>
                        <p class="mt-3 text-lg text-gray-500">
                            Using AWS and Vapor, deploy servers to your clients no matter the location of them from the comfort of your own workspace - Let AWS and Vapor do the rest of the work.
                        </p>

                        <dl class="mt-10 space-y-10">
                            <div class="relative">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 text-white">
                                        <!-- Heroicon name: outline/globe-alt -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Save money in the long run</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Pay for what you need and what you use and nothing else.
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 text-white">
                                        <!-- Heroicon name: outline/scale -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Your in control</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    You pay for the licences, therefore you are in control of absolutely everything without any limits.
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 text-white">
                                        <!-- Heroicon name: outline/lightning-bolt -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Let machine learning takeover</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Machine learning allows for the server to have a mind of its own - It makes decisions based on what you teach it giving you more time to focus on other things.
                                </dd>
                            </div>
                        </dl>
                    </div>

                    <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
                        <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404">
                            <defs>
                                <pattern id="ca9667ae-9f92-4be7-abcb-9e3d727f2941" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="784" height="404" fill="url(#ca9667ae-9f92-4be7-abcb-9e3d727f2941)" />
                        </svg>
                        <img class="relative mx-auto" width="490" src="https://tailwindui.com/img/features/feature-example-1.png" alt="">
                    </div>
                </div>

                <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                    <defs>
                        <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                </svg>

                <div class="relative mt-12 sm:mt-16 lg:mt-24">
                    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                        <div class="lg:col-start-2">
                            <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
                                Always in the loop
                            </h3>
                            <p class="mt-3 text-lg text-gray-500">
                                Being able to trust the platform you are on is important especially in business. You should be worrying about your clients and not your website!
                            </p>

                            <dl class="mt-10 space-y-10">
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 text-white">
                                            <!-- Heroicon name: outline/annotation -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Monitor Incoming Traffic</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        Able to monitor how many requests are being made to the server and monitor any blocked requests that are automatically blocked if suspicious.
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 text-white">
                                            <!-- Heroicon name: outline/mail -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Get notified</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        You are able to setup alerts so any sudden spike in traffic, you will be the first person to know!
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                            <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404" aria-hidden="true">
                                <defs>
                                    <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)" />
                            </svg>
                            <img class="relative mx-auto" width="490" src="https://teamatlasofficial.s3.eu-west-2.amazonaws.com/Screenshot+from+2021-07-02+18-11-23.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <p class="text-center text-base font-semibold uppercase text-gray-600 tracking-wider">
                    Servers run by the best software globally
                </p>
                <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
                    <div class="col-span-1 flex justify-center py-8 px-8 shadow bg-gradient-to-r from-teal-500 to-cyan-600">
                        <i class="fab fa-aws fa-3x text-gray-400"></i>
                    </div>
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-cyan-600">
                        <i class="fab fa-3x fa-laravel text-gray-400"></i>
                    </div>
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-gradient-to-r from-cyan-600 to-teal-500">
                        <i class="fab fa-3x fa-github text-gray-400"></i>
                    </div>
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-gradient-to-r from-teal-500 to-cyan-600">
                        <i class="fab fa-microsoft fa-3x text-gray-400"></i>
                    </div>
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-cyan-600">
                        <i class="fab fa-ubuntu fa-3x text-gray-400"></i>
                    </div>
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-gradient-to-r from-cyan-600 to-teal-500">
                        <i class="fab fa-stripe fa-3x text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>



        </main>
        <footer class="bg-white" aria-labelledby="footerHeading">
            <h2 id="footerHeading" class="sr-only">Footer</h2>
            <div class="max-w-md mx-auto pt-12 px-4 sm:max-w-7xl sm:px-6 lg:pt-16 lg:px-8">
                {{--<div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="space-y-8 xl:col-span-1">
                        <img class="h-10" src="https://tailwindui.com/img/logos/workflow-mark-gray-300.svg"
                             alt="Company name">
                        <p class="text-gray-500 text-base">
                            Reinventing how websites are run to cut down on costs and increase performance and security.
                        </p>
                        <div class="flex space-x-6">
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">GitHub</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Solutions
                                </h3>
                                <ul class="mt-4 space-y-4">
                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            Marketing
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            Analytics
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            Commerce
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            Insights
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Support
                                </h3>
                                <ul class="mt-4 space-y-4">
                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            Pricing
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            Documentation
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            Guides
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Company
                                </h3>
                                <ul class="mt-4 space-y-4">
                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            About
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            Blog
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            Jobs
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            Partners
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Legal
                                </h3>
                                <ul class="mt-4 space-y-4">
                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            Privacy
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                            Terms
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>--}}
                <div class="mt-12 border-t border-gray-200 py-8">
                    <p class="text-base text-gray-400 xl:text-center">
                        &copy; 2021 TeamATLAS Development Team
                    </p>
                </div>

            </div>
        </footer>
    </div>
</div>
</body>
