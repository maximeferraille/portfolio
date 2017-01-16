<?php get_header(); ?>

  <div class="container">
      <div class="project-page">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="project-title">
          <h1><?php echo get_post_field('project_title'); ?></h1>
          <div class="line"></div>
          <h2><?php echo get_post_field('project_type'); ?></h2>
          <?php echo get_post_field('project_description'); ?>
          <br>
          <p class="left">Technologies : <strong><?php echo get_post_field('project_technologies'); ?></strong></p>
          <a href="<?php echo get_post_field('project_link'); ?>"><?php echo get_post_field('project_link_name'); ?></a>
        </div>

        <div class="project-picture">

          <?php
          $images = rwmb_meta( 'project_picture' );

          if ( !empty( $images ) ) {
            foreach ( $images as $image ) {
            echo "<img src='{$image['url']}' alt='{$image['title']}'><br />";
            }
          }
           ?>

        </div>
       <?php endwhile; endif; ?>
      </div>
  </div>

<?php get_footer(); ?>

<img src="" alt="">
