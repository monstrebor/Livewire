@extends('Layout.layout')




    @section('title','Membership Register')

    @section('script')
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style type="text/tailwindcss"></style>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @endsection


    @section('content')

<body>
        <div>

            <!-- nav bar -->
            @include('Partials.navbar')
            <!-- end of navbar -->

        <!-- picture-membership -->
        <div class="flex bg-white mb-10">
            <div class="relative w-11/12  h-80 sm:h-96 mx-auto">
                <img src="/img/coop1.jpg" alt="Description of the image" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-white bg-lime-500 bg-opacity-70 p-2 rounded">Mahal na Señor Multipurpose Cooperative <p class="indent-2">Membership Application. Sign-up today</p></span>
                </div>
            </div>
        </div>
        <!-- end of picture membership -->

        <!-- membership-button -->
        <div class="flex justify-center m-5 mb-10 gap-3">
            <button class="cbutton">Regular</button>
            <button class="cbutton">Associate</button>
        </div>
        <!-- end of membership button -->

        <!-- membership form -->
        <div class="flex items-center justify-center mb-10">
            <div class="form-shadow w-11/12 bg-white p-4 rounded">
                <h1 class="text-xl font-bold mb-1 m-10">Regular Membership</h1>
                <h6 class="ml-10 text-sm">Membership</h6>

                <form id="form" class="m-10" method="post" action="{{route('regular.store')}}" enctype="multipart/form-data">

                    @csrf
                    @method('post')

                    <!-- full name -->
                    <hr class="my-4">
                    <p class="text-l font-bold my-5 mb-7">Personal Information</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm mb-3">
                        <div class="input-group mb-4">
                            <label for="firstName" class="block text-gray-700 font-bold mb-2">First Name <span class="text-red-500">*</span></label>
                            <input type="text" id="firstName" name="firstName" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" maxlength="30">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <div class="input-group mb-4">
                            <label for="middleName" class="block text-gray-700 font-bold mb-2">Middle Name (Optional)</label>
                            <input type="text" id="middleName" name="middleName" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-200" maxlength="30">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <div class="input-group mb-4">
                            <label for="lastName" class="block text-gray-700 font-bold mb-2">Last Name <span class="text-red-500">*</span></label>
                            <input type="text" id="lastName" name="lastName" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-200" maxlength="30">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                    </div>9
                    <!--End of full name -->

                    {{-- religion, POB, DOB --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                        <div class="input-group mb-4">
                            <label for="religion" class="block text-gray-700 font-bold mb-2 text-sm">Religion<span class="text-red-500">*</span></label>
                            <input id="religion" name="religion" rows="4" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <div class="input-group mb-4">
                            <label for="POB" class="block text-gray-700 font-bold mb-2">Place of Birth <span class="text-red-500">*</span></label>
                            <input type="text" id="POB" name="POB" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <div class="input-group mb-4">
                            <label for="DOB" class="block text-gray-700 font-bold mb-2">Date of Birth <span class="text-red-500">*</span></label>
                            <input type="date" id="DOB" name="DOB" class="w-full bg-gray-200 px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                    </div>
                    {{-- end of religion, POB, DOB --}}

                    <!-- contact information -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-sm mb-4 mt-2">
                        <!-- contact number -->
                        <div class="input-group mb-2">
                            <label for="contactNumber" class="block text-gray-700 font-bold mb-2">Contact Number <span class="text-red-500">*</span></label>
                            <input type="tel" id="contactNumber" name="contactNumber" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <!-- end of contact number -->

                        <!-- facebook Account -->
                        <div class="input-group mb-2">
                            <label for="facebookAccount" class="block text-gray-700 font-bold mb-2">Facebook Account <span class="text-red-500">*</span></label>
                            <input type="text" id="facebookAccount" name="facebook-account" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <!-- end of facebook account -->

                        <!-- email -->
                        <div class="input-group mb-2">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Email <span class="text-red-500">*</span></label>
                            <input type="text" id="email" name="email" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <!-- end of email -->

                        <div class="mb-4 text-sm">
                            <p class="block text-gray-700 font-bold mb-2">Gender<span class="text-red-500">*</span></p>
                            <div class="input-group mb-2 gap-2">
                                <div id="errorMessage" class="error-message"></div>
                                <input type="radio" id="male" name="gender" value="male" class="mr-2">
                                <label for="male" class="text-gray-700">Male</label>

                                <input type="radio" id="female" name="gender" value="female" class="mr-2">
                                <label for="female" class="text-gray-700">Female</label>
                            </div>
                        </div>

                    </div>
                    <!-- end of contact information -->


                    <!-- address -->
                    <hr class="my-6">
                    <p class="text-l font-bold my-4">Address Details</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="input-group mb-4">
                            <label for="region" class="block text-gray-700 font-bold mb-2 text-sm">Region <span class="text-red-500">*</span></label>
                            <select id="region" name="region" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" address="true">
                                <option value="Region 3" selected>Region III</option>
                                <!-- Other options here -->
                            </select>
                            <div id="errorMessage" class="error-message"></div>
                        </div>

                        <div class="input-group mb-4">
                            <label for="province" class="block text-gray-700 font-bold mb-2 text-sm">Province<span class="text-red-500">*</span></label>
                            <select name="province" id="province" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" address="true">
                                <option value="Bulacan" selected>Bulacan</option>
                            </select>
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="input-group mb-4">
                            <label for="municipality" class="block text-gray-700 font-bold mb-2 text-sm">Municipality <span class="text-red-500">*</span></label>
                            <select name="Municipality" id="municipality-dropdown" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" address="true">
                                <option value="Marilao" selected>Marilao</option>
                            </select>
                            <div id="errorMessage" class="error-message"></div>
                        </div>

                        <div class="input-group mb-4">
                            <label for="brgy" class="block text-gray-700 font-bold mb-2 text-sm">Barangay<span class="text-red-500">*</span></label>
                            <select id="brgyDropdown"  name="Baranggay"  class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                                <option value="">-Select Barangay-</option>
                            </select>
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="input-group mb-4">
                            <label for="numSt" class="block text-gray-700 font-bold mb-2 text-sm">House Number and Street <span class="text-red-500">*</span></label>
                            <input type="text" id="street" name="street" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>

                    </div>
                    <hr class="my-5">
                    <!-- end of address -->

                    <!-- ID -->
                    <p class="text-l font-bold my-4 mb-6">Valid Identification</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm mb-6">
                        <div class="input-group mb-4">
                            <label for="idType1" class="block text-gray-700 font-bold mb-2 text-sm">ID Type <span class="text-red-500">*</span></label>
                            <select id="idType1" name="idType[]" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                                <option value="" disabled selected>Select ID Type</option>
                                <option value="TinID">TIN ID</option>
                                <option value="PhilHealth">Philhealth</option>
                                <option value="UMID">UMID/SSS/GSIS</option>
                                <option value="Pag-ibig">Pag-ibig</option>
                                <option value="DriverLicense">Driver's Licence</option>
                                <option value="others">Others</option>
                            </select>
                            <div id="errorMessage" class="error-message"></div>
                        </div>

                        <div class="input-group mb-4">
                            <label for="idNumber1" class="block text-gray-700 font-bold mb-2 text-sm">ID Number <span class="text-red-500">*</span></label>
                            <input type="text" id="idNumber1" name="idNumber[]" class="w-full bg-gray-200 px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>

                        <div class="input-group">
                            <label for="idImage1" class="block text-gray-700 font-bold mb-2 text-sm">ID Picture <span class="text-red-500">*</span></label>
                            <input type="file"  name="image[]" id="idImage1"></input>
                            <div id="errorMessage" class="error-message"></div>
                        </div>


                        <div class="input-group mb-4">
                            <label for="idType2" class="block text-gray-700 font-bold mb-2 text-sm">ID Type <span class="text-red-500">*</span></label>
                            <select id="idType2" name="idType[]" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                                <option value="" disabled selected>Select ID Type</option>
                                <option value="TinID">TIN ID</option>
                                <option value="PhilHealth">Philhealth</option>
                                <option value="UMID">UMID/SSS/GSIS</option>
                                <option value="Pag-ibig">Pag-ibig</option>
                                <option value="DriverLicense">Driver's Licence</option>
                                <option value="others">Others</option>
                            </select>
                            <div id="errorMessage" class="error-message"></div>
                        </div>

                        <div class="input-group mb-4">
                            <label for="idNumber2" class="block text-gray-700 font-bold mb-2 text-sm">ID Number <span class="text-red-500">*</span></label>
                            <input type="text" id="idNumber2" name="idNumber[]" class="w-full bg-gray-200 px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>

                        <div class="input-group">
                            <label for="idImage2" class="block text-gray-700 font-bold mb-2 text-sm">ID Picture <span class="text-red-500">*</span></label>
                            <input type="file" name="image[]" id="idImage2"></input>
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                    </div>
                    <hr class="my-6">
                    <!-- end of ID -->

                    <!-- occupation -->
                    <div class="text-sm">
                        <div id="occupationSection" class="input-group mb-6">
                            <label class="block text-gray-700 font-bold text-sm">Occupation <span class="text-red-500">*</span></label>
                            <div id="occupationErrorMessage" class="error-message"></div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                                <div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="Self-employed" name="occupation" value="self-employed" class="mr-2">
                                        <label for="self-employed" class="text-gray-700">Self-Employed</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="public-official" name="occupation" value="Public-Official" class="mr-2">
                                        <label for="public-official" class="text-gray-700">Public-Official</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="driver/operator/conductor" name="occupation" value="Driver/Operator/Conductor" class="mr-2">
                                        <label for="housewife/househusband" class="text-gray-700">Driver/Operator/Conductor</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="housewife/househusband" name="occupation" value="Housewife/Househusband" class="mr-2">
                                        <label for="housewife/househusband" class="text-gray-700">Housewife/Househusband</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="private-employee" name="occupation" value="Private-Employee" class="mr-2">
                                        <label for="private-employee" class="text-gray-700">Private Employee</label>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="government-employee" name="occupation" value="government-employee" class="mr-2">
                                        <label for="Government-Employee" class="text-gray-700">Government Employee</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="religious-leader" name="occupation" value="religious-leader" class="mr-2">
                                        <label for="Religious-Leader" class="text-gray-700">Religious Leader</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="entrepreneur-small" name="occupation" value="Entrepreneur-Small" class="mr-2">
                                        <label for="entrepreneur-small" class="text-gray-700">Entrepreneur - Small</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="entrepreneur-large" name="occupation" value="Entrepreneur-Large" class="mr-2">
                                        <label for="entrepreneur-large" class="text-gray-700">Entrepreneur - Large</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="senior-citizen/retiree" name="occupation" value="Senior-Citizen/Retiree" class="mr-2">
                                        <label for="senior-citizen/retiree" class="text-gray-700">Eenior Citizen/Retiree</label>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="allotee" name="occupation" value="Allotee" class="mr-2">
                                        <label for="allotee" class="text-gray-700">Allotee</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="volunteer" name="occupation" value="Volunteer" class="mr-2">
                                        <label for="volunteer" class="text-gray-700">Volunteer</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="none" name="occupation" value="None" class="mr-2">
                                        <label for="none" class="text-gray-700">None</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="others" name="occupation" value="Others" class="mr-2">
                                        <label for="others" class="text-gray-700">Others</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end of occupation -->

                        <!-- employment status -->
                        <div class="input-group mb-4">
                            <label class="block text-gray-700 font-bold text-sm">Employment Status <span class="text-red-500">*</span></label>
                            <div id="employmentErrorMessage" class="error-message"></div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                                <div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="permanent" name="emplyment-status" value="Permanent" class="mr-2">
                                        <label for="permanent" class="text-gray-700">Permanent</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="project-based" name="emplyment-status" value="Project-based" class="mr-2">
                                        <label for="project-based" class="text-gray-700">Project-Based</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="seasonal" name="emplyment-status" value="Seasonal" class="mr-2">
                                        <label for="project-based" class="text-gray-700">Seasonal</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="casual" name="emplyment-status" value="Casual" class="mr-2">
                                        <label for="casual" class="text-gray-700">Casual</label>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="probationary" name="emplyment-status" value="Probationary" class="mr-2">
                                        <label for="probationary" class="text-gray-700">Probationary</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="fixed-or-termed" name="emplyment-status" value="Fixed-or-Termed" class="mr-2">
                                        <label for="fixed-or-termed" class="text-gray-700">Fixed or Termed</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="others" name="emplyment-status" value="Others" class="mr-2">
                                        <label for="others" class="text-gray-700">Others</label>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- end of employment status -->

                    <!-- Educational Attainment -->
                    <div class="input-group mb-5">
                        <label class="block text-gray-700 font-bold text-sm">Educational Attaiment <span class="text-red-500">*</span></label>
                        <div id="educationalAttainmentErrorMessage" class="error-message"></div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="elem" name="educational-attaiment" value="Elementary" class="mr-2">
                                    <label for="elem" class="text-gray-700">Elementary</label>
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="highschool" name="educational-attaiment" value="Highschool" class="mr-2">
                                    <label for="highschool" class="text-gray-700">Highschool</label>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="college" name="educational-attaiment" value="College" class="mr-2">
                                    <label for="college" class="text-gray-700">College</label>
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="vocational" name="educational-attaiment" value="Vocational" class="mr-2">
                                    <label for="vocational" class="text-gray-700">Vocational</label>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="others" name="educational-attaiment" value="Others" class="mr-2">
                                    <label for="others" class="text-gray-700">Others</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end of Educational Attainment -->

                    <!-- employer -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm mb-6">
                        <div class="input-group mb-2">
                            <label for="text" class="block text-gray-700 font-bold mb-2">Name of Employer <span class="text-red-500">*</span></label>
                            <input type="text" id="employerName" name="nameOfEmployer" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <div class="input-group mb-2">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Address of Employer <span class="text-red-500">*</span></label>
                            <input type="text" id="employerAddress" name="addressOfEmployer" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                    </div>
                    <!-- end of employer -->

                    <!-- Income -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm mb-6">
                        <div class="input-group mb-2">
                            <label for="text" class="block text-gray-700 font-bold mb-2">Monthly Income <span class="text-red-500">*</span></label>
                            <input type="number" id="monthlyIncome" name="monthlyIncome" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <div class="input-group mb-2">
                            <label for="text" class="block text-gray-700 font-bold mb-2">Annual Income <span class="text-red-500">*</span></label>
                            <input type="number" id="annualIncome" name="annualIncome" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                    </div>
                    <!-- end-of-income -->

                    <!-- house ownership -->
                    <div class="mb-5">
                        <label class="block text-gray-700 font-bold text-sm">House Ownership<span class="text-red-500">*</span></label>
                        <div   div id="houseOwnershipErrorMessage" class="error-message"></div>
                        <div class="input-group grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">

                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="owned" name="house-ownership" value="Owned" class="mr-2">
                                    <label for="owned" class="text-gray-700">Owned</label>
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="rental" name="house-ownership" value="Rental" class="mr-2">
                                    <label for="rental" class="text-gray-700">Rental</label>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="livingwithparents" name="house-ownership" value="Living-with-parents" class="mr-2">
                                    <label for="owned" class="text-gray-700">Living with Parents</label>
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="housingLoan" name="house-ownership" value="Housing-Loan" class="mr-2">
                                    <label for="housingLoan" class="text-gray-700">Housing Loan</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="text" class="block text-gray-700 mb-2">Length of Stay: (year)</label>
                                <input type="text" id="lengthOfStay" name="house-ownership" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">

                            </div>
                        </div>
                    </div>
                    <!-- end of house ownership -->

                    <!-- citezenship, no of children, civil status -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm mb-6">
                        <div class="input-group mb-2">
                            <label for="text" class="block text-gray-700 font-bold mb-2">Citizenship <span class="text-red-500">*</span></label>
                            <input type="text" id="citizenship" name="citizenship" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <div class="input-group mb-2">
                            <label for="text" class="block text-gray-700 font-bold mb-2">Number of Children <span class="text-red-500">*</span></label>
                            <input type="number" id="numberOfchildren" name="numberOfChildren" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <div class="input-group mb-2">
                            <label for="civilStatus" class="block text-gray-700 font-bold mb-2">Civil Status <span class="text-red-500">*</span></label>
                            <select id="civilStatus" name="civilStatus" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                                <option value="" disabled selected>Select Civil Status</option>
                                <option value="Single" >Single</option>
                                <option value="Married"   >Married</option>
                                <option  value="Divorced"    >Divorced</option>
                                <option  value="Widowed"    >Widowed</option>
                            </select>
                            <div id="errorMessage" class="error-message"></div>
                        </div>

                    </div>

                    <!-- end of citezenship, no of children, civil status -->
                    <hr class="m-7">
                    <!-- date/place-of-marriage -->
                    <div>
                        <p class="block text-gray-700 font-bold mb-5 text-sm">If Married</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm mb-6">
                            <div class="input-group mb-4">
                                <label for="text" class="block text-gray-700 font-bold mb-2">Place of Marriage</label>
                                <input type="text" id="marriagePlace" name="place-of-marriage" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                                <div id="errorMessage" class="error-message"></div>
                            </div>
                            <div class="input-group mb-4">
                                <label for="date-of-marriage" class="block text-gray-700 font-bold mb-2">Date of Marriage</label>
                                <input type="date" id="marriageDate" name="date-of-marriage" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                                <div id="errorMessage" class="error-message"></div>
                            </div>
                        </div>

                    </div>

                    <!-- end of date/place-of-marriage -->

                    <!-- spouse name/ -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm mb-6">
                        <div class="input-group mb-4">
                            <label for="spouse-name" class="block text-gray-700 font-bold mb-2">Spouse Name</label>
                            <input type="text" id="spouseName" name="spouse-name" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <div class="input-group mb-4">
                            <label for="place-of-birth" class="block text-gray-700 font-bold mb-2">Place of Birth (spouse)</label>
                            <input type="text" id="spousePOB" name="place-of-birth" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <div class="input-group mb-4">
                            <label for="place-of-birth" class="block text-gray-700 font-bold mb-2">Date of Birth (spouse)</label>
                            <input type="date" id="spouseDOB" name="place-of-birth" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                    </div>


                    <!-- end of spouse name -->

                    <!-- educational-attaiment, occupation (spouse) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm mb-6">
                        <div class="input-group mb-4">
                            <label for="educational-attaiment" class="block text-gray-700 font-bold mb-2">Educational Attainment (spouse)</label>
                            <select id="spouseEducationalAttainment" name="educational-attaiment" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                                <option value="" disabled selected>Select Educational Attainment</option>
                                <option value="Elementary" >Elementary</option>
                                <option value="Highschool" >Highschool</option>
                                <option value="College" >College</option>
                                <option value="Others">Others</option>
                            </select>
                            <div id="errorMessage" class="error-message"></div>
                        </div>
                        <div class="input-group mb-4">
                            <label for="occupation" class="block text-gray-700 font-bold mb-2">Occupation (spouse)</label>
                            <input type="text" id="spouseOccupation" name="occupation" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            <div id="errorMessage" class="error-message"></div>
                        </div>

                    </div>


                    <!-- end of educational-attaiment, occupation (spouse) -->
                    <hr class="m-7">
                    <!-- Dependents Information -->
                    <p class="block text-gray-700 font-bold mb-4 text-sm">Dependents</p>

                    <div id="dependentsSection">

                    </div>
                    <!-- End of  Dependents Information -->

                    <div class="flex justify-center gap-4">
                    <button type="submit"
                        class="mt-9 bg-lime-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Register
                    </button>

                    <button type="submit"
                        class="mt-9 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Cancel
                    </button>
                    </div>
                </form>

            </div>
        </div>
        <!-- end of membership form -->

        <!-- all about -->
        @include('Partials.footer')
        <!-- end of all about -->
        <!-- footer -->

    <script src="/js/dependents.js">
    </script>

@endsection


