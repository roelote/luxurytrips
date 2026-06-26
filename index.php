<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PeruLuxuryTrips
 */

get_header();
?>

	<main id="primary" class="site-main pt-20">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<!-- Hero Section para Blog -->
				<section class="py-20 border-b border-gray-100 relative min-h-[60vh] flex items-center" 
				         style="background: linear-gradient(135deg, rgba(30, 54, 39, 0.8) 0%, rgba(42, 77, 53, 0.7) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/images/peru-landscape.jpg') center/cover no-repeat; background-color: #1e3627;">
					
					<div class="container mx-auto px-4 relative z-10 w-full">
						<div class="text-center max-w-3xl mx-auto">
							<h1 class="text-4xl md:text-5xl font-light text-white mb-6 drop-shadow-lg">
								<?php single_post_title(); ?>
							</h1>
							<p class="text-lg font-light leading-relaxed drop-shadow-md" style="color: #D4B66A;">
								Descubre historias, consejos y experiencias únicas de viaje por el Perú
							</p>
						</div>
					</div>
				</section>
				<?php
			endif;

			// Verificar si estamos en la página de blog o mostrando posts de tipo blog
			$is_blog_context = is_home() || is_category() || is_tag() || is_archive();
			?>

			<?php if ( $is_blog_context ) : ?>
				<!-- Layout tipo Grid para Blog -->
				<section class="py-16 bg-gray-50">
					<div class="container mx-auto px-4">
						<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', get_post_type() );
							endwhile;
							?>
						</div>

						<!-- Paginación Minimalista -->
						<div class="mt-16">
							<?php
							global $wp_query;
							$current_page = max( 1, get_query_var( 'paged' ), get_query_var( 'page' ) );
							$common_classes = 'px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 hover:text-green-600 transition-colors duration-200';
							$current_classes = 'text-white bg-green-600 border-green-600 hover:bg-green-600 hover:text-white';

							$pagination = paginate_links( array(
								'type'      => 'array',
								'current'   => $current_page,
								'total'     => max( 1, $wp_query->max_num_pages ),
								'prev_text' => '← Anterior',
								'next_text' => 'Siguiente →',
							) );

							if ( $pagination ) :
								?>
								<nav class="flex justify-center">
									<ul class="flex space-x-2">
										<?php foreach ( $pagination as $link ) : ?>
											<li class="pagination-item" style="list-style-type: none !important;">
												<?php 
												$link = preg_replace(
													'/class="([^"]*\bpage-numbers\b[^"]*)"/',
													'class="$1 ' . esc_attr( $common_classes ) . '"',
													$link,
													1
												);

												if ( false !== strpos( $link, ' current' ) || false !== strpos( $link, 'current ' ) || false !== strpos( $link, '"current"' ) ) {
													$link = preg_replace(
														'/class="([^"]*\bcurrent\b[^"]*)"/',
														'class="$1 ' . esc_attr( $current_classes ) . '"',
														$link,
														1
													);
												}
												echo $link; 
												?>
											</li>
										<?php endforeach; ?>
									</ul>
								</nav>
								<?php
							endif;
							?>
						</div>
					</div>
				</section>
			
			<?php else : ?>
				<!-- Layout tradicional para otros tipos de contenido -->
				<div class="container mx-auto px-4 py-8">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;

					the_posts_navigation();
					?>
				</div>
			<?php endif; ?>

		<?php else : ?>

			<!-- Estado vacío -->
			<section class="py-16 bg-gray-50">
				<div class="container mx-auto px-4">
					<div class="text-center py-16">
						<div class="max-w-md mx-auto">
							<div class="w-24 h-24 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
								<svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
								</svg>
							</div>
							<h3 class="text-xl font-medium text-gray-900 mb-2">No hay contenido disponible</h3>
							<p class="text-gray-600">Pronto publicaremos contenido interesante.</p>
						</div>
					</div>
				</div>
			</section>

		<?php endif; ?>

	</main><!-- #main -->

<?php

get_footer();
