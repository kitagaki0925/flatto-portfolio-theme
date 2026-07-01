<?php get_header(); ?>

<main class="site-main single-portfolio-main">

    <?php while (have_posts()): the_post(); ?>

    <article class="portfolio-single">

        <div class="portfolio-hero">
            <div class="portfolio-hero-bg">
                <div class="hero-glow hero-glow-1"></div>
            </div>
            <div class="container">
                <nav class="breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                    <span>&rsaquo;</span>
                    <a href="<?php echo esc_url(get_post_type_archive_link('portfolio')); ?>">Works</a>
                    <span>&rsaquo;</span>
                    <span><?php the_title(); ?></span>
                </nav>

                <div class="portfolio-hero-content">
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'portfolio_category');
                    if ($terms && !is_wp_error($terms)):
                    ?>
                    <div class="portfolio-categories">
                        <?php foreach ($terms as $term): ?>
                        <span class="work-card-tag"><?php echo esc_html($term->name); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <h1 class="portfolio-title"><?php the_title(); ?></h1>

                    <?php if (has_excerpt()): ?>
                    <p class="portfolio-lead"><?php the_excerpt(); ?></p>
                    <?php endif; ?>
                </div>

                <div class="portfolio-meta-bar">
                    <?php
                    $client = get_post_meta(get_the_ID(), '_portfolio_client', true);
                    $url    = get_post_meta(get_the_ID(), '_portfolio_url', true);
                    $tech   = get_post_meta(get_the_ID(), '_portfolio_tech', true);
                    $year   = get_post_meta(get_the_ID(), '_portfolio_year', true);
                    $role   = get_post_meta(get_the_ID(), '_portfolio_role', true);
                    ?>
                    <?php if ($client): ?>
                    <div class="portfolio-meta-item">
                        <span class="meta-label"><?php _e('Client', 'portfolio-pro'); ?></span>
                        <span class="meta-value"><?php echo esc_html($client); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if ($role): ?>
                    <div class="portfolio-meta-item">
                        <span class="meta-label"><?php _e('Role', 'portfolio-pro'); ?></span>
                        <span class="meta-value"><?php echo esc_html($role); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if ($year): ?>
                    <div class="portfolio-meta-item">
                        <span class="meta-label"><?php _e('Year', 'portfolio-pro'); ?></span>
                        <span class="meta-value"><?php echo esc_html($year); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if ($url): ?>
                    <div class="portfolio-meta-item">
                        <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                            <?php _e('Live Site', 'portfolio-pro'); ?>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php if (has_post_thumbnail()): ?>
        <div class="portfolio-thumbnail">
            <div class="container">
                <a href="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                   class="lightbox-trigger"
                   data-caption="<?php echo esc_attr(get_the_title()); ?>"
                   aria-label="<?php echo esc_attr(get_the_title()); ?>の画像を拡大">
                    <?php the_post_thumbnail('portfolio-hero', [
                        'class' => 'portfolio-main-img',
                        'alt'   => get_the_title(),
                        // コンテナ幅いっぱい(最大1152px)。高DPI時はsrcsetから2x版が選択される
                        'sizes' => '(max-width: 1200px) calc(100vw - 48px), 1152px',
                    ]); ?>
                    <span class="lightbox-hint" aria-hidden="true">
                        <span class="lightbox-hint-inner">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                            クリックして拡大
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <?php endif; ?>

        <div class="container portfolio-body-wrapper">
            <div class="portfolio-body">
                <div class="portfolio-content">
                    <?php the_content(); ?>

                    <?php if ($tech): ?>
                    <div class="portfolio-tech-section">
                        <h3><?php _e('Technologies Used', 'portfolio-pro'); ?></h3>
                        <div class="tech-list">
                            <?php
                            $techs = array_map('trim', explode(',', $tech));
                            foreach ($techs as $t): ?>
                            <span class="tech-badge tech-badge-lg"><?php echo esc_html($t); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="portfolio-navigation container">
            <div class="nav-links">
                <?php
                $prev = get_previous_post(false, '', 'portfolio_category');
                $next = get_next_post(false, '', 'portfolio_category');
                if ($prev): ?>
                <a href="<?php echo esc_url(get_permalink($prev->ID)); ?>" class="nav-link nav-prev">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
                    <div>
                        <span class="nav-label"><?php _e('Previous Work', 'portfolio-pro'); ?></span>
                        <span class="nav-title"><?php echo esc_html($prev->post_title); ?></span>
                    </div>
                </a>
                <?php endif;
                if ($next): ?>
                <a href="<?php echo esc_url(get_permalink($next->ID)); ?>" class="nav-link nav-next">
                    <div>
                        <span class="nav-label"><?php _e('Next Work', 'portfolio-pro'); ?></span>
                        <span class="nav-title"><?php echo esc_html($next->post_title); ?></span>
                    </div>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                </a>
                <?php endif; ?>
            </div>
            <a href="<?php echo esc_url(get_post_type_archive_link('portfolio')); ?>" class="btn btn-outline">
                <?php _e('← Back to Works', 'portfolio-pro'); ?>
            </a>
        </div>

    </article>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
