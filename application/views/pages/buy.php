<body id="purchase">
  <!-- onload="addExpenseToList()" -->
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
	      <div class="card--inside-header fs-4">Wanted or Needed Product</div>
	      <p></p>
	      <table>
          <thead>
            <tr>
              <th>Needed</th>
              <th>Usage</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody class="disp">
          </tbody>
        </table>
        <ul class="listing">
          <li>Color</li>
        </ul>
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
             "name"        => "product",
             "id"          => "product",
             "placeholder" => "Product Needed",
             "class"       => "input-full"
       		];
       		echo form_input($product);
          echo "<br>";
          $why = [
            "name"        => "reason",
            "id"          => "reason",
            "placeholder" => "Product usage",
            "class"       => "input-full"
          ];
          echo form_input($why);
          echo "<br>";
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
