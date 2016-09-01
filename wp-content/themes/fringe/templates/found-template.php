<?php
/**
 * Template Name: Found
 */
?>
<section class="found-container animated bounceInDown">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <?php

        $image = get_field('image');

        if( !empty($image) ): ?>

        	<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>


        <!-- <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/images/coming_soon_flipoff.jpg" alt="" /> -->
      </div>
    </div>
  </div>
</section>
