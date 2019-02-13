<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Canyon Themes
 * @subpackage Quality Construction
 */
$copyright = quality_construction_get_option('quality_construction_copyright');
if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) {

    ?>

    <section id="footer-top" class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-top-box wow fadeInUp">
                        <?php dynamic_sidebar('footer-1'); ?>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="footer-top-box wow fadeInUp">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-top-box wow fadeInUp">
                        <?php dynamic_sidebar('footer-3'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-top-box wow fadeInUp">
                        <?php dynamic_sidebar('footer-4'); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php } ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<style>
	.social-btn{
		font-size: 28px;
	}
</style>
<section id="footer-bottom" class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-9 social-follow"     style="padding-top: 25px;">
				<p style="font-weight: bold; color: black;">
					Follow us
				</p>
				<p>	
					  <i class="fab fa-facebook social-btn" style="color: #007dbb;"></i>
					<i class="fab fa-twitter social-btn" style="color: #00c8fe;"></i>
					<i class="fab fa-google-plus-square social-btn" style="color: #ef3c29;"></i>
					<i class="fab fa-linkedin social-btn" style="color: #0079bc"></i>
					<i class="fab fa-youtube social-btn" style="color: #e70009"></i>

				</p>
            </div>
			<div class="col-md-3 social-follow">
                <div class="copyright copyright-right">
					<img src="/gmc/wp-content/uploads/2019/02/logo2-1.png"/>
					<div class="copyright-right" style="font-size: 12px">
						Copyright © 2019, GMC Studies.
					 <br>
							All rights reserved.
						
					</div>
					
				</div>
            </div>
        </div>
    </div>
</section>

<?php (wp_footer()); ?>

</body>
</html>
