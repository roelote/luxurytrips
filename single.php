<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PeruLuxuryTrips
 */

get_header();
?>

<section class="relative w-full bg-cover bg-center h-[60vh] xl:h-[700px]" 
         style="background-image: url('<?php echo get_field('foto_banner') ?: 'https://www.kuodatravel.com/wp-content/uploads/2024/10/Travel-to-South-America-with-Kuoda.webp'; ?>');">

    <!-- Capa con degradado -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

    <!-- Contenido -->
    <div class="container mx-auto flex items-center justify-center h-full relative z-10">
        <div>
          <h1 class="text-4xl font-bold text-white uppercase"><?php the_title();  ?></h1>
        <span class="block text-center text-white mt-4 font-semibold"><?php the_field('places') ?></span>
       
        </div>
    </div>

</section>

<section class="py-10 px-3 xl:px-0 ">
	<div class="max-w-6xl mx-auto">
		<main id="primary" class="site-main maintour">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-tour', get_post_type() );

		endwhile; // End of the loop.
		?>

	<div class="w-full max-w-6xl bg-gradient-to-br from-white via-gray-50 to-white border border-gray-200 shadow rounded-2xl p-8 relative overflow-hidden">
        
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

	</main><!-- #main -->

	</div>

</section>

<section class="px-3 xl:px-0">
  <div class="max-w-6xl mx-auto py-16">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl uppercase font-light text-gray-800 font-montserrat">
        You Might Also <span class="font-bold">Be Interested In</span>
      </h2>
      <p class="mt-4 text-gray-600">
        Explore these carefully curated Peru experiences that complement your journey.
        Each tour is designed to showcase different facets of Peru's rich culture,
        stunning landscapes, and ancient heritage.
      </p>
    </div>

    <div
      class="container mx-auto mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3"
    >
      <!-- Card 1 -->
      <div
        class="group relative overflow-hidden rounded-lg bg-white shadow-lg h-[30rem]"
      >
        <img
          src="https://www.auriperu.com/wp-content/uploads/2020/11/titicaca-lake.webp"
          alt="Machu Picchu & The Lake Titicaca"
          class="h-full w-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110"
        />
        <div
          class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"
        ></div>
        <div
          class="absolute top-0 left-0 m-4 px-2 py-1 text-sm text-white rounded bg-[#B19A5C]"
        >
          TAILORMADE JOURNEYS
        </div>
        <div class="absolute bottom-0 p-6 text-white">
          <span class="text-xs font-semibold tracking-widest uppercase"
            >8-DAY TRIP</span
          >
          <h2 class="mt-1 text-2xl font-bold">
            Machu Picchu & The Lake Titicaca
          </h2>
          <p class="mt-2 text-sm text-white">
            Follow the footsteps of the Incas from the mythical Machu Picchu to
            the sacred waters of the Lake Titicaca.
          </p>
          <button
            class="mt-4 rounded-full border border-white px-4 py-2 text-xs tracking-wider text-white uppercase transition-colors duration-300 hover:bg-white hover:text-black"
          >
            Discover Trip
          </button>
        </div>
      </div>

      <!-- Card 2 -->
      <div
        class="group relative overflow-hidden rounded-lg bg-white shadow-lg h-[30rem]"
      >
        <img
          src="https://www.auriperu.com/wp-content/uploads/2020/10/mapi.webp"
          alt="Machu Picchu Luxury Tour"
          class="h-full w-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110"
        />
        <div
          class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"
        ></div>
        <div
          class="absolute top-0 left-0 m-4 px-2 py-1 text-sm text-white rounded bg-[#B19A5C]"
        >
          TAILORMADE JOURNEYS
        </div>
        <div class="absolute bottom-0 p-6 text-white">
          <span class="text-xs font-semibold tracking-widest uppercase"
            >8-DAY TRIP</span
          >
          <h2 class="mt-1 text-2xl font-bold">Machu Picchu Luxury Tour</h2>
          <p class="mt-2 text-sm text-white">
            Indulge your senses and ignite your spirit of Discovery on this
            captivating 8-day luxury tour to the magnificent citadel of Machu
            Picchu, Peru.
          </p>
          <button
            class="mt-4 rounded-full border border-white px-4 py-2 text-xs tracking-wider text-white uppercase transition-colors duration-300 hover:bg-white hover:text-black"
          >
            Discover Trip
          </button>
        </div>
      </div>

      <!-- Card 3 -->
      <div
        class="group relative overflow-hidden rounded-lg bg-white shadow-lg h-[30rem]"
      >
        <img
          src="https://www.auriperu.com/wp-content/uploads/2020/10/amazon.webp"
          alt="Machu Picchu & The Amazon"
          class="h-full w-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110"
        />
        <div
          class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"
        ></div>
        <div
          class="absolute top-0 left-0 m-4 px-2 py-1 text-sm text-white rounded bg-[#B19A5C]"
        >
          TAILORMADE JOURNEYS
        </div>
        <div class="absolute bottom-0 p-6 text-white">
          <span class="text-xs font-semibold tracking-widest uppercase"
            >10-DAY TRIP</span
          >
          <h2 class="mt-1 text-2xl font-bold">Machu Picchu & The Amazon</h2>
          <p class="mt-2 text-sm text-white">
            Uncover Peru's treasures on this epic 10-day voyage from the ancient
            Machu Picchu Citadel to the biodiversity of the Amazon rainforest.
          </p>
          <button
            class="mt-4 rounded-full border border-white px-4 py-2 text-xs tracking-wider text-white uppercase transition-colors duration-300 hover:bg-white hover:text-black"
          >
            Discover Trip
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Blog Section -->
<section class="py-20 px-3 xl:px-0 bg-gray-50">
  <div class="max-w-6xl mx-auto">
    <!-- Header -->
    <div class="text-center mb-16">
      <h2 class="text-3xl uppercase font-light text-gray-800 font-montserrat pb-4">
        Latest <span class="font-bold">Travel Insights</span>
      </h2>
      <div class="w-16 h-0.5 mx-auto" style="background-color: #b39c5e;"></div>
    </div>

    <!-- Blog Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Blog Card 1 -->
      <article class="bg-white rounded-lg shadow-sm overflow-hidden group hover:shadow-lg transition-shadow duration-300">
        <div class="aspect-video bg-gray-200 overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?w=600&h=400&fit=crop" 
            alt="Machu Picchu Travel Tips"
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
          />
        </div>
        <div class="p-6">
          <div class="flex items-center mb-3">
            <span class="text-xs font-medium uppercase tracking-wide px-2 py-1 rounded text-white" style="background-color: #1c3827;">
              Travel Guide
            </span>
          </div>
          <h3 class="text-lg font-semibold text-black mb-3 line-clamp-2">
            Essential Tips for Your First Visit to Machu Picchu
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
            Discover the best time to visit, what to pack, and insider secrets to make your Machu Picchu experience unforgettable.
          </p>
          <div class="flex items-center justify-between">
            <span class="text-xs text-gray-500">December 15, 2024</span>
            <a href="#" class="text-sm font-medium hover:underline transition-colors duration-200" style="color: #b39c5e;">
              Read More →
            </a>
          </div>
        </div>
      </article>

      <!-- Blog Card 2 -->
      <article class="bg-white rounded-lg shadow-sm overflow-hidden group hover:shadow-lg transition-shadow duration-300">
        <div class="aspect-video bg-gray-200 overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?w=600&h=400&fit=crop" 
            alt="Peru Cuisine"
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
          />
        </div>
        <div class="p-6">
          <div class="flex items-center mb-3">
            <span class="text-xs font-medium uppercase tracking-wide px-2 py-1 rounded text-white" style="background-color: #b39c5e;">
              Cuisine
            </span>
          </div>
          <h3 class="text-lg font-semibold text-black mb-3 line-clamp-2">
            A Culinary Journey Through Peru's Flavors
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
            From ceviche to quinoa, explore the diverse and delicious world of Peruvian cuisine that will tantalize your taste buds.
          </p>
          <div class="flex items-center justify-between">
            <span class="text-xs text-gray-500">December 12, 2024</span>
            <a href="#" class="text-sm font-medium hover:underline transition-colors duration-200" style="color: #b39c5e;">
              Read More →
            </a>
          </div>
        </div>
      </article>

      <!-- Blog Card 3 -->
      <article class="bg-white rounded-lg shadow-sm overflow-hidden group hover:shadow-lg transition-shadow duration-300">
        <div class="aspect-video bg-gray-200 overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?w=600&h=400&fit=crop" 
            alt="Amazon Rainforest"
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
          />
        </div>
        <div class="p-6">
          <div class="flex items-center mb-3">
            <span class="text-xs font-medium uppercase tracking-wide px-2 py-1 rounded text-white bg-black">
              Adventure
            </span>
          </div>
          <h3 class="text-lg font-semibold text-black mb-3 line-clamp-2">
            Exploring the Amazon: Wildlife and Wonder
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
            Immerse yourself in the world's most biodiverse ecosystem and discover the incredible wildlife of the Amazon rainforest.
          </p>
          <div class="flex items-center justify-between">
            <span class="text-xs text-gray-500">December 10, 2024</span>
            <a href="#" class="text-sm font-medium hover:underline transition-colors duration-200" style="color: #b39c5e;">
              Read More →
            </a>
          </div>
        </div>
      </article>

    </div>

    <!-- View All Button -->
    <div class="text-center mt-12">
      <a href="#" class="inline-block px-8 py-3 bg-black text-white text-sm font-medium uppercase tracking-wide rounded-full transition-all duration-300" style="hover:background-color: #1c3827;">
        View All Articles
      </a>
    </div>

  </div>
</section>

<?php

get_footer();

