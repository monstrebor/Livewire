
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/final_logo-removebg-preview-removebg-preview.png">
    <title>Mahal na Señor Multipurpose Cooperative</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style type="text/tailwindcss">
    </style>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
        <div>

            <!-- nav bar -->
            @include('Partials.navbar')
            <!-- end of navbar -->

        <!-- picture-membership -->
        <div class="flex bg-yellow-300 mb-10">
            <div class="relative w-11/12  h-80 sm:h-96 mx-auto">
                <img src="img/coop1.jpg" alt="Description of the image" class="w-full h-full object-cover">
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
            <div class="w-11/12 bg-white p-4 shadow-md rounded">
                <h1 class="text-xl font-bold mb-1 m-10">Regular Membership</h1>
                <h6 class="ml-10 text-sm">Membership</h6>

                <form class="m-10" method="post" action="">



                    <!-- full name -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm mb-3">
                        <div class="mb-4">
                            <label for="firstName" class="block text-gray-700 font-bold mb-2">First Name <span class="text-red-500">*</span></label>
                            <input type="text" id="firstName" name="firstName" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                        </div>
                        <div class="mb-4">
                            <label for="middleName" class="block text-gray-700 font-bold mb-2">Middle Name (Optional)</label>
                            <input type="text" id="middleName" name="middleName" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-200">
                        </div>
                        <div class="mb-4">
                            <label for="lastName" class="block text-gray-700 font-bold mb-2">Last Name <span class="text-red-500">*</span></label>
                            <input type="text" id="lastName" name="lastName" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-200">
                        </div>
                    </div>
                    <!--End of full name -->

                    <!-- gender and age -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="mb-4 text-sm">
                            <label class="block text-gray-700 font-bold mb-2">Gender <span class="text-red-500">*</span></label>
                            <div class="flex items-center mb-2">
                                <input type="radio" id="male" name="gender" value="male" class="mr-2" required>
                                <label for="male" class="text-gray-700">Male</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input type="radio" id="female" name="gender" value="female" class="mr-2" required>
                                <label for="female" class="text-gray-700">Female</label>
                            </div>
                        </div>

                    </div>
                    <!-- end of gender and age-->

                    <!-- address -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="mb-4">
                            <label for="address" class="block text-gray-700 font-bold mb-2 text-sm">Address <span class="text-red-500">*</span></label>
                            <input id="address" name="address" rows="4" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="religion" class="block text-gray-700 font-bold mb-2 text-sm">Religion<span class="text-red-500">*</span></label>
                            <input id="address" name="address" rows="4" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                        </div>
                    </div>
                    <!-- end of address -->

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="mb-4">
                            <label for="POB" class="block text-gray-700 font-bold mb-2">Place of Birth <span class="text-red-500">*</span></label>
                            <input type="text" id="POB" name="POB" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="DOB" class="block text-gray-700 font-bold mb-2">Date of Birth <span class="text-red-500">*</span></label>
                            <input type="date" id="DOB" name="DOB" class="w-full bg-gray-200 px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                    </div>

                    <!-- ID -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm mb-6">
                        <div class="mb-4">
                            <label for="idType" class="block text-gray-700 font-bold mb-2 text-sm">Valid ID Type <span class="text-red-500">*</span></label>
                            <select id="idType" name="idType" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                                <option value="" disabled selected>Select ID Type</option>
                                <option value="tinID">TIN ID</option>
                                <option value="philhealth">Philhealth</option>
                                <option value="UMID">UMID/SSS/GSIS</option>
                                <option value="pagibig">Pag-ibig</option>
                                <option value="driverLicense">Dricer's Licence</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="idNumber" class="block text-gray-700 font-bold mb-2 text-sm">ID Number <span class="text-red-500">*</span></label>
                            <input type="text" id="idNumber" name="idNumber" class="w-full bg-gray-200 px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>

                        <input type="file" accept="image/*" name="photo" id="photo"></input>

                        <div class="mb-4">
                            <label for="idType" class="block text-gray-700 font-bold mb-2 text-sm">Valid ID Type(2) <span class="text-red-500">*</span></label>
                            <select id="idType" name="idType" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                                <option value="" disabled selected>Select ID Type</option>
                                <option value="tinID">TIN ID</option>
                                <option value="philhealth">Philhealth</option>
                                <option value="UMID">UMID/SSS/GSIS</option>
                                <option value="pagibig">Pag-ibig</option>
                                <option value="driverLicense">Dricer's Licence</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="idNumber" class="block text-gray-700 font-bold mb-2 text-sm">ID Number(2) <span class="text-red-500">*</span></label>
                            <input type="text" id="idNumber" name="idNumber" class="w-full bg-gray-200 px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>

                        <input type="file" accept="image/*" name="photo" id="photo"></input>
                    </div>
                    <!-- end of ID -->

                    <!-- occupation -->
                    <div class="text-sm">
                        <div class="mb-6">
                            <label class="block text-gray-700 font-bold mb-5 text-sm">Occupation <span class="text-red-500">*</span></label>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                                <div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="self-employed" name="occupation" value="self-employed" class="mr-2" required>
                                        <label for="self-employed" class="text-gray-700">Self-Employed</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="public-official" name="occupation" value="public-official" class="mr-2" required>
                                        <label for="public-official" class="text-gray-700">Public-Official</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="driver/operator/conductor" name="occupation" value="driver/operator/conductor" class="mr-2" required>
                                        <label for="housewife/househusband" class="text-gray-700">Driver/Operator/Conductor</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="housewife/househusband" name="occupation" value="housewife/househusband" class="mr-2" required>
                                        <label for="housewife/househusband" class="text-gray-700">Housewife/Househusband</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="private-employee" name="occupation" value="private-employee" class="mr-2" required>
                                        <label for="private-employee" class="text-gray-700">Private Employee</label>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="government-employee" name="occupation" value="government-employee" class="mr-2" required>
                                        <label for="government-employee" class="text-gray-700">Government Employee</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="religious-leader" name="occupation" value="religious-leader" class="mr-2" required>
                                        <label for="religious-leader" class="text-gray-700">Religious Leader</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="entrepreneur-small" name="occupation" value="entrepreneur-small" class="mr-2" required>
                                        <label for="entrepreneur-small" class="text-gray-700">Entrepreneur - Small</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="entrepreneur-large" name="occupation" value="entrepreneur-large" class="mr-2" required>
                                        <label for="entrepreneur-large" class="text-gray-700">Entrepreneur - Large</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="senior-citizen/retiree" name="occupation" value="senior-citizen/retiree" class="mr-2" required>
                                        <label for="senior-citizen/retiree" class="text-gray-700">Eenior Citizen/Retiree</label>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="allotee" name="occupation" value="allotee" class="mr-2" required>
                                        <label for="allotee" class="text-gray-700">Allotee</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="volunteer" name="occupation" value="volunteer" class="mr-2" required>
                                        <label for="volunteer" class="text-gray-700">Volunteer</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="none" name="occupation" value="none" class="mr-2" required>
                                        <label for="none" class="text-gray-700">None</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="others" name="occupation" value="others" class="mr-2" required>
                                        <label for="others" class="text-gray-700">Others</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of occupation -->

                        <!-- employment status -->
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-5 text-sm">Employment Status <span class="text-red-500">*</span></label>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                                <div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="permanent" name="emplyment-status" value="permanent" class="mr-2" required>
                                        <label for="permanent" class="text-gray-700">Permanent</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="project-based" name="emplyment-status" value="project-based" class="mr-2" required>
                                        <label for="project-based" class="text-gray-700">Project-Based</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="seasonal" name="emplyment-status" value="seasonal" class="mr-2" required>
                                        <label for="project-based" class="text-gray-700">Seasonal</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="casual" name="emplyment-status" value="casual" class="mr-2" required>
                                        <label for="casual" class="text-gray-700">Casual</label>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="probationary" name="emplyment-status" value="probationary" class="mr-2" required>
                                        <label for="probationary" class="text-gray-700">Probationary</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="fixed-or-termed" name="emplyment-status" value="fixed-or-termed" class="mr-2" required>
                                        <label for="fixed-or-termed" class="text-gray-700">Fixed or Termed</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="others" name="emplyment-status" value="others" class="mr-2" required>
                                        <label for="others" class="text-gray-700">Others</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end of employment status -->

                    <!-- Educational Attainment -->
                    <div class="mb-5">
                        <label class="block text-gray-700 font-bold mb-5 text-sm">Educational Attaiment <span class="text-red-500">*</span></label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="elem" name="educational-attaiment" value="elem" class="mr-2" required>
                                    <label for="elem" class="text-gray-700">Elementary</label>
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="highschool" name="educational-attaiment" value="highschool" class="mr-2" required>
                                    <label for="highschool" class="text-gray-700">Highschool</label>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="college" name="educational-attaiment" value="college" class="mr-2" required>
                                    <label for="college" class="text-gray-700">College</label>
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="vocational" name="educational-attaiment" value="vocational" class="mr-2" required>
                                    <label for="vocational" class="text-gray-700">Vocational</label>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="others" name="educational-attaiment" value="others" class="mr-2" required>
                                    <label for="others" class="text-gray-700">Others</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of Educational Attainment -->

                    <!-- contact information -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm mb-4">
                        <!-- contact number -->
                        <div class="mb-2">
                            <label for="contactNumber" class="block text-gray-700 font-bold mb-2">Contact Number <span class="text-red-500">*</span></label>
                            <input type="tel" id="contactNumber" name="contactNumber" pattern="[0-9]{10}" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                        </div>
                        <!-- end of contact number -->

                        <!-- facebook Account -->
                        <div class="mb-2">
                            <label for="facebookAccount" class="block text-gray-700 font-bold mb-2">Facebook Account <span class="text-red-500">*</span></label>
                            <input type="text" id="facebookAccount" name="facebook-account" class="bg-gray-200 w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                        </div>
                        <!-- end of facebook account -->

                        <!-- email -->
                        <div class="mb-2">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Email <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <!-- end of email -->
                    </div>
                    <!-- end of contact information -->

                    <!-- employer -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm mb-6">
                        <div class="mb-2">
                            <label for="text" class="block text-gray-700 font-bold mb-2">Name of Employer <span class="text-red-500">*</span></label>
                            <input type="text" id="nameOfEmployer" name="nameOfEmployer" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-2">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Address of Employer <span class="text-red-500">*</span></label>
                            <input type="text" id="addressOfEmployer" name="addressOfEmployer" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <!-- end of employer -->

                    <!-- Income -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm mb-6">
                        <div class="mb-2">
                            <label for="text" class="block text-gray-700 font-bold mb-2">Monthly Income <span class="text-red-500">*</span></label>
                            <input type="number" id="monthlyIncome" name="monthlyIncome" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-2">
                            <label for="text" class="block text-gray-700 font-bold mb-2">Annual Income <span class="text-red-500">*</span></label>
                            <input type="number" id="annualIncome" name="annualIncome" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <!-- end-of-income -->

                    <!-- house ownership -->
                    <div class="mb-5">
                        <label class="block text-gray-700 font-bold mb-5 text-sm">House Ownership<span class="text-red-500">*</span></label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="owned" name="house-ownership" value="owned" class="mr-2" required>
                                    <label for="owned" class="text-gray-700">Owned</label>
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="rental" name="house-ownership" value="rental" class="mr-2" required>
                                    <label for="rental" class="text-gray-700">Rental</label>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="livingwithparents" name="house-ownership" value="livingwithparents" class="mr-2" required>
                                    <label for="owned" class="text-gray-700">Living with Parents</label>
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="rental" name="house-ownership" value="rental" class="mr-2" required>
                                    <label for="rental" class="text-gray-700">Rental</label>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="housingLoan" name="house-ownership" value="housingLoan" class="mr-2" required>
                                    <label for="housingLoan" class="text-gray-700">Housing Loan</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="text" class="block text-gray-700 mb-2">Length of Stay: (year)</label>
                                <input type="number" id="LengthOfStay" name="house-ownership" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                    <!-- end of house ownership -->

                    <!-- citezenship, no of children, civil status -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm mb-6">
                        <div class="mb-2">
                            <label for="text" class="block text-gray-700 font-bold mb-2">Citizenship <span class="text-red-500">*</span></label>
                            <input type="text" id="citezenship" name="citezenship" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500" required>
                        </div>
                        <div class="mb-2">
                            <label for="text" class="block text-gray-700 font-bold mb-2">Number of Children <span class="text-red-500">*</span></label>
                            <input type="number" id="citezenship" name="citezenship" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500" required>
                        </div>
                        <div class="mb-2">
                            <label for="civilStatus" class="block text-gray-700 font-bold mb-2">Civil Status <span class="text-red-500">*</span></label>
                            <select id="civilStatus" name="civilStatus" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                                <option value="" disabled selected>Select Civil Status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>
                    </div>
                    <!-- end of citezenship, no of children, civil status -->
                    <hr class="m-7">
                    <!-- date/place-of-marriage -->
                    <p class="block text-gray-700 font-bold mb-5 text-sm">If Married (optional)</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm mb-6">
                        <div class="mb-4">
                            <label for="text" class="block text-gray-700 font-bold mb-2">Place of Marriage</label>
                            <input type="text" id="place-of-birth" name="place-of-birth" class="w-full px-3 py-2 bg-gray-200 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="date-of-marriage" class="block text-gray-700 font-bold mb-2">Date of Marriage</label>
                            <input type="date" id="date-of-marriage" name="date-of-marriage" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <!-- end of date/place-of-marriage -->

                    <!-- spouse name/ -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm mb-6">
                        <div class="mb-4">
                            <label for="spouse-name" class="block text-gray-700 font-bold mb-2">Spouse Name</label>
                            <input type="text" id="spouse-name" name="spouse-name" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="place-of-birth" class="block text-gray-700 font-bold mb-2">Place of Birth (spouse)</label>
                            <input type="text" id="place-of-birth" name="place-of-birth" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="place-of-birth" class="block text-gray-700 font-bold mb-2">Date of Birth (spouse)</label>
                            <input type="date" id="place-of-birth" name="place-of-birth" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <!-- end of spouse name -->

                    <!-- educational-attaiment, occupation (spouse) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm mb-6">
                        <div class="mb-4">
                            <label for="educational-attaiment" class="block text-gray-700 font-bold mb-2">Educational Attainment (spouse)</label>
                            <select id="educational-attaiment" name="educational-attaiment" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                                <option value="" disabled selected>Select Educational Attainment</option>
                                <option value="elem">Elementary</option>
                                <option value="highschool">Highschool</option>
                                <option value="college">College</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="occupation" class="block text-gray-700 font-bold mb-2">Occupation (spouse)</label>
                            <input type="text" id="occupation" name="occupation" class="w-full px-3 bg-gray-200 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <!-- end of educational-attaiment, occupation (spouse) -->
                    <hr class="m-7">
                    <!-- Dependents Information -->
                    <p class="block text-gray-700 font-bold mb-4 text-sm">Defendents</p>

                    <div id="dependentsSection"></div>
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
</body>

</html>
