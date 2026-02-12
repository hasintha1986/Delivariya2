<?php 
$page_title = "Home";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero min-h-screen flex items-center relative overflow-hidden">
    <!-- Three.js Canvas -->
    <canvas id="three-canvas" class="absolute inset-0 w-full h-full"></canvas>
    
    <!-- Hero Content -->
    <div class="container mx-auto px-4 z-10 relative pt-20">
        <div class="max-w-3xl" data-aos="fade-up" data-aos-duration="1000">
            <span class="inline-block py-1 px-3 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-white text-sm font-medium mb-6 animate-pulse">
                🚀 #1 Delivery Service in Town
            </span>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white leading-tight">
                Fast & Reliable <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-300">Delivery Solutions</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-gray-200 leading-relaxed max-w-2xl">
                From local products to express shipping, we handle it all with care and speed. Order via WhatsApp instantly!
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="booking.php" class="btn btn-primary shadow-lg shadow-purple-500/30 transform hover:-translate-y-1 transition-all text-lg px-8 py-4">
                    Book Delivery
                </a>
                <a href="products.php" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 rounded-xl text-white font-semibold hover:bg-white/10 hover:border-white transition-all backdrop-blur-sm text-lg">
                    View Products
                </a>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-3 gap-8 mt-16 pt-8 border-t border-white/10">
                <div>
                    <h4 class="text-3xl font-bold text-white">5k+</h4>
                    <p class="text-gray-300 text-sm">Happy Customers</p>
                </div>
                <div>
                    <h4 class="text-3xl font-bold text-white">10k+</h4>
                    <p class="text-gray-300 text-sm">Deliveries Done</p>
                </div>
                <div>
                    <h4 class="text-3xl font-bold text-white">24/7</h4>
                    <p class="text-gray-300 text-sm">Support</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-gray-50 to-transparent z-10"></div>
</section>

<!-- Featured Products -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary inline-block">Featured Products</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Discover our curated selection of high-quality items available for instant delivery.</p>
        </div>
        
        <div id="products-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Placeholder for products - replaced by JS -->
            <div class="col-span-full text-center py-12">
                <div class="inline-block animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-primary mb-4"></div>
                <p class="text-gray-500">Loading top products...</p>
            </div>
        </div>
        
        <div class="text-center mt-16">
            <a href="products.php" class="btn btn-secondary px-8 py-3 text-lg hover:bg-primary hover:text-white transition-colors">
                View All Products <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Bubbles -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full filter blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-secondary/5 rounded-full filter blur-3xl translate-y-1/2 -translate-x-1/2"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Why Choose Deliveryya?</h2>
            <p class="text-gray-600 text-lg">We bring excellence to every delivery.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="feature-card p-8 rounded-2xl bg-white border border-gray-100 hover:border-primary/30 group" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-primary-100 to-primary-50 text-primary flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 group-hover:text-primary transition-colors">Super Fast Delivery</h3>
                <p class="text-gray-600 leading-relaxed">Lightning-fast delivery to your doorstep. We prioritize speed without compromising safety.</p>
            </div>
            
            <div class="feature-card p-8 rounded-2xl bg-white border border-gray-100 hover:border-secondary/30 group" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-secondary-100 to-secondary-50 text-secondary flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 group-hover:text-secondary transition-colors">Secure & Safe</h3>
                <p class="text-gray-600 leading-relaxed">Your packages are handled with extreme care. Real-time tracking keeps you updated.</p>
            </div>
            
            <div class="feature-card p-8 rounded-2xl bg-white border border-gray-100 hover:border-accent/30 group" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-accent-100 to-accent-50 text-accent flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 group-hover:text-accent transition-colors">24/7 Support</h3>
                <p class="text-gray-600 leading-relaxed">Our dedicated support team is always ready to assist you with any queries or concerns.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-gradient-to-r from-primary to-secondary text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-pattern opacity-10"></div>
    
    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-4xl md:text-6xl font-bold mb-8" data-aos="zoom-in">Ready to Deliver?</h2>
        <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto text-blue-100 font-light" data-aos="fade-up" data-aos-delay="100">
            Join thousands of satisfied customers who trust Deliveryya for their daily needs.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6" data-aos="fade-up" data-aos-delay="200">
            <a href="booking.php" class="btn bg-white text-primary hover:bg-gray-100 shadow-xl text-lg px-10 py-4 font-bold transform hover:-translate-y-1 transition-all">
                Book a Delivery
            </a>
            <a href="products.php" class="btn border-2 border-white/50 text-white hover:bg-white hover:text-primary backdrop-blur-sm text-lg px-10 py-4 font-bold transform hover:-translate-y-1 transition-all">
                Shop Now
            </a>
        </div>
    </div>
