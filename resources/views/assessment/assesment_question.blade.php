@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-20">
    <div class="p-4">
        <div class="flex flex-col rounded-2xl p-5 h-[90vh] max-md:h-full relative" style="background-color: white;">
            <h1 class="text-2xl font-bold mb-2 text-center" style="color: #070A52;">Pertanyaan 1</h1>
            <p class="text-xl m-10 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Curabitur commodo nisi et viverra rhoncus.
                Proin eleifend, lacus vel lobortis pulvinar, est elit volutpat enim, aliquam egestas tellus dolor
                non neque. Ut finibus lorem a velit lobortis dapibus. Vestibulum eget dui nulla. Fusce sodales massa
                eu justo sodales, vel interdum nunc gravida. Maecenas imperdiet turpis magna, non pretium nisi
                vulputate eu. Proin ornare nulla ac mauris ultricies accumsan.</p>

            <div class="flex items-center justify-center mx-auto mt-auto">
                <div class="flex justify-between items-center">
                    <div class="flex flex-wrap items-center">
                        <h1 class="font-bold me-8 max-md:me-2">Min</h1>
                        <div class="flex items-center flex-col me-8 max-md:me-2 relative">
                            <input id="red" name="color" type="radio" class="before:content[''] peer relative w-16 h-16 max-md:w-10 max-md:h-10 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-red-600 transition-all before:absolute before:top-1/2 before:left-1/2 before:transform before:-translate-y-1/2 before:-translate-x-1/2 before:block before:h-12 before:w-12 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-red-500 checked:before:bg-red-500 hover:before:opacity-10" />
                            <span class="absolute text-red-500 transition-opacity opacity-0 pointer-events-none top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 peer-checked:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 max-md:w-10 max-md:h-10">
                                    <circle cx="50%" cy="50%" r="50%" fill="currentColor" />
                                </svg>
                            </span>
                            <label for="red" class="mt-1 text-sm font-medium text-red-600 dark:text-gray-500 absolute top-full left-1/2 transform -translate-x-1/2">
                                1
                            </label>
                        </div>
                        <div class="flex items-center flex-col me-8 max-md:me-2 relative">
                            <input id="red" name="color" type="radio" class="before:content[''] peer relative w-16 h-16 max-md:w-10 max-md:h-10 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-red-600 transition-all before:absolute before:top-1/2 before:left-1/2 before:transform before:-translate-y-1/2 before:-translate-x-1/2 before:block before:h-12 before:w-12 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-red-500 checked:before:bg-red-500 hover:before:opacity-10" />
                            <span class="absolute text-red-500 transition-opacity opacity-0 pointer-events-none top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 peer-checked:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 max-md:w-10 max-md:h-10">
                                    <circle cx="50%" cy="50%" r="50%" fill="currentColor" />
                                </svg>
                            </span>
                            <label for="red" class="mt-1 text-sm font-medium text-red-600 dark:text-gray-500 absolute top-full left-1/2 transform -translate-x-1/2">
                                2
                            </label>
                        </div>
                        <div class="flex items-center flex-col me-8 max-md:me-2 relative">
                            <input id="red" name="color" type="radio" class="before:content[''] peer relative w-16 h-16 max-md:w-10 max-md:h-10 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-red-600 transition-all before:absolute before:top-1/2 before:left-1/2 before:transform before:-translate-y-1/2 before:-translate-x-1/2 before:block before:h-12 before:w-12 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-red-500 checked:before:bg-red-500 hover:before:opacity-10" />
                            <span class="absolute text-red-500 transition-opacity opacity-0 pointer-events-none top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 peer-checked:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 max-md:w-10 max-md:h-10">
                                    <circle cx="50%" cy="50%" r="50%" fill="currentColor" />
                                </svg>
                            </span>
                            <label for="red" class="mt-1 text-sm font-medium text-red-600 dark:text-gray-500 absolute top-full left-1/2 transform -translate-x-1/2">
                                3
                            </label>
                        </div>
                        <div class="flex items-center flex-col me-8 max-md:me-2 relative">
                            <input id="red" name="color" type="radio" class="before:content[''] peer relative w-16 h-16 max-md:w-10 max-md:h-10 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-red-600 transition-all before:absolute before:top-1/2 before:left-1/2 before:transform before:-translate-y-1/2 before:-translate-x-1/2 before:block before:h-12 before:w-12 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-red-500 checked:before:bg-red-500 hover:before:opacity-10" />
                            <span class="absolute text-red-500 transition-opacity opacity-0 pointer-events-none top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 peer-checked:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 max-md:w-10 max-md:h-10">
                                    <circle cx="50%" cy="50%" r="50%" fill="currentColor" />
                                </svg>
                            </span>
                            <label for="red" class="mt-1 text-sm font-medium text-red-600 dark:text-gray-500 absolute top-full left-1/2 transform -translate-x-1/2">
                                4
                            </label>
                        </div>
                        <div class="flex items-center flex-col me-8 max-md:me-2 relative">
                            <input id="red" name="color" type="radio" class="before:content[''] peer relative w-16 h-16 max-md:w-10 max-md:h-10 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-red-600 transition-all before:absolute before:top-1/2 before:left-1/2 before:transform before:-translate-y-1/2 before:-translate-x-1/2 before:block before:h-12 before:w-12 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-red-500 checked:before:bg-red-500 hover:before:opacity-10" />
                            <span class="absolute text-red-500 transition-opacity opacity-0 pointer-events-none top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 peer-checked:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 max-md:w-10 max-md:h-10">
                                    <circle cx="50%" cy="50%" r="50%" fill="currentColor" />
                                </svg>
                            </span>
                            <label for="red" class="mt-1 text-sm font-medium text-red-600 dark:text-gray-500 absolute top-full left-1/2 transform -translate-x-1/2">
                                5
                            </label>
                        </div>
                        <h1 class="font-bold">Max</h1>
                    </div>
                </div>
            </div>

            <div class="flex items-center mt-auto">
                <div class="flex justify-between w-3/4 mx-auto">
                    <button class="mb-10 max-md:mt-10 text-sm space-x-2 custom-button2 w-1/4">
                        Prev
                    </button>
                    <button class="mb-10 max-md:mt-10 text-sm space-x-2 custom-button2 w-1/4">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection