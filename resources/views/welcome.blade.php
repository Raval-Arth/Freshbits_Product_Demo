@extends('layouts.app-tailwind')

@section('content')
    <main class="mt-16 mx-auto max-w-7xl px-4 sm:my-24">
        <div class="text-center">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block xl:inline">Freshbits Web Solutions</span>
                <span class="block text-indigo-600 xl:inline">Product CRUD Demo</span>
            </h1>

            <div class="flex">

                <p class="mt-3 serif max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    CRUD application for managing products developed using Laravel and Tailwind css. Project
                    repository is
                    available at github repository.
                </p>
            </div>
        </div>
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">A
                        better
                        way to organize products</p>
                    <p class="mt-4 serif max-w-2xl text-xl text-gray-500 lg:mx-auto">By tracking of your products, the
                        direction of an individual product will become very clear, and you’ll be able to develop
                        a strategic roadmap.

                    </p>
                </div>

                <div class="mt-10">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <!-- Heroicon name: outline/globe-alt -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Competitive
                                    exchange rates
                                </p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet
                                consectetur
                                adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor
                                cupiditate
                                blanditiis ratione.</dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <!-- Heroicon name: outline/scale -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet
                                consectetur
                                adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor
                                cupiditate
                                blanditiis ratione.</dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <!-- Heroicon name: outline/lightning-bolt -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Transfers are
                                    instant</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet
                                consectetur
                                adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor
                                cupiditate
                                blanditiis ratione.</dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <!-- Heroicon name: outline/annotation -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mobile
                                    notifications</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet
                                consectetur
                                adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor
                                cupiditate
                                blanditiis ratione.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </main>
@endsection
