<?php

$title = get_sub_field ('title');
$image = get_sub_field ('image');

?>

<section style="background-image:url('<?php echo $image ?>')"class="home-banner">
  <div class="container">
     <h3><?php echo $title ?></h3>

     <img src="<?php echo $image ?>" alt="">
  </div>

</section>