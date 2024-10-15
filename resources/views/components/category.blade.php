<div class="mb-7">
    <h1 class="text-3xl font-bold ml-4">Category</h1>
</div>

<div class="grid grid-cols-3 gap-4 mr-5 ml-5">


    <!-- Card 1 -->
    <a href="{{ route('product.headset') }}" class="relative block overflow-hidden rounded-lg shadow-lg">
        <img src="img/headset.png" alt="Headset" class="object-cover w-full h-40">
        <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-2 text-sm">
            Headset
        </div>
    </a>
    <!-- Card 2 -->
    <a href="{{ route('product.keyboard') }}" class="relative block overflow-hidden rounded-lg shadow-lg">
        <img src="img/keyboard.png" alt="Keyboard" class="object-cover w-full h-40">
        <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-2 text-sm">
            Keyboard
        </div>
    </a>
    <!-- Card 3 -->
    <a href="{{ route('product.mouse') }}" class="relative block overflow-hidden rounded-lg shadow-lg">
        <img src="img/mouse.png" alt="Mouse" class="object-cover w-full h-40">
        <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-2 text-sm">
            Mouse
        </div>
    </a>


    <!-- Card 4 -->
    <a href="#" class="relative block overflow-hidden rounded-lg shadow-lg">
        <img src="img/vga.png" alt="VGA" class="object-cover w-full h-40">
        <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-2 text-sm">
            VGA
        </div>
    </a>
    <!-- Card 5 -->
    <a href="#" class="relative block overflow-hidden rounded-lg shadow-lg">
        <img src="img/ram.png" alt="RAM" class="object-cover w-full h-40">
        <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-2 text-sm">
            RAM
        </div>
    </a>
    <!-- Card 6 -->
    <a href="#" class="relative block overflow-hidden rounded-lg shadow-lg">
        <img src="img/monitor.png" alt="Monitor" class="object-cover w-full h-40">
        <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-2 text-sm">
            Monitor
        </div>
    </a>
</div>










{{-- @props(['categories']) <!-- Pastikan ini ada untuk menerima $categories -->

<div class="max-w-7xl mx-auto p-6">
    <div class="mb-7">
        <h1 class="text-3xl font-bold ml-4">Category</h1>
    </div>

    <div class="grid grid-cols-3 gap-4">
        <!-- Loop untuk card dinamis -->
        @foreach ($categories as $category)
            <a href="/product/{{ $category->kategori }}" class="relative block overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset($category->gambar) }}" alt="{{ $category->kategori }}" class="object-cover w-full h-48">
                <div class="absolute bottom-0 left-0 text-white p-2 text-sm bg-black bg-opacity-50">
                    {{ $category->kategori }}
                </div>
            </a>
        @endforeach
    </div>
</div> --}}
