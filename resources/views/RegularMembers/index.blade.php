<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="margin-top: 3%;">
        <table border="1">
            <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Address</th>
                <th>Religion</th>
                <th>Place of Birth</th>
                <th>Date of Birth</th>
                <th>ID Type</th>
                <th>ID Number</th>
                <th>Occupation</th>
                <th>Employment Status</th>
                <th>Educational Attainment</th>
                <th>Contact Number</th>
                <th>Facebook Account</th>
                <th>Email</th>
                <th>Name of Employer</th>
                <th>Address of Employer</th>
                <th>Monthly Income</th>
                <th>Annual Income</th>
                <th>House Ownership</th>
                <th>Citizenship</th>
                <th>Civil Status</th>
                <th>Place of Marriage</th>
                <th>Date of Marriage</th>
                <th>Spouse Name</th>
                <th>Place of Birth</th>
                <th>Spouse Educational Attainment</th>
                <th>Spouse Occupation</th>
            </tr>
            @foreach ($regularMembers as $regularMember)
                <tr>
                    <td>{{ $regularMember->firstName }}</td>
                    <td>{{ $regularMember->middleName }}</td>
                    <td>{{ $regularMember->lastName }}</td>
                    <td>{{ $regularMember->gender }}</td>
                    <td>{{ $regularMember->age }}</td>
                    <td>{{ $regularMember->address }}</td>
                    <td>{{ $regularMember->religion }}</td>
                    <td>{{ $regularMember->POB }}</td>
                    <td>{{ $regularMember->DOB }}</td>
                    <td>{{ $regularMember->idType }}</td>
                    <td>{{ $regularMember->idNumber }}</td>
                    <td>{{ $regularMember->occupation }}</td>
                    <td>{{ $regularMember->employment_status }}</td>
                    <td>{{ $regularMember->educational_attainment }}</td>
                    <td>{{ $regularMember->contactNumber }}</td>
                    <td>{{ $regularMember->facebook_account }}</td>
                    <td>{{ $regularMember->email }}</td>
                    <td>{{ $regularMember->nameOfEmployer }}</td>
                    <td>{{ $regularMember->addressOfEmployer }}</td>
                    <td>{{ $regularMember->monthlyIncome }}</td>
                    <td>{{ $regularMember->annualIncome }}</td>
                    <td>{{ $regularMember->house_ownership }}</td>
                    <td>{{ $regularMember->citizenship }}</td>
                    <td>{{ $regularMember->civilStatus }}</td>
                    <td>{{ $regularMember->place_of_marriage }}</td>
                    <td>{{ $regularMember->date_of_marriage }}</td>
                    <td>{{ $regularMember->spouse_name }}</td>
                    <td>{{ $regularMember->place_of_birth }}</td>
                    <td>{{ $regularMember->educational_attainmentSpouse }}</td>
                    <td>{{ $regularMember->occupationSpouse }}</td>
                    {{-- <td>
                        <a href="{{ route('regularMember.edit', ['regularMember' => $regularMember]) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('regularMember.destroy', ['regularMember' => $regularMember]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
