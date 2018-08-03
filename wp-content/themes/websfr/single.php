<?php get_header(); ?>

<!-- Page Header -->
	<?php $image = get_field('banner'); ?>
    <header class="masthead" style="background-image: url('<?php echo $image['url'] ?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php the_title(); ?></h1>
              <h2 class="subheading"><?php the_field('sub_heading'); ?></h2>
              <span class="meta">Posted by
                <a href="#"><?php the_author_posts_link(); ?></a>
                on <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <?php if( have_posts() ) : while ( have_posts() ) : the_post();?>
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
          	<?php the_content(); ?>
        </div>
      </div>
    </article>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>