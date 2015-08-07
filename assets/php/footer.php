	<footer id="footer" role="contentinfo">
		
		<!-- CONTAINER START -->

		<div class="container">
			
			<div class="sep-footer"></div>

			<div class="logo">
				<img src="admin/img/logo.png" alt="logo">
			</div>

			<!-- ASSOCIATION LOGO ARRAY START -->

			<div class="row">

				<ul class="assoc">
					<?php foreach($assoc_logo as $image => $url) : ?>

					<li><a href="<?php echo $url; ?>"><?php echo $image; ?></a></li>

					<?php endforeach ?>
				</ul>

			</div>

			<!-- ASSOCIATION LOGO ARRAY END -->

			<!-- SOCIAL MEDIA AREA START -->

			<?php include ("admin/snippets/social.php"); ?>

			<!-- SOCIAL MEDIA AREA END -->
			
			<!-- ADDRESS SECTION (ALL INFORMATION STORED IN VAR.PHP) -->

			<p>Tel: <?php echo $phone; ?> <?php if ($fax1 == true) {
				echo '| Fax: '.$fax_1.' ';	
				} else {
				echo '';
			}
			?>| Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>

			<p><?php echo $company_name; ?>, <?php echo $address; ?></p>
			<?php  
				if ($address2 == true) {
					echo '<p class="address_multiple">'.$company_name.', '.$address_2.'</p>';
				} else {
					echo '';
				}

				if ($address3 == true) {
					echo '<p class="address_multiple">'.$company_name.', '.$address_3.'</p>';
				} else {
					echo '';
				}

				if ($address4 == true) {
					echo '<p class="address_multiple">'.$company_name.', '.$address_4.'</p>';
				} else {
					echo '';
				}
			 ?>


			<!-- ADDRESS SECTION END -->

			<p class="copyright">&copy; 2008 - <?php echo date("Y"); ?> Copyrights by <?php echo $company_name; ?> &amp; Academy For Growth Ltd - All rights reserved.</p>
			<p class="copyright">Registered in <?php echo $country; ?> <?php echo $reg; ?></p>
			
			<div class="row">
				<ul class="policy_links">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="policy.php">Policy</a></li>
				</ul>
			</div>

		</div>

		<!-- CONTAINER END -->

	</footer>