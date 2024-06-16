            <!-- nav bar -->
            <div class="bg-slate-800 gap-1 text-white flex w-full h-7 text-xs text-righ justify-end">
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>
                <h1 class="mr-4 mt-1.5">(044)12345</h1>
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <h1 class="mr-4 mt-1.5">Saogcooperative</h1>
            </div>

            <div>
                <nav class="p-5 bg-slate-700 shadow md:flex md:items-center md:justify-between text-white">
                    <div class="flex justify-between items-center uppercase font-bold">
                        <div class="flex items-center text-2 xl font-sans cursor-pointer">
                            <img src="/img/final_logo-removebg-preview-removebg-preview.png" class="h-10 mr-2">
                            <p class="uppercase font-bold">Mahal na Señor<br>Multipurpose Cooperative</p>
                        </div>

                        <span class="text-3xl cursor-pointer md:hidden block">
                            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                        </span >
                    </div>

                    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-slate-700 w-full left-0 md:w-auto md:py-0 py-4 md:pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 font-semibold text-white">

                        <li class="mx-5 my-6 md:my-0"><a href="#" class="text-lg hover:text-slate-500 transition duration-500">Services</a></li>
                        <li class="mx-5 my-6 md:my-0"><a href="#" class="text-lg hover:text-slate-500 transition duration-500">Membership</a></li>
                        <li class="mx-5 my-6 md:my-0"><a href="" class="text-lg hover:text-slate-500 transition duration-500">Contact</a></li>
                        <li class="mx-5 my-6 md:my-0"><a href="{{route('Home.index')}}" class="text-lg hover:text-slate-500 transition duration-500">Home</a></li>
                        <a href="{{route('Login.index')}}"><button class="mr-3 ml-3 button-27 bg-white border-1 border-lime-700 rounded-lg text-slate-600 font-bold text-md py-4 px-6 transition duration-300 ease-in-out transform hover:shadow-md hover:-translate-y-1 hover:bg-slate-400 disabled:pointer-events-none disabled:opacity-50 shadow-inner">Be a Member</button></a>
                    </ul>
                </nav>
            </div>

            <!-- end of navbar -->
