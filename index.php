<?php get_header(); ?>

<main class="site-main blog-main">
    <div class="container">
        <div class="blog-header">
            <h1 class="page-title"><?php _e('Blog', 'portfolio-pro'); ?></h1>
        </div>

        <div class="blog-grid">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                <article class="blog-card reveal">
                    <a href="<?php the_permalink(); ?>" class="blog-card-link">
                        <?php if (has_post_thumbnail()): ?>
                        <div class="blog-card-image">
                            <?php the_post_thumbnail('medium_large', ['loading' => 'lazy']); ?>
                        </div>
                        <?php endif; ?>
                        <div class="blog-card-body">
                            <div class="blog-card-meta">
                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                            </div>
                            <h2 class="blog-card-title"><?php the_title(); ?></h2>
                            <p class="blog-card-excerpt"><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                </article>
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php _e('No posts found.', 'portfolio-pro'); ?></p>
            <?php endif; ?>
        </div>

        <div class="pagination">
            <?php echo paginate_links(['type' => 'list', 'prev_text' => '&larr;', 'next_text' => '&rarr;']); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
