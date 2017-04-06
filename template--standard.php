<?php
/**Template Name: team
 *
 * @package mdcl
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- Swiper -->
	<div class="page-header text-center"><h1> Our Team</h1></div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">          
            <div class="row">
			    <div class="col-xs-12 col-sm-8">
                    <div class="person-text-item">
                        <h4>Sean McMahon</h4>
                        <?php echo $personContent ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
			        <img class = "aboutUsEmployeeImage" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
			    </div>
		    </div> <!--close the row -->
            </div>
            
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="../dist/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
    </script>

		</main>
	</div>
<?php

get_footer();
