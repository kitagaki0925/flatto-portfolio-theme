<?php get_header(); ?>

<main class="site-main archive-portfolio-main">

    <div class="archive-hero">
        <div class="hero-glow hero-glow-1"></div>
        <div class="container">
            <h1 class="archive-title"><?php _e('制作実績', 'portfolio-pro'); ?><span class="text-gradient"> Works</span></h1>
            <p class="archive-desc"><?php _e('これまでに手がけたプロジェクトをご紹介します', 'portfolio-pro'); ?></p>
        </div>
    </div>

    <div class="container archive-content">

        <?php
        $terms = get_terms(['taxonomy' => 'portfolio_category', 'hide_empty' => true]);
        if (!empty($terms)): ?>
        <div class="works-filter">
            <button class="filter-btn active" data-filter="*"><?php _e('All', 'portfolio-pro'); ?></button>
            <?php foreach ($terms as $term): ?>
            <button class="filter-btn" data-filter="<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></button>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if (have_posts()): ?>
        <div class="works-grid">
            <?php while (have_posts()): the_post();
                get_template_part('template-parts/portfolio-card');
            endwhile; ?>
        </div>

        <div class="pagination">
            <?php
            echo paginate_links([
                'prev_text' => '&larr; Prev',
                'next_text' => 'Next &rarr;',
                'type'      => 'list',
            ]);
            ?>
        </div>

        <?php else: ?>
        <div class="works-empty">
            <p><?php _e('まだ作品が登録されていません。', 'portfolio-pro'); ?></p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary"><?php _e('← Back to Home', 'portfolio-pro'); ?></a>
        </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
