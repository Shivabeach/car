<footer>
  <menu>
    <ul>
      <li class="fs-3"><?php echo anchor("/", "Home");?></li>
      <li class="fs-3"><?php echo anchor('pages/polish', 'Polish Pads')?>  </li>
      <li class="fs-3"><?php echo anchor("calendar/display", "Calendar");?></li>
      <li class="fs-3"><?php echo anchor("pages/forms", "Forms");?></li>
      <li class="fs-3"><?php echo anchor("pages/products", "Products");?></li>
      <li class="fs-3"><?php echo anchor("pages/usage", "Usage");?> </li>
      <li class="fs-3"><?php echo anchor("pages/buy", "Purchase");?> </li>
    </ul>
  </menu>
</footer>

<script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js');?>"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="  crossorigin="anonymous"></script>
<script defer src="<?php echo base_url('assets/js/script.js');?>"></script>
<script defer src="<?php echo base_url('assets/js/main.js');?>"></script>
</body>
</html>