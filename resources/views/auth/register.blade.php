@extends('layouts.app')
@section('content')
<div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 h-screen max-sm:h-64 rounded-2xl bg-white" style="background-color:  #070A52;">
    <!-- Left Column -->
    <div class="max-md:hidden flex items-center justify-center bg-transparent">
        <img src="{{ asset('img/register page.svg') }}" alt="">
    </div>

    <!-- Right Column -->
    <div class="flex items-center justify-center rounded-5xl bg-white">
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full">
                <h2 class="mt-10 text-center text-5xl leading-9 tracking-tight text-black font-semibold">Create new
                    Account
                </h2>
                <h2 class="mt-2 text-md text-center leading-9 tracking-tight text-gray-400 font-normal">Kindly fill
                    the
                    fololwing information to create new account
                </h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required placeholder="Email" class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600">
                            @if($errors->has('email'))
                            <div class="text-red-500 text-sm mt-1">
                                {{ $errors->first('email') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="password" required placeholder="Password" class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600">
                            @if($errors->has('password'))
                            <div class="text-red-500 text-sm mt-1">
                                {{ $errors->first('password') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="flex mt-2">
                        <div class="w-1/2 pr-2">
                            <input id="firstname" name="firstname" type="text" autocomplete="firstname" required placeholder="First Name" class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600">
                            @if($errors->has('firstname'))
                            <div class="text-red-500 text-sm mt-1">
                                {{ $errors->first('firstname') }}
                            </div>
                            @endif
                        </div>
                        <div class="w-1/2 pl-2">
                            <input id="lastname" name="lastname" type="text" autocomplete="lastname" required placeholder="Last Name" class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400  focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600">
                            @if($errors->has('lastname'))
                            <div class="text-red-500 text-sm mt-1">
                                {{ $errors->first('lastname') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div>
                        <div class="mt-2">
                            <input id="address" name="address" type="text" autocomplete="address" required placeholder="Address" class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600">
                            @if($errors->has('address'))
                            <div class="text-red-500 text-sm mt-1">
                                {{ $errors->first('address') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="flex mt-2">
                        <div class="w-2/3 pr-2">
                            <input id="phone" name="phone" type="text" autocomplete="phone" required placeholder="Phone Number" class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600">
                            @if($errors->has('phone'))
                            <div class="text-red-500 text-sm mt-1">
                                {{ $errors->first('phone') }}
                            </div>
                            @endif
                        </div>
                        <div class="w-1/3 pl-2">
                            <input id="age" name="age" type="text" autocomplete="age" required placeholder="Age" class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600">
                            @if($errors->has('age'))
                            <div class="text-red-500 text-sm mt-1">
                                {{ $errors->first('age') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="flex mt-2">
                        <div class="w-1/2 pr-2">
                            <!-- <div class="relative" id="dropdownButton">
                                <div onclick="toggleDropdown()" id="dropdownButtonContent" class="px-3 py-1 rounded-lg cursor-pointer font-bold flex justify-between items-center bg-gray-100">
                                    <div id="selectedOptionText" class="font-normal text-black">Gender</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                                <div id="dropdown" class="absolute top-full left-0 w-full rounded-lg bg-gray-100 shadow-md hidden">
                                    <div onclick="selectOption('Male')" class="text-black cursor-pointer p-2 hover:bg-gray-300 rounded-lg">
                                        Male
                                    </div>
                                    <div onclick="selectOption('Female')" class="text-black cursor-pointer p-2 hover:bg-gray-300 rounded-lg">
                                        Female
                                    </div>
                                </div>
                            </div> -->

                            <select id="gender" name="gender" autocomplete="gender" required class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600">
                                <option value="null" selected>Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                            @if($errors->has('gender'))
                            <div class="text-red-500 text-sm mt-1">
                                {{ $errors->first('gender') }}
                            </div>
                            @endif
                        </div>

                        <div class="w-1/2 pl-2">
                            <select id="role" name="role" autocomplete="role" required class="p-5 bg-gray-100 w-full rounded-md py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600">
                                <option value="null" selected>Role</option>
                                <option value="patient">Patient</option>
                                <option value="doctor">Doctor</option>
                            </select>
                            @if($errors->has('role'))
                            <div class="text-red-500 text-sm mt-1">
                                {{ $errors->first('role') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div>
                        <div class="flex items-start mb-2">
                            <div class="text-sm">
                                Already have an account ?
                                <a href="/login" class="font-semibold text-indigo-600 hover:text-indigo-500">Login</a>
                            </div>
                        </div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign Up</button>
                    </div>
                </form>
            </div>
            <img class="mx-auto mt-10 lg:h-24 w-auto" src="{{ asset('img/logo1.svg') }}" alt="Your Company">
        </div>
    </div>
</div>
</div>
<script src="{{ asset('js/register.js') }}"></script>
@endsection