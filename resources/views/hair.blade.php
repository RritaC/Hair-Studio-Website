<x-layout>
    <!-- Hero Section -->
    <div class="bg-gray-100 py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-900">Top Hair Services</h1>
                <p class="mt-4 text-lg text-gray-700">
                    Discover our premium hair services designed to enhance your look and keep your hair in top condition. From expert trims to stylish edges, our skilled professionals are here to cater to all your hair needs.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-black border border-white py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-100 text-center">Featured Services</h2>
            <div class="relative mt-8">
                <!-- Carousel Container -->
                <div class="overflow-hidden relative">
                    <div class="flex transition-transform duration-300 ease-in-out" id="carousel">
                        <!-- Duplicate last item for seamless transition -->
                        <div class="carousel-item flex-none w-80 px-4" id="last-clone">
                            <img src="https://beautyinsider.sg/wp-content/uploads/2020/06/shutterstock_239929435-scaled.jpg" alt="Service 6" class="carousel-image rounded-lg shadow-lg">
                            <h3 class="mt-4 text-lg font-semibold text-gray-100">Scalp Treatment</h3>
                            <p class="text-gray-300">Rejuvenate your scalp with our soothing and effective treatments.</p>
                        </div>
                        <!-- Carousel Items -->
                        <div class="carousel-item flex-none w-80 px-4">
                            <img src="https://www.theklinik.com/sites/theklinik.com/files/116692121_10159377827961323_6090878096284745384_o%20cinz.jpg" alt="Service 1" class="carousel-image rounded-lg shadow-lg">
                            <h3 class="mt-4 text-lg font-semibold text-gray-100">Hair Trimming</h3>
                            <p class="text-gray-300">Maintain your hair’s shape and health with our expert trimming services.</p>
                        </div>
                        <div class="carousel-item flex-none w-80 px-4">
                            <img src="https://cdn-blog.prose.com/1/2023/11/Untitled-1-5.jpg" alt="Service 2" class="carousel-image rounded-lg shadow-lg">
                            <h3 class="mt-4 text-lg font-semibold text-gray-100">Gel Styling</h3>
                            <p class="text-gray-300">Perfect your look with our precise gel styling services.</p>
                        </div>
                        <div class="carousel-item flex-none w-80 px-4">
                            <img src="https://media.allure.com/photos/5b7c63a635edf9723c64bb27/master/w_1600%2Cc_limit/olivia%2520smalley%2520color%2520correct%2520before%2520and%2520after%25202%2520(1)%2520copy.jpg" alt="Service 3" class="carousel-image rounded-lg shadow-lg">
                            <h3 class="mt-4 text-lg font-semibold text-gray-100">Color Treatment</h3>
                            <p class="text-gray-300">Refresh your style with our vibrant color treatment options.</p>
                        </div>
                        <div class="carousel-item flex-none w-80 px-4">
                            <img src="https://hollywoodmakeupschool.com/wp-content/uploads/2020/08/HAIR-STYLING-CLASS-FOR-BRIDAL-AND-RED-CARPET.jpg" alt="Service 4" class="carousel-image rounded-lg shadow-lg">
                            <h3 class="mt-4 text-lg font-semibold text-gray-100">Hair Styling</h3>
                            <p class="text-gray-300">Get the perfect hairstyle for any occasion with our expert stylists.</p>
                        </div>
                        <div class="carousel-item flex-none w-80 px-4">
                            <img src="https://i0.wp.com/therighthairstyles.com/wp-content/uploads/2021/10/1-deep-conditioning-hair-before-and-after-image.jpg?resize=500%2C500&ssl=1" alt="Service 5" class="carousel-image rounded-lg shadow-lg">
                            <h3 class="mt-4 text-lg font-semibold text-gray-100">Deep Conditioning</h3>
                            <p class="text-gray-300">Nourish your hair with our revitalizing deep conditioning treatments.</p>
                        </div>
                        <div class="carousel-item flex-none w-80 px-4">
                            <img src="https://beautyinsider.sg/wp-content/uploads/2020/06/shutterstock_239929435-scaled.jpg" alt="Service 6" class="carousel-image rounded-lg shadow-lg">
                            <h3 class="mt-4 text-lg font-semibold text-gray-100">Scalp Treatment</h3>
                            <p class="text-gray-300">Rejuvenate your scalp with our soothing and effective treatments.</p>
                        </div>
                        <!-- Duplicate first item for seamless transition -->
                        <div class="carousel-item flex-none w-80 px-4" id="first-clone">
                            <img src="https://www.theklinik.com/sites/theklinik.com/files/116692121_10159377827961323_6090878096284745384_o%20cinz.jpg" alt="Service 1" class="carousel-image rounded-lg shadow-lg">
                            <h3 class="mt-4 text-lg font-semibold text-gray-100">Hair Trimming</h3>
                            <p class="text-gray-300">Maintain your hair’s shape and health with our expert trimming services.</p>
                        </div>
                    </div>
                    <!-- Carousel Controls -->
                    <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-900 text-white p-2 rounded-full" id="prev">
                        &#9664;
                    </button>
                    <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-900 text-white p-2 rounded-full" id="next">
                        &#9654;
                    </button>
                </div>
            </div>
        </div>
    </div>


    <style>
        .profile-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-card:hover {
            transform: scale(1.3);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .carousel-image {
            width: 100%;
            height: 250px; /* Set a fixed height */
            object-fit: cover; /* Maintain aspect ratio and cover the entire area */
        }
    </style>


    <!-- Top Clients Section -->
    <div class="bg-gray-50  py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 text-center">Our Happy Clients</h2>
            <div class="mt-8 grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Client Item 1 -->
                <div class="flex flex-col items-center text-center">
                    <img src="https://www.perfocal.com/blog/content/images/size/w960/2021/01/Perfocal_17-11-2019_TYWFAQ_100_standard-3.jpg" alt="Client 1" class="w-32 h-32 object-cover rounded-full shadow-lg profile-card ">
                    <h3 class=" mt-4 text-lg font-semibold text-gray-900">Beatrice Smith</h3>
                    <p class="text-gray-700">“Amazing trimming service! My hair has never looked better.”</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img src="https://images.top10.com/f_auto,q_auto/v1/production/articles/uploads/photo/Untitleddesign403.20220526114538.jpg" alt="Client 1" class="w-32 h-32 object-cover rounded-full shadow-lg profile-card">
                    <h3 class="mt-4 text-lg font-semibold text-gray-900">Molly Miller</h3>
                    <p class="text-gray-700">“After my scalp treatment, I received the most compliments ever”</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img src="https://mlnfglamkgv8.i.optimole.com/w:auto/h:auto/q:mauto/f:best/ig:avif/https://loving-community.com/wp-content/uploads/2023/03/portrait-young-pretty-positive-girl-smiling.jpg" alt="Client 1" class="w-32 h-32 object-cover rounded-full shadow-lg profile-card">
                    <h3 class="mt-4 text-lg font-semibold text-gray-900">Jane Cooper</h3>
                    <p class="text-gray-700">“Absolutely phenomenal, my hair has never been better.”</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img src="https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvay1zMjktZHNjNjc0NTQ1NTQ1NDU4Mi5qcGc.jpg" alt="Client 1" class="w-32 h-32 object-cover rounded-full shadow-lg profile-card">
                    <h3 class="mt-4 text-lg font-semibold text-gray-900">Ellie Goodman</h3>
                    <p class="text-gray-700">“I feel like a different person. Their treatments have made me confident!”</p>
                </div>
                <!-- Add more client items here -->
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
                <div class="mt-8">
                    <a href="/register" class="inline-block bg-blue-600 text-white py-3 px-6 rounded-lg text-lg font-semibold hover:bg-blue-700">
                        Book Now
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            let index = 1; // Start at the first real item
            const $carousel = $('#carousel');
            const $items = $carousel.children('.carousel-item');
            const totalItems = $items.length;
            const itemWidth = $items.outerWidth(true); // Width including margin

            // Set initial position to the first real item
            $carousel.css('transform', `translateX(-${index * itemWidth}px)`);

            function updateCarousel() {
                $carousel.css('transition', 'transform 0.5s ease-in-out');
                $carousel.css('transform', `translateX(-${index * itemWidth}px)`);
            }

            function resetCarousel() {
                $carousel.css('transition', 'none');
                $carousel.css('transform', `translateX(-${index * itemWidth}px)`);
            }

            $('#next').click(function() {
                index++;
                updateCarousel();

                // If we reached the cloned first item, jump back to the real first item
                if (index === totalItems - 1) {
                    setTimeout(() => {
                        index = 1;
                        resetCarousel();
                    }, 500); // Match transition duration
                }
            });

            $('#prev').click(function() {
                index--;
                updateCarousel();

                // If we reached the cloned last item, jump back to the real last item
                if (index === 0) {
                    setTimeout(() => {
                        index = totalItems - 2;
                        resetCarousel();
                    }, 500); // Match transition duration
                }
            });

            // Optional: Auto-scroll
            setInterval(() => {
                $('#next').click();
            }, 5000); // Change slide every 5 seconds
        });
    </script>

    </script>
</x-layout>
