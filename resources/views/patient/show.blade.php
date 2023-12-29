@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-20">
    <div class="p-4">
        <div class="flex flex-col rounded-2xl p-5 h-[92vh] max-md:h-full relative" style="background-color: white;">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 font-bold mb-2 ms-2" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
                <a href="#" class="text-3xl font-bold mb-2 ms-2" style="color: #070A52; text-decoration: none;">
                    Patient Detail
                </a>
            </div>

            <div class="py-3 grid md:grid-cols-[0.3fr,2fr] sm:gap-4 sm:px-3">
                <div class="text-sm font-bold text-black">
                    Nama
                </div>
                <div class="text-sm text-gray-900 sm:mt-0">
                    John Doe
                </div>
            </div>
            <div class="py-3 grid md:grid-cols-[0.3fr,2fr] sm:gap-4 sm:px-3">
                <div class="text-sm font-bold text-black">
                    Age
                </div>
                <div class="text-sm text-gray-900 sm:mt-0">
                    31
                </div>
            </div>
            <div class="py-3 grid md:grid-cols-[0.3fr,2fr] sm:gap-4 sm:px-3">
                <div class="text-sm font-bold text-black">
                    Gender
                </div>
                <div class="text-sm text-gray-900 sm:mt-0">
                    Male
                </div>
            </div>
            <div class="py-3 grid md:grid-cols-[0.3fr,2fr] sm:gap-4 sm:px-3">
                <div class="text-sm font-bold text-black">
                    Address
                </div>
                <div class="text-sm text-gray-900 sm:mt-0">
                    123 Main St Anytown, USA 12345
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
                <h1 class="text-2xl font-bold" style="color: #070A52;">Assesment History</h1>
            </div>

            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
                <div class="relative w-auto my-6 mx-auto max-w-3xl">
                    <!--content-->
                    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                        <!--header-->
                        <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                            <h3 class="text-3xl font-semibold">
                                Assesment Data
                            </h3>
                            <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                                <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                    ×
                                </span>
                            </button>
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
                                <option value="null" selected>Gender</option>
                                <option value="male">Healthy</option>
                                <option value="female">Unhealthy</option>
                            </select>

                            <h1 class="text-xl font-bold mb-2 mt-2" style="color: #070A52;">Verify</h1>
                            <select id="gender" name="gender" autocomplete="gender" required class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600 mb-5">
                                <option value="null" selected>Gender</option>
                                <option value="male">Verified</option>
                                <option value="female">Unverified</option>
                            </select>
                        </div>
                        <!--footer-->
                        <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                            <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                                Close
                            </button>
                            <button class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

            <div class="relative overflow-x-auto sm:rounded-lg w-full sm:px-3">
                <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 overflow:hidden">
                    <thead class="text-xs uppercase border-b border-gray-700" style="color: #070A52;">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Address
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Phone
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Notes
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3 font-extrabold">
                                Action
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
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                $2999
                            </td>
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                $2999
                            </td>
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                <button class="custom-button" type="button" onclick="toggleModal('modal-id')">
                                    Details
                                </button>
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
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                $2999
                            </td>
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                $2999
                            </td>
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                <button class="custom-button">
                                    Details
                                </button>
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
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                $2999
                            </td>
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                $2999
                            </td>
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                <button class="custom-button">
                                    Details
                                </button>
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
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                $2999
                            </td>
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                $2999
                            </td>
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                <button class="custom-button">
                                    Details
                                </button>
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
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                $2999
                            </td>
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                $2999
                            </td>
                            <td class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
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

<script type="text/javascript">
    function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }
</script>
@endsection