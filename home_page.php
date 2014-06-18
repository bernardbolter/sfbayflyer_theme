<?php
/*
Template Name: Home Page
*/
?>

<?php get_template_part( 'header' ); ?>

<?php get_template_part( 'nav' ); ?>

<?php get_template_part( 'hero' ); ?>

<?php get_template_part( 'fly' ); ?>

<?php get_template_part( 'advanced' ); ?>

<?php get_template_part( 'about' ); ?>

<?php get_template_part( 'testa' ); ?>

<?php get_template_part( 'video' ); ?>

<?php get_template_part( 'contact' ); ?>

<?php get_template_part( 'ground' ); ?>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

         ga('create', 'UA-48874129-1', 'sfbayflyer.com');
         ga('send', 'pageview');

        </script>
    </body>
</html>
