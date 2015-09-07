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
				<h3 style="text-transform:capitalize; font-weight:bold">Choosing A New <?php echo $business_3; ?></h3>
				<br><br>
				<div class="row">
					<div class="col-md-12">
						<p>So you’re looking for a new <?php echo $business_3 ?>.</p>
						<p>But how do you choose the right one?</p>
						<p>You see, many of the business owners WE work with, have told us of the problems they experienced with their previous advisors… poor quality of work, unresponsive service, bad advice, poor or even zero communication, unexpected charges, general apathy, disinterest and simply not being proactive enough.</p>
						<p>And we know from these conversations that one of the main reasons they chose us was because of our simple promise and guarantee...</p>
						<p style="font-weight:bold; margin-bottom:5px">Our promise is...</p>
						
						<ul class="tbl-srv-list">
							<li>First, all our work is always done to high professional standards and undergoes rigorous checking and review.</li>
							<li>Second, we guarantee to respond to all of your phone calls and emails in a prompt and timely manner.</li>
							<li>Third, our advice is always honest, professional and in your best interests. We don’t give bad advice.</li>
							<li>Fourth, we will always notify you of anything we think is of interest to your business or circumstances.</li>
							<li>Fifth all of our fees are quoted and agreed in advance. There will never be any unexpected charges.</li>
							<li>And last, as for general apathy, disinterest and not being proactive enough, our clients ARE our business. Without happy clients we don’t have a business, therefore our focus is always on you… 100%.</li>
						</ul>

						<p style="font-weight:bold">Our guarantee is…</p>
						<p>If at any time during our relationship you think we have failed to live up to these high standards, then YOU decide the fee – it’s as simple as that. YOU’RE in full control. No risk. No surprises.</p>
						<p>So if you want an accountant who can play an active role to ensure you run a better, more efficient and effective business… then we’d like to help.</p>
						<p>We’d be delighted to put some time aside to meet with you. Just call us on <?php echo $phone; ?> or <a href="index.php">complete the form here</a> and we can arrange your <span style="font-weight:bold">FREE no obligation meeting</span> at YOUR convenience.</p>
						<p>Thank you.</p>
					</div>
				</div>
			</div>

		</div>
		<!-- COPY END -->
		

		<div class="clearfix" style="height:40px;"></div>

		<!-- OUTRO COPY START -->
		<!-- <div class="container">
		
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

		</div> -->
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