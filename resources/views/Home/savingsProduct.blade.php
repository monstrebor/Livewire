@extends('layout.layout')

    @section('title','Product Savings')


   @section('script')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/onlineMembership.css">
    @endsection



    @section('content')

    @include('Partials.navbar')

    <div class="image1 w-full h-80 py-4 bg-slate-500 shadow-2xl bg-cover">
        <div class="lg:w-2/5 w-96 h-64 pt-1 bg-slate-300 bg-opacity-70 ml-12 lg:ml-20 my-5 shadow-lg rounded-xl flex justify-center">
            <p class="ml-10 m-5 font-bold text-slate-700 text-3xl tracking-wide text-center lg:my-10">Let us give you the loan that you deserve.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 sm:px-24 mt-10 gap-10">
        <div class="col-span-2 p-4">
            <h1 class="font-bold text-4xl text-slate-700 tracking-wide mb-14">SAVINGS PRODUCT</h1>

            <section>
                <h2 class="mt-4 font-semibold text-3xl text-slate-700">Share Capital</h2><br>
                <p class="text-base sm:text-lg flex items-center text-slate-600 font-normal mb-10">– ito ang tinatawag na 
                    Saping Puhunan na hindi maaring ma withdraw maliban kung magbibitiw na sa pagiging kasapi. Ang patubo sa lagak na ito ay batay sa kinikita ng Kooperatiba sa loob ng isang taon. Dito din ibinabatay ang halaga ng maaring mautang ng isang kasapi.</p>
            </section>

            <section>
                <h2 class="mt-4 font-semibold text-3xl text-slate-700">Saving Deposit ( o sariling pag-iimpok )</h2><br>
                <p class="text-base sm:text-lg flex items-center text-slate-600 font-normal mb-10"> – Ito ang lagak na maaaring ma-withdraw anumang oras na bukas ang tanggapan. Ito ay kumikita ng tubong higit na mataas kaysa bigay ng bangko at walang withholding tax.</p>
            </section>

            <section>
                <h2 class="mt-4 font-semibold text-3xl text-slate-700">Time Deposit</h2><br>
                <p class="text-base sm:text-lg flex items-center text-slate-600 font-normal mb-10"> – Ito ay lagak na may takdang panahon bago ma-withdraw at higit na mataas ang patubo kaysa bangko at walang withholding tax. Maaaring gamitin itong collateral sa loan.</p>
            </section>
        </div>
    </div>

    @include('Partials.footer')

@endsection