@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-20">
    <div class="p-4">
        <div class="custom-height grid md:grid-cols-[1fr,0.5fr,2fr] gap-4 mb-4 bg-white rounded-2xl">
            <!-- Column 1 -->
            <div class="flex items-center justify-center grid-cols-2">
                <div class="flex items-center justify-center rounded bg-white m-5">
                    <div class="text-center my-4">
                        <img class="w-64 h-64 p-1 rounded-full" src="{{ asset('img/Avatar Image.svg') }}" alt="Bordered avatar" style="border: 2px solid #070A52;">
                        <div class="py-2">
                            <h1 class="text-lg font-bold" style="color: #070A52;">Hello Doctor</h1>
                            <p class="text-lg text-gray-500 font-bold">Doctor1@mail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="w-1 bg-gray-300 m-16 hidden sm:block">
            </div>

            <!-- Column 3 -->
            <div class="flex items-center justify-center m-10">
                <div class="text-start w-full">
                    <h1 class="text-2xl font-bold mb-5 text-center" style="color: #070A52;">Personal Info</h1>
                    <div class="w-1 bg-gray-300">
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 pr-2 mb-6">
                            <div class="relative z-0 border-b border-gray-700">
                                <input type="text" id="first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none font-normal focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="Default First Name" readonly />
                                <label for="first_name" class="absolute font-semibold duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto" style="color: #5A7DFA;">First Name</label>
                            </div>
                        </div>
                        <div class="w-1/2 pl-2 mb-6">
                            <div class="relative z-0 border-b border-gray-700">
                                <input type="text" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none font-normal focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="Default First Name" readonly />
                                <label for="first_name" class="absolute font-semibold duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto" style="color: #5A7DFA;">Last
                                    Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="relative z-0 border-b border-gray-700">
                            <input type="text" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none font-normal focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="Default First Name" readonly />
                            <label for="first_name" class="absolute font-semibold duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto" style="color: #5A7DFA; width: 150px; white-space: nowrap; padding-right: 10px;">Address</label>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="relative z-0 border-b border-gray-700">
                            <input type="text" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none font-normal focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="Default First Name" readonly />
                            <label for="first_name" class="absolute font-semibold duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto" style="color: #5A7DFA; width: 150px; white-space: nowrap; padding-right: 10px;">Phone
                                Number</label>
                        </div>
                    </div>
                    <button class="custom-button w-full">
                        Edit Profile
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection