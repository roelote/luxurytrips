<?php
/**
 * The template for displaying blog archive pages
 *
 * @package PeruLuxuryTrips
 */

get_header();
?>

<main id="primary" class="site-main pt-20">
    <!-- Hero Section Minimalista -->
    <section class="py-16 border-b border-gray-200 relative bg-cover bg-center bg-no-repeat min-h-[400px]" 
             style="background-image: url('https://images.unsplash.com/photo-1526392060635-9d6019884377?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');">
        <!-- Overlay con gradiente -->
        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(30, 54, 39, 0.9) 0%, rgba(42, 77, 53, 0.8) 100%);"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-light text-white mb-6">
                    Blog
                </h1>
                <p class="text-lg font-light leading-relaxed" style="color: #D4B66A;">
                    Discover stories, tips and unique travel experiences in Peru
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Posts Grid con Sidebar -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8 max-w-7xl mx-auto">
                <!-- Contenido principal -->
                <div class="flex-1">
                    <?php if ( have_posts() ) : ?>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-200 group" style="border-color: #1e3627;">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="relative overflow-hidden aspect-video">
                                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="block h-full">
                                        <?php 
                                        the_post_thumbnail( 'large', array(
                                            'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500'
                                        ) ); 
                                        ?>
                                    </a>
                                    <!-- Overlay con efecto hover -->
                                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300"></div>
                                </div>
                            <?php endif; ?>
                            
                            <div class="p-6">
                                <!-- Categorías -->
                                <div class="mb-3">
                                    <?php
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        echo '<span class="inline-block text-xs font-medium px-2.5 py-0.5 rounded text-white" style="background-color: #D4B66A;">';
                                        echo esc_html( $categories[0]->name );
                                        echo '</span>';
                                    }
                                    ?>
                                </div>

                                <!-- Título -->
                                <h2 class="text-xl font-semibold mb-3 line-clamp-2" style="color: #1e3627;">
                                    <a href="<?php echo esc_url( get_permalink() ); ?>" 
                                       class="transition-colors duration-200" 
                                       style="color: #1e3627;"
                                       onmouseover="this.style.color='#D4B66A'" 
                                       onmouseout="this.style.color='#1e3627'">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <!-- Excerpt -->
                                <div class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                                    <?php 
                                    if ( has_excerpt() ) {
                                        the_excerpt();
                                    } else {
                                        echo wp_trim_words( get_the_content(), 20, '...' );
                                    }
                                    ?>
                                </div>

                                <!-- Meta información -->
                                <div class="flex items-center justify-between text-xs text-gray-500 pt-4 border-t border-gray-100">
                                    <time datetime="<?php echo get_the_date( 'c' ); ?>">
                                        <?php echo get_the_date( 'j F, Y' ); ?>
                                    </time>
                                    <span>
                                        <?php echo get_the_author(); ?>
                                    </span>
                                </div>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    ?>
                </div>

                <!-- Paginación Minimalista -->
                <div class="mt-16">
                    <?php
                    $pagination = paginate_links( array(
                        'type'      => 'array',
                        'prev_text' => '← Previous',
                        'next_text' => 'Next →',
                    ) );

                    if ( $pagination ) :
                        ?>
                        <nav class="flex justify-center">
                            <ul class="flex space-x-2">
                                <?php foreach ( $pagination as $link ) : ?>
                                    <li class="pagination-item">
                                        <?php 
                                        $link = str_replace( 
                                            'page-numbers', 
                                            'px-4 py-2 text-sm font-medium text-white border rounded-md transition-colors duration-200', 
                                            $link 
                                        );
                                        $link = str_replace( 
                                            'class="px-4 py-2 text-sm font-medium text-white border rounded-md transition-colors duration-200"', 
                                            'class="px-4 py-2 text-sm font-medium text-white border rounded-md transition-colors duration-200" style="background-color: #1e3627; border-color: #1e3627;" onmouseover="this.style.backgroundColor=\'#D4B66A\'; this.style.borderColor=\'#D4B66A\';" onmouseout="this.style.backgroundColor=\'#1e3627\'; this.style.borderColor=\'#1e3627\';"', 
                                            $link 
                                        );
                                        $link = str_replace( 
                                            'current', 
                                            'px-4 py-2 text-sm font-medium text-white rounded-md', 
                                            $link 
                                        );
                                        $link = str_replace( 
                                            'class="px-4 py-2 text-sm font-medium text-white rounded-md current"', 
                                            'class="px-4 py-2 text-sm font-medium text-white rounded-md current" style="background-color: #D4B66A; border-color: #D4B66A;"', 
                                            $link 
                                        );
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

                    <?php else : ?>
                        
                        <!-- Estado vacío -->
                        <div class="text-center py-16">
                            <div class="max-w-md mx-auto">
                                <div class="w-24 h-24 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-medium text-gray-900 mb-2">No articles available</h3>
                                <p class="text-gray-600">We will soon publish interesting content about travel in Peru.</p>
                            </div>
                        </div>

                    <?php endif; ?>
                </div>

                <!-- Sidebar -->
                <?php get_sidebar( 'blog' ); ?>
            </div>
    </section>
</main>



<?php
get_footer();
?>