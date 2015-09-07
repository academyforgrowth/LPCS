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

		<!-- COPY START -->
		<div class="container">
		
			<div class="content-heading-center" id="strong-partnership">
				<h3 style="text-transform:capitalize; font-weight:bold">About Us</h3>
				<br><br>
				<div class="row">
					<div class="col-md-12">
						<p>As you will have already gathered, we’re not like other <?php echo $business_2; ?> firms. We care dearly about your financial performance <span style="text-decoration:underline; font-weight:bold">and</span> your growth and we achieve this by working hard to build a <span style="font-weight:bold">strong</span> (really strong) <span style="font-weight:bold">relationship</span> with you.</p>
						<p>We have proven solutions for ALL the smallest and largest challenges small and medium-sized businesses face during their lifecycle (from start-up through to growth and maturity).</p>
						<p>After all, any decent <?php echo $business_3; ?> can produce a good set of accounts. But very few have the skills to create a relationship where the <span style="font-weight:bold">client really sees their <?php echo $business_3; ?> as a true asset to their business.</span></p>
						<p>And that’s because a great <?php echo $business_3; ?>, is one that does so much more than merely provide <?php echo $business_4; ?> services.</p>
						<p>A great <?php echo $business_3; ?> is one that gives your business the advantage it needs and demands.</p>
						<p>And that’s where we really make the difference.</p>
						<p>It doesn’t matter whether you’re <span style="font-weight:bold">just starting out</span>, have an <span style="font-weight:bold">established business</span> or you’ve been <span style="font-weight:bold">round the block</span> a few times. We know what’s required to create a win-win relationship for you.</p>
						<p>So… if you’re looking for an <?php echo $business_3; ?> who does things differently...</p>
						<p><span style="text-decoration:underline; font-weight:bold">...puts you at the centre of their business…</span></p>
						<p>…and really cares about building a <em>long-term relationship</em>, then we know you’re going to love taking time out of your day to meet with us.</p>
						<p>So whether you’re starting a new business and want to hit the ground running, or have an existing one and are looking for a fresh and very successful approach to <?php echo $business_4; ?>, we urge you to get in touch now.</p>
						<p>If you’re still undecided, watch <a href="index.php">this video first</a> and then enter your details in the form, or phone us direct on <?php echo $phone; ?>.</p>
					</div>
				</div>
			</div>

		</div>
		<!-- COPY END -->

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