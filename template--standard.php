<?php
/**Template Name: team
 *
 * @package mdcl
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- Swiper -->
	
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">          
            <div class="row">
			    <div class="col-xs-12 col-sm-8">
                    <div class="person-text-item">
                        <h4 class="team-h4">Sean McMahon</h4>
                        Sean is a skilled Engineer, (BEng, MEng), with over 16 years experience working in the electronics and telecommunications sectors. Following his most recent position with f6 Tech working on the cloud based telematic solution in the AWS, he decided to pursue his dream of developing a collaborative medical network.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
			        <img class = "aboutUsEmployeeImage" src="http://0058d.com/wp-content/uploads/2016/11/sean.jpg" alt="sean">
			    </div>
		    </div> <!--close the row -->
            </div>
            
            <div class="swiper-slide">          
            <div class="row">
			    <div class="col-xs-12 col-sm-8">
                    <div class="person-text-item">
                        <h4 class="team-h4">George Gundry</h4>
   George is an experienced technical manager with over 30 years’ experience working in the IT and telecommunications sectors since graduating with a degree in Computer Science. He is an Agile Certified Practitioner, CSM and Prince 2 qualified Program & Project Manager with a sound technical background in software development, helping on & off shore teams deliver business value.                 </div>
                </div>
                <div class="col-xs-12 col-sm-4">
			        <img class = "aboutUsEmployeeImage" src="http://0058d.com/wp-content/uploads/2016/11/george.jpg" alt="sean">
			    </div>
		    </div> <!--close the row -->
            </div>
            
            <div class="swiper-slide">          
            <div class="row">
			    <div class="col-xs-12 col-sm-8">
                    <div class="person-text-item">
                        <h4 class="team-h4">Vincent Ryan</h4>
                        Lecturer in Journalism with more than 8 years experience in national media. 
Most recently worked on the development of a digital advertising concept with Saatchi & Saatchi for the Olympics.
</div>
                </div>
                <div class="col-xs-12 col-sm-4">
			        <img class = "aboutUsEmployeeImage" src="http://0058d.com/wp-content/uploads/2016/11/vincent.jpg" alt="sean">
			    </div>
		    </div> <!--close the row -->
            </div>
            
            <div class="swiper-slide">          
            <div class="row">
			    <div class="col-xs-12 col-sm-8">
                    <div class="person-text-item">
                        <h4 class="team-h4">Dee Bryant</h4>
        Deirdre is a full stack web developer. Since graduating with a BEng she has worked for major corporations such as O2 & Telefonica. She established a web development company in 2014.            </div>
                </div>
                <div class="col-xs-12 col-sm-4">
			        <img class = "aboutUsEmployeeImage" src="http://0058d.com/wp-content/uploads/2017/04/dee.jpg" alt="sean">
			    </div>
		    </div> <!--close the row -->
            </div>
            
            <div class="swiper-slide">          
            <div class="row">
			    <div class="col-xs-12 col-sm-8">
                    <div class="person-text-item">
                        <h4 class="team-h4">Nigel Quinlan</h4>
              Nigel is an ux/ui designer with a passion for helping people and improving their lives. He blends design thinking with a background in science, manufacturing and Occupational Health & Science consultancy.          </div>
                </div>
                <div class="col-xs-12 col-sm-4">
			        <img class = "aboutUsEmployeeImage" src="http://0058d.com/wp-content/uploads/2017/04/nigel.jpg" alt="sean">
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
