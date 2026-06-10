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
                LP<span class="text-gradient">制作</span>
            </h1>
            <p class="service-hero-desc animate-fade-up delay-2">
                コンバージョン最大化を意識した、高品質なランディングページを制作します。
                訪問者の心を動かすデザインと、成果につながる構成設計で、ビジネスの目標達成をサポートします。
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
                    <h2 class="section-title">成果につながる<br><span class="text-gradient">LP</span>を制作します</h2>
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
                <div class="reveal">
                    <ul class="service-feature-list">
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
                    ['icon' => '<path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/>', 'title' => 'ヒアリング・企画', 'desc' => '目的・ターゲット・競合分析を行い、成果につながるページ構成を設計します。'],
                    ['icon' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/>', 'title' => 'ワイヤーフレーム作成', 'desc' => 'Figmaでページの骨格を設計。承認後にデザインへ進みます。'],
                    ['icon' => '<circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>', 'title' => 'オリジナルデザイン', 'desc' => 'ブランドカラーや雰囲気に合わせた、オリジナルデザインを制作します。'],
                    ['icon' => '<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>', 'title' => 'HTML/CSS コーディング', 'desc' => 'セマンティックで保守しやすいクリーンなコードで実装します。'],
                    ['icon' => '<rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/>', 'title' => 'レスポンシブ対応', 'desc' => 'スマートフォン・タブレット・PCすべてで崩れない表示を保証します。'],
                    ['icon' => '<path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>', 'title' => '修正対応・納品後サポート', 'desc' => '修正は2回まで対応。納品後1週間は不具合対応を無償で行います。'],
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
                    <div class="pricing-plan">Simple</div>
                    <div class="pricing-price">¥80,000 <span>〜</span></div>
                    <div class="pricing-note">納期：2〜3週間</div>
                    <div class="pricing-divider"></div>
                    <ul class="pricing-features">
                        <li>1スクロール型LP（5〜7セクション）</li>
                        <li>レスポンシブ対応</li>
                        <li>フォーム設置</li>
                        <li>SEO基本設定</li>
                        <li>修正2回まで</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-outline btn-full">相談する</a>
                </div>
                <div class="pricing-card featured">
                    <div class="pricing-badge">人気プラン</div>
                    <div class="pricing-plan">Standard</div>
                    <div class="pricing-price">¥150,000 <span>〜</span></div>
                    <div class="pricing-note">納期：3〜4週間</div>
                    <div class="pricing-divider"></div>
                    <ul class="pricing-features">
                        <li>フルスクロール型LP（10〜15セクション）</li>
                        <li>アニメーション演出</li>
                        <li>フォーム＋サンクスページ</li>
                        <li>OGP・SNSシェア対応</li>
                        <li>修正3回まで</li>
                        <li>Google Analytics 設置</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-primary btn-full">相談する</a>
                </div>
                <div class="pricing-card">
                    <div class="pricing-plan">Premium</div>
                    <div class="pricing-price">¥280,000 <span>〜</span></div>
                    <div class="pricing-note">納期：4〜6週間</div>
                    <div class="pricing-divider"></div>
                    <ul class="pricing-features">
                        <li>フルカスタムデザイン</li>
                        <li>動画・インタラクション演出</li>
                        <li>A/Bテスト設計</li>
                        <li>WordPressで更新可能な実装</li>
                        <li>修正5回まで</li>
                        <li>1ヶ月保守サポート付き</li>
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
                    ['num' => '01', 'title' => 'ヒアリング', 'desc' => '目的・ターゲット・予算・スケジュールをお聞きします。オンラインミーティングにも対応。'],
                    ['num' => '02', 'title' => 'ワイヤーフレーム', 'desc' => 'ページ構成・セクション設計をFigmaで作成し、ご確認いただきます。'],
                    ['num' => '03', 'title' => 'デザイン', 'desc' => '承認いただいたワイヤーをもとに、ビジュアルデザインを作成します。'],
                    ['num' => '04', 'title' => 'コーディング・実装', 'desc' => 'デザインを忠実にコーディング。WordPress実装も対応します。'],
                    ['num' => '05', 'title' => 'テスト・修正・納品', 'desc' => '各デバイスで動作確認後、修正対応を経て納品します。'],
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
