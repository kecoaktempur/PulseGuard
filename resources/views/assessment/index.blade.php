@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-20">
    <div class="p-4">
        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
            <div class="relative w-auto my-6 mx-auto max-w-3xl">
                <!--content-->
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--header-->
                    <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                            Assesment Data
                        </h3>
                    </div>
                    <!--body-->
                    <div class="relative p-6 flex-auto">
                        <div class="relative overflow-x-auto sm:rounded-lg w-full sm:px-3">
                            <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 overflow:hidden">
                                <thead class="text-xs uppercase border-b border-gray-700" style="color: #070A52;">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 font-extrabold">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3 font-extrabold">
                                            Question
                                        </th>
                                        <th scope="col" class="px-6 py-3 font-extrabold">
                                            Type
                                        </th>
                                        <th scope="col" class="px-6 py-3 font-extrabold">
                                            Answer
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            1
                                        </th>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Silver
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Laptop
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100">
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            2
                                        </th>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Silver
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Laptop
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            3
                                        </th>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Silver
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Laptop
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100">
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            4
                                        </th>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Silver
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Laptop
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            5
                                        </th>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Silver
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Laptop
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h1 class="text-xl font-bold mb-2 mt-2" style="color: #070A52;">Status</h1>
                        <select id="gender" name="gender" autocomplete="gender" required class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600 mb-5">
                            <option value="null" selected>-</option>
                            <option value="male">Healthy</option>
                            <option value="female">Unhealthy</option>
                        </select>

                        <h1 class="text-xl font-bold mb-2 mt-2" style="color: #070A52;">Verify</h1>
                        <select id="gender" name="gender" autocomplete="gender" required class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600 mb-5">
                            <option value="null" selected>-</option>
                            <option value="male">Verified</option>
                            <option value="female">Unverified</option>
                        </select>
                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                        <button class="rounded-md bg-transparent px-3 py-1.5 text-sm font-semibold leading-6 text-red-500 shadow-sm hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 mr-5" type="button" onclick="toggleModal('modal-id')">
                            Close
                        </button>
                        <button class="rounded-md bg-emerald-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-emerald-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" type="button" onclick="toggleModal('modal-id')">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id2">
            <div class="relative w-auto my-6 mx-auto max-w-3xl">
                <!--content-->
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--header-->
                    <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                            Assesment Data
                        </h3>
                    </div>
                    <!--body-->
                    <div class="relative p-6 flex-auto">
                        <div class="relative overflow-x-auto sm:rounded-lg w-full sm:px-3">
                            <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 overflow:hidden">
                                <thead class="text-xs uppercase border-b border-gray-700" style="color: #070A52;">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 font-extrabold">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3 font-extrabold">
                                            Question
                                        </th>
                                        <th scope="col" class="px-6 py-3 font-extrabold">
                                            Type
                                        </th>
                                        <th scope="col" class="px-6 py-3 font-extrabold">
                                            Answer
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            1
                                        </th>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Silver
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Laptop
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100">
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            2
                                        </th>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Silver
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Laptop
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            3
                                        </th>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Silver
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Laptop
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100">
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            4
                                        </th>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Silver
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Laptop
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            5
                                        </th>
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Silver
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            Laptop
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h1 class="text-xl font-bold mb-2" style="color: #070A52;">Select your doctor</h1>
                        <select id="doctor" name="doctor" autocomplete="doctor" required class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600 mb-5">
                            <option value="null" selected>-</option>
                        </select>
                        <div class="text-red-500 text-sm mt-1">
                        </div>

                        <h1 class="text-xl font-bold mt-10 mb-2" style="color: #070A52;">Your message</h1>
                        <textarea id="notes" name="notes" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                        <button class="rounded-md bg-transparent px-3 py-1.5 text-sm font-semibold leading-6 text-red-500 shadow-sm hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 mr-5" type="button" onclick="toggleModal('modal-id2')">
                            Close
                        </button>
                        <button class="rounded-md bg-emerald-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-emerald-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" type="button" onclick="toggleModal('modal-id2')">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id2-backdrop"></div>

        <div class="flex flex-col rounded-2xl p-5 max-md:h-screen h-[92vh] relative" style="background-color: white;">
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-2xl font-bold mb-2" style="color: #070A52;">Assessment History</h1>
                @if(Auth::guard('web')->check())
                <div class="flex space-x-2">
                    <form action="{{ route('assessment.start') }}" method="POST">
                        @csrf
                        <button type="submit" class="flex w-full justify-center rounded-md bg-blue-800 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                            @php
                            if ($takenAssessment){
                            echo 'Continue Assessment';
                            }
                            else {
                            echo 'Take New Assessment';
                            }
                            @endphp
                        </button>
                    </form>
                </div>
                @endif
            </div>
            <div class="relative overflow-x-auto sm:rounded-lg w-full">
                <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 overflow:hidden">
                    <thead class="text-xs uppercase border-b border-gray-700" style="color: #070A52;">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Patient
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Time
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Verified
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Doctor
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Action
                            </th>
                        </tr>
                    </thead>

                    @php
                    $count = ($assessments->currentPage() - 1) * $assessments->perPage() + 1;
                    @endphp
                    @foreach($assessments as $assessment)

                    @php
                    $isOdd = $loop->odd;
                    @endphp

                    <tbody>
                        <tr class="{{ $isOdd ? 'bg-gray-100' : '' }}">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-700 whitespace-nowrap">
                                {{ $count++ }}
                            </th>
                            <th scope="row" class="px-6 py-2 font-medium text-gray-700 whitespace-nowrap">
                                {{ $assessment->patients->first()->firstname }} {{ $assessment->patients->first()->lastname }}
                            </th>
                            <th class="px-6 py-2 font-medium text-gray-700 whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($assessment->datetime)->format('j F Y') }}
                            </th>
                            <td class="px-6 py-2 font-medium text-gray-700 whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($assessment->datetime)->format('H:i:s') }}
                            </td>
                            <td class="px-6 py-2 font-medium text-gray-700 whitespace-nowrap">
                                {{ $assessment->status ?? 'Unidentified' }}
                            </td>
                            <td class="px-6 py-2 font-medium text-gray-700 whitespace-nowrap">
                                {{ $assessment->is_verified ? 'Verified' : 'Not Verified' }}
                            </td>
                            <th scope="row" class="px-6 py-2 font-medium text-gray-700 whitespace-nowrap">
                                {{ $assessment->doctors->first()->firstname }} {{ $assessment->doctors->first()->lastname }}
                            </th>
                            <td class="px-6 py-2 font-medium text-gray-700 whitespace-nowrap">
                                @if(Auth::guard('doctors')->check())
                                <button class="rounded-md bg-indigo-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" type="button" onclick="toggleModal('modal-id')">
                                    Details
                                </button>
                                @elseif(Auth::guard('web')->check())
                                <button class="rounded-md bg-indigo-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" type="button" onclick="toggleModal('modal-id2')">
                                    Details
                                </button>
                                @endif
                                <button class="rounded-md bg-rose-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-500" type="button" onclick="toggleModal('modal-id')">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="absolute bottom-0 right-0 mb-4 mr-4 mt-4">
                <div class="inline-flex rounded-md">
                    {{ $assessments->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/modal.js') }}"></script>
@endsection