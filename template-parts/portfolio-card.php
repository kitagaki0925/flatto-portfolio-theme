<?php
$terms     = get_the_terms(get_the_ID(), 'portfolio_category');
$term_slug = $terms ? $terms[0]->slug : '';
$term_name = $terms ? $terms[0]->name : '';
$url       = get_post_meta(get_the_ID(), '_portfolio_url', true);
$tech      = get_post_meta(get_the_ID(), '_portfolio_tech', true);
$year      = get_post_meta(get_the_ID(), '_portfolio_year', true);
?>
<article class="work-card reveal" data-category="<?php echo esc_attr($term_slug); ?>">
    <a href="<?php the_permalink(); ?>" class="work-card-link">
        <div class="work-card-image">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('portfolio-thumb', ['alt' => get_the_title(), 'loading' => 'lazy']); ?>
            <?php else: ?>
                <div class="work-card-placeholder">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                </div>
            <?php endif; ?>
            <div class="work-card-overlay">
                <span class="work-card-view">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                    View Project
                </span>
            </div>
        </div>
        <div class="work-card-body">
            <?php if ($term_name): ?>
            <span class="work-card-tag"><?php echo esc_html($term_name); ?></span>
            <?php endif; ?>
            <h3 class="work-card-title"><?php the_title(); ?></h3>
            <?php if (has_excerpt()): ?>
            <p class="work-card-excerpt"><?php the_excerpt(); ?></p>
            <?php endif; ?>
            <div class="work-card-meta">
                <?php if ($tech): ?>
                <div class="work-tech">
                    <?php
                    $techs = array_slice(array_map('trim', explode(',', $tech)), 0, 3);
                    foreach ($techs as $t): ?>
                    <span class="tech-badge"><?php echo esc_html($t); ?></span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <?php if ($year): ?>
                <span class="work-year"><?php echo esc_html($year); ?></span>
                <?php endif; ?>
            </div>
        </div>
    </a>
</article>
