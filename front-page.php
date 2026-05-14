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
<section class="relative w-full bg-cover bg-center h-[60vh] xl:h-screen" 
         style="background-image: url('https://peruluxurytrips.com/wp-content/uploads/2026/01/machupicchuluxurytrips.jpeg');">

    <!-- Capa con degradado -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

    <!-- Contenido -->
    <div class="container mx-auto flex items-center justify-center h-full relative z-10">
        <h1 class="text-4xl font-bold text-white">Welcome to Peru Luxury Trips</h1>
    </div>

</section>


<section>
	<div class="container">

	
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home' );

			

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

	</div>
</section>


<!-- Signature Itineraries Section -->
<section class="px-3 xl:px-0">
  <div class="bg-gray-100 py-16">
    <div class="container mx-auto px-4 text-center">
      <h1 class="text-4xl font-light text-gray-800">
        Exclusive  <span class="font-bold">Peru Journeys</span>
      </h1>
      <p class="mt-4 text-gray-600 text-center">
       <b>Uncover Peru’s best-kept secrets beyond Machu Picchu.</b><br>
Journey with us through the Andes and the Amazon on an exclusive adventure. Discover timeless ruins, indulge
in refined experiences each day, and enjoy the elegance of travel thoughtfully designed just for you.
      </p>
    </div>

    <?php
    // Obtener los posts seleccionados desde ACF
    $section1_posts = get_field('section_1');
    ?>
    
    <?php if ($section1_posts) : ?>
    <div class="container mx-auto mt-12 relative">
      <!-- Swiper Container -->
      <div class="swiper itinerariesSwiper">
        <div class="swiper-wrapper">
        
        <?php foreach ($section1_posts as $post_id) : 
          // Obtener datos del post
          $post = get_post($post_id);
          $thumbnail = get_the_post_thumbnail_url($post_id, 'large');
          $categories = get_the_category($post_id);
          $category_name = !empty($categories) ? $categories[0]->name : 'TAILORMADE JOURNEYS';
          $excerpt = wp_trim_words(get_the_excerpt($post_id), 30, '...');
          $permalink = get_permalink($post_id);
          $title = get_the_title($post_id);
        ?>
        
        <!-- Card -->
        <div class="swiper-slide">
          <div class="group relative overflow-hidden rounded-lg bg-white shadow-lg h-[40rem]">
            <?php if ($thumbnail) : ?>
            <img
              src="<?php echo esc_url($thumbnail); ?>"
              alt="<?php echo esc_attr($title); ?>"
              class="h-full w-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110"
            />
            <?php else : ?>
            <div class="h-full w-full bg-gradient-to-br from-gray-800 to-gray-600"></div>
            <?php endif; ?>
            
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>
            
            <div class="absolute top-0 left-0 m-4 px-2 py-1 text-sm text-white rounded bg-[#B19A5C]">
              <?php echo esc_html($category_name); ?>
            </div>
            
            <div class="absolute bottom-0 p-6 text-white">
              <h2 class="mt-1 text-2xl font-bold">
                <?php echo esc_html($title); ?>
              </h2>
              <p class="mt-2 text-sm text-white">
                <?php echo esc_html($excerpt); ?>
              </p>
              <a href="<?php echo esc_url($permalink); ?>" 
                 class="mt-4 inline-block rounded-full border border-white px-4 py-2 text-xs tracking-wider text-white uppercase transition-colors duration-300 hover:bg-white hover:text-black">
                Discover Trip
              </a>
            </div>
          </div>
        </div>
        
        <?php endforeach; ?>

        </div>
        
        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <?php else : ?>
    <!-- Fallback si no hay posts seleccionados -->
    <div class="container mx-auto mt-12 text-center py-16">
      <p class="text-gray-500 text-lg">No itineraries selected. Please configure ACF field "Section 1" in the page settings.</p>
    </div>
    <?php endif; ?>
  </div>
</section>

