<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Codelation Default
 * @since Codelation Default 0.1
 */
?>

	</div><!-- .site-content -->

	<!--Begin CTCT Sign-Up Form-->
	<!-- EFD 1.0.0 [Thu Mar 02 10:44:21 EST 2017] -->
	<div class="ctct-embed-signup newsletter-sign-up-wrapper">
		<div>
			<span id="success_message" style="display:none;">
				<div style="text-align:center;">Thanks for signing up!</div>
			</span>
			<form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
				<p></p>
				<!-- The following code must be included to ensure your sign-up form works properly. -->
				<input data-id="ca:input" type="hidden" name="ca" value="9b075ce0-089d-4f27-8c03-1031aa6a192d">
				<input data-id="list:input" type="hidden" name="list" value="5">
				<input data-id="source:input" type="hidden" name="source" value="EFD">
				<input data-id="required:input" type="hidden" name="required" value="list,email,first_name,last_name">
				<input data-id="url:input" type="hidden" name="url" value="">
				<div class="fields-wrapper">
					<span class="newsletter-heading">Newsletters</span>
					<p data-id="First Name:p" ><label data-id="First Name:label" data-name="first_name" class="ctct-form-required text-field">First Name</label> <input data-id="First Name:input" type="text" name="first_name" value="" maxlength="50" placeholder="First Name" class="text-field"></p>
					<p data-id="Last Name:p" ><label data-id="Last Name:label" data-name="last_name" class="ctct-form-required">Last Name</label> <input data-id="Last Name:input" type="text" name="last_name" value="" maxlength="50" placeholder="Last Name" class="text-field"></p>
					<p data-id="Email Address:p" ><label data-id="Email Address:label" data-name="email" class="ctct-form-required">Email Address</label> <input data-id="Email Address:input" type="text" name="email" value="" maxlength="80" placeholder="Email" class="email-field"></p>
					<button type="submit" data-enabled="enabled">Sign Up</button>
				</div>
			</form>
		</div>
	</div>
	<script type='text/javascript'>
	   var localizedErrMap = {};
	   localizedErrMap['required'] = 		'This field is required.';
	   localizedErrMap['ca'] = 			'An unexpected error occurred while attempting to send email.';
	   localizedErrMap['email'] = 			'Please enter your email address in name@email.com format.';
	   localizedErrMap['birthday'] = 		'Please enter birthday in MM/DD format.';
	   localizedErrMap['anniversary'] = 	'Please enter anniversary in MM/DD/YYYY format.';
	   localizedErrMap['custom_date'] = 	'Please enter this date in MM/DD/YYYY format.';
	   localizedErrMap['list'] = 			'Please select at least one email list.';
	   localizedErrMap['generic'] = 		'This field is invalid.';
	   localizedErrMap['shared'] = 		'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
	   localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
		localizedErrMap['state_province'] = 'Select a state/province';
	   localizedErrMap['selectcountry'] = 	'Select a country';
	   var postURL = 'https://visitor2.constantcontact.com/api/signup';
	</script>
	<script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
	<!--End CTCT Sign-Up Form-->

	<footer class="footer">
	  <div class="content-wrapper">
			<div class="footer-navigation">
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<nav class="menu main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'Codelation Default' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer_menu',
								'footer_menu' => 'menu',
							 ) );
						?>
					</nav><!-- .main-navigation -->
				<?php endif; ?>
				<div class="footer-socials">
					<a class="social" href="http://www.facebook.com/plainsartmuseum" target="_blank">
						<img src="/wp-content/themes/plains-art-museum/assets/images/navigation/facebook.png" alt="Like Codelation Default on Facebook!" title="Like Codelation Default on Facebook!">
					</a>
					<a class="social" href="http://twitter.com/plainsartmuseum" target="_blank">
						<img src="/wp-content/themes/plains-art-museum/assets/images/navigation/twitter.png" alt="Follow Codelation Default on Twitter!" title="Follow Codelation Default on Twitter!">
					</a>
					<a class="social" href="https://www.instagram.com/plainsartmuseum" target="_blank">
						<img src="/wp-content/themes/plains-art-museum/assets/images/navigation/instagram.png" alt="Follow Codelation Default on Instagram!" title="Follow Codelation Default on Instagram!">
					</a>
				</div>
			</div>
	    <div class="location">
	      <div class="map">
					<img src="https://maps.googleapis.com/maps/api/staticmap?center=704%20First%20Avenue%20North%20Fargo,%20North%20Dakota%2058102&zoom=15&size=627x220&maptype=roadmap&markers=color:blue%7C46.876919,-96.791838&key=AIzaSyCALkxGzOLDcLFcDQ_pbYXT0WzaSR-xQ1Y" />
	      </div>
	      <div itemscope itemtype="http://schema.org/LocalBusiness" class="contacts">
	        <div class="address" itemprop="name"><span class="name">Codelation Default</span><span itemprop="streetAddress">704 First Ave N</span> <span itemprop="addressLocality">Fargo</span>, <span itemprop="addressRegion">ND</span> <span itemprop="postalCode">58102</span></div>
	        <div class="phone-number" itemprop="telephone">701.551.6100</div>
	        <meta itemprop="latitude" content="46.876919" />
	        <meta itemprop="longitude" content="-96.791838" />
	      </div>
	    </div>
	    <div class="hours">
	      <div class="weekly-hours">
	        <div class="hours-heading">
	          Hours
	        </div>
					<? get_template_part("business-hours"); ?>
	      </div>
	    </div>
	  </div>
	</footer>
	<?php wp_footer(); ?>

	<script type="text/javascript">
    $(document).ready(function(){
			if($('.bxslider').length) {
	      $('.bxslider').bxSlider({
	        autoStart: true,
					controls: bxControls,
	        pager: false
	      });
			}
    });
  </script>

	<script>
		if($("#wpadminbar").length) {
			$(".main-menu-wrapper.fixed").css('margin-top', '32px');
		}
		$menu = $(".main-menu-wrapper");
		$menuButton = $(".menu-btn");
		$siteOverlay = $(".site-overlay");
		$menuButton.click(function(){
			if($menu.hasClass('show')) {
				$menu.removeClass('show').fadeOut('fast');
				$menuButton.removeClass('align-right');
				$siteOverlay.hide();
			} else {
				$menu.addClass('show').fadeIn('fast');
				$menuButton.addClass('align-right');
				$siteOverlay.show();
			}
		});
		if($('body').hasClass('home')) {
			var $menu = $(".main-menu-wrapper");
			var menuOffset = $menu.offset();
			var menuHeight = $menu.height();
			var extraOffset = 0;
			if($("#wpadminbar").length) {
				extraOffset = 32;
			}
			if($(window).width() > 767) {
				$(document).on("scroll", function(e) {
				  if ($(window).scrollTop() > (menuOffset.top - extraOffset)) {
				    $(".main-menu-wrapper").addClass("fixed").css("margin-top", extraOffset + "px");
						$(".main-content").css("margin-top", menuHeight + "px");
						$(".flat-logo").show();
				  } else {
				    $(".main-menu-wrapper").removeClass("fixed").css("margin-top", "0");
						$(".main-content").css("margin-top", "0");
						$(".flat-logo").hide();
				  }
				});
			}
		}
	</script>

	<? $menu_images = get_menu_thumbnails() ?>
	<style>
		.primary-menu li:nth-child(2) .sub-menu:after {
			background-image: url(<?= $menu_images[0] ?>);
			background-size: cover;
		}
		.primary-menu li:nth-child(3) .sub-menu:after {
			background-image: url(<?= $menu_images[1] ?>);
			background-size: cover;
		}
		.primary-menu li:nth-child(4) .sub-menu:after {
			background-image: url(<?= $menu_images[2] ?>);
			background-size: cover;
		}
		.primary-menu li:nth-child(5) .sub-menu:after {
			background-image: url(<?= $menu_images[3] ?>);
			background-size: cover;
		}
	</style>
</body>
</html>
