<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mdcl
 */

?>

	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<section class="mdcl-footer">
	<div class="one-third text-center featured-heading"><h3>Contact</h3></div>
	<div class="one-third text-center featured-heading"><h3>Our Team</h3></div>
	<div class="one-third text-center featured-heading"><h3>Business Scope</h3></div>

</section>
<div class="text-center"><?php echo(mdcl_copyright()) ?></div>
	</footer>
</div>
<?php wp_footer(); ?>

 <script>        
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    
    // If we need pagination
    pagination: '.swiper-pagination',
    
    // Navigation arrows
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    
    // And if we need scrollbar
    scrollbar: '.swiper-scrollbar',
  })        
  </script>


</body>
</html>
