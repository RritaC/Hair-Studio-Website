<x-layout>

    <style>
        .profile{
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile:hover {
            transform: scale(2.5);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>

    <section class="pt-10">
        <div class="bg-white/20 py-10 border border-white hover:bg-white/40 transition-colors duration-500">
            <div class="mx-auto max-w-7xl px-6">
                <div class="flex items-center gap-x-8">
                    <div class="flex-1 max-w-2xl">
                        <h1 class="text-4xl font-bold tracking-tight text-white-900">Welcome to $tudio</h1>
                        <p class="mt-4 text-lg leading-8 text-white-700">
                            At $tudio, we pride ourselves on providing exceptional beauty services tailored to meet your unique needs. Our talented team of professionals is dedicated to delivering top-notch customer care and ensuring you leave feeling refreshed and confident. We believe in using the best products and staying up-to-date with the latest trends to offer you an unparalleled experience.
                        </p>
                        <p class="mt-4 text-lg leading-8 text-white-700">
                            Our commitment to excellence is reflected in every service we offer, from haircuts to makeup applications. Experience the difference at $tudio, where every detail is crafted to enhance your beauty and boost your confidence.
                        </p>
                    </div>
                    <div class="flex-1">
                        <img class="w-[900px] h-[400px] object-cover rounded-lg" src="https://aa0fdbf07e3bcd9f2348-0554560afdd4c824bd8d3fdead8482c4.ssl.cf2.rackcdn.com/BusinessLogo/900x150/62388625_124155_$2019_07_30_03_18_54_1243.jpg" alt="Salon Image">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section>
        <div class="bg-black border border-white sm:py-10">
            <div class="mx-auto grid max-w-7xl gap-y-20 px-6 ">
                <div class="max-w-2xl">
                    <h2 class="text-3xl font-bold tracking-tight text-white-900 sm:text-4xl">Meet our wonderful staff</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300"> Connect with our staff and view their work, this allows our customers to have an idea of who is working on them</p>
                </div>
                <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-4 sm:gap-y-16 xl:col-span-4">
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full profile" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-white">Leslie Alexander</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full profile" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-white">Miranda Bailey</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600"> Main Haidresser </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full profile" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-white">Meredith Grey</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Hairdresser</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full profile" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-white">Lexie Grey</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Hairdresser</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full profile" src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-white">Arizona Robbins</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Main Makeup Artist</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full profile" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-white">Callie Torres</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Makeup Artist</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full profile" src="https://images.unsplash.com/photo-1507101105822-7472b28e22ac?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-white">Amelia Shepherd</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Makeup Artist</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full profile" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-white">Izzie Stevens</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Makeup Artist</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="bg-white/20 py-10 border border-white hover:bg-white/30 transition-colors duration-500">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-100">Ready for a Fresh Look?</h2>
                <p class="mt-4 text-lg text-gray-100">
                    Experience our top-notch hair services and leave feeling fabulous. Book an appointment today and let our experts take care of your hair needs.
                </p>
                <div class="mt-8">
                    <a href="/book" class="inline-block bg-blue-600 text-white py-3 px-6 rounded-lg text-lg font-semibold hover:bg-blue-700">
                        Book Now
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-layout>
