@extends('layout.layout')

    
    @section('title','Downloads')

    @section('script')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/download.css">
    @endsection


    


    @section('content')

    @include('Partials.navbar')

    <div class="image1 opacity-50 w-full h-80 py-4 bg-slate-500 shadow-2xl bg-cover">
        <p class="ml-10 m-5 pt-20 font-bold text-black text-4xl tracking-wide text-center lg:my-10 flex items-center justify-center">Download Page</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 text-sm mb-36 mt-20">
        <div class="flex flex-col justify-center items-center w-96 h-64 bg-slate-300 ml-12 lg:ml-56 my-5 shadow-lg rounded-xl">
            <h1 class="m-5 font-bold text-slate-700 text-xl tracking-wide text-center lg:my-10">Regular Membership Form</h1>
            <a href="" class="mt-2" download>
                <button class="bg-blue-500 hover:bg-slate-500 transition duration-300 text-white px-4 py-2 rounded">Download File</button>
            </a>
        </div>

        <div class="flex flex-col justify-center items-center w-96 h-64 bg-slate-300 ml-12 lg:ml-24 my-5 shadow-lg rounded-xl">
            <h1 class="m-5 font-bold text-slate-700 text-xl tracking-wide text-center lg:my-10">MNSMPC Primer</h1>
            <a href="{{route('download.primer')}}" class="mt-2" download>
                <button class="bg-blue-500 hover:bg-slate-500 transition duration-300 text-white px-4 py-2 rounded">Download File</button>
            </a>
        </div>
    </div>

    @include('Partials.footer')

    @section('content')
