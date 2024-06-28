@extends('layout.layout')


    @section('title','Associate Membership')

    @section('script')

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('/associateForm.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    @endsection

 @section('content')

<body class="m-10 p-5">
    <button id="downloadPDF">.</button>
    <div class="flex items-center text-[13px] font-bold cursor-pointer p-0">
        <img src="{{asset('img/final_logo-removebg-preview-removebg-preview.png')}}" class="h-20 m-0">
        <p>Mahal na Señor Multipurpose Cooperative <span class="uppercase text-[10px] font-semibold"><br>saog marilao bulacan</span><br><span class="text-[10px] font-semibold">Reg No: 9520-03002873/CIN-016030516</span></p>
    </div>

    <h1 class="flex justify-center font-bold text-lg my-2">Application Form</h1>

    <div class="h-2/4 text-[10px]">
        <section>
            <h1 class="accInfo uppercase flex justify-center text-[10px] font-bold p-1 bg-lime-300">account information</h1>
        </section>

        <table>
            <tr>
                <th>
                    <h1 class="mb-1">PRODUCT TYPE</h1>
                    <label for="savingsAcc" class="m-2">
                        <input type="radio" id="savingsAcc" name="productType" value="savingsAcc"> Savings Account
                    </label>
                    <label for="timeDeposit" class="m-2">
                        <input type="radio" id="timeDeposit" name="productType" value="timeDeposit"> Time Deposit
                    </label>
                </th>
                <th>
                    <h1 class="mb-1">ACCOUNT TYPE</h1>
                    <label for="individual" class="m-2">
                        <input type="radio" id="individual" name="accType" value="individual"> Individual
                    </label>
                    <label for="and" class="m-2">
                        <input type="radio" id="and" name="accType" value="and"> Joint "and"
                    </label>
                    <label for="or" class="m-2">
                        <input type="radio" id="or" name="accType" value="or"> Joint "or"
                    </label>
                </th>
                <th>
                    <h1 class="mb-1">ACCOUNT NO.</h1>
                    <input type="number">
                </th>
                <th>
                    <h1 class="mb-1">DATE:</h1>
                    <input type="date">
                </th>
            </tr>
        </table>
        
        <section>
            <h1 class="info uppercase flex justify-center text-[10px] font-bold p-1 bg-lime-300">PERSONAL/BUSINNESS/EMPLOYMENT INFORMATION</h1>
        </section>

        <table>
            <tr>
                <th>
                    <h1 class="mb-1 w-80">Individual (Last Name, First Name, Middle Name)</h1>
                    <input type="text">
                </th>
                <th>
                    <h1 class="mb-1">Taxpayer Identification No. (TIN No.)</h1>
                    <input type="number">
                </th>
                <th>
                    <h1 class="mb-1">Social Security Idenrification No. (555 No.)</h1>
                    <input type="number">
                </th>
            </tr>
        </table>

        <table>
            <tr>
                <th>
                    <h1 class="mb-1">Permanent Address/Office Address (No., Street, City/Municipality/Province)</h1>
                    <input type="text">
                    <h1 class="mb-1">Mailing Address:</h1>
                    <input type="text">
                </th>
                <th>
                    <h1 class="mb-1">Zip Code</h1>
                    <input type="number">
                </th>
                <th class="pr-20">
                    <h1 class="mb-1">Birth Date</h1>
                    <input type="date">
                </th>
                <th>
                    <h1 class="mb-1">Birth Place</h1>
                    <input type="text">
                </th>
            </tr>
        </table>

        <table class="">
            <tr>
                <th>
                    <h1 class="mb-1">Home Ownership</h1>
                    <input type="text">
                </th>
                <th>
                    <h1 class="mb-1">Telephone Number</h1>
                    <input type="number">
                </th>
                <th>
                    <h1 class="mb-1">Civil Status</h1>
                    <input type="text">
                </th>
                <th>
                    <h1 class="mb-1">Nationality</h1>
                    <input type="text">
                </th>
                <th>
                    <h1 class="mb-1">Education</h1>
                    <input type="text">
                </th>
                <th class="w-40">
                    <h1 class="mb-1">Mobile Number</h1>
                    <input type="number">
                </th>
                <th  class="w-40">
                    <h1 class="mb-1">Office Number/s</h1>
                    <input type="number">
                </th>
            </tr>
        </table>

        <table>
            <tr>
                <th>
                    <h1 class="mb-1">Spause Name</h1>
                    <input type="text">
                </th>
                <th class="w-48">
                    <h1 class="mb-1">No. of Dependent/s</h1>
                    <input type="number">
                </th>
                <th>
                    <h1 class="mb-1">E-mail Address</h1>
                    <input type="email">
                </th>
            </tr>
        </table>

        <table>
            <tr>
                <th>
                    <h1 class="mb-1">Mother's Maiden Name</h1>
                    <input type="text">
                </th>
                <th class="w-48">
                    <h1 class="mb-1">No. of Children/s</h1>
                    <input type="number">
                </th>
                <th>
                    <h1 class="mb-1">Business Contact Person & Telephone</h1>
                    <input type="number">
                </th>
            </tr>
        </table>

        <table>
            <tr>
                <th>
                    <h1 class="mb-1">Employer's Name and Address</h1>
                    <input type="text">
                </th>
                <th>
                    <h1 class="mb-1">Job Title/Occupation/Profession</h1>
                    <input type="text">
                </th>
                <th>
                    <h1 class="mb-1">Employed Since</h1>
                    <input type="text">
                </th>
                <th>
                    <h1 class="mb-1">Salary Range</h1>
                    <input type="text">
                </th>
            </tr>
        </table>

        <section>
            <h1 class="info uppercase flex justify-center text-[10px] font-bold p-1 bg-lime-300">PERSONAL/BUSINNESS/EMPLOYMENT INFORMATION</h1>
        </section>

        <table>
            <tr>
                <th>
                    <h1 class="mb-1">Individual (Last Name, First Name, Middle Name)</h1>
                    <input type="text">
                </th>
                <th class="w-52">
                    <h1 class="mb-1">Taxpayer Idenrification No. (TIN No.)</h1>
                    <input type="number">
                </th>
                <th class="w-52">
                    <h1 class="mb-1">Business Contact Person & Telephone</h1>
                    <input type="number">
                </th>
            </tr>
        </table>

        <table>
            <tr>
                <th>
                    <h1 class="mb-1">Permanent Address/Office Address (No., Street, City/Municipality/Province)</h1>
                    <input type="text">
                </th>
                <th class="w-[113px]">
                    <h1 class="mb-1">Zip Code</h1>
                    <input type="number">
                </th>
                <th class="w-52">
                    <h1 class="mb-1">Birth Date</h1>
                    <input type="text">
                </th>
                <th class="w-52">
                    <h1 class="mb-1">Birth Place</h1>
                    <input type="text">
                </th>
            </tr>
        </table>

        <table>
            <tr>
                <th class="w-16">
                    <h1 class="mb-1">Home Ownership</h1>
                    <input type="text">
                </th>
                <th class="w-16">
                    <h1 class="mb-1">Telephone Number</h1>
                    <input type="number">
                </th>
                <th class="w-16">
                    <h1 class="mb-1">Civil Status</h1>
                    <input type="text">
                </th>
                <th class="w-16">
                    <h1 class="mb-1">Nationality</h1>
                    <input type="text">
                </th>
                <th class="w-52">
                    <h1 class="mb-1">Mobile Number</h1>
                    <input type="number">
                </th>
                <th class="w-52">
                    <h1 class="mb-1">Office Number/s</h1>
                    <input type="text">
                </th>
            </tr>
        </table>

        <table>
            <tr>
                <th class="w-48">
                    <h1 class="mb-1">Spouse Name</h1>
                    <input type="text">
                </th>
                <th class="w-[40px]">
                    <h1 class="mb-1">No. of Dependent/s</h1>
                    <input type="number">
                </th>
                <th class="w-[221px]">
                    <h1 class="mb-1">E-mail Address</h1>
                    <input type="email">
                </th>
            </tr>
        </table>

        <table>
            <tr>
                <th class="w-[172px]">
                    <h1 class="mb-1">Mother's Maiden Name</h1>
                    <input type="text">
                </th>
                <th class="w-[69px]">
                    <h1 class="mb-1">No. of Children</h1>
                    <input type="number">
                </th>
                <th class="w-[199px]">
                    <h1 class="mb-1">Business Contact Person & Telephone</h1>
                    <input type="text">
                </th>
            </tr>
        </table>

        <table>
            <tr>
                <th>
                    <h1 class="mb-1">Employer's Name and Address</h1>
                    <input type="text">
                </th>
                <th>
                    <h1 class="mb-1">Job Title/Occupation/Profession</h1>
                    <input type="number">
                </th>
                <th>
                    <h1 class="mb-1">Employed Since</h1>
                    <input type="text">
                </th>
                <th>
                    <h1 class="mb-1">Salary Range</h1>
                    <input type="number">
                </th>
            </tr>
        </table>
    </div>

    

    <script>
        document.getElementById('downloadPDF').addEventListener('click', () => {
            const element = document.body; // You can also target a specific part of the body
            html2pdf().set({
                margin: 1,
                filename: 'form.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'a4', orientation: 'landscape' }
            }).from(element).save();
        });
    </script>


</body>
@endsection
