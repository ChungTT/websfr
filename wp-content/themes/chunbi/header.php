<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>sfr</title>
    <?php wp_head(); ?>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a id="header-logo" title="briq" href="<?php echo get_home_url(); ?>">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sfrlogo.png" alt="<?php echo bloginfo(); ?>">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
          <div class="collapse navbar-collapse menu-header" id="navbarResponsive">
              <ul class="navbar-nav ">
                  <li class="nav-item active">
                      <a class="nav-link" href="#about-us">about us</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#services">services</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#projects">projects</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#responsive-customer">responsive customer</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#our-clients">our clients</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#contact">contact</a>
                  </li>
              </ul>
          </div>
      </div>
    </nav>
    <header class="masthead">
        <!-- <div class="overlay"></div> -->
        <div class="slider-header">
          <div class="item-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/background.jpg')">
            <div class="container">
                <div class="row inner">
                    <div class="col-6 mx-auto cont-header">
                        <div class="site-heading">
                            <h1><span class="text-black">we make</span><br><span class="text-green">awesome apps</span></h1>
                        </div>
                    </div>
                    <div class="col-6 mx-auto cont-header cont-img">
                        <div class="images-heading">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/iphonefan.png" alt="images-heading" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="item-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/background.jpg')">
            <div class="container">
                <div class="row inner">
                    <div class="col-6 mx-auto cont-header">
                        <div class="site-heading">
                            <h1><span class="text-black">we make</span><br><span class="text-green">awesome apps</span></h1>
                        </div>
                    </div>
                    <div class="col-6 mx-auto cont-header cont-img">
                        <div class="images-heading">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/iphonefan.png" alt="images-heading" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="item-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/background.jpg')">
            <div class="container">
                <div class="row inner">
                    <div class="col-6 mx-auto cont-header">
                        <div class="site-heading">
                            <h1><span class="text-black">we make</span><br><span class="text-green">awesome apps</span></h1>
                        </div>
                    </div>
                    <div class="col-6 mx-auto cont-header cont-img">
                        <div class="images-heading">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/iphonefan.png" alt="images-heading" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!-- <div class="overlay"></div> -->
    </header>
    <?php  ?>