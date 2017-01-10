<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

  </head>

  <body>
    <header>
			<div class="container">
				<a href="<?php echo home_url(); ?>" class="title-nav"><h1><?php bloginfo('name'); ?></h1></a>

				<nav class="menu">
            <a  class="menu-trigger">Menu</a>
          <?php
            $defaults = array (
              'theme_location ' => 'header',
              'menu' => '',
              'container' => false,
              'menu_class' => 'menu',
              'fallback_cb' => false
            );

            wp_nav_menu($defaults);
           ?>


          <!-- no dynamic menu
          <a  class="menu-trigger">Menu</a>
					<ul class="menu">
						<li><a href="index.html">Accueil</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="contact.html">Contact</a></li>
				  </ul>
          -->
			</nav>
		</div>

		</header>
