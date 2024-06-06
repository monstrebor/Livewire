<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js">
    </script>
    <script>
        window.onload = function(){
        document.getElementById("download").addEventListener('click',()=>{
        const form = this.document.getElementById("form");
        console.log(form);
        console.log(window);
        html2pdf().from(form).save();
            })
        }
    </script>
</head>
<body>
    <div class="flex">
        <div> <button class="btn btn-primary pdfbtn" id="download">Download PDF</button> </div>
        <div class="notif1"><p>Registration has been successful,</p><p>Kindly check your email for more information and meeting schedules.</p></div>
    </div>

    <div id="form" class="whole border">
        <div class="col head">
            <img src="img/final_logo.png" class="logo">
            <div>
            <h2 class="MNSMPC">Mahal na Señor Multipurpose Cooperative</h2>
            <p class="header-address p">27 M. Santiago Street, Saog, Marilao, Bulacan</p>
            <p class="header-address p">Telephone No.: 248-62-08/E-mail: mnsmpc2004@yahoo.com</p>
            <p class="header-address p">CDA Reg. No.: 9520-03002873</p>
            </div>
            <div class="boxLeft head_r">
            <p style="margin-top: 15px;" class="bb1 p mt"> </p>
            <p class="red bb1 c p">Account Number</p>
            <p class="red bb1 c p_m">/ / </p>
            <p class="black c p">Date of Application</p>
            </div>
        </div>

        <div class="rline"> <p class="wt pt">
            <strong>Application for Membership</strong> </p>
        </div>

        <div> <div class="flexEnd">
            <p class="tRight br1 bb1 p" style="width: 86%;">
            <em>* affix 3 signatures</em> </p>
            <div class="w left bb1"> <em>*1</em> </div> </div>

            <div class="flex bb1">
                <div class="bc br1" style="width: 138px;">
                <p class="p4 left w7 th">NAME:</p>
                </div> <div class="col br1 w8"> <div class="w9">
                <div class="mt mb"> <p>{{$data['lastName']}}</p></div>
                <p class="td"> <em>Family Name</em> </p> </div> <div class="w9">
                <div class="mt mb"> <p>{{$data['firstName']}}</p></div>
                <p class="td"> <em>First Name</em> </p> </div> <div class="w9">
                <div class="mt mb"> <p>{{$data['middleName']}}</p></div>
                <p class="td"> <em>Middle Name</em> </p> </div></div>
                <div> <div class="left w"> <div class="bb1 p7"> <em>*2</em>
                </div> <div> <em>*3</em> </div> </div> </div>
            </div>

            <div class="flex bb1"> <div class="bc br1" style="width: 138px; height: 50px;">
                <p class="p4 left w7 th">Present Address:</p> </div>
                <div class="col br1 w8"> <div> <div class="w1"> <div>
                    <p>{{$data['address']}}</p> </div> </div> </div> </div>
                <div class="br1"> <div class="w left"> <div class="bb1 p7 bc c">
                    <em>Age:</em> </div> <div>
                <p class="c p">{{$data['age']}}</p> </div> </div> </div>
                <div> <div class="w left"> <div class="bb1 p7 bc c"> <em>Sex:</em>
                </div> <div> <p class="c p">{{$data['gender']}}</p>
                </div> </div> </div>
            </div>

            <div> <div class="col">
                    <div class="left w1"><div class="br1 bb1 bc c">ID Type</div></div>
                    <div class="left w1"><div class="br1 bb1 bc c">ID Number</div></div>
                    <div class="left w1"><div class="br1 bb1 bc c">Date of Birth</div></div>
                    <div class="left w1"><div class="br1 bb1 bc c">Place of Birth</div></div>
                    <div class="left w1"><div class="br1 bb1 bc c">Religion/Social Affiliation</div></div>
                    <div class="left w1"><div class="bb1 bc c">Contact Details</div></div>
                </div> <div class="col">
                    <div class="left w1"><div class="br1 bb1 c">
                        <p class="p">{{$data['idType']}}</p></div></div>
                    <div class="left w1"><div class="br1 bb1 c">
                        <p class="p">{{$data['idNumber']}}</p></div></div>
                    <div class="left w1"><div class="br1 bb1 c">
                        <p class="p">{{$data['DOB']}}</p></div></div>
                    <div class="left w1"><div class="br1 bb1 c">
                        <p class="p">{{$data['POB']}}</p></div></div>
                    <div class="left w1"><div class="br1 bb1 c">
                        <p class="p">{{$data['religion']}}</p></div></div>
                    <div class="left w1"><div class="bb1 c">
                        <p class="p">{{$data['contactNumber']}}</p></div></div>
                </div>
            </div>

            <div class="flex bb1"> <div class="bc br1" style="width: 110px;">
                <p class="p4 left w6 th">Educational Attainment:</p> </div>
                <div class="col br1 w7"> <div> <div class="w"> <div>
                    <p>{{$data['educational_attainment']}}</p> </div> </div> </div> </div>
                <div><div class="w1 left">
                    <div><p class="p left blr">Email:</p><p class="c bb1 p">{{$data['email']}}</p></div>
                    <div><p class="p left blr">FB Acct:</p><p class="c p">{{$data['facebook_account']}}</p></div>
                </div></div>
            </div>

            <div> <div class="flex w1 bb1"> <div class="rhead w1">
                <p class="p pt br1">OCCUPATION(please select an option that fitsyour
                answers.)</p> </div> <div class="rhead w1"> <p class="p pt">
                EMPLOYMENT STATUS</p> </div> </div>
                <div class="flex w1 bb1"> <div class="w1"> <p class="c p pt br1">{{$data['occupation']}}</p>
                </div> <div class="w1"> <p class="c p pt">{{$data['employment_status']}}</p> </div> </div>
            </div>

            <div class="flex bb1"> <div class="bc br1" style="width: 200px;">
                <p class="p4 left th">Name/Address of Employer:</p> </div>
                <div class="col br1 w7"> <div> <div class="w"> <div>
                    <p><div>
                    <p>{{$data['nameOfEmployer']}}</p> </div></p> </div>
                <div> <p>{{$data['addressOfEmployer']}}</p> </div> </div> </div> </div>
                <div class="cel wa bc br1"> <div class="w left">
                    <div class="bb1 c mt p"> <em>Monthly Income:</em> </div>
                    <div class="mt c"> <em>Annual Income:</em> </div> </div> </div>
                <div class="w">
                    <p class="bb1 c mt p">{{$data['monthlyIncome']}}</p>
                    <p class="mt c">{{$data['annualIncome']}}</p> </div>
            </div>

            <div class="flex bb1"> <div class="bc br1" style="width: 200px; ">
                <p class="p4 left th">House Ownership</p> </div>
                <div class="col br1 w7"> <div> <div class="w"> <div>
                    <p>{{$data['house_ownership']}}</p> </div> </div> </div>
                    </div> <div class="cel bc br1"> <div class="w left">
                    <div class="bb1 c mt p"> <em>Citizenship:</em> </div>
                    <div class="mt c fs"> <em>Number of Children:</em> </div> </div> </div>
                <div class="w">
                    <p class="bb1 c mt p">{{$data['citizenship']}}</p>
                    <p class="mt c">{{$data['no_of_children']}}</p> </div>
            </div>

            <div class="col w1 bb1">
                <div class="bc w4 br1" style="width: 200px;">
                <p class="left p">Civil Status</p></div>
                <div class="w1"><p class="c p">{{$data['civilStatus']}}</p></div>
            </div>

            <div class="col w1 bb1"> <div class="br1" style="width: 220px;">
                <p class="c p"><i>if married</i></p></div>
                <div class="bc w7 br1"><p class="c p">Date/Place of Marriage:</p>
                </div><div class="w4"><p class="c p">{{$data['date_of_marriage']}}</p></div>
                <div class="w4"><p class="c p">{{$data['place_of_marriage']}}</p></div>
            </div>

            <div class="col w1 bb1">
                <div class="bc br1" style="width: 250px;"><p class="c p">Spouse Name:
                </p></div> <div class="w4 br1"><p class="c p"><i>{{$data['spouse_name']}}</i></p></div>
                <div class="bc w4 br1"><p class="c p">Place of Birth:</p></div>
                <div class="w4"><p class="c p">{{$data['place_of_birth']}}</p></div>
            </div>

            <div class="col w1 bb1">
                <div class="bc br1" style="width: 250px;"><p class="c p">Educational Attainment:
                </p></div> <div class="w4 br1"><p class="c p"><i>{{$data['educational_attainmentSpouse']}}</i></p></div>
                <div class="bc w4 br1"><p class="c p">Occupation:</p></div>
                <div class="w4"><p class="c p">{{$data['occupationSpouse']}}</p></div>
            </div>

            <div class="w1 bb1 bc"> <p class="p c">
                <strong>DEPENDENTS</strong> </p>
            </div>

            <div class="flex">
                <div class="bb1 br1 w1"><p class="p c">Name:</p></div>
                <div class="bb1 br1 w1"><p class="p c">Birthdate:</p></div>
                <div class="bb1 br1 w1"><p class="p c">Name:</p></div>
                <div class="bb1 w1"><p class="p c">Birthdate:</p></div>
                </div> <div class="flex">
                <div class="bb1 br1 w1"><p class="p left">.1<span class="pl">data</span>
                </p></div>
                <div class="bb1 br1 w1"><p class="p c">data</p></div>
                <div class="bb1 br1 w1"><p class="p left">.3<span class="pl">data</span>
                </p></div>
                <div class="bb1 w1"><p class="p c">$data</p></div>
                </div> <div class="flex">
                <div class="bb1 br1 w1"><p class="p left">.2<span class="pl">data</span>
                </p></div>
                <div class="bb1 br1 w1"><p class="p c">data</p></div>
                <div class="bb1 br1 w1"><p class="p left">.4<span class="pl">data</span>
                </p></div>
                <div class="bb1 w1"><p class="p c">data</p></div>
            </div>
        </div>

        <div class="w1 left plp">
            <p> I hereby apply to become a member of MAHAL NA SEÑOR MULTIPURPOSE COOPERATIVE. I voluntarily bind
            myself to the principles of cooperative as stated in the By-Laws of the Cooperative giving full
            support and cooperation for success of all activities.
            </p><p>
            Following this application, I agree to attend a Pre-Membership Education Seminar and to pay the membership fee of P100.00 and initial share contribution of P4,000.00 or equivalent of 40 shares at
                P100.00 per share.</p><p>
            I declare under penalties of perjury that above information and pledge are honorable to the best of
            my knowledge. </p>
        </div>
        <div class="csb">
            <div><div class="w1"><div class="ml bb1 lu"><p class="c p"></p>
            </div><p class="c p_m">Date Accomplished</p> </div> </div>
            <div><div class="w1"><div class="mr bb1 ru"><p class="c p"></p>
            </div><p class="c p_m">Applicant Signature Over Printed Name</p> </div> </div>
        </div>
        <hr style="border: none; border-top: 1px dashed #111111;">
        <div class="rline"> <p class="wt pt">
            <strong>ENDORSEMENT</strong> </p>
        </div>
        <div class="w1 left plp">
            <p>I hereby endorse the application of _____________________ for membership to
                MNSMPC, I further attest to the truthfulness of the matter stated above.
            </p>
        </div>
        <br>
        <div class="csb">
            <div><div class="w1"><div class="ml bb1 lu"><p class="c p"></p>
            </div><p class="c p_m">Date Accomplished</p> </div> </div>
            <div><div class="w1"><div class="mr bb1 ru"><p class="c p"></p>
            </div><p class="c p_m">Chairperson - Education Committee</p> </div> </div>
        </div>
        <br>
        <hr style="border: none; border-top: 1px dashed #111111;">
        <div class="rline"> <p class="wt pt">
            <strong>APPROVAL OF APPLICATION</strong> </p>
        </div>
        <div class="w1 left plp">
            <p>During___________ <i>meeting of the Board of Directors lasts</i> ________
                this application for membership was: [ ] Approved [ ] Disapproved'</p>
            <p>ATTESTED:</p>
        </div>
        <br>
        <div class="flex csb">
            <div>
                <div><div class="w1"><div class="ml bb1 lu"><p class="c p"></p>
                </div><p class="c p_m">BOD-Chairperson</p> </div> </div>
                <br>
                <div><div class="w1"><div class="ml bb1 lu"><p class="c p"></p>
                </div><p class="c p_m">Date</p> </div> </div>
            </div>
            <div>
                <div class="img">
                    <p class="c pic">ATTACH 1x1 COLORED I.D PICTURE</p>
                </div>
            </div>
            <div>
                <div><div class="w1"><div class="mr bb1 lu"><p class="c p"></p>
                </div><p class="c p_m">Board Secretary</p> </div> </div>
                <br>
                <div><div class="w1"><div class="mr bb1 lu"><p class="c p"></p>
                </div><p class="c p_m">Date</p> </div> </div>
            </div>
        </div>
</div>



</body>
</html>
