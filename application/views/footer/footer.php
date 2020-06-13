<footer>
  <menu>
    <ul>
      <li><?php echo anchor("/", "Home");?></li>
      <li><?php echo anchor('pages/polish', 'Polish Pads')?>  </li>
      <li><?php echo anchor("calendar/display", "Calendar");?></li>
      <li><?php echo anchor("pages/forms", "Forms");?></li>
      <li><?php echo anchor("pages/products", "Products");?></li>
      <li><?php echo anchor("pages/usage", "Usage");?> </li>
      <li><?php echo anchor("pages/buy", "Purchase");?> </li>
      <li><?php echo anchor("pages/bought", "Purchased");?> </li>
    </ul>
  </menu>
</footer>

<script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js');?>"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="  crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/js/script.min.js');?>" defer></script>
<script src="<?php echo base_url('assets/js/purch.min.js');?>" defer></script>
</body>
</html>