<!DOCTYPE html>
<html lang="en">
<x-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking Confirmation</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            .confirmation-container {
                text-align: center;
                margin-top: 50px;
            }
            .thank-you-message {
                font-size: 1.5em;
                margin-bottom: 20px;
            }
            .additional-info {
                font-size: 1.2em;
                margin-top: 30px;
            }
            .interesting-stuff {
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
    <div class="container confirmation-container ">
        <div class="thank-you-message">
            Thank you, {{ $first_name }}, for booking with us on {{ $appointmentDate }} at {{ $appointmentTime }}.
        </div>
        <div class="additional-info">
            We look forward to serving you. In the meantime, check out some interesting stuff below!
        </div>
        <div class="interesting-stuff  border border-white ">
            <h4 class="pt-3">Did You Know?</h4>
            <p>Our salon uses only the finest organic products to ensure your hair remains healthy and vibrant.</p>
            <p>We also offer a loyalty program where you can earn points towards free services and discounts.</p>
            <p>Follow us on social media for the latest trends and special offers:</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://facebook.com" target="_blank">Facebook</a></li>
                <li class="list-inline-item"><a href="https://instagram.com" target="_blank">Instagram</a></li>
                <li class="list-inline-item"><a href="https://twitter.com" target="_blank">Twitter</a></li>
            </ul>
            <a href="/" class="btn btn-primary mt-3 mb-3">Back to Homepage</a>
        </div>
    </div>
    </body>
</html>
</x-layout>
