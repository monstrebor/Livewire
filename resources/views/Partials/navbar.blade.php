            <!-- nav bar -->
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
                        <li class="mx-5 my-6 md:my-0"><a href="#" class="text-lg hover:text-slate-500 transition duration-500">Home</a></li>
                        <li class="mx-5 my-6 md:my-0"><a href="#" class="text-lg hover:text-slate-500 transition duration-500">Products/Services</a></li>
                        <li class="mx-5 my-6 md:my-0"><a href="#" class="text-lg hover:text-slate-500 transition duration-500">Membership</a></li>
                        <li class="mx-5 my-6 md:my-0"><a href="#" class="text-lg hover:text-slate-500 transition duration-500">Contact</a></li>
                        <li class="mx-5 my-6 md:my-0"><a href="#" class="text-lg hover:text-slate-500 transition duration-500">Home</a></li>
                        <button class="mr-3 ml-3 button-27 bg-white border-1 border-lime-700 rounded-lg text-slate-600 font-bold text-md py-4 px-6 transition duration-300 ease-in-out transform hover:shadow-md hover:-translate-y-1 hover:bg-slate-400 disabled:pointer-events-none disabled:opacity-50 shadow-inner"><a href="{{route('Login.index')}}">Be a Member</a></button>
                    </ul>
                </nav>
            </div>
            <!-- end of navbar -->