<?php
/*
Template Name: Contact
Author : Amigo Dheena
*/

get_header();
$contact_hero = get_field('contact_hero');
?>

<section class="bg-6 h-500x main-slider pos-relative" style="background: url('<?php the_post_thumbnail_url() ?>') no-repeat center;  background-size: cover;" >
    <div class="triangle-up pos-bottom"></div>
    <div class="container h-100">
        <div class="dplay-tbl">
            <div class="dplay-tbl-cell center-text color-white pt-90">
                    <h5><b><?php echo $contact_hero['small_title']; ?></b></h5>
                    <h3 class="mt-30 mb-15"><?php echo $contact_hero['long_title']; ?></h3>
            </div><!-- dplay-tbl-cell -->
        </div><!-- dplay-tbl -->
    </div><!-- container -->
</section>
<?php
$say_hello = get_field('say_hello');
?>
<section class="story-area left-text center-sm-text">
    <div class="container">
        <div class="heading">
            <img class="heading-img" src="<?php bloginfo('template_directory'); ?>/images/heading_logo.png" alt="">
            <h2><?php echo $say_hello['small_title']; ?></h2>
            <h5 class="mt-10 mb-30"><?php echo $say_hello['long_title']; ?></h5>
            <p class="mx-w-700x mlr-auto"><?php echo $say_hello['description']; ?></p>
        </div>
        <form class="form-style-1 placeholder-1">
            <!--<div class="row">
                <div class="col-md-6"> <input class="mb-20" type="text" placeholder="Name">  </div>
                <div class="col-md-6"> <input class="mb-20" type="text" placeholder="E-mail">  </div>
                <div class="col-md-12"><input class="mb-20" type="text" placeholder="Subject">  </div>
                <div class="col-md-12">
                    <textarea class="h-200x ptb-20" placeholder="Message"></textarea>
                </div>
            </div>
            <h6 class="center-text mtb-30"><a href="#" class="btn-primaryc plr-25"><b>SEND MESSAGE</b></a></h6> -->
            <?php echo do_shortcode('[contact-form-7 id="139" title="Contact form 1"]'); ?>
        </form> 
    </div><!-- container -->
</section>


<div class="map-area h-700x mb--30">
        <div id="map" style="height:100%;"></div>
</div><!-- map-area -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-oEyU88bRR6xcbV1gI_Cahc8ugKC_JPE&callback=initMap"></script>
<?php get_footer();