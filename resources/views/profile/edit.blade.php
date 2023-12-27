@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-20">
    <div class="p-4">
        <div class="custom-height grid md:grid-cols-[1fr,2fr] gap-4 mb-4 bg-white rounded-2xl">
            <!-- Column 1 -->
            <div class="flex items-center justify-center grid-cols-2">
                <div class="flex items-center justify-center h-40 rounded bg-white m-5">
                    <div class="text-center my-4">
                        <img class="mx-auto w-36 h-36 p-1 rounded-full" src="{{ asset('img/Avatar Image.svg') }}" alt="Bordered avatar" style="border: 2px solid #070A52;">
                        <div class="py-2">
                            <h1 class="text-lg font-bold" style="color: #070A52;">Hello Doctor</h1>
                            <p class="text-lg text-gray-500 font-bold">Doctor1@mail.com</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center h-40 rounded bg-white m-5 w-1/3">
                    <h1 class="text-lg font-bold text-center" style="color: #070A52;">You are now logged in as
                        Doctor
                    </h1>
                    </p>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="flex items-center justify-center m-10">
                <div class="text-start w-full">
                    <div class="flex items-center justify-between mb-5">
                        <h1 class="text-2xl font-bold" style="color: #070A52;">Edit User</h1>
                        <div class="flex space-x-2">
                            <button class="text-sm bg-transparent hover:bg-indigo-400 text-indigo-400 font-semibold hover:text-white py-1 px-2 border border-indigo-400  hover:border-transparent rounded">
                                Cancel
                            </button>
                            <button class="text-sm custom-button">
                                Edit Profile
                            </button>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-1/2 pr-2 mb-6">
                            <div class="relative z-0 border-b border-gray-700">
                                <input type="text" id="first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none font-normal focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="Default First Name" />
                                <label for="first_name" class="absolute font-semibold duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto" style="color: #5A7DFA;">First Name</label>
                            </div>
                        </div>
                        <div class="w-1/2 pl-2 mb-6">
                            <div class="relative z-0 border-b border-gray-700">
                                <input type="text" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none font-normal focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="Default First Name" />
                                <label for="first_name" class="absolute font-semibold duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto" style="color: #5A7DFA;">Last
                                    Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="relative z-0 border-b border-gray-700">
                            <input type="text" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none font-normal focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="Default First Name" />
                            <label for="first_name" class="absolute font-semibold duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto" style="color: #5A7DFA; width: 150px; white-space: nowrap; padding-right: 10px;">Address</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="relative z-0 border-b border-gray-700">
                            <input type="text" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none font-normal focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="Default First Name" readonly />
                            <label for="first_name" class="absolute font-semibold duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto" style="color: #5A7DFA; width: 150px; white-space: nowrap; padding-right: 10px;">Phone
                                Number</label>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-1/2 mb-6">
                            <div class="relative w-32" id="dropdownButton">
                                <div class="text-xs font-medium text-black mb-1" style="color: #5A7DFA;">Gender
                                </div>
                                <div onclick="toggleDropdown()" id="dropdownButtonContent" class="border-solid border-indigo-400 border-[1px] px-3 py-1 rounded-lg cursor-pointer font-bold flex justify-between items-center bg-white">
                                    <div id="selectedOptionText" class="font-normal text-black">Male</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                                <div id="dropdown" class="absolute top-full left-0 w-36 rounded-lg border-[1px] border-indigo-400 bg-white shadow-md hidden">
                                    <div onclick="selectOption('Male')" class="text-black cursor-pointer p-2 hover:bg-gray-300">
                                        Male
                                    </div>
                                    <div onclick="selectOption('Female')" class="text-black cursor-pointer p-2 hover:bg-gray-300">
                                        Female
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-1/2 pl-2 mb-6 mt-2">
                            <div class="relative z-0 border-b border-gray-700">
                                <input type="text" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none font-normal focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="Default First Name" />
                                <label for="first_name" class="absolute font-semibold duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto" style="color: #5A7DFA;">Age</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection