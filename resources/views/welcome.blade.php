<!DOCTYPE html>
<html lang="en">
<x-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to $tudio!</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            body {
                background-color: #000;
                color: #fff;
            }
            .highlight {
                color: #00aced;
            }
            .btn-custom {
                background-color: #00aced;
                border: none;
            }
            .btn-custom:hover {
                background-color: #007bb5;
            }
            .feature-icon {
                color: #00aced;
            }
            .feature-list li {
                margin-bottom: 15px;
            }
            .feature-list li .icon {
                margin-right: 10px;
            }
            .services-section img {
                transition: transform 0.3s ease;
            }
            .services-section img:hover {
                transform: scale(1.05);
            }
            .promo-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .promo-card:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
        </style>
    </head>
    <body>
    <div class="bg-black py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-100">Welcome to <span class="highlight">$tudio!</span></h1>
                <p class="mt-4 text-lg text-gray-100">
                    At <span class="highlight">$tudio</span>, we're passionate about offering top-notch beauty and wellness services tailored to meet your unique needs. Whether you're looking for a relaxing spa treatment, high-quality beauty products, or expert advice, we've got you covered.
                </p>
                <p class="mt-4 text-lg text-gray-100">
                    Our skilled team is dedicated to ensuring you leave feeling refreshed and confident. We pride ourselves on using the best products and staying ahead with the latest trends to provide you with an exceptional experience.
                </p>
                <div class="mt-8 grid grid-cols-2 gap-6">
                    <a href="/hair" class="inline-block btn btn-custom text-white py-3 px-6 rounded-lg text-lg font-semibold">
                        Explore Our Hair Services
                    </a>
                    <a href="/makeup" class="inline-block btn btn-custom text-white py-3 px-6 rounded-lg text-lg font-semibold">
                        Explore Our Make-Up Services
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-black border border-white py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white text-center">Special Offers</h2>
            <p class="mt-4 text-lg text-white text-center">Check out our exclusive deals and promotions to save on your next visit!</p>
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="promo-card bg-white p-6 rounded-lg text-center">
                    <h3 class="text-xl font-semibold text-blue-600">20% Off Your First Visit</h3>
                    <p class="text-gray-700">Enjoy a 20% discount on your first appointment with us.</p>
                </div>
                <div class="promo-card bg-white p-6 rounded-lg text-center">
                    <h3 class="text-xl font-semibold text-blue-600">Buy One, Get One Free</h3>
                    <p class="text-gray-700">Purchase any service and get a second one free. Limited time offer!</p>
                </div>
                <div class="promo-card bg-white p-6 rounded-lg text-center">
                    <h3 class="text-xl font-semibold text-blue-600">Kids Offers</h3>
                    <p class="text-gray-700">20% discount for any of our services for kids under 12 years of age!</p>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-black py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <div class="flex-1 lg:pr-8">
                    <h2 class="text-3xl font-bold text-gray-100">Why Choose <span class="highlight">$tudio?</span></h2>
                    <p class="mt-4 text-lg text-gray-100">
                        Experience the difference with <span class="highlight">$tudio</span>'s exceptional services and products. We focus on providing personalized care and use only the finest ingredients to ensure you get the best results. Discover why our clients love us!
                    </p>
                    <ul class="mt-6 feature-list text-gray-100">
                        <li class="flex items-center">
                            <i class="fas fa-user-friends feature-icon icon"></i>
                            <span>Personalized Service</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-gem feature-icon icon"></i>
                            <span>High-Quality Products</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-chalkboard-teacher feature-icon icon"></i>
                            <span>Expert Advice</span>
                        </li>
                    </ul>
                </div>

                <div class="flex-1 mt-8 lg:mt-0 lg:ml-8 services-section">
                    <img src="https://cdn0.weddingwire.com/vendor/546871/3_2/640/jpg/bare5_51_2178645-171110241065097.jpeg" alt="Beauty Service" class="w-full h-auto object-cover rounded-lg">
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="/book" class="inline-block btn btn-custom text-white py-3 px-6 rounded-lg text-lg font-semibold">
                    Book Appointment
                </a>
            </div>
        </div>
    </div>



    </body>
</html>
</x-layout>
