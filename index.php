<?php get_header(); ?>

<main class="l-main p-blog__page">
    <div class="l-container">
        <div class="p-blog__header">
            <h1 class="c-page-title"><?php _e('Blog', 'portfolio-pro'); ?></h1>
        </div>

        <div class="p-blog__grid">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                <article class="c-blog-card u-reveal js-reveal">
                    <a href="<?php the_permalink(); ?>" class="c-blog-card__link">
                        <?php if (has_post_thumbnail()): ?>
                        <div class="c-blog-card__image">
                            <?php the_post_thumbnail('medium_large', ['loading' => 'lazy']); ?>
                        </div>
                        <?php endif; ?>
                        <div class="c-blog-card__body">
                            <div class="c-blog-card__meta">
                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                            </div>
                            <h2 class="c-blog-card__title"><?php the_title(); ?></h2>
                            <p class="c-blog-card__excerpt"><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                </article>
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php _e('No posts found.', 'portfolio-pro'); ?></p>
            <?php endif; ?>
        </div>

        <div class="c-pagination">
            <?php echo paginate_links(['type' => 'list', 'prev_text' => '&larr;', 'next_text' => '&rarr;']); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
