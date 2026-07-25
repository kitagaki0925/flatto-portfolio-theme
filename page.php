<?php get_header(); ?>

<main class="l-main p-page__page">
    <div class="l-container">
        <?php while (have_posts()): the_post(); ?>
        <article class="p-page__article">
            <h1 class="c-page-title"><?php the_title(); ?></h1>
            <div class="c-wysiwyg">
                <?php the_content(); ?>
            </div>
        </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
