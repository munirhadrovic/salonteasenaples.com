<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
        <title>Beautiful Nails & Spa</title>
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
				$('#menu-home').slicknav({
					prependTo:'#navigation-menu-home'
				});
			});
			$(function(){
				$('#menu-ourteam').slicknav({
					prependTo:'#navigation-menu-ourteam'
				});
			});
			$(function(){
				$('#menu-patientinfo').slicknav({
					prependTo:'#navigation-menu-patientinfo'
				});
			});
			$(function(){
				$('#menu-services').slicknav({
					prependTo:'#navigation-menu-services'
				});
			});
			$(function(){
				$('#menu-patientform').slicknav({
					prependTo:'#navigation-menu-patientform'
				});
			});
			$(function(){
				$('#menu-newbuffalo').slicknav({
					prependTo:'#navigation-menu-newbuffalo'
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
		    <h1><a href="#page1"><img src="img/logo.png" alt="LOGO"></a></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>">
			<h1>Powered by <a href="http://mobilegrows.com/">MobileGrows</a> | <a href="http://nailsalonsnaples.com/" rel="external">Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/4slide.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/2slide.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/1slide.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
				        <img src="img/slider-images/3slide.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a callfind" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn cf" href="tel:<?php echo $telephone ?>"><img src="img/call.png" alt=""><br/>Call Us</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn cf");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location.png'><br/>Find Us";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn cf");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="<img src='img/location.png'><br/>Find Us";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn cf");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="<img src='img/location.png'><br/>Find Us";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn cf");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location.png'><br/>Find Us";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }
						</script>
												
					</div>	   
				</fieldset>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">About Us</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#ourteam" data-transition="<?php echo $transitionefect ?>">Services</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></div>
				</div>

                <h2>Welcome</h2>
                    <p>Located in Naples, FL 34108, Beautiful Nails & Spa is one of the best nail salons which provide the highest quality-services.</p>


		  </div>
		  

		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page home ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="home" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-home">
						<ul id="menu-home">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Services</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
						</ul>
					</section>
                    <h1>About Us</h1>
                    <h3>Welcome tobr <br/> Beautiful Nails & Spa!</h3>
                    <p>Located in Naples, FL 34108, Beautiful Nails & Spa is one of the best nail salons which provide the highest quality-services.
                        Clients will be pampered & indulged by our talented
                        hands in an airy, clean space with beautiful and stylish interior decoration at Beautiful Nails & Spa.</p>
                    <p>Visit Beautiful Nails & Spa, clients will be easy to find and enjoy happy time with us. From the moment walking through our doors, you will be greeted warmly by our friendly & professional staff members.</p>
                </div>
			</div>
		</div>
		
	<!-- page home ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		

		<!--contact form///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                                <li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Services</a></li>
							</ul>
					</section>	
					<div>
                        <h1>Contact Us</h1>
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/>
							Message:
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea>
							<input type="submit" value="Submit" name="submit" class="btn">
						</form>
					</div>
				</div>
			</div>
		
		</div>

		<!--page contact ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


		<!--Our team///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="ourteam" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-ourteam">
							<ul id="menu-ourteam">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#home" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
							</ul>
					</section>

					<h1>Services</h1>
                    <p>Customer services are often updated and refresh to accommodate all our potential clients. Nails & Spa care products come from well-known brands to have the best result. At Beautiful Nails & Spa, we are committed to deliver services that promote health, wellbeing, comfort, and beauty. At Beautiful Nails & Spa –
                        We are working for nail salon’s services that exceed your expectations.</p>

                    <h3>Manicures</h3>
                    <ul>
                        <li>Gel Polish Manicure </li>
                        <li>Gentleman's Manicure </li>
                        <li>Intensive Healing Manicure </li>
                        <li>Milk & Honey Manicure </li>
                        <li>Youth Restoring Manicure </li>
                    </ul>
                    <h3>Pedicures</h3>
                    <ul>
                        <li>Olive Oil Pedicure </li>
                        <li>Gentleman's Pedicure </li>
                        <li>Red Door Signature Pedicure </li>
                        <li>Intensive Healing Pedicure </li>
                        <li>Youth Restoring Pedicure </li>
                    </ul>
                </div>
			</div>
		</div>
		<!--Our teams ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Patient Info///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="patientinfo" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-patientinfo">
							<ul id="menu-patientinfo">
								<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
								<li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Patient Info</a></li>
								<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
								<li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Patient Forms</a></li>
								<li><a href="#newbuffalo" data-transition="<?php echo $transitionefect ?>">NEW Buffalo Grove Office</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>
					<p>
					Patient Information<br>
					We are now using HouseCalls to remind you of your upcoming appointment.<br>

					You can also receive appointment reminders via TEXT MESSAGE. Simply text DLMMD to 622622. You will receive an immediate response asking for verification to "opt-in" for text reminders. Reply YES. <br>

					In the Patient Information Documents section (below - just scroll down) there are three types of downloadable documents.  They have been included to facilitate your care and wellbeing:<br>
					The first group is for the Initial Office Visit.  These include:<br>
					a.     (IOV) Patient Registration form (two pages),<br>
					b.     (IOV) Medical History form (two pages),<br>
					c.     (IOV) HIPAA privacy policies form (required) along with the <br>
					(IOV)  HIPAA privacy policies acknowledgment form (required), and<br>
					d.     (IOV) Release of Information form, so that I may communicate with other healthcare professionals concerning your care.<br>
					2)      The second group is for subsequent (follow-up) office visits and include:<br>

					a.      (FlwUp) Office Visit form – please fill out before each office visit.<br>
					b.      (FlwUp) Release of Information form – the same form as in the IOV section above.<br>
					3)      The third group is comprised of several diagnosis-specific assessment forms, which you may find useful for monitoring your progress.<br>

					These forms can be filled out at any time – but they should be brought to the office for scoring and interpretation.  This is because screening instruments cannot be used to conclusively make a diagnosis or assess progress.  They are only designed to provide helpful hints: the results must be evaluated in a fuller clinical context.<br> 

					Included in this group are:<br>
					a.      (Asmt) Depression<br>
					b.      (Asmt) Anxiety<br>
					c.      (Asmt) Mood Questionnaire (Bipolar)<br>
					d.      (Asmt) Bipolar Spectrum<br>
					</p>
				</div>
			</div>
		
		</div>
		<!--patient info ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Services///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="services" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-services">
							<ul id="menu-services">
								<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
								<li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Patient Info</a></li>
								<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
								<li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Patient Forms</a></li>
								<li><a href="#newbuffalo" data-transition="<?php echo $transitionefect ?>">NEW Buffalo Grove Office</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>
					<p>
					<strong>Services</strong>
					My practice in is general psychiatry and I am board certified by the American Board of Psychiatry and Neurology. I provide diagnostic evaluation, medication management, individual psychotherapy, fitness for work evaluations, consultations, and treatment planning and recommendation.
					For information on the geriatric services I offer along with Sylvia Pawlik, A.P.N., please go to my other website: www.SeniorPsycare.com.
					</p>
				</div>
			</div>
		
		</div>
		<!--services ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Biography///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="david" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
				<img src="img/dr_mcneil.jpg" alt="">
				<p>
				I grew up in Cincinnati, Ohio and went to college at Amherst College in Massachusetts.  I attended the University of Cincinnati College of Medicine, graduating in 1985, and then had a residency in psychiatry at Rush University Medical  Center in Chicago.  Since then I have worked in private practice.  I see patients in my offices and in a number of geriatric long-term care facilities (nursing homes).  I am on several Advisory Panels for pharmaceutical companies and have served as a spokesman for the National Institute of Mental Health.
 
				Prior to attending medical school I worked in health-care administration and management consulting.  I chose medicine because of the opportunity to serve others.
				 
				During medical school I thought of becoming a neurologist or family practitioner, but decided to go into psychiatry because I came to appreciate that emotional pain and mental dysfunction can be more debilitating and more difficult to overcome or adjust to than many physical ailments. 
				 
				I am a member of the American Society for Clinical Psychopharmacology, the Anxiety Disorders Association of America, the Obsessive-Compulsive Foundation, the Illinois Psychiatric Society, and the American Psychiatric Association.  I am board certified by the American Board of Psychiatry and Neurology.
				</p>	
					
				</div>
			</div>
		
		</div>
		<!--Biography///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Biography///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="sylvia" data-role="page" data-theme="<?php echo $theme ?>" >
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
				<img src="img/sylvia.jpg" alt="">
				<p>
				Note:<br>
				Passed in 1998, the Illinois Nurse Practitioner Act enabled Registered Nurses who have undertaken advanced specialized training to work with physicians in caring for patients.  After completing their training and passing a licensing exam, Nurse Practitioners are able to diagnose and treat patients on their own – including writing prescriptions – so long as their clinical activity is conducted in collaboration with a licensed physician.
				 
				I was born, raised, and studied in Chicago, IL.  After graduating  Magna Cum Laude with a Bachelor of Science in Nursing from Rush  University in 1998, I began my nursing career on the Geriatric Psychiatric unit at Rush University Medical Center.  I worked with older adults with psychiatric and medical illnesses. During the time that I was earning my Master of Science in Nursing  degree, I worked full-time as Nurse Coordinator  at the White Crane Wellness Center’s Adult Day Wellness Program and I was also  an evening charge nurse at a dementia care facility.  In 2003  I received  my MSN from Rush University as both a Geriatric and Adult Nurse Practitioner.
				 
				I now see patients at several long-term care facilities in the
				Chicagoland area for psychiatric evaluations and medication management.  Additionally, I co-present with Dr. McNeil to healthcare professionals on various clinical issues in geriatric psychiatry.  I provide in-service training to long-term care facility nurses on psychotropic medications, recognizing side-effects of these medications, and dealing with problem behaviors.
				 
				I am board-certified as an Adult Nurse Practitioner and a Gerontological Nurse Practitioner by the American Nurses Credentialing Center. I am licensed by the state of Illinois as an Advanced Practice Nurse. I have also been a member of Sigma Theta Tau International Honor Society of Nursing since 1998, a member of the Chicagoland Gerontological Advanced Practice Nurses since 2001, and a member of the Illinois Society of Advanced Practice Nursing since 2004.  I am fluent in the Polish language.
				</p>	
					
				</div>
			</div>
		
		</div>
		<!--Biography///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--patientform///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="patientform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-patientform">
							<ul id="menu-patientform">
								<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
								<li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Patient Info</a></li>
								<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
								<li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Patient Forms</a></li>
								<li><a href="#newbuffalo" data-transition="<?php echo $transitionefect ?>">NEW Buffalo Grove Office</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>
					<p>
					
					<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="documents/Anx.doc" target="_blank" data-transition="<?php echo $transitionefect ?>">Follow-Up - Office Visit - PLEASE FILL OUT FOR EACH VISIT</a></div>
					</div>
					<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
						<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="documents/big.doc" target="_blank" data-transition="<?php echo $transitionefect ?>">Assessment - Bipolar Spectrum Conditon</a></div>
					</div>
					<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
						<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="documents/Bipolar.doc" target="_blank" data-transition="<?php echo $transitionefect ?>">Assessment - Mood Questionnaire</a></div>
					</div>
					<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
						<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="documents/Office.doc" target="_blank" data-transition="<?php echo $transitionefect ?>">Assessment - Anxiety</a></div>
					</div>
					
					</p>
				</div>
			</div>
		
		</div>
		<!--patientform ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--newbuffalo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="newbuffalo" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-newbuffalo">
							<ul id="menu-newbuffalo">
								<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
								<li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Patient Info</a></li>
								<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
								<li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Patient Forms</a></li>
								<li><a href="#newbuffalo" data-transition="<?php echo $transitionefect ?>">NEW Buffalo Grove Office</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>
					<p>
					<strong>NEW Buffalo Grove Office</strong>
					I am finally and very happy to announce our new office location.  Effective August 1, 2011 the Northbrook and Barrington offices will merge and relocate to:
 
					1110 W. Lake Cook Road
					Suite375
					Buffalo Grove, IL 60089
					 
					The phone and fax numbers will not change: Phone (847) 291-8810  Fax (847) 291-8820     
					 
					This is a beautiful and excellently-maintained building in a readily accessible location, in the Buffalo Grove Business Park.  It is seven miles west on Lake Cook Road, under normal driving conditions approximately 10-15 minutes from the Northbrook office.
					 
					In the Buffalo Grove office, I will have more hours available in the mornings, when traffic is less.
					 
					As you may know, this move has been necessitated by indoor air pollution from the basement parking garage seeping into our offices.  The new office has abundant parking and no underground garage.
					 
					I will maintain my Chicago office, at 151 N. Michigan Ave., Suite 911. I will expand my hours there to accommodate anyone who would prefer this location.
					 
					I look forward to continuing our professional relationship in our new, more pleasant location.
					 
					Sincerely,
					 
					 David L. McNeil, M.D.

					Before Your First Visit  to Our New Address PLEASE NOTE!

					We are 1110 W Lake Cook Rd., Eleven Hundred Ten. The building is right on Lake Cook Rd.

					Eleven Hundred (1100) W Lake Cook Rd. is prominently visible from Lake Cook Rd. You will see it before you arrive at or building. This other building is set well off of Lake Cook Rd. 

					We are on WEST Lake Cook Rd. 1110 EAST Lake Cook Rd. is in Wheeling, in the Chevy Chase Business Park.

					Upon approaching Buffalo Grove on Lake Cook Rd.  from the East, you will first enter Buffalo Grove near Milwaukee Avenue. Lake Cook Rd. goes back into Wheeling before re-entering Buffalo Grove.

					A key to  locate our building from the East is “The Three W’s”: Wyndham Inn, Winberie’s Restaurant, and Weiland Rd. After passing “The Three W’s”, the building is just ahead on Lake Cook Rd., on the right.
					</p>
				</div>
			</div>
		
		</div>
		<!--newbuffalo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" >		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
		</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" >
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////-->
	
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
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
