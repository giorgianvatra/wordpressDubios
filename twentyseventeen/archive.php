<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :
			?>
			<?php
			// Start the Loop.
			while ( have_posts() ){
			the_post(); 
			?>

			<div class="container flex-container">
				<article class="article-section">
					<a href="<?php the_permalink() ?>"><h1 class="title"><?php the_title() ?></h1></a>
					<p class="content"><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
				</article>
				<div class="image-container">
				<img src="<?php the_post_thumbnail_url()  ?>" alt="">
			</div>
			</div>
			
			
			<?php

			}
			

				

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif;
		?>
        
		</main><!-- #main -->
		
	</div><!-- #primary -->
</div><!-- .wrap -->
		
<?php
get_footer();