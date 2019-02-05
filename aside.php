<div id="aside-wrapper" class="onclick-close-sidebar">
  <aside id="sidebar">
    <div id="aside-content">
      <div class="sidebar-main-title">
        <?php bloginfo('name') ?>
      </div>

      <p class="about-zine">
         Welcome! Load Screen is a collective of writers interested in all things gaming with a focus on Nintendo! We feature news, fanart and fiction, guides and more!
      </p>

      <?php
        $menu_classes = 'button-group has-invisible-links';

        wp_nav_menu([
          'theme_location' => 'header-featured-links',
          'menu_class' => $menu_classes,
          'menu_id' => 'mobile-main-navbar'
        ]);

        wp_nav_menu([
          'theme_location' => 'sidebar-contributing',
          'menu_class' => $menu_classes,
          'container' => false
        ]);

      ?>
    </div>
  </aside>
</div>
