@extends('Home.layout')

@section('content')

<body class="bg-white">
    <div>
        <!-- header -->
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
        <!-- end of header -->

        <!-- nav bar -->

        @include('Partials.navbar')

        <!-- end of navbar -->

        <!-- img slider -->
        <div class="slideshow-container md:w-auto shadow-lg rounded-b-xl">
            <div class="mySlides fade">
                <div class="numbertext">1/3</div>
                <img src="img/saog1.jpg" class="w-full h-80 sm:h-96 object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-white bg-slate-500 bg-opacity-70 p-2 rounded text text-xl font-bold">"EARN AND SAVE COOPERATIVE WAY"<p class="indent-2 text-md">Tagline</p></span>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2/3</div>
                <img src="img/coop4.jpg" class="w-full h-80 sm:h-96 object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-white bg-slate-500 bg-opacity-70 p-2 rounded text text-xl font-bold">Office Hours: 9AM-5PM <br> Monday-Friday <br> Saturday-8:00 AM-12:00NN</span>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3/3</div>
                <img src="img/saog2.jpg" class="w-full h-80 sm:h-96 object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-white bg-slate-500 bg-opacity-70 p-2 rounded text text-xl font-bold">Kooperatibang May Prinsipyo
                </div>
            </div>

            <a class="prev rounded-xl hover:bg-slate-500" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next rounded-xl hover:bg-slate-500" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div class="text-center">
            <span class="dot" onclick="currentSlides(1)"></span>
            <span class="dot" onclick="currentSlides(2)"></span>
            <span class="dot" onclick="currentSlides(3)"></span>
        </div>
        <!-- img slider end -->

        <!-- break -->
        <div class="imagebg w-full h-80 bg-slate-600 py-4 shadow-2xl bg-cover">
            <div class="lg:w-2/5 w-96 h-64 pt-1 bg-white ml-12 lg:ml-20 my-5 shadow-lg rounded-xl">
                <p class="ml-10 m-5 font-bold text-slate-700">May edad na 17 pababa hanggang 60 taung gulang <br> Maaring mag-impok o mamuhunan sa ating Kooperatiba.</p>
                <button class="discover m-10 px-4 mt-10">BILANG ASSOCIATE MEMBER</button>
            </div>
        </div>
        <!-- end of break -->

        <!-- card-hover -->
        <div class="card-with-hover">
            <div id="card-area">
                <div class="wrapper">
                    <div class="box-area">
                        <div class="box">
                            <img src="img/coop1.jpg" alt="">
                            <div class="overlay">
                                <h3>Online</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cumque, quia eligendi porro fugit nobis.</p>
                                <a href="#" class="hover:bg-slate-600 transtion duration-200">Learn More</a>
                            </div>
                        </div>

                        <div class="box">
                            <img src="img/coop1.jpg" alt="">
                            <div class="overlay">
                                <h3>Membership</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cumque, quia eligendi porro fugit nobis.</p>
                                <a href="#" class="hover:bg-slate-600 transtion duration-200">Learn More</a>
                            </div>
                        </div>

                        <div class="box">
                            <img src="img/coop1.jpg" alt="">
                            <div class="overlay">
                                <h3>Frequently Asked Questions</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cumque, quia eligendi porro fugit nobis.</p>
                                <a href="#" class="hover:bg-slate-600 transtion duration-200">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of card-hover -->

        <!-- picture -->
        <div class="imagebg w-full h-80 bg-slate-600 py-4 shadow-2xl bg-cover">
            <div class="lg:w-2/5 w-96 h-64 pt-1 bg-white ml-12 lg:ml-20 my-5 shadow-lg rounded-xl">
                <p class="ml-10 m-5 font-bold text-slate-700">Naninirahan sa Marilao, Bulacan.<br>
                    May gulang na 18-60 taong gulang  may kakayahang makapagkontrata nang naaayon sa batas at may pinagkakakitaan. <br>
                    May pirmihang hanapbuhay o pinagkakakitaan </p>
                <button class="discover m-10 px-4 mt-0">BILANG REGULAR MEMBER</button>
            </div>
        </div>
        <!-- end picture -->

        <!-- contact us -->
        <div class="my-20">
            <div class="flex justify-center mt-10 mb-5">
                <p class="text-slate-700 font-light text-2xl tracking-wide text-center">Got some questions? Feel free to contact us</p>
            </div>
            <div class="flex justify-center">
                <p class="text-sm text-slate-600">Get in touch with us</p>
            </div>
            <div class="flex justify-center">
                <button class="cbutton mt-1 text-slate-600">Contact Us</button>
            </div>
        </div>
        <!-- end of contact us -->

        <!-- footer, all about -->
        @include('Partials.footer')
        <!-- end of footer, all about -->


    <script src="js/script.js">
    </script>
@endsection

