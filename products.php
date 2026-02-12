<?php 
$page_title = "Our Products";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Header -->
<div class="bg-gray-900 text-white pt-32 pb-16 relative overflow-hidden">
    <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80 to-transparent"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Our Premium Products</h1>
        <p class="text-gray-400 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Browse through our extensive catalog of high-quality items. Order directly via WhatsApp for instant processing.</p>
    </div>
</div>

<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">
        
        <!-- Filter Section -->
        <div class="flex flex-col md:flex-row justify-center items-center mb-12 gap-4" data-aos="fade-up">
            <div class="flex flex-wrap justify-center gap-3">
                <button class="filter-btn active px-6 py-2 rounded-full border-2 border-primary bg-primary text-white font-medium transition-all hover:shadow-lg transform hover:-translate-y-1" data-category="all">All Items</button>
                <button class="filter-btn px-6 py-2 rounded-full border-2 border-gray-200 bg-white text-gray-600 font-medium transition-all hover:border-primary hover:text-primary hover:shadow-lg transform hover:-translate-y-1" data-category="electronics">Electronics</button>
                <button class="filter-btn px-6 py-2 rounded-full border-2 border-gray-200 bg-white text-gray-600 font-medium transition-all hover:border-primary hover:text-primary hover:shadow-lg transform hover:-translate-y-1" data-category="fashion">Fashion</button>
                <button class="filter-btn px-6 py-2 rounded-full border-2 border-gray-200 bg-white text-gray-600 font-medium transition-all hover:border-primary hover:text-primary hover:shadow-lg transform hover:-translate-y-1" data-category="home">Home & Living</button>
            </div>
            
            <div class="relative w-full md:w-64 max-w-xs">
                <input type="text" id="search-input" placeholder="Search products..." class="w-full px-4 py-2 pl-10 rounded-full border border-gray-300 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
        </div>
        
        <!-- Products Grid -->
        <div id="products-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Loading State -->
            <div class="col-span-full flex flex-col items-center justify-center py-20">
                <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-primary mb-4"></div>
                <p class="text-gray-500">Loading products...</p>
            </div>
        </div>
        
        <!-- Pagination (Static Demo) -->
        <div class="flex justify-center mt-12 gap-2">
            <button class="w-10 h-10 rounded-full bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 flex items-center justify-center transition-colors"><i class="fas fa-chevron-left"></i></button>
            <button class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center shadow-lg transform scale-110">1</button>
            <button class="w-10 h-10 rounded-full bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 flex items-center justify-center transition-colors">2</button>
            <button class="w-10 h-10 rounded-full bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 flex items-center justify-center transition-colors">3</button>
            <button class="w-10 h-10 rounded-full bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 flex items-center justify-center transition-colors"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
// Mock Data for Demo Purposes
const mockProducts = [
    {
        id: 1,
        name: "Smart Watch Series 7",
        price: 299.99,
        category: "electronics",
        image: "https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        description: "Advanced health monitoring, fitness tracking, and seamless connectivity."
    },
    {
        id: 2,
        name: "Premium Leather Jacket",
        price: 199.50,
        category: "fashion",
        image: "https://images.unsplash.com/photo-1551028919-ac76c9085918?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        description: "Genuine leather jacket with classic design and modern fit."
    },
    {
        id: 3,
        name: "Modern Coffee Table",
        price: 149.00,
        category: "home",
        image: "https://images.unsplash.com/photo-1532372320572-cda25653a26d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        description: "Minimalist oak wood coffee table perfect for modern living rooms."
    },
    {
        id: 4,
        name: "Pro Wireless Earbuds",
        price: 149.99,
        category: "electronics",
        image: "https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        description: "Noise cancelling, high fidelity sound, and 24h battery life."
    },
    {
        id: 5,
        name: "Designer Sunglasses",
        price: 89.99,
        category: "fashion",
        image: "https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        description: "UV protection sunglasses with stylish golden frame."
    },
    {
        id: 6,
        name: "Ceramic Vase Set",
        price: 45.00,
        category: "home",
        image: "https://images.unsplash.com/photo-1580983570414-b4a1b02138e6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        description: "Set of 3 minimalist ceramic vases for home decoration."
    },
    {
        id: 7,
        name: "Premium Organic Coffee",
        price: 24.99,
        category: "home",
        image: "https://images.unsplash.com/photo-1585386959984-a4155224a1ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        description: "Ethically sourced, medium roast beans from Colombia."
    },
    {
        id: 8,
        name: "Running Shoes",
        price: 129.99,
        category: "fashion",
        image: "https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        description: "Lightweight running shoes with advanced cushioning technology."
    }
];

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('products-container');
    const filterBtns = document.querySelectorAll('.filter-btn');
    const searchInput = document.getElementById('search-input');
    
    // Initial Render
    renderProducts(mockProducts);
    
    // Filter Logic
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active state
            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-primary', 'text-white', 'border-primary');
                b.classList.add('bg-white', 'text-gray-600', 'border-gray-200');
            });
            btn.classList.add('active', 'bg-primary', 'text-white', 'border-primary');
            btn.classList.remove('bg-white', 'text-gray-600', 'border-gray-200');
            
            const category = btn.dataset.category;
            const filtered = category === 'all' 
                ? mockProducts 
                : mockProducts.filter(p => p.category === category);
            
            renderProducts(filtered);
        });
    });
    
    // Search Logic
    searchInput.addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase();
        const filtered = mockProducts.filter(p => 
            p.name.toLowerCase().includes(query) || 
            p.description.toLowerCase().includes(query)
        );
        renderProducts(filtered);
    });
    
    function renderProducts(products) {
        container.innerHTML = '';
        
        if (products.length === 0) {
            container.innerHTML = `
                <div class="col-span-full text-center py-10">
                    <i class="fas fa-box-open text-gray-300 text-6xl mb-4"></i>
                    <p class="text-gray-500 text-lg">No products found matching your criteria.</p>
                </div>
            `;
            return;
        }
        
        products.forEach((product, index) => {
            const delay = index * 50; // Stagger animation
            const card = document.createElement('div');
            card.className = 'product-card group flex flex-col h-full bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100';
            card.setAttribute('data-aos', 'fade-up');
            card.setAttribute('data-aos-delay', delay);
            
            card.innerHTML = `
                <div class="product-image relative h-64 overflow-hidden rounded-t-xl bg-gray-100">
                    <img src="${product.image}" alt="${product.name}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                        <button onclick="orderViaWhatsApp('${product.name}', '${product.price}')" 
                                class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 flex items-center shadow-lg w-full justify-center mx-8">
                            <i class="fab fa-whatsapp mr-2 text-xl"></i> Order Now
                        </button>
                    </div>
                </div>
                <div class="product-info p-6 flex flex-col flex-grow">
                    <div class="flex-grow">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-gray-800 group-hover:text-primary transition-colors line-clamp-1">${product.name}</h3>
                            <span class="text-xs font-bold px-2 py-1 bg-gray-100 text-gray-500 rounded uppercase tracking-wide">${product.category}</span>
                        </div>
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2 leading-relaxed">${product.description}</p>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-50 mt-2">
                        <span class="text-2xl font-bold text-primary">$${product.price}</span>
                        <div class="flex text-yellow-400 text-xs space-x-0.5">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            `;
            container.appendChild(card);
        });
    }
});
</script>