<style>
  /* Pagination styles */
  .itinerariesSwiper .swiper-pagination {
    position: relative !important;
    margin-top: 2rem;
    bottom: 0 !important;
  }
  
  .itinerariesSwiper .swiper-pagination-bullet {
    background: #B19A5C;
    opacity: 0.3;
    width: 10px;
    height: 10px;
    transition: all 0.3s ease;
  }
  
  .itinerariesSwiper .swiper-pagination-bullet-active {
    opacity: 1;
    width: 30px;
    border-radius: 5px;
  }
  
  /* Navigation buttons styles */
  .itinerariesSwiper .swiper-button-next,
  .itinerariesSwiper .swiper-button-prev {
    width: 50px;
    height: 50px;
    background: white;
    border-radius: 50%;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
  }
  
  .itinerariesSwiper .swiper-button-next:after,
  .itinerariesSwiper .swiper-button-prev:after {
    font-size: 20px;
    font-weight: bold;
    color: #B19A5C;
  }
  
  .itinerariesSwiper .swiper-button-next:hover,
  .itinerariesSwiper .swiper-button-prev:hover {
    background: #B19A5C;
    transform: scale(1.1);
  }
  
  .itinerariesSwiper .swiper-button-next:hover:after,
  .itinerariesSwiper .swiper-button-prev:hover:after {
    color: white;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const itinerariesSwiper = new Swiper('.itinerariesSwiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
    });
  });
</script>



<section>
  <div class="bg-white py-16">
    <div class="container mx-auto px-6 text-center">
      <!-- Header section with enhanced design -->
      <div class="relative mb-16">
        <!-- Decorative background element -->
        <div class="absolute inset-0 flex items-center justify-center opacity-5">
          <div class="w-64 h-64 bg-luxury-gold rounded-full blur-3xl"></div>
        </div>
        
        <!-- Icon and badge -->
        <div class="relative z-10 mb-6">
          <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-luxury-gold via-yellow-400 to-luxury-gold rounded-full shadow-lg mb-4">
            <img src="https://peruluxurytrips.com/wp-content/uploads/2025/10/Recurso-12.png" alt="Icon" class="w-10 h-10">
          </div>
          <div class="inline-block px-4 py-2 bg-luxury-gold/10 border border-luxury-gold/20 rounded-full">
            <span class="text-luxury-gold text-xs font-bold uppercase tracking-widest">
              Curated Experiences
            </span>
          </div>
        </div>
        
        <!-- Main title -->
        <h1 class="font-playfair text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 mb-4 leading-tight">
          Signature <span class="text-luxury-gold">Itineraries</span>
        </h1>
        
        <!-- Subtitle -->
        <p class="text-luxury-gold text-sm md:text-base font-semibold uppercase tracking-widest mb-6 font-inter text-center">
          Planned by Experienced Travel Advisors
        </p>
        
        <!-- Decorative line -->
        <div class="flex items-center justify-center mb-8">
          <div class="w-16 h-px bg-gradient-to-r from-transparent via-luxury-gold to-transparent"></div>
          <div class="mx-4 w-2 h-2 bg-luxury-gold rounded-full"></div>
          <div class="w-16 h-px bg-gradient-to-r from-luxury-gold via-transparent to-transparent"></div>
        </div>
        
        <!-- Description -->
        <div class="max-w-4xl mx-auto">
          <p class="text-gray-700 text-lg md:text-xl leading-relaxed font-light">
            At <b>Peru Luxury Travel</b>, our journeys are thoughtfully designed by experienced travel specialists who know Peru
