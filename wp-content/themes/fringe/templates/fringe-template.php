<?php
/**
 * Template Name: Fringe
 */
?>

<section class="fringe-container animated bounceInLeft">
  <div class="container">
    <?php $args = array( 'post_type' => 'fringe', 'posts_per_page' => -1 ); ?>
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <h5><?php the_time( get_option( 'date_format' ) ); ?></h5>
          <h3><?php the_title(); ?></h3>
          <br>

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators"> -->
              <!-- Slide Buttons go here -->
            <!-- </ol> -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

              <?php
              $images = get_field('gallery');
              if( $images ): ?>

              <?php foreach( $images as $image ): ?>
                <div class="item">
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </a>
                  <!-- <p><?php echo $image['caption']; ?></p> -->
                </div>
              <?php endforeach; ?>

            <?php endif; ?>

          </div>

        </div>
        <br>
        <p>
          <?php echo get_field('preview'); ?>
        </p>
        <br>
        <a href=<?php the_permalink(); ?>><button class="btn btn-default read-more" type="button" name="button">Read More</button></a>
        <div class="social">
          <br>
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-icon-color="black" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="<?php the_title(); ?>">
              <a class="a2a_button_facebook"></a>
              <a class="a2a_button_twitter"></a>
              <a class="a2a_button_linkedin"></a>
              <a class="a2a_button_email"></a>
              <a class="a2a_button_sms"></a>
          </div>
          <!-- <?php the_excerpt(); ?> -->
        </div>
        <hr>
      </div>
    </div>

    <?php endwhile; ?>

  </div>
</section>
