@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">

        <form action="{{ route('register') }}" method="post">

            @csrf

            <div class="mb-4">

                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror " valus="">

                @error('name')

                <div class="text-red-500 mt-2 text-sm">

                    {{ $message}}

                </div>

                @enderror

            </div>


            <div class="mb-4">

                <label for="name" class="sr-only">Username</label>
                <!-- <input type="text" name="Username" id="Username" placeholder=" Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" valus=""> -->


                <input type="text" name="Username" id="Username" placeholder="Your Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror " valus="">

                @error('username')

                <div class="text-red-500 mt-2 text-sm">

                    {{ $message}}

                </div>

                @enderror

            </div>


            <div class="mb-4">

                <label for="Email" class="sr-only">Email</label>
                <!-- <input type="text" name="Email" id="Email" placeholder=" Your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" valus=""> -->

                <input type="text" name="Email" id="Email" placeholder="Your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror " valus="">

                @error('email')

                <div class="text-red-500 mt-2 text-sm">

                    {{ $message}}

                </div>

                @enderror





            </div>

            <div class="mb-4">

                <label for="Password" class="sr-only">Password</label>


                <!-- <input type="text" name="Password" id="Password" placeholder=" Choose Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" valus=""> -->


                <input type="text" name="Password" id="Password" placeholder="Your Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror " valus="">

                @error('password')

                <div class="text-red-500 mt-2 text-sm">

                    {{ $message}}

                </div>

                @enderror




            </div>


            <div class="mb-4">

                <label for="Password_confirmation" class="sr-only">Reapeat your password</label>
                <input type="password" name="Password_confirmation" id="Password_confirmation" placeholder=" Choose Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" valus="">

            </div>


            <div class="mb-4">

                <button type="submit" class="bg-blue-500 border-2 w-full p-4 rounded-lg">Register </button>

            </div>

        </form>

    </div>
</div>


@endsection