</section>

<!-- Script to load sample products if API fails (frontend demo mode) -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const productsGrid = document.getElementById('products-grid');
    
    // Check if we have products loaded via PHP/API in a real scenario
    // For this demo, we'll inject some sample HTML if it's empty or has the loader
    
    setTimeout(() => {
        // Simulating API load
        productsGrid.innerHTML = `
            <div class="product-card group" data-aos="fade-up">
                <div class="product-image relative overflow-hidden">
                    <span class="absolute top-4 left-4 bg-accent text-white text-xs font-bold px-3 py-1 rounded-full z-10">New</span>
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Smart Watch" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <button onclick="orderViaWhatsApp('Smart Watch Series 7', '299.99')" class="bg-whatsapp text-white px-6 py-2 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 flex items-center bg-green-500 hover:bg-green-600">
                            <i class="fab fa-whatsapp mr-2"></i> Buy Now
                        </button>
                    </div>
                </div>
                <div class="product-info p-6">
                    <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Smart Watch Series 7</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">Advanced health monitoring, fitness tracking, and seamless connectivity.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-primary">$299.99</span>
                        <div class="flex text-yellow-400 text-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card group" data-aos="fade-up" data-aos-delay="100">
                <div class="product-image relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Wireless Earbuds" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                     <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <button onclick="orderViaWhatsApp('Pro Wireless Earbuds', '149.99')" class="bg-whatsapp text-white px-6 py-2 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 flex items-center bg-green-500 hover:bg-green-600">
                            <i class="fab fa-whatsapp mr-2"></i> Buy Now
                        </button>
                    </div>
                </div>
                <div class="product-info p-6">
                    <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Pro Wireless Earbuds</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">Noise cancelling, high fidelity sound, and 24h battery life.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-primary">$149.99</span>
                        <div class="flex text-yellow-400 text-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card group" data-aos="fade-up" data-aos-delay="200">
                 <div class="product-image relative overflow-hidden">
                    <span class="absolute top-4 left-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">-20%</span>
                    <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Organic Coffee" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                     <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <button onclick="orderViaWhatsApp('Premium Organic Coffee', '24.99')" class="bg-whatsapp text-white px-6 py-2 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 flex items-center bg-green-500 hover:bg-green-600">
                            <i class="fab fa-whatsapp mr-2"></i> Buy Now
                        </button>
                    </div>
                </div>
                <div class="product-info p-6">
                    <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Premium Organic Coffee</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">Ethically sourced, medium roast beans from Colombia.</p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-2xl font-bold text-primary">$24.99</span>
                            <span class="text-sm text-gray-400 line-through ml-2">$30.00</span>
                        </div>
                        <div class="flex text-yellow-400 text-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="product-card group" data-aos="fade-up" data-aos-delay="300">
                 <div class="product-image relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Headphones" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                     <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <button onclick="orderViaWhatsApp('Studio Headphones', '199.99')" class="bg-whatsapp text-white px-6 py-2 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 flex items-center bg-green-500 hover:bg-green-600">
                            <i class="fab fa-whatsapp mr-2"></i> Buy Now
                        </button>
                    </div>
                </div>
                <div class="product-info p-6">
                    <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Studio Headphones</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">Premium sound quality for professionals and audiophiles.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-primary">$199.99</span>
                        <div class="flex text-yellow-400 text-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }, 500);
});
</script>

<?php include 'includes/footer.php'; ?>
