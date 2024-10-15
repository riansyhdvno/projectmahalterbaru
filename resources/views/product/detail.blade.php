<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>SigmaGem Consign</title>
</head>

<body class="h-full bg-gray-100">
    <x-navbar></x-navbar>
    <main>
    <div> <!-- min-h-screen untuk tinggi minimal -->
        <!-- Product Card -->
        <div class=" rounded-lg p-12 flex w-full">
            <!-- Product Image Section -->
            <div class="w-1/2">
                <div class="relative p-">
                    <img src="https://via.placeholder.com/600x400" alt="Product Image" class="w-full rounded-lg">

                </div>

                <!-- Thumbnail Images -->
                <div class="flex mt-10 space-x-5">
                    <img src="https://via.placeholder.com/100x100" alt="Thumbnail 1"
                        class="w-20 h-20 rounded-lg border border-gray-300 cursor-pointer">
                    <img src="https://via.placeholder.com/100x100" alt="Thumbnail 2"
                        class="w-20 h-20 rounded-lg border border-gray-300 cursor-pointer">
                    <img src="https://via.placeholder.com/100x100" alt="Thumbnail 3"
                        class="w-20 h-20 rounded-lg border border-gray-300 cursor-pointer">
                    <img src="https://via.placeholder.com/100x100" alt="Thumbnail 4"
                        class="w-20 h-20 rounded-lg border border-gray-300 cursor-pointer">
                </div>
            </div>

            <!-- Product Info Section -->
            <div class="w-1/2 ml-8">
                <h2 class="text-3xl font-bold text-gray-900">Gaming Pheriperals</h2>
                <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non erat
                    quam. Vestibulum aliquam nibh.</p>

                <!-- Price Section -->
                <div class="flex items-center mt-4">
                    <span class="text-2xl font-bold text-gray-900">Rp500.000</span>
                    <span class="ml-4 text-green-600 font-semibold">Good Condition</span>
                </div>

                <!-- Color Options -->
                <div class="mt-6">
                    <h3 class="text-sm font-semibold text-gray-700">Color</h3>
                    <div class="flex items-center space-x-2 mt-2">
                        <button
                            class="w-8 h-8 rounded-full bg-black border border-gray-300 focus:ring-2 focus:ring-indigo-500"></button>
                        <button
                            class="w-8 h-8 rounded-full bg-gray-700 border border-gray-300 focus:ring-2 focus:ring-indigo-500"></button>
                        <button
                            class="w-8 h-8 rounded-full bg-gray-300 border border-gray-300 focus:ring-2 focus:ring-indigo-500"></button>
                    </div>
                </div>

                <!-- Specifications -->
                <div class="mt-6">
                    <h3 class="text-sm font-semibold text-gray-700">Specification</h3>
                    <ul class="list-disc ml-6 mt-2 text-gray-600 space-y-1">
                        <li>Lorem ipsum dolor sit</li>
                        <li>amet consectetur adipisicing elit</li>
                        <li>recusandae quia eum doloribus blanditiis</li>
                        <li> Accusamus distinctio dolores corrupti delectus</li>
                    </ul>
                </div>

                {{-- <!-- RAM and Storage Options -->
                <div class="flex items-center mt-6 space-x-4">
                    <!-- RAM Options -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-700">RAM</h3>
                        <div class="flex space-x-2 mt-2">
                            <button
                                class="px-4 py-2 border rounded-lg bg-white text-gray-700 hover:bg-gray-100">8GB</button>
                            <button
                                class="px-4 py-2 border rounded-lg bg-white text-gray-700 hover:bg-gray-100">16GB</button>
                        </div>
                    </div>

                    <!-- Storage Options -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-700">Storage</h3>
                        <div class="flex space-x-2 mt-2">
                            <button
                                class="px-4 py-2 border rounded-lg bg-white text-gray-700 hover:bg-gray-100">256GB</button>
                            <button
                                class="px-4 py-2 border rounded-lg bg-white text-gray-700 hover:bg-gray-100">512GB</button>
                            <button
                                class="px-4 py-2 border rounded-lg bg-white text-gray-700 hover:bg-gray-100">1TB</button>
                        </div>
                    </div>
                </div> --}}

                <!-- Quantity and Actions -->
                <div class="flex items-center mt-6">
                    <!-- Quantity Selector -->
                    <div class="flex items-center border rounded-lg">
                        <button class="px-3 py-2 text-gray-600 hover:bg-gray-100">-</button>
                        {{-- <input type="number" class="w-12 text-center text-gray-600" value="1"> --}}
                        <button class="px-3 py-2 text-gray-600 hover:bg-gray-100">+</button>
                    </div>

                    <!-- Action Buttons -->
                    <div class="ml-6 space-x-4">
                        <button
                            class="px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-500">Add
                            to Cart</button>
                        <button
                            class="px-6 py-2 bg-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-300">Buy
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>

    
</body>

</html>
