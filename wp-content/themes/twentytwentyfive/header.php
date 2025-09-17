<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  
</head>
<body <?php body_class(); ?>>

<header class="site-header hidden">
  <h1 class="site-title">
    <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  </h1>
  <nav class="site-nav">
    <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'menu_class'     => 'menu',
      'fallback_cb'    => false
    ]);
    ?>
  </nav>
</header>
<main class="site-content">
