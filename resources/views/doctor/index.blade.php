@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-20">
    <div class="p-4">
        <div class="flex flex-col rounded-2xl p-5 h-screen relative" style="background-color: white;">
            <h1 class="text-2xl font-bold mb-2" style="color: #070A52;">Our Doctors</h1>
            <div class="relative overflow-x-auto sm:rounded-lg w-full">
                <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 overflow:hidden">
                    <thead class="text-xs uppercase border-b border-gray-700" style="color: #070A52;">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Fullname
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Address
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Phone
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Gender
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Age
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
                                $2999
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                <button class="custom-button">
                                    Details
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="absolute bottom-0 right-0 mb-4 mr-4">
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