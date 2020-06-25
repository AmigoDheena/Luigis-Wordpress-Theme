<?php get_header() ?>
<?php
    $hero = get_field('hero');
?>

<section class="bg-1 h-900x main-slider pos-relative">
	<div class="triangle-up pos-bottom"></div>
	<div class="container h-100">
		<div class="dplay-tbl">
			<div class="dplay-tbl-cell center-text color-white">

				<h5><b><?php echo $hero['small_title'] ?></b></h5>
				<h1 class="mt-30 mb-15"><?php echo $hero['main_title'] ?></h1>
				<h5><a href="<?php echo $hero['link'] ?>" class="btn-primaryc plr-25"><b><?php echo $hero['link_text'] ?></b></a></h5>
			</div><!-- dplay-tbl-cell -->
		</div><!-- dplay-tbl -->
	</div><!-- container -->
</section>

<section class="story-area left-text center-sm-text pos-relative">
	<div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
	<div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
	<div class="container">
		<div class="heading">
			<img class="heading-img" src="<?php bloginfo('template_directory'); ?>/images/heading_logo.png" alt="">
			<h2>Our Story</h2>
		</div>
        <?php
        $story_info = get_field('story_info');
        ?>
		<div class="row">
			<div class="col-md-6">
				<p class="mb-30"><?php echo $story_info['left_side']?></p>
			</div><!-- col-md-6 -->

			<div class="col-md-6">
                <p class="mb-30"><?php echo $story_info['rigt_side']?></p>
			</div><!-- col-md-6 -->
		</div><!-- row -->
	</div><!-- container -->
</section>

<?php if( have_rows('best_sellers') ): ?>
    <section class="story-area bg-seller color-white pos-relative">
    <div class="pos-bottom triangle-up"></div>
    <div class="pos-top triangle-bottom"></div>
    <div class="container">
    <div class="heading">
        <img class="heading-img" src="<?php bloginfo('template_directory'); ?>/images/heading_logo.png" alt="">
        <h2>Best Sellers</h2>
    </div>
    <div class="row">
        <?php while( have_rows('best_sellers') ): the_row();
            // vars
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $price = get_sub_field('price');
            $link = get_sub_field('link');
            $offer = get_sub_field('offer');
            ?>
            <div class="col-lg-3 col-md-4  col-sm-6 ">
                <div class="center-text mb-30">
                    <div class="ïmg-200x mlr-auto pos-relative">
                        <?php if($offer): ?>
                            <h6 class="ribbon-cont"><div class="ribbon primary"></div><b>OFFER</b></h6>
                        <?php endif; ?>
                        <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <h5 class="mt-20"><?php echo $title ?></h5>
                    <h4 class="mt-5"><b>$<?php echo $price ?></b></h4>
                    <h6 class="mt-20"><a href="<?php echo $link ?>" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
                </div><!--text-center-->
            </div><!-- col-md-3 -->
        <?php endwhile; ?>
    </div><!-- row -->
        <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>SEE TODAYS MENU</b></a></h6>
    </div><!-- container -->
    </section>
<?php endif; ?>

