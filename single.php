<?php get_header(); ?>

<main class="site-main single-post-main">
    <div class="container">
        <?php while (have_posts()): the_post(); ?>
        <article class="single-post">
            <header class="post-header">
                <div class="post-meta">
                    <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                    <?php
                    $cats = get_the_category();
                    if ($cats): ?>
                    <span class="post-cats">
                        <?php foreach ($cats as $cat): ?>
                        <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo esc_html($cat->name); ?></a>
                        <?php endforeach; ?>
                    </span>
                    <?php endif; ?>
                </div>
                <h1 class="post-title"><?php the_title(); ?></h1>
            </header>

            <?php if (has_post_thumbnail()): ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <?php endif; ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

            <?php
            $tags = get_the_tags();
            if ($tags): ?>
            <div class="post-tags">
                <?php foreach ($tags as $tag): ?>
                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="tech-badge">#<?php echo esc_html($tag->name); ?></a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <nav class="post-nav">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if ($prev_post): ?>
                <a href="<?php echo esc_url(get_permalink($prev_post)); ?>" class="nav-link nav-prev">
                    <span class="nav-label">&larr; Previous</span>
                    <span class="nav-title"><?php echo esc_html($prev_post->post_title); ?></span>
                </a>
                <?php endif;
                if ($next_post): ?>
                <a href="<?php echo esc_url(get_permalink($next_post)); ?>" class="nav-link nav-next">
                    <span class="nav-label">Next &rarr;</span>
                    <span class="nav-title"><?php echo esc_html($next_post->post_title); ?></span>
                </a>
                <?php endif; ?>
            </nav>
        </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
