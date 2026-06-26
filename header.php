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

	
<!-- Eliminamos el <section> extra y movemos el z-50 directamente al header -->
<header id="mainHeader" class="fixed w-full top-0 left-0 z-50 bg-gradient-to-b from-black/80 via-black/40 to-transparent backdrop-blur-sm transition-all duration-300 text-white">
	<!-- Añadimos mx-auto para centrar el contenedor y mejoramos el padding -->
	<div class="container mx-auto px-4 sm:px-6 lg:px-8">
		<div class="flex justify-between items-center py-4">
			
			<!-- Logo -->
			<div class="logo shrink-0">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="block">
					<img id="logoHeader" class="w-48 md:w-56 lg:w-64 transition-all duration-300 drop-shadow-md" 
					     src="<?php echo esc_url( get_template_directory_uri() . '/img/logo.svg' ); ?>" 
					     alt="<?php bloginfo( 'name' ); ?>">
				</a>
			</div>
			
			<!-- Navegación -->
			<div> <!-- Ocultamos en móvil por defecto, asumiendo que tendrás un menú hamburguesa -->
				<nav class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_class'     => 'nav-menu flex space-x-8 text-sm lg:text-base font-medium tracking-wide',
						'container'      => false, // Evita que WP envuelva el ul en un div extra
					)
				);
				?>
				</nav>
			</div>

		</div>
	</div>
</header>

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

