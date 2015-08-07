<?php 

include 'admin/var.php';
include 'admin/language.php';

?>

<!DOCTYPE html>
<html lang="en">
<!-- HEAD START -->
<head>
<?php include ("assets/php/head.php"); ?>
<!-- TITLE START -->
<title><?php echo $company_name ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
<!-- TITLE END -->
</head>
<!-- HEAD END -->

<body>

	<!-- NAV START -->
	<?php include ("assets/php/nav.php"); ?>
	<!-- NAV END -->

	<!-- #Header -->

	<header id="header" class="bg-image" role="banner">
		<div class="bg-image-overlay-video-version">
			<div class="container">
				
				<div class="row">

					<div class="col-sm-6">
						<div class="header-text-video-version">
							<h3><?php echo $business; ?> in <?php echo $location; ?></h3>
							<h1>How To Grow Your Business,<br>Save Tax &amp; Increase Profits</h1>
							
							<div class="video_container">
								<?php include ("admin/snippets/video.php"); ?>
							</div>
							<h3><span>Call us now at <?php echo $phone; ?></span></h3>	
						</div>
					</div>

					<img class="arrow" src="assets/images/arrow.png" alt="arrow">

					<div class="col-sm-5 col-sm-offset-1">
						<div class="wts-contact-wrapper">
							<div class="form-heading">
								<h2>Arrange Your Free Meeting Now</h2>
								<p>Complete your details, click the ‘FREE Meeting’ button below and we’ll contact you to arrange the meeting.</p>
							</div>
							<!-- ENQUIRY FORM INCLUDE START -->
							<?php include ("admin/snippets/forms.php"); ?>
							<!-- ENQUIRY FORM INCLUDE END -->
							<p class="form-info"><a href="policy.php">We Respect Your Email Privacy</a></p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</header>

	<!-- Header End -->
	
	<div id="main-content">
		
		<!-- CONTAINER START -->

		<div class="container">

			<div class="content-heading-center" id="about">
				<h2>Contact Us</h2>
				<h4>Our Locations</h4>
			</div>

			<!-- "CONTACT" ROW START -->

			<div class="row">

				<div class="col-sm-12 contact-container">
					<div class="row">
						<div class="col-sm-6 location-map-title">
							<p><?php echo $location; ?></p>
						</div>
						<div class="col-sm-6"></div>
					</div>
					<div class="col-sm-6">
						<div class="google-maps">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4751.992755370819!2d-2.2284120000000005!3d53.450651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb2241bf23f11%3A0x9c667df74ac2d39c!2sManchester+M14+5NJ%2C+UK!5e0!3m2!1sen!2suk!4v1435752958350" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="contact-info">
							<p><span><?php echo $company_name; ?></span></p>
							<p>Address:</p>
							<address>
								<?php echo $address; ?>
							</address>
							<p>Phone:</p>
							<p><span><?php echo $phone; ?></span></p>
							<p>E-mail:</p>
							<p><span><?php echo $email; ?></span></p>
						</div>
					</div>
				</div>

			</div>

		</div>

		<!-- CONTAINER END -->
		
		<div class="clearfix" style="height:80px;"></div>

		<!-- OUTRO COPY START -->
		<div class="container">
		
			<div class="content-heading-center" id="strong-partnership">
				<h3><?php echo $business. ' in ' .$location; ?></h3>
				<h2>Building A Strong Partnership With You</h2>
				<div class="row">
					<div class="col-md-6">
						<p>As you'd expect, we're really good at delivering the <?php echo $business_2; ?> stuff - like <?php echo $compliance; ?>, <?php echo $tax_saving; ?> and profit improvement services ...and all in a very cost-effective way.</p>
						<p>But where we really differ, is how we work <span class="italic">with</span> our clients and the strong emphasis we place on the <span class="bold">'relationship'</span>.</p>
						<p>Unlike other accountants you may have met, we always put your needs ahead of our own. This means we'll always be there when you need us, ready to provide <span class="italic">imaginative</span> and <span class="italic">resourceful</span> <span class="bold">solutions</span> to your financial and business growth challenges.</p>
						<p><span class="underline">Including those challenges you didn't even know existed.</span></p>
						<p>After all, any decent <?php echo $general_kw_1; ?> can produce a good set of accounts. But very few have the skills to create a relationship where the client really sees their accountant as <span class="bold italic">a true asset</span> to their business.</p>

					</div>
					<div class="col-md-6">
						<p>And that's because a great <?php echo $business_3; ?> is one that does <span class="italic">so much more</span> than merely provide <?php echo $business_2; ?> services.</p>
						<p><span class="bold">A great <?php echo $business_3; ?> is one that gives your business the advantage it needs and demands.</span></p>
						<p>And that's where we <span class="italic">really</span> make the difference</p>
						<p>It doesn't matter whether you're just starting out, have an established business or you've been round the block a few times. We know what's required to create a <span class="bold">win-win relationship</span> for you.</p>
						<p>You'll even get a taste of this when you meet with us the very first time. So don't delay. <a href="#header">Complete the form now</a> or call us on <?php echo $phone; ?>. Thank you.</p>
					</div>
				</div>
			</div>

		</div>
		<!-- OUTRO COPY END -->

	</div>

	<!-- FOOTER START -->
	<?php include ("assets/php/footer.php"); ?>
	<!-- FOOTER END -->

	<!-- SCRIPTS START -->
	<?php include ("assets/php/scripts.php"); ?>
	<!-- SCRIPTS END -->
	

</body>
</html>