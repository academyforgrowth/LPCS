			<?php 
				if ($social == true) {
					echo '<ul class="social">
							<li><a href="'.$twitter.'" target="_blank" class="social-twitter" data-placement="top" data-original-title="twitter"><i class ="fa fa-twitter"></i></a></li>
							<li><a href="'.$linkedin.'" target="_blank" class="social-linkedin" data-placement="top" data-original-title="linkedin"><i class ="fa fa-linkedin"></i></a></li>
							<li><a href="'.$googleplus.'" target="_blank" class="social-gplus" data-placement="top" data-original-title="google plus"><i class ="fa fa-google-plus"></i></a></li>
							<li><a href="'.$facebook.'" target="_blank" class="social-facebook" data-placement="top" data-original-title="facebook"><i class ="fa fa-facebook"></i></a></li>
						</ul>';	
				} else {
					echo '';
				}
			 ?>