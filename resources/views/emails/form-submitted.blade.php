<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted</title>
</head>

<body>
    <p>Hello {{ $mailData['name'] }},</p>
    <p>Hello {{ $mailData['email'] }},</p>
    <p>{{ $mailData['mobile'] }}</p>
    <p><img src="{{ asset($mailData['attachment']) }})"> </p>
    <p>{{ $mailData['message'] }}</p>
    <p>Thank you for submitting the form.</p>
    <p>Regards,</p>
    <p>Your Company</p>
</body>

</html>
