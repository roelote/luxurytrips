<?php
/**
 * Template part for displaying blog posts in a minimalist style with TailwindCSS
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PeruLuxuryTrips
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100'); ?>>
	
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="relative overflow-hidden aspect-video">
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="block h-full">
				<?php 
				the_post_thumbnail( 'large', array(
					'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500'
				) ); 
				?>
			</a>
			
			<!-- Overlay con categoría -->
			<div class="absolute top-4 left-4">
				<?php
				$categories = get_the_category();
				if ( ! empty( $categories ) ) {
					echo '<span class="inline-block bg-white/90 backdrop-blur-sm text-gray-800 text-xs font-medium px-3 py-1.5 rounded-full shadow-sm">';
					echo esc_html( $categories[0]->name );
					echo '</span>';
				}
				?>
			</div>
		</div>
	<?php endif; ?>
	
	<div class="p-6">
		<!-- Título del post -->
		<header class="entry-header mb-4">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="text-3xl md:text-4xl font-light text-gray-900 leading-tight">', '</h1>' );
			else :
				?>
				<h2 class="text-xl font-semibold text-gray-900 leading-tight mb-3 line-clamp-2">
					<a href="<?php echo esc_url( get_permalink() ); ?>" 
					   class="hover:text-green-600 transition-colors duration-200 group-hover:text-green-600" 
					   rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h2>
				<?php
			endif;
			?>
		</header>

		<!-- Excerpt o contenido -->
		<div class="entry-content">
			<?php
			if ( is_singular() ) :
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continuar leyendo<span class="screen-reader-text"> "%s"</span>', 'peruluxurytrips' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="flex justify-center space-x-2 mt-8 pt-6 border-t border-gray-200 text-sm">' . esc_html__( 'Páginas:', 'peruluxurytrips' ),
						'after'  => '</div>',
					)
				);
			else :
				?>
				<div class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
					<?php 
					if ( has_excerpt() ) {
						the_excerpt();
					} else {
						echo wp_trim_words( get_the_content(), 25, '...' );
					}
					?>
				</div>
				
				<!-- Leer más -->
				<a href="<?php echo esc_url( get_permalink() ); ?>" 
				   class="inline-flex items-center text-green-600 hover:text-green-700 text-sm font-medium transition-colors duration-200 group-hover:text-green-700">
					Leer más
					<svg class="ml-1 w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
					</svg>
				</a>
				<?php
			endif;
			?>
		</div>

		<!-- Meta información -->
		<?php if ( 'blog' === get_post_type() || get_post_type() === 'post' ) : ?>
			<footer class="entry-footer mt-6 pt-4 border-t border-gray-100">
				<div class="flex items-center justify-between text-xs text-gray-500">
					<div class="flex items-center space-x-4">
						<time datetime="<?php echo get_the_date( 'c' ); ?>" class="flex items-center hover:text-gray-700 transition-colors duration-200">
							<svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
							</svg>
							<?php echo get_the_date( 'j M, Y' ); ?>
						</time>
						
						<span class="flex items-center hover:text-gray-700 transition-colors duration-200">
							<svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
							</svg>
							<?php echo get_the_author(); ?>
						</span>
					</div>
					
					<?php if ( ! is_singular() ) : ?>
						<div class="flex items-center text-gray-400 group-hover:text-green-500 transition-colors duration-200">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
							</svg>
						</div>
					<?php endif; ?>
				</div>
			</footer>
		<?php endif; ?>
	</div>
</article>
