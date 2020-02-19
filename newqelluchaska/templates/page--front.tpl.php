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
<div class="movie">
    <div class="overlay">
        <video class="video-agencia" width="100%" preload="auto" autoplay="true" muted="muted" loop="" playsinline="">
            <source class="main-video" src="./sites/all/themes/newqelluchaska/assets/images/videopromo.mp4" type="video/mp4">
        </video>
    </div>
    <div class="movie_text">
        <div class="emagrid">
            <div class="row">
                <h2 class="text-lg text-light">Tours a Machu Picchu</h2 class="text-light text-aling-center">
                <p class="description text-sm text-light">Expertos en viajes de ensueño y tú, ¿cuándo cumplirás los tuyos?</p>
            </div>
        </div>
    </div>
</div>

<main class="main-area">           
  <section class="packages_tours">
      <div class="emagrid md-grid-12">
          <div class="lg-cols-12 md-cols-12">
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
          </div>
          <div class="lg-cols-12 md-cols-12">
            <div id="welcome"><?php print render($page['welcome']); ?></div>
          </div>
          <div class="lg-cols-9 md-cols-12">
            <?php print render($page['tours']); ?>                                                   
          </div>
          <div class="lg-cols-3 md-cols-12">
            <div class="md-cols-12">
              <?php print render($page['video']); ?>                                         
            </div>
          </div>
      </div>            
  </section>                         
</main>

<section class="categ s-py lg-py">  
  <?php print render($page['Categoriatours']); ?>   
</section>
<section class="blog s-py lg-py">
  <?php print render($page['articulosblog']); ?>
</section>
<div class="awards s-py lg-py">
  <?php print render($page['redessociales']); ?>
</div>
<section class="map">
  <?php print render($page['mapaempresa']); ?>
</section>
<section class="certi s-py lg-py">
  <?php print render($page['Certificados']); ?>
</section>

<?php print render($page['footer']); ?> 
<style>
  @media only screen and (max-width: 680px){
    .olark-launch-button{
      bottom:125px !important;
    }
  }
</style>