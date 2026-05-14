<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PeruLuxuryTrips
 */

?>

<section class="bg-gradient-to-br from-gray-50 via-white to-gray-100 py-16 mb-0 relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-10 left-10 w-32 h-32 bg-luxury-gold rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-24 h-24 bg-blue-500 rounded-full blur-2xl"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-luxury-gold/10 rounded-full mb-4">
                <i class="fas fa-award text-luxury-gold text-2xl"></i>
            </div>
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Trusted Partners & <span class="text-luxury-gold">Certifications</span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                We collaborate with world-class organizations to ensure exceptional travel experiences and maintain the highest standards of service
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-6 md:gap-8">
            <div class="group relative bg-black p-8 rounded-2xl transition-all duration-700 flex items-center justify-center min-h-[120px] border border-gray-800 hover:border-luxury-gold/50 hover:-translate-y-3 overflow-hidden">
                <!-- Gradient overlay for hover effect -->
                <div class="absolute inset-0 bg-gradient-to-br from-luxury-gold/0 via-luxury-gold/0 to-luxury-gold/0 group-hover:from-luxury-gold/10 group-hover:via-luxury-gold/5 group-hover:to-transparent transition-all duration-700"></div>
                
                <!-- Glow effect -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    <div class="absolute inset-0 bg-luxury-gold/20 blur-xl rounded-2xl"></div>
                </div>
                
                <img src="https://peruencantostravel.com/wp-content/themes/peruencantostravel/img/footer/gercetur.webp" 
                     alt="Gercetur - Tourism Certification" 
                     class="max-w-full max-h-16 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-700 relative z-10 group-hover:scale-110 group-hover:brightness-110">
                
                <!-- Hover label -->
                <div class="absolute bottom-3 left-3 right-3 text-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-2 group-hover:translate-y-0">
                    <span class="text-xs font-bold text-white bg-black/80 backdrop-blur-sm px-3 py-1 rounded-full border border-luxury-gold/30">
                        Tourism Authority
                    </span>
                </div>
                
                <!-- Corner decoration -->
                <div class="absolute top-2 right-2 w-2 h-2 bg-luxury-gold rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
            
            <div class="group relative bg-black p-8 rounded-2xl transition-all duration-700 flex items-center justify-center min-h-[120px] border border-gray-800 hover:border-luxury-gold/50 hover:-translate-y-3 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-luxury-gold/0 via-luxury-gold/0 to-luxury-gold/0 group-hover:from-luxury-gold/10 group-hover:via-luxury-gold/5 group-hover:to-transparent transition-all duration-700"></div>
                
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    <div class="absolute inset-0 bg-luxury-gold/20 blur-xl rounded-2xl"></div>
                </div>
                
                <img src="https://peruencantostravel.com/wp-content/themes/peruencantostravel/img/footer/latam.webp" 
                     alt="LATAM Airlines - Official Partner" 
                     class="max-w-full max-h-16 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-700 relative z-10 group-hover:scale-110 group-hover:brightness-110">
                
                <div class="absolute bottom-3 left-3 right-3 text-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-2 group-hover:translate-y-0">
                    <span class="text-xs font-bold text-white bg-black/80 backdrop-blur-sm px-3 py-1 rounded-full border border-luxury-gold/30">
                        Travel Partner
                    </span>
                </div>
                
                <div class="absolute top-2 right-2 w-2 h-2 bg-luxury-gold rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
            
            <div class="group relative bg-black p-8 rounded-2xl transition-all duration-700 flex items-center justify-center min-h-[120px] border border-gray-800 hover:border-luxury-gold/50 hover:-translate-y-3 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-luxury-gold/0 via-luxury-gold/0 to-luxury-gold/0 group-hover:from-luxury-gold/10 group-hover:via-luxury-gold/5 group-hover:to-transparent transition-all duration-700"></div>
                
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    <div class="absolute inset-0 bg-luxury-gold/20 blur-xl rounded-2xl"></div>
                </div>
                
                <img src="https://peruencantostravel.com/wp-content/themes/peruencantostravel/img/footer/paypal.png" 
                     alt="PayPal - Secure Payments" 
                     class="max-w-full max-h-16 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-700 relative z-10 group-hover:scale-110 group-hover:brightness-110">
                
                <div class="absolute bottom-3 left-3 right-3 text-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-2 group-hover:translate-y-0">
                    <span class="text-xs font-bold text-white bg-black/80 backdrop-blur-sm px-3 py-1 rounded-full border border-luxury-gold/30">
                        Secure Payments
                    </span>
                </div>
                
                <div class="absolute top-2 right-2 w-2 h-2 bg-luxury-gold rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
            
            <div class="group relative bg-black p-8 rounded-2xl transition-all duration-700 flex items-center justify-center min-h-[120px] border border-gray-800 hover:border-luxury-gold/50 hover:-translate-y-3 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-luxury-gold/0 via-luxury-gold/0 to-luxury-gold/0 group-hover:from-luxury-gold/10 group-hover:via-luxury-gold/5 group-hover:to-transparent transition-all duration-700"></div>
                
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    <div class="absolute inset-0 bg-luxury-gold/20 blur-xl rounded-2xl"></div>
                </div>
                
                <img src="https://peruencantostravel.com/wp-content/themes/peruencantostravel/img/footer/prom-peru.webp" 
                     alt="PromPerú - Official Endorsement" 
                     class="max-w-full max-h-16 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-700 relative z-10 group-hover:scale-110 group-hover:brightness-110">
                
                <div class="absolute bottom-3 left-3 right-3 text-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-2 group-hover:translate-y-0">
                    <span class="text-xs font-bold text-white bg-black/80 backdrop-blur-sm px-3 py-1 rounded-full border border-luxury-gold/30">
                        Official Tourism
                    </span>
                </div>
                
                <div class="absolute top-2 right-2 w-2 h-2 bg-luxury-gold rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
            
            <div class="group relative bg-black p-8 rounded-2xl transition-all duration-700 flex items-center justify-center min-h-[120px] border border-gray-800 hover:border-luxury-gold/50 hover:-translate-y-3 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-luxury-gold/0 via-luxury-gold/0 to-luxury-gold/0 group-hover:from-luxury-gold/10 group-hover:via-luxury-gold/5 group-hover:to-transparent transition-all duration-700"></div>
                
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    <div class="absolute inset-0 bg-luxury-gold/20 blur-xl rounded-2xl"></div>
                </div>
                
                <img src="https://peruencantostravel.com/wp-content/themes/peruencantostravel/img/footer/tripadvisor.webp" 
                     alt="TripAdvisor - Excellence Award" 
                     class="max-w-full max-h-16 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-700 relative z-10 group-hover:scale-110 group-hover:brightness-110">
                
                <div class="absolute bottom-3 left-3 right-3 text-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-2 group-hover:translate-y-0">
                    <span class="text-xs font-bold text-white bg-black/80 backdrop-blur-sm px-3 py-1 rounded-full border border-luxury-gold/30">
                        Excellence Award
                    </span>
                </div>
                
                <div class="absolute top-2 right-2 w-2 h-2 bg-luxury-gold rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
            
            <div class="group relative bg-black p-8 rounded-2xl transition-all duration-700 flex items-center justify-center min-h-[120px] border border-gray-800 hover:border-luxury-gold/50 hover:-translate-y-3 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-luxury-gold/0 via-luxury-gold/0 to-luxury-gold/0 group-hover:from-luxury-gold/10 group-hover:via-luxury-gold/5 group-hover:to-transparent transition-all duration-700"></div>
                
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    <div class="absolute inset-0 bg-luxury-gold/20 blur-xl rounded-2xl"></div>
                </div>
                
                <img src="https://peruencantostravel.com/wp-content/themes/peruencantostravel/img/footer/wester.png" 
                     alt="Western Union - Financial Partner" 
                     class="max-w-full max-h-16 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-700 relative z-10 group-hover:scale-110 group-hover:brightness-110">
                
                <div class="absolute bottom-3 left-3 right-3 text-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-2 group-hover:translate-y-0">
                    <span class="text-xs font-bold text-white bg-black/80 backdrop-blur-sm px-3 py-1 rounded-full border border-luxury-gold/30">
                        Financial Services
                    </span>
                </div>
                
                <div class="absolute top-2 right-2 w-2 h-2 bg-luxury-gold rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
        </div>
    
    </div>
