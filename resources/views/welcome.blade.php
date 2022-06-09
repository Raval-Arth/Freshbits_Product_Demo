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
            </div>
        </div>
    </main>
@endsection
