@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-20">
    <div class="p-4">
        <div class="grid md:grid-cols-[1fr,2fr] gap-4 mb-4">
            <div class="flex items-center justify-center md:h-full max-sm:h-64 rounded-2xl bg-white grid-cols-2">
                <div class="flex items-center justify-center h-40 rounded bg-white m-5">
                    <div class="text-center my-4">
                        <img class="mx-auto w-36 h-36 p-1 rounded-full" src="{{ asset('img/Avatar Image.svg') }}" alt="Bordered avatar" style="border: 2px solid #070A52;">
                        <div class="py-2">
                            <h1 class="text-lg font-bold" style="color: #070A52;">Hello Doctor</h1>
                            <p class="text-lg text-gray-500 font-bold">Doctor1@mail.com</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center h-40 rounded bg-white m-5">
                    <h1 class="text-lg font-bold text-center" style="color: #070A52;">You are now logged in as
                        Doctor
                        <br> <br> Wishing you
                        a
                        fulfilling day of healing and growth
                    </h1>
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 max-sm:grid-cols-2 gap-4">
                <div class="flex items-center justify-center h-40 rounded-2xl grid-cols-2" style="background-color: #F3E8FF;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="text-center my-4">
                            <img class="mx-auto w-32 h-32 p-1 rounded-full" src="{{ asset('img/Icon.svg') }}" alt="Bordered avatar">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-5xl font-bold" style="color: #151D48;">32</h1>
                            <p class="text-base text-gray-500 font-normal">Total Patient</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-40 rounded-2xl  grid-cols-2" style="background-color: #E2E5FF;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="text-center my-4">
                            <img class="mx-auto w-28 h-28 p-1 rounded-full" src="{{ asset('img/Icon1.svg') }}" alt="Bordered avatar">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-5xl font-bold" style="color: #070A52;">32</h1>
                            <p class="text-base text-gray-500 font-normal">Male</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-40 rounded-2xl  grid-cols-2" style="background-color: #FEE2FF;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="text-center my-4">
                            <img class="mx-auto w-28 h-28 p-1 rounded-full" src="{{ asset('img/Icon2.svg') }}" alt="Bordered avatar">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-5xl font-bold" style="color: #070A52;">32</h1>
                            <p class="text-base text-gray-500 font-normal">Female</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-40 rounded-2xl  grid-cols-2" style="background-color: #DCFCE7;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="text-center my-4">
                            <img class="mx-auto w-28 h-28 p-1 rounded-full" src="{{ asset('img/Icon3.svg') }}" alt="Bordered avatar">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-5xl font-bold" style="color: #070A52;">32</h1>
                            <p class="text-base text-gray-500 font-normal">Healthy</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-40 rounded-2xl  grid-cols-2" style="background-color: #FFE2E5;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="text-center my-4">
                            <img class="mx-auto w-28 h-28 p-1 rounded-full" src="{{ asset('img/Icon4.svg') }}" alt="Bordered avatar">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-5xl font-bold" style="color: #070A52;">32</h1>
                            <p class="text-base text-gray-500 font-normal">Unhealthy</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-40 rounded-2xl  grid-cols-2" style="background-color: #FFF4DE;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="text-center my-4">
                            <img class="mx-auto w-28 h-28 p-1 rounded-full" src="{{ asset('img/Icon5.svg') }}" alt="Bordered avatar">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-5xl font-bold" style="color: #070A52;">32</h1>
                            <p class="text-base text-gray-500 font-normal">Unidentified</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-[1fr,2fr] gap-4 mb-4">
            <div class="flex items-center justify-center md:h-full max-sm:h-64 rounded-2xl bg-white grid-cols-2">
                <div class="flex items-center justify-center h-40 rounded bg-white m-5">
                    <div class="text-center my-4">
                        <img class="mx-auto w-36 h-36 p-1 rounded-full" src="{{ asset('img/Avatar Image1.svg') }}" alt="Bordered avatar" style="border: 2px solid #070A52;">
                        <div class="py-2">
                            <h1 class="text-lg font-bold" style="color: #070A52;">Hello Admin</h1>
                            <p class="text-lg text-gray-500 font-bold">admin@mail.com</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center h-40 rounded bg-white m-5">
                    <h1 class="text-lg font-bold text-center" style="color: #070A52;">You are now loged in as Admin
                        <br> <br> Wishing you a day filled with positive impact
                    </h1>
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 max-sm:grid-cols-2 gap-4">
                <div class="flex items-center justify-center h-40 rounded-2xl grid-cols-2" style="background-color: #F3E8FF;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="text-center my-4">
                            <img class="mx-auto w-32 h-32 p-1 rounded-full" src="{{ asset('img/Icon.svg') }}" alt="Bordered avatar">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-5xl font-bold" style="color: #151D48;">32</h1>
                            <p class="text-base text-gray-500 font-normal">Total Patient</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-40 rounded-2xl  grid-cols-2" style="background-color: #E2E5FF;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="text-center my-4">
                            <img class="mx-auto w-28 h-28 p-1 rounded-full" src="{{ asset('img/Icon1.svg') }}" alt="Bordered avatar">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-5xl font-bold" style="color: #070A52;">32</h1>
                            <p class="text-base text-gray-500 font-normal">Male</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-40 rounded-2xl  grid-cols-2" style="background-color: #FEE2FF;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="text-center my-4">
                            <img class="mx-auto w-28 h-28 p-1 rounded-full" src="{{ asset('img/Icon2.svg') }}" alt="Bordered avatar">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-5xl font-bold" style="color: #070A52;">32</h1>
                            <p class="text-base text-gray-500 font-normal">Female</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-40 rounded-2xl  grid-cols-2" style="background-color: #DCFCE7;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="text-center my-4">
                            <img class="mx-auto w-28 h-28 p-1 rounded-full" src="{{ asset('img/Icon3.svg') }}" alt="Bordered avatar">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-5xl font-bold" style="color: #070A52;">32</h1>
                            <p class="text-base text-gray-500 font-normal">Healthy</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-40 rounded-2xl  grid-cols-2" style="background-color: #FFE2E5;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="text-center my-4">
                            <img class="mx-auto w-28 h-28 p-1 rounded-full" src="{{ asset('img/Icon4.svg') }}" alt="Bordered avatar">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-5xl font-bold" style="color: #070A52;">32</h1>
                            <p class="text-base text-gray-500 font-normal">Unhealthy</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-40 rounded-2xl  grid-cols-2" style="background-color: #FFF4DE;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="text-center my-4">
                            <img class="mx-auto w-28 h-28 p-1 rounded-full" src="{{ asset('img/Icon5.svg') }}" alt="Bordered avatar">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-5xl font-bold" style="color: #070A52;">32</h1>
                            <p class="text-base text-gray-500 font-normal">Unidentified</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-[1fr,2fr] gap-4 mb-4">
            <div class="flex items-center justify-center md:h-full max-sm:h-64 rounded-2xl bg-white grid-cols-2">
                <div class="flex items-center justify-center h-40 rounded bg-white m-5">
                    <div class="text-center my-4">
                        <img class="mx-auto w-36 h-36 p-1 rounded-full" src="{{ asset('img/Avatar Image2.svg') }}" alt="Bordered avatar" style="border: 2px solid #070A52;">
                        <div class="py-2">
                            <h1 class="text-lg font-bold" style="color: #070A52;">Hello Patient</h1>
                            <p class="text-lg text-gray-500 font-bold">patient1@mail.com</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center h-40 rounded bg-white m-5">
                    <h1 class="text-lg font-bold text-center" style="color: #070A52;">You are now loged in as
                        Patient
                        <br> <br>Your health and well-being are our top priorities
                    </h1>
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-2 max-sm:grid-cols-2 gap-4">
                <div class="flex items-center justify-center h-64 rounded-2xl p-5" style="background-color: #DCFCE7; display: flex; flex-direction: column; text-align: center;">
                    <img class="mx-auto w-32 h-32 p-1 rounded-full mb-4" src="{{ asset('img/Icon3.svg') }}" alt="Bordered avatar">
                    <h1 class="text-2xl font-bold" style="color: #151D48;">Last Assessment</h1>
                    <p class="text-base text-gray-500 font-semibold">Healthy</p>
                    <p class="text-base text-gray-500 font-semibold">28 December 2023</p>
                </div>


                <div class="flex items-center justify-center h-64 rounded-2xl  grid-cols-2" style="background-color: #E2E5FF;">
                    <div class="flex items-center justify-center h-40 rounded m-5">
                        <div class="py-2">
                            <h1 class="text-2xl font-bold mb-5" style="color: #151D48;">Hello Patient,
                                How are you feeling today?</h1>
                            <button class="custom-button">
                                Take Assesment
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col mt-16 rounded-2xl p-5" style="background-color: white;">
            <h1 class="text-2xl font-bold mb-2" style="color: #070A52;">Appoinment</h1>
            <div class="relative overflow-x-auto sm:rounded-lg w-full">
                <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 overflow:hidden">
                    <thead class="text-xs uppercase border-b border-gray-700" style="color: #070A52;">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Patient
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Doctor
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                1
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Silver
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Laptop
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                <button class="custom-button">
                                    Edit
                                </button>
                                <button class="custom-button2">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                2
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Silver
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Laptop
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                <button class="custom-button">
                                    Edit
                                </button>
                                <button class="custom-button2">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                3
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Silver
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Laptop
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                <button class="custom-button">
                                    Edit
                                </button>
                                <button class="custom-button2">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                4
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Silver
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Laptop
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                <button class="custom-button">
                                    Edit
                                </button>
                                <button class="custom-button2">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                5
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Silver
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                Laptop
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                <button class="custom-button">
                                    Edit
                                </button>
                                <button class="custom-button2">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex col-span-1 mt-4 sm:mt-0 ml-auto">
                <div class="inline-flex rounded-md">
                    <button onclick="next()" class="px-4 py-2 text-sm font-medium text-stone-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-stone-900 focus:text-stone-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                    <button onclick="prev()" class="px-4 py-2 text-sm font-medium text-stone-900 bg-white border border-gray-200 rounded-r-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-stone-900 focus:text-stone-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection