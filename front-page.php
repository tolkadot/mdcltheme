<?php
/**
 * The static front page template
 *
 * @package mdcl
 */

?>

<?php get_header('front'); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



<section class="mdcl-hero">
<div class="hero-image"> 
<div class="logo-box">	<?php mdcltheme_the_custom_logo(); ?></div>
<div class="hero-text"> <h1>Securing Medical Data On The Move</h1>	</div>

<div class="login-area">
	<label class="one-third left-align white-signup">
		<input type="text" name="first_name" id="first_name" tabindex="1" placeholder="First Name" class="login-input" autocorrect="off" autocomplete="off" spellcheck="false" data-sel-first-name="true">
	</label>
	<label class="one-third left-align white-signup"><input type="text" name="last_name" id="last_name" tabindex="2" placeholder="Last Name" class="" autocorrect="off" autocomplete="off" spellcheck="false" data-sel-last-name="true"></label>
	<label class="one-third left-align white-signup sign-up-btn"><input type="submit" name="commit" value="Sign Up" tabindex="3" class="sign-up btn" data-sel-find-profile-button="true" data-disable-with="Sign Up"></label>
</div>

</div>
</section>

<section class="mdcl-blurb">
	<div class="blurb-container"><h2>MDCL is taking the stress out of data security for doctors and hospitals.</h2></div>
</section>

<section class="mdcl-featured-text">

	<div class="feature-container">
	<div class="one-quarter text-center feature">
		<div class="icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
		<div class="featured-heading"><h3>Secure Data</h3></div>
		<div class="featured-text"><p>Work on the move using MDCL's Certified and Secure Medical Encryption Service</p></div>
	</div>
	
	<div class="one-quarter text-center feature">
		<div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
		<div class="featured-heading"><h3>Collaborate</h3></div>
		<div class="featured-text"><p> Collaborate with Clinical Practitioners, Academic Researchers and Medical Device Engineers from around the World.</p></div>
	</div>
	<div class="one-quarter text-center feature">
		<div class="icon"><i class="fa fa-user-md" aria-hidden="true"></i></div>
		<div class="featured-heading"><h3>Connect</h3></div>
		<div class="featured-text"><p>Create Product &amp; Research Groups.Connect to Colleagues. Reach out to Specialists. Your Medical Network.</p></div>
	</div>
	<div class="one-quarter text-center feature">
		<div class="icon"><i class="fa fa-percent" aria-hidden="true"></i></div>
		<div class="featured-heading"><h3>Invest</h3></div>
		<div class="featured-text"><p>Become a part of the MDCL story. </p></div>
	</div>
	</div>
</section>





		</main>
	</div>
<?php get_footer(); ?>

