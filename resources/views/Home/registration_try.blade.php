
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/final_logo-removebg-preview-removebg-preview.png">
    <title>Mahal na Señor Multipurpose Cooperative</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style type="text/tailwindcss">
    </style>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
        @include('Partials.navbar')

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
        <div class="flex items-center justify-center mb-3">
            <div class="w-11/12 bg-white p-4 shadow-md rounded">
                <h1 class="text-xl font-bold mb-4">Regular Membership</h1>

                <form  method="post" action=" {{route('generate')}} ">
                    @csrf
                 
                    <div class="user-details">
                        <!-- name -->
                        <div class="input-box">
                            <span class="details" for="firstname">First Name*</span>
                            <input type="text" placeholder="Enter your first name" id="first-name" name="firstname" required>
                        </div>
                        <div class="input-box">
                            <span class="details" for="middle name">Middle Name (optional)</span>
                            <input type="text" placeholder="Enter your middle name" id="middle-name" name="middlename">
                        </div>
                        <div class="input-box">
                            <span class="details" for="last-name">Last Name*</span>
                            <input type="text" placeholder="Enter your last name" id="last-name" name="lastname" required>
                        </div>
                        <!-- end of name -->

                        <!-- email,address,dob -->
                        <div class="input-box">
                            <span class="details" for="email">Email Address*</span>
                            <input type="email" placeholder="Enter your email" id="email" name="email" required>
                        </div>

                        <div class="input-box">
                            <span class="details" for="address">Current Address*</span>
                            <input type="text" placeholder="Enter your address" id="address" name="address" required>
                        </div>

                        <div class="input-box">
                            <span class="details" for="contact-number">Phone Number*</span>
                            <input type="number" placeholder="Enter your phone number" id="contact-number" name="contactnumber" required>
                        </div>

                        <div class="">
                            <span class="details" for="dob">Date of Birth*</span>
                            <input type="date" placeholder="Enter your phone birth date" type="date" id="dob" name="dob" required>
                        </div>
                        <!-- end of email,address,dob -->

                        <!-- gender -->
                        <div class="gender-details">
                            <span for="gender">Gender</span>
                            <div class="category">
                                <label for="male">
                                    <input type="checkbox" id="male" name="gender" value="male">
                                    <span>Male</span>
                                </label>

                                <label for="female">
                                    <input type="checkbox" id="female" name="gender" value="female">
                                    <span>Female</span>
                                </label>
                            </div>
                        </div>
                        <!-- end of gender -->

                        <div>
                            <label for="occupation">Occupation*:</label><br>
                            <input type="text" id="occupation" name="occupation" required>
                        </div>

                        <div>
                            <label for="civil-status">Civil Status*:</label><br>
                            <select id="civil-status" name="civilstatus" required>
                                <option value="">Select</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="widowed">Widowed</option>
                                <option value="divorced">Divorced</option>
                                <option value="separated">Separated</option>
                            </select>
                        </div>

                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <!-- end of membership form -->

        @include("Partials.footer")

    <script src="script.js">
    </script>

</body>

</html>