in depth. We go beyond traditional sightseeing to create refined travel experiences that seamlessly blend
<b>adventure, culture, and the richness of the Amazon rainforest,</b> all delivered with exceptional comfort.
          </p>
          
          <!-- Call to action text -->
          <p class="mt-6 text-gray-600 text-base italic">
            ✨ Each itinerary can be fully customized to your preferences
          </p>
        </div>
      </div>

      <?php
      $signature_query = new WP_Query( array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order date',
        'order'          => 'ASC',
      ) );
      ?>

      <?php if ( $signature_query->have_posts() ) : ?>
      <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

        <?php while ( $signature_query->have_posts() ) : $signature_query->the_post(); ?>
        <?php
          $sig_thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'large' );
          $sig_categories = get_the_category();
          $sig_country = ! empty( $sig_categories ) ? strtoupper( $sig_categories[0]->name ) : 'PERU';
        ?>
        <a href="<?php the_permalink(); ?>" class="relative overflow-hidden rounded-lg shadow-lg block group" style="min-height:240px;">
          <?php if ( $sig_thumbnail ) : ?>
          <img
            src="<?php echo esc_url( $sig_thumbnail ); ?>"
            alt="<?php echo esc_attr( get_the_title() ); ?>"
            class="h-full w-full object-cover absolute inset-0 transition-transform duration-700 group-hover:scale-105"
          />
          <?php else : ?>
          <div class="absolute inset-0 bg-gradient-to-br from-gray-700 to-gray-500"></div>
          <?php endif; ?>
          <div class="absolute inset-0 bg-black opacity-30"></div>
          <div class="absolute inset-0 flex flex-col items-start justify-end p-6 text-white">
            <h2 class="text-xl font-bold"><?php echo esc_html( strtoupper( get_the_title() ) ); ?></h2>
            <span class="mt-1 text-sm uppercase tracking-wider"><?php echo esc_html( $sig_country ); ?></span>
          </div>
        </a>
        <?php endwhile; wp_reset_postdata(); ?>

      </div>
      <?php else : ?>
      <div class="mt-12 text-center py-10">
        <p class="text-gray-500">No published posts found.</p>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="bg-white py-16">
  <div class="container mx-auto px-4">
    <!-- Título principal -->
    <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12">
      WHERE TRAVEL BECOMES EXCEPTIONAL
    </h2>

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left">

      <!-- Columna 1 -->
      <div>
        <h3 class="text-lg font-bold uppercase text-gray-800">
         TAILORED EXPERIENCES
        </h3>
        <p class="italic text-gray-500 mb-4">crafted by seasoned travel specialists</p>
        <p class="text-gray-700 leading-relaxed">
          Our expert travel planners design bespoke, five-
star itineraries shaped around your interests and
personal travel style. With an exclusive network
of trusted partners, we provide VIP access to
exceptional activities and handpicked
accommodations. Discover Perú’s hidden gems
with a travel agency committed to excellence.
As locals of the region, we share our firsthand
insight into every destination, enhancing your
itinerary and creating a remarkable journey
crafted especially for you</span>.
        </p>
      </div>

      <!-- Columna 2 -->
      <div>
        <h3 class="text-lg font-bold uppercase text-gray-800">
          MEANINGFUL CONNECTIONS
        </h3>
        <p class="italic text-gray-500 mb-4">to elevate your adventure</p>
        <p class="text-gray-700 leading-relaxed">
          With us, travelers delve into genuine, culturally
rich experiences that are both transformative
and unforgettable. From private tours led by
knowledgeable local guides to hands-on
cooking classes featuring seasonal produce, and
encounters with ancestral traditions—such as
learning traditional weaving techniques within
an indigenous community—we offer
opportunities for deep cultural immersion that
resonate long after your journey ends.
        </p>
      </div>

      <!-- Columna 3 -->
      <div>
        <h3 class="text-lg font-bold uppercase text-gray-800">
          TRAVEL WITH PURPOSE
        </h3>
        <p class="italic text-gray-500 mb-4">and create a meaningful impact</p>
        <p class="text-gray-700 leading-relaxed">
          We are committed to shaping travel that
supports and uplifts Perú destinations for
generations to come. By embracing social and
environmental responsibility, we take
intentional steps to reduce our footprint, support
local economies, and safeguard cultural
heritage. Our mission is to promote conscious
and purposeful travel—encouraging every
traveler to become an active force for positive
change through mindful actions and genuine
respect for the places they visit.
        </p>
      </div>

    </div>
  </div>
</section>

