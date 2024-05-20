@extends('Home.layout')

@section('content')
        <div>
            <div>
                <!-- header -->
                <div class="bg-lime-600 gap-1 text-white flex w-full h-7 text-xs text-righ justify-end">
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
                    <img src="img/coop1.jpg" class="w-full h-80 sm:h-96 object-cover">
                    <div class="text">Cation Here</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2/3</div>
                    <img src="img/coop4.jpg" class="w-full h-80 sm:h-96 object-cover">
                    <div class="text">Caption Here</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3/3</div>
                    <img src="img/coop2.jpg" class="w-full h-80 sm:h-96 object-cover">
                    <div class="text">Caption Here</div>
                </div>

                <a class="prev rounded-xl hover:bg-lime-500" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next rounded-xl hover:bg-lime-500" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>
            <div class="text-center">
                <span class="dot" onclick="currentSlides(1)"></span>
                <span class="dot" onclick="currentSlides(2)"></span>
                <span class="dot" onclick="currentSlides(3)"></span>
            </div>
            <!-- img slider end -->

            <!-- search bar -->
            <main class="flex items-center justify-center">
                <div class="flex w-1/2 rounded-xl bg-white">
                    <input type="search" name="search" id="search" placeholder="How can I help you?" class="w-full border-none bg-transparent px-4 py-1 text-gray-900 outline-none focus:outline-none shadow-2xl active:bg-gray-300 duration-150">
                    <button class="m-2 rounded-lg bg-lime-500 px-4 py-2 text-white font-semibold transition duration-300 ease-in-out transform hover:shadow-md hover:-translate-y-1 hover:bg-yellow-500 disabled:pointer-events-none disabled:opacity-50 shadow-inner">Search</button>
                </div>
            </main>
            <!-- end of search bar -->

            <!-- image with text -->
            <div class="lg:m-10 lg:mb-14 grid lg:grid-cols-2 mb-10">
                <div>
                    <img src="img/coop6.jpg" alt="" class="w-10/12 rounded-3xl shadow-lg object-cover h-96 mt-10 ml-10">
                </div>
                <div class="text-image w-full lg:ml-5 lg:p-32 md:p-20 p-5 text-center shadow lg:shadow-black lg:h-96 mt-10 bg-lime-500">
                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio eius illum dolore optio. Maiores repellendus saepe cumque, consequuntur, fuga optio dignissimos eveniet molestias quam illum aperiam dolore perferendis iusto error?</p>
                </div>
            </div>
            <!-- end of image with text -->

            <!-- break -->
            <div class="imgbreak w-full h-80 bg-lime-600 py-4 shadow-2xl bg-cover">
                <div class="lg:w-2/5 w-96 h-64 pt-1 bg-white ml-12 lg:ml-20 my-5 shadow-lg rounded-xl">
                    <p class="ml-10 m-5 font-bold text-lime-700">Lorem, ipsum.</p>
                    <button class="discover m-10 px-4 mt-28">Click Here to Discover</button>
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
                                    <h3>Cooperative1</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cumque, quia eligendi porro fugit nobis.</p>
                                    <a href="#" class="hover:bg-lime-600 transtion duration-200">Learn More</a>
                                </div>
                            </div>

                            <div class="box">
                                <img src="img/coop1.jpg" alt="">
                                <div class="overlay">
                                    <h3>Cooperative2</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cumque, quia eligendi porro fugit nobis.</p>
                                    <a href="#" class="hover:bg-lime-600 transtion duration-200">Learn More</a>
                                </div>
                            </div>

                            <div class="box">
                                <img src="img/coop1.jpg" alt="">
                                <div class="overlay">
                                    <h3>Cooperative3</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cumque, quia eligendi porro fugit nobis.</p>
                                    <a href="#" class="hover:bg-lime-600 transtion duration-200">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of card-hover -->

            <!-- picture -->
            <div class="imagebg w-full h-80 bg-lime-600 py-4 shadow-2xl bg-cover">
                <div class="lg:w-2/5 w-96 h-64 pt-1 bg-white ml-12 lg:ml-20 my-5 shadow-lg rounded-xl">
                    <p class="ml-10 m-5 font-bold text-lime-700">Lorem, ipsum.</p>
                    <button class="discover m-10 px-4 mt-28">Click Here to Discover</button>
                </div>
            </div>
            <!-- end picture -->

            <!-- contact us -->
            <div class="my-20">
                <div class="flex justify-center mt-10 mb-5">
                    <p class="text-lime-700 font-light text-2xl tracking-wide text-center">Got some questions? Feel free to contact us</p>
                </div>
                <div class="flex justify-center">
                    <p class="text-sm text-slate-600">Get in touch with us</p>
                </div>
                <div class="flex justify-center">
                    <button class="cbutton mt-1">Contact Us</button>
                </div>
            </div>
            <!-- end of contact us -->

            <!-- all about -->
            <div class="hidden sm:block">
                <div class="w-full h-96 bg-yellow-400 md:grid md:grid-cols-4 p-7 px-28 text-justify">
                    <div class="">
                        <p class="font-extrabold text-lime-700 text-md">Savings Products</p>
                        <p class="font-light text-lime-700 text-sm">Wallet Savings</p>
                        <p class="font-light text-lime-700 text-sm">Purposive Savings</p>
                        <p class="font-light text-lime-700 text-sm">Long-term Savings</p>
                        <br>
                        <p class="font-extrabold text-lime-700 text-md">Loan Products</p>
                        <p class="font-light text-lime-700 text-sm">Major Loans</p>
                        <p class="font-light text-lime-700 text-sm">Minor Savings</p>
                        <p class="font-light text-lime-700 text-sm">Special Loans</p>
                        <br>
                        <p class="font-extrabold text-lime-700 text-md">Services</p>
                        <p class="font-light text-lime-700 text-sm">Wallet Savings</p>
                        <p class="font-light text-lime-700 text-sm">Purposive Savings</p>
                        <p class="font-light text-lime-700 text-sm">Long-term Savings</p>
                        <p class="font-light text-lime-700 text-sm">Long-term Savings</p>
                    </div>

                    <div class="">
                        <p class="font-extrabold text-lime-700 text-md">Membership</p>
                        <p class="font-light text-lime-700 text-sm">Wallet Savings</p>
                        <p class="font-light text-lime-700 text-sm">Purposive Savings</p>
                        <p class="font-light text-lime-700 text-sm">Long-term Savings</p>
                        <br>
                        <p class="font-extrabold text-lime-700 text-md">Loan Products</p>
                        <p class="font-light text-lime-700 text-sm">Major Loans</p>
                        <p class="font-light text-lime-700 text-sm">Minor Savings</p>
                        <p class="font-light text-lime-700 text-sm">Special Loans</p>
                    </div>

                    <div class="">
                        <p class="font-extrabold text-lime-700 text-md">About Us</p>
                        <p class="font-light text-lime-700 text-sm">FAQs</p>
                        <p class="font-light text-lime-700 text-sm">Testimonials</p>
                        <p class="font-light text-lime-700 text-sm">Long-term Savings</p>
                    </div>

                    <div class="">
                        <p class="font-extrabold text-lime-700 text-md">STAY IN TOUCH</p>
                        <p class="font-light text-lime-700 text-xs">Subscribe to get the latest news and updates. Get updates on our products, promos, events and more!</p>
                        <div class="relative mt-2">
                            <input type="email" placeholder="Email addres" autocomplete="email" aria-label="Email address" class="block w-full rounded-2xl border border-lime-600 bg-transparent py-4 pl-6 pr-20 text-base/6 text-neutral-950 ring-4 ring-transparent transition placeholder:text-lime-700 focus:border-neutral-950 focus:outline-none focus:ring-neutral-950/5"/>
                        </div>
                        <div class="flex justify-center">
                            <button class="cbutton mt-3 w-full">Subscribe</button>
                        </div>
                        <p class="mt-5 italic font-light text-sm text-lime-700">Contact Channels:</p>

                        <div class="gap-8 flex justify-center mt-3 md:gap-5">
                            <a href=""><img src="img/facebook.png" alt="FB" class="lg:w-10 lg:h-10 md:h-7 md:w-7"></a>
                            <a href=""><img src="img/instagram.png" alt="IG" class="lg:w-10 lg:h-10 md:h-7 md:w-7"></a>
                            <a href=""> <img src="img/youtube.png" alt="YT" class="lg:w-10 lg:h-10 md:h-7 md:w-7"></a>
                        </div>
                        <p class="font-light text-lime-700 text-xs mt-3">For comments/suggestions, please contact us in our official member support channels: saogcooperative@gmail.com, FB messenger</p>
                        <div class="relative mt-4">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of all about -->


    <script src="js/script.js">
    </script>
@endsection

