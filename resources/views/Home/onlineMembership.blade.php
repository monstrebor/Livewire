@extends('layout.layout')


@section('title','Online Membership')

   @section('script')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('/css/onlineMembership.css')}}">
    @endsection

    @section('content')

    <div>

        @include('Partials.navbar')

            <div class="image1 w-full h-80 py-4 bg-slate-500 shadow-2xl bg-cover">
                <div class="lg:w-2/5 w-96 h-64 pt-1 bg-slate-300 bg-opacity-70 ml-12 lg:ml-20 my-5 shadow-lg rounded-xl flex justify-center">
                    <p class="ml-10 m-5 font-bold text-slate-700 text-4xl tracking-wide text-center lg:my-10">Become a MNSMPC member through our online Membership</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 sm:px-24 mt-10 gap-10">
                <div class="col-span-2 p-4">
                    <h1 class="font-bold text-4xl text-slate-700 tracking-wide mb-14">Online Membership</h1>

                    <section>
                        <h2 class="mt-4 font-semibold text-3xl text-slate-700">STEP 1</h2><br>
                        <p class="text-base sm:text-lg flex items-center text-slate-700 font-normal mb-5">Documents Needed:</p>
                        <ol type="1" class="mb-10">
                            <li class="text-base sm:text-lg flex items-center text-slate-500 font-normal">1. Two valid IDs</li>
                            <li class="text-base sm:text-lg flex items-center text-slate-500 font-normal">2. Proof of Billing</li>
                            <li class="text-base sm:text-lg flex items-center text-slate-500 font-normal">3. 2x2 picture</li>
                        </ol>
                    </section>

                    <section>
                        <h2 class="mt-4 font-semibold text-3xl text-slate-700">STEP 2</h2><br>
                        <p class="text-base sm:text-lg flex items-center text-slate-600 font-normal mb-5">Fill out the application form online, upload the requirements needed</p>
                        <p class="text-base sm:text-lg flex items-center text-slate-600 font-normal mb-10">Submit the form</p>
                    </section>

                    <section>
                        <h2 class="mt-4 font-semibold text-3xl text-slate-700">STEP 3</h2><br>
                        <p class="text-base sm:text-lg flex items-center text-slate-600 font-normal mb-10">Attend the membership seminar at the MNSMPC office (every Saturday).</p>
                    </section>
                </div>

                <div>
                    <a href="{{route('regular.register')}}"><button class="button mx-5">
                        Apply Online
                    <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                            <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                    </a>
                </div>
            </div>


            @include('Partials.footer')

@endsection
