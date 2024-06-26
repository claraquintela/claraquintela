@extends('partials.base')

@section('title', 'The Artist')

@section('content')

    <section>
        <div class="bg-gray-100 dark:bg-gray-800 py-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">
                        <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                            <img class="w-full h-full object-cover" src="{{ $course->imageFullPath() }}"
                                alt="{{ $course->name }}">
                        </div>

                    </div>
                    <div class="md:flex-1 px-4">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{ $course->name }}</h2>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                            {!! $course->description !!}
                        </p>
                        <div class="flex mb-4">
                            <div class="mr-4">
                                <span class="font-bold text-gray-700 dark:text-gray-300">Price:</span>
                                <span class="text-gray-600 dark:text-gray-300">{{ $course->price }}</span>
                            </div>

                        </div>

                        <div class="flex justify-center -mx-2 mb-4">
                            <div class="w-center px-2">
                                <a href="{{ $course->link }}"><button
                                        class="w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">Eu
                                        quero!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

@endsection
