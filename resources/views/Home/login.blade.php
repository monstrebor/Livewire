
@extends('Layout.layout')


    @section('title','Login')

    @section('script')
    <link rel="stylesheet" href="{{asset('/css/login2.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    @endsection


    @section('content')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm mb-3">
        <div class="container h-screen content-center hidden md:block">
          <a href="{{route('Home.index')}}"><p class="top-text ml-5 mt-2 font-bold text-white text-lg tracking-widest">WAIS</p></a>
          <a href="{{route('Home.index')}}"><img src="{{asset('/img/final_logo-removebg-preview-removebg-preview.png')}}" alt="" class="h-72 w-80 lg:ml-52 md:ml-20 "></a>
            <p class="text-center text-white font-bold text-xl mt-3">Mahal na Señor Multipurpose Cooperative</p>
            <p class="text-center text-white text-sm">"Earn and Save Cooperative Way"</p>
        </div>

        <div class="bg-white bg-transparent p-8 w-full max-w-md sm:m-40">

            <h2 class="text-2xl font-bold mb-10 text-slate-500 text-center">Login to your account</h2>



            @if (session('error'))
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">{{{session('error')}}}</span> .Change a few things up and try submitting again.
              </div>

            @endif

            <form action="{{route('login.store')}}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="username" class="block text-slate-500 font-bold mb-2">Email</label>
                    <input type="email" placeholder="Input your email" name="email"  aria-label="text" class="block w-full rounded-2xl border border-slate-600 bg-transparent py-4 pl-6 pr-20 text-base/6 text-neutral-950 ring-4 ring-transparent transition placeholder:text-slate-700 focus:border-neutral-950 focus:outline-none focus:ring-neutral-950/5"/>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-slate-500 font-bold mb-2">Password</label>
                    <input type="password" placeholder="Input your password" name="password" autocomplete="password" aria-label="Password" class="block w-full rounded-2xl border border-slate-600 bg-transparent py-4 pl-6 pr-20 text-base/6 text-neutral-950 ring-4 ring-transparent transition placeholder:text-slate-700 focus:border-neutral-950 focus:outline-none focus:ring-neutral-950/5"/>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <label for="remember" class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="form-checkbox">
                        <span class="ml-2 text-slate-700">Remember me</span>
                    </label>
                    <a href="#" class="text-slate-600 hover:underline">Forgot Password?</a>
                </div>

                <input type="submit" name="submit" class="cbutton ml-32 sm:ml-32 mt-4 rounded-2xl flex justify-center">

            </form>
            <p class="mt-4 text-gray-700 text-center">Don't have an account? <a href="{{route('regular.register')}}" class="text-slate-600 hover:underline">Register here</a>.</p>
        </div>
    </div>

    @endsection


