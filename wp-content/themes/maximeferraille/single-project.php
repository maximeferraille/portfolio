<?php get_header(); ?>

  <div class="container">
      <div class="project-page">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="project-title">
          <h1><?php echo get_post_field('project_title'); ?></h1>
          <div class="line"></div>
        <?php echo get_post_field('project_description'); ?>
        <a href="<?php echo get_post_field('project_link'); ?>"><?php echo get_post_field('project_link_name'); ?></a>
        </div>
       <?php endwhile; endif; ?>
      </div>
  </div>

<?php get_footer(); ?>
