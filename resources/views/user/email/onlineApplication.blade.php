<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Application Form</title>
</head>


<body>

    {{-- @if ($given_name)--}}
    <ul>

        <li><strong>First Name:</strong> {{ $first_name }}</li>



        <li><strong>Last Name:</strong> {{$last_name}}</li>


        <li><strong>Email:</strong> {{$email_address}}</li>

        <li><strong>Country:</strong> {{$country}}</li>

        <li><strong>Mobile Code:</strong> {{$mobile_code}}</li>

        <li><strong>Mobile:</strong> {{$mobile}}</li>

        <li><strong>Date of Birth:</strong> {{$birthday}}</li>

        <li><strong>Gender:</strong> {{$gender}}</li>

        <li><strong>Last Academic Result:</strong> {{$last_academic_result}}</li>

        <li><strong>Comments:</strong> {{$notes}}</li>

        <li><strong>

            Study Destinations:</strong>

            @foreach($study_destinations as $destinations)

            {{$destinations}},

            @endforeach
        </li>

        <li><strong>Level:</strong> {{$level}}</li>

        <li><strong>Course Name:</strong> {{$course_name}}</li>

        <li><strong>Language Certification:</strong> {{$language_certificate}}</li>



        {{-- <li>Mobile Number: hello</li> --}}




    </ul>
    {{-- @endif--}}

    <p>Thank you</p>
</body>
</html>
