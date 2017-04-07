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
	<div class="one-third text-center featured-heading"><h2 class="h2-footer"><a href="#contact_form_pop" class="fancybox">Contact Us</a>
<div style="display:none" class="fancybox-hidden">
<div id="contact_form_pop">
       <?php echo do_shortcode( '[contact-form-7 id="13" title="MMC"]' ); ?></div>
</div></h3></div>
	
	
	
	<div class="one-third text-center featured-heading"><h2 class="h2-footer"><a href="http://0058d.com/our-team/">Our Team</a></h3></div>
	<div class="one-third text-center featured-heading"><h2 class="h2-footer">Business Scope</h3></div>

</section>
<div class="text-center weight-300 copyright"><?php echo(mdcl_copyright()) ?></div>
	</footer>
</div>
<?php wp_footer(); ?>

 <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
    </script>


</body>
</html>
