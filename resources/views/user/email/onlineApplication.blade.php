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

        <li>First Name: <?=$first_name;?></li>

        {{-- <li>Last Name: {{$last_name}}</li>
        <li>Email: {{$email}}</li>
        <li>Country: {{$country}}</li>
        <li>:Mobile Code {{$mobile_code}}</li>

        <li>Mobile: {{$mobile}}</li>

        <li>Date of Birth: {{$birthday}}</li>

        <li>Gender: {{$gender}}</li>

        <li>Last Academic Result: {{$last_academic_result}}</li>

        <li>Comments: {{$notes}}</li>
        <h3>Study Destinations</h3> --}}
        {{-- @foreach($study_destinations as $destinations)

        <li> {{$destinations}}</li>

        @endforeach --}}

        {{-- <li>Level: {{$level}}</li> --}}

        {{-- <li>Course Name: {{$course_name}}</li>

        <li>Language Certification: {{$language_certificate}}</li> --}}


        {{-- <li>Mobile Number: hello</li> --}}




    </ul>
    {{-- @endif--}}

    <p>Thank you</p>
</body>
</html>
