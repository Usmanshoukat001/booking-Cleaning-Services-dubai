<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Service:</strong> {{ $data['service'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
    
    {{-- You can add more styling or customize the layout as needed --}}
    
    <p>Thank you for using our contact form!</p>
</body>
</html>
