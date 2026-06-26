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
      while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', 'home');



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
        Exclusive <span class="font-bold">Peru Journeys</span>
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
                      class="h-full w-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
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
      $signature_query = new WP_Query(array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => -1, // Trae todos los posts
        'orderby'        => 'menu_order date',
        'order'          => 'ASC',
      ));
      ?>

      <?php if ($signature_query->have_posts()) : ?>
        <!-- Contenedor Grid Premium -->
        <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 max-w-7xl mx-auto px-4">

          <?php while ($signature_query->have_posts()) : $signature_query->the_post(); ?>
            <?php
            $sig_thumbnail  = get_the_post_thumbnail_url(get_the_ID(), 'large');
            $sig_categories = get_the_category();
            ?>

            <!-- Tarjeta con relación de aspecto vertical (elegante para fotografía de viajes) -->
            <a href="<?php the_permalink(); ?>" class="group relative block overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-shadow duration-300 cursor-pointer" style="min-height: 420px;">

              <!-- Imagen de fondo con Zoom suave al hacer Hover -->
              <?php if ($sig_thumbnail) : ?>
                <img
                  src="<?php echo esc_url($sig_thumbnail); ?>"
                  alt="<?php echo esc_attr(get_the_title()); ?>"
                  class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-110" />
              <?php else : ?>
                <!-- Fallback elegante por si el post no tiene imagen destacada -->
                <div class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-600 transition-transform duration-700 group-hover:scale-110"></div>
              <?php endif; ?>

              <!-- Degradado cinematográfico inferior para garantizar legibilidad del texto -->
              <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-500"></div>

              <!-- Categorías dinámicas estilo Glassmorphism en la esquina superior -->
              <?php if (!empty($sig_categories)) : ?>
                <div class="absolute top-5 left-5 right-5 flex flex-wrap gap-2">
                  <?php
                  $count = 0;
                  foreach ($sig_categories as $category) :
                    if ($count >= 2) break; // Límite de 2 etiquetas para mantener limpio el diseño
                  ?>
                    <span class="px-3 py-1 bg-white/15 backdrop-blur-md border border-white/20 text-white text-[10px] sm:text-xs font-semibold uppercase tracking-widest rounded-full shadow-sm">
                      <?php echo esc_html($category->name); ?>
                    </span>
                  <?php
                    $count++;
                  endforeach;
                  ?>
                </div>
              <?php endif; ?>

              <!-- Contenido y Textos (Efecto de desplazamiento hacia arriba en hover) -->
              <div class="absolute inset-0 flex flex-col justify-end p-6">
                <div class="transform translate-y-0transition-transform duration-500 ease-out">

                  <h2 class="text-2xl font-bold text-white leading-tight mb-1 text-shadow text-start">
                    <?php echo esc_html(get_the_title()); ?>
                  </h2>

                  <!-- Call to Action sutil (Aparece con fade-in al hacer hover) -->
                  <div class="flex items-center text-sm font-medium text-amber-400 opacity-100 transition-all duration-500 delay-75 mt-3">
                    <span class="uppercase tracking-widest text-xs font-semibold">View Experience</span>
                    <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                  </div>

                </div>
              </div>
            </a>

          <?php endwhile;
          wp_reset_postdata(); ?>

        </div>

      <?php else : ?>
        <!-- Estado vacío en caso de que no haya posts creados -->
        <div class="mt-12 flex flex-col items-center justify-center py-16 px-4 bg-gray-50 rounded-2xl border border-dashed border-gray-300 max-w-4xl mx-auto">
          <svg class="w-12 h-12 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
          </svg>
          <h3 class="text-lg font-medium text-gray-900 mb-1">No Journeys Found</h3>
          <p class="text-gray-500 text-center">We are currently curating new exclusive itineraries. Please check back later.</p>
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
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left max-w-7xl mx-auto px-4 py-12">

      <!-- Columna 1 -->
      <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col items-center md:items-start">
        <!-- Icono -->
        <div class="w-12 h-12 mb-6 rounded-full bg-amber-50 flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-colors duration-300">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
          </svg>
        </div>

        <h3 class="text-xl font-bold uppercase text-gray-900 tracking-wide mb-2 group-hover:text-amber-700 transition-colors">
          Tailored Experiences
        </h3>
        <p class="text-sm font-medium text-amber-600 mb-5 uppercase tracking-widest text-start">
          Crafted by seasoned specialists
        </p>

        <p class="text-gray-600 leading-relaxed text-sm md:text-base">
          Our expert travel planners design bespoke, five-star itineraries shaped around your interests and personal travel style. With an exclusive network of trusted partners, we provide VIP access to exceptional activities and handpicked accommodations. Discover Perú’s hidden gems with a travel agency committed to excellence. As locals of the region, we share our firsthand insight into every destination, enhancing your itinerary and creating a remarkable journey crafted especially for you.
        </p>
      </div>

      <!-- Columna 2 -->
      <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col items-center md:items-start">
        <!-- Icono -->
        <div class="w-12 h-12 mb-6 rounded-full bg-amber-50 flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-colors duration-300">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
          </svg>
        </div>

        <h3 class="text-xl font-bold uppercase text-gray-900 tracking-wide mb-2 group-hover:text-amber-700 transition-colors">
          Meaningful Connections
        </h3>
        <p class="text-sm font-medium text-amber-600 mb-5 uppercase tracking-widest text-start">
          To elevate your adventure
        </p>

        <p class="text-gray-600 leading-relaxed text-sm md:text-base">
          With us, travelers delve into genuine, culturally rich experiences that are both transformative and unforgettable. From private tours led by knowledgeable local guides to hands-on cooking classes featuring seasonal produce, and encounters with ancestral traditions—such as learning traditional weaving techniques within an indigenous community—we offer opportunities for deep cultural immersion that resonate long after your journey ends.
        </p>
      </div>

      <!-- Columna 3 -->
      <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col items-center md:items-start">
        <!-- Icono -->
        <div class="w-12 h-12 mb-6 rounded-full bg-amber-50 flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-colors duration-300">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>

        <h3 class="text-xl font-bold uppercase text-gray-900 tracking-wide mb-2 group-hover:text-amber-700 transition-colors">
          Travel With Purpose
        </h3>
        <p class="text-sm font-medium text-amber-600 mb-5 uppercase tracking-widest text-start">
          And create a meaningful impact
        </p>

        <p class="text-gray-600 leading-relaxed text-sm md:text-base">
          We are committed to shaping travel that supports and uplifts Perú destinations for generations to come. By embracing social and environmental responsibility, we take intentional steps to reduce our footprint, support local economies, and safeguard cultural heritage. Our mission is to promote conscious and purposeful travel—encouraging every traveler to become an active force for positive change through mindful actions and genuine respect for the places they visit.
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
      <?php echo do_shortcode('[contact-form-7 id="598273d" title="Book Your Dream Trip - HOME"]'); ?>
    </div>
  </div>
</section>




<?php

get_footer();
