<?php
/*
Template Name: Home Page
*/
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SF BAY FLYER</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400' rel='stylesheet' type='text/css'>    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    </head>
    <body>

        <div class="header-wrapper">
            <header class="container clearfix">
                <div class="home_link">
                    <ul><li>
                    <a class="logo"  href="#home">SF BAY FLYER</a>
                    </ul></li>
                </div>
                    <nav id="#nav" class="single-page-nav" role="navigation">
                        <a href="#" id="menu-icon"></a>
                        <ul class="navlist">
                            <li><a href="#learn_to_fly">LEARN TO FLY</a></li>
                            <li><a href="#advanced_training">ADVANCED TRAINING</a></li>
                            <li><a class="second-last last" href="#about">ABOUT</a></li>
                            <li><a class="last" href="#contact">CONTACT</a></li>
                        </ul>
                    </nav>
            </header>
        </div>

        <div class="home-wrapper">
            <div id="home">
                 <span data-picture data-alt="Plane Taking Off from a Dusty Airstrip">
                    <span data-src="<?php echo get_template_directory_uri(); ?>/img/takeoff_small.jpg"></span>
                    <span data-src="<?php echo get_template_directory_uri(); ?>/img/takeoff_medium.jpg"     data-media="(min-width: 525px)"></span>
                    <span data-src="<?php echo get_template_directory_uri(); ?>/img/takeoff_large.jpg"      data-media="(min-width: 769px)"></span>

                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                    <noscript>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/takeoff_small.jpg" alt="Plane Taking Off from a Dusty Airstrip">
                    </noscript>
                 </span>

                <div class="home_text_box">
                    <h2 class="home_text_title">You <span class="underline">can</span> learn to fly!</h2>
                    <div class="home_box_bottom clearfix">     
                        <h3 class="home_text_body">I have 19 years of experience teaching people how.</h3>
                        <h3 class="home_text_body">Let me show you an amazing new world.</h3>
                        <h4 class="home_text_name">Aaron Kahn, <span class="cfi">CFI</span></h4>
                    </div><!-- home_box_bottom -->
                </div><!-- .home_text_box -->
            </div> <!-- .home -->
        </div> <!-- #home-wrapper -->

        <div class="fly-wrapper">
            <div class="learn_to_fly">
                <span id="learn_to_fly" class="anchor"></span>
                <div class="learn_header">
                    <h1>LEARN TO FLY</h1>
                </div> <!--learn_header -->
                    <div id="slider_mobile">
                        <span data-picture data-alt="Cessna Over Golden Gate Bridge">
                            <span data-src="<?php echo get_template_directory_uri(); ?>/img/plane_over_bridge_small_thin.jpg"></span>
                            <span data-src="<?php echo get_template_directory_uri(); ?>/img/space.png" data-media="(min-width: 601px)"></span>

                            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                            <noscript>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/space_png" alt="Cessna Over Golden Gate Bridge">
                            </noscript>
                         </span>
                        <p class="learn_mobile_header">Looking for excitement and a challenge?</p>
                        <p class="learn_mobile_headtext">LEARNING TO FLY IS BOTH. AND, ONCE YOU GET YOUR LICENSE, YOU'LL BE ABLE TO ACCESS PERSONAL TRAVEL THAT IS ONLY AVAILABLE TO FELLOW FLYERS.</p>
                        <p class="learn_mobile_question">How do I get started?</p>
                        <p class="learn_mobile_answer">You’ll take an introductory flight lesson with <a href="#about" class="me_link">me</a>. The lesson will last about an hour. Bring a friend, too!</p>

                        <span data-picture data-alt="Cessna over a Lake">
                            <span data-src="<?php echo get_template_directory_uri(); ?>/img/cessna_lake_small_thin.jpg"></span>
                            <span data-src="<?php echo get_template_directory_uri(); ?>/img/space.png" data-media="(min-width: 601px)"></span>

                            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                            <noscript>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/space.png" alt="Cessna Over a Lake">
                            </noscript>
                         </span>
                        <p class="learn_mobile_headtext">I have over 2,000 hours of flight instruction time logged.</p>
                        <p class="learn_mobile_question">What will happen on my lesson?</p>
                        <p class="learn_mobile_answer">You’ll fly in a trainer airplane with you sitting at the controls in the left front seat. I will sit right next to you and have a set of controls also. You’ll have an opportunity to control the airplane after a short in-flight orientation.</p>

                        <span data-picture data-alt="Cessna Cockpit">
                            <span data-src="<?php echo get_template_directory_uri(); ?>/img/cessna_cockpit_small_thin.jpg"></span>
                            <span data-src="<?php echo get_template_directory_uri(); ?>/img/space.png" data-media="(min-width: 601px)"></span>

                            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                            <noscript>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/space.png" alt="Cessna Cockpit">
                            </noscript>
                         </span>
                        <p class="learn_mobile_headtext">If you can drive a car, you can learn how to fly.</p>
                        <p class="learn_mobile_question">At which airport will I fly?</p>
                        <p class="learn_mobile_answer">You will take off and land at Palo Alto Airport, in the heart of Silicon Valley.</p>
                        <p class="mobile_contact"><a href="#contact">CONTACT ME TO BOOK YOUR INTRODUCTORY LESSON.</a></p>


                    </div> <!-- #mobile_slider -->
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">

                             <span data-picture data-alt="Cessna Over Golden Gate Bridge" data-title="#learn_1">
                                <span data-src="<?php echo get_template_directory_uri(); ?>/img/space.png"></span>
                                <span data-src="<?php echo get_template_directory_uri(); ?>/img/plane_over_bridge_medium.jpg" data-media="(min-width: 601px)"></span>
                                <span data-src="<?php echo get_template_directory_uri(); ?>/img/plane_over_bridge_large.jpg" data-media="(min-width: 769px)"></span>

                                <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                                <noscript>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/plane_over_bridge_small.jpg" alt="Cessna Over Golden Gate Bridge" title="#learn_1">
                                </noscript>
                             </span>

                             <span data-picture data-alt="Flying over a Lake" data-title="#learn_2">
                                <span data-src="<?php echo get_template_directory_uri(); ?>/img/space.png"></span>
                                <span data-src="<?php echo get_template_directory_uri(); ?>/img/cessna_lake_medium.jpg" data-media="(min-width: 601px)"></span>
                                <span data-src="<?php echo get_template_directory_uri(); ?>/img/cessna_lake_large.jpg" data-media="(min-width: 769px)"></span>

                                <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                                <noscript>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cesna_lake_small.jpg" alt="Flying over a Lake" title="#learn_2">
                                </noscript>
                             </span>

                            <span data-picture data-alt="Cessna Cockpit" data-title="#learn_3">
                                <span data-src="<?php echo get_template_directory_uri(); ?>/img/space.png"></span>
                                <span data-src="<?php echo get_template_directory_uri(); ?>/img/cessna_cockpit_medium.jpg" data-media="(min-width: 601px)"></span>
                                <span data-src="<?php echo get_template_directory_uri(); ?>/img/cessna_cockpit_large.jpg" data-media="(min-width: 769px)"></span>

                                <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                                <noscript>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cesna_cockpit_small.jpg" alt="Cessna Cockpit" title="#learn_3">
                                </noscript>
                             </span>
                        </div>
                        <div id="learn_1" class="nivo-html-caption">
                            <p class="learn_1_header">Looking for excitement and a challenge?</p>
                            <div class="learn_1_textwrap">
                                <p class="learn_1_headtext">LEARNING TO FLY IS BOTH. AND, ONCE YOU GET YOUR LICENSE, YOU'LL BE ABLE TO ACCESS PERSONAL TRAVEL THAT IS ONLY AVAILABLE TO FELLOW FLYERS.</p>
                                <p class="learn_1_question">How do I get started?</p>
                                <p class="learn_1_answer">You’ll take an introductory flight lesson with <a href="#about" class="me_link">me</a>. The lesson will last about an hour. Bring a friend, too!</p>
                                <a class="nivo-nextNav next_text">NEXT</a>
                            </div>
                        </div>
                         <div id="learn_2" class="nivo-html-caption">
                            <p class="learn_1_header">I have over 2,000 hours of flight instruction time logged.</p>
                            <div class="learn_2_textwrap">

                                <p class="learn_1_question">What will happen on my lesson?</p>
                                <p class="learn_1_answer">You’ll fly in a trainer airplane with you sitting at the controls in the left front seat. I will sit right next to you and have a set of controls also. You’ll have an opportunity to control the airplane after a short in-flight orientation.</p>
                                <a class="nivo-nextNav next_text">NEXT</a>                   
                            </div>
                         <div id="learn_3" class="nivo-html-caption">
                            <p class="learn_1_header">If you can drive a car, you can learn how to fly.</p>
                            <div class="learn_1_textwrap">
                                <p class="learn_1_question">At which airport will I fly?</p>
                                <p class="learn_1_answer">You will take off and land at Palo Alto Airport, in the heart of Silicon Valley.</p>
                                <p class="next_text_2"><a href="#contact">CONTACT ME TO BOOK YOUR <span class="no-wrap">INTRODUCTORY LESSON.</span></a></p>                   
                            </div>                       
                        </div>
                    </div><!-- .theme-default -->
            </div> <!-- #learn_to_fly -->
        </div> <!-- #fly-wrapper -->

        <div class="advanced-wrapper">
            <div class="advanced_training">
                <span id="advanced_training" class="anchor"></span>
                <div class="advanced_header">
                    <h1>ADVANCED TRAINING</h1>
                </div> <!--learn_header -->
                <div class="advanced_img_container">    
                    <div class="advanced_tablet_wrap">
                        <p class="advanced_title_top">PRIVATE AND COMMERCIAL PILOTS:</p>
                        <p class="advanced_title_under">I'm qualified to teach all Land Airplane ratings. Here are the most popular courses:</p> 
                        <div class="advanced_box_1">
                            <p class="advanced_title advanced_box_1_top">INSTRUMENT RATING</p>
                            <p class="advanced_text">Adds utility and safety to your license. We get a lot of marine layer here in the Bay Area: as an instrument-rated pilot, you won't have to worry about it! Don't limit yourself to VFR weather conditions - start your instrument training today.</p>
                            <p class="advanced_title">G1000/GLASS COCKPIT</p>
                            <p class="advanced_text">Catch the wave of the future  and get proficient using the "glass" cockpit. We use a C172S "Nav III" G1000-equipped airplane, and a Redbird AATD with G1000 panel to complement your training. Both the plane and the simulator are excellent ways to increase your confidence and skills with Technologically Advanced Aircraft.</p>
                            <p class="advanced_title">BIENNIAL FLIGHT REVIEW</p>
                            <p class="advanced_text">Every pilot needs one every 24 months. My goal is to teach you something new as well as help you brush up on your skills.</p>
                         </div>
                         <div class="advanced_box_2">   
                            <p class="advanced_title advanced_box_2_top">INSTRUMENT PROFICIENCY CHECK</p>
                            <p class="advanced_text">Get instrument current! We can use the excellent Redbird AATD, which has both traditional and G1000 panels, or any instrument trainer.</p>
                            <p class="advanced_title">MOUNTAIN CHECKOUT</p>
                            <p class="advanced_text">Want to fly over the Sierra mountains to destinations like Reno, Lake Tahoe, and Las Vegas? Learn what you need to know to keep you safe as you traverse high terrain. I have 16 crossings of the Continental Divide (in light aircraft) in my extensive mountain experience, which I'll pass on to you during your mountain training with me.</p>
                            <p class="advanced_title">FLIGHT INSTRUCTOR - INSTRUMENT</p>
                            <p class="advanced_text">Expand your repertoire as a flight instructor. You'll enjoy the variety of new students you can engage and be qualified to give Instrument Proficiency Checks, which are in relatively high demand. Aside from the Private Pilot ASEL certificate, this is the most popular rating pursued by club members.</p>
                         </div>
                     </div>
                </div> <!-- .advanced_img_container -->
            </div> <!-- #advanced_trainging -->
        </div> <!-- .advanced-wrapper -->


        <div class="about-wrapper">
            <div id="about">
                <span id="about" class="anchor"></span>
                <div class="about_header">
                    <h1>ABOUT</h1>
                </div> <!--learn_header -->
                <div class="about_box_wrap">
                        <span data-picture data-alt="Photo of Aaron Kahn, CFI">
                        <span data-src="<?php echo get_template_directory_uri(); ?>/img/aaron_kahn_small.jpg"></span>
                        <span data-src="<?php echo get_template_directory_uri(); ?>/img/aaron_kahn_small_medium.jpg"     data-media="(min-width: 600px)"></span>
                        <span data-src="<?php echo get_template_directory_uri(); ?>/img/aaron_kahn_medium.jpg"     data-media="(min-width: 768px)"></span>
                        <span data-src="<?php echo get_template_directory_uri(); ?>/img/aaron_kahn_large.jpg"      data-media="(min-width: 1000px)"></span>

                        <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                        <noscript>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/aaron_kahn_small.jpg" alt="Photo of Aaron Kahn, CFI">
                        </noscript>
                    </span>
                    <div class="about_box">
                        <p class="about_name">Aaron Kahn, <span class="cfi">FAA Certified Flight Instructor</span></p>
                        <p class="about_info">Total flight hours: 6,100</p>
                        <p class="about_info">Instructor hours: 2,200</p>
                        <p class="about_info">Active instructor since 1994</p>

                        <p class="about_text about_text_margin">I became a CFI in 1994 while attending Embry-Riddle Aeronautical University in Arizona. I got a BS in piloting there in 1996. After graduation, I instructed at several schools including the Korean Air program at Sierra Academy in Livermore.</p>
                        <p class="about_text">I got my first commercial piloting job for Ameriflight in Oakland, hauling cancelled checks and UPS cargo in single-pilot operations. There I flew the Piper Lance, the twin-turbocharged Piper Chieftain, and the Beech 99 twin-turboprop. I then got hired at US Airways Express/Colgan Air, where I flew the Beech 1900 nineteen-seater for 18 months as a first officer then 6 months as a captain, and was based on the East coast.</p>
                        <p class="about_text">I left Colgan and moved back to San Francisco, where I instructed again. I also spent some time as a jet first officer in the Cessna Citation and Hawker. I also became active in the Civil Air Patrol flying program, where I became a Search and Rescue Mission Pilot and a Check Pilot Examiner.</p>
                        <p class="about_text">In 2005, I formed my own ferry pilot company, and since have flown over 50,000 miles of ferrying airplanes all over the US and Canada, twice to Guatemala, and once over the North Atlantic to Denmark. I also spent the summer of 2009 flying charter out of Juneau, Alaska. I’ve been at Advanced Flyers since February 2011.</p>
                        <p class="about_text">My endorsements include Private, Instrument, Multi-Engine, Commercial, Initial CFI (Flight Instructor), CFI-Instrument, and CFI-Multi-Engine ratings. I’ve also trained, endorsed and supervised 11 first-solo flights.</p>
                    </div>
                </div>

            </div> <!-- #about_trainging -->
        </div> <!-- #about-wrapper -->

        <div class="contact-wrapper">
            <div class="contact_training">
                <span id="contact" class="anchor"></span>
                <div class="contact_header">
                    <h1>CONTACT</h1>
                </div> <!--learn_header -->
                <div class="contact_container clearfix">
                    <div class="contact_info_form">
                        <p class="contact_title">Aaron Kahn, <span class="cfi">CFI</span></p>
                        <p class="contact_phone">p. 415.683.3628</p>
                        <p class="contact_email contact_email_space">e. aaron@sfbayflyer.com</p>
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                        <?php endif; ?>

                    </div>    
                    <div class="contact_map">
                        <p class="contact_airport_title">Advanced Flyers</p>
                        <p class="contact_airport_address">1901 Embarcadero Road, Suite 106</p>
                        <p class="contact_airport_address">Palo Alto, CA 94303</p>
                        <p class="contact_airport_address">p. 650.494.1646</p>
                        <p class="contact_airtport_undertitle">click on map for full information and directions</p>
                        
                        <a href="http://goo.gl/maps/IeuqL" class="google_map" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/space.png" />
                        </a>
                    </div>

                </div> <!-- .contact_container -->
            </div> <!-- #contact_trainging -->
        </div> <!-- .contact-wrapper -->

        <div class="ground-wrapper">
            <div class="ground_training">
                <span id="groundschools" class="anchor"></span>
                <div class="ground_header">
                    <h1>GROUND SCHOOLS</h1>
                </div> <!--ground_header -->
                <div class="ground_img_container">    
                    <div class="ground_tablet_wrap">
                        <p class="ground_top">In-Person | Classroom | FAA Pilot</p>
                        <p class="ground_title">GROUND SCHOOLS</p>
                        <p class="ground_airport">Palo Alto Airport</p>
                        <p class="ground_10week">10-Week Evening Courses</p>
                        <div class="clearfix">
                            <div class="ground_wednesday_block">
                                <p class="ground_days_top">Wednesdays Evenings</p>
                                <p class="ground_days_title">Private Pilot</p>
                                <p class="ground_days_under">Start your flying adventure here!</p>
                            </div>
                            <div class="ground_thursday_block">
                                <p class="ground_days_top">Thursday Evenings</p>
                                <p class="ground_days_title">Instrument Rating</p>
                                <p class="ground_days_under">Take your pilot's license to the next level!</p>
                            </div>
                        </div>
                        <p class="ground_times">All classes are from 6:30 to 8:30PM</p>
                        <div class="ground_instructor_box clearfix">
                            <div class="ground_instructor_left">
                            </div>
                            <div class="ground_instructor_right">
                                <p class="ground_instruct_top">Your Instructor</p>
                                <p class="ground_instruct_name">Aaron Kahn</p>
                                <p class="ground_instruct_under">- Certified Flight Instructor</p>
                                <p class="ground_instruct_under">- Airline Transport Pilot</p>
                                <p class="ground_instruct_under">- 19 years of instructing experience</p>
                            </div>
                        </div>
                        <ul class="ground_bullets">
                            <li>Get the knowledge every pilot needs</li>
                            <li>Learn and interact in a small classroom enviorment</li>
                            <li>Ask questions; have discussions; get insight from peers</li>
                        </ul>
                        <div class="ground_hr"></div>
                        <p class="ground_corses_title">4 courses of both subjects offered in 2014</p>
                        <div class="ground_hr"></div>
                        <div class="clearfix">
                            <div class="ground_dates_left">
                                <p class="ground_dates_title">Start Dates</p>
                                <p class="ground_dates_info">January 8th / 9th</p>
                                <p class="ground_dates_info">April 2nd / 3rd</p>
                                <p class="ground_dates_info">July 2nd / 3rd</p>
                                <p class="ground_dates_info">October 1st / 2nd</p>
                            </div>
                            <div class="ground_dates_right">
                                <p class="ground_dates_right_title">2 Hours</p>
                                <p class="ground_dates_right_under bold">Once a Week</p>
                                <p class="ground_dates_right_diamonds"></p>
                                <p class="ground_dates_right_under">Join Anytime</p>
                                <p class="ground_dates_right_under">No Prerequisites</p>
                            </div>
                                <p class="ground_20">$20 per unit</p>
                                <p class="ground_20_line">To keep instructor-student ratio low,</p>
                                <p class="ground_20_line">Only <strong>10</strong> seats are available each unit. <i>Reserve Now!</i></p>
                        </div>
                        <div class="ground_hr"></div>
                        <div class="ground_sign_up_box">
                            <div class="ground_sign_up_left">
                                <p class="ground_sign_up_title">To sign up:</p>
                            </div>
                            <div class="ground_sign_up_right">
                                <p class="ground_sign_up_text">contact <span class="bold">Aaron Kahn</span> or <span class="bold">Advanced Flyers</span></p>
                                <p class="ground_sign_up_text"><span class="bold">(415) 683-3628 | Aaron@AdvancedFlyers.com</span></p>
                                <p class="ground_sign_up_text">or use the contact form on this website - <a href="#contact">here</a></p>
                            </div>
                        </div> 
                    </div> <!-- .ground_tablet -->
                </div> <!-- .ground_img_container -->
            </div><!-- #ground_training -->
        </div> <!-- .ground-wrapper -->



        <div class="footer-container">
            <footer class="wrapper">
                
            </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
