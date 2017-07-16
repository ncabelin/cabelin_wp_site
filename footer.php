<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cabelin
 */

?>
<footer>
  <div class="col-md-12">
    <ul class="list-inline unstyled-list text-center footer-nav">
      <li><a href="#navigation" id="nav_home">Home</a></li>
      <li><a href="#pricing" id="nav_services">Pricing</a></li>
      <li><a href="#tos" id="nav_services">Terms of Service</a></li>
      <li><a href="#privacy" id="nav_cont">Privacy</a></li>
    </ul>
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cabelinslogo.jpg" class="footer_logo center-block">
    <p class="text-center">Copyright &copy; 2017 Cabelin Software Solutions</p>
  </div>
</footer>

<!-- jquery and bootstrap js -->
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script>
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 2500
    });

    $('.logo').fadeOut(0);
    $('.logo').fadeIn(2000);
  });
  </script>
</body>
</html>

<?php wp_footer(); ?>

