<?php get_header(); ?>

  <div class="home" id="top">
      <h1><?php echo rwmb_meta('main_title'); ?></h1>
      <div class="line"></div>
      <p><?php bloginfo('description'); ?></p>
      <a href="#"><span class="bottom"></span></a>
  </div>

  <div class="container">
    <div class="about">
      <h1><?php echo rwmb_meta('about_title'); ?></h1>
      <div class="line"></div>
      <?php  echo rwmb_meta('about_description'); ?>
  </div>
</div>

  <div class="banner">
      <?php echo rwmb_meta('quote_content'); ?>
    <h3>-<?php echo rwmb_meta('quote_author'); ?></h3>
  </div>

  <div class="container">
    <div class="global">
      <h1><?php echo rwmb_meta('skills_title');  ?></h1>
      <div class="line"></div>
    </div>

      <div class="wrapper">
        <div class="description">
          <h2><?php echo rwmb_meta('skills_subtitle'); ?></h2>
          <?php echo rwmb_meta('skills_description'); ?>

          <?php
          $files = rwmb_meta( 'download_cv' );

          if ( !empty( $files ) ) {
            foreach ( $files as $file ) {
            echo "<a href='{$file['url']}' class='btn' download title='{$file['title']}'><i class='fa fa-download' aria-hidden='true'></i></a><br />";
            }
          }
           ?>

        </div>

        <div class="skills">
          <progress value="70" max="100"></progress><span>JavaScript/jQuery</span><br>
          <progress value="90" max="100"></progress><span>HTML5/CSS3</span><br>
          <progress value="90" max="100"></progress><span>PHP</span><br>
          <progress value="70" max="100"></progress><span>JAVA</span><br>
          <progress value="80" max="100"></progress><span>MySQL</span><br>
          <progress value="30" max="100"></progress><span>Laravel</span><br>
          <progress value="65" max="100"></progress><span>Wordpress</span><br>
        </div>
    </div>
  </div>

<?php get_footer(); ?>
