<?php get_header(); ?>

<main class="l-main p-error__page">
    <div class="l-container p-error__container">
        <div class="p-error__content">
            <div class="p-error__code">404</div>
            <h1 class="p-error__title"><?php _e('Page Not Found', 'portfolio-pro'); ?></h1>
            <p class="p-error__desc"><?php _e('お探しのページは見つかりませんでした。', 'portfolio-pro'); ?></p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="c-button c-button--primary"><?php _e('← Back to Home', 'portfolio-pro'); ?></a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