<section>
	<div class="container">
		<div class="heading">
			<img class="heading-img" src="<?php bloginfo('template_directory'); ?>/images/heading_logo.png" alt="">
			<h2>Our Menu</h2>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<ul class="selecton brdr-b-primary mb-70">
					<li><a class="active" href="#" data-select="*"><b>ALL</b></a></li>
					<li><a href="#" data-select="pizza"><b>PIZZA</b></a></li>
					<li><a href="#" data-select="pasta"><b>PASTA</b></a></li>
					<li><a href="#" data-select="salads"><b>SALADS</b></a></li>
					<li><a href="#" data-select="deserts"><b>DESERTS</b></a></li>
				</ul>
			</div><!--col-sm-12-->
		</div><!--row-->

		<div class="row">
			<div class="col-md-6 food-menu pizza">
				<div class="sided-90x mb-30 ">
					<div class="s-left"><img class="br-3" src="<?php bloginfo('template_directory'); ?>/images/menu-1-120x120.jpg" alt="Menu Image"></div><!--s-left-->
					<div class="s-right">
						<h5 class="mb-10"><b>Pizza Margherita</b><b class="color-primary float-right">$12.00</b></h5>
						<p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
					</div><!--s-right-->
				</div><!-- sided-90x -->
			</div><!-- food-menu -->

			<div class="col-md-6 food-menu pizza pasta">
				<div class="sided-90x mb-30 ">
					<div class="s-left"><img class="br-3" src="<?php bloginfo('template_directory'); ?>/images/menu-2-120x120.jpg" alt="Menu Image"></div><!--s-left-->
					<div class="s-right">
						<h5 class="mb-10"><b>Italian pasta</b><b class="color-primary float-right">$20.00</b></h5>
						<p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
					</div><!--s-right-->
				</div><!-- sided-90x -->
			</div><!-- food-menu -->

			<div class="col-md-6 food-menu pasta">
				<div class="sided-90x mb-30 ">
					<div class="s-left"><img class="br-3" src="<?php bloginfo('template_directory'); ?>/images/menu-3-120x120.jpg" alt="Menu Image"></div><!--s-left-->
					<div class="s-right">
						<h5 class="mb-10"><b>Pizza Prosciuto</b><b class="color-primary float-right">$12.00</b></h5>
						<p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
					</div><!--s-right-->
				</div><!-- sided-90x -->
			</div><!-- food-menu -->

			<div class="col-md-6 food-menu salads">
				<div class="sided-90x mb-30">
					<div class="s-left"><img class="br-3" src="<?php bloginfo('template_directory'); ?>/images/menu-4-120x120.jpg" alt="Menu Image"></div><!--s-left-->
					<div class="s-right">
						<h5 class="mb-10"><b>Broschettas</b><b class="color-primary float-right">$6.00</b></h5>
						<p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
					</div><!--s-right-->
				</div><!-- sided-90x -->
			</div><!-- food-menu -->
			<div class="col-md-6 food-menu deserts">
				<div class="sided-90x mb-30">
					<div class="s-left"><img class="br-3" src="<?php bloginfo('template_directory'); ?>/images/menu-5-120x120.jpg" alt="Menu Image"></div><!--s-left-->
					<div class="s-right">
						<h5 class="mb-10"><b>Pizza Margherita</b><b class="color-primary float-right">$12.00</b></h5>
						<p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
					</div><!--s-right-->
				</div><!-- sided-90x -->
			</div><!-- food-menu -->

			<div class="col-md-6 food-menu pizza">
				<div class="sided-90x mb-30 ">
					<div class="s-left"><img class="br-3" src="<?php bloginfo('template_directory'); ?>/images/menu-6-120x120.jpg" alt="Menu Image"></div><!--s-left-->
					<div class="s-right">
						<h5 class="mb-10"><b>Italian pasta</b><b class="color-primary float-right">$20.00</b></h5>
						<p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
					</div><!--s-right-->
				</div><!-- sided-90x -->
			</div><!-- food-menu -->

			<div class="col-md-6 food-menu deserts">
				<div class="sided-90x mb-30">
					<div class="s-left"><img class="br-3" src="<?php bloginfo('template_directory'); ?>/images/menu-7-120x120.jpg"  alt="Menu Image"></div><!--s-left-->
					<div class="s-right">
						<h5 class="mb-10"><b>Pizza Prosciuto</b><b class="color-primary float-right">$12.00</b></h5>
						<p class="pr-70">Maecenas fermentum tortor id fringilla  molestie. In hac habitasse platea dictumst. </p>
					</div><!--s-right-->
				</div><!-- sided-90x -->
			</div><!-- food-menu -->

			<div class="col-md-6 food-menu pasta">
				<div class="sided-90x mb-30 ">
					<div class="s-left"><img class="br-3" src="<?php bloginfo('template_directory'); ?>/images/menu-8-120x120.jpg" alt="Menu Image"></div><!--s-left-->
					<div class="s-right">
						<h5 class="mb-10"><b>Broschettas</b><b class="color-primary float-right">$6.00</b></h5>
						<p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
					</div><!--s-right-->
				</div><!-- sided-90x -->
			</div><!-- food-menu -->
		</div><!-- row -->

		<h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>SEE TODAYS MENU</b></a></h6>
	</div><!-- container -->
</section>
<?php get_footer(); ?>