<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PeruLuxuryTrips
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	  <!-- <script src="https://cdn.tailwindcss.com"></script> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	
<section class="absolute w-full z-50">
	<header id="mainHeader" class="fixed w-full top-0 left-0 bg-gradient-to-b from-black/100 to-transparent transition-all duration-300">
		<div class="container px-2 sm:px-0 lg:px-2">
			<div class="flex justify-between items-center py-2">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img id="logoHeader" class="w-64 transition-all duration-300" 
						     src="<?php echo esc_url( get_template_directory_uri() . '/img/logo.svg' ); ?>" 
						     alt="<?php bloginfo( 'name' ); ?>">
					</a>
				</div>
				<div>
					<nav class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_class'     => 'nav-menu',
						)
					);
					?>
					</nav>
				</div>
			</div>
		</div>
	</header>
</section>

<script>
document.addEventListener("scroll", function() {
    const header = document.getElementById("mainHeader");
    const logo   = document.getElementById("logoHeader");

    if (window.scrollY > 50) {
        // Cambia a fondo sólido dorado
        header.classList.remove("bg-gradient-to-b", "from-black/100", "to-transparent");
        header.classList.add("bg-[#193F28]");

        // Cambia tamaño logo
        logo.classList.remove("w-64");
        logo.classList.add("w-48");
    } else {
        // Vuelve al degradado
        header.classList.remove("bg-[#193F28]");
        header.classList.add("bg-gradient-to-b", "from-black/100", "to-transparent");

        // Vuelve al tamaño original
        logo.classList.remove("w-48");
        logo.classList.add("w-52");
    }
});
</script>

