<?php
/**
 * The template used for displaying hero content
 *
 * @package mdcl
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="mdcltheme-hero">
		<?php the_post_thumbnail( 'mdcltheme-hero' ); ?>
	</div>
<?php endif; ?>
