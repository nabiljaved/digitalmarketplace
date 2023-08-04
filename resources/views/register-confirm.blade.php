<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Register Confirm</title>
    <style type="text/css">
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
        }

        /* Header styles */
        .header {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
        }

        .header img {
            height: 100px;
        }

        .header h1 {
            font-size: 32px;
            margin: 0;
        }

        /* Message styles */
        .message {
            padding: 20px;
        }

        .message p {
            margin: 0 0 20px;
        }

        /* Button styles */
        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 20px 10px;
            cursor: pointer;
            border-radius: 5px;
            border: none;
        }

        .button:hover {
            background-color: #3e8e41;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ $message->embed(public_path('uploads/company/digitalmarket.png')) }}" alt="Your Company Logo" />
    </div>

    <h1>Thank you for Registration!</h1>


    <div class="message">

        <p>Dear {{ $email }},</p>
        
        <p>Thank you for signing up to our platform. We are thrilled to welcome you to the best place for choosing digital services!</p>
        <p>Our mission is to provide you with a seamless and efficient experience as you explore and select from a wide range of digital services offered by our trusted partners. Whether it's web development, digital marketing, graphic design, or any other digital service, we have it all covered.</p>
        <p>Feel free to browse through our marketplace, and if you have any questions or need assistance, our friendly support team is always here to help you.</p>
        <p>Once again, welcome aboard! We look forward to being a part of your journey to success.</p>
     

        <p>Best regards,</p>
        <p>Sincerely,<br>Digital Market Place<br>
            Al Mamzar Centre, Office no. 2, Abu Hail<br>
            Dubai, United Arab Emirates<br>
            Phone: 055 101 6476<br>
        </p>

        <p>Thank you very much for choosing Digital Market Place.</p>
    </div>
</body>
</html>
