<div>
    <div class="flex justify-center ml-500 mt-10">

        <table>
            <thead class="border-2 border-black" >
                <tr>
                    <th class="border-r-2 border-black p-2">Member's Name</th>
                    <th class="p-2">Member's Approval</th>
                </tr>
            </thead>
            <tbody style="padding: 5px;">
            @foreach ($regularMembers as $regularMember)
            <tr class="border-2 border-black text-center text-xs">
                <td class="border-r-2 border-black p-2">
                    <p>{{$regularMember->firstName}} {{$regularMember->middleName}} {{$regularMember->lastName}}</p>
                </td>
                <td class="p-2">
                    <button class="border border-solid border-black p-1 rounded-l-md">Approve</button>
                    <button class="border border-solid border-black p-1 rounded-r-md">Disapprove</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pl-2 mt-0">
            <button class="border-black text-xs">
                <a id="details-link" class="border border-black p-1 rounded">More Details...</a>
            </button>
        </div>
    </div>

    <div id="details-modal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-4 rounded shadow-lg w-1/2">
            <div class="flex justify-between">
                <h1 class="font-bold text-xl">Member's Personal Information</h1>
                <button id="close-modal" class="p-1 border border-1 border-black ml-20 relative text-xs rounded text-black ">Back</button>
            </div>
            <hr class="mt-1 mb-1 border border-1 border-black">
            <div class="overflow-x-auto">
            <table>
                <thead class="border border-1 border-black" >
                    <tr class="text-xs">
                        <th class="border border-r-1 border-black p-1 mt-0">first Name</th>
                        <th class="border border-r-1 border-black p-1">Middle Name</th>
                        <th class="border border-r-1 border-black p-1">Last Name</th>
                        <th class="border border-r-1 border-black p-1">Religion</th>
                        <th class="border border-r-1 border-black p-1">Place of Birth</th>
                        <th class="border border-r-1 border-black p-1">Date of Birth</th>
                        <th class="border border-r-1 border-black p-1">Contact Number</th>
                        <th class="border border-r-1 border-black p-1">Facebook Account</th>
                        <th class="border border-r-1 border-black p-1">Email</th>
                        <th class="border border-r-1 border-black p-1">Gender</th>
                        <th class="border border-r-1 border-black p-1">Region</th>
                        <th class="border border-r-1 border-black p-1">Province</th>
                        <th class="border border-r-1 border-black p-1">Municipality</th>
                        <th class="border border-r-1 border-black p-1">Baranggay</th>
                        <th class="border border-r-1 border-black p-1">House and Street Number</th>
                        <th class="border border-r-1 border-black p-1">ID Type</th>
                        <th class="border border-r-1 border-black p-1">ID Number</th>
                        <th class="border border-r-1 border-black p-1">ID Picture</th>
                        <th class="border border-r-1 border-black p-1">ID Type</th>
                        <th class="border border-r-1 border-black p-1">ID Number</th>
                        <th class="border border-r-1 border-black p-1">ID Picture</th>
                        <th class="border border-r-1 border-black p-1">Occupation</th>
                        <th class="border border-r-1 border-black p-1">Employment Status</th>
                        <th class="border border-r-1 border-black p-1">Educational Attainment</th>
                        <th class="border border-r-1 border-black p-1">Name of Employer</th>
                        <th class="border border-r-1 border-black p-1">Address of Employer</th>
                        <th class="border border-r-1 border-black p-1">Monthly Income</th>
                        <th class="border border-r-1 border-black p-1">Annual Income</th>
                        <th class="border border-r-1 border-black p-1">House Ownership</th>
                        <th class="border border-r-1 border-black p-1">Length of Stay</th>
                        <th class="border border-r-1 border-black p-1">Citizenship</th>
                        <th class="border border-r-1 border-black p-1">Number of Children</th>
                        <th class="border border-r-1 border-black p-1">Civil Status</th>
                        <th class="border border-r-1 border-black p-1">Place of Marriage</th>
                        <th class="border border-r-1 border-black p-1">Date of Marriage</th>
                        <th class="border border-r-1 border-black p-1">Spouse Name</th>
                        <th class="border border-r-1 border-black p-1">Place of Birth(spouse)</th>
                        <th class="border border-r-1 border-black p-1">Date of Birth(spouse)</th>
                        <th class="border border-r-1 border-black p-1">Educational Attainment(spouse)</th>
                        <th class="border border-r-1 border-black p-1">Occupation(spouse)</th>
                        <th class="p-2">Member's Approval</th>
                    </tr>
            </thead>
            <tbody class="p-2">
            @foreach ($regularMembers as $regularMember)
                <tr class="text-xs">
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->firstName}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->middleName}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->lastName}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->POB}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->DOB}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->contactNumber}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->facebookAccount}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->email}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->gender}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->occupation}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->employmentStatus}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->EducationalAttaiment}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->houseOwnership}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->citizenship}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->civilStatus}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->monthlyIncome}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->annualIncome}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->contactNumber}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->lengthOfStay}}</td>
                    <td class="border border-r-1 border-black p-1 border-b-1";>{{$regularMember->numberOfChildren}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </div>
</div>
