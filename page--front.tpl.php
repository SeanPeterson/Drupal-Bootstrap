<?php

/**
 * @file
 * Default theme implementation to display home page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<section class="intro">
    <div class="content">
      <img class="logo" src="<?php echo path_to_theme(); ?>/assets/images/logo.png" alt="company logo" />
      <p>A team of self confessed geeks who are <br>all about great digital design</p>
      <img class="scroll-btn" id="scroll-btn-1" src="<?php echo path_to_theme(); ?>/assets/images/btn-1.png" alt="scroll button" />
    </div>
</section>
<a href="about-1" id="about-1"></a>
<section class="about-section scroll">
  <img class="illustration" src="<?php echo path_to_theme(); ?>/assets/images/about-1.png" alt="illustration" />
  <p>Some agencies love <span class="primary-color">design</span>, but don't know how to build</p>
  <img class="scroll-btn" id="scroll-btn-2" src="<?php echo path_to_theme(); ?>/assets/images/btn-2.png" alt="scroll button" />
</section>
<section class="about-section" id="about-2">
  <img class="illustration" src="<?php echo path_to_theme(); ?>/assets/images/about-2.png" alt="illustration" />
  <p>Some agencies know how to <span class="primary-color">build</span> but can't do design</p>
  <img class="scroll-btn" id="scroll-btn-3"  src="<?php echo path_to_theme(); ?>/assets/images/btn-2.png" alt="scroll button" />
</section>
<section class="about-section" id="about-3">
  <img class="illustration" src="<?php echo path_to_theme(); ?>/assets/images/about-3.png" alt="illustration" />
  <p>We love <span class="primary-color">both</span></p>
  <a href="#"><img class="scroll-btn" id="scroll-btn-4" src="<?php echo path_to_theme(); ?>/assets/images/btn-2.png" alt="scroll button" /></a>
</section>
<section class="service-section" id="service">
  <div class="container">
    <h1>Services</h1>
    <div class="row">
      <div class="col-sm-12 col-md-3 clear">
        <img class="service-icon" src="<?php echo path_to_theme(); ?>/assets/images/service-1.png" alt="service icon" />
        <p>Web Development</p>
      </div>
      <div class="col-sm-12 col-md-3 clear">
        <img class="service-icon" src="<?php echo path_to_theme(); ?>/assets/images/service-2.png" alt="service icon" />
        <p>Design</p>
      </div>
      <div class="col-sm-12 col-md-3 clear">
        <img class="service-icon" src="<?php echo path_to_theme(); ?>/assets/images/service-3.png" alt="service icon" />
        <p>Branding</p>
      </div>
      <div class="col-sm-12 col-md-3 clear">
        <img class="service-icon" src="<?php echo path_to_theme(); ?>/assets/images/service-4.png" alt="service icon" />
        <p>UX Research</p>
      </div>
    </div>
    <a href="#about-1"><img class="scroll-btn" id="scroll-btn-5" src="<?php echo path_to_theme(); ?>/assets/images/btn-3.png" alt="scroll button" /></a>
  </div>
</section>
<section class="client-seciton" id="client">
  <div class="carousel-container">
    <div class="col-md-12">
         <h1>Clients</h1>

        <div class="well">
            <div id="myCarousel" class="carousel slide">
                
                <!-- Carousel items -->
                <div class="carousel-inner" id="itemList">
                    <div class="item active" id="active-carousel">
                        <div class="row"></div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item" id="inactive-carousel">
                        <div class="row"></div>
                        <!--/row-->
                    </div>
                </div>
                <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
            <!--/myCarousel-->
        </div>
        <!--/well-->
    </div>
    <img class="scroll-btn" id="scroll-btn-6" src="<?php echo path_to_theme(); ?>/assets/images/btn-3.png" alt="scroll button" />
</div>
</section>
<section class="location-section" id="location">
  <h1><span class="small-hide">How to</span> find us</h1>
  <div id="map"></div>
  <img class="scroll-btn" id="scroll-btn-7" src="<?php echo path_to_theme(); ?>/assets/images/btn-2.png" alt="scroll button" />
</section>
<section class="contact-section">
  <div class="contact-container">
    <h1>Contact</h1>
    <form action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        <textarea class="form-control" placeholder="Message" rows="8"></textarea>
      </div>
      <button type="submit" class="btn btn-default">Send Message!</button>
    </form>
    <p class="small-hide">Or phone on: 01923 220121</p>
    <p class="small-text medium-hide"><i class="fa fa-phone" aria-hidden="true"></i> 01923 220121</p>
    <p class="small-text medium-hide"><i class="fa fa-envelope" aria-hidden="true"></i> info@compucorp.co.uk</p>
  </div>
</section>
<div id="contact"></div>
<!--FOOTER-->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIJJALpfXtBUS-XA_r6zk_SDEGrSLRyfc&callback=initMap">
</script>