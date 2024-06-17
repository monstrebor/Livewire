
@extends('Layout.layout')


    @section('title','Login')

    @section('script')
    <link rel="stylesheet" href="css/login2.css">
    <link rel="icon" href="img/final_logo-removebg-preview-removebg-preview.png">
    <script src="https://cdn.tailwindcss.com"></script>

    @endsection


    @section('content')

    <div class="grid grid-cols-2">
        <div class="container h-screen content-center">
            <p class="top-text ml-5 mt-2 font-bold text-white text-lg tracking-widest">WAIS</p>
            <img src="img/final_logo-removebg-preview-removebg-preview.png" alt="" class="h-72 w-80 ml-52">
            <p class="text-center text-white font-bold text-xl mt-3">Mahal na Señor Multipurpose Cooperative</p>
            <p class="text-center text-white text-sm">Lorem ipsum dolor sit amet consectetur.</p>
        </div>

        <div class="bg-white bg-transparent p-8 w-full max-w-md m-40">
            <h2 class="text-2xl font-bold mb-10 text-lime-500 text-center">Login to your account</h2>
            <form>
                <div class="mb-4">
                    <label for="username" class="block text-lime-500 font-bold mb-2">Username</label>
                    <input type="text" placeholder="Input your username" autocomplete="text" aria-label="text" class="block w-full rounded-2xl border border-lime-600 bg-transparent py-4 pl-6 pr-20 text-base/6 text-neutral-950 ring-4 ring-transparent transition placeholder:text-lime-700 focus:border-neutral-950 focus:outline-none focus:ring-neutral-950/5"/>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-lime-500 font-bold mb-2">Password</label>
                    <input type="password" placeholder="Input your password" autocomplete="password" aria-label="Password" class="block w-full rounded-2xl border border-lime-600 bg-transparent py-4 pl-6 pr-20 text-base/6 text-neutral-950 ring-4 ring-transparent transition placeholder:text-lime-700 focus:border-neutral-950 focus:outline-none focus:ring-neutral-950/5"/>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <label for="remember" class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="form-checkbox">
                        <span class="ml-2 text-lime-700">Remember me</span>
                    </label>
                    <a href="#" class="text-lime-600 hover:underline">Forgot Password?</a>
                </div>
                <button type="submit" class="cbutton ml-32 mt-4 rounded-2xl">Login</button>
            </form>
            <p class="mt-4 text-gray-700 text-center">Don't have an account? <a href="{{route('regular.index')}}" class="text-lime-600 hover:underline">Register here</a>.</p>
        </div>
    </div>

    @endsection


