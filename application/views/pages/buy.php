<body id="purchase">
  <header>
    <hgroup>
      <h1><?=$header;?></h1>
    </hgroup>
  </header>
  <div class="container"><!-- Main container -->

    <div class="container--left"> <!-- Left side container -->
      <div class="card">
        <div class="card--inside">
          <div class="card--inside-header fs-4">Equipment List</div>
          <?php include "equip.html";?>
      </div>

    </div>
  </div>
    <!-- ------------------------------------------------- -->
  <div class="container--main"> <!-- middle or right container -->
	  <div class="card">
	    <div class="card--inside">
	      <div class="card--inside-header fs-4"></div>
	      <p>content</p>
	      <table>
          <thead>
            <tr>
              <th>Needed</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody class="disp">

        </tbody>
      </table>
	    </div>
	  </div>

</div>
  <div class="container--right">
    <div class="card">
     	<div class="card--inside">
       	<div class="card--inside-header fs-4">Purchase Form</div>
       		<?php
       		$form = [
       			"id" => "buy"
       		];
       		echo form_open("", $form);
       		$product = [
       			"name" => "product",
       			"id" => "product",
       			"placeholder" => "Product Needed",
       			"class" => "input-full"
       		];
       		echo form_input($product);

       		echo "<div>";
       		echo "<button type='submit' value='Submit'>Submit</button>";
       		echo "</div>";
       		echo form_close();
       	?>
       	<div class="display success"></div>
      </div>
    </div>
  </div>
</div>
