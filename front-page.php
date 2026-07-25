<?php get_header(); ?>

<main class="l-main">

    <!-- ── Hero Section ─────────────────────────────────────── -->
    <section class="p-hero" id="home">
        <div class="p-hero__bg">
            <div class="c-glow c-glow--1 js-hero-glow-1"></div>
            <div class="c-glow c-glow--2 js-hero-glow-2"></div>
            <div class="p-hero__grid"></div>
        </div>
        <div class="l-container p-hero__content">
            <div class="p-hero__tag u-fade-up">
                <span class="p-hero__tag-dot"></span>
                <?php _e('Web制作承ります', 'portfolio-pro'); ?>
            </div>
            <h1 class="p-hero__title u-fade-up u-fade-up-delay-1">
                <?php _e('Your vision, our craft.', 'portfolio-pro'); ?>
            </h1>
            <p class="p-hero__subcopy u-fade-up u-fade-up-delay-1">
                <?php _e('あなたのビジネスの想いを、', 'portfolio-pro'); ?><br>
                <?php _e('美しく機能的なWebサイトとして丁寧に形にします。', 'portfolio-pro'); ?>
            </p>
            <p class="p-hero__desc u-fade-up u-fade-up-delay-2" style="display:none;">
                <?php _e('お客様のビジネスを加速させる、美しく機能的なWebサイトを制作します。WordPressを中心に、モダンなデザインとクリーンなコードでオンラインプレゼンスを高めます。', 'portfolio-pro'); ?>
            </p>
            <div class="p-hero__actions u-fade-up u-fade-up-delay-3">
                <a href="#works" class="c-button c-button--primary c-button--lg">
                    <?php _e('View Works', 'portfolio-pro'); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                </a>
                <a href="#contact" class="c-button c-button--ghost c-button--lg"><?php _e('Get in Touch', 'portfolio-pro'); ?></a>
            </div>
            <?php /* 実績カウンター：非表示 */ ?>
        </div>

        <?php
        // ── 実績カラム（無限縦スクロール）：サムネイル付きの制作実績を全面背景に流す ──
        $hero_cols_count = 5; // PC表示でのカラム数（CSS側でスマホ時は減らす）
        $hero_q = new WP_Query([
            'post_type'      => 'portfolio',
            'posts_per_page' => 20,
            'post_status'    => 'publish',
            'orderby'        => 'rand',
            'meta_query'     => [['key' => '_thumbnail_id']], // アイキャッチ画像があるものだけ
        ]);
        $tiles = [];
        if ($hero_q->have_posts()) {
            while ($hero_q->have_posts()) { $hero_q->the_post();
                $tiles[] = get_the_post_thumbnail(get_the_ID(), 'portfolio-thumb', [
                    'alt'     => '', // 装飾目的なので alt は空に
                    'loading' => 'lazy',
                    'sizes'   => '(max-width: 768px) 45vw, 300px',
                ]);
            }
            wp_reset_postdata();
        }

        if (!empty($tiles)) {
            // 各カラムを隙間なく流すため最低本数を確保（カラム数 × 4）
            $min_tiles = $hero_cols_count * 4;
            while (count($tiles) < $min_tiles) { $tiles = array_merge($tiles, $tiles); }

            // カラムごとにラウンドロビンで振り分け
            $columns = array_fill(0, $hero_cols_count, []);
            foreach ($tiles as $i => $tile) {
                $columns[$i % $hero_cols_count][] = $tile;
            }
        ?>
        <div class="p-hero__columns" aria-hidden="true">
            <?php foreach ($columns as $col): ?>
            <div class="p-hero__column">
                <div class="p-hero__column-track">
                    <?php // 同じ並びを2回出力してシームレスにループ（-50%でちょうど1周期）
                    for ($copy = 0; $copy < 2; $copy++):
                        foreach ($col as $tile): ?>
                        <div class="p-hero__tile"><?php echo $tile; ?></div>
                    <?php endforeach; endfor; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="p-hero__scrim" aria-hidden="true"></div>
        <?php } else { ?>
        <div class="p-hero__scroll-indicator">
            <span></span>
        </div>
        <?php } ?>
    </section>

    <!-- ── About Section ────────────────────────────────────── -->
    <section class="l-section p-about" id="about">
        <div class="l-container">
            <div class="p-about__grid">
                <div class="p-about__visual u-reveal js-reveal">
                    <div class="p-about__image-frame">
                        <?php
                        $about_img = get_theme_mod('about_image', '');
                        if ($about_img) {
                            echo '<img src="' . esc_url($about_img) . '" alt="Profile" loading="lazy">';
                        } else { ?>
                            <div class="p-about__image-placeholder">
                                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="p-about__content u-reveal js-reveal">
                    <div class="c-eyebrow"><?php _e('About Me', 'portfolio-pro'); ?></div>
                    <h2 class="c-heading"><?php _e('Web制作で<br><span class="u-text-gradient">ビジネスを加速</span>します', 'portfolio-pro'); ?></h2>
                    <p class="p-about__text">
<?php _e('はじめまして。大学では工学部の情報系を専攻し、プログラミングやWebの基礎を体系的に学びました。現在はWebデザイナー／デベロッパーとして、WordPressを中心にコーポレートサイトやLPの制作に取り組んでいます。', 'portfolio-pro'); ?>
                    </p>
                    <p class="p-about__text">
                        <?php _e('デザインから実装まで一貫して対応し、お客様のビジネス課題を解決するWebサイトを丁寧に制作します。最新のAIツールも開発に取り入れ、コード品質のチェックや不具合の早期発見に活用することで、高品質な成果物をスピーディにお届けします。', 'portfolio-pro'); ?>
                    </p>
                    <p class="p-about__text">
                        <?php _e('多様な価値観や背景を持つお客様一人ひとりに敬意を持って向き合い、誰にとっても心地よく伝わるWebサイトづくりを大切にしています。', 'portfolio-pro'); ?>
                    </p>

                    <div class="c-skill-list">
                        <?php
                        $skills = [
                            ['name' => 'WordPress',   'level' => 70],
                            ['name' => 'HTML / CSS',  'level' => 80],
                            ['name' => 'JavaScript',  'level' => 60],
                            ['name' => 'PHP',         'level' => 50],
                            ['name' => 'Figma',       'level' => 55],
                            ['name' => 'SEO',         'level' => 60],
                        ];
                        foreach ($skills as $skill): ?>
                        <div class="c-skill-bar">
                            <div class="c-skill-bar__header">
                                <span class="c-skill-bar__name"><?php echo esc_html($skill['name']); ?></span>
                                <span class="c-skill-bar__level"><?php echo esc_html($skill['level']); ?>%</span>
                            </div>
                            <div class="c-skill-bar__track">
                                <div class="c-skill-bar__fill js-skill-fill" data-width="<?php echo esc_attr($skill['level']); ?>"></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="p-about__actions">
                        <a href="#contact" class="c-button c-button--primary"><?php _e('お問い合わせはこちら', 'portfolio-pro'); ?></a>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c-button c-button--ghost">
                            <?php _e('詳しいプロフィール', 'portfolio-pro'); ?>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Services Section ─────────────────────────────────── -->
    <section class="l-section p-services" id="services">
        <div class="l-container">
            <div class="c-section-intro u-reveal js-reveal">
                <div class="c-eyebrow"><?php _e('Services', 'portfolio-pro'); ?></div>
                <h2 class="c-heading"><?php _e('提供できる<span class="u-text-gradient">サービス</span>', 'portfolio-pro'); ?></h2>
            </div>

            <div class="p-services__grid u-reveal js-reveal">
                <a href="<?php echo esc_url(home_url('/wordpress/')); ?>" style="display:block;" class="c-bento-card c-bento-card--large">

                    <div class="c-bento-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
                    </div>
                    <h3 class="c-bento-card__title"><?php _e('WordPress 制作', 'portfolio-pro'); ?></h3>
                    <p class="c-bento-card__desc"><?php _e('オリジナルテーマの制作からプラグイン開発まで。管理しやすく高速なWordPressサイトを構築します。', 'portfolio-pro'); ?></p>
                    <div class="c-bento-card__tags">
                        <span class="c-bento-card__tag">オリジナルテーマ</span><span class="c-bento-card__tag">プラグイン開発</span><span class="c-bento-card__tag">高速化</span>
                    </div>
                </a>

                <a href="<?php echo esc_url(home_url('/web-design/')); ?>" style="display:block;" class="c-bento-card">
                    <div class="c-bento-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    </div>
                    <h3 class="c-bento-card__title"><?php _e('Webデザイン', 'portfolio-pro'); ?></h3>
                    <p class="c-bento-card__desc"><?php _e('ブランドに合わせたオリジナルデザイン。Figmaでのプロトタイプ作成も対応。', 'portfolio-pro'); ?></p>
				</a>

                <a href="<?php echo esc_url(home_url('/lp/')); ?>" style="display:block;" class="c-bento-card">

                    <div class="c-bento-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="c-bento-card__title"><?php _e('LP制作', 'portfolio-pro'); ?></h3>
                    <p class="c-bento-card__desc"><?php _e('CV最大化を意識した高品質なランディングページを制作。A/Bテスト対応も可能。', 'portfolio-pro'); ?></p>
				</a>

                <div class="c-bento-card">
                    <div class="c-bento-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                    </div>
                    <h3 class="c-bento-card__title"><?php _e('SEO 対策', 'portfolio-pro'); ?></h3>
                    <p class="c-bento-card__desc"><?php _e('技術的SEO・コンテンツSEOを組み合わせた包括的な検索対策を提供します。', 'portfolio-pro'); ?></p>
                </div>

                <div class="c-bento-card c-bento-card--wide">
                    <div class="c-bento-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="c-bento-card__title"><?php _e('保守・運用サポート', 'portfolio-pro'); ?></h3>
                    <p class="c-bento-card__desc"><?php _e('制作後の定期メンテナンス、セキュリティ対策、コンテンツ更新のサポートまで、長期的なパートナーとして対応します。', 'portfolio-pro'); ?></p>
                    <div class="c-bento-card__tags">
                        <span class="c-bento-card__tag">月次レポート</span><span class="c-bento-card__tag">セキュリティ</span><span class="c-bento-card__tag">バックアップ</span><span class="c-bento-card__tag">更新対応</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Works Section ────────────────────────────────────── -->
    <section class="l-section p-works" id="works">
        <div class="l-container">
            <div class="c-section-intro u-reveal js-reveal">
                <div class="c-eyebrow"><?php _e('Portfolio', 'portfolio-pro'); ?></div>
                <h2 class="c-heading"><?php _e('制作<span class="u-text-gradient">実績</span>', 'portfolio-pro'); ?></h2>
                <p class="c-lead"><?php _e('これまでに手がけた主要プロジェクトをご紹介します', 'portfolio-pro'); ?></p>
            </div>

            <?php
            $portfolio_query = new WP_Query([
                'post_type'      => 'portfolio',
                'posts_per_page' => 6,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);

            if ($portfolio_query->have_posts()): ?>
            <div class="c-work-filter u-reveal js-reveal">
                <button class="c-work-filter__button is-active js-work-filter-button" data-filter="*"><?php _e('All', 'portfolio-pro'); ?></button>
                <?php
                $terms = get_terms(['taxonomy' => 'portfolio_category', 'hide_empty' => true]);
                foreach ($terms as $term): ?>
                <button class="c-work-filter__button js-work-filter-button" data-filter="<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></button>
                <?php endforeach; ?>
            </div>

            <div class="c-work-grid">
                <?php while ($portfolio_query->have_posts()): $portfolio_query->the_post();
                    get_template_part('template-parts/portfolio-card');
                endwhile;
                wp_reset_postdata(); ?>
            </div>

            <div class="p-works__cta u-reveal js-reveal">
                <a href="<?php echo esc_url(get_post_type_archive_link('portfolio')); ?>" class="c-button c-button--outline">
                    <?php _e('すべての制作実績を見る', 'portfolio-pro'); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                </a>
            </div>

            <?php else: ?>
            <div class="c-work-empty u-reveal js-reveal">
                <p><?php _e('まだ作品が登録されていません。WordPressの管理画面から「Portfolio」を追加してください。', 'portfolio-pro'); ?></p>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- ── Process Section ──────────────────────────────────── -->
    <section class="l-section c-process-section" id="process">
        <div class="l-container">
            <div class="c-section-intro u-reveal js-reveal">
                <div class="c-eyebrow"><?php _e('Process', 'portfolio-pro'); ?></div>
                <h2 class="c-heading"><?php _e('制作の<span class="u-text-gradient">流れ</span>', 'portfolio-pro'); ?></h2>
            </div>

            <div class="c-process-steps">
                <?php
                $steps = [
                    ['num' => '01', 'title' => 'ヒアリング', 'desc' => '目的・ターゲット・予算・スケジュールを詳しくお聞きします。'],
                    ['num' => '02', 'title' => 'デザイン提案', 'desc' => 'Figmaでワイヤーフレーム・デザインカンプを作成し、ご確認いただきます。'],
                    ['num' => '03', 'title' => 'コーディング', 'desc' => '承認いただいたデザインをコーディング。WordPressへの組み込みも行います。'],
                    ['num' => '04', 'title' => 'テスト・修正', 'desc' => '各デバイス・ブラウザでの動作確認と修正を行います。'],
                    ['num' => '05', 'title' => '納品・サポート', 'desc' => '公開後の操作説明から保守サポートまで、丁寧にフォローします。'],
                ];
                foreach ($steps as $i => $step): ?>
                <div class="c-process-steps__step u-reveal js-reveal" style="--delay: <?php echo $i * 0.1; ?>s">
                    <div class="c-process-steps__number"><?php echo esc_html($step['num']); ?></div>
                    <div class="c-process-steps__content">
                        <h3 class="c-process-steps__title"><?php echo esc_html($step['title']); ?></h3>
                        <p class="c-process-steps__desc"><?php echo esc_html($step['desc']); ?></p>
                    </div>
                    <?php if ($i < count($steps) - 1): ?>
                    <div class="c-process-steps__arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ── Contact Section ──────────────────────────────────── -->
    <section class="l-section p-contact" id="contact">
        <div class="l-container">
            <div class="p-contact__wrapper u-reveal js-reveal">
                <div class="p-contact__info">
                    <div class="c-eyebrow"><?php _e('Contact', 'portfolio-pro'); ?></div>
                    <h2 class="c-heading"><?php _e('お気軽に<br><span class="u-text-gradient">ご相談ください</span>', 'portfolio-pro'); ?></h2>
                    <p><?php _e('Webサイト制作に関するご相談、お見積もりは無料です。まずはお気軽にメッセージをお送りください。', 'portfolio-pro'); ?></p>

                    <div class="p-contact__features">
                        <div class="p-contact__feature">
                            <div class="p-contact__feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8a19.79 19.79 0 01-3.07-8.67A2 2 0 012 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14h.08z"/></svg>
                            </div>
                            <span><?php _e('無料相談・見積もり', 'portfolio-pro'); ?></span>
                        </div>
                        <div class="p-contact__feature">
                            <div class="p-contact__feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </div>
                            <span><?php _e('24時間以内に返信', 'portfolio-pro'); ?></span>
                        </div>
                        <div class="p-contact__feature">
                            <div class="p-contact__feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            </div>
                            <span><?php _e('秘密厳守・NDA対応可', 'portfolio-pro'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="p-contact__form-wrapper">
                    <?php
                    // Contact Form 7 が有効な場合はショートコードを出力
                    if ( shortcode_exists( 'contact-form-7' ) ) {
                        // Customizer で指定されたID、未設定なら最初のフォームを自動取得
                        $cf7_id = get_theme_mod( 'cf7_contact_id', '' );
                        if ( ! $cf7_id ) {
                            $forms  = get_posts( [ 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => 1, 'orderby' => 'ID', 'order' => 'ASC' ] );
                            $cf7_id = $forms ? $forms[0]->ID : '';
                        }
                        if ( $cf7_id ) {
                            echo do_shortcode( '[contact-form-7 id="' . absint( $cf7_id ) . '"]' );
                        } else {
                            echo '<p class="c-cf7-notice">' . __( 'Contact Form 7 でフォームを作成してください。', 'portfolio-pro' ) . '</p>';
                        }
                    } else {
                        // CF7 未インストール時のプレースホルダー
                        ?>
                        <div class="c-cf7-placeholder">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <p><?php _e( 'Contact Form 7 プラグインをインストール・有効化すると<br>ここにフォームが表示されます。', 'portfolio-pro' ); ?></p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
