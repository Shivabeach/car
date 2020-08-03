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
        <a href="#section2">Menu</a>
          <h2 class="card--inside-header">Blog Index</h2>
          <ol>
          <?php
          foreach($blog as $row):?>
            <li class="notation"><a href="#<?=$row->id;?>"><?=$row->heading;?></a></li>
          <?php endforeach; ?>
        </ol>
        <div id="dem"></div>
        </div>
      </div>
      <div class="card">
        <div class="card--inside">
          <h2 class="card--inside-header">The Subject</h2>
          <?php
          foreach($cost as $row):
            $total = round($row->total, 2);
            $shipping = round($row->shipping, 2);
            $grande = round($total - $shipping, 2);
            ?>

            <p>We have spent <b>$<?=$total;?></b> in total to coat the car</p>
            <p>Of that total, <b>$<?=$shipping;?></b> was spent in shipping</p>
            <p>In all, we spent <b>$<?=$grande;?></b> on product</p>
          <?php endforeach;?>
        </div>
      </div>
    </div>

    <div class="container--main">
      <?php
      foreach($blog as $row):?>

      <div class="card">
        <div class="card--inside">
          <h2 class="card--inside-header" id="<?=$row->id;?>"><?=$row->heading;?></h2>
          <?php echo "<h5 class='date'>" . nice_date($row->date, 'F d, Y') . "</h5>";?>
          <?php echo $this->typography->auto_typography($row->content);?>
        </div>
      </div>
    <?php endforeach;?>

  </div>
</div>
