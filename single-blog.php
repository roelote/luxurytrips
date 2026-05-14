<?php
/**
 * The template for displaying single blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PeruLuxuryTrips
 */

get_header();
?>

<main id="primary" class="site-main ">
	<?php while ( have_posts() ) : the_post(); ?>
		
		<!-- Hero Section con imagen destacada -->
		<section class="relative h-screen min-h-[500px] max-h-[800px] overflow-hidden">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="absolute inset-0">
					<?php 
					the_post_thumbnail( 'full', array(
						'class'  => 'w-full h-full object-cover',
						'srcset' => false,
						'sizes'  => false,
					) ); 
					?>
				</div>
			<?php else : ?>
				<div class="absolute inset-0 bg-gradient-to-br from-green-800 to-green-900"></div>
			<?php endif; ?>
			
			<!-- Overlay -->
			<div class="absolute inset-0 bg-black/40"></div>
			
			<!-- Contenido del hero -->
			<div class="relative z-10 flex items-center justify-center h-full">
				<div class="container mx-auto px-4 text-center text-white">
					<div class="max-w-4xl mx-auto">
						<!-- CategorÃ­a -->
						<?php
						$categories = get_the_category();
						if ( ! empty( $categories ) ) : ?>
							<span class="inline-block backdrop-blur-sm text-sm font-medium px-4 py-2 rounded-full mb-6 uppercase tracking-wide" style="background-color: rgba(212, 182, 106, 0.9); color: #1e3627;">
								<?php echo esc_html( $categories[0]->name ); ?>
							</span>
						<?php endif; ?>
						
						<!-- TÃ­tulo -->
						<h1 class="text-4xl md:text-6xl lg:text-7xl font-light leading-tight mb-6">
							<?php the_title(); ?>
						</h1>
						
						<!-- Meta informaciÃ³n -->
						<div class="flex flex-col sm:flex-row items-center justify-center space-y-2 sm:space-y-0 sm:space-x-6 text-sm text-white/80">
							<div class="flex items-center">
								<svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
								</svg>
								<?php echo get_the_date( 'j F, Y' ); ?>
							</div>
							<div class="flex items-center">
								<svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
								</svg>
								By <?php echo get_the_author(); ?>
							</div>
							<div class="flex items-center">
								<svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #D4B66A;">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								</svg>
								<?php echo peruluxurytrips_reading_time(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Contenido del artÃ­culo con Sidebar -->
		<article class="py-16 bg-white">
			<div class="container mx-auto px-4">
				<div class="flex flex-col lg:flex-row gap-8 max-w-7xl mx-auto">
					<!-- Contenido principal -->
					<div class="flex-1 max-w-4xl">
					
					<!-- Excerpt si existe -->
					<?php if ( has_excerpt() ) : ?>
						<div class="text-xl font-light leading-relaxed mb-12 pb-8 border-b-2" style="color: #1e3627; border-color: #D4B66A;">
							<?php the_excerpt(); ?>
						</div>
					<?php endif; ?>
					
					<!-- Contenido principal con estilos Tailwind -->
					<div class="prose max-w-none">
						<div class="text-lg leading-relaxed text-gray-700 space-y-6 
								   [&>h2]:text-3xl [&>h2]:font-semibold [&>h2]:text-gray-900 [&>h2]:mt-12 [&>h2]:mb-6
								   [&>h3]:text-2xl [&>h3]:font-semibold [&>h3]:text-gray-900 [&>h3]:mt-10 [&>h3]:mb-4
								   [&>h4]:text-xl [&>h4]:font-semibold [&>h4]:text-gray-900 [&>h4]:mt-8 [&>h4]:mb-3
								   [&>p]:mb-6 [&>p]:leading-relaxed
								   [&>img]:rounded-lg [&>img]:shadow-lg [&>img]:my-8 [&>img]:w-full
								   [&>blockquote]:border-l-4 [&>blockquote]:border-green-500 [&>blockquote]:pl-6 
								   [&>blockquote]:my-8 [&>blockquote]:italic [&>blockquote]:bg-gray-50 [&>blockquote]:p-6 [&>blockquote]:rounded-r-lg
								   [&>ul]:my-6 [&>ul]:pl-8 [&>ul]:space-y-2 [&>li]:list-disc
								   [&>ol]:my-6 [&>ol]:pl-8 [&>ol]:space-y-2 [&>ol_li]:list-decimal
								   [&>a]:text-green-600 [&>a]:hover:text-green-700 [&>a]:underline
								   [&>strong]:font-semibold [&>em]:italic">
							<?php
							the_content(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'peruluxurytrips' ),
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
									'before' => '<div class="flex justify-center items-center mt-8 pt-8 border-t border-gray-200 space-x-2 text-sm">' . esc_html__( 'Pages:', 'peruluxurytrips' ),
									'after'  => '</div>',
								)
							);
							?>
						</div>
					</div>

					<!-- Tags y compartir -->
					<footer class="entry-footer mt-12 pt-8 border-t border-gray-200">
						<div class="flex flex-wrap items-center justify-between gap-4">
							<!-- Tags -->
							<?php
							$tags_list = get_the_tag_list( '', ' ' );
							if ( $tags_list ) :
								?>
								<div class="flex flex-wrap items-center gap-2">
									<span class="text-sm font-medium" style="color: #1e3627;">Tags:</span>
									<?php
									$tags = get_the_tags();
									if ( $tags ) {
										foreach ( $tags as $tag ) {
											echo '<span class="inline-block bg-gray-100 text-xs px-3 py-1 rounded-full transition-colors duration-200 cursor-pointer" style="color: #1e3627;" onmouseover="this.style.backgroundColor=\'#D4B66A\'; this.style.color=\'white\';" onmouseout="this.style.backgroundColor=\'#f3f4f6\'; this.style.color=\'#1e3627\';">';
											echo esc_html( $tag->name );
											echo '</span>';
										}
									}
									?>
								</div>
								<?php
							endif;
							?>

							<!-- Compartir -->
							<div class="flex items-center space-x-3">
								<span class="text-sm font-medium" style="color: #1e3627;">Share:</span>
								<div class="flex space-x-2">
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" 
									   target="_blank" 
									   class="inline-flex items-center justify-center w-10 h-10 bg-blue-600 hover:bg-blue-700 text-white rounded-full transition-colors duration-200">
										<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
											<path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"></path>
										</svg>
									</a>
									<a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" 
									   target="_blank" 
									   class="inline-flex items-center justify-center w-10 h-10 bg-sky-500 hover:bg-sky-600 text-white rounded-full transition-colors duration-200">
										<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
											<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
										</svg>
									</a>
									<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( get_permalink() ); ?>" 
									   target="_blank" 
									   class="inline-flex items-center justify-center w-10 h-10 bg-blue-700 hover:bg-blue-800 text-white rounded-full transition-colors duration-200">
										<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
											<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</footer>
					</div>

					<!-- Sidebar -->
					<?php get_sidebar( 'blog' ); ?>
				</div>
			</div>
		</article>

		<!-- NavegaciÃ³n entre posts -->
		<section class="py-12 bg-gray-50 border-t border-gray-200">
			<div class="container mx-auto px-4">
				<div class="max-w-4xl mx-auto">
					<nav class="flex justify-between items-center">
						<?php
						$prev_post = get_previous_post();
						$next_post = get_next_post();
						?>
						
						<div class="flex-1">
							<?php if ( $prev_post ) : ?>
								<a href="<?php echo get_permalink( $prev_post->ID ); ?>" 
								   class="group flex items-center text-gray-600 hover:text-green-600 transition-colors duration-200 max-w-xs">
									<svg class="w-5 h-5 mr-3 group-hover:-translate-x-1 transition-transform duration-200 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
									</svg>
									<div>
										<div class="text-xs text-gray-500 uppercase tracking-wide mb-1">Previous</div>
										<div class="font-medium text-sm line-clamp-2"><?php echo wp_trim_words( $prev_post->post_title, 8 ); ?></div>
									</div>
								</a>
							<?php endif; ?>
						</div>

						<div class="flex-1 text-right">
							<?php if ( $next_post ) : ?>
								<a href="<?php echo get_permalink( $next_post->ID ); ?>" 
								   class="group flex items-center justify-end text-gray-600 hover:text-green-600 transition-colors duration-200 max-w-xs ml-auto">
									<div class="text-right">
										<div class="text-xs text-gray-500 uppercase tracking-wide mb-1">Next</div>
										<div class="font-medium text-sm line-clamp-2"><?php echo wp_trim_words( $next_post->post_title, 8 ); ?></div>
									</div>
									<svg class="w-5 h-5 ml-3 group-hover:translate-x-1 transition-transform duration-200 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
									</svg>
								</a>
							<?php endif; ?>
						</div>
					</nav>
				</div>
			</div>
		</section>

		<!-- Posts relacionados -->
		<section class="py-16 bg-white">
			<div class="container mx-auto px-4">
				<div class="max-w-6xl mx-auto">
					<h2 class="text-3xl font-light text-center text-gray-900 mb-12">
						ArtÃ­culos <span class="font-bold">Relacionados</span>
					</h2>
					
					<?php
					$related_posts = new WP_Query( array(
						'post_type'      => 'blog',
						'posts_per_page' => 3,
						'post__not_in'   => array( get_the_ID() ),
						'orderby'        => 'date',
						'order'          => 'DESC'
					) );

					if ( $related_posts->have_posts() ) : ?>
						<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
							<?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
								<article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="relative aspect-video overflow-hidden">
											<a href="<?php echo esc_url( get_permalink() ); ?>">
												<?php 
												the_post_thumbnail( 'medium_large', array(
													'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500'
												) ); 
												?>
											</a>
										</div>
									<?php endif; ?>
									
									<div class="p-6">
										<h3 class="text-lg font-semibold text-gray-900 mb-3 line-clamp-2 leading-tight">
											<a href="<?php echo esc_url( get_permalink() ); ?>" 
											   class="hover:text-green-600 transition-colors duration-200">
												<?php the_title(); ?>
											</a>
										</h3>
										<p class="text-gray-600 text-sm line-clamp-3 mb-4 leading-relaxed">
											<?php echo wp_trim_words( get_the_excerpt() ?: get_the_content(), 20 ); ?>
										</p>
										<div class="flex items-center justify-between">
											<div class="text-xs text-gray-500">
												<?php echo get_the_date( 'j M, Y' ); ?>
											</div>
											<a href="<?php echo esc_url( get_permalink() ); ?>" 
											   class="text-green-600 hover:text-green-700 text-sm font-medium transition-colors duration-200 flex items-center">
												Leer mÃ¡s
												<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
												</svg>
											</a>
										</div>
									</div>
								</article>
							<?php endwhile; ?>
						</div>
					<?php else : ?>
						<div class="text-center text-gray-500">
							<p>No hay artÃ­culos relacionados disponibles.</p>
						</div>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</section>

	<?php endwhile; ?>
</main>

<?php
get_footer();
?>

