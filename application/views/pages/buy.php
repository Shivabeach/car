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
        <a href="#section2">Menu</a>
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
           $pro = [
            "type" => "text",
             "name"        => "product",
             "id"          => "product",
             "placeholder" => "Product Needed",
             "class"       => "input-full",
             "autocomplete" => "on"
           ];
           echo form_input($pro);

           echo "<div>";
          $sub = [
            "id" => "submit"
          ];
          echo form_submit($sub, "Submit");

           echo "</div>";
           echo form_close();
         ?>
         <div class="display success"></div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('assets/js/newPurchase.js');?>" defer></script>
</div>
