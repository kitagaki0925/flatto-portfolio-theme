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
                LP<span class="u-text-gradient">制作</span>
            </h1>
            <p class="p-service-page__hero-desc u-fade-up u-fade-up-delay-2">
                コンバージョン最大化を意識した、高品質なランディングページを制作します。
                訪問者の心を動かすデザインと、成果につながる構成設計で、ビジネスの目標達成をサポートします。
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
                    <h2 class="c-heading">成果につながる<br><span class="u-text-gradient">LP</span>を制作します</h2>
                    <p style="color:var(--text-muted);line-height:1.8;margin-bottom:24px;">
                        ランディングページは「訪問者を顧客に変える」ための重要な接点です。
                        ターゲットの心理を深く理解した構成設計と、視線を誘導するビジュアルデザインで、
                        高いコンバージョン率を実現します。
                    </p>
                    <p style="color:var(--text-muted);line-height:1.8;">
                        WordPressでの実装から静的HTML/CSSまで柔軟に対応。
                        A/Bテストを想定した構造設計も可能です。
                    </p>
                </div>
                <div class="u-reveal js-reveal">
                    <ul class="p-service-page__feature-list">
                        <?php
                        $features = [
                            'コンバージョン設計を意識したページ構成',
                            'ファーストビューで離脱を防ぐビジュアル設計',
                            'スマートフォン・PC全デバイス対応',
                            'WordPressまたは静的HTML/CSSで実装',
                            'SEO基本設定（メタタグ・OGP）込み',
                            'フォーム設置・サンクスページ対応',
                            '表示速度を意識した軽量コーディング',
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
                    ['icon' => '<path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/>', 'title' => 'ヒアリング・企画', 'desc' => '目的・ターゲット・競合分析を行い、成果につながるページ構成を設計します。'],
                    ['icon' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/>', 'title' => 'ワイヤーフレーム作成', 'desc' => 'Figmaでページの骨格を設計。承認後にデザインへ進みます。'],
                    ['icon' => '<circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>', 'title' => 'オリジナルデザイン', 'desc' => 'ブランドカラーや雰囲気に合わせた、オリジナルデザインを制作します。'],
                    ['icon' => '<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>', 'title' => 'HTML/CSS コーディング', 'desc' => 'セマンティックで保守しやすいクリーンなコードで実装します。'],
                    ['icon' => '<rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/>', 'title' => 'レスポンシブ対応', 'desc' => 'スマートフォン・タブレット・PCすべてで崩れない表示を保証します。'],
                    ['icon' => '<path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>', 'title' => '修正対応・納品後サポート', 'desc' => '修正は2回まで対応。納品後1週間は不具合対応を無償で行います。'],
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
                    <div class="c-pricing-card__plan">Simple</div>
                    <div class="c-pricing-card__price">¥80,000 <span class="c-pricing-card__price-unit">〜</span></div>
                    <div class="c-pricing-card__note">納期：2〜3週間</div>
                    <div class="c-pricing-card__divider"></div>
                    <ul class="c-pricing-card__features">
                        <li>1スクロール型LP（5〜7セクション）</li>
                        <li>レスポンシブ対応</li>
                        <li>フォーム設置</li>
                        <li>SEO基本設定</li>
                        <li>修正2回まで</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-button c-button--outline c-button--full">相談する</a>
                </div>
                <div class="c-pricing-card c-pricing-card--featured">
                    <div class="c-pricing-card__badge">人気プラン</div>
                    <div class="c-pricing-card__plan">Standard</div>
                    <div class="c-pricing-card__price">¥150,000 <span class="c-pricing-card__price-unit">〜</span></div>
                    <div class="c-pricing-card__note">納期：3〜4週間</div>
                    <div class="c-pricing-card__divider"></div>
                    <ul class="c-pricing-card__features">
                        <li>フルスクロール型LP（10〜15セクション）</li>
                        <li>アニメーション演出</li>
                        <li>フォーム＋サンクスページ</li>
                        <li>OGP・SNSシェア対応</li>
                        <li>修正3回まで</li>
                        <li>Google Analytics 設置</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-button c-button--primary c-button--full">相談する</a>
                </div>
                <div class="c-pricing-card">
                    <div class="c-pricing-card__plan">Premium</div>
                    <div class="c-pricing-card__price">¥280,000 <span class="c-pricing-card__price-unit">〜</span></div>
                    <div class="c-pricing-card__note">納期：4〜6週間</div>
                    <div class="c-pricing-card__divider"></div>
                    <ul class="c-pricing-card__features">
                        <li>フルカスタムデザイン</li>
                        <li>動画・インタラクション演出</li>
                        <li>A/Bテスト設計</li>
                        <li>WordPressで更新可能な実装</li>
                        <li>修正5回まで</li>
                        <li>1ヶ月保守サポート付き</li>
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
                    ['num' => '01', 'title' => 'ヒアリング', 'desc' => '目的・ターゲット・予算・スケジュールをお聞きします。オンラインミーティングにも対応。'],
                    ['num' => '02', 'title' => 'ワイヤーフレーム', 'desc' => 'ページ構成・セクション設計をFigmaで作成し、ご確認いただきます。'],
                    ['num' => '03', 'title' => 'デザイン', 'desc' => '承認いただいたワイヤーをもとに、ビジュアルデザインを作成します。'],
                    ['num' => '04', 'title' => 'コーディング・実装', 'desc' => 'デザインを忠実にコーディング。WordPress実装も対応します。'],
                    ['num' => '05', 'title' => 'テスト・修正・納品', 'desc' => '各デバイスで動作確認後、修正対応を経て納品します。'],
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
