<!-- 	<nav class="navbar navbar-default" id="navigation" role="navigation">
		<div class="container">
			
			<div class="navbar-header">

				<?php 

					function button1($attr, $text) {
					  $data = "<button ";

					  foreach($attr as $names => $specs) {
					    $data .= $names . "='" . $specs . "' ";
					}

					  $data .= ">" . $text . "</button>\n";
					return $data;
					}

					function span1($attr, $text) {
					  $data = "<span ";

					  foreach($attr as $names => $specs) {
					    $data .= $names . "='" . $specs . "' ";
					  }

					  $data .= ">" . $text . "</span>\n";
					  return $data;
					}

					echo button1(
					  array( "type" => "button",
					         "class" => "navbar-toggle collapsed",
					         "data-toggle" => "collapse",
					         "data-target" => "#menu-collapse-1" ),
					  span1(
					    array( "class" => "sr-only",
					    		"class" => "icon-bar icon-bar-2"),
					    "")
					  
					);

				?>

				<div class="navbar-brand">
					<p><?php echo $company_name; ?></p>
				</div>
			</div>

			<div class="collapse navbar-collapse" id="menu-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					
					<?php foreach($nav_menu as $name => $url) : ?>

					<li><a href="<?php echo $url; ?>" class="smooth-scroll"><?php echo $name; ?></a></li>

					<?php endforeach ?>
				</ul>
			</div>

		</div>
	</nav> -->