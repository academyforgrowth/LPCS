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
	
	<div id="main-content">

		<div class="clearfix" style="height:80px;"></div>

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
						<p>So go ahead. Request your <span style="font-weight:bold;">FREE no obligation meeting</span> today. If you’re still undecided, <a href="index.php">watch this video first</a> and then enter your details in the form on the right of the page, or call us direct on <?php echo $phone; ?>.</p>

					</div>
				</div>
			</div>

		</div>
		<!-- SERVICES COPY END -->
		

		<div class="clearfix" style="height:40px;"></div>

	</div>

	<!-- FOOTER START -->
	<?php include ("assets/php/footer.php"); ?>
	<!-- FOOTER END -->

	<!-- SCRIPTS START -->
	<?php include ("assets/php/scripts.php"); ?>
	<!-- SCRIPTS END -->
	

</body>
</html>