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
          <!-- <p>Passionné depuis toujours par les nouvelles technologies, j'ai apprit en auto-didacte mais aussi par lors de mes études différentes technologies pour la création de site web.<br>
          <br>
          Je suis actuellement à la rehcerche d'un stage où je pourrai metter mes compétences à disposition.<br>Pour voir en oeuvre l'application de mes compétences je vous invite à vous diriger vers l'onglet Portfolio<br>
          <br>
          Si vous voulez plus d’information vous pouvez télécharger mon CV.</p> -->


          <a href="#" download class="btn"><i class="fa fa-download" aria-hidden="true"></i></a>
        </div>

        <div class="skills">
          <progress value="80" max="100"></progress><span>JavaScript/jQuery</span><br>
          <progress value="70" max="100"></progress><span>HTML5/CSS3</span><br>
          <progress value="60" max="100"></progress><span>PHP</span><br>
          <progress value="70" max="100"></progress><span>JAVA</span><br>
          <progress value="60" max="100"></progress><span>MySQL</span><br>
          <progress value="80" max="100"></progress><span>Laravel</span><br>
          <progress value="80" max="100"></progress><span>Wordpress</span><br>
        </div>
    </div>
  </div>

<?php get_footer(); ?>
