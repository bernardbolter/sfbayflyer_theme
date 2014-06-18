<div class="contact-wrapper">
    <div class="contact_training">
        <span id="contact" class="anchor"></span>
        <div class="contact_header">
            <h1>CONTACT</h1>
        </div> <!--learn_header -->
        <div class="contact_container clearfix">
            <div class="contact_info_form">
                <div class="contact_name_box clearfix">
                    <p class="contact_title">Aaron Kahn, <span class="cfi">CFI</span></p>
                    <p class="contact_phone">p. 415.683.3628</p>
                    <p class="contact_email contact_email_space">e. aaron@sfbayflyer.com</p>
                </div>
                <div class="contact_social_box clearfix">
                    <ul>
                        <li class="s-facebook"><a href="https://www.facebook.com/pages/SF-Bay-Flyer/163545050374325"><span class="icon-facebook"></span></a></li>
                        <li class="s-youtube"><a href="http://www.youtube.com/user/aaronwk28/videos"><span class="icon-youtube"></span></a></li>
                        <li class="s-instagram"><a href="http://instagram.com/sfbayflyer"><span class="icon-instagram"></span></a></li>
                        <li class="s-google"><a href="https://plus.google.com/111897635476482236330/about"><span class="icon-googleplus"></span></a></li>
                    </ul>
                </div> <!-- contact_social_box -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
                <?php endif; ?>

            </div>    
            <div class="contact_map">
                <p class="contact_airport_title">SF Bay Flyer</p>
                <p class="contact_airport_address">1901 Embarcadero Road, Suite 106</p>
                <p class="contact_airport_address">Palo Alto, CA 94303</p>
                <p class="contact_airport_address">p. (415) 683-3628</p>
                <p class="contact_airtport_undertitle">click on map for full information and directions</p>
                
                <a href="https://goo.gl/maps/aV1I1" class="google_map" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/space.png" />
                </a>
            </div>

        </div> <!-- .contact_container -->
    </div> <!-- #contact_trainging -->
</div> <!-- .contact-wrapper -->