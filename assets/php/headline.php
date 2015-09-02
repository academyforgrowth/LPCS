<?php 

		if (isset($_GET[utm_campaign])) {
			$headline_var = $_GET[utm_campaign];
			$headline_var_clean = str_replace("_", " ", $headline_var);
			$headline = "Watch This 2 Minute Video Before You Speak To Another ". $headline_var_clean."...";

		} else {
			$headline = "Watch This 2 Minute Video Before You Speak To Another ". $business_3."...";
		}
		
		echo $headline;
?>