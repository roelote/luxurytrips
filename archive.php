<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PeruLuxuryTrips
 */

get_header();
?>

<!-- Hero Section para Archive -->
<section class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-black py-20">
	<div class="absolute inset-0 opacity-10">
		<div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMC0yLjIxLTEuNzktNC00LTRzLTQgMS43OS00IDQgMS43OSA0IDQgNCA0LTEuNzkgNC00ek0yMCAyMGMwLTIuMjEtMS43OS00LTQtNHMtNCAxLjc5LTQgNCAxLjc5IDQgNCA0IDQtMS43OSA0LTR6Ii8+PC9nPjwvZz48L3N2Zz4=')] bg-repeat"></div>
	</div>
	
	<div class="container mx-auto px-4 relative z-10">
		<div class="text-center max-w-4xl mx-auto">
			<!-- Decorative icon -->
			<div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#B19A5C] to-yellow-600 rounded-full mb-6 shadow-lg">
				<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
				</svg>
			</div>
			
			<?php
			// Remove "Category:", "Tag:", etc. from archive title and strip HTML tags
			$archive_title = get_the_archive_title();
			$archive_title = preg_replace('/^.*?:\s*/', '', $archive_title);
			$archive_title = strip_tags($archive_title);
			echo '<h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">' . esc_html($archive_title) . '</h1>';
			the_archive_description( '<div class="text-lg text-gray-300 leading-relaxed">', '</div>' );
			?>
			
			<!-- Decorative line -->
			<div class="flex items-center justify-center mt-8">
				<div class="w-16 h-px bg-gradient-to-r from-transparent via-[#B19A5C] to-transparent"></div>
				<div class="mx-4 w-2 h-2 bg-[#B19A5C] rounded-full"></div>
				<div class="w-16 h-px bg-gradient-to-r from-[#B19A5C] via-transparent to-transparent"></div>
			</div>
		</div>
	</div>
</section>

<main id="primary" class="site-main bg-white">
	<div class="container mx-auto px-4 py-16">
		
		<?php if ( have_posts() ) : ?>

			<!-- Grid de Posts -->
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2'); ?>>
						
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="relative overflow-hidden h-64">
								<?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-110')); ?>
								
								<!-- Overlay gradient -->
								<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
								
								<!-- Category badge -->
								<div class="absolute top-4 left-4">
									<?php
									$categories = get_the_category();
									if ( ! empty( $categories ) ) :
										?>
										<span class="inline-block px-3 py-1 text-xs font-bold uppercase tracking-wider text-white bg-[#B19A5C] rounded-full shadow-lg">
											<?php echo esc_html( $categories[0]->name ); ?>
										</span>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
						
						<div class="p-6">
							<!-- Title -->
							<h2 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-[#B19A5C] transition-colors duration-300">
								<a href="<?php the_permalink(); ?>" class="hover:text-[#B19A5C]">
									<?php the_title(); ?>
								</a>
							</h2>
							
							<!-- Excerpt -->
							<div class="text-gray-600 mb-4 line-clamp-3">
								<?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
							</div>
							
							<!-- Read More Button -->
							<a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-[#B19A5C] font-semibold text-sm uppercase tracking-wider hover:gap-4 transition-all duration-300">
								Read More
								<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
								</svg>
							</a>
						</div>
					</article>
					
				<?php endwhile; ?>
			</div>

			<!-- Pagination -->
			<div class="flex justify-center">
				<?php
				the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>',
					'next_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>',
					'class'     => 'pagination-custom',
				) );
				?>
			</div>

		<?php else : ?>

			<div class="text-center py-16">
				<div class="inline-flex items-center justify-center w-20 h-20 bg-gray-100 rounded-full mb-6">
					<svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
					</svg>
				</div>
				<h2 class="text-2xl font-bold text-gray-800 mb-4">No Posts Found</h2>
				<p class="text-gray-600 mb-8">Sorry, but nothing matched your search criteria. Please try again with different keywords.</p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block px-8 py-3 bg-[#B19A5C] text-white font-semibold rounded-full hover:bg-[#9a8349] transition-colors duration-300">
					Back to Home
				</a>
			</div>

		<?php endif; ?>

	</div>
</main>

<style>
	/* Pagination custom styles */
	.pagination-custom {
		display: flex;
		gap: 0.5rem;
		list-style: none;
		padding: 0;
	}
	
	.pagination-custom .page-numbers {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		min-width: 2.5rem;
		height: 2.5rem;
		padding: 0 0.75rem;
		background: white;
		border: 2px solid #e5e7eb;
		border-radius: 0.5rem;
		color: #374151;
		font-weight: 600;
		transition: all 0.3s ease;
	}
	
	.pagination-custom .page-numbers:hover {
		background: #B19A5C;
		border-color: #B19A5C;
		color: white;
		transform: translateY(-2px);
		box-shadow: 0 4px 12px rgba(177, 154, 92, 0.3);
	}
	
	.pagination-custom .page-numbers.current {
		background: #B19A5C;
		border-color: #B19A5C;
		color: white;
		box-shadow: 0 4px 12px rgba(177, 154, 92, 0.3);
	}
	
	.pagination-custom .prev,
	.pagination-custom .next {
		background: #B19A5C;
		border-color: #B19A5C;
		color: white;
	}
	
	.pagination-custom .prev:hover,
	.pagination-custom .next:hover {
		background: #9a8349;
		border-color: #9a8349;
	}
</style>

<?php
get_footer();
