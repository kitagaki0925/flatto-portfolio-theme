<?php get_header(); ?>

<main class="l-main p-portfolio-single__page">

    <?php while (have_posts()): the_post(); ?>

    <article class="p-portfolio-single">

        <div class="p-portfolio-single__hero">
            <div class="p-portfolio-single__hero-bg">
                <div class="c-glow c-glow--1"></div>
            </div>
            <div class="l-container">
                <nav class="c-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                    <span class="c-breadcrumb__separator">&rsaquo;</span>
                    <a href="<?php echo esc_url(get_post_type_archive_link('portfolio')); ?>">Works</a>
                    <span class="c-breadcrumb__separator">&rsaquo;</span>
                    <span><?php the_title(); ?></span>
                </nav>

                <div class="p-portfolio-single__hero-content">
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'portfolio_category');
                    if ($terms && !is_wp_error($terms)):
                    ?>
                    <div class="p-portfolio-single__categories">
                        <?php foreach ($terms as $term): ?>
                        <span class="c-tag"><?php echo esc_html($term->name); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <h1 class="p-portfolio-single__title"><?php the_title(); ?></h1>

                    <?php if (has_excerpt()): ?>
                    <p class="p-portfolio-single__lead"><?php the_excerpt(); ?></p>
                    <?php endif; ?>
                </div>

                <div class="p-portfolio-single__meta-bar">
                    <?php
                    $client = get_post_meta(get_the_ID(), '_portfolio_client', true);
                    $url    = get_post_meta(get_the_ID(), '_portfolio_url', true);
                    $tech   = get_post_meta(get_the_ID(), '_portfolio_tech', true);
                    $year   = get_post_meta(get_the_ID(), '_portfolio_year', true);
                    $role   = get_post_meta(get_the_ID(), '_portfolio_role', true);
                    ?>
                    <?php if ($client): ?>
                    <div class="p-portfolio-single__meta-item">
                        <span class="p-portfolio-single__meta-label"><?php _e('Client', 'portfolio-pro'); ?></span>
                        <span class="p-portfolio-single__meta-value"><?php echo esc_html($client); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if ($role): ?>
                    <div class="p-portfolio-single__meta-item">
                        <span class="p-portfolio-single__meta-label"><?php _e('Role', 'portfolio-pro'); ?></span>
                        <span class="p-portfolio-single__meta-value"><?php echo esc_html($role); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if ($year): ?>
                    <div class="p-portfolio-single__meta-item">
                        <span class="p-portfolio-single__meta-label"><?php _e('Year', 'portfolio-pro'); ?></span>
                        <span class="p-portfolio-single__meta-value"><?php echo esc_html($year); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if ($url): ?>
                    <div class="p-portfolio-single__meta-item">
                        <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer" class="c-button c-button--primary">
                            <?php _e('Live Site', 'portfolio-pro'); ?>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php if (has_post_thumbnail()): ?>
        <div class="p-portfolio-single__thumbnail">
            <div class="l-container">
                <a href="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                   class="c-lightbox-trigger js-lightbox-trigger"
                   data-caption="<?php echo esc_attr(get_the_title()); ?>"
                   aria-label="<?php echo esc_attr(get_the_title()); ?>の画像を拡大">
                    <?php the_post_thumbnail('portfolio-hero', ['class' => 'p-portfolio-single__main-img', 'alt' => get_the_title()]); ?>
                    <span class="c-lightbox-trigger__hint" aria-hidden="true">
                        <span class="c-lightbox-trigger__hint-inner">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                            クリックして拡大
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <?php endif; ?>

        <div class="l-container p-portfolio-single__body-wrapper">
            <div class="p-portfolio-single__body">
                <div class="p-portfolio-single__content c-wysiwyg c-wysiwyg--lightbox js-lightbox-content">
                    <?php the_content(); ?>

                    <?php if ($tech): ?>
                    <div class="p-portfolio-single__tech-section">
                        <h3 class="p-portfolio-single__tech-title"><?php _e('Technologies Used', 'portfolio-pro'); ?></h3>
                        <div class="p-portfolio-single__tech-list">
                            <?php
                            $techs = array_map('trim', explode(',', $tech));
                            foreach ($techs as $t): ?>
                            <span class="c-badge c-badge--lg"><?php echo esc_html($t); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="p-portfolio-single__navigation l-container">
            <div class="c-post-nav">
                <?php
                $prev = get_previous_post(false, '', 'portfolio_category');
                $next = get_next_post(false, '', 'portfolio_category');
                if ($prev): ?>
                <a href="<?php echo esc_url(get_permalink($prev->ID)); ?>" class="c-post-nav__link c-post-nav__link--prev">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
                    <div>
                        <span class="c-post-nav__label"><?php _e('Previous Work', 'portfolio-pro'); ?></span>
                        <span class="c-post-nav__title"><?php echo esc_html($prev->post_title); ?></span>
                    </div>
                </a>
                <?php endif;
                if ($next): ?>
                <a href="<?php echo esc_url(get_permalink($next->ID)); ?>" class="c-post-nav__link c-post-nav__link--next">
                    <div>
                        <span class="c-post-nav__label"><?php _e('Next Work', 'portfolio-pro'); ?></span>
                        <span class="c-post-nav__title"><?php echo esc_html($next->post_title); ?></span>
                    </div>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                </a>
                <?php endif; ?>
            </div>
            <a href="<?php echo esc_url(get_post_type_archive_link('portfolio')); ?>" class="c-button c-button--outline">
                <?php _e('← Back to Works', 'portfolio-pro'); ?>
            </a>
        </div>

    </article>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
