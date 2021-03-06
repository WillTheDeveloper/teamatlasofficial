<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/589ed6e880.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://teamatlasofficial.s3.eu-west-2.amazonaws.com/favicon.ico">
    <title>TeamATLAS | Home</title>
</head>

<body>


<div class="bg-white">
    <div class="relative overflow-hidden">

        <div class="relative h-1/2 flex items-center justify-center bg-gray-900">

            <!-- grid background -->
            <div class="grid-background absolute inset-0 p-2 grid grid-cols-12 gap-2 transform -skew-y-6 scale-125">

                {{--<div class="col-span-2 bg-gray-800 rounded animate-pulse"></div>
                <div class="col-span-5 bg-gray-800 rounded animate-pulse"></div>
                <div class="col-span-1 bg-gray-800 rounded animate-pulse"></div>
                <div class="col-span-4 bg-gray-800 rounded animate-pulse"></div>--}}

                <!-- row 1 -->
                    <div class="col-span-2 bg-logo-start rounded animate-pulse"></div>
                    <div class="col-span-5 bg-logo-middle rounded animate-pulse"></div>
                    <div class="col-span-1 bg-logo-end rounded animate-pulse"></div>
                    <div class="col-span-4 bg-logo-middle rounded animate-pulse"></div>

                    <!-- row 2 -->
                    <div class="col-span-5 bg-logo-middle rounded animate-pulse"></div>
                    <div class="col-span-3 bg-logo-end rounded animate-pulse"></div>
                    <div class="col-span-2 bg-logo-start rounded animate-pulse"></div>
                    <div class="col-span-2 bg-gray-800 rounded animate-pulse"></div>

                    <!-- row 3 -->
                    <div class="col-span-4 bg-logo-end rounded animate-pulse"></div>
                    <div class="col-span-7 bg-logo-middle rounded animate-pulse"></div>
                    <div class="col-span-1 bg-logo-start rounded animate-pulse"></div>

                    <!-- row 4 -->
                    <div class="col-span-2 bg-logo-middle rounded animate-pulse"></div>
                    <div class="col-span-4 bg-logo-end rounded animate-pulse"></div>
                    <div class="col-span-6 bg-logo-start rounded animate-pulse"></div>

                    <!-- row 5 -->
                    <div class="col-span-5 bg-logo-end rounded animate-pulse"></div>
                    <div class="col-span-5 bg-logo-middle rounded animate-pulse"></div>
                    <div class="col-span-2 bg-logo-start rounded animate-pulse"></div>

                    <!-- row 6 -->
                    <div class="col-span-4 bg-logo-middle rounded animate-pulse"></div>
                    <div class="col-span-7 bg-logo-start rounded animate-pulse"></div>
                    <div class="col-span-1 bg-logo-end rounded animate-pulse"></div>

                    <!-- row 7 -->
                    <div class="col-span-4 bg-logo-end rounded animate-pulse"></div>
                    <div class="col-span-7 bg-logo-middle rounded animate-pulse"></div>
                    <div class="col-span-1 bg-logo-start rounded animate-pulse"></div>
            </div>

            <!-- content -->
            <div class="relative">
                <div>
                    <header x-data="{ mobileDropdown: false }" class="relative">
                        <div class="pt-6">
                            <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                                <div class="self-center w-full">
                                    <div class="flex flex-row justify-between">
                                        <div class="flex items-center">
                                            <a href="/">
                                                <span class="sr-only">TeamATLAS</span>
                                                <i class="fas fa-3x fa-cloud text-white"></i>
                                            </a>
                                            <div class="hidden space-x-8 md:flex md:ml-10">
                                                <a href="/" class="text-base font-medium text-white hover:text-gray-300">Home</a>

                                                <a href="/features" class="text-base font-medium text-white hover:text-gray-300">Features</a>

                                                <a href="/about" class="text-base font-medium text-white hover:text-gray-300">About
                                                    Us</a>
                                            </div>
                                        </div>
                                        <div class="flex flex-row space-x-4 self-center hidden md:block">
                                            <a href="https://github.com/TeamATLAS-Cloud">
                                                <i class="fab fa-github fa-2x text-white"></i>
                                            </a>
                                            <a href="https://discord.gg/edDpjEUse6">
                                                <i class="fab fa-discord fa-2x  text-white"></i>
                                            </a>
                                        </div>
                                        <div class="-mr-2 flex items-center md:hidden">
                                            <button @click="mobileDropdown = true" type="button"
                                                    class="rounded-md p-2 inline-flex items-center justify-center text-gray-400"
                                                    aria-expanded="false">
                                                <span class="sr-only">Open main menu</span>
                                                <!-- Heroicon name: outline/menu -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke="white" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M4 6h16M4 12h16M4 18h16"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>

                        <div x-show="mobileDropdown"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-1"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-1" @click.away="mobileDropdown = true" class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden">
                            <div class="rounded-lg shadow-md bg-gradient-to-br from-logo-start to-logo-middle via-logo-end ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="px-5 pt-4 flex items-center justify-between">
                                    <div>
                                        <i class="fas fa-3x fa-cloud text-white"></i>
                                    </div>
                                    <div class="-mr-2">
                                        <button @click="mobileDropdown = false" type="button"
                                                class="bg-red-600 rounded-md p-2 inline-flex items-center justify-center text-gray-400">
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
                                <div class="pt-5 pb-6 flex flex-col space-y-2">
                                    <div class="px-2 space-y-1">
                                        <a href="/"
                                           class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-50 focus:bg-gray-500">Home</a>

                                        <a href="/features"
                                           class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-50 focus:bg-gray-500">Features</a>

                                        <a href="/about"
                                           class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-50 focus:bg-gray-500">About Us</a>
                                    </div>
                                    <div class="flex flex-row space-x-4 pl-4 pt-2">
                                        <a href="https://github.com/TeamATLAS-Cloud">
                                            <i class="fab fa-github fa-2x text-white"></i>
                                        </a>
                                        <a href="https://discord.gg/edDpjEUse6">
                                            <i class="fab fa-discord fa-2x  text-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="pt-10 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">

                        <div class="mx-auto max-w-7xl lg:px-8">
                            <div class="lg:grid lg:grid-cols-2 lg:gap-8 pb-16">
                                <div
                                    class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                                    <div class="lg:py-24">
                                        <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                                            <span class="block">TeamATLAS</span>
                                        </h1>
                                        <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">
                                            Development in serverless technologies and machine learning.
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-12 -mb-16 sm:-mb-48 hidden md:block">
                                    <div class="mx-auto max-w-md px-4 justify-center flex">
                                        <img class="w-48 md:w-80 h-auto" src="https://teamatlasofficial.s3.eu-west-2.amazonaws.com/svg/cloudupdown.svg" alt="">
                                    </div>
                                </div>
                            </div>
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
                        Serverless technology allows you to deploy sites fast and easily as you do not need to do any provisioning.
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
                                          class="inline-flex items-center justify-center p-3 bg-gradient-to-br from-logo-start via-logo-middle to-logo-end rounded-md shadow-lg">
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
                                          class="inline-flex items-center justify-center p-3 bg-gradient-to-br from-logo-start via-logo-middle to-logo-end rounded-md shadow-lg">
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
                                          class="inline-flex items-center justify-center p-3 bg-gradient-to-br from-logo-start via-logo-middle to-logo-end rounded-md shadow-lg">
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
                                          class="inline-flex items-center justify-center p-3 bg-gradient-to-br from-logo-start via-logo-middle to-logo-end rounded-md shadow-lg">
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
                                        Using AWS Virtual Private Cloud ensures that nobody will be stealing your data and you can trust its safe.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                      <span
                                          class="inline-flex items-center justify-center p-3 bg-gradient-to-br from-logo-start via-logo-middle to-logo-end rounded-md shadow-lg">
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
                                          class="inline-flex items-center justify-center p-3 bg-gradient-to-br from-logo-start via-logo-middle to-logo-end rounded-md shadow-lg">
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
        <div class="bg-gradient-to-br from-logo-start via-logo-middle to-logo-end lg:pb-0 lg:z-10 lg:relative">
            <div class="lg:mx-auto flex justify-center lg:max-w-7xl">
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
                                <p class="text-base font-medium text-white">Will</p>
                                <p class="text-base font-medium text-cyan-100">Server Infrastructure Architect</p>
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
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md shadow bg-gradient-to-br from-logo-start via-logo-middle to-logo-end text-white">
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
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md shadow bg-gradient-to-br from-logo-start via-logo-middle to-logo-end text-white">
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
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md shadow bg-gradient-to-br from-logo-start via-logo-middle to-logo-end text-white">
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
                        <img class="relative mx-auto" width="490" src="https://teamatlasofficial.s3.eu-west-2.amazonaws.com/Screenshot+from+2021-07-04+16-15-04.png" alt="">
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
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md shadow bg-gradient-to-br from-logo-start via-logo-middle to-logo-end text-white">
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
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md shadow bg-gradient-to-br from-logo-start via-logo-middle to-logo-end text-white">
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
                        <i class="fab fa-aws fa-3x text-white"></i>
                    </div>
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-cyan-600">
                        <i class="fab fa-3x fa-laravel text-white"></i>
                    </div>
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-gradient-to-r from-cyan-600 to-teal-500">
                        <i class="fab fa-3x fa-github text-white"></i>
                    </div>
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-gradient-to-r from-teal-500 to-cyan-600">
                        <i class="fab fa-microsoft fa-3x text-white"></i>
                    </div>
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-cyan-600">
                        <i class="fab fa-ubuntu fa-3x text-white"></i>
                    </div>
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-gradient-to-r from-cyan-600 to-teal-500">
                        <i class="fab fa-stripe fa-3x text-white"></i>
                    </div>
                </div>
            </div>
        </div>



        </main>
        <footer class="bg-white" aria-labelledby="footerHeading">
            <h2 id="footerHeading" class="sr-only">Footer</h2>
            <div class="max-w-md mx-auto pt-12 px-4 sm:max-w-7xl sm:px-6 lg:pt-16 lg:px-8">
                <div class="mt-12 border-t border-gray-200 py-8">
                    <p class="text-base text-gray-400 xl:text-center">
                        &copy; 2021 TeamATLAS Development Team
                    </p>
                </div>
            </div>
        </footer>
    </div>
</div>

<script>
    // grab everything we need
    const gridItems = document.querySelectorAll(".grid-background > div");

    // loop over grid items and create a random duration + delay for each
    gridItems.forEach((item) => {
        // calculate random number for delay
        const delay = getRandomInt(0, 5);

        // calculate random number for duration
        const duration = getRandomInt(3, 6);

        // set both
        item.style.animationDelay = `${delay}s`;
        item.style.animationDuration = `${duration}s`;
    });

    function getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
</script>

</body>
