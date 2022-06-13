<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
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
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<div id="page">

<script>
   new WOW().init();
 </script>

<div id="" style="background: #1b3b96;">
 <header id="masthead" class="site-header container" role="banner">
    <div class="row">
      <div id="logo" class="site-branding col-sm-6">
        <?php if ($logo): ?><?php endif; ?>
        <h1 id="site-title">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
        </h1>
      </div>
      <div class="col-sm-6 mainmenu">
       <!-- <div class="mobilenavi"></div>-->
        <nav id="navigation" role="navigation">
          <div id="">
            <?php
              if (module_exists('i18n_menu')) {
                $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
              } else {
                $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
              }
              /*print drupal_render($main_menu_tree); */
            ?>


               <?php if($page['up-menu']) : ?>
    <div id="footer-block-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php print render($page['up-menu']); ?>
          </div>
        </div>
      </div>
    </div>

    <?php endif; ?>



          </div>
        </nav>
      </div>
    </div>
  </header>
  </div>


 <div id="Menuestatico" style="background: white;">

  <header id="masthead" class="site-header container" role="banner">
    <div class="row">
      <div id="logo" class="site-branding col-sm-6">
        <?php if ($logo): ?><div id="site-logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a></div><?php endif; ?>
        <h1 id="site-title">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
        </h1>
      </div>
      <div class="col-sm-6 mainmenu">
        <!--<div class="mobilenavi"></div>-->
        <nav id="navigation" role="navigation">
          <div id="main-menu">
            <?php
              if (module_exists('i18n_menu')) {
                $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
              } else {
                $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
              }
              /*print drupal_render($main_menu_tree); */
            ?>


               <?php if($page['topmenu']) : ?>
    <div id="footer-block-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php print render($page['topmenu']); ?>
          </div>
        </div>
      </div>
    </div>

    <?php endif; ?>



          </div>
        </nav>
      </div>
    </div>
  </header>
  </div>


  <?php if ($is_front): ?>
  <?php if (theme_get_setting('slideshow_display','nexus')): ?>
  <?php
    $slide1_head = check_plain(theme_get_setting('slide1_head','nexus'));   $slide1_desc = check_markup(theme_get_setting('slide1_desc','nexus'), 'full_html'); $slide1_url = check_plain(theme_get_setting('slide1_url','nexus'));
    $slide2_head = check_plain(theme_get_setting('slide2_head','nexus'));   $slide2_desc = check_markup(theme_get_setting('slide2_desc','nexus'), 'full_html'); $slide2_url = check_plain(theme_get_setting('slide2_url','nexus'));
    $slide3_head = check_plain(theme_get_setting('slide3_head','nexus'));   $slide3_desc = check_markup(theme_get_setting('slide3_desc','nexus'), 'full_html'); $slide3_url = check_plain(theme_get_setting('slide3_url','nexus'));
  ?>
  <div id="slidebox" class="flexslider">
    <ul class="slides">
      <li>
        <img src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/images/slide-image-1.jpg'; ?>"/>
        <?php if($slide1_head || $slide1_desc) : ?>
          <div class="flex-caption">
            <h2><?php print $slide1_head; ?></h2><?php print $slide1_desc; ?>
            <a class="frmore" href="<?php print url($slide1_url); ?>"> <?php print t('READ MORE'); ?> </a>
          </div>
        <?php endif; ?>
      </li>
      <li>
        <img src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/images/slide-image-2.jpg'; ?>"/>
        <?php if($slide2_head || $slide2_desc) : ?>
          <div class="flex-caption">
            <h2><?php print $slide2_head; ?></h2><?php print $slide2_desc; ?>
            <a class="frmore" href="<?php print url($slide2_url); ?>"> <?php print t('READ MORE'); ?> </a>
          </div>
        <?php endif; ?>
      </li>
      <li>
        <img src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/images/slide-image-3.jpg'; ?>"/>
        <?php if($slide3_head || $slide3_desc) : ?>
          <div class="flex-caption">
            <h2><?php print $slide3_head; ?></h2><?php print $slide3_desc; ?>
            <a class="frmore" href="<?php print url($slide3_url); ?>"> <?php print t('READ MORE'); ?> </a>
          </div>
        <?php endif; ?>
      </li>
    </ul><!-- /slides -->
    <div class="doverlay"></div>
  </div>
  <?php endif; ?>
  <?php endif; ?>









  <?php if($page['preface_first1'] || $page['preface_middle2'] || $page['preface_last3']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_first1'] + (bool) $page['preface_middle2'] + (bool) $page['preface_last3'] ) ); ?>
    <div id="preface-area-event">
      <div class="container">
        <div class="row">
          <?php if($page['preface_first1']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_first1']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_middle2']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middle2']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_last3']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_last3']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>



  <?php if($page['preface_first_us'] || $page['preface_middle_us'] || $page['preface_last_us']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_first_us'] + (bool) $page['preface_middle_us'] + (bool) $page['preface_last_us'] ) ); ?>
    <div id="preface-area-who">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" class="tm-section-down-arrow" style="width: 100%;height: 100px;margin-top: -80px;">
                    <polygon fill="#1b3b96" points="0,0  100,0  50,60"></polygon>
                </svg>

      <div class="container">
        <div class="row">
          <?php if($page['preface_first_us']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_first_us']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_middle_us']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middle_us']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_last_us']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_last_us']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>


   <?php if($page['preface_title_choice']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_title_choice']  ) ); ?>
    <div id="preface-title-choice">
      <div class="container">
        <div class="row">
          <?php if($page['preface_title_choice']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_title_choice']); ?>
          </div><?php endif; ?>

        </div>
      </div>
    </div>
  <?php endif; ?>


  <?php if($page['preface_first_choice'] || $page['preface_middle_choice'] || $page['preface_half_choice'] || $page['preface_last_choice']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_first_choice'] + (bool) $page['preface_middle_choice'] + (bool) $page['preface_half_choice'] + (bool) $page['preface_last_choice'] ) ); ?>
    <div id="preface-area-choice">
      <div class="container">
        <div class="row">
          <?php if($page['preface_first_choice']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_first_choice']); ?>
          </div><?php endif; ?>

          <?php if($page['preface_middle_choice']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middle_choice']); ?>
          </div><?php endif; ?>

          <?php if($page['preface_half_choice']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_half_choice']); ?>
          </div><?php endif; ?>

          <?php if($page['preface_last_choice']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_last_choice']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

   <?php if($page['preface_title_services']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_title_services']  ) ); ?>
    <div id="preface-title-services">
      <div class="container">
        <div class="row">
          <?php if($page['preface_title_services']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_title_services']); ?>
          </div><?php endif; ?>

        </div>
      </div>
    </div>
  <?php endif; ?>



  <?php if($page['preface_first'] || $page['preface_middle'] || $page['preface_half'] || $page['preface_last']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_first'] + (bool) $page['preface_middle'] + (bool) $page['preface_half'] + (bool) $page['preface_last'] ) ); ?>
    <div id="preface-area">
      <div class="container">
        <div class="row">
          <?php if($page['preface_first']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_first']); ?>
          </div><?php endif; ?>

          <?php if($page['preface_middle']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middle']); ?>
          </div><?php endif; ?>

          <?php if($page['preface_half']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_half']); ?>
          </div><?php endif; ?>

          <?php if($page['preface_last']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_last']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>




   <?php if($page['preface_first_client'] || $page['preface_middle_client'] || $page['preface_last_client']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_first_client'] + (bool) $page['preface_middle_client'] + (bool) $page['preface_last_client'] ) ); ?>
    <div id="preface-area-client">
      <div class="container">
        <div class="row">
          <?php if($page['preface_first_client']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_first_client']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_middle_client']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middle_client']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_last_client']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_last_client']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>







  <?php if($page['preface_firstA'] || $page['preface_middleB'] || $page['preface_lastC']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_firstA'] + (bool) $page['preface_middleB'] + (bool) $page['preface_lastC'] ) ); ?>
    <div id="preface-area-title">
      <div class="container">
        <div class="row">
          <?php if($page['preface_firstA']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_firstA']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_middleB']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middleB']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_lastC']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_lastC']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>



  <?php if($page['header']) : ?>
    <div id="header-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php print render($page['header']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>


      <?php if($page['preface_title_sucess']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_title_sucess']  ) ); ?>
    <div id="preface-title-solves">
      <div class="container">
        <div class="row">
          <?php if($page['preface_title_sucess']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_title_sucess']); ?>
          </div><?php endif; ?>

        </div>
      </div>
    </div>
  <?php endif; ?>


     <?php if($page['preface_first_sucess'] || $page['preface_middle_sucess'] || $page['preface_last_sucess']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_first_sucess'] + (bool) $page['preface_middle_sucess'] + (bool) $page['preface_last_sucess'] ) ); ?>
    <div id="preface-area-success">
      <div class="container">
        <div class="row">
          <?php if($page['preface_first_sucess']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_first_sucess']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_middle_sucess']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middle_sucess']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_last_sucess']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_last_sucess']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>


   <?php if($page['preface_title_solution']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_title_solution']  ) ); ?>
    <div id="preface-title-solution">
      <div class="container">
        <div class="row">
          <?php if($page['preface_title_solution']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_title_solution']); ?>
          </div><?php endif; ?>

        </div>
      </div>
    </div>
  <?php endif; ?>


   <?php if($page['preface_first_solutions'] || $page['preface_middle_solutions'] || $page['preface_last_solutions']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_first_solutions'] + (bool) $page['preface_middle_solutions'] + (bool) $page['preface_last_solutions'] ) ); ?>
    <div id="preface-area-solves">
      <div class="container">
        <div class="row">
          <?php if($page['preface_first_solutions']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_first_solutions']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_middle_solutions']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middle_solutions']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_last_solutions']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_last_solutions']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>



   <?php if($page['preface_first_provider'] || $page['preface_middle_provider'] || $page['preface_last_provider']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_first_provider'] + (bool) $page['preface_middle_provider'] + (bool) $page['preface_last_provider'] ) ); ?>
    <div id="preface-area-provider">
      <div class="container">
        <div class="row">
          <?php if($page['preface_first_provider']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_first_provider']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_middle_provider']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middle_provider']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_last_provider']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_last_provider']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>





  <?php if($page['preface_title_contactus']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_title_solution']  ) ); ?>
    <div id="preface_title_contactus">
      <div class="container">
        <div class="row">
          <?php if($page['preface_title_contactus']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_title_contactus']); ?>
          </div><?php endif; ?>

        </div>
      </div>
    </div>
  <?php endif; ?>



   <?php if($page['preface_first_team1'] || $page['preface_middle_team2'] || $page['preface_last_team3']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_first_team1'] + (bool) $page['preface_middle_team2'] + (bool) $page['preface_last_team3'] ) ); ?>
    <div id="preface-area-team">
      <div class="container">
        <div class="row">
          <?php if($page['preface_first_team1']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_first_team1']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_middle_team2']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middle_team2']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_last_team3']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_last_team3']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>


    <?php if($page['preface_first_form'] || $page['preface_middle_form'] || $page['preface_last_form']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_first_form'] + (bool) $page['preface_middle_form'] + (bool) $page['preface_last_form'] ) ); ?>
    <div id="preface-area-form">
      <div class="container">
        <div class="row">
          <?php if($page['preface_first_form']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_first_form']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_middle_form']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middle_form']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_last_form']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_last_form']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>











  <?php if($page['footer']) : ?>
    <div id="footer-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php print render($page['footer']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?>
    <?php $footer_col = ( 12 / ( (bool) $page['footer_first'] + (bool) $page['footer_second'] + (bool) $page['footer_third'] + (bool) $page['footer_fourth'] ) ); ?>
    <div id="bottom">
      <div class="container">
        <div class="row">
          <?php if($page['footer_first']): ?><div class="footer-block col-sm-<?php print $footer_col; ?>">
            <?php print render ($page['footer_first']); ?>
          </div><?php endif; ?>
          <?php if($page['footer_second']): ?><div class="footer-block col-sm-<?php print $footer_col; ?>">
            <?php print render ($page['footer_second']); ?>
          </div><?php endif; ?>
          <?php if($page['footer_third']): ?><div class="footer-block col-sm-<?php print $footer_col; ?>">
            <?php print render ($page['footer_third']); ?>
          </div><?php endif; ?>
          <?php if($page['footer_fourth']): ?><div class="footer-block col-sm-<?php print $footer_col; ?>">
            <?php print render ($page['footer_fourth']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="fcred col-sm-12">
        <center><img src="/solintel/sites/all/themes/nexus/images/footer2.png " style="width: 42px;height: 44px;"></center>
           <center style="color: #dbdbdb; size: 12px; font-size: 14px;"><?php print t('Solintel S.A. Todos Los Derechos Reservados &copy;'); ?> <?php echo date("Y"); ?></center>


        </div>
      </div>
    </div>
  </div>
</div>