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
    <div class="max-w-7xl mx-auto py-6">
        <h1 class="text-3xl font-bold mb-6">Product List</h1>

        <!-- Grid Layout 4 Kesamping dan 2 Kebawah -->
        <div class="grid grid-cols-4 gap-6">
            <!-- Card 1 -->
            <a href="{{ route('product.detail') }}" class="bg-white shadow-md rounded-lg overflow-hidden block">
                <img src="https://via.placeholder.com/400x300" alt="Product Image 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-gray-900 font-semibold text-lg">Nama Produk</h2>
                    <p class="text-gray-800 font-bold">Rp.500.000</p>
                    <p class="text-sm text-gray-500 mt-2">Lokasi</p>
                    <span class="bg-green-200 text-green-800 text-xs font-semibold px-2 py-1 mt-2 inline-block">Condition</span>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('product.detail') }}" class="bg-white shadow-md rounded-lg overflow-hidden block">
                <img src="https://via.placeholder.com/400x300" alt="Product Image 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-gray-900 font-semibold text-lg">Nama Produk</h2>
                    <p class="text-gray-800 font-bold">Rp.500.000</p>
                    <p class="text-sm text-gray-500 mt-2">Lokasi</p>
                    <span class="bg-green-200 text-green-800 text-xs font-semibold px-2 py-1 mt-2 inline-block">Condition</span>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('product.detail') }}" class="bg-white shadow-md rounded-lg overflow-hidden block">
                <img src="https://via.placeholder.com/400x300" alt="Product Image 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-gray-900 font-semibold text-lg">Nama Produk</h2>
                    <p class="text-gray-800 font-bold">Rp.500.000</p>
                    <p class="text-sm text-gray-500 mt-2">Lokasi</p>
                    <span class="bg-green-200 text-green-800 text-xs font-semibold px-2 py-1 mt-2 inline-block">Condition</span>
                </div>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('product.detail') }}" class="bg-white shadow-md rounded-lg overflow-hidden block">
                <img src="https://via.placeholder.com/400x300" alt="Product Image 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-gray-900 font-semibold text-lg">Nama Produk</h2>
                    <p class="text-gray-800 font-bold">Rp.500.000</p>
                    <p class="text-sm text-gray-500 mt-2">Lokasi</p>
                    <span class="bg-green-200 text-green-800 text-xs font-semibold px-2 py-1 mt-2 inline-block">Condition</span>
                </div>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('product.detail') }}" class="bg-white shadow-md rounded-lg overflow-hidden block">
                <img src="https://via.placeholder.com/400x300" alt="Product Image 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-gray-900 font-semibold text-lg">Nama Produk</h2>
                    <p class="text-gray-800 font-bold">Rp.500.000</p>
                    <p class="text-sm text-gray-500 mt-2">Lokasi</p>
                    <span class="bg-green-200 text-green-800 text-xs font-semibold px-2 py-1 mt-2 inline-block">Condition</span>
                </div>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('product.detail') }}" class="bg-white shadow-md rounded-lg overflow-hidden block">
                <img src="https://via.placeholder.com/400x300" alt="Product Image 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-gray-900 font-semibold text-lg">Nama Produk</h2>
                    <p class="text-gray-800 font-bold">Rp.500.000</p>
                    <p class="text-sm text-gray-500 mt-2">Lokasi</p>
                    <span class="bg-green-200 text-green-800 text-xs font-semibold px-2 py-1 mt-2 inline-block">Condition</span>
                </div>
            </a>

            <!-- Card 7 -->
            <a href="{{ route('product.detail') }}" class="bg-white shadow-md rounded-lg overflow-hidden block">
                <img src="https://via.placeholder.com/400x300" alt="Product Image 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-gray-900 font-semibold text-lg">Nama Produk</h2>
                    <p class="text-gray-800 font-bold">Rp.500.000</p>
                    <p class="text-sm text-gray-500 mt-2">Lokasi</p>
                    <span class="bg-green-200 text-green-800 text-xs font-semibold px-2 py-1 mt-2 inline-block">Condition</span>
                </div>
            </a>

            <!-- Card 8 -->
            <a href="{{ route('product.detail') }}" class="bg-white shadow-md rounded-lg overflow-hidden block">
                <img src="https://via.placeholder.com/400x300" alt="Product Image 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-gray-900 font-semibold text-lg">Nama Produk</h2>
                    <p class="text-gray-800 font-bold">Rp.500.000</p>
                    <p class="text-sm text-gray-500 mt-2">Lokasi</p>
                    <span class="bg-green-200 text-green-800 text-xs font-semibold px-2 py-1 mt-2 inline-block">Condition</span>
                </div>
            </a>

        </div>
    </div>
</body>

</html>
