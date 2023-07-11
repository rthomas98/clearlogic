<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<section class="deneb_cta">
    <div class="container">
        <div class="cta_wrapper">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta_content">
                        <h3>Have Any Project in Mind ?</h3>
                        <p>Curabitur libero eros, efficitur sit amet sodales tincidunt, aliquet et leo sed ut nibh feugiat, auctor enim quis.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="button_box">
                        <a href="#" class="btn btn-secondary btn-lg">Hire Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="deneb_footer">
    <div class="widget_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="widget widegt_about">
                        <div class="widget_title">
                            <img src="assets/images/logo_1.png" class="img-fluid" alt="">
                        </div>
                        <p>
                            <?php the_field( 'about_us', 'option' ); ?>
                        </p>

                        <?php if ( have_rows( 'footer_social_links', 'option' ) ) : ?>
                        <ul class="social">
                            <?php while ( have_rows( 'footer_social_links', 'option' ) ) : the_row(); ?>
                                <li><a href="<?php the_sub_field( 'link', 'option' ); ?>" target="_blank"><i class="fab <?php the_sub_field( 'icon_class' ); ?>"></i></a></li>
                            <?php endwhile; ?>
                        </ul>
                        <?php else : ?>
                            <?php // No rows found ?>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget widget_link">
                        <div class="widget_title">
                            <h4>Links</h4>
                        </div>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget widget_contact">
                        <div class="widget_title">
                            <h4>Contact Us</h4>
                        </div>
                        <div class="contact_info">
                            <div class="single_info">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="info">
                                    <p><a href="tel:<?php the_field( 'phone_number', 'option' ); ?>"><?php the_field( 'phone_number', 'option' ); ?></a></p>
                                </div>
                            </div>
                            <div class="single_info">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info">
                                    <p><a href="mailto:<?php the_field( 'email', 'option' ); ?>"><?php the_field( 'email', 'option' ); ?></a></p>
                                </div>
                            </div>
                            <div class="single_info">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <p>
                                        <?php the_field( 'address', 'option' ); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <p>Copyright &copy; 2020 All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

