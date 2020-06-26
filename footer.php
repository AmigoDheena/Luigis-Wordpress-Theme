<footer class="pb-50  pt-70 pos-relative">
	<div class="pos-top triangle-bottom"></div>
	<div class="container-fluid">
		<a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo-white.png" alt="Logo"></a>
<?php
	$footer_acf = get_field('footer');
	$address = get_field('address');
	$phone = get_field('phone');
	$email = get_field('email');
	$facebook= get_field('facebook');
	$twitter= get_field('twitter');
	$linkedin= get_field('linkedin');
	?>
		<div class="pt-30">
			<p class="underline-secondary"><b>Address:</b></p>
			<p><?php echo $address; ?></p>
		</div>

		<div class="pt-30">
			<p class="underline-secondary mb-10"><b>Phone:</b></p>
			<a href="tel:+53 345 7953 32453 "><?php echo $phone; ?></a>
		</div>

		<div class="pt-30">
			<p class="underline-secondary mb-10"><b>Email:</b></p>
			<a href="mailto:yourmail@gmail.com"> <?php echo $email; ?></a>
		</div>

		<ul class="icon mt-30">
			<li><a href="<?php echo $facebook; ?>"><i class="ion-social-facebook"></i></a></li>
			<li><a href="<?php echo $twitter; ?>"><i class="ion-social-twitter"></i></a></li>
            <li><a href="<?php echo $linkedin; ?>"><i class="ion-social-linkedin"></i></a></li>
<!--			<li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>-->
<!--            <li><a href="#"><i class="ion-social-pinterest"></i></a></li>			-->
<!--			<li><a href="#"><i class="ion-social-vimeo"></i></a></li>-->
		</ul>

		<p class="color-light font-9 mt-50 mt-sm-30"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	</div><!-- container -->
</footer>
<?php wp_footer(); ?>
</body>
</html>