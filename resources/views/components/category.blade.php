<div class="max-w-7xl mx-auto p-6">
    <div class="mb-7">
        <h1 class="text-3xl font-bold ml-4">Category</h1>
    </div>

    <div class="grid grid-cols-3 gap-4">
        <!-- Loop untuk card dinamis -->
        @foreach ($categories as $category)
            <a href="/product/{{ $category->id }}" class="relative block overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset($category->gambar) }}" alt="{{ $category->kategori }}" class="object-cover w-full h-48">
                <div class="absolute bottom-0 left-0 text-white p-2 text-sm bg-black bg-opacity-50">
                    {{ $category->kategori }}
                </div>
            </a>
        @endforeach
    </div>
</div>
