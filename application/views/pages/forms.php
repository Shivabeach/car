	<!--container - left - main - right - inner for all-->
	<div class="container">
	  <div class="container--left">
	    <div class="card">
	      <div class="card--inside">
	        <div class="card--inside-header fs-4">list</div>
	         <?php include"equip.html";?>
	    	</div>
	 	 </div>
		</div>
	  <div class="container--main">
	    <div class="card">
	     	<div class="card--inside">
	       	<div class="card--inside-header fs-4">Purchased Equipment</div>
	       	<!-- Purchasing form -->
	        		<?php
	        		$formid = [
								"class" => "cars",
								"id"    => "cars"
	        		];
	        		echo form_open('forms/equipment', $formid);
	        		$material = [
								"id"          => "material",
								"name"        => "material",
								"class"       => "input-large",
								"placeholder" => "Purchased material"

	        		];
	        		echo "<div class='form-control'>";
	        		echo form_input($material);
	        		echo "<br>";
	        		echo "<small></small>";
	        		echo "</div>";

	        		$type = [
								"id"          => "type",
								"name"        => "type",
								"class"       => "input-med-lg",
								"placeholder" => "Type of Product"

	        		];
	        		echo "<div class='form-control'>";
	        		echo form_input($type);
	        		echo "<br>";
	        		echo "<small></small>";
	        		echo "</div>";

	        		$company = [
								"id"          => "company",
								"name"        => "company",
								"class"       => "input-med-lg",
								"placeholder" => "Company"
	        		];
	        		echo "<div class='form-control'>";
	        		echo form_input($company);
	        		echo "<br>";
	        		echo "<small></small>";
	        		echo "</div>";
	        		$unit = [
								"id"          => "unit",
								"name"        => "unit",
								"class"       => "input-med-lg",
								"placeholder" => "Unit cost"
	        		];
	        		echo "<div class='form-control'>";
	        		echo form_input($unit);
	        		echo "<br>";
	        		echo "<small></small>";
	        		echo "</div>";
	        		$quantity = [
								"id"          => "quantity",
								"name"        => "quantity",
								"class"       => "input-med-lg",
								"placeholder" => "Number ordered"
	        		];
	        		echo "<div class='form-control'>";
	        		echo form_input($quantity);
	        		echo "<br>";
	        		echo "<small></small>";
	        		echo "</div>";

	        		$shipping = [
								"id"          => "shipping",
								"name"        => "shipping",
								"class"       => "input-med-lg",
								"placeholder" => "Shipping cost"
	        		];
	        		echo "<div class='form-control'>";
	        		echo form_input($shipping);
	        		echo "<br>";
	        		echo "<small></small>";
	        		echo "</div>";
	        		echo "<button type='submit' value='Submit'>Submit</button>";
	        		echo "<button type='reset' value='Reset'>Reset</button>";
	        		echo form_close();
	        		?>

	        <?php echo str_repeat("<br>", 2);?>
	        <div class="card--inside-header fs-4">Blog Form</div>
	        <!-- Blog form -->
	        <?php
	        	$form = [
	        		"class" => "cars"
	        	];
	        	echo form_open("forms/blog", $form);
	        	$date = [
							"id"          => "date",
							"class"       => "input-med date",
							"name"        => "date",
							"placeholder" => "Date"
	        	];
	        	echo form_input($date);
	        	$heading = [
							"id"          => "heading",
							"class"       => "input-large",
							"name"        => "heading",
							"placeholder" => "Heading"
	        	];
	        	echo form_input($heading);
	        	$content = [
							"id"          => "content",
							"name"        => "content",
							"class"       => "content",
							"placeholder" => "Content"
	        	];
	        	echo form_textarea($content);
	        	echo "<button type='submit' value='Submit'>Submit</button>";
	        		echo "<button type='reset' value='Reset'>Reset</button>";
	        	echo form_close();
	        ?>
	      </div>
	    </div>
	    <div class="card">
	     	<div class="card--inside">
	       	<div class="card--inside-header fs-4">Calendar Form</div>
	       		<?php
	       			$form = [
	       				"class" => "cars"
	       			];
	       			echo form_open('forms/calendar',$form);
	       			$date = [
									"class"       => "date",
									"name"        => "date",
									"placeholder" => "Date"
	       			];
	       			echo "<div>";
	       			echo form_input($date);
	       			echo "</div>";

	       			$data = [
									"name"        => "data",
									"placeholder" => "Data"
	       			];
	       			echo "<div>";
	       			echo form_textarea($data);
	       			echo "</div>";
	       			echo "<button type='submit' value='Submit'>Submit</button>";
	        		echo "<button type='reset' value='Reset'>Reset</button>";
	        		echo form_close();
	       		?>
	      </div>
	    </div>
		</div>
		<div class="container--right">
	    <div class="card">
	     	<div class="card--inside">
	       	<div class="card--inside-header fs-4">Response</div>
	       	<div class="display success"></div>
	       	<div>
	       		['reset']   = "Carpro Reset";<br>
						['wheel']   = "Adams Wheel & Tire Cleaner";<br>
						['reload']  = "Carpro Reload";<br>
						['foaming'] = "Griot’s Foaming Surface Wash";<br>
						['buff'] = "Buff And Shine";

	       	</div>
	      </div>
	    </div>
	  </div>
	</div> <!-- End of container -->