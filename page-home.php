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

$contact_form = get_field('contact_form');

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
      <div class="col-sm-6 service">
        <div class="f-icon">
          <i class="fa fa-star circle-icon text-center" aria-hidden="true"></i>
        <h4 class="text-center">Online Presence</h4>
        <p>In this day and age, all businesses need to have a web presence. Customized websites with the right tools can easily complement and enhance how you generate income. We can provide you with different options like setting up features such as e-commerce, online appointment scheduling and so on. The opportunities to expand your web presence and ergo your wallet are endless. 
        </p>
        </div>
      </div>
      <div class="col-sm-6 service">
        <div class="f-icon">
          <i class="fa fa-commenting-o circle-icon text-center" aria-hidden="true"></i>
        <h4 class="text-center">Content Management System</h4>
        <p>We create fully customized Wordpress themes for websites. This Content Management System powers 25% of the web today and is used by various big companies like CNN, TechCrunch, Sony Music. We will set it up securely with https(SSL certificate issued)  and make it easy to edit the contents of your web pages, there would be no need to hire someone to make small changes to your website, like fixing typos, setting up new prices or adding features of your business.
        </p>
        </div>
      </div>
      <div class="col-sm-6 service">
        <div class="f-icon">
          <i class="fa fa-twitter circle-icon text-center" aria-hidden="true"></i>
        </div>
        <h4 class="text-center">Social Media and Search Engines</h4>
        <p>We can help set up your social media presence through Facebook, Twitter and LinkedIn. Furthermore we set you up with Google Plus, Bing and Yelp to help maximize your SEO (Search Engine Optimization) and marketing efforts. Almost everybody has a social media presence nowadays and most likely use Google or Bing search. All of these will help your customers find you easily.
        </p>
      </div>
      <div class="col-sm-6 service">
        <div class="f-icon">
          <i class="fa fa-mobile circle-icon text-center" aria-hidden="true"></i>
        </div>
        <h4 class="text-center">Mobile</h4>
        <p>Your website will be created using modern mobile-friendly solutions, meaning that if a prospective customer is viewing your website, he is not going to be frustrated trying to zoom in at what he wants to read. The interaction that takes place when people use mobile devices requires good readability and UI/UX design which is a standard in all our websites.
        </p>
      </div>
      <div class="col-sm-6 service">
        <div class="f-icon">
          <i class="fa fa-lock circle-icon text-center" aria-hidden="true"></i>
        </div>
        <h4 class="text-center">Domain Name, Hosting and custom E-mail</h4>
        <p>We can set you up with a hosting provider (such as GoDaddy, Bluehost, HostGator). We can also set up professional looking email addresses (e.g. you@yoursite.com) with different options such as forwarding or hosting on Gmail etc. depending on your budget.
        </p>
      </div>
      <div class="col-sm-6 service">
        <div class="f-icon">
          <i class="fa fa-paint-brush circle-icon text-center" aria-hidden="true"></i>
        </div>
        <h4 class="text-center">Graphics Design</h4>
        <p>We provide Logo Design for businesses. We also offer Professional Photography, which can include product photography, on-site place of business photography for an additional fee if you are in the greater Los Angeles area. These images can be used in your website, brochures and calling cards.
        </p>
      </div>
    </div>
  </div>
</section>
<hr>
<section id="pricing">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Pricing &amp; Packages</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 price-bubble">
        <h4>BASIC</h4>
        <div class="price">$599</div>
        <div class="well">
          <ul>
            <li>5 page dynamic or 7 page static website</li>
            <li>E-mail forwarding setup</li>
            <li>Shared Hosting and SSL Certificate setup</li>
            <li>Wordpress setup</li>
            <li>Contact form setup</li>
          </ul>
        </div>
      </div>

      <div class="col-md-6 price-bubble">
        <h4>BUSINESS</h4>
        <div class="price">$799</div>
        <div class="well">
          <ul>
            <li>All Basic features plus...</li>
            <li>7 page website</li>
            <li>1 logo design</li>
            <li>1 blogging / articles platform</li>
            <li>Custom theme development</li>
          </ul>
        </div>
      </div>

      <div class="col-md-6 price-bubble">
        <h4>E-commerce</h4>
        <div class="price">$999</div>
        <div class="well">
          <ul>
            <li>All Business features plus...</li>
            <li>E-commerce Wordpress website</li>
            <li>Sell your products online securely</li>
            <li>2 logo designs</li>
            <li>Woo-commerce setup</li>
          </ul>
        </div>
      </div>

      <div class="col-md-6 price-bubble">
        <h4>Full Application or E-commerce</h4>
        <div class="price">$1,199 - $3,499</div>
        <div class="well">
          <ul>
            <li>Pricing dependent on app complexity</li>
            <li>1 fullstack Python Flask / Django web application</li>
            <li>2 logo designs</li>
            <li>Custom Admin page</li>
            <li>Ubuntu Server setup with Digital Ocean / AWS</li>
            <li>SSL Certificate setup</li>
          </ul>
        </div>
      </div>
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
      <div class="col-md-6 dev">
        <img src="assets/img/me.jpg" class="img_us center-block">
        <h4 class="text-center">Mike Cabelin</h4>
        <p class="text-center">Lead Web Designer / Front-end Developer</p>
        <div class="text-center"><a href="http://mike.cabelin.com" target="_blank"><small>more info..</small></a></div>
      </div>
      <div class="col-md-6 dev">
        <img src="assets/img/art.jpg" class="img_us center-block">
        <h4 class="text-center">Art Cabelin</h4>
        <p class="text-center">Web Developer / Back-end Developer</p>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>