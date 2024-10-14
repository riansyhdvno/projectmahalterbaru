<div class="container mx-auto">
        <div class="grid grid-cols-4 gap-6" id="productGrid">
            <!-- Cards will be generated dynamically -->
        </div>
    </div>

    <!-- This section simulates dynamic item creation -->
    <script>
        // Simulating dynamic card creation from database data
        const productData = [
            { id: 1, name: 'Apple Watch Series 7', price: '£60.00', image: 'https://via.placeholder.com/400x300', description: 'Sample description for Apple Watch.', tag: 'New' },
            { id: 2, name: 'iPhone 13 Pro Max', price: '£889.00', image: 'https://via.placeholder.com/400x300', description: 'Sample description for iPhone.', tag: 'Hot' },
            { id: 3, name: 'Macbook Pro 13" M1', price: '£1459.00', image: 'https://via.placeholder.com/400x300', description: 'Sample description for Macbook.', tag: '' },
            { id: 4, name: 'Samsung Galaxy S21 Ultra', price: '£999.00', image: 'https://via.placeholder.com/400x300', description: 'Sample description for Galaxy S21.', tag: 'Sale' },
        ];

        const productGrid = document.getElementById('productGrid');

        productData.forEach((product) => {
            const productCard = document.createElement('a');
            productCard.href = `product-detail.html?id=${product.id}`;  // Linking to the product detail page with product ID in query
            productCard.className = 'block bg-white rounded-lg shadow-md p-4';

            productCard.innerHTML = `
                <img src="${product.image}" alt="${product.name}" class="w-full h-40 object-cover mb-4">
                ${product.tag ? `<span class="bg-green-200 text-green-800 text-xs font-semibold px-2 py-1 rounded-full mb-2 inline-block">${product.tag}</span>` : ''}
                <h2 class="text-gray-900 font-semibold text-lg">${product.name}</h2>
                <p class="text-sm text-gray-500">${product.description}</p>
                <p class="text-gray-800 font-bold mt-2">${product.price}</p>
            `;

            productGrid.appendChild(productCard);
        });
    </script>