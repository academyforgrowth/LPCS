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
		<div class="bg-image-overlay">
			<div class="container">
				
				<div class="row">

					<div class="col-sm-5">
						<div class="wts-contact-wrapper">
							<div class="form-heading">
								<h2>Arrange Your Free Meeting Now</h2>
								<p>Complete your details, click the ‘FREE Meeting’ button below and we’ll contact you to arrange the meeting.</p>
							</div>
							<form name="htmlform" method="post" action="html_form_send.php" class="wts-form-contact">
								<input type="text" name="first_name" value="Your First Name" onBlur="if(this.value == '') { this.value='Your First Name'}" onFocus="if (this.value == 'Your First Name') {this.value=''}" class="form-control" />
								<input type="text" name="last_name" value="Your Last Name" onBlur="if(this.value == '') { this.value='Your Last Name'}" onFocus="if (this.value == 'Your Last Name') {this.value=''}" class="form-control" />
								<input type="text" name="comments" value="Company Name" onBlur="if(this.value == '') { this.value='Company Name'}" onFocus="if (this.value == 'Company Name') {this.value=''}" class="form-control" />
								<input type="text" name="telephone" value="Phone" onBlur="if(this.value == '') { this.value='Phone'}" onFocus="if (this.value == 'Phone') {this.value=''}" class="form-control" />
								<input type="email" name="email" value="Email" onBlur="if(this.value == '') { this.value='Email'}" onFocus="if (this.value == 'Email') {this.value=''}" class="form-control" />
								<input type="submit" name="submit" value="FREE Meeting">
							</form>
							<p class="form-info"><a href="policy.php">We Respect Your Email Privacy</a></p>
						</div>
					</div>
					
					<div class="col-sm-6 col-sm-offset-1">
						<div class="header-text-subscribed">
							<h3>Thank you and welcome aboard!</h3>
							<p>You're now a subscriber to our monthly Business Builder newsletter.</p>
							<p>We hope that you will enjoy reading and applying the business growth strategies. Keep an eye on your emails... the newsletter is distributed once per month, so you should receive your first copy within one month of subscribing.</p>
							<p>If for any reason you don't receive your newsletter, call us on <span><?php echo $phone; ?></span>.</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</header>

	<!-- Header End -->

	<div id="main-content">
		
		<!-- TOP TESTIMONIALS CONTAINER START -->
		<?php include ("admin/snippets/top_testimonials.php"); ?>
		<!-- TOP TESTIMONIALS CONTAINER END -->
		
		<div class="clearfix" style="height:40px;"></div>

		<!-- CONTAINER START -->

		<div class="container">

			<div class="content-heading-center" id="about">
				<h2>Not Like 'Ordinary' <?php echo $business; ?></h2>
				<p>Clients tell us there are 3 key REASONS why they choose us…</p>
			</div>

			<!-- "WHY US" ROW START -->

			<div class="row">
				<div class="col-sm-4">
					<div class="wts_feature">
						<div class="feature_edge">
						</div>
						<img src="assets/images/services.png" alt="Services" />
						<h4><a href="#services" class="smooth-scroll" style="text-decoration:none;">Forge Strong Relationships</a></h4>
						<p>Getting to know you and your business is top of our agenda. This ensures we are giving you the best possible advice to save you tax, increase your profits and steer you in the right direction in both good and challenging times.</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="wts_feature">
						<div class="feature_edge">
						</div>
						<img src="assets/images/growthchart.png" alt="Business Growth" />
						<h4><a href="#growth" class="smooth-scroll" style="text-decoration:none;">Grow your business</a></h4>
						<p>You get full access to one of the world’s most successful sales and marketing programmes that has transformed the lives of thousands of business owners all over the globe. Our gift to you when you become a client.</p>
					</div>
				</div>
	
				<div class="col-sm-4">
					<div class="wts_feature">
						<div class="feature_edge">
						</div>
						<img src="assets/images/support.png" alt="Support" />
						<h4><a href="#header" class="smooth-scroll" style="text-decoration:none;">FREE &amp; Unlimited Support</a></h4>
						<p>All of our support is FREE and unlimited. Need a word of advice? Call us. As one of our clients, this is included in your low, fixed monthly fee. You even get direct access to the partners of the firm, whenever you need them.</p>
					</div>
				</div>

			</div>

		</div>

		<!-- CONTAINER END -->

		<div class="clearfix" style="height:40px;"></div>

		<!-- TEAM CONTAINER START -->

		<?php include ("admin/snippets/team.php"); ?>
		
		<!-- TEAM CONTAINER END -->

		<div class="clearfix" style="height:40px;"></div>

		<!-- SERVICES START -->

		<?php include ("admin/snippets/services.php"); ?>

		<!-- SERVICES END -->

		<!-- CONTAINER END -->

		<div class="cleafix" style="height:40px;"></div>

		<!-- TESTIMONIALS CONTAINER START -->

		<?php include ("admin/snippets/testimonials.php"); ?>

		<!-- TESTIMONIALS CONTAINER END -->

		<div class="clearfix" style="height:40px;"></div>

		<div class="newsletter-subscribe-wrapper" id="subscribe">

			<!-- CONTAINER START -->

			<div class="container">
				
				
				<div class="content-heading-center">
					<h2>Subscribe to our free newsletter</h2>
					<p>Delivered to your door every month, our Business Builder Newsletter is crammed full of practical and innovative tips to help you build a better business.<br>FREE when you subscribe today.</p>
				</div>
			</div>
				<div class="col-sm-1 col-xs-12 col-xs-offset-3  col-sm-offset-5 col-md-offset-5 col-md-12">
					<form name="htmlform" method="post" action="business_builder_form.php">
						<input type="submit" name="submit" value="SUBSCRIBE NOW" />
					</form>
				</div>

				<div class="clearfix" style="height:40px;"></div>

			

			<!-- CONTAINER END -->
			
		</div>

	</div>

	<!-- FOOTER START -->
	<?php include ("assets/php/footer.php"); ?>
	<!-- FOOTER END -->

	<!-- SCRIPTS START -->
	<?php include ("assets/php/scripts.php"); ?>
	<!-- SCRIPTS END -->
	

</body>
</html>