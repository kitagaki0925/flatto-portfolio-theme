<?php get_header(); ?>

<main class="l-main">

    <!-- Hero -->
    <section class="p-service-page__hero">
        <div class="l-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-service-page__back u-fade-up">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M5 12l7 7M5 12l7-7"/></svg>
                トップへ戻る
            </a>
            <div class="c-eyebrow u-fade-up">Service</div>
            <h1 class="p-service-page__hero-title u-fade-up u-fade-up-delay-1">
                WordPress<span class="u-text-gradient">制作</span>
            </h1>
            <p class="p-service-page__hero-desc u-fade-up u-fade-up-delay-2">
                管理しやすく、高速で、SEOに強いWordPressサイトを構築します。
                オリジナルテーマ開発から既存テーマのカスタマイズ、プラグイン開発まで幅広く対応します。
            </p>
            <div class="p-service-page__hero-actions u-fade-up u-fade-up-delay-3">
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-button c-button--primary c-button--lg">
                    無料相談・お見積もり
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                </a>
                <a href="<?php echo esc_url(home_url('/#works')); ?>" class="c-button c-button--ghost c-button--lg">制作実績を見る</a>
            </div>
        </div>
    </section>

    <!-- Overview -->
    <section class="l-section">
        <div class="l-container">
            <div class="p-service-page__overview-grid">
                <div class="u-reveal js-reveal">
                    <div class="c-eyebrow">Overview</div>
                    <h2 class="c-heading">使いやすく<br><span class="u-text-gradient">強いWordPress</span>を</h2>
                    <p style="color:var(--text-muted);line-height:1.8;margin-bottom:24px;">
                        WordPressは世界シェアNo.1のCMSです。正しく構築すれば、クライアント自身が
                        記事や商品を更新できる「育つWebサイト」になります。
                    </p>
                    <p style="color:var(--text-muted);line-height:1.8;">
                        PHP・JavaScriptを用いたオリジナルテーマ開発を得意としています。
                        既存サイトのWordPress移行やリニューアルも対応可能です。
                    </p>
                </div>
                <div class="u-reveal js-reveal">
                    <ul class="p-service-page__feature-list">
                        <?php
                        $features = [
                            'オリジナルテーマのゼロからの開発',
                            '既存テーマのカスタマイズ・改修',
                            'カスタム投稿タイプ・カスタムフィールド設計',
                            'プラグイン選定・設定・開発',
                            'お問い合わせフォーム（Contact Form 7）設置',
                            'SEO基本設定（Yoast/RankMath）',
                            '表示速度最適化・セキュリティ設定',
                        ];
                        foreach ($features as $f): ?>
                        <li>
                            <span class="p-service-page__feature-check">
                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            <?php echo esc_html($f); ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Includes -->
    <section class="l-section">
        <div class="l-container">
            <div class="c-section-intro u-reveal js-reveal">
                <div class="c-eyebrow">Includes</div>
                <h2 class="c-heading">制作に<span class="u-text-gradient">含まれるもの</span></h2>
            </div>
            <div class="p-service-page__includes-grid">
                <?php
                $includes = [
                    ['icon' => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>', 'title' => 'オリジナルテーマ開発', 'desc' => 'デザインカンプをもとにPHP/HTML/CSS/JSでテーマをゼロから構築します。'],
                    ['icon' => '<rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/>', 'title' => 'レスポンシブ対応', 'desc' => 'スマートフォン・タブレット・PCで崩れない表示を保証します。'],
                    ['icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>', 'title' => 'セキュリティ設定', 'desc' => 'ログイン保護・スパム対策・SSL確認など基本的なセキュリティ設定を行います。'],
                    ['icon' => '<circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>', 'title' => 'SEO基本設定', 'desc' => 'メタタグ・OGP・サイトマップ・XMLサイトマップなどSEO基盤を整えます。'],
                    ['icon' => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>', 'title' => 'お問い合わせフォーム', 'desc' => 'Contact Form 7でフォームを設置。自動返信メールの設定も行います。'],
                    ['icon' => '<path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/>', 'title' => '管理画面の使い方説明', 'desc' => '納品後に管理画面の操作方法をご説明します。マニュアルも提供可能です。'],
                ];
                foreach ($includes as $item): ?>
                <div class="c-bento-card u-reveal js-reveal">
                    <div class="c-bento-card__icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <?php echo $item['icon']; ?>
                        </svg>
                    </div>
                    <h3 class="c-bento-card__title"><?php echo esc_html($item['title']); ?></h3>
                    <p class="c-bento-card__desc"><?php echo esc_html($item['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="l-section">
        <div class="l-container">
            <div class="c-section-intro u-reveal js-reveal">
                <div class="c-eyebrow">Pricing</div>
                <h2 class="c-heading"><span class="u-text-gradient">料金</span>の目安</h2>
                <p class="c-lead">要件によって変動します。まずはお気軽にご相談ください。</p>
            </div>
            <div class="p-service-page__pricing-grid u-reveal js-reveal">
                <div class="c-pricing-card">
                    <div class="c-pricing-card__plan">Basic</div>
                    <div class="c-pricing-card__price">¥100,000 <span class="c-pricing-card__price-unit">〜</span></div>
                    <div class="c-pricing-card__note">納期：3〜4週間</div>
                    <div class="c-pricing-card__divider"></div>
                    <ul class="c-pricing-card__features">
                        <li>既存テーマのカスタマイズ</li>
                        <li>ページ数：〜5ページ</li>
                        <li>お問い合わせフォーム設置</li>
                        <li>SEO基本設定</li>
                        <li>レスポンシブ対応</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-button c-button--outline c-button--full">相談する</a>
                </div>
                <div class="c-pricing-card c-pricing-card--featured">
                    <div class="c-pricing-card__badge">人気プラン</div>
                    <div class="c-pricing-card__plan">Standard</div>
                    <div class="c-pricing-card__price">¥200,000 <span class="c-pricing-card__price-unit">〜</span></div>
                    <div class="c-pricing-card__note">納期：4〜6週間</div>
                    <div class="c-pricing-card__divider"></div>
                    <ul class="c-pricing-card__features">
                        <li>オリジナルテーマ開発</li>
                        <li>ページ数：〜10ページ</li>
                        <li>カスタム投稿タイプ設計</li>
                        <li>フォーム＋自動返信設定</li>
                        <li>速度最適化・セキュリティ設定</li>
                        <li>管理画面操作説明付き</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-button c-button--primary c-button--full">相談する</a>
                </div>
                <div class="c-pricing-card">
                    <div class="c-pricing-card__plan">Premium</div>
                    <div class="c-pricing-card__price">¥350,000 <span class="c-pricing-card__price-unit">〜</span></div>
                    <div class="c-pricing-card__note">納期：6〜8週間</div>
                    <div class="c-pricing-card__divider"></div>
                    <ul class="c-pricing-card__features">
                        <li>フルカスタムテーマ開発</li>
                        <li>ページ数：無制限</li>
                        <li>プラグイン開発・API連携</li>
                        <li>多言語対応（WPML）</li>
                        <li>マニュアル作成</li>
                        <li>2ヶ月保守サポート付き</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-button c-button--outline c-button--full">相談する</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="c-process-section l-section">
        <div class="l-container">
            <div class="c-section-intro u-reveal js-reveal">
                <div class="c-eyebrow">Process</div>
                <h2 class="c-heading">制作の<span class="u-text-gradient">流れ</span></h2>
            </div>
            <div class="c-process-steps">
                <?php
                $steps = [
                    ['num' => '01', 'title' => 'ヒアリング', 'desc' => '目的・ページ数・機能要件・予算・スケジュールをお聞きします。'],
                    ['num' => '02', 'title' => 'デザイン確認', 'desc' => 'Figmaデザインカンプをご確認いただきます（デザイン込みの場合）。'],
                    ['num' => '03', 'title' => 'WordPress構築', 'desc' => 'テーマ開発・プラグイン設定・コンテンツ入力を行います。'],
                    ['num' => '04', 'title' => 'テスト・修正', 'desc' => '各デバイス・ブラウザで動作確認。速度・SEO・セキュリティを最適化します。'],
                    ['num' => '05', 'title' => '納品・操作説明', 'desc' => '本番環境に公開し、管理画面の操作方法をご説明します。'],
                ];
                foreach ($steps as $i => $step): ?>
                <div class="c-process-steps__step u-reveal js-reveal" style="--delay:<?php echo $i * 0.1; ?>s">
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

    <!-- CTA -->
    <section class="l-section">
        <div class="l-container">
            <div class="p-service-page__cta-wrapper u-reveal js-reveal">
                <div class="c-eyebrow">Contact</div>
                <h2 class="p-service-page__cta-title">まずは<span class="u-text-gradient">無料相談</span>から</h2>
                <p class="p-service-page__cta-desc">お見積もり・ご相談は無料です。お気軽にメッセージをお送りください。24時間以内に返信します。</p>
                <div class="p-service-page__cta-actions">
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-button c-button--primary c-button--lg">
                        無料で相談する
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/#works')); ?>" class="c-button c-button--ghost c-button--lg">制作実績を確認する</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
