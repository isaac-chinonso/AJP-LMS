@extends('layout.header')
@section('title')
Student Login || Ajayi Polytechnic LMS
@endsection

@section('content')

<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="login-login.html" class="-intro-x flex items-center pt-5">
                <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="assets/images/logo.jpg" />
                <span class="text-white text-lg ml-3"> AJAYI <span class="font-medium">POLYTECHNIC </span> </span>
            </a>
            <div class="my-auto">
                <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="assets/images/illustration.svg" />
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    Online Educational System
                </div>
                <div class="-intro-x mt-5 text-lg text-white">All lectures and needed materials are provided via our online platform, so you’ll easily access them from the comfort of your home.</div>
            </div>
        </div>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Student Login
                </h2>
                <div class="intro-x mt-2 text-gray-500 text-center">Please Login with your Matric Number and password </div>
                <form method="post" action="{{ route('login') }}">
                    <div class="intro-x mt-8">
                        <div class="form-group">
                            <label>Matric Number</label>
                            <input type="text" name="username" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Enter Matric Num" />
                        </div><br>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Enter Password" />
                        </div>
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Login </button>
                    </div>
                    <div class="intro-x mt-10  text-gray-700 text-center xl:text-left">
                        <p>© 2020 Ajayi Polytechnic Crafted with <i class="fa fa-heart"></i> <a href="http://wa.me/2349035820637" target="_blank">by Dcode Arena</a></p>
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>
        </div>
        <!-- END: Login Form -->
    </div>
</div>

@endsection