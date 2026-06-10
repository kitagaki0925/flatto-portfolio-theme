<?php get_header(); ?>

<main class="site-main error-main">
    <div class="container error-container">
        <div class="error-content">
            <div class="error-code">404</div>
            <h1><?php _e('Page Not Found', 'portfolio-pro'); ?></h1>
            <p><?php _e('お探しのページは見つかりませんでした。', 'portfolio-pro'); ?></p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary"><?php _e('← Back to Home', 'portfolio-pro'); ?></a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
