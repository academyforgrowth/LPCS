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
		
		<!-- CONTAINER START -->

		<div class="container">

			<div class="content-heading-center" id="about">
				<h2>Contact Us</h2>
				<h4>Our Locations</h4>
			</div>

			<!-- "CONTACT" ROW START -->

			<?php include ("admin/snippets/contact_page_locations.php"); ?>

			<!-- "CONTACT" ROW END -->

		</div>

		<!-- CONTAINER END -->
		
		<div class="clearfix" style="height:80px;"></div>

	</div>

	<!-- FOOTER START -->
	<?php include ("assets/php/footer.php"); ?>
	<!-- FOOTER END -->

	<!-- SCRIPTS START -->
	<?php include ("assets/php/scripts.php"); ?>
	<!-- SCRIPTS END -->
	

</body>
</html>