<?php /* Template Name: Home Page */ ?>
<?php  get_header(); ?>
<!-- Main Content -->

<div class="container">
  <div class="wrap">
    <section id="about-us" class="item-homepage">
        <div class="about-me">
            <h2><?php the_field('title_about_us'); ?></h2>
            <div class="inner">
                <p><?php the_field('description_about_us'); ?></p>
            </div>
        </div>
    </section>
    <section id="services" class="item-homepage">
        <div class="services">
            <h2><?php the_field('title_services'); ?></h2>
            <div class="inner">
                <div class="row">
                    <div class="col-3">
                        <div class="item-service">
                            <a href="" class="link-item-service">
                    <img src="<?php echo get_template_directory_uri();?>/img/icon_mobile_app.png" alt="mobile app">
                  </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item-service">
                            <a href="" class="link-item-service">
                    <img src="<?php echo get_template_directory_uri();?>/img/icon_mobile_app.png" alt="mobile app">
                  </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item-service">
                            <a href="" class="link-item-service">
                    <img src="<?php echo get_template_directory_uri();?>/img/icon_mobile_app.png" alt="mobile app">
                  </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item-service">
                            <a href="" class="link-item-service">
                    <img src="<?php echo get_template_directory_uri();?>/img/icon_mobile_app.png" alt="mobile app">
                  </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" class="item-homepage">
        <div class="projects">
            <h2><?php the_field('title_projects'); ?></h2>
            <div class="inner">
                <div class="row">
                    <div class="col-6">
                        <div class="item-project">
                            <a href="" class="link-item-project">
                    <img src="<?php echo get_template_directory_uri()?>/img/websimpleone.jpg" alt="">
                    <span class="bg-opacity">web Simple one</span>
                  </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-project">
                            <a href="" class="link-item-project">
                    <img src="<?php echo get_template_directory_uri()?>/img/appsimpleone.jpg" alt="">
                    <span class="bg-opacity">web Simple one</span>
                  </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-project">
                            <a href="" class="link-item-project">
                    <img src="<?php echo get_template_directory_uri()?>/img/appwedding.jpg" alt="">
                    <span class="bg-opacity">web Simple one</span>
                  </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-project">
                            <a href="" class="link-item-project">
                    <img src="<?php echo get_template_directory_uri()?>/img/readit4me.jpg" alt="">
                    <span class="bg-opacity">web Simple one</span>
                  </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="item-project">
                            <a href="" class="link-item-project">
                    <img src="<?php echo get_template_directory_uri()?>/img/appmobile.jpg" alt="">
                    <span class="bg-opacity">web Simple one</span>
                  </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="responsive-customer" class="item-homepage">
        <div class="responsive-customer">
            <h2><?php the_field('title_responsive_customer'); ?></h2>
            <div class="inner">
                <?php
                    $infor = get_field('infor_customer');  
                    if( $infor ): ?>
                <div class="avata">
                    <?php 
                        $image =  $infor['avata'];
                        if( !empty($image) ): ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid" />
                    <?php endif; ?>
                </div>
                <div class="profile">
                    <h6 class="title-profile">
                        <span class="name">
                            <strong><?php echo $infor['name']; ?></strong>
                        </span>
                        <span class="position">
                            <?php echo $infor['position']; ?>
                        </span>
                    </h6>
                    <p> <?php echo $infor['description']; ?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section id="our-clients" class="item-homepage">
        <div class="our-clients">
            <h2><?php the_field('title_our_clients'); ?></h2>
            <div class="inner">
                <img src="<?php echo get_template_directory_uri();?>/img/logocontract.png " alt="">
            </div>
        </div>
    </section>
    <section id="contact" class="item-homepage">
        <div class="contact">
            <h2><?php the_field('title_contact'); ?></h2>
            <div class="inner">
               <div class="row">
                 <div class="col-6">
                    <div class="contact-cont">
                        <?php
                            $contact = get_field('contact');  
                            if( $contact ): ?>
                                <span><?php echo $contact['company_name'] ?></span><br>
                                <span><?php echo $contact['address'] ?></span><br>
                                <span><a href="tel:<?php echo $contact['phone_number'] ?>"><?php echo $contact['phone_number'] ?></a></span><br>
                                <span><a href="mailto:<?php echo $contact['email'] ?>"><?php echo $contact['email'] ?></a></span><br>
                                <span><a href="mailto:<?php echo $contact['mail'] ?>"><?php echo $contact['mail'] ?></a></span>
                        <?php endif; ?>
                    </div>
                 </div>
                 <div class="col-6">
                   <div class="map">
                       <?php the_field('map'); ?>
                   </div>
                 </div>
               </div>
            </div>
        </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>