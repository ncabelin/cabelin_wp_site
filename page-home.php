<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cabelin
 */

$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');
$screenshot_1 = get_field('screenshot_1');
$screenshot_2 = get_field('screenshot_2');
$screenshot_3 = get_field('screenshot_3');

$contact_form = get_field('contact_formed');

$pricing = get_field('pricing_title');
get_header(); ?>
<section id="hero" class="clearfix">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="text-center"><?php echo $hero_title; ?></h1><hr>
        <p class="lead"><?php echo $hero_description; ?></p>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="<?php echo $screenshot_1['url']; ?>" alt="<?php echo $screenshot_1['alt']; ?>" class="carousel-img">
              <div class="carousel-caption">
                <p><?php echo $screenshot_1['alt']; ?></p>
              </div>
            </div>

            <div class="item">
              <img src="<?php echo $screenshot_2['url']; ?>" alt="<?php echo $screenshot_2['alt']; ?>" class="carousel-img">
              <div class="carousel-caption">
                <p><?php echo $screenshot_2['alt']; ?></p>
              </div>
            </div>

            <div class="item">
              <img src="<?php echo $screenshot_3['url']; ?>" alt="<?php echo $screenshot_3['alt']; ?>" class="carousel-img">
              <div class="carousel-caption">
                <p><?php echo $screenshot_3['alt']; ?></p>
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-md-5">
        <div class="well" id="contact">
          <h3 class="text-center"><strong>Contact Us</strong></h3>
          <p>Tell us your web needs and we'll give you a quote.</p>
          <?php echo $contact_form; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Our Services</h1>
      </div>
    </div>
    <div class="row fix">

    <?php 
      $loop = new WP_Query( array('post_type' => 'features', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-sm-6 service">
          <div class="f-icon">
            <i class="fa fa-<?php the_field('features_icon'); ?> circle-icon text-center" aria-hidden="true"></i>
            <h4 class="text-center"><?php the_title(); ?></h4>
            <?php the_field('features_description'); ?>
          </div>
        </div>

    <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section>
<hr>
<section id="pricing">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"><?php echo $pricing; ?></h1>
      </div>
    </div>
    <div class="row">

      <?php 
        $loop = new WP_Query( array('post_type' => 'pricing', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="col-md-6 price-bubble">
            <h4><?php the_title(); ?></h4>
            <div class="price"><?php the_field('price'); ?></div>
            <div class="well">
              <?php the_field('pricing_details'); ?>
            </div>
          </div>

      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section>

<section id="samples">

</section>

<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">About Us</h1>
      </div>
    </div>
    <div class="row">
      <?php 
        $loop = new WP_Query( array('post_type' => 'members', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="col-md-6 dev">
            <a href="<?php the_field('link'); ?>" target="_blank">
              <img src="<?php the_field('image'); ?>" class="img_us center-block">
            <h4 class="text-center"><?php the_title(); ?></h4>
            </a>
            <p class="text-center"><?php the_field('description'); ?></p>
          </div>

      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section>
<?php
get_footer();
?>