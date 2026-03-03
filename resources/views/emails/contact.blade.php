<!DOCTYPE html>
<html>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2 style="color: #1a73e8;">New Contact Form Submission</h2>
    <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;">
        <tr>
            <td style="font-weight: bold; width: 130px;">Name:</td>
            <td>{{ $name }}</td>
        </tr>
        <tr style="background: #f5f5f5;">
            <td style="font-weight: bold;">Email:</td>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Phone:</td>
            <td>{{ $phone }}</td>
        </tr>
        <tr style="background: #f5f5f5;">
            <td style="font-weight: bold;">Subject:</td>
            <td>{{ $subject }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold; vertical-align: top;">Message:</td>
            <td>{{ $bodyMessage }}</td>
        </tr>
    </table>
</body>
</html>
