<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cheque Collection</title>
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

    <h1>Cheque Collection Confirmation</h1>

        @php
          // Calculate the total amount
          $totalAmount = $price + $serviceCharge + ($couponAmount ?? 0);
      @endphp

    <div class="message">
        <p>Dear {{ $email }},</p>
        <p>Thank you for purchasing our Digital Market Service! We are thrilled to have you onboard and are committed to delivering exceptional results for your business.</p>
        <p>As a valued customer, you can expect top-notch digital marketing strategies that will enhance your online presence and drive significant growth. Our team of experts is dedicated to providing you with the best services and ensuring that your business reaches new heights.</p>
        <br>
        <p>We appreciate your interest in our company and look forward to Connect with you.</p>
       
        <h2>Your Order Details:</h2>
        <table>
            <tr>
                <th>Service Title</th>
                <td>{{ $title }}</td>
            </tr>
            <tr>
                <th>Subtotal</th>
                <td>{{ $price }}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>
                      {{ $totalAmount }}
                </td>
            </tr>
            <tr>
                <th>Service Charge</th>
                <td>{{ $serviceCharge }}</td>
            </tr>
            <tr>
                <th>Coupon Discount</th>
                <td>{{ $couponAmount }}</td>
            </tr>
        </table>

        <p>Best regards,</p>
        <p>Sincerely,<br>Digital Market Place<br>
            Al Mamzar Centre, Office no. 2, Abu Hail<br>
            Dubai, United Arab Emirates<br>
            Phone: 055 101 6476<br>
        </p>

        <p>Thank you very much for choosing Digital Market Place. We appreciate your patience.</p>
    </div>
</body>
</html>
