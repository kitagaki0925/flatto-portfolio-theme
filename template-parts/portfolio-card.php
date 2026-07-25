<?php
$terms      = get_the_terms(get_the_ID(), 'portfolio_category');
$term_slugs = $terms ? wp_list_pluck($terms, 'slug') : [];
$term_name  = $terms ? $terms[0]->name : '';
$url       = get_post_meta(get_the_ID(), '_portfolio_url', true);
$tech      = get_post_meta(get_the_ID(), '_portfolio_tech', true);
$year      = get_post_meta(get_the_ID(), '_portfolio_year', true);
?>
<article class="c-work-card u-reveal js-reveal js-work-card" data-category="<?php echo esc_attr(implode(' ', $term_slugs)); ?>">
    <a href="<?php the_permalink(); ?>" class="c-work-card__link">
        <div class="c-work-card__image">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('portfolio-thumb', ['alt' => get_the_title(), 'loading' => 'lazy']); ?>
            <?php else: ?>
                <div class="c-work-card__placeholder">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                </div>
            <?php endif; ?>
            <div class="c-work-card__overlay">
                <span class="c-work-card__view">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                    View Project
                </span>
            </div>
        </div>
        <div class="c-work-card__body">
            <?php if ($term_name): ?>
            <span class="c-tag"><?php echo esc_html($term_name); ?></span>
            <?php endif; ?>
            <h3 class="c-work-card__title"><?php the_title(); ?></h3>
            <?php if (has_excerpt()): ?>
            <p class="c-work-card__excerpt"><?php the_excerpt(); ?></p>
            <?php endif; ?>
            <div class="c-work-card__meta">
                <?php if ($tech): ?>
                <div class="c-work-card__tech">
                    <?php
                    $techs = array_slice(array_map('trim', explode(',', $tech)), 0, 3);
                    foreach ($techs as $t): ?>
                    <span class="c-badge"><?php echo esc_html($t); ?></span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <?php if ($year): ?>
                <span class="c-work-card__year"><?php echo esc_html($year); ?></span>
                <?php endif; ?>
            </div>
        </div>
    </a>
</article>
