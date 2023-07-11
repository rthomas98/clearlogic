<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->


<div class="site-navbar-wrap">
    <div class="site-navbar-top">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="d-flex float-start">
                        <a href="#" class="d-flex align-items-center me-4">
                            <span class="icon-envelope me-2"></span>
                            <span class="d-none d-md-inline-block"><?php the_field( 'email_address', 'option' ); ?></span>
                        </a>
                        <a href="#" class="d-flex align-items-center mr-auto">
                            <span class="icon-phone me-2"></span>
                            <span class="d-none d-md-inline-block">+<?php the_field( 'phone_number', 'option' ); ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-6 text-right">

                    <?php if ( have_rows( 'social_links', 'option' ) ) : ?>
                    <div class="float-end">
                        <?php while ( have_rows( 'social_links', 'option' ) ) : the_row(); ?>
                            <a href="<?php the_sub_field( 'link', 'option' ); ?>" target="_blank" class="p-2 pl-0"><span class="<?php the_sub_field( 'icon_class' ); ?>"></span></a>
                        <?php endwhile; ?>
                    </div>
                    <?php else : ?>
                        <?php // No rows found ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-3">
                    <h1 class="my-0 site-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="d-flex align-items-center">
                            <img class="blue-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo-icon.png" alt="Clear Logic Logo" width="40"> <span>Clear Logic</span>
                        </a>
                    </h1>
                </div>
                <div class="col-9">
                    <nav class="site-navigation text-right" role="navigation">
                        <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 float-end py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'primary',
                                    'menu_class'      => 'site-menu main-menu js-clone-nav d-none d-lg-block float-end',
                                    'fallback_cb'     => '',
                                    'menu_id'         => 'main-menu',
                                    'depth'           => 2,
                                    'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                                )
                            );
                            ?>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
