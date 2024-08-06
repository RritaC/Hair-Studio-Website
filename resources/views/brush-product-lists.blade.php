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
            <h2 class="text-2xl font-bold tracking-tight text-gray-100 pb-6">Brush Products</h2>
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://d1ak51zwgmtslz.cloudfront.net/PRODUCTS_EN/8690604597772_3.jpg" alt="Product" class="h-full w-full object-cover object-center group-hover:opacity-75 purchase-item">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-200">Biggest</h3>
                    <p class="mt-1 text-lg font-medium text-gray-200">$18</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://www.megateksa-ks.com/media/catalog/product/cache/fbb2dc43818756b056bd8caf729c2982/7/8/7803526_1.jpg" alt="All in one." class="h-full w-full object-cover object-center group-hover:opacity-75 purchase-item">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-200">Medium</h3>
                    <p class="mt-1 text-lg font-medium text-gray-200">$15</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://flormarlebanon.com/cdn/shop/products/BlendingBrushRedesign_467x700.jpg?v=1623482682" alt="Lotus" class="h-full w-full object-cover object-center group-hover:opacity-75 purchase-item">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-200">Second Medium</h3>
                    <p class="mt-1 text-lg font-medium text-gray-200">$9</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://luvit.com.bd/wp-content/uploads/2022/11/49000064-012_3.jpg" alt="Coconut" class="h-full w-full object-cover object-center group-hover:opacity-75 purchase-item">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-200">Smallest</h3>
                    <p class="mt-1 text-lg font-medium text-gray-200">$5</p>
                </a>

            </div>
        </div>

    </div>

</x-layout>
