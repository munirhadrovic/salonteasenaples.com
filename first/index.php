<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
	<script src="js/jquery-1.11.2.js"></script>
	<script>
		$(document).on("mobileinit", function(evt) {
			// Change some settings
			$.mobile.defaultPageTransition = "flip";
			$.mobile.pageLoadErrorMessage = "Whoops!";
			$.mobile.pageLoadErrorMessageTheme = "b";
		});
	</script>
	<script src="js/jquery.mobile-1.4.5.js"></script>
	<link rel="stylesheet" href="css/slicknav.css" />
	<script src="js/jquery.slicknav.js"></script>
	<script type="text/javascript" src="js/responsiveslides.js"></script>
	<link rel="stylesheet" href="css/style-mobile.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>

		$(function(){
			$( "[data-role='header'], [data-role='footer']" ).toolbar();
		});
		$(function(){
			$('#menu').slicknav({
				prependTo:'#navigation-menu'
			});
		});
		$(function(){
			$('#menu-contact').slicknav({
				prependTo:'#navigation-menu-contact'
			});
		});
		$(function(){
			$('#menu-seo').slicknav({
				prependTo:'#navigation-menu-seo'
			});
		});
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
		$(function () {
			// Slideshow web
			$("#slider-web").responsiveSlides({
				auto: true,
				pager: false,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>

</head>
<body>

<?php
include 'settings.php';


?>
<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
	<h1><img src="img/logo.png" alt="LOGO"></h1>
</div>
<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
	<h1>Powered by <a href="http://mobilegrows.com" rel="external">Mobilegrows.com</a> |<a href="http://www.salonteasenaples.com/" rel="external">  Desktop Site</a></h1>
</div>
<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
	<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		<!-- Jssor Slider Begin -->
		<a name="tops"></a>
		<div class="callbacks_container">
			<ul class="rslides" id="slider4">
				<li>
					<img src="img/slider-images/1slide.jpg" alt="Slider images">
<!--					<p class="caption">NEW! Premium Linen Service</p>-->
				</li>
				<li>
					<img src="img/slider-images/2slide.jpg" alt="Slider images">
<!--					<p class="caption">Never a Missing Button</p>-->
				</li>
				<li>
					<img src="img/slider-images/3slide.jpg" alt="Slider images">
<!--					<p class="caption">Couture & Designer Garment Cleaning</p>-->
				</li>
				<li>
					<img src="img/slider-images/4slide.jpg" alt="Slider images">
<!--					<p class="caption">Attention to Detail</p>-->
				</li>
				<li>
					<img src="img/slider-images/5slide.jpg" alt="Slider images">
<!--					<p class="caption">Complimentary Pickup & Delivery Service</p>-->
				</li>
				<li>
					<img src="img/slider-images/6slide.jpg" alt="Slider images">
<!--					<p class="caption">Complimentary Pickup & Delivery Service</p>-->
				</li>
				<li>
					<img src="img/slider-images/7slide.jpg" alt="Slider images">
<!--					<p class="caption">Look Your Best</p>-->
				</li>
				<li>
					<img src="img/slider-images/8slide.jpg" alt="Slider images">
<!--					<p class="caption">Women's Shoe Care</p>-->
				</li>

			</ul>
		</div>
		<!-- Jssor Slider End -->
		<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
			<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
			<div class="ui-block-a">
				<a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="#myPopuptelephone" data-rel="popup" data-transition="flow">Call US</a>
			</div>
			<!-- ovdje se upisuje grad i adresa iz koje  -->
			<div class="ui-block-b" id="findUS">
				<a class="ui-btn ui-icon-location ui-btn-icon-right buttons-radius" href="#myPopup" data-rel="popup" data-transition="flow">Find US</a>
			</div>
		</fieldset>
		<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
			<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Out Team</a></div>
		</div>
		<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
			<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Rates</a></div>
		</div>
		<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
			<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">View</a></div>
		</div>
		<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
			<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">FAQ</a></div>
		</div>
		<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
			<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Travel</a></div>
		</div>
		<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
			<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Philosophy</a></div>
		</div>
		<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
			<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Raves</a></div>
		</div>
		<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
			<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Social Media</a></div>
		</div>
		<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
			<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Salon</a></div>
		</div>
		<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
			<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Talk to me</a></div>
		</div>
		<a href="#tops" id="top1" class="backToTop ui-corner-all invisible"></a>


		<!-- pop up for telefon -->
		<div data-role="popup" id="myPopuptelephone" class="ui-content">
			<a href='tel:<?php echo $centratelephone ?>' class="ui-btn">Central Phone</a>
			<?php
			for ($i=0; $i <$companynumber ; $i++) {
				?>
				<a href='tel:<?php echo $telephone[$i] ?>' class="ui-btn"><?php echo $nazivlokacije[$i] ?></a>
				<?php
			}
			?>
		</div>
		<!-- pop up for telefon -->
		<!-- POPUP FOR FIND US -->
		<div data-role="popup" id="myPopup" class="ui-content">
			<div id="multiadress">

			</div>
			<?php
			for ($i=0; $i<$companynumber ; $i++) {

				?>
				<script>
					var ua = navigator.userAgent;
					if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
						console.log("Android uslo");
						var prostordugme=document.getElementById('multiadress');
						var dugme= document.createElement('a');
						dugme.setAttribute('class', "ui-btn findlinks");
						dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?>");
						dugme.innerHTML="<p ><?php echo $nazivlokacije[$i] ?></p>";
						prostordugme.appendChild(dugme);
					}
					else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
						console.log("Iphone ");
						var prostordugme=document.getElementById('multiadress');
						var dugme= document.createElement('a');
						dugme.setAttribute('class', "ui-btn findlinks");
						dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?> ");
						dugme.innerHTML="<p><?php echo $nazivlokacije[$i] ?></p>";
						prostordugme.appendChild(dugme);
					}
					else if (ua.indexOf("BlackBerry") >= 0)
					{

						console.log("Blakberu je prosao ");
						console.log("Blakberu je prosao ")
						var prostordugme=document.getElementById('multiadress');
						var dugme= document.createElement('a');
						dugme.setAttribute('class', "ui-btn findlinks");
						dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?>'}});");
						dugme.innerHTML="<p ><?php echo $nazivlokacije[$i] ?></p>";
						prostordugme.appendChild(dugme);
					}
					else {
						console.log("nije nigdje uslo default ")
						var prostordugme=document.getElementById('multiadress');
						var dugme= document.createElement('a');
						dugme.setAttribute('class', "ui-btn findlinks");
						dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?>");
						dugme.innerHTML="<p ><?php echo $nazivlokacije[$i] ?></p>";
						prostordugme.appendChild(dugme);
					}

					// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
					// // some code..
					// }
				</script>
				<?php
			}
			?>
		</div>
		<!-- POPUP FOR FIND US -->
	</div>
</div>
<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
	<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
			<section id="navigation-menu">
				<ul id="menu" class="menuhide">
					<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
					<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Out Team</a></li>
					<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Rates</a></li>
					<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">View</a></li>
					<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">FAQ</a></li>
					<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Travel</a></li>
					<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Philosophy</a></li>
					<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Raves</a></li>
					<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Social Media</a></li>
					<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Salon</a></li>
					<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Talk to me</a></li>
				</ul>
			</section>
			<p>This is only a <b>PREVIEW</b> version of your Mobile Website.</p>
			<p>Please contatact our official Sales Representative for <b>Full Functional Version.</b></p>
		</div>
	</div>
</div>
<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
	<div data-role="main" class="ui-content" >
		<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
			<section id="navigation-menu-contact">
				<ul id="menu-contact" class="menuhide">
					<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
					<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
					<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
					<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
				</ul>
			</section>
			<div>
				<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
					Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
					E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
					Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
					Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
					Message:<br>
					<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
					<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
				</form>
			</div>
		</div>
	</div>

</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page seo ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">

	<div data-role="main" class="ui-content" >
		<p>The contact form was sent succesful!</p>

	</div>

</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div id="error" data-role="page" data-dialog="true">

	<div data-role="main" class="ui-content" >
		<p>The contact form was sent because of an error!</p>
	</div>

</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
<!-- it works the same with all jquery version from 1.x to 2.x -->

<script type="text/javascript" src="js/responsiveslides.js"></script>


<!-- Slajder se zavrsava -->
<script src="js/easing.js" type="text/javascript"></script>
<!-- UItoTop plugin -->
<script src="js/jquery.ui.totop.js" type="text/javascript"></script>
<!-- Starting the plugin -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		 var defaults = {
		 containerID: 'toTop', // fading element id
		 containerHoverID: 'toTopHover', // fading element hover id
		 scrollSpeed: 1200,
		 easingType: 'linear'
		 };
		 */

		$().UItoTop({ easingType: 'easeOutQuart' });

	});
</script>
</body>
</html>
