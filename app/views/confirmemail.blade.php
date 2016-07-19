<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>confirm</title>
</head>
<body>
<h2>Thanks for signing up {{$emailer}} Click link below to confirm your email</h2>
	<div>
            Thanks for creating an account with the WRS JOB
            Please follow the link below to verify your email address
            {{ URL::to('verify/'. $ccode) }}.<br/>
	
</body>
</html>