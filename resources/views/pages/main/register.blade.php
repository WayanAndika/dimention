@extends('template.layout')
@section('content')
    <section class="bg-second-100">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 bg-gradient-to-r from-first-100 to-third-100">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold text-second-100 text-center">
                        SIGN UP NEW ACCOUNT
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-second-100 sm:text-sm rounded-lg block w-full p-2.5" placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-second-100 sm:text-sm rounded-lg block w-full p-2.5" required="">
                        </div>
                        <div>
                            <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                            <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-second-100 sm:text-sm rounded-lg block w-full p-2.5" required="">
                        </div>
                        <div class="flex justify-center">
                            <button type="button" class=" btn bg-white border-white hover:border-white hover:text-white text-first-100">Create Account</button>
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