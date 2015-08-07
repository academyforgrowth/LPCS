<!-- ADVISORY SERVICES COLUMN -->

					<div class="col-sm-4 tbl-srv-col">
						<div class="tbl-srv-base">
							<div class="tbl-srv-heading">
								<img src="assets/images/compliance.png" alt="Advisory Services" />
								<h4>Advisory Services</h4>
							</div>
							<div class="tbl-srv-featured">
								<h5>Determining Your Needs.</h5>
								<p>All of our advisory services are tailored to find the best possible solutions for your business, taking the stress away from you.</p>
							</div>
							<ul class="tbl-srv-list">
								<!-- SERVICES PHP INCLUDE START -->
								<?php foreach($compliance_services as $name) : ?>
								<li><?php echo $name; ?></li>
								<?php endforeach; ?>
								<!-- SERVICES PHP INCLUDE END -->
							</ul>
						</div>
						<div class="tbl-srv-shadow">
						</div>
					</div>