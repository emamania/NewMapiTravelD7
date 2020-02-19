<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
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
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
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
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
 
 global $base_root;
?>
<style>body{background: #fff};</style>
<header class="header-area">
  <div class="emagrid">
        <nav class="nav">
            <a class="whatsnav" href="https://api.whatsapp.com/send?phone=51984630919&text=Hola Machupicchu Travel. Me gustaría información sobre." rel="nofollow">
                <img src="https://www.machupicchu.biz/imagenes/iconos/whatsapp.png" alt="Whatsapp">
            </a>
            <a href="<?php print $front_page; ?> " rel="home" class="link nav-brand text-light">
                <img src="./sites/all/themes/newqelluchaska/assets/images/logo.png" alt="<?php print $site_name; ?>">
            </a>
            <!-- toggle menu -->
            <button class="toggle-button">
                <i class="fas fa-bars"></i>
            </button>

          <!-- navigation items -->
          <div class="collapse" id="toggle-collapse">
              <ul class="navbar-nav">
                  <li class="nav-link">
                      <a href="#" class="link text-light">Top Tours en Perú</a>
                      <ul class="subnavbar-nav">
                          <li><a href="single.html">Tours de 8 a mapi</a></li>
                          <li><a href="single.html">Tours de 7 a mapi</a></li>
                          <li><a href="single.html">Tours de 6 a mapi</a></li>
                          <li><a href="single.html">Tours de 5 a mapi</a></li>
                          <li><a href="single.html">Tours de 4 a mapi</a></li>
                      </ul>
                  </li>
                  <li class="nav-link">
                      <a href="#" class="link text-light">Tours de Aventura</a>
                      <ul class="subnavbar-nav">
                          <li><a href="single.html">Camino Inca</a></li>
                          <li><a href="single.html">Salkantay</a></li>
                          <li><a href="single.html">Globo</a></li>
                          <li><a href="single.html">Parapente</a></li>
                          <li><a href="single.html">choquequirao</a></li>
                          <li><a href="single.html">Lares</a></li>
                          <li><a href="single.html">Canotaje</a></li>
                          <li><a href="single.html">Ciclismo</a></li>
                      </ul>
                  </li>
                  <li class="nav-link">
                      <a href="#" class="link text-light">Lugares Turisticos</a>
                  </li>
                  <li class="nav-link">
                      <a href="#" class="link text-light">Tours a Sudamerica</a>
                  </li>
                  <li class="nav-link">
                      <a href="#" class="link text-light">Tours full day</a>
                      <ul class="subnavbar-nav">
                          <li><a href="single.html">Machu Picchu 1 dia</a></li>
                          <li><a href="single.html">Cerro de 7 Colores</a></li>
                          <li><a href="single.html">Humantay</a></li>
                          <li><a href="single.html">Maras Moray</a></li>
                          <li><a href="single.html">Valle Sagrado</a></li>
                          <li><a href="single.html">Inti Raymi</a></li>
                          <li><a href="single.html">Cusco</a></li>
                          <li><a href="single.html">Arequipa</a></li>
                          <li><a href="single.html">Lima</a></li>
                          <li><a href="single.html">Puno</a></li>
                      </ul>
                  </li>
                  <li class="nav-link">
                      <a href="#" class="link text-light">Turismo Comunitario</a>
                  </li>
                  <!-- <li class="nav-link">
                      <a href="#" class="link text-light">Tours a Sudamerica</a>
                  </li> -->
              </ul>                    
          </div>
      </nav>
  </div>
</header>
<section class="banner-area">
    <div class="container-fluid">
        <div class="banner">
            <img src="../sites/all/themes/newqelluchaska/assets/images/machu1.jpg" alt="Entrada a Machupicchu" class="fluid" style="max-height: 350px;object-fit: cover;">
        </div>
        <div class="banner-title text-center">
            <?php if ($title): ?>
              <?php print render($title_prefix); ?>
              <h1 class="text-lg text-light">Bienvenido a <?php print $site_name ?></h1>
              <?php print render($title_suffix); ?>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
              <span class="description text-sm text-light"><?php print $site_slogan; ?></span>
            <?php endif; ?>
        </div>
    </div>
</section>
<main class="main-area page">
  <div class="packages_tours">
    <div class="emagrid md-grid-12 single">
      <section class="md-cols-8">
        <div class="head">
          <?php if ($title): ?>
          <?php print render($title_prefix); ?>
          <h1 class="title" style="font-family: var(--font-Rale);"><?php print $title; ?></h1>
          <?php print render($title_suffix); ?>
          <?php endif; ?>
        </div>
        <div class="front">          
          <div id="content-body">
            <?php if($messages || $page['help']) : ?>
            <div id="extras"> <?php print $messages; ?> <?php print render($page['help']); ?>
              <?php if ($action_links): ?>
              <ul class="action-links">
                <?php print render($action_links); ?>
              </ul>
              <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if ($tabs): ?>
            <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>
            <div class="sharebar"><?php print render($page['sharebar']); ?></div> 
            <?php print render($page['content']); ?>
          </div>
        </div>
      </section>
      <aside id="sidebar" class="md-cols-4">
        <div id="sidebar-inner" class="region region-sidebar"><?php print render($page['sidebar']); ?> </div>
      </aside>    
    </div>
  </div>
</main>



<?php print render($page['footer']); ?>
<style>
  @media only screen and (max-width: 680px){
    .olark-launch-button{
      bottom:125px !important;
    }
  }
</style>
