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
                        <div class="flex items-center flex-col me-8 max-md:me-2">
                            <input id="red-radio" type="radio" value="1" name="colored-radio" class="w-16 h-16 max-md:w-10 max-md:h-10 max bg-gray-100 border-gray-300  focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="red-radio" class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-500">1</label>
                        </div>
                        <div class="flex items-center flex-col me-8 max-md:me-2">
                            <input id="red-radio" type="radio" value="2" name="colored-radio" class="w-16 h-16 max-md:w-10 max-md:h-10 max bg-gray-100 border-gray-300  focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="red-radio" class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-500">2</label>
                        </div>
                        <div class="flex items-center flex-col me-8 max-md:me-2">
                            <input id="red-radio" type="radio" value="3" name="colored-radio" class="w-16 h-16 max-md:w-10 max-md:h-10 max bg-gray-100 border-gray-300  focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="red-radio" class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-500">3</label>
                        </div>
                        <div class="flex items-center flex-col me-8 max-md:me-2">
                            <input id="red-radio" type="radio" value="4" name="colored-radio" class="w-16 h-16 max-md:w-10 max-md:h-10 max bg-gray-100 border-gray-300  focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="red-radio" class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-500">4</label>
                        </div>
                        <div class="flex items-center flex-col me-8 max-md:me-2">
                            <input id="red-radio" type="radio" value="5" name="colored-radio" class="w-16 h-16 max-md:w-10 max-md:h-10 max bg-gray-100 border-gray-300  focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="red-radio" class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-500">5</label>
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