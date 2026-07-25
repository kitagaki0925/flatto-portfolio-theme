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
                Web<span class="u-text-gradient">デザイン</span>
            </h1>
            <p class="p-service-page__hero-desc u-fade-up u-fade-up-delay-2">
                ブランドの個性を引き出し、ユーザーの心を動かすオリジナルデザインを提供します。
                Figmaを使ったプロトタイプ設計から、実装まで一貫して対応可能です。
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
                    <h2 class="c-heading">ブランドを高める<br><span class="u-text-gradient">デザイン</span>を</h2>
                    <p style="color:var(--text-muted);line-height:1.8;margin-bottom:24px;">
                        「なんとなくダサい」「古く見える」「他社と差別化できない」——そんなお悩みをデザインで解決します。
                        ターゲットユーザーの視点に立ち、ブランドの強みを最大限に表現するビジュアルを設計します。
                    </p>
                    <p style="color:var(--text-muted);line-height:1.8;">
                        デザインデータ（Figma）の納品のみ、またはコーディングまで一括対応どちらも承ります。
                    </p>
                </div>
                <div class="u-reveal js-reveal">
                    <ul class="p-service-page__feature-list">
                        <?php
                        $features = [
                            'ブランドカラー・フォント選定のサポート',
                            'ターゲットに刺さるビジュアルコンセプト設計',
                            'Figmaでのワイヤーフレーム・デザインカンプ',
                            'PC・スマートフォン両対応のレスポンシブデザイン',
                            'コンポーネント整理されたFigmaデータ納品',
                            'デザインシステム・スタイルガイド作成',
                            'コーディング実装まで一括対応可能',
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
                    ['icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>', 'title' => 'ヒアリング・リサーチ', 'desc' => 'ターゲット・競合・ブランド方針をヒアリングし、デザイン方向性を定めます。'],
                    ['icon' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/>', 'title' => 'ワイヤーフレーム', 'desc' => 'ページ構成・情報設計をFigmaで可視化し、ご確認いただきます。'],
                    ['icon' => '<circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>', 'title' => 'デザインカンプ作成', 'desc' => 'PC・SP両対応のデザインをFigmaで制作。細部まで丁寧に仕上げます。'],
                    ['icon' => '<path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>', 'title' => 'デザイン修正対応', 'desc' => '合意した回数まで修正対応します。フィードバックを丁寧に反映します。'],
                    ['icon' => '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/>', 'title' => 'Figmaデータ納品', 'desc' => 'コンポーネント整理されたFigmaファイルをそのまま納品します。'],
                    ['icon' => '<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>', 'title' => 'コーディング（オプション）', 'desc' => 'HTML/CSS/JS実装またはWordPressへの組み込みも追加料金で対応します。'],
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
                    <div class="c-pricing-card__plan">Design Only</div>
                    <div class="c-pricing-card__price">¥50,000 <span class="c-pricing-card__price-unit">〜</span></div>
                    <div class="c-pricing-card__note">納期：1〜2週間</div>
                    <div class="c-pricing-card__divider"></div>
                    <ul class="c-pricing-card__features">
                        <li>ランディングページ1枚のデザイン</li>
                        <li>PC・SP両対応</li>
                        <li>Figmaデータ納品</li>
                        <li>修正2回まで</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-button c-button--outline c-button--full">相談する</a>
                </div>
                <div class="c-pricing-card c-pricing-card--featured">
                    <div class="c-pricing-card__badge">おすすめ</div>
                    <div class="c-pricing-card__plan">Standard</div>
                    <div class="c-pricing-card__price">¥100,000 <span class="c-pricing-card__price-unit">〜</span></div>
                    <div class="c-pricing-card__note">納期：2〜3週間</div>
                    <div class="c-pricing-card__divider"></div>
                    <ul class="c-pricing-card__features">
                        <li>コーポレートサイト（5ページ分）</li>
                        <li>ワイヤーフレーム込み</li>
                        <li>PC・SP両対応</li>
                        <li>Figmaデータ＋スタイルガイド</li>
                        <li>修正3回まで</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-button c-button--primary c-button--full">相談する</a>
                </div>
                <div class="c-pricing-card">
                    <div class="c-pricing-card__plan">Full Service</div>
                    <div class="c-pricing-card__price">¥200,000 <span class="c-pricing-card__price-unit">〜</span></div>
                    <div class="c-pricing-card__note">納期：3〜5週間</div>
                    <div class="c-pricing-card__divider"></div>
                    <ul class="c-pricing-card__features">
                        <li>デザイン＋コーディング一括</li>
                        <li>ブランドアイデンティティ設計</li>
                        <li>デザインシステム構築</li>
                        <li>修正5回まで</li>
                        <li>納品後サポート1ヶ月付き</li>
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
                    ['num' => '01', 'title' => 'ヒアリング', 'desc' => 'ブランド方針・ターゲット・競合・好みのデザインテイストをお聞きします。'],
                    ['num' => '02', 'title' => 'デザイン方向性の提案', 'desc' => 'カラー・フォント・ムードボードを提示し、方向性を合わせます。'],
                    ['num' => '03', 'title' => 'ワイヤーフレーム', 'desc' => 'ページ構成・情報設計をFigmaで作成しご確認いただきます。'],
                    ['num' => '04', 'title' => 'デザイン作成・修正', 'desc' => 'デザインカンプを制作。フィードバックをいただき修正します。'],
                    ['num' => '05', 'title' => '納品', 'desc' => 'Figmaデータ（＋コーディング）を納品。操作説明も行います。'],
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
