<!DOCTYPE html>
<html>
<head>
    <title>Enquiry Confirmation</title>
</head>
<body>
    <h2>Dear {{ $data['name'] }},</h2>

    <p>Thank you for contacting us. We have received your enquiry and it has been sent to our admin.</p>

    <p>Our team will review your message and get back to you as soon as possible.</p>

    <p>Here are the details you provided:</p>
    <ul>
        <li><strong>Name:</strong> {{ $data['name'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Phone:</strong> {{ $data['phone'] }}</li>
        <li><strong>Message:</strong> {{ $data['message'] }}</li>
    </ul>

    <p>Thank you for your interest in our services.</p>

    <p>Best regards,<br>
    Your Company Name</p>
</body>
</html>
