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
          <h2 class="card--inside-header">Equipment List</h2>
          <?php include "equip.html";?>
      </div>

    </div>
  </div>
    <!-- ------------------------------------------------- -->
  <div class="container--main"> <!-- middle or right container -->
	  <div class="card">
	    <div class="card--inside">
	      <h2 class="card--inside-header">Wanted or Needed Product</h2>
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
       	<h2 class="card--inside-header">Purchase Form</h2>
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
