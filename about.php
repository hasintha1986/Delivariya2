<?php 
$page_title = "About Us";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="pt-32 pb-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Hero Story -->
        <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">Our Story</h1>
            <p class="text-xl text-gray-600 leading-relaxed">
                Deliveryya started with a simple mission: to make delivery seamless, fast, and reliable for everyone. From a small local courier to a city-wide logistics partner, we've grown by putting our customers first.
            </p>
        </div>

        <!-- Mission & Vision -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20">
            <div class="bg-white p-10 rounded-2xl shadow-lg border-l-4 border-primary" data-aos="fade-right">
                <i class="fas fa-rocket text-4xl text-primary mb-6"></i>
                <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
                <p class="text-gray-600">To bridge the gap between businesses and customers through innovative, efficient, and eco-friendly delivery solutions that save time and enhance lives.</p>
            </div>
            <div class="bg-white p-10 rounded-2xl shadow-lg border-l-4 border-secondary" data-aos="fade-left">
                <i class="fas fa-eye text-4xl text-secondary mb-6"></i>
                <h3 class="text-2xl font-bold mb-4">Our Vision</h3>
                <p class="text-gray-600">To become the most trusted delivery network in the region, known for our speed, security, and exceptional customer service.</p>
            </div>
        </div>

        <!-- Team (Optional) -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-12">Meet the Team</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Member 1 -->
                <div class="group relative overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="CEO" class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                        <h4 class="text-white text-xl font-bold">James Carter</h4>
                        <p class="text-primary-300">Founder & CEO</p>
                    </div>
                </div>
                <!-- Member 2 -->
                <div class="group relative overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Operations" class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                        <h4 class="text-white text-xl font-bold">Sarah Jenkins</h4>
                        <p class="text-primary-300">Head of Operations</p>
                    </div>
                </div>
                 <!-- Member 3 -->
                 <div class="group relative overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Technology" class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                        <h4 class="text-white text-xl font-bold">David Chen</h4>
                        <p class="text-primary-300">Lead Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
