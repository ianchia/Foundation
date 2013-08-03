<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>

    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width"/>

    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="fixed">
    <nav class="top-bar nav-container">
        <ul class="title-area">
            <li class="name">
                <h1>
                    <a href="http://www.fluentry.com">
                        <img alt="Fluentry Logo" title="Fluentry" src="<?php echo get_template_directory_uri(); ?>/img/fluentry-logo.png">
                    </a>
                </h1>
            </li>
            <li class="toggle-topbar menu-icon">
                <a href="#"><span>Menu</span></a>
            </li>
        </ul>
        <section class="top-bar-section">
            <ul class="right">
                <li class="divider show-for-small"></li>
                <li>
                    <a href="#">Who It's For</a>
                    <div class="yellow-underbar"></div>
                </li>
                <li class="divider show-for-small"></li>
                <li>
                    <a href="#">How It Works</a>
                    <div class="yellow-underbar"></div>
                </li>
                <li class="divider show-for-small"></li>
                <li>
                    <a href="#">Tour</a>
                    <div class="yellow-underbar"></div>
                </li>
                <li class="divider show-for-small"></li>
                <li>
                    <a href="#">About</a>
                    <div class="yellow-underbar"></div>
                </li>
                <li class="divider show-for-small"></li>
                <li>
                    <a href="#">Blog</a>
                    <div class="yellow-underbar"></div>
                </li>
                <li class="divider"></li>
                <li class="has-form">
                    <a class="button cta" href="#">Sign Up</a>
                </li>
                <li class="divider show-for-small"></li>
                <li>
                    <a class="login" href="#">Login</a>
                </li>
            </ul>
        </section>
    </nav>
</div>


<?php $header = get_header_textcolor();
if ($header !== "blank") : ?>
    <header class="site-header" <?php $header_image = get_header_image();
    if (!empty($header_image)) : ?> style="background:url('<?php echo esc_url($header_image); ?>');" <?php endif; ?>>
        <div class="row">
            <div class="large-12 columns">
                <h2><a style="color:#<?php header_textcolor(); ?>;" href="<?php echo esc_url(home_url('/')); ?>"
                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                       rel="home"><?php bloginfo('description'); ?></a></h2>
            </div>
        </div>
    </header>
<?php endif; ?>

<!-- Begin Page -->
<div class="row content-wrapper">
