<?php get_header(); ?>

<main class="site-main">

    <!-- Hero -->
    <section class="service-hero">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="service-back animate-fade-up">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M5 12l7 7M5 12l7-7"/></svg>
                トップへ戻る
            </a>
            <div class="section-label animate-fade-up">Service</div>
            <h1 class="service-hero-title animate-fade-up delay-1">
                Web<span class="text-gradient">デザイン</span>
            </h1>
            <p class="service-hero-desc animate-fade-up delay-2">
                ブランドの個性を引き出し、ユーザーの心を動かすオリジナルデザインを提供します。
                Figmaを使ったプロトタイプ設計から、実装まで一貫して対応可能です。
            </p>
            <div class="service-hero-actions animate-fade-up delay-3">
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-primary btn-lg">
                    無料相談・お見積もり
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                </a>
                <a href="<?php echo esc_url(home_url('/#works')); ?>" class="btn btn-ghost btn-lg">制作実績を見る</a>
            </div>
        </div>
    </section>

    <!-- Overview -->
    <section class="section">
        <div class="container">
            <div class="service-overview-grid">
                <div class="reveal">
                    <div class="section-label">Overview</div>
                    <h2 class="section-title">ブランドを高める<br><span class="text-gradient">デザイン</span>を</h2>
                    <p style="color:var(--text-muted);line-height:1.8;margin-bottom:24px;">
                        「なんとなくダサい」「古く見える」「他社と差別化できない」——そんなお悩みをデザインで解決します。
                        ターゲットユーザーの視点に立ち、ブランドの強みを最大限に表現するビジュアルを設計します。
                    </p>
                    <p style="color:var(--text-muted);line-height:1.8;">
                        デザインデータ（Figma）の納品のみ、またはコーディングまで一括対応どちらも承ります。
                    </p>
                </div>
                <div class="reveal">
                    <ul class="service-feature-list">
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
                            <span class="feature-check">
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
    <section class="section">
        <div class="container">
            <div class="section-header reveal">
                <div class="section-label">Includes</div>
                <h2 class="section-title">制作に<span class="text-gradient">含まれるもの</span></h2>
            </div>
            <div class="service-includes-grid">
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
                <div class="bento-card reveal">
                    <div class="bento-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <?php echo $item['icon']; ?>
                        </svg>
                    </div>
                    <h3><?php echo esc_html($item['title']); ?></h3>
                    <p><?php echo esc_html($item['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="section">
        <div class="container">
            <div class="section-header reveal">
                <div class="section-label">Pricing</div>
                <h2 class="section-title"><span class="text-gradient">料金</span>の目安</h2>
                <p class="section-desc">要件によって変動します。まずはお気軽にご相談ください。</p>
            </div>
            <div class="pricing-cards reveal">
                <div class="pricing-card">
                    <div class="pricing-plan">Design Only</div>
                    <div class="pricing-price">¥50,000 <span>〜</span></div>
                    <div class="pricing-note">納期：1〜2週間</div>
                    <div class="pricing-divider"></div>
                    <ul class="pricing-features">
                        <li>ランディングページ1枚のデザイン</li>
                        <li>PC・SP両対応</li>
                        <li>Figmaデータ納品</li>
                        <li>修正2回まで</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-outline btn-full">相談する</a>
                </div>
                <div class="pricing-card featured">
                    <div class="pricing-badge">おすすめ</div>
                    <div class="pricing-plan">Standard</div>
                    <div class="pricing-price">¥100,000 <span>〜</span></div>
                    <div class="pricing-note">納期：2〜3週間</div>
                    <div class="pricing-divider"></div>
                    <ul class="pricing-features">
                        <li>コーポレートサイト（5ページ分）</li>
                        <li>ワイヤーフレーム込み</li>
                        <li>PC・SP両対応</li>
                        <li>Figmaデータ＋スタイルガイド</li>
                        <li>修正3回まで</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-primary btn-full">相談する</a>
                </div>
                <div class="pricing-card">
                    <div class="pricing-plan">Full Service</div>
                    <div class="pricing-price">¥200,000 <span>〜</span></div>
                    <div class="pricing-note">納期：3〜5週間</div>
                    <div class="pricing-divider"></div>
                    <ul class="pricing-features">
                        <li>デザイン＋コーディング一括</li>
                        <li>ブランドアイデンティティ設計</li>
                        <li>デザインシステム構築</li>
                        <li>修正5回まで</li>
                        <li>納品後サポート1ヶ月付き</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-outline btn-full">相談する</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="process section">
        <div class="container">
            <div class="section-header reveal">
                <div class="section-label">Process</div>
                <h2 class="section-title">制作の<span class="text-gradient">流れ</span></h2>
            </div>
            <div class="process-steps">
                <?php
                $steps = [
                    ['num' => '01', 'title' => 'ヒアリング', 'desc' => 'ブランド方針・ターゲット・競合・好みのデザインテイストをお聞きします。'],
                    ['num' => '02', 'title' => 'デザイン方向性の提案', 'desc' => 'カラー・フォント・ムードボードを提示し、方向性を合わせます。'],
                    ['num' => '03', 'title' => 'ワイヤーフレーム', 'desc' => 'ページ構成・情報設計をFigmaで作成しご確認いただきます。'],
                    ['num' => '04', 'title' => 'デザイン作成・修正', 'desc' => 'デザインカンプを制作。フィードバックをいただき修正します。'],
                    ['num' => '05', 'title' => '納品', 'desc' => 'Figmaデータ（＋コーディング）を納品。操作説明も行います。'],
                ];
                foreach ($steps as $i => $step): ?>
                <div class="process-step reveal" style="--delay:<?php echo $i * 0.1; ?>s">
                    <div class="step-number"><?php echo esc_html($step['num']); ?></div>
                    <div class="step-content">
                        <h3><?php echo esc_html($step['title']); ?></h3>
                        <p><?php echo esc_html($step['desc']); ?></p>
                    </div>
                    <?php if ($i < count($steps) - 1): ?>
                    <div class="step-arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section">
        <div class="container">
            <div class="service-cta-wrapper reveal">
                <div class="section-label">Contact</div>
                <h2 class="service-cta-title">まずは<span class="text-gradient">無料相談</span>から</h2>
                <p class="service-cta-desc">お見積もり・ご相談は無料です。お気軽にメッセージをお送りください。24時間以内に返信します。</p>
                <div class="service-cta-actions">
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-primary btn-lg">
                        無料で相談する
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/#works')); ?>" class="btn btn-ghost btn-lg">制作実績を確認する</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
