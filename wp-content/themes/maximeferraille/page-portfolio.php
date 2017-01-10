<?php
/*
  Template Name: Portfolio Archive
*/
?>

<?php get_header(); ?>

<div class="container" id="top">
  <div class="portfolio-nav">
    <h1>Mes projets</h1>
    <div class="line"></div>
    <p><?php the_content(); ?></p>
  </div>

  <div class="project-list">

    <?php

      $args = array (
        'post_type' =>'project'
      );
      $query = new WP_Query( $args);

     ?>

      <?php if ($query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
        <section>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('thumbnail'); ?>
          <!-- <img src="http://www.pacinno.eu/wp-content/uploads/2014/05/placeholder-Copy.png" class="img-portfolio"> -->
          <h2><?php echo rwmb_meta('project_title'); ?></h2>
        </a>
      </section>
      <?php endwhile; endif; wp_reset_postdata(); ?>

  </div>
</div>

<?php get_footer(); ?>
