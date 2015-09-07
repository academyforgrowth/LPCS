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

	<header id="header" class="bg-image" role="banner" style="margin-bottom:0px">
		<div class="bg-image-overlay-video-version">
			<div class="container">
				
				<div class="row">

					<div class="col-sm-6">
						<div class="header-text-video-version">
							<h1><?php include ("assets/php/headline.php"); ?></h1>
							<h2>“How To Avoid Choosing The Wrong <?php echo $business_3; ?>”</h2>
							<h3 class="sub-headline">The Simple Strategy Any Small Business Owner Can Use To Find The <?php echo $business_3; ?> That’s Right For Them</h3>
							
							<div class="video_container">
								<?php include ("admin/snippets/video.php"); ?>
							</div>
							<h4><span>Call us now at <?php echo $phone; ?></span></h4>	
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
	


	<!-- FOOTER START -->
	<?php include ("assets/php/footer.php"); ?>
	<!-- FOOTER END -->

	<!-- SCRIPTS START -->
	<?php include ("assets/php/scripts.php"); ?>
	<!-- SCRIPTS END -->
	

</body>
</html>