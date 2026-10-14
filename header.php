<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php $dropdown_menus = portfolio_pro_dropdown_menus(); ?>

<header class="l-header" id="site-header">
    <div class="p-global-header__inner l-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="p-global-header__logo" aria-label="Flatto">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" role="img" aria-label="Flatto">
                <title>Flatto</title>
                <text x="30" y="42" font-family="'Helvetica Neue','Arial',sans-serif" font-size="36" font-weight="200" letter-spacing="0.08em" fill="#2e86c1">F</text>
                <text x="52" y="42" font-family="'Helvetica Neue','Arial',sans-serif" font-size="36" font-weight="200" letter-spacing="0.08em" fill="#1a3a5a">latto</text>
                <line x1="30" y1="48" x2="220" y2="48" stroke="#c8daea" stroke-width="0.8" class="p-global-header__logo-sub"/>
                <text x="30" y="65" font-family="'Helvetica Neue','Arial',sans-serif" font-size="15" font-weight="400" letter-spacing="0.3em" fill="#6a9ab8" class="p-global-header__logo-sub">WEB DESIGN STUDIO</text>
            </svg>
        </a>

        <nav class="p-global-header__nav" id="site-nav" aria-label="Primary navigation">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class'     => 'c-nav-list',
                'container'      => false,
                'fallback_cb'    => function() use ($dropdown_menus) {
                    ?>
                    <ul class="c-nav-list">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#about')); ?>">About</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#works')); ?>">Works</a></li>
                        <?php foreach ($dropdown_menus as $menu): ?>
                        <li class="c-nav-list__item--has-dropdown">
                            <a href="<?php echo esc_url($menu['url']); ?>" aria-haspopup="true">
                                <?php echo esc_html($menu['label']); ?>
                                <svg class="c-nav-list__chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                            </a>
                            <div class="c-nav-dropdown<?php echo $menu['all'] ? '' : ' c-nav-dropdown--no-footer'; ?><?php echo ($menu['align'] ?? '') === 'right' ? ' c-nav-dropdown--right' : ''; ?>">
                                <ol class="c-nav-dropdown__list">
                                    <?php foreach ($menu['items'] as $i => $item): ?>
                                    <li>
                                        <?php if ($item['url']): ?>
                                        <a href="<?php echo esc_url($item['url']); ?>" class="c-nav-dropdown__link">
                                        <?php else: ?>
                                        <span class="c-nav-dropdown__link is-disabled" aria-disabled="true">
                                        <?php endif; ?>
                                            <span class="c-nav-dropdown__num u-text-gradient"><?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
                                            <span class="c-nav-dropdown__body">
                                                <span class="c-nav-dropdown__title">
                                                    <?php echo esc_html($item['title']); ?>
                                                    <?php if (!$item['url']): ?><span class="c-badge">準備中</span><?php endif; ?>
                                                </span>
                                                <span class="c-nav-dropdown__desc"><?php echo esc_html($item['desc']); ?></span>
                                            </span>
                                        <?php echo $item['url'] ? '</a>' : '</span>'; ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ol>
                                <?php if ($menu['all']): ?>
                                <a href="<?php echo esc_url($menu['all']['url']); ?>" class="c-nav-dropdown__all">
                                    <?php echo esc_html($menu['all']['label']); ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </a>
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endforeach; ?>
                        <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
                    </ul>
                    <?php
                },
            ]);
            ?>
        </nav>

        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-button c-button--primary p-global-header__cta">
            <?php _e('Contact', 'portfolio-pro'); ?>
        </a>

        <button class="c-hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<div class="p-mobile-menu" id="mobile-menu" aria-hidden="true">
    <nav>
        <ul class="c-mobile-nav-list">
            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="c-mobile-nav-list__link js-mobile-nav-link">Home</a></li>
            <li><a href="<?php echo esc_url(home_url('/#about')); ?>" class="c-mobile-nav-list__link js-mobile-nav-link">About</a></li>
            <li><a href="<?php echo esc_url(home_url('/#works')); ?>" class="c-mobile-nav-list__link js-mobile-nav-link">Works</a></li>
            <?php foreach ($dropdown_menus as $key => $menu): ?>
            <li>
                <button type="button" class="c-mobile-nav-list__link c-mobile-nav-list__toggle js-mobile-subnav-toggle" aria-expanded="false" aria-controls="mobile-subnav-<?php echo esc_attr($key); ?>">
                    <?php echo esc_html($menu['label']); ?>
                    <svg class="c-mobile-nav-list__chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="c-mobile-nav-list__sub" id="mobile-subnav-<?php echo esc_attr($key); ?>">
                    <ol class="c-mobile-nav-list__sub-inner">
                        <?php if ($menu['all']): ?>
                        <li><a href="<?php echo esc_url($menu['all']['url']); ?>" class="c-mobile-nav-list__sub-link js-mobile-nav-link"><?php echo esc_html($menu['all']['mobile_label']); ?></a></li>
                        <?php endif; ?>
                        <?php foreach ($menu['items'] as $i => $item): ?>
                        <?php if ($item['url']): ?>
                        <li><a href="<?php echo esc_url($item['url']); ?>" class="c-mobile-nav-list__sub-link js-mobile-nav-link"><?php echo esc_html(($i + 1) . '. ' . $item['title']); ?></a></li>
                        <?php else: ?>
                        <li><span class="c-mobile-nav-list__sub-link is-disabled" aria-disabled="true"><?php echo esc_html(($i + 1) . '. ' . $item['title']); ?> <span class="c-badge">準備中</span></span></li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </li>
            <?php endforeach; ?>
            <li><a href="<?php echo esc_url(home_url('/blog/')); ?>" class="c-mobile-nav-list__link js-mobile-nav-link">Blog</a></li>
            <li><a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-mobile-nav-list__link js-mobile-nav-link">Contact</a></li>
        </ul>
    </nav>
</div>
<div class="p-mobile-overlay" id="mobile-overlay"></div>
