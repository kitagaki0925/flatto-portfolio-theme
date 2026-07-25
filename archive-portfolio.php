<?php get_header(); ?>

<main class="l-main p-archive__page">

    <div class="p-archive__hero">
        <div class="c-glow c-glow--1"></div>
        <div class="l-container">
            <h1 class="p-archive__title"><?php _e('制作実績', 'portfolio-pro'); ?><span class="u-text-gradient"> Works</span></h1>
            <p class="p-archive__desc"><?php _e('これまでに手がけたプロジェクトをご紹介します', 'portfolio-pro'); ?></p>
        </div>
    </div>

    <div class="l-container p-archive__content">

        <?php
        $terms = get_terms(['taxonomy' => 'portfolio_category', 'hide_empty' => true]);
        if (!empty($terms)): ?>
        <div class="c-work-filter">
            <button class="c-work-filter__button is-active js-work-filter-button" data-filter="*"><?php _e('All', 'portfolio-pro'); ?></button>
            <?php foreach ($terms as $term): ?>
            <button class="c-work-filter__button js-work-filter-button" data-filter="<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></button>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if (have_posts()): ?>
        <div class="c-work-grid">
            <?php while (have_posts()): the_post();
                get_template_part('template-parts/portfolio-card');
            endwhile; ?>
        </div>

        <div class="c-pagination">
            <?php
            echo paginate_links([
                'prev_text' => '&larr; Prev',
                'next_text' => 'Next &rarr;',
                'type'      => 'list',
            ]);
            ?>
        </div>

        <?php else: ?>
        <div class="c-work-empty">
            <p><?php _e('まだ作品が登録されていません。', 'portfolio-pro'); ?></p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="c-button c-button--primary"><?php _e('← Back to Home', 'portfolio-pro'); ?></a>
        </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