</section>

<footer class="bg-luxury-gradient text-gray-100 font-inter">
        
        <!-- Sección principal del footer -->
        <div class="container mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Logo y descripción principal -->
                <div class="lg:col-span-5">
                    <div class="mb-6">
                       <img src="https://peruluxurytrips.com/wp-content/themes/peruluxurytrips/img/logo.svg" class="w-64" alt="">
                    </div>
                    <p class="text-gray-300 text-base leading-relaxed mb-6 max-w-md">
                        Creating remarkable journeys across Peru since 2015.<br>
                            We combine ancient civilizations, modern
                            comfort, and authentic cultural encounters
                            to deliver tailor-made travel experiences
                            designed for discerning travelers.
                    </p>
                    
                    <!-- Certificaciones y premios -->
                    
                </div>
                
                <!-- Navegación y servicios -->
                <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <!-- Destinos principales -->
                    <div>
                        <h3 class="font-playfair text-xl font-semibold text-luxury-gold mb-6">
                            Destinations
                        </h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="#" class="text-gray-300 hover:text-luxury-gold transition-colors duration-300 flex items-center group">
                                    <i class="fas fa-mountain text-xs mr-2 text-gray-500 group-hover:text-luxury-gold transition-colors"></i>
                                   Cusco
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-luxury-gold transition-colors duration-300 flex items-center group">
                                    <i class="fas fa-water text-xs mr-2 text-gray-500 group-hover:text-luxury-gold transition-colors"></i>
                                   Lima
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-luxury-gold transition-colors duration-300 flex items-center group">
                                    <i class="fas fa-tree text-xs mr-2 text-gray-500 group-hover:text-luxury-gold transition-colors"></i>
                                    Arequipa
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-luxury-gold transition-colors duration-300 flex items-center group">
                                    <i class="fas fa-ship text-xs mr-2 text-gray-500 group-hover:text-luxury-gold transition-colors"></i>
                                    Puno
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-luxury-gold transition-colors duration-300 flex items-center group">
                                    <i class="fas fa-map text-xs mr-2 text-gray-500 group-hover:text-luxury-gold transition-colors"></i>
                                    Puerto Maldonado
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-luxury-gold transition-colors duration-300 flex items-center group">
                                    <i class="fas fa-map text-xs mr-2 text-gray-500 group-hover:text-luxury-gold transition-colors"></i>
                                   Iquitos
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Servicios -->
                    <div>
                        <h3 class="font-playfair text-xl font-semibold text-luxury-gold mb-6">
                           Peru Luxury Trips
                        </h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="#" class="text-gray-300 hover:text-luxury-gold transition-colors duration-300 flex items-center group">
                                    <i class="fas fa-concierge-bell text-xs mr-2 text-gray-500 group-hover:text-luxury-gold transition-colors"></i>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-luxury-gold transition-colors duration-300 flex items-center group">
                                    <i class="fas fa-users text-xs mr-2 text-gray-500 group-hover:text-luxury-gold transition-colors"></i>
                                    Cancellations and Refund Policies
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-luxury-gold transition-colors duration-300 flex items-center group">
                                    <i class="fas fa-heart text-xs mr-2 text-gray-500 group-hover:text-luxury-gold transition-colors"></i>
                                    Privacy Policies
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-luxury-gold transition-colors duration-300 flex items-center group">
                                    <i class="fas fa-calendar-alt text-xs mr-2 text-gray-500 group-hover:text-luxury-gold transition-colors"></i>
                                    Esnna Code
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-luxury-gold transition-colors duration-300 flex items-center group">
                                    <i class="fas fa-headset text-xs mr-2 text-gray-500 group-hover:text-luxury-gold transition-colors"></i>
                                    Blogs
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Contacto -->
                    <div>
                        <h3 class="font-playfair text-xl font-semibold text-luxury-gold mb-6">
                            Get In Touch
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <i class="fas fa-map-marker-alt text-luxury-gold mt-1 text-sm"></i>
                                <div>
                                    <p class="text-gray-300 text-sm font-medium">Head Office</p>
                                    <p class="text-gray-400 text-sm">Santiago, Cusco, Perú</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <i class="fas fa-phone text-luxury-gold mt-1 text-sm"></i>
                                <div>
                                    <p class="text-gray-300 text-sm font-medium">Contacts:</p>
                                    <a href="tel:+51987654321" class="text-gray-400 text-sm hover:text-luxury-gold transition-colors">
                                        +51916556776
                                    </a>
                                    <a href="tel:+51987654321" class="text-gray-400 text-sm hover:text-luxury-gold transition-colors">
                                        +61493835435
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <i class="fas fa-envelope text-luxury-gold mt-1 text-sm"></i>
                                <div>
                                    <p class="text-gray-300 text-sm font-medium">Email Us</p>
                                    <a href="mailto:sales@peruluxurytrips.com" class="text-gray-400 text-sm hover:text-luxury-gold transition-colors">
                                        sales@peruluxurytrips.com
                                    </a>
                                    <a href="mailto:info@peruluxurytrips.com" class="text-gray-400 text-sm hover:text-luxury-gold transition-colors">
                                        info@peruluxurytrips.com
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Línea divisoria -->
        <div class="footer-divider"></div>
        
        <!-- Sección inferior -->
        <div class="container mx-auto px-6 py-8">
            <div class="flex flex-col lg:flex-row justify-between items-center space-y-6 lg:space-y-0">
                
                <!-- Derechos de autor -->
                <div class="text-center lg:text-left">
                    <p class="text-gray-400 text-sm">
                        © 2026 <span class="text-luxury-gold font-semibold">Peru Luxury Trips</span>. 
                        All Rights Reserved.
                    </p>
                    <div class="flex items-center justify-center lg:justify-start space-x-4 mt-2">
                        <a href="#" class="text-gray-500 hover:text-luxury-gold text-xs transition-colors">
                            Privacy Policy
                        </a>
                        <span class="text-gray-600">•</span>
                        <a href="#" class="text-gray-500 hover:text-luxury-gold text-xs transition-colors">
                            Terms of Service
                        </a>
                        <span class="text-gray-600">•</span>
                        <a href="#" class="text-gray-500 hover:text-luxury-gold text-xs transition-colors">
                            Cookie Policy
                        </a>
                    </div>
                </div>
                
                <!-- Redes sociales -->
                <div>
                    <p class="text-gray-400 text-sm text-center mb-4">Follow Our Journey</p>
                    <div class="flex justify-center space-x-3">
                        <a href="https://peruluxurytrips.com/" title="Facebook - Síguenos para fotos y actualizaciones diarias" class="group relative w-12 h-12 flex items-center justify-center rounded-full border-2 border-gray-600 hover:border-blue-500 text-gray-400 hover:text-white hover:bg-blue-500 transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="https://peruluxurytrips.com/" title="Instagram - Descubre destinos increíbles" class="group relative w-12 h-12 flex items-center justify-center rounded-full border-2 border-gray-600 hover:border-pink-500 text-gray-400 hover:text-white hover:bg-gradient-to-br hover:from-purple-500 hover:via-pink-500 hover:to-orange-400 transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="https://peruluxurytrips.com/" title="TikTok - Videos de aventuras" class="group relative w-12 h-12 flex items-center justify-center rounded-full border-2 border-gray-600 hover:border-black text-gray-400 hover:text-white hover:bg-black transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-tiktok text-lg"></i>
                        </a>
                        <a href="https://peruluxurytrips.com/" title="YouTube - Tours virtuales y testimonios" class="group relative w-12 h-12 flex items-center justify-center rounded-full border-2 border-gray-600 hover:border-red-500 text-gray-400 hover:text-white hover:bg-red-500 transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-youtube text-lg"></i>
                        </a>
                        <a href="https://peruluxurytrips.com/" title="WhatsApp - Contacto directo 24/7" class="group relative w-12 h-12 flex items-center justify-center rounded-full border-2 border-gray-600 hover:border-green-500 text-gray-400 hover:text-white hover:bg-green-500 transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                       
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/51916556776" 
       target="_blank" 
       rel="noopener noreferrer"
       class="whatsapp-float group"
       title="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
        <span class="whatsapp-tooltip">Need help? Chat with us!</span>
    </a>

    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
            z-index: 9999;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.15) translateY(-3px);
            box-shadow: 0 8px 30px rgba(37, 211, 102, 0.6);
            background: linear-gradient(135deg, #128C7E 0%, #25D366 100%);
        }

        .whatsapp-float::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: rgba(37, 211, 102, 0.3);
            animation: pulse-ring 1.5s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        .whatsapp-tooltip {
            position: absolute;
            right: 75px;
            background: white;
            color: #333;
            padding: 10px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            white-space: nowrap;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            opacity: 0;
            visibility: hidden;
            transform: translateX(10px);
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
        }

        .whatsapp-tooltip::after {
            content: '';
            position: absolute;
            right: -8px;
            top: 50%;
            transform: translateY(-50%);
            border-left: 8px solid white;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
        }

        .whatsapp-float:hover .whatsapp-tooltip {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
        }

        @keyframes pulse-ring {
            0% {
                transform: scale(1);
                opacity: 0.8;
            }
            50% {
                transform: scale(1.3);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 0;
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .whatsapp-float {
                bottom: 20px;
                right: 20px;
                width: 55px;
                height: 55px;
                font-size: 28px;
            }

            .whatsapp-tooltip {
                display: none;
            }
        }
    </style>

<?php wp_footer(); ?>

</body>
</html>