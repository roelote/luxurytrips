<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PeruLuxuryTrips
 */

get_header();
?>

<section class="relative w-full bg-cover bg-center h-[60vh] xl:h-[70vh]" 
         style="background-image: url('https://www.kuodatravel.com/wp-content/uploads/2024/10/Travel-to-South-America-with-Kuoda.webp');">
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
    <div class="container mx-auto flex items-center justify-center h-full relative z-10">
        <h1 class="text-4xl font-bold text-white">Plan Your Luxury Trip</h1>
    </div>
</section>

<section class="py-16 bg-gradient-to-br from-gray-50 via-white to-gray-100">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4 relative inline-block">
                Create Your Perfect Journey
                <span class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-16 h-0.5 bg-yellow-600"></span>
            </h2>
            <p class="text-gray-600 text-lg">Tell us about your dream destination and we'll craft an unforgettable luxury experience</p>
        </div>

        <div class="bg-gradient-to-br from-white via-gray-50 to-white rounded-2xl p-8 shadow-2xl border border-gray-200">
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" placeholder="Enter your full name" 
                               class="w-full px-4 py-3 rounded-lg bg-yellow-50/50 border border-yellow-600/30 text-gray-800 placeholder-gray-500 focus:bg-yellow-50 focus:border-yellow-600 focus:ring-2 focus:ring-yellow-600/20 focus:outline-none transition-all duration-300">
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" placeholder="your.email@example.com" 
                               class="w-full px-4 py-3 rounded-lg bg-yellow-50/50 border border-yellow-600/30 text-gray-800 placeholder-gray-500 focus:bg-yellow-50 focus:border-yellow-600 focus:ring-2 focus:ring-yellow-600/20 focus:outline-none transition-all duration-300">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" placeholder="+1 (555) 123-4567" 
                               class="w-full px-4 py-3 rounded-lg bg-yellow-50/50 border border-yellow-600/30 text-gray-800 placeholder-gray-500 focus:bg-yellow-50 focus:border-yellow-600 focus:ring-2 focus:ring-yellow-600/20 focus:outline-none transition-all duration-300">
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Preferred Destination</label>
                        <select class="w-full px-4 py-3 rounded-lg bg-yellow-50/50 border border-yellow-600/30 text-gray-800 focus:bg-yellow-50 focus:border-yellow-600 focus:ring-2 focus:ring-yellow-600/20 focus:outline-none transition-all duration-300">
                            <option value="">Select destination</option>
                            <option value="peru">Peru</option>
                            <option value="bolivia">Bolivia</option>
                            <option value="ecuador">Ecuador</option>
                            <option value="chile">Chile</option>
                            <option value="argentina">Argentina</option>
                            <option value="colombia">Colombia</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Departure Date</label>
                        <input type="date" class="w-full px-4 py-3 rounded-lg bg-yellow-50/50 border border-yellow-600/30 text-gray-800 focus:bg-yellow-50 focus:border-yellow-600 focus:ring-2 focus:ring-yellow-600/20 focus:outline-none transition-all duration-300">
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Return Date</label>
                        <input type="date" class="w-full px-4 py-3 rounded-lg bg-yellow-50/50 border border-yellow-600/30 text-gray-800 focus:bg-yellow-50 focus:border-yellow-600 focus:ring-2 focus:ring-yellow-600/20 focus:outline-none transition-all duration-300">
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Number of Travelers</label>
                        <select class="w-full px-4 py-3 rounded-lg bg-yellow-50/50 border border-yellow-600/30 text-gray-800 focus:bg-yellow-50 focus:border-yellow-600 focus:ring-2 focus:ring-yellow-600/20 focus:outline-none transition-all duration-300">
                            <option value="">Select</option>
                            <option value="1">1 Person</option>
                            <option value="2">2 People</option>
                            <option value="3-4">3-4 People</option>
                            <option value="5-8">5-8 People</option>
                            <option value="9+">9+ People</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Budget Range (USD)</label>
                        <select class="w-full px-4 py-3 rounded-lg bg-yellow-50/50 border border-yellow-600/30 text-gray-800 focus:bg-yellow-50 focus:border-yellow-600 focus:ring-2 focus:ring-yellow-600/20 focus:outline-none transition-all duration-300">
                            <option value="">Select budget</option>
                            <option value="2000-5000">$2,000 - $5,000</option>
                            <option value="5000-10000">$5,000 - $10,000</option>
                            <option value="10000-20000">$10,000 - $20,000</option>
                            <option value="20000+">$20,000+</option>
                        </select>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Travel Style</label>
                        <select class="w-full px-4 py-3 rounded-lg bg-yellow-50/50 border border-yellow-600/30 text-gray-800 focus:bg-yellow-50 focus:border-yellow-600 focus:ring-2 focus:ring-yellow-600/20 focus:outline-none transition-all duration-300">
                            <option value="">Select style</option>
                            <option value="luxury">Luxury & Comfort</option>
                            <option value="adventure">Adventure & Active</option>
                            <option value="cultural">Cultural & Historical</option>
                            <option value="relaxation">Relaxation & Wellness</option>
                            <option value="family">Family Friendly</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Special Interests & Requirements</label>
                    <textarea placeholder="Tell us about your interests, dietary requirements, accessibility needs, or any special requests..."
                              rows="4" class="w-full px-4 py-3 rounded-lg bg-yellow-50/50 border border-yellow-600/30 text-gray-800 placeholder-gray-500 focus:bg-yellow-50 focus:border-yellow-600 focus:ring-2 focus:ring-yellow-600/20 focus:outline-none transition-all duration-300 resize-none"></textarea>
                </div>

                <div class="text-center pt-4">
                    <button type="submit" 
                            class="bg-[#D4B66A] hover:bg-[#c4a65a] text-white px-8 py-4 rounded-full text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                        Start Planning My Journey
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
get_footer();
?>
