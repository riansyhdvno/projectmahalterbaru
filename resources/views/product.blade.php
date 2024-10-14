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

<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>
        <div class="container mx-auto">
            <div class="grid grid-cols-4 gap-6" id="productGrid">
                <!-- Loop untuk menampilkan produk dari database -->
                @foreach ($products as $product)
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <img src="https://via.placeholder.com/400x300" alt="{{ $product->nama_produk }}" class="w-full h-40 object-cover mb-4">
                        @if ($product->kondisi)
                            <span class="bg-green-200 text-green-800 text-xs font-semibold px-2 py-1 rounded-full mb-2 inline-block">{{ $product->kondisi }}</span>
                        @endif
                        <h2 class="text-gray-900 font-semibold text-lg">{{ $product->nama_produk }}</h2>
                        <p class="text-sm text-gray-500">{{ $product->description ?? 'Deskripsi tidak tersedia.' }}</p>
                        <p class="text-gray-800 font-bold mt-2">£{{ $product->harga }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>