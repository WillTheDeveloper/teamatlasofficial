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



<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white pt-16 pb-32 overflow-hidden">
    <div class="relative">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
            <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                <div>
                    <div>
            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-600">
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
            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-600">
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
                            When running a website, you want to make sure that all the data you are storing is safe; This is where Vapor firewalls and AWS VPS works its magic and blocks crawlers and blocks any IP's that try to DDOS your site.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                    <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="https://teamatlasofficial.s3.eu-west-2.amazonaws.com/Screenshot+from+2021-07-02+19-20-33.png" alt="Laravel Vapor Config File">
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
            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-600">
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
            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-600">
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
<div class="bg-gray-50 overflow-hidden">
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
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
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
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
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
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
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
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
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
