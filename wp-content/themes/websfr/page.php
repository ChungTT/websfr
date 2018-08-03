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
    <div class="row">
        <div class="col-6 content-<?php echo get_field('postion_content') ?>">
          <div class="wrap">
            <h3><?php the_field('title_app_mobile'); ?></h3>
            <div class="cont">
               <?php the_content(); ?>
            </div>
          </div>
        </div>
        <div class="col-6 content-<?php echo get_field('postion_content') ?>">
          <?php 
            $image = get_field('image_app_mobile');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
        </div>
    </div>
  </div>
</div>
<?php endwhile; else: ?>
<p> Sorry, page not found.</p>
<?php endif; ?>
<?php get_footer(); ?>