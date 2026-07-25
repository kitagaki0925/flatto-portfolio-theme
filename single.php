<?php get_header(); ?>

<main class="l-main p-single-post__page">
    <div class="l-container">
        <?php while (have_posts()): the_post(); ?>
        <article class="p-single-post__article">
            <header class="p-single-post__header">
                <div class="p-single-post__meta">
                    <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                    <?php
                    $cats = get_the_category();
                    if ($cats): ?>
                    <span class="p-single-post__cats">
                        <?php foreach ($cats as $cat): ?>
                        <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo esc_html($cat->name); ?></a>
                        <?php endforeach; ?>
                    </span>
                    <?php endif; ?>
                </div>
                <h1 class="p-single-post__title"><?php the_title(); ?></h1>
            </header>

            <?php if (has_post_thumbnail()): ?>
            <div class="p-single-post__thumbnail">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <?php endif; ?>

            <div class="c-wysiwyg">
                <?php the_content(); ?>
            </div>

            <?php
            $tags = get_the_tags();
            if ($tags): ?>
            <div class="p-single-post__tags">
                <?php foreach ($tags as $tag): ?>
                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="c-badge">#<?php echo esc_html($tag->name); ?></a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <nav class="c-post-nav c-post-nav--bordered">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if ($prev_post): ?>
                <a href="<?php echo esc_url(get_permalink($prev_post)); ?>" class="c-post-nav__link c-post-nav__link--prev">
                    <span class="c-post-nav__label">&larr; Previous</span>
                    <span class="c-post-nav__title"><?php echo esc_html($prev_post->post_title); ?></span>
                </a>
                <?php endif;
                if ($next_post): ?>
                <a href="<?php echo esc_url(get_permalink($next_post)); ?>" class="c-post-nav__link c-post-nav__link--next">
                    <span class="c-post-nav__label">Next &rarr;</span>
                    <span class="c-post-nav__title"><?php echo esc_html($next_post->post_title); ?></span>
                </a>
                <?php endif; ?>
            </nav>
        </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
