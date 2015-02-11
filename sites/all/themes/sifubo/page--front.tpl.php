<?php if (theme_get_setting('scrolltop_display')): ?>
  <div id="toTop"><span class="glyphicon glyphicon-chevron-up"></span></div>
<?php endif; ?>

<?php if ($page['pre_header_first'] || $page['pre_header_second'] || $page['pre_header_third']) :?>
  <!-- #pre-header -->
  <div id="pre-header" class="clearfix">
    <div class="container">

      <!-- #pre-header-inside -->
      <div id="pre-header-inside" class="clearfix">
        <div class="row">
          <div class="col-md-4">
            <?php if ($page['pre_header_first']):?>
              <div class="pre-header-area">
                <?php print render($page['pre_header_first']); ?>
              </div>
            <?php endif; ?>
          </div>

          <div class="col-md-4">
            <?php if ($page['pre_header_second']):?>
              <div class="pre-header-area">
                <?php print render($page['pre_header_second']); ?>
              </div>
            <?php endif; ?>
          </div>

          <div class="col-md-4">
            <?php if ($page['pre_header_third']):?>
              <div class="pre-header-area">
                <?php print render($page['pre_header_third']); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <!-- EOF: #pre-header-inside -->

    </div>
    <div class="toggle-control"><a href="javascript:showPreHeader()"><span class="glyphicon glyphicon-plus"></span></a></div>
  </div>
  <!-- EOF: #pre-header -->
<?php endif; ?>


<!-- #main-navigation -->
<div id="main-navigation" class="clearfix">
  <div class="container">

    <!-- #main-navigation-inside -->
    <div id="main-navigation-inside" class="clearfix">
      <div class="row">
        <!-- LOGO in Top Left -->
        <div class="col-lg-2">
          <?php if ($logo):?>
            <div id="logo">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
            </div>
          <?php endif; ?>
        </div>
        <!-- EOF: LOGO in Top Left -->
        <div class="col-lg-10">
          <?php if ($page['header_top_right']) :?>
            <div class="row">
              <div class="col-lg-4 col-lg-offset-8">
                <div class="<?php print $header_top_right_grid_class; ?> top-right">
                  <!-- #header-top-right -->
                  <div id="header-top-right" class="clearfix">
                    <?php print render($page['header_top_right']); ?>
                  </div>
                  <!-- EOF:#header-top-right -->
                </div>
              </div>
            </div>
          <?php endif; ?>
          <div class="row">
            <nav role="navigation">
              <?php if ($page['navigation']) :?>
                <?php print drupal_render($page['navigation']); ?>
              <?php else : ?>

                <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('main-menu', 'menu'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), )); ?>

              <?php endif; ?>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- EOF: #main-navigation-inside -->

  </div>
</div>
<!-- EOF: #main-navigation -->

<!-- header -->
<?php if ($page['header']):?>
  <header id="header" role="banner" class="clearfix">
    <div class="container">

      <!-- #header-inside -->
      <div id="header-inside" class="clearfix">
        <div class="row">
          <div class="col-md-12">

            <?php if ($site_name):?>
              <div id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
              </div>
            <?php endif; ?>

            <?php if ($site_slogan):?>
              <div id="site-slogan">
                <?php print $site_slogan; ?>
              </div>
            <?php endif; ?>

            <?php if ($page['header']) :?>
              <?php print render($page['header']); ?>
            <?php endif; ?>


          </div>
        </div>
      </div>
      <!-- EOF: #header-inside -->

    </div>
  </header>
<?php endif;?>
<!-- EOF: #header -->

<?php if ($page['banner']) : ?>
  <!-- #banner -->
  <div id="banner" class="clearfix">
    <div class="container">

      <!-- #banner-inside -->
      <div id="banner-inside" class="clearfix">
        <div class="row">
          <div class="col-md-12">
            <?php print render($page['banner']); ?>
            <?php print render($page['banner']); ?>
          </div>
        </div>
      </div>
      <!-- EOF: #banner-inside -->

    </div>
  </div>
  <!-- EOF:#banner -->
<?php endif; ?>

<!-- #page -->
<div id="page" class="clearfix">

  <?php if ($page['highlighted']):?>
    <!-- #top-content -->
    <div id="top-content" class="clearfix">
      <div class="container">
        <!-- #top-content-inside -->
        <div id="top-content-inside" class="clearfix">
          <div class="row">
            <div class="col-md-12" style="background:green;">
              <?php print render($page['highlighted']); ?>
            </div>
          </div>
        </div>
        <!-- EOF:#top-content-inside -->

      </div>
    </div>
    <!-- EOF: #top-content -->
  <?php endif; ?>

  <?php if ($page['bottom_content']):?>
    <!-- #bottom-content -->
    <div id="bottom-content" class="clearfix">
      <div class="container">

        <!-- #bottom-content-inside -->
        <div id="bottom-content-inside" class="clearfix">
          <div class="row">
            <div class="col-md-12">
              <?php print render($page['bottom_content']); ?>
            </div>
          </div>
        </div>
        <!-- EOF:#bottom-content-inside -->

      </div>
    </div>
    <!-- EOF: #bottom-content -->
  <?php endif; ?>

</div>
<!-- EOF:#page -->

<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']):?>
  <!-- #footer -->
  <footer id="footer-front" class="clearfix">
    <div class="container">

      <!-- #footer-inside -->
      <div id="footer-inside" class="clearfix">
        <div class="row">
          <div class="col-md-3">
            <?php if ($page['footer_first']):?>
              <div class="footer-area">
                <?php print render($page['footer_first']); ?>
              </div>
            <?php endif; ?>
          </div>

          <div class="col-md-3">
            <?php if ($page['footer_second']):?>
              <div class="footer-area">
                <?php print render($page['footer_second']); ?>
              </div>
            <?php endif; ?>
          </div>

          <div class="col-md-3">
            <?php if ($page['footer_third']):?>
              <div class="footer-area">
                <?php print render($page['footer_third']); ?>
              </div>
            <?php endif; ?>
          </div>

          <div class="col-md-3">
            <?php if ($page['footer_fourth']):?>
              <div class="footer-area">
                <?php print render($page['footer_fourth']); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <!-- EOF: #footer-inside -->

    </div>
  </footer>
  <!-- EOF #footer -->
<?php endif; ?>

<footer id="subfooter" class="clearfix">
  <div class="container">

    <!-- #subfooter-inside -->
    <div id="subfooter-inside" class="clearfix">
      <div class="row">
        <div class="col-md-12">
          <!-- #subfooter-left -->
          <div class="subfooter-area">
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('menu', 'secondary-menu', 'links', 'clearfix')))); ?>

            <?php if ($page['footer']):?>
              <?php print render($page['footer']); ?>
            <?php endif; ?>

          </div>
          <!-- EOF: #subfooter-left -->
        </div>
      </div>
    </div>
    <!-- EOF: #subfooter-inside -->

  </div>
</footer>
<!-- EOF:#subfooter -->