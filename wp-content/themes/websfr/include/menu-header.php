<!-- Desktop Menu -->
<?php
    $logo_header = get_field('logo_header', 'option');
    $logo_header = $logo_header ? $logo_header['url'] : TEMPLATE_URL . '/images/briq-logo.svg';
?>
<header id="header" data-module="header">
    <nav class="container navbar navbar-expand-lg" role="navigation">
      <a id="header-logo" title="briq" href="index.html">
        <img class="img-fluid" src="<?php echo TEMPLATE_URL; ?>/images/briq-logo.svg" alt="<?php echo bloginfo(); ?>">
      </a>
      <button class="hamburger-menu" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- {% include "modules/global/menu.html" %} -->
      <div class="slide" id="main-menu" data-module="menu">
        <div class="menu-wrap-outer">
          <div class="menu-wrap-inner">
            <div></div>
            <div class="menu-center">
              <ul class="ml-0 menu-style">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'items_wrap'     => '%3$s',
                        'container'      => false,
                        'depth'          => 2,
                        'walker'         => new briq_header_menu()
                    ) );
                ?>
              </ul>
            </div>
            <div class="menu-right">
              <ul class="ml-0 menu-style">
                <li><a href="#" class="">SIGN IN</a></li>
                <li><a href="#" class="cart-btn">CART
                <i class="icomoon icon-sort" aria-hidden="true">
                <span class="cart-badge">
                <b>2</b>
              </span></i>
                </a></li>
                <li>
                  <ul class="navbar-social">
                    <li><a rel="noopener" target="_blank" href="#">
                      <i class="icomoon icon-facebook" aria-hidden="true"></i>
                    </a></li>
                    <li><a rel="noopener" target="_blank" href="#">
                      <i class="icomoon icon-twitter" aria-hidden="true"></i>
                    </a></li>
                    <li><a rel="noopener" target="_blank" href="#">
                      <i class="icomoon icon-instagram" aria-hidden="true"></i>
                    </a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </nav>
</header>