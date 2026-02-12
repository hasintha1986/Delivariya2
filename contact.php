<?php 
$page_title = "Contact Us";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="pt-32 pb-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-16" data-aos="fade-up">Get in Touch</h1>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            
            <!-- Contact Info -->
            <div data-aos="fade-right">
                <div class="bg-white rounded-2xl shadow-lg p-10 h-full flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-bold mb-8">Contact Information</h3>
                        
                        <div class="space-y-8">
                            <div class="flex items-start">
                                <span class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary text-xl mr-6 flex-shrink-0">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <div>
                                    <h4 class="font-bold text-lg mb-1">Our Office</h4>
                                    <p class="text-gray-500">123 Delivery Street, Tech City, USA</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <span class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center text-secondary text-xl mr-6 flex-shrink-0">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                                <div>
                                    <h4 class="font-bold text-lg mb-1">Phone</h4>
                                    <p class="text-gray-500">+1 234 567 890</p>
                                    <p class="text-sm text-gray-400 mt-1">Mon-Fri from 8am to 5pm</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <span class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center text-accent text-xl mr-6 flex-shrink-0">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <div>
                                    <h4 class="font-bold text-lg mb-1">Email</h4>
                                    <p class="text-gray-500">info@deliveryya.com</p>
                                    <p class="text-sm text-gray-400 mt-1">We reply within 24 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-12 pt-12 border-t border-gray-100">
                        <h4 class="font-bold mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center hover:bg-gray-800 transition-colors"><i class="fab fa-tiktok"></i></a>
                            <a href="#" class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700 transition-colors"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="w-10 h-10 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700 transition-colors"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div data-aos="fade-left">
                <div class="bg-white rounded-2xl shadow-lg p-10">
                    <h3 class="text-2xl font-bold mb-6">Send us a Message</h3>
                    
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-group">
                                <label class="block text-sm font-bold text-gray-700 mb-2">Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                                <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="your@email.com">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Subject</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="How can we help?">
                        </div>
                        
                        <div class="form-group">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Message</label>
                            <textarea rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="Write your message here..."></textarea>
                        </div>
                        
                        <button type="button" onclick="alert('Message feature coming soon! Please contact us via WhatsApp for now.')" class="w-full bg-primary hover:bg-primary-600 text-white font-bold py-4 rounded-lg shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Map Placeholder -->
        <div class="mt-20 rounded-2xl overflow-hidden shadow-lg h-96 relative bg-gray-200" data-aos="fade-up">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1841262327575!2d-73.98565668459415!3d40.74844097932847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1629731454558!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
