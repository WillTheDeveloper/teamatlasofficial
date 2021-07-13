<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/589ed6e880.js" crossorigin="anonymous"></script>
    <title>TeamATLAS | About Us</title>
</head>

<body>
<div class="bg-white">
    <div class="relative overflow-hidden">
        <header x-data="{ mobileDropdown: false }" class="relative">
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
                                <button @click="mobileDropdown = true" type="button"
                                        class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800"
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
            <div x-show="mobileDropdown"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 translate-y-1"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 translate-y-1" @click.away="mobileDropdown = true" class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden">
                <div class="rounded-lg shadow-md bg-gray-600 ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="px-5 pt-4 flex items-center justify-between">
                        <div>
                            <i class="fas fa-3x fa-cloud text-white"></i>
                        </div>
                        <div class="-mr-2">
                            <button @click="mobileDropdown = false" type="button"
                                    class="bg-gray-600 rounded-md p-2 inline-flex items-center justify-center text-gray-400">
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
                            <a href="/"
                               class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-50 focus:bg-gray-500">Home</a>

                            <a href="/features"
                               class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-50 focus:bg-gray-500">Features</a>

                            <a href="/about"
                               class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-50 focus:bg-gray-500">About Us</a>
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

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <div class="space-y-12">
            <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Meet our team</h2>
                <p class="text-xl text-gray-900">Team of developers that made all of this possible.</p>
            </div>
            <ul class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-2 lg:gap-8">
                <li class="py-10 px-6 bg-gray-800 text-center rounded-lg xl:px-10 xl:text-left">
                    <div class="space-y-6 xl:space-y-10">
                        <div class="space-y-2 xl:flex xl:items-center xl:justify-between">
                            <div class="font-medium text-lg leading-6 space-y-1">
                                <h3 class="text-white">Cory</h3>
                                <p class="text-indigo-400">Webpage Designer</p>
                            </div>

                            <ul class="flex justify-center space-x-5">
                                <li>
                                    <a href="https://github.com/CorySheppard" class="text-gray-400 hover:text-gray-300">
                                        <span class="sr-only">Github</span>
                                        <i class="fab fa-2x fa-github"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <p class="text-white text-center pb-2">What West Nottinghamshire College said about Cory:</p>
                            <p class="text-gray-400 text-center ">"Cory is a dedicated and hardworking student who has shown a mature approach to his Industry Placement within the IT Sector. He is extremely goal driven and has shown his ability to meet deadlines promptly with a professional attitude and a knowledgeable skill base. His willingness to learn and progress is an excellent example of his commitment and I am confident that Cory will be able to show a high level of professional creativity and enthusiasm in anything he chooses to pursue."</p>
                        </div>

                    </div>
                </li>

                <li class="py-10 px-6 bg-gray-800 text-center rounded-lg xl:px-10 xl:text-left">
                    <div class="space-y-6 xl:space-y-10">
                        <div class="space-y-2 xl:flex xl:items-center xl:justify-between">
                            <div class="font-medium text-lg leading-6 space-y-1">
                                <h3 class="text-white">Will</h3>
                                <p class="text-indigo-400">Server Infrastructure Architect</p>
                            </div>

                            <ul class="flex justify-center space-x-5">
                                <li>
                                    <a href="https://twitter.com/WillDotExe" class="text-gray-400 hover:text-gray-300">
                                        <span class="sr-only">Twitter</span>
                                        <i class="fab fa-2x fa-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://github.com/WillTheDeveloper" class="text-gray-400 hover:text-gray-300">
                                        <span class="sr-only">Github</span>
                                        <i class="fab fa-2x fa-github"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <p class="text-white text-center pb-2">What West Nottinghamshire College said about Will:</p>
                            <p class="text-gray-400 text-center">"William is a dedicated and hardworking student who has shown a mature approach to his Industry Placement within the IT Sector. He is extremely goal driven and has shown his ability to meet deadlines promptly and submitting work that often exceeds expectations. His eagerness to learn and progress is an excellent example of his commitment and I am confident that William will be able to show a high level of professional creativeness and enthusiasm in anything he chooses to pursue."</p>
                        </div>
                    </div>
                </li>

                <!-- More people... -->
            </ul>
        </div>
    </div>
</div>
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

</body>
