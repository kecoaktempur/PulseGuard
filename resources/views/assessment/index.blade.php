@extends('layouts.app')
@section('content')
@php
use App\Models\Assessment;
use Illuminate\Support\Facades\Auth;

if (Auth::guard('web')->check()) {
    $assessments = Assessment::whereHas('patients', function ($query) {
        $query->where('patient_id', Auth::user()->id);
    })->paginate(10);
}
else if (Auth::guard('doctors')->check()) {
    $assessments = Assessment::whereHas('doctors', function ($query) {
        $query->where('doctor_id', Auth::guard('doctors')->user()->id);
    })->paginate(10);
}
else if (Auth::guard('admins')->check()) {
    $assessments = Assessment::paginate(10);
}
@endphp
<div class="p-4 sm:ml-20">
    <div class="p-4">
        <div class="flex flex-col rounded-2xl p-5 h-screen relative" style="background-color: white;">
            <h1 class="text-2xl font-bold mb-2" style="color: #070A52;">Assessment History</h1>
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
                    <tbody>
                        <tr>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ $count++ }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ $assessment->patients->first()->firstname }} {{ $assessment->patients->first()->lastname }}
                            </th>
                            <th class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($assessment->datetime)->format('j F Y') }}
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($assessment->datetime)->format('H:i:s') }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ $assessment->status ?? 'Waiting' }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ $assessment->is_verified ? 'Verified' : 'Not Verified' }}
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                {{ $assessment->doctors->first()->firstname }} {{ $assessment->doctors->first()->lastname }}
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                <button class="custom-button">
                                    Details
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="absolute bottom-0 right-0 mb-4 mr-4">
                <div class="inline-flex rounded-md">
                    <!-- <button onclick="next()" class="px-4 py-2 text-sm font-medium text-stone-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-stone-900 focus:text-stone-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                    <button onclick="prev()" class="px-4 py-2 text-sm font-medium text-stone-900 bg-white border border-gray-200 rounded-r-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-stone-900 focus:text-stone-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button> -->
                    {{ $assessments->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection