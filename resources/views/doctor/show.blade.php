@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-20">
    <div class="p-4">
        <div class="flex flex-col rounded-2xl p-5 h-[92vh] max-md:h-full relative" style="background-color: white;">
            <div class="flex items-center">
                <a href="{{ route('doctor') }}" class="text-3xl font-bold mb-2 ms-2" style="color: #070A52; text-decoration: none;">
                    <div class="flex my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 font-bold items-center ms-2" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg>
                        Doctor Detail
                    </div>
                </a>
            </div>

            <div class="py-3 grid md:grid-cols-[0.3fr,2fr] sm:gap-4 sm:px-3">
                <div class="text-sm font-bold text-black">
                    Nama
                </div>
                <div class="text-sm text-gray-900 sm:mt-0">
                    {{ $doctor->firstname }} {{ $doctor->lastname }}
                </div>
            </div>
            <div class="py-3 grid md:grid-cols-[0.3fr,2fr] sm:gap-4 sm:px-3">
                <div class="text-sm font-bold text-black">
                    Age
                </div>
                <div class="text-sm text-gray-900 sm:mt-0">
                    {{ $doctor->age }}
                </div>
            </div>
            <div class="py-3 grid md:grid-cols-[0.3fr,2fr] sm:gap-4 sm:px-3">
                <div class="text-sm font-bold text-black">
                    Gender
                </div>
                <div class="text-sm text-gray-900 sm:mt-0">
                    {{ ucfirst($doctor->gender) }}
                </div>
            </div>
            <div class="py-3 grid md:grid-cols-[0.3fr,2fr] sm:gap-4 sm:px-3">
                <div class="text-sm font-bold text-black">
                    Address
                </div>
                <div class="text-sm text-gray-900 sm:mt-0">
                    {{ $doctor->address }}
                </div>
            </div>
            <div class="py-3 grid md:grid-cols-[0.3fr,2fr] sm:gap-4 sm:px-3">
                <div class="text-sm font-bold text-black">
                    Phone Number
                </div>
                <div class="text-sm text-gray-900 sm:mt-0">
                    0812345654321
                </div>
            </div>

            <div class="flex items-center justify-between mb-2 sm:px-3">
                <h1 class="text-2xl font-bold" style="color: #070A52;">Patients</h1>
            </div>


            <div class="relative overflow-x-auto sm:rounded-lg w-full sm:px-3">
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
                                Email
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

                    @php
                    $count = ($patients->currentPage() - 1) * $patients->perPage() + 1;
                    @endphp
                    @foreach($patients as $patient)

                    @php
                    $isOdd = $loop->odd;
                    @endphp

                    <tbody>
                        <tr class="{{ $isOdd ? 'bg-gray-100' : '' }}">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ $count++ }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ $patient->firstname }} {{ $patient->lastname }}
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ $patient->email }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ $patient->address }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ $patient->phone }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ ucfirst($patient->gender) }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ $patient->age }}
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

            <div class="absolute bottom-0 right-0 mb-4 mr-4">
                <div class="inline-flex rounded-md">
                    {{ $patients->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/modal.js') }}"></script>
@endsection