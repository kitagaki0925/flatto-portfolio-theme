<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="header-inner container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" aria-label="Flatto">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" role="img" aria-label="Flatto">
                <title>Flatto</title>
                <text x="30" y="42" font-family="'Helvetica Neue','Arial',sans-serif" font-size="36" font-weight="200" letter-spacing="0.08em" fill="#2e86c1">F</text>
                <text x="52" y="42" font-family="'Helvetica Neue','Arial',sans-serif" font-size="36" font-weight="200" letter-spacing="0.08em" fill="#1a3a5a">latto</text>
                <line x1="30" y1="48" x2="220" y2="48" stroke="#c8daea" stroke-width="0.8" class="logo-sub-text"/>
                <text x="30" y="65" font-family="'Helvetica Neue','Arial',sans-serif" font-size="15" font-weight="400" letter-spacing="0.3em" fill="#6a9ab8" class="logo-sub-text">WEB DESIGN STUDIO</text>
            </svg>
        </a>

        <nav class="site-nav" id="site-nav" aria-label="Primary navigation">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class'     => 'nav-list',
                'container'      => false,
                'fallback_cb'    => function() {
                    echo '<ul class="nav-list">';
                    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#about')) . '">About</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#works')) . '">Works</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#services')) . '">Services</a></li>';
                    echo '</ul>';
                },
            ]);
            ?>
        </nav>

        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-primary header-cta">
            <?php _e('Contact', 'portfolio-pro'); ?>
        </a>

        <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
    <nav>
        <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-nav-link">Home</a></li>
            <li><a href="<?php echo esc_url(home_url('/#about')); ?>" class="mobile-nav-link">About</a></li>
            <li><a href="<?php echo esc_url(home_url('/#works')); ?>" class="mobile-nav-link">Works</a></li>
            <li><a href="<?php echo esc_url(home_url('/#services')); ?>" class="mobile-nav-link">Services</a></li>
			<li>
			<ol>
				<li><a href="<?php echo esc_url(home_url('/web-design/')); ?>" class="mobile-nav-link">1.Web Design</a></li>
				<li><a href="<?php echo esc_url(home_url('/wordpress/')); ?>" class="mobile-nav-link">2.WrdPress Development</a></li>
				<li><a href="<?php echo esc_url(home_url('/lp/')); ?>" class="mobile-nav-link">3.LP制作</a></li>
				<li><a href="<?php echo esc_url(home_url('/corporate/')); ?>" class="mobile-nav-link">4.コーポレートサイト</a></li>
			</ol>
			</li>
            <li><a href="<?php echo esc_url(home_url('/#contact')); ?>" class="mobile-nav-link">Contact</a></li>
        </ul>
    </nav>
</div>
<div class="mobile-overlay" id="mobile-overlay"></div>
