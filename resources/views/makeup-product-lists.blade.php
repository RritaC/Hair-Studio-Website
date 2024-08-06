<x-layout>

    <style>
        .purchase-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .purchase-item:hover {
            transform: scale(1.06);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>

    <div class="bg-black">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-14 lg:max-w-7xl lg:px-6">
            <h2 class="text-2xl font-bold tracking-tight text-gray-100 pb-6">Makeup Products</h2>
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://i.ebayimg.com/00/s/MTAwMFgxMDAw/z/-XgAAOSwzUxj-fKe/$_1.PNG" alt="Product" class="h-full w-full object-cover object-center group-hover:opacity-75 purchase-item">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-200">Blush</h3>
                    <p class="mt-1 text-lg font-medium text-gray-200">$28</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://www.elfcosmetics.com/dw/image/v2/BBXC_PRD/on/demandware.static/-/Sites-elf-master/default/dwca5811f7/2022/HaloGlowPowderNewAssets/83391_OpenA_R.jpg?sfrm=png&sw=700&q=90" alt="All in one." class="h-full w-full object-cover object-center group-hover:opacity-75 purchase-item">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-200">Powder</h3>
                    <p class="mt-1 text-lg font-medium text-gray-200">$35</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://m.media-amazon.com/images/I/71MQo8pHmBL.jpg" alt="Lotus" class="h-full w-full object-cover object-center group-hover:opacity-75 purchase-item">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-200">Mascara</h3>
                    <p class="mt-1 text-lg font-medium text-gray-200">$89</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://picture.drhauschka.co.uk/media/image/be/ed/76/3134663-liquid-eyeliner-container-01-01-420005981.jpg" alt="Coconut" class="h-full w-full object-cover object-center group-hover:opacity-75 purchase-item">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-200">Eyeliner</h3>
                    <p class="mt-1 text-lg font-medium text-gray-200">$35</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://s13emagst.akamaized.net/products/10856/10855754/images/res_e8a33b123a8be5b92b4b6b0afc1ee5f8.jpg" alt="StyleMaster" class="h-full w-full object-cover object-center group-hover:opacity-75 purchase-item">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-200">Concealer</h3>
                    <p class="mt-1 text-lg font-medium text-gray-200">$28</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://fancyfaceshop.ca/cdn/shop/files/chisel-me-contour_463x700.jpg?v=1691632178" alt="Smooth" class="h-full w-full object-cover object-center group-hover:opacity-75 purchase-item">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-200">Contour</h3>
                    <p class="mt-1 text-lg font-medium text-gray-200">$35</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="data:image/jpeg;base64,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" alt="Iron Guard" class="h-full w-full object-cover object-center group-hover:opacity-75 purchase-item">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-200">Lipstick</h3>
                    <p class="mt-1 text-lg font-medium text-gray-200">$89</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="data:image/jpeg;base64,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" alt="Memory" class="h-full w-full object-cover object-center group-hover:opacity-75 purchase-item">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-200">Eyeshadow</h3>
                    <p class="mt-1 text-lg font-medium text-gray-200">$35</p>
                </a>
            </div>
        </div>

    </div>

</x-layout>
