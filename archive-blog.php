<?php
/**
 * The template for displaying blog archive pages
 *
 * @package PeruLuxuryTrips
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative flex items-center justify-center overflow-hidden" style="min-height: 70vh;">
        <!-- Imagen de fondo -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
             style="background-image: url('https://images.unsplash.com/photo-1526392060635-9d6019884377?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>

        <!-- Overlay degradado -->
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(30,54,39,0.75) 0%, rgba(10,20,15,0.85) 100%);"></div>

        <!-- Línea decorativa izquierda -->
        <div class="absolute left-8 top-1/2 -translate-y-1/2 hidden lg:flex flex-col items-center gap-3">
            <div class="w-px h-24" style="background: #D4B66A;"></div>
            <span class="text-xs tracking-[0.3em] uppercase rotate-90 origin-center" style="color: #D4B66A;">Blog</span>
            <div class="w-px h-24" style="background: #D4B66A;"></div>
        </div>

        <!-- Contenido -->
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full border text-xs font-medium uppercase tracking-widest" 
                 style="border-color: rgba(212,182,106,0.4); color: #D4B66A; background: rgba(212,182,106,0.08);">
                <span class="w-1.5 h-1.5 rounded-full inline-block" style="background:#D4B66A;"></span>
                Peru Luxury Trips
            </div>

            <!-- Título -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-light text-white leading-tight mb-6">
                Travel<br>
                <em class="not-italic font-extralight" style="color: #D4B66A;">Stories</em>
            </h1>

            <!-- Descripción -->
            <p class="text-base md:text-lg font-light text-white/70 max-w-xl mx-auto mb-10 leading-relaxed">
                Discover tips, guides and unique experiences to make your journey through Peru unforgettable.
            </p>

            <!-- Separador dorado -->
            <div class="flex items-center justify-center gap-4">
                <div class="h-px w-16" style="background: #D4B66A;"></div>
                <svg class="w-4 h-4" style="color: #D4B66A;" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2a8 8 0 100 16A8 8 0 0010 2zm0 14a6 6 0 110-12 6 6 0 010 12zm0-9a1 1 0 011 1v3.586l2.707 2.707a1 1 0 01-1.414 1.414l-3-3A1 1 0 019 12V8a1 1 0 011-1z"/>
                </svg>
                <div class="h-px w-16" style="background: #D4B66A;"></div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
            <span class="text-xs tracking-widest uppercase text-white/40">Scroll</span>
            <svg class="w-4 h-4 text-white/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7"/>
            </svg>
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
                    global $wp_query;
                    $current_page = max( 1, get_query_var( 'paged' ), get_query_var( 'page' ) );
                    $common_classes = 'px-4 py-2 text-sm font-medium text-white border rounded-md transition-colors duration-200';
                    $normal_style = 'background-color: #1e3627; border-color: #1e3627;';
                    $current_style = 'background-color: #D4B66A; border-color: #D4B66A;';

                    $pagination = paginate_links( array(
                        'type'      => 'array',
                        'current'   => $current_page,
                        'total'     => max( 1, $wp_query->max_num_pages ),
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
                                        $link = preg_replace(
                                            '/class="([^"]*\bpage-numbers\b[^"]*)"/',
                                            'class="$1 ' . esc_attr( $common_classes ) . '"',
                                            $link,
                                            1
                                        );

                                        if ( false !== strpos( $link, ' current' ) || false !== strpos( $link, 'current ' ) || false !== strpos( $link, '"current"' ) ) {
                                            $link = preg_replace(
                                                '/class="([^"]*\bcurrent\b[^"]*)"/',
                                                'class="$1" style="' . esc_attr( $current_style ) . '"',
                                                $link,
                                                1
                                            );
                                        } else {
                                            $link = preg_replace(
                                                '/class="([^"]*\bpage-numbers\b[^"]*)"/',
                                                'class="$1" style="' . esc_attr( $normal_style ) . '" onmouseover="this.style.backgroundColor=\'#D4B66A\'; this.style.borderColor=\'#D4B66A\';" onmouseout="this.style.backgroundColor=\'#1e3627\'; this.style.borderColor=\'#1e3627\';"',
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