<?php 
$page_title = "Book Delivery";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="bg-gray-900 text-white py-20 bg-[url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center blend-overlay relative">
    <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-secondary/90"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Book a Delivery</h1>
        <p class="text-xl text-white/80 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Schedule your pickup and delivery in just a few clicks.</p>
    </div>
</div>

<section class="py-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row" data-aos="fade-up">
            
            <!-- Information Side -->
            <div class="md:w-1/3 bg-gray-900 text-white p-8 md:p-12 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full filter blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold mb-6">Delivery Info</h3>
                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <i class="fas fa-clock mt-1 mr-4 text-primary"></i>
                            <div>
                                <h4 class="font-bold">Working Hours</h4>
                                <p class="text-gray-400 text-sm">Mon - Sun: 8:00 AM - 10:00 PM</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-4 text-primary"></i>
                            <div>
                                <h4 class="font-bold">Service Area</h4>
                                <p class="text-gray-400 text-sm">Entire City & Suburbs</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone mt-1 mr-4 text-primary"></i>
                            <div>
                                <h4 class="font-bold">Support</h4>
                                <p class="text-gray-400 text-sm">+1 234 567 890</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="mt-12 relative z-10">
                    <p class="text-sm text-gray-400 mb-4">Need immediate assistance?</p>
                    <a href="#" onclick="contactViaWhatsApp(); return false;" class="inline-flex items-center text-green-400 hover:text-green-300 font-bold transition-colors">
                        <i class="fab fa-whatsapp mr-2 text-xl"></i> Chat Support
                    </a>
                </div>
            </div>
            
            <!-- Form Side -->
            <div class="md:w-2/3 p-8 md:p-12">
                <form id="booking-form" class="space-y-6">
                    <!-- Progress Steps (Visual) -->
                    <div class="flex items-center justify-between mb-8 text-sm font-medium text-gray-500">
                        <div class="flex items-center text-primary">
                            <span class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center mr-2">1</span>
                            Details
                        </div>
                        <div class="flex-grow h-px bg-gray-200 mx-4"></div>
                        <div class="flex items-center">
                            <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center mr-2">2</span>
                            Schedule
                        </div>
                        <div class="flex-grow h-px bg-gray-200 mx-4"></div>
                        <div class="flex items-center">
                            <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center mr-2">3</span>
                            Confirm
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="form-group col-span-2 md:col-span-1">
                            <label class="text-sm font-bold text-gray-700 mb-2 block">Full Name *</label>
                            <input type="text" name="customer_name" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="John Doe">
                        </div>
                        
                        <div class="form-group col-span-2 md:col-span-1">
                            <label class="text-sm font-bold text-gray-700 mb-2 block">Phone Number *</label>
                            <input type="tel" name="customer_phone" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="+1 (234) 567-890">
                        </div>

                        <div class="form-group col-span-2">
                            <label class="text-sm font-bold text-gray-700 mb-2 block">Email Address (Optional)</label>
                            <input type="email" name="customer_email" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="john@example.com">
                        </div>
                        
                        <div class="form-group col-span-2">
                            <label class="text-sm font-bold text-gray-700 mb-2 block">Pickup Address *</label>
                            <textarea name="pickup_address" rows="2" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="Street, City, Zip Code"></textarea>
                        </div>
                        
                        <div class="form-group col-span-2">
                            <label class="text-sm font-bold text-gray-700 mb-2 block">Delivery Address *</label>
                            <textarea name="delivery_address" rows="2" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="Street, City, Zip Code"></textarea>
                        </div>
                        
                        <div class="form-group col-span-2 md:col-span-1">
                            <label class="text-sm font-bold text-gray-700 mb-2 block">Date</label>
                            <input type="date" name="delivery_date" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                        </div>
                        
                        <div class="form-group col-span-2 md:col-span-1">
                            <label class="text-sm font-bold text-gray-700 mb-2 block">Time</label>
                            <input type="time" name="delivery_time" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                        </div>

                        <div class="form-group col-span-2">
                            <label class="text-sm font-bold text-gray-700 mb-2 block">Package Description</label>
                            <textarea name="package_description" rows="2" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="Size, weight, fragile items..."></textarea>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full bg-gradient-to-r from-primary to-secondary text-white font-bold py-4 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                        Schedule Delivery
                    </button>
                    <p class="text-center text-xs text-gray-400 mt-4">By booking, you agree to our Terms of Service.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Success Modal -->
<div id="success-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" id="modal-overlay"></div>
    <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-sm w-full mx-auto relative z-10 text-center transform scale-95 transition-transform duration-300" id="modal-content">
        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6 text-green-500 text-4xl">
            <i class="fas fa-check"></i>
        </div>
        <h3 class="text-2xl font-bold mb-2">Booking Confirmed!</h3>
        <p class="text-gray-500 mb-8">Your delivery request has been received. We will contact you shortly.</p>
        <button id="close-modal" class="w-full bg-gray-900 text-white font-bold py-3 rounded-xl hover:bg-black transition-colors">
            Close
        </button>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script>
document.getElementById('booking-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    // Simulate Loading
    const submitBtn = e.target.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerText;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Processing...';
    submitBtn.disabled = true;
    submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
    
    const formData = new FormData(e.target);
    
    // Simulate API call
    setTimeout(() => {
         // Show success modal
         const modal = document.getElementById('success-modal');
         const modalContent = document.getElementById('modal-content');
         
         modal.classList.remove('opacity-0', 'pointer-events-none');
         modalContent.classList.remove('scale-95');
         modalContent.classList.add('scale-100');
         
         // Reset form
         e.target.reset();
         submitBtn.innerText = originalText;
         submitBtn.disabled = false;
         submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
         
         // Confetti Effect (Optional simple CSS logic or JS library)
    }, 1500);

    /* 
    // Real API Implementation:
    try {
        const response = await fetch('api/submit-booking.php', {
            method: 'POST',
            body: formData
        });
        
        const result = await response.json();
        
        // Handle result...
    } catch (error) {
        console.error('Error:', error);
    } 
    */
});

// Modal close logic
document.getElementById('close-modal').addEventListener('click', () => {
    const modal = document.getElementById('success-modal');
    modal.classList.add('opacity-0', 'pointer-events-none');
});
document.getElementById('modal-overlay').addEventListener('click', () => {
    const modal = document.getElementById('success-modal');
    modal.classList.add('opacity-0', 'pointer-events-none');
});
</script>
