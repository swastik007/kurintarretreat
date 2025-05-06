<?php
/**
 * The header for our theme
 *
 * Displays the <head> section and the site header.
 *
 * @package Kurintar_Retreat
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- header -->
<header class="site-header sticky-header">
  <div class="header-inner container">
    <!-- Logo -->
    <div class="site-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <!-- Logo for top of page -->
        <img class="logo-default" src="<?php echo get_template_directory_uri(); ?>/assets/images/full-logo-white.png" alt="Kurintar Retreat Logo">
        <!-- <img class="logo-default" src="<?php echo get_template_directory_uri(); ?>/assets/images/kurintarretreat-logo1.png" alt="Kurintar Retreat Logo"> -->
        <!-- Logo for sticky header -->
        <img class="logo-sticky" src="<?php echo get_template_directory_uri(); ?>/assets/images/full-logo-colored.png" alt="Kurintar Retreat Logo">
        <!-- <img class="logo-sticky" src="<?php echo get_template_directory_uri(); ?>/assets/images/kurintarretreat-logo.png" alt="Kurintar Retreat Logo"> -->
      </a>
    </div>

    <!-- Navigation & Booking -->
    <div class="header-right">
      <nav class="main-navigation">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            'container'      => false,
            'menu_class'     => 'menu-list',
          ));
        ?>
      </nav>

      <nav class="main-navigation-sticky">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            'container'      => false,
            'menu_class'     => 'menu-list-sticky',
          ));
        ?>
      </nav>

      <!-- Booking Button -->
      <div class="book-btn">
      <a class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Now</a>
      </div>

      <!-- Mobile Menu Toggle -->
      <div class="mobile-menu-toggle" id="mobile-toggle">
        <span></span><span></span><span></span>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobile-menu">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'mobile-menu',
        'container'      => false,
        'menu_class'     => 'mobile-menu-list',
      ));
    ?>
    <a class="btn mobile-book-btn" href="#booking">Book a Room</a>
  </div>
</header>

<script>
  // Mobile Menu Toggle
  document.getElementById('mobile-toggle').addEventListener('click', function () {
    document.getElementById('mobile-menu').classList.toggle('active');
  });

  // Sticky Header Logo Switch
  window.addEventListener('scroll', function () {
    const header = document.querySelector('.site-header');
    if (window.scrollY > 50) {
      header.classList.add('is-sticky');
    } else {
      header.classList.remove('is-sticky');
    }
  });
</script>


