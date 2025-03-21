<!DOCTYPE html>
<html>
  <head>
    <?php wp_head() ?>
  </head>
  <body>
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?= site_url() ?>"><strong>Fictional</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li><a href=" <?= site_url('/about-us') ?> " >About Us</a></li>
              <li><a href="<?= site_url('/programs') ?>">Programs</a></li>
              <li <?php if(get_post_type()=='event') echo "class = 'current-menu-item' " ?>>
                <a href="<?= site_url('/events') ?>">Events</a></li>
              <li><a href="<?= site_url('campuses') ?>">Campuses</a></li>
              <li <?php if(get_post_type()=='post') echo "class = 'current-menu-item' " ?>>
                <a href="<?= site_url('/blog') ?>">Blog</a>
              </li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="<?= site_url('/login') ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="<?= site_url('/sign-up') ?>" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>