@extends('layout.layout')


@section('title','Home')

    @section('script')
    <link rel="stylesheet" href="{{asset('/css/cashier.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="{{asset('/js/cashier.js')}}"></script>
    @endsection



</head>
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
                <span class="text-[15px] ml-4 text-gray-200">Cashier</span>
            </div>

            <!-- Dashboard -->
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white">
                <i class="bi bi-speedometer2"></i>
                <span class="text-[15px] ml-4 text-gray-200">Dashboard</span>
            </div>
            <!-- end of Dashboard -->

            <!-- Mambers -->
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white" onclick="dropdown('membersSubmenu', 'membersArrow')">
                <i class="bi bi-people"></i>
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200">Members</span>
                    <span class="text-sm rotate-180" id="membersArrow">
                    <i class="bi bi-chevron-up"></i>
                    </span>
                </div>
            </div>

            <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto hidden" id="membersSubmenu">
                <h1 class="cursor-pointer p-3 hover:bg-slate-600 rounded-md mt-1">Members Information</h1>
                <h1 class="cursor-pointer p-3 hover:bg-slate-600 rounded-md mt-1 mb-1">Members Application</h1>
            </div>
            <!-- End of members -->

            <!-- transaction -->
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white" onclick="dropdown('transactionSubmenu', 'transactionArrow')">
                <i class="bi bi-cash-coin"></i>
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200">Transaction</span>
                    <span class="text-sm rotate-180" id="transactionArrow">
                    <i class="bi bi-chevron-up"></i>
                    </span>
                </div>
            </div>

            <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto hidden" id="transactionSubmenu">
                <h1 class="cursor-pointer p-3 hover:bg-slate-600 rounded-md mt-1">CRB</h1>
                <h1 class="cursor-pointer p-3 hover:bg-slate-600 rounded-md mt-1">CDB</h1>
                <h1 class="cursor-pointer p-3 hover:bg-slate-600 rounded-md mt-1 mb-1">JVR/JB</h1>
            </div>
            <!-- end of transaction -->

            <!-- Expenses -->
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white">
                <i class="bi bi-receipt"></i>
                <span class="text-[15px] ml-4 text-gray-200">Expenses</span>
            </div>
            <!-- End of Expeneses -->

            <!-- Payroll -->
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white">
                <i class="bi bi-credit-card"></i>
                <span class="text-[15px] ml-4 text-gray-200">Payroll</span>
            </div>
            <!-- end of Payroll -->

            <!-- Reports -->
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white">
                <i class="bi bi-book"></i>
                <span class="text-[15px] ml-4 text-gray-200">Reports</span>
            </div>
            <!-- end of reports -->

            <hr class="my-11 text-gray-600">
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white">
                <i class="bi bi-gear"></i>
                <span class="text-[15px] ml-4 text-gray-200">Settings</span>
            </div>

           <a href="{{route('logout')}}"><div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white">
                <i class="bi bi-box-arrow-left"></i>
                <span class="text-[15px] ml-4 text-gray-200">Logout</span>
            </div></a>
        </div>
    </div>

    <div class="imagebg w-full h-40 bg-slate-600 py-4 shadow-2xl bg-cover">
    </div>

</body>
</html>
