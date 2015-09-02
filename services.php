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
							<h1>Watch This 2 Minute Video Before You Speak To Another <?php echo $business_3; ?>...</h1>
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
	
	<div id="main-content">

		<div class="clearfix" style="height:40px;"></div>

		<!-- SERVICES COPY START -->
		<div class="container">
		
			<div class="content-heading-center" id="strong-partnership">
				<h3>Time-Saving &amp; Value Added <?php echo $business_2; ?> Services</h3>
				<br><br>
				<div class="row">
					<div class="col-md-12">
						<p style="font-weight:bold; text-decoration:underline">Time-Saving <span style="text-transform:capitalize"><?php echo $business_2; ?></span> Services</p>
						<p>Our Time-Saving <?php echo $business_2; ?> services are the things we can do to make your life easier.</p>
						<p>Why waste your valuable time and resources on office chores when we can take care of the whole thing for you – properly, efficiently and effectively.</p>
						<p style="margin-bottom:5px">These <?php echo $business_2; ?> services include:</p>
						
						<ul class="tbl-srv-list">
							<!-- SERVICES PHP INCLUDE START -->
							<?php foreach($time_saving_services as $name) : ?>
							<li><?php echo $name; ?></li>
							<?php endforeach; ?>
							<!-- SERVICES PHP INCLUDE END -->
						</ul>

						<p>We agree a bundle of Time-Saving <?php echo $business_2; ?> services that meets your budget and needs and then take all that distraction away from you, allowing you and your team to get on with building your business.</p>
						<p>Of course no matter which services you choose, we always agree a fixed fee with you.</p>
						<br>
						<p style="font-weight:bold; text-decoration:underline">Value Added <span style="text-transform:capitalize"><?php echo $business_2; ?></span> Services</p>
						<p>Our value added <?php echo $business_2; ?> services are focussed on making sure you earn more money and keep more of that money for you, your family and your lifestyle... whatever the size of your business or wallet.</p>
						<p style="margin-bottom:5px">They are designed to suit every client, in every circumstance.  We currently provide the following Value-Added <?php echo $business_2; ?> services...</p>

						<ul class="tbl-srv-list">
							<!-- SERVICES PHP INCLUDE START -->
							<?php foreach($value_added_services as $name) : ?>
							<li><?php echo $name; ?></li>
							<?php endforeach; ?>
							<!-- SERVICES PHP INCLUDE END -->
						</ul>

						<p>Again, all to an agreed, fixed fee.</p>
						<p>So go ahead. Request your <span style="font-weight:bold;">FREE no obligation meeting</span> today. If you’re still undecided, <a href="services.php">watch this video first</a> and then enter your details in the form on the right of the page, or call us direct on <?php echo $phone; ?>.</p>

					</div>
				</div>
			</div>

		</div>
		<!-- SERVICES COPY END -->
		

		<div class="clearfix" style="height:40px;"></div>

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
						<p>After all, any decent <?php echo $business_3; ?> can produce a good set of accounts. But very few have the skills to create a relationship where the client really sees their <?php echo $business_3; ?> as <span class="bold italic">a true asset</span> to their business.</p>

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