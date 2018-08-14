<?php /* Template Name: page */ ?>
<?php get_header(); ?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Main Content -->
<div class="container">
  
  <div id="menu-content">
    <h2>Project</h2>
    <?php 
      $defaults = array (
        'container' => 'ul',
        'theme_location' => 'project-menu',
        'menu_class' => 'list-unstyled',
      );
      wp_nav_menu($defaults);
    ?>
  </div>
</div>
<div id="page">
  <div class="container">
    <div class="item">
        <h3 class="show-mobile">DỰ ÁN ABRIOTOOLS</h3>
        <div class="cont-top common-cont pull-right img-medium">
          <div class="image">
             <img src="<?php echo get_template_directory_uri();?>/img/app-img1.png" alt="xastress">
          </div>
        </div>
        <div class="cont-bottom common-cont">
          <div class="wrap">
            <h3 class="show-desktop">DỰ ÁN clockbright</h3>
            <div class="cont">
              <p>
                A mobile app and website portal which easily allows users to order food from nearby restaurants every time by integrating with GPS and payment gateway “Authorized.net”. The system is composed of iOS/Android/WEB applications all designed to:</p>

                <p>Provide the next level of convenience so that finding fresh food around is never be easier. <br>
                Time saving <br>
                Results: Released in mid 2014, the app has attracted thousands of users downloaded and registered. The user growth each month is approximately 5-15%. </p>

                <p>Technology: Native iOS and Android (support iOS 7 and higher, Android 4.0 and higher). Integrate Authorize.NET. Push Notification</p>
                <p>
                A mobile app and website portal which easily allows users to order food from nearby restaurants every time by integrating with GPS and payment gateway “Authorized.net”. The system is composed of iOS/Android/WEB applications all designed to:</p>

                <p>Provide the next level of convenience so that finding fresh food around is never be easier. <br>
                Time saving <br>
                Results: Released in mid 2014, the app has attracted thousands of users downloaded and registered. The user growth each month is approximately 5-15%. </p>

                <p>Technology: Native iOS and Android (support iOS 7 and higher, Android 4.0 and higher). Integrate Authorize.NET. Push Notification</p>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="item">
       <h3 class="show-mobile">DỰ ÁN ABRIOTOOLS</h3>
      <div class="cont-top common-cont pull-left img-small">
        <div class="image">
           <img src="<?php echo get_template_directory_uri();?>/img/app-img2.png" alt="xastress">
        </div>
      </div>
      <div class="cont-bottom common-cont">
        <div class="wrap">
          <h3 class="show-desktop">DỰ ÁN ABRIOTOOLS</h3>
          <div class="cont">
           <p>Understanding the profound desire of businessmen, Savvycom developed Crave Vend– the smart POS solution. The app was logically made available on the need of merchants with the idea of giving them the appropriate platform for efficiency improvement to process and make sales information available in real time from any iOs and Android devices. It helps to manage onsite and online orders and deliver eCoupons to your customer.</p>
            <p>Results: Currently, the App is successfully being practiced in over 50 restaurants across USA. Come along with Crave Pass, the solution is a growing channel to boost up sales and customer satisfaction.</p>
            <p> Technology: Native iOS and Android (support iOS 7 and higher, Android 4.0 and higher). Integrate Authorize.NET. Push Notification. Mercury Payment. Bluetooth printing </p>
            <p> Results: Currently, the App is successfully being practiced in over 50 restaurants across USA. Come along with Crave Pass, the solution is a growing channel to boost up sales and customer satisfaction </p>
            <p> echnology: Native iOS and Android (support iOS 7 and higher, Android 4.0 and higher). Integrate Authorize.NET. Push Notification. Mercury Payment. Bluetooth printing </p>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="item">
      <h3 class="show-mobile">DỰ ÁN HELLO RELAXATION</h3>
       <div class="cont-top common-cont pull-right img-small">
        <div class="image">
           <img src="<?php echo get_template_directory_uri();?>/img/app-img3.png" alt="xastress">
        </div>
      </div>
      <div class="cont-bottom common-cont">
        <div class="wrap">
          <h3 class="show-desktop">DỰ ÁN HELLO RELAXATION</h3>
          <div class="cont">
            <p>Understanding the profound desire of businessmen, Savvycom developed Crave Vend– the smart POS solution. The app was logically made available on the need of merchants with the idea of giving them the appropriate platform for efficiency improvement to process and make sales information available in real time from any iOs and Android devices. It helps to manage onsite and online orders and deliver eCoupons to your customer.</p>
            <p>Results: Currently, the App is successfully being practiced in over 50 restaurants across USA. Come along with Crave Pass, the solution is a growing channel to boost up sales and customer satisfaction.</p>
            <p> Technology: Native iOS and Android (support iOS 7 and higher, Android 4.0 and higher). Integrate Authorize.NET. Push Notification. Mercury Payment. Bluetooth printing </p>
            <p> Results: Currently, the App is successfully being practiced in over 50 restaurants across USA. Come along with Crave Pass, the solution is a growing channel to boost up sales and customer satisfaction </p>
            <p> echnology: Native iOS and Android (support iOS 7 and higher, Android 4.0 and higher). Integrate Authorize.NET. Push Notification. Mercury Payment. Bluetooth printing </p>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="item">
        <h3 class="show-mobile">DỰ ÁN SIMPLE ONE</h3>
       <div class="cont-top common-cont pull-left img-medium">
          <div class="image">
             <img src="<?php echo get_template_directory_uri();?>/img/app-img4.png" alt="xastress">
          </div>
        </div>
        <div class="cont-bottom common-cont">
          <div class="wrap">
            <h3 class="show-desktop">DỰ ÁN SIMPLE ONE</h3>
            <div class="cont">
              <p>Understanding the profound desire of businessmen, Savvycom developed Crave Vend– the smart POS solution. The app was logically made available on the need of merchants with the idea of giving them the appropriate platform for efficiency improvement to process and make sales information available in real time from any iOs and Android devices. It helps to manage onsite and online orders and deliver eCoupons to your customer.</p>

              <p>Results: Currently, the App is successfully being practiced in over 50 restaurants across USA. Come along with Crave Pass, the solution is a growing channel to boost up sales and customer satisfaction.</p>

              <p>Technology: Native iOS and Android (support iOS 7 and higher, Android 4.0 and higher). Integrate Authorize.NET. Push Notification. Mercury Payment. Bluetooth printing</p>

            </div>
          </div>
        </div>
        <div class="clearfix"></div>
    </div>
  </div>
</div>
<?php endwhile; else: ?>
<p> Sorry, page not found.</p>
<?php endif; ?>
<?php get_footer(); ?>