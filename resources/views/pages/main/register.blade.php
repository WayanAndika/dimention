@extends('template.layout')
@section('content')
    <section class="bg-second-100">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 bg-first-100">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold text-second-100 text-center">
                        SIGN UP NEW ACCOUNT
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/sign-up" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('name')text-red-500 @enderror">Your Name</label>
                            <input type="text" name="name" id="name" class="bg-second-100 sm:text-sm rounded-lg block w-full p-2.5 @error('name') border border-red-500 text-red-500 @enderror" placeholder="Ex: Joko" required="" value="{{ old('name') }}">
                            @error('name')
                            <p class="mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span></p>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('email')text-red-500 @enderror">Your Email</label>
                            <input type="email" name="email" id="email" class="bg-second-100 sm:text-sm rounded-lg block w-full p-2.5 @error('email') border border-red-500 text-red-500 @enderror" placeholder="Ex: name@gmail.com" required="" value="{{ old('email') }}">
                            @error('email')
                            <p class="mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span></p>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('password')text-red-500 @enderror">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-second-100 sm:text-sm rounded-lg block w-full p-2.5 @error('password') border border-red-500 text-red-500 @enderror" required="">
                            @error('password')
                            <p class="mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span></p>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('confirm-password')text-red-500 @enderror">Confirm password</label>
                            <input type="password" name="confirm-password" id="password" placeholder="••••••••" class="bg-second-100 sm:text-sm rounded-lg block w-full p-2.5 @error('confirm-password') border border-red-500 text-red-500 @enderror" required="">
                            @error('confirm-password')
                            <p class="mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span></p>
                            @enderror
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" class=" btn bg-white border-white hover:border-white hover:text-white text-first-100">Create Account</button>
                        </div>
                        <p class="text-sm font-light text-white text-center">
                            Already have an account? <a href="/sign-in" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection