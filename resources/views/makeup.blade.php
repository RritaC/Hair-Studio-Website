<!DOCTYPE html>
<html lang="en">
<x-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Makeup Portfolio</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                background-color: #f8f9fa;
                font-family: Arial, sans-serif;
            }
            .portfolio-header {
                text-align: center;
                padding: 50px 0;
                background-color: #e0e0e0;
                margin-bottom: 30px;
            }
            .portfolio-header h1 {
                font-size: 3em;
                color: #333;
            }
            .workbook-section,
            .workbook-section h2,
            .photo-collage-section h2 {
                text-align: center;
                margin-bottom: 30px;
            }
            .workbook {
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
            }
            .workbook-item {
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 10px;
                padding: 20px;
                margin: 10px;
                width: 200px;
                text-align: center;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

            }
            .workbook-item img {
                max-width: 100%;
                border-radius: 5px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .workbook-item img:hover {
                transform: scale(1.5);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
        </style>
    </head>
    <body>
    <div class="portfolio-header">
        <h1>The art of BEAUTY</h1>
        <p>Our best makeup work and creativity</p>
    </div>

    <div class="container workbook-section">
        <h2>Only at $alon</h2>
        <div class="workbook">
            <div class="workbook-item">
                <img src="https://i.weddingomania.com/2023/05/03-chic-shiny-makeup-with-highlighter-a-glossy-pink-lip-shiny-smokey-eyes-and-a-touch-of-blush.jpg" alt="Workbook Item">
                <h4 class="text-black mt-2">Smokey Eyes</h4>
                <p class="text-black">A stunning smokey eye look perfect for evenings.</p>
            </div>
            <div class="workbook-item">
                <img src="https://edited.beautybay.com/wp-content/uploads/2021/07/makeup_by_dominika_szymik.jpg" alt="Workbook Item">
                <h4 class="text-black mt-2">Wedding Face</h4>
                <p class="text-black">A stunning smokey eye look perfect for evenings.</p>
            </div>
            <div class="workbook-item">
                <img src="https://www.chassepermanentmakeup.com/wp-content/uploads/2022/10/FD4CEA17-72D4-4BAE-99F0-E6220407A591-821x1024.jpeg" alt="Workbook Item">
                <h4 class="text-black mt-2">Brows</h4>
                <p class="text-black">A stunning smokey eye look perfect for evenings.</p>
            </div>
            <div class="workbook-item">
                <img src="https://dy6g3i6a1660s.cloudfront.net/72PVznc8uNFfevHr1_zD3QM0BE8/cl.jpg" alt="Workbook Item">
                <h4 class="text-black mt-2">Crazy Look</h4>
                <p class="text-black">A natural nude makeup for everyday wear.</p>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="bg-black border border-white py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-100">Ready for a Fresh Look?</h2>
                <p class="mt-4 text-lg text-gray-100">
                    Experience our top-notch hair services and leave feeling fabulous. Book an appointment today and let our experts take care of your hair needs.
                </p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://facebook.com" target="_blank">Facebook</a></li>
                    <li class="list-inline-item"><a href="https://instagram.com" target="_blank">Instagram</a></li>
                    <li class="list-inline-item"><a href="https://twitter.com" target="_blank">Twitter</a></li>
                </ul>
                <div class="mt-8">
                    <a href="/book" class="inline-block bg-blue-600 text-white py-3 px-6 rounded-lg text-lg font-semibold hover:bg-blue-700">
                        Book Now
                    </a>
                </div>
            </div>
        </div>
    </div>


    </body>
</html>
</x-layout>
