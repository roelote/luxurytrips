<section class="pt-8 pb-4">
    <?php 
    $gallery_images = get_field('gallery_tours');
    if ($gallery_images): ?>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper pb-12">
                <?php foreach ($gallery_images as $image): ?>
                    <div class="swiper-slide border rounded-md group overflow-hidden">
                        <div class="relative">
                            <img class="w-full object-cover rounded-md h-[300px] transition-transform duration-500 group-hover:scale-110" 
                                 src="<?php echo esc_url($image['sizes']['large']); ?>" 
                                 alt="<?php echo esc_attr($image['alt'] ? $image['alt'] : 'Galería de tour'); ?>" />
                            
                            <!-- Overlay con efecto hover -->
                            <!-- <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 rounded-md flex items-center justify-center">
                                <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-search-plus text-white text-2xl"></i>
                                </div>
                            </div> -->
                            
                            <?php if ($image['caption']): ?>
                                <!-- Caption overlay -->
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4 rounded-b-md">
                                    <p class="text-white text-sm font-medium"><?php echo esc_html($image['caption']); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Botones de navegación -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Paginación -->
            <div class="swiper-pagination"></div>
        </div>
    <?php else: ?>
        <!-- Fallback si no hay imágenes en la galería -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper pb-12">
                <div class="swiper-slide border rounded-md"><img class="w-full object-cover rounded-md h-[300px]" src="https://www.condortravel.com/assets/images/WEBP/peru/fotoexp-01.webp" alt="Imagen por defecto 1" /></div>
                <div class="swiper-slide border rounded-md"><img class="w-full object-cover rounded-md h-[300px]" src="https://www.condortravel.com/assets/images/WEBP/peru/fotoexp-02.webp" alt="Imagen por defecto 2" /></div>
                <div class="swiper-slide border rounded-md"><img class="w-full object-cover rounded-md h-[300px]" src="https://www.condortravel.com/assets/images/WEBP/peru/fotoexp-03.webp" alt="Imagen por defecto 3" /></div>
                <div class="swiper-slide border rounded-md"><img class="w-full object-cover rounded-md h-[300px]" src="https://www.condortravel.com/assets/images/WEBP/peru/fotoexp-04.webp" alt="Imagen por defecto 4" /></div>
            </div>
            <!-- Botones de navegación -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- Paginación -->
            <div class="swiper-pagination"></div>
        </div>
    <?php endif; ?>
</section>