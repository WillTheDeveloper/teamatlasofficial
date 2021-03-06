<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/589ed6e880.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://teamatlasofficial.s3.eu-west-2.amazonaws.com/favicon.ico">
    <title>TeamATLAS | Features</title>
</head>

<body>
<div class="relative h-1/2 flex items-center justify-center bg-gray-900">

    <!-- grid background -->
    <div class="grid-background absolute inset-0 p-2 grid grid-cols-12 gap-2 transform -skew-y-6 scale-125">
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

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white pt-16 pb-32 overflow-hidden">
    <div class="relative">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
            <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                <div>
                    <div>
            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-br from-logo-start via-logo-middle to-logo-end">
              <!-- Heroicon name: outline/inbox -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
              </svg>
            </span>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                            Using the latest server technology
                        </h2>
                        <p class="mt-4 text-lg text-gray-500">
                            Amazon AWS allows you to use and manage your Lambda functions where all your deployments will run on. Don't worry though, Vapor handles all this for you from the dashboard.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0">
                <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                    <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="https://teamatlasofficial.s3.eu-west-2.amazonaws.com/Screenshot+from+2021-07-02+19-22-19.png" alt="AWS Dashboard">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-24">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
            <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                <div>
                    <div>
            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-br from-logo-start via-logo-middle to-logo-end">
              <!-- Heroicon name: outline/sparkles -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
              </svg>
            </span>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                            Security is key
                        </h2>
                        <p class="mt-4 text-lg text-gray-500">
                            When running a website, you want to make sure that all the data you are storing is safe; This is where Vapor firewalls and AWS VPC works its magic and blocks crawlers and blocks any IP's that try to DDOS your site.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                    <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="https://teamatlasofficial.s3.eu-west-2.amazonaws.com/Screenshot+from+2021-07-02+19-34-32.png" alt="Laravel Vapor Config File">
                </div>
            </div>
        </div>
    </div>
</div>



<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white pt-16 pb-32 overflow-hidden">
    <div class="relative">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
            <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                <div>
                    <div>
            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-br from-logo-start via-logo-middle to-logo-end">
              <!-- Heroicon name: outline/inbox -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
              </svg>
            </span>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                            Everything in one place!
                        </h2>
                        <p class="mt-4 text-lg text-gray-500">
                            All storage is saved in S3 buckets within AWS making it easy to manage and store files. Your information is important and these S3 buckets allow for custom permissions so nobody can steal it from you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0">
                <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                    <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="https://teamatlasofficial.s3.eu-west-2.amazonaws.com/Screenshot+from+2021-07-02+19-14-53.png" alt="AWS Bucket">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-24">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
            <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                <div>
                    <div>
            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-br from-logo-start via-logo-middle to-logo-end">
              <!-- Heroicon name: outline/sparkles -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
              </svg>
            </span>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                            Development made easy
                        </h2>
                        <p class="mt-4 text-lg text-gray-500">
                            AWS supports Github continuous integration therefore, when an update is made, Github and AWS will automatically update your site with absolutely zero downtime in between; Nobody would even notice.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                    <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="https://teamatlasofficial.s3.eu-west-2.amazonaws.com/Screenshot+from+2021-07-02+19-16-21.png" alt="Github File Explorer">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white overflow-hidden">
    <div class="relative max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <svg class="absolute top-0 left-full transform -translate-x-1/2 -translate-y-3/4 lg:left-auto lg:right-full lg:translate-x-2/3 lg:translate-y-1/4" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
            <defs>
                <pattern id="8b1b5f72-e944-4457-af67-0c6d15a99f38" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#8b1b5f72-e944-4457-af67-0c6d15a99f38)" />
        </svg>

        <div class="relative lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div class="lg:col-span-1">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Next generation websites and web servers.
                </h2>
            </div>
            <dl class="mt-10 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-8 sm:gap-y-10 lg:mt-0 lg:col-span-2">
                <div>
                    <dt>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-br from-logo-start via-logo-middle to-logo-end text-white">
                            <!-- Heroicon name: outline/globe-alt -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Rapid load times</p>
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">
                        Serverless technology allows for websites to load incredibly fast.
                    </dd>
                </div>

                <div>
                    <dt>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-br from-logo-start via-logo-middle to-logo-end text-white">
                            <!-- Heroicon name: outline/scale -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                        <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Pay for what you use</p>
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">
                        Using serverless technology means that while nobody is on your site, you are not getting charged.
                    </dd>
                </div>

                <div>
                    <dt>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-br from-logo-start via-logo-middle to-logo-end text-white">
                            <!-- Heroicon name: outline/lightning-bolt -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Secure payments</p>
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">
                        Using the Stripe API ensures security when making payments.
                    </dd>
                </div>

                <div>
                    <dt>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-br from-logo-start via-logo-middle to-logo-end text-white">
                            <!-- Heroicon name: outline/mail -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Beautiful emails</p>
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">
                        Make your emails stand out from the crowd by using beautifully designed email templates.
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>

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
