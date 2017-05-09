<header>
  <!-- Mobile Nav -->
  <section class="navbar navbar-light hidden-md-up navbar-toggleable-sm bg-faded transparent">
    <nav>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav mr-auto">

                <?php
                    wp_nav_menu( array(
                        'menu'           => 'primary',
                        'theme_location' => 'primary',
                        'depth'          => 1,
                        'container'      => "ul",
                        'menu_class'     => "navbar-nav mr-auto",
                        'fallback_cb'    => 'bootstrap_walker::fallback',
                        'walker'         => new Bootstrap_Walker()
                    ) );
                ?>

            </ul>
        </div>

      </nav>
  </section>

  <!-- Header Logo -->
  <div class="jumbotron-fluid frontpage header">
      <?php if ( get_header_image() ) : ?>
          <div class="container">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                  <img class="img-fluid" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
              </a>
          </div>
      <?php else: ?>
            <div class="container">
                <h1><?php echo get_bloginfo('name'); ?></h1>
                <p><?php echo get_bloginfo('description'); ?></p>
            </div>
      <?php endif; ?>
  </div>

  <!-- Desktop Nav -->
  <section class="navbar navbar-light hidden-sm-down flex-row frontpage bg-faded transparent">
    <nav class="container-fluid">

                <?php
                    wp_nav_menu( array(
                        'menu'           => 'primary',
                        'theme_location' => 'primary',
                        'depth'          => 1,
                        'container'      => 'ul',
                        'container_class'=> 'nav navbar-nav flex-row mr-auto',
                        'menu_class'     => 'navbar-nav flex-row mr-auto',
                        'fallback_cb'    => 'bootstrap_walker::fallback',
                        'walker'         => new Bootstrap_Walker()
                    ) );
                ?>
    </nav>
  </section>
</header>
