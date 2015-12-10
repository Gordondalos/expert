<?php
/**
 Template Name: step3
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div style="position: absolute; top:40px ;right: 75px;">
	<?php //echo get_bloginfo("language");
	if(get_bloginfo("language")=="ru-RU"){
		echo "<a href='";
		echo home_url('/en/home/');
		echo "'>";
		echo "<img src='".get_bloginfo("template_directory")."/img/eng.gif'>";
		echo "</a>";
	}else{
		echo "<a href='";
		echo home_url('/en/главная/');
		echo "'>";
		echo "<img src='".get_bloginfo("template_directory")."/img/rus.gif'>";
		echo "</a>";

	}
	?>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'contents3', 'page' );



			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>


		</main><!-- .site-main -->


	</div><!-- .content-area -->

<?php get_footer(); ?>
