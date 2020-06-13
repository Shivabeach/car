<body>
  <header>
    <hgroup>
      <h1><?=$header;?></h1>
    </hgroup>
  </header>
<div class="container">
	  <div class="container--left">
	    <div class="card">
	      <div class="card--inside">
	        <h2 class="card--inside-header">Search</h2>
            <?php
              $open = [
                "id" => "ajax"
              ];
              echo form_open("pages/bought",$open);
              $search = [
                "id"          => "search",
                "name"        => "search",
                "placeholder" => "Search",
                "class"       => "input-full"
              ];
              echo form_input($search);
              $sub = [
                "id" => "submit",
                "type" => "submit",

              ];
              echo form_submit("Submit", "Post it", $sub);
              echo form_close();
            ?>

	    	</div>
	 	 </div>
		</div>
	  <div class="container--main">
	    <div class="card">
	     	<div class="card--inside">
           <h2 class="card--inside-header">Purchased Materials</h2>
           <?php
           $cell = "class='buck'";
            $this->table->set_heading('Product', 'Product Type', 'Company', 'Unit Cost', 'Quantity', 'Total');
            foreach($display as $row) {
              $this->table->add_row(
                $row->material,
                $row->type,
                $row->company,
                $row->unit,
                $row->quantity,
                $row->unit * $row->quantity
              );
            }
            echo $this->table->generate();
           ?>

         </div>
      </div>
    </div>
</div>