<section class="mb-10">
  <div class="container">
  <div class="w-full  bg-gradient-to-br from-white via-gray-50 to-white border border-gray-200 shadow rounded-2xl p-8 relative overflow-hidden">
        
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-gold/20 to-transparent rounded-full blur-2xl"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-black/10 to-transparent rounded-full blur-xl"></div>
        
        <!-- Header llamativo -->
        <div class="text-center mb-8 relative z-10">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-gold to-yellow-400 rounded-full mb-4 shadow-lg">
               <img src="https://peruluxurytrips.com/wp-content/uploads/2025/10/Recurso-12.png" alt="Icon" class="w-10 h-10">
            </div>
            <h2 class="text-3xl font-bold bg-gradient-to-r from-gray-800 via-black to-gray-700 bg-clip-text text-transparent font-montserrat tracking-wide uppercase mb-2">
                Book Your Dream Trip
            </h2>
            <p class="text-gray-600 text-sm">Start your luxury adventure in Peru</p>
            <div class="w-24 h-1 bg-gradient-to-r from-gold via-yellow-400 to-gold mx-auto mt-4 rounded-full shadow-sm"></div>
        </div>

        <!-- Form -->
        <form class="space-y-6 relative z-10">
            <!-- First row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4">
                
                <!-- Full Name -->
                <div class="space-y-2 group">
                    <label class="flex items-center text-gray-700 text-sm font-semibold uppercase tracking-wide">
                        <svg class="w-4 h-4 mr-2 text-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                        </svg>
                        Full Name
                    </label>
                    <input type="text" 
                           placeholder="Your full name"
                           class="w-full px-4 py-3 bg-white border-2 border-gray-200 text-gray-800 text-sm placeholder-gray-400 rounded-lg focus:border-gold focus:ring-2 focus:ring-gold/20 focus:outline-none transition-all duration-300 group-hover:border-gray-300 shadow-sm">
                </div>

                <!-- Email -->
                <div class="space-y-2 group">
                    <label class="flex items-center text-gray-700 text-sm font-semibold uppercase tracking-wide">
                        <svg class="w-4 h-4 mr-2 text-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        Email
                    </label>
                    <input type="email" 
                           placeholder="email@example.com"
                           class="w-full px-4 py-3 bg-white border-2 border-gray-200 text-gray-800 text-sm placeholder-gray-400 rounded-lg focus:border-gold focus:ring-2 focus:ring-gold/20 focus:outline-none transition-all duration-300 group-hover:border-gray-300 shadow-sm">
                </div>

                <!-- WhatsApp -->
                <div class="space-y-2 group">
                    <label class="flex items-center text-gray-700 text-sm font-semibold uppercase tracking-wide">
                        <svg class="w-4 h-4 mr-2 text-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        WhatsApp
                    </label>
                    <input type="tel" 
                           placeholder="+51 999 999 999"
                           class="w-full px-4 py-3 bg-white border-2 border-gray-200 text-gray-800 text-sm placeholder-gray-400 rounded-lg focus:border-gold focus:ring-2 focus:ring-gold/20 focus:outline-none transition-all duration-300 group-hover:border-gray-300 shadow-sm">
                </div>

                <!-- Departure Date -->
                <div class="space-y-2 group">
                    <label class="flex items-center text-gray-700 text-sm font-semibold uppercase tracking-wide">
                        <svg class="w-4 h-4 mr-2 text-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/>
                        </svg>
                        Departure
                    </label>
                    <input type="date" 
                           class="w-full px-4 py-3 bg-white border-2 border-gray-200 text-gray-800 text-sm rounded-lg focus:border-gold focus:ring-2 focus:ring-gold/20 focus:outline-none transition-all duration-300 group-hover:border-gray-300 shadow-sm">
                </div>

                <!-- Return Date -->
                <div class="space-y-2 group">
                    <label class="flex items-center text-gray-700 text-sm font-semibold uppercase tracking-wide">
                        <svg class="w-4 h-4 mr-2 text-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/>
                        </svg>
                        Return
                    </label>
                    <input type="date" 
                           class="w-full px-4 py-3 bg-white border-2 border-gray-200 text-gray-800 text-sm rounded-lg focus:border-gold focus:ring-2 focus:ring-gold/20 focus:outline-none transition-all duration-300 group-hover:border-gray-300 shadow-sm">
                </div>
            </div>

            <!-- Second row - Message -->
            <div class="space-y-2 group">
                <label class="flex items-center text-gray-700 text-sm font-semibold uppercase tracking-wide">
                    <svg class="w-4 h-4 mr-2 text-gold" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"/>
                    </svg>
                    Message
                </label>
                <textarea 
                    placeholder="Tell us about your dream trip, special requests, dietary requirements..."
                    rows="3"
                    class="w-full px-4 py-3 bg-white border-2 border-gray-200 text-gray-800 text-sm placeholder-gray-400 rounded-lg focus:border-gold focus:ring-2 focus:ring-gold/20 focus:outline-none transition-all duration-300 group-hover:border-gray-300 resize-none shadow-sm"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center pt-4">
                <button type="submit" 
                        class="group relative px-12 py-4 bg-black text-white text-sm font-bold uppercase tracking-widest rounded-full hover:bg-gold hover:text-white  hover:shadow-xl shadow-lg overflow-hidden">
                    <span class="relative z-10 flex items-center">
                        <svg class="w-5 h-5 mr-2 duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                        </svg>
                        Send Inquiry
                    </span>
                </button>
            </div>

            
        </form>
    </div>
    </div>
</section>




<?php

get_footer();
