@extends('layout.layout')


@section('title','admin')

   @section('script')
    <link rel="stylesheet" href="{{asset('/css/adminSide.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @endsection

@section('content')

<body class="bg-white">

    <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Open()">
        <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span>

    <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center">
                <img src="/img/final_logo-removebg-preview-removebg-preview.png" alt="logo" class="h-10">
                <h1 class="font-bold text-gray-200 text-lg ml-3 tracking-widest">WAIS</h1>
                <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Open()"></i>
            </div>

            <hr class="my-2 text-gray-600">
            <div class="p-2.5 mt-3 flex items-center rounded-md px-1 text-white">
                <span class="text-[15px] ml-4 text-gray-200">Admin</span>
            </div>


            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white" onclick="dropdown()">
                <i class="bi bi-gear"></i>
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200">Maintenance</span>
                    <span class="text-sm rotate-180" id="arrow">
                    <i class="bi bi-chevron-down"></i>
                    </span>
                </div>
            </div>

            <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
                <h1 class="cursor-pointer p-4 hover:bg-slate-600 rounded-md mt-1">Charts of accounts</h1>
                <h1 class="cursor-pointer p-4 hover:bg-slate-600 rounded-md mt-1">Member Application</h1>
                <h1 class="cursor-pointer p-4 hover:bg-slate-600 rounded-md mt-1">Types of members</h1>
                <h1 class="cursor-pointer p-4 hover:bg-slate-600 rounded-md mt-1">Membership Application requirements</h1>
                <h1 class="cursor-pointer p-4 hover:bg-slate-600 rounded-md mt-1">Types of loans <br> (Terms and condition)</h1>
                <h1 class="cursor-pointer p-4 hover:bg-slate-600 rounded-md mt-1">SD/TD interest rate</h1>
                <h1 class="cursor-pointer p-4 hover:bg-slate-600 rounded-md mt-1">Payment method</h1>
            </div>



            <hr class="my-11 text-gray-600">
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white">
                <i class="bi bi-gear"></i>
                <span class="text-[15px] ml-4 text-gray-200">Settings</span>
            </div>

            <a href="{{route('logout')}}"> <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white">
                <i class="bi bi-box-arrow-left"></i>
                <span class="text-[15px] ml-4 text-gray-200">Logout</span>
            </div> </a>
        </div>
    </div>
    <div class="imagebg w-full h-40 bg-slate-600 py-4 shadow-2xl bg-cover">
    </div>

    @livewire('regular-member')

    <script src="{{asset('/js/adminSide.js')}}}"></script>
    <script>
    document.getElementById('details-link').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default link behavior
        // Show the hidden form
        document.getElementById('details-modal').classList.remove('hidden');
    });

    document.getElementById('close-modal').addEventListener('click', function () {
        document.getElementById('details-modal').classList.add('hidden');
    });
    </script>
</body>
@endsection
