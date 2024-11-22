@extends('layouts.main')
@section('content')
<main>
    <section
        class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                We invest in the world’s potential
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                Here at Flowbite we focus on markets where technology,
                innovation, and capital can unlock long-term value and
                drive economic growth.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6 py-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Image 1 -->
            <div
                class="group relative rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition-all duration-300">
                <a href="https://via.placeholder.com/800x600" target="_blank">
                    <img src="https://via.placeholder.com/300x200" alt="Image 1"
                        class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-200">
                </a>
                <div
                    class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="flex items-center justify-center h-full">
                        <span class="text-white font-bold text-xl">Image Title</span>
                    </div>
                </div>
            </div>

            <!-- Image 2 -->
            <div
                class="group relative rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition-all duration-300">
                <a href="https://via.placeholder.com/800x600" target="_blank">
                    <img src="https://via.placeholder.com/300x200" alt="Image 2"
                        class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-200">
                </a>
                <div
                    class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="flex items-center justify-center h-full">
                        <span class="text-white font-bold text-xl">Image Title</span>
                    </div>
                </div>
            </div>

            <!-- Image 3 -->
            <div
                class="group relative rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition-all duration-300">
                <a href="https://via.placeholder.com/800x600" target="_blank">
                    <img src="https://via.placeholder.com/300x200" alt="Image 3"
                        class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-200">
                </a>
                <div
                    class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="flex items-center justify-center h-full">
                        <span class="text-white font-bold text-xl">Image Title</span>
                    </div>
                </div>
            </div>

            <!-- Image 4 -->
            <div
                class="group relative rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition-all duration-300">
                <a href="https://via.placeholder.com/800x600" target="_blank">
                    <img src="https://via.placeholder.com/300x200" alt="Image 4"
                        class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-200">
                </a>
                <div
                    class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="flex items-center justify-center h-full">
                        <span class="text-white font-bold text-xl">Image Title</span>
                    </div>
                </div>
            </div>

            <!-- More images can be added here following the same structure -->

        </div>
    </div>

    <div id="accordion-nested-parent" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                aria-controls="accordion-collapse-body-1">
                <span>What is Flowbite?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive
                    components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                        href="/docs/getting-started/introduction/"
                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing
                    websites even faster with components on top of Tailwind CSS.</p>
                <p class="mb-4 text-gray-500 dark:text-gray-400">What are the differences between Flowbite and Tailwind
                    UI?</p>
                <!-- Nested accordion -->
                <div id="accordion-nested-collapse" data-accordion="collapse">
                    <h2 id="accordion-nested-collapse-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-nested-collapse-body-1" aria-expanded="false"
                            aria-controls="accordion-nested-collapse-body-1">
                            <span>Open source</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-nested-collapse-body-1" class="hidden"
                        aria-labelledby="accordion-nested-collapse-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                            <p class="text-gray-500 dark:text-gray-400">The main difference is that the core components
                                from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid
                                product.</p>
                        </div>
                    </div>
                    <h2 id="accordion-nested-collapse-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-nested-collapse-body-2" aria-expanded="false"
                            aria-controls="accordion-nested-collapse-body-2">
                            <span>Architecture</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-nested-collapse-body-2" class="hidden"
                        aria-labelledby="accordion-nested-collapse-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                            <p class="text-gray-500 dark:text-gray-400">Another difference is that Flowbite relies on
                                smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                        </div>
                    </div>
                    <h2 id="accordion-nested-collapse-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-nested-collapse-body-3" aria-expanded="false"
                            aria-controls="accordion-nested-collapse-body-3">
                            <span>Can I use both?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-nested-collapse-body-3" class="hidden"
                        aria-labelledby="accordion-nested-collapse-heading-3">
                        <div class="p-5 border border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">We actually recommend using both Flowbite,
                                Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from
                                using the best of two worlds.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                            <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                                <li><a href="https://flowbite.com/pro/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                <li><a href="https://tailwindui.com/" rel="nofollow"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End: Nested accordion -->
            </div>
        </div>
    </div>

</main>
@endsection