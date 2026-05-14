<?php
/**
 * The sidebar for blog pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PeruLuxuryTrips
 */
?>

<aside id="secondary" class="widget-area lg:w-80 flex-shrink-0">
    
    <!-- Buscador -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
        <h3 class="text-lg font-semibold mb-4 flex items-center" style="color: #1e3627;">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #D4B66A;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            Search in Blog
        </h3>
        <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="relative">
            <input type="search" 
                   name="s" 
                   value="<?php echo get_search_query(); ?>" 
                   placeholder="Search articles..."
                   class="w-full pl-10 pr-4 py-3 text-sm border rounded-lg transition-all duration-200" 
                   style="border-color: #1e3627;" 
                   onfocus="this.style.boxShadow='0 0 0 2px #D4B66A'; this.style.borderColor='transparent';" 
                   onblur="this.style.boxShadow='none'; this.style.borderColor='#1e3627';"
                   required>
            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <input type="hidden" name="post_type" value="blog">
            <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-white px-4 py-1.5 rounded-md text-sm font-medium transition-colors duration-200" 
                    style="background-color: #1e3627;" 
                    onmouseover="this.style.backgroundColor='#D4B66A';" 
                    onmouseout="this.style.backgroundColor='#1e3627';">
                Search
            </button>
        </form>
    </div>

    <!-- Últimos Posts -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
        <h3 class="text-lg font-semibold mb-6 flex items-center" style="color: #1e3627;">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #D4B66A;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            Latest Articles
        </h3>
        
        <?php
        $recent_blogs = new WP_Query( array(
            'post_type'      => 'blog',
            'posts_per_page' => 5,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC'
        ) );

        if ( $recent_blogs->have_posts() ) : ?>
            <div class="space-y-4">
                <?php while ( $recent_blogs->have_posts() ) : $recent_blogs->the_post(); ?>
                    <article class="group">
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="flex items-start space-x-3 hover:bg-gray-50 rounded-lg p-2 transition-colors duration-200">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="flex-shrink-0 w-16 h-16 rounded-lg overflow-hidden">
                                    <?php 
                                    the_post_thumbnail( 'thumbnail', array(
                                        'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300'
                                    ) ); 
                                    ?>
                                </div>
                            <?php else : ?>
                                <div class="flex-shrink-0 w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            <?php endif; ?>
                            
                            <div class="flex-1 min-w-0">
                                <h4 class="text-sm font-medium line-clamp-2 transition-colors duration-200 mb-1 leading-tight" style="color: #1e3627;">
                                    <?php the_title(); ?>
                                </h4>
                                <div class="flex items-center text-xs text-gray-500">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <?php echo get_the_date( 'j M, Y' ); ?>
                                </div>
                            </div>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <div class="mt-6 pt-4 border-t border-gray-100">
                <a href="<?php echo get_post_type_archive_link( 'blog' ); ?>" 
                   class="inline-flex items-center text-sm font-medium transition-colors duration-200"
                   style="color: #D4B66A;"
                   onmouseover="this.style.color='#1e3627';"
                   onmouseout="this.style.color='#D4B66A';">
                    View all articles
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        <?php else : ?>
            <p class="text-gray-600 text-sm">No articles available.</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>

    <!-- Categorías -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
        <h3 class="text-lg font-semibold mb-6 flex items-center" style="color: #1e3627;">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #D4B66A;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
            </svg>
            Categories
        </h3>
        
        <?php
        $categories = get_categories( array(
            'taxonomy' => 'category',
            'hide_empty' => true,
            'number' => 10
        ) );
        
        if ( $categories ) : ?>
            <div class="flex flex-wrap gap-2">
                <?php foreach ( $categories as $category ) : ?>
                    <a href="<?php echo get_category_link( $category->term_id ); ?>" 
                       class="inline-flex items-center bg-gray-100 text-xs px-3 py-1.5 rounded-full transition-colors duration-200"
                       style="color: #1e3627;"
                       onmouseover="this.style.backgroundColor='#D4B66A'; this.style.color='white';"
                       onmouseout="this.style.backgroundColor='#f3f4f6'; this.style.color='#1e3627';">
                        <?php echo esc_html( $category->name ); ?>
                        <span class="ml-1.5 bg-white text-xs px-1.5 py-0.5 rounded-full" style="color: #1e3627;">
                            <?php echo $category->count; ?>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p class="text-gray-600 text-sm">No categories available.</p>
        <?php endif; ?>
    </div>

    <!-- Tags Populares -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
        <h3 class="text-lg font-semibold mb-6 flex items-center" style="color: #1e3627;">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #D4B66A;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
            </svg>
            Popular Tags
        </h3>
        
        <?php
        $tags = get_tags( array(
            'orderby' => 'count',
            'order' => 'DESC',
            'number' => 15,
            'hide_empty' => true
        ) );
        
        if ( $tags ) : ?>
            <div class="flex flex-wrap gap-2">
                <?php foreach ( $tags as $tag ) : ?>
                    <a href="<?php echo get_tag_link( $tag->term_id ); ?>" 
                       class="inline-block bg-gray-100 text-xs px-3 py-1.5 rounded-full transition-colors duration-200"
                       style="color: #1e3627;"
                       onmouseover="this.style.backgroundColor='#D4B66A'; this.style.color='white';"
                       onmouseout="this.style.backgroundColor='#f3f4f6'; this.style.color='#1e3627';">
                        #<?php echo esc_html( $tag->name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p class="text-gray-600 text-sm">No tags available.</p>
        <?php endif; ?>
    </div>

    <!-- Newsletter/CTA -->
    <div class="rounded-xl shadow-sm p-6 text-white" style="background: linear-gradient(135deg, #1e3627 0%, #2a4d35 100%);">
        <div class="text-center">
            <div class="w-12 h-12 mx-auto mb-4 rounded-full flex items-center justify-center" style="background-color: rgba(212, 182, 106, 0.2);">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #D4B66A;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 3.26a2 2 0 001.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-semibold mb-2">Did you like the content?</h3>
            <p class="text-sm mb-4 leading-relaxed" style="color: #D4B66A;">
                Subscribe to receive the best travel tips and exclusive offers for Peru.
            </p>
            <a href="#contacto" 
               class="inline-block font-medium text-sm px-6 py-2.5 rounded-lg transition-colors duration-200"
               style="background-color: #D4B66A; color: #1e3627;"
               onmouseover="this.style.backgroundColor='white'; this.style.color='#1e3627';"
               onmouseout="this.style.backgroundColor='#D4B66A'; this.style.color='#1e3627';">
                Subscribe
            </a>
        </div>
    </div>

</aside>