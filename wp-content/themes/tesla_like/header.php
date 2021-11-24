<?php get_template_part('template-parts/header-start'); ?>

<body>
  <header class="grid_header">
    <a href="<?php echo bloginfo('url'); ?>" class="header_1"><img src="<?php echo get_theme_file_uri('assets/img/logo_tesla.png'); ?>" alt="logo tesla" class="logo_header"></a>
    <div class="menu_car header_2">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <a href="#<?php echo basename(get_permalink()); ?>" class="no_style capitalize padding_header_menu"><?php the_title(); ?></a>
      <?php endwhile; endif; ?>
    </div>
    <div class="menu_general header_3">
      <a href="<?php echo bloginfo('url'); ?>" class="capitalize padding_header_menu">assistance</a>
      <a href="<?php echo bloginfo('url'); ?>" class="capitalize padding_header_menu">shop</a>
      <a href="<?php echo bloginfo('url'); ?>" class="capitalize padding_header_menu">compte</a>
      <a href="<?php echo bloginfo('url'); ?>" class="capitalize padding_header_menu">menu</a>
    </div>
    <div class="rsp_menu">
          <ul class="menu">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <li><a href="#<?php echo basename(get_permalink()); ?>" class="menuItem capitalize"><?php the_title(); ?></a></li>
            <?php endwhile; endif; ?>
          </ul>
          <button class="hamburger">
            <!-- material icons https://material.io/resources/icons/ -->
            <i class="menuIcon material-icons">menu</i>
            <i class="closeIcon material-icons">close</i>
          </button>
        </div>
  </header>
<main>
