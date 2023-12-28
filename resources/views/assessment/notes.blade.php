@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-20">
    <div class="p-4">
        <div class="flex flex-col rounded-2xl p-5 h-[90vh] max-md:h-full relative" style="background-color: white;">
            <form action="{{ route('assessment.finish') }}" method="POST">
                @csrf
                <h1 class="text-4xl font-bold mb-2 text-center" style="color: #070A52;">Add notes for your doctor</h1>
                <div class="m-16">
                    <h1 class="text-xl font-bold mb-2" style="color: #070A52;">Select your doctor</h1>
                    <select id="doctor" name="doctor" autocomplete="doctor" required class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600 mb-5">
                        <option value="null" selected>-</option>
                        @foreach($doctors as $doctor)
                        <option value="{{$doctor->id}}">{{$doctor->firstname}} {{$doctor->lastname}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('doctor'))
                    <div class="text-red-500 text-sm mt-1">
                        {{ $errors->first('doctor') }}
                    </div>
                    @endif

                    <h1 class="text-xl font-bold mt-10 mb-2" style="color: #070A52;">Your message</h1>
                    <textarea id="notes" name="notes" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                </div>

                <div class="flex items-center mt-auto">
                    <div class="flex justify-between w-3/4 mx-auto">
                        <button class="mb-10 max-md:mt-10 text-sm space-x-2 custom-button2 w-1/4">
                            Go Back to Question
                        </button>
                        <button class="mb-10 max-md:mt-10 text-sm space-x-2 custom-button2 w-1/4">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection