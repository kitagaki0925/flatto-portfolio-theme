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
                コーポレート<span class="text-gradient">サイト制作</span>
            </h1>
            <p class="service-hero-desc animate-fade-up delay-2">
                企業の信頼性を高め、新規顧客を獲得するコーポレートサイトを制作します。
                デザインから実装、公開後の運用まで一貫してサポートします。
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
                    <h2 class="section-title">企業の顔となる<br><span class="text-gradient">Webサイト</span>を</h2>
                    <p style="color:var(--text-muted);line-height:1.8;margin-bottom:24px;">
                        コーポレートサイトは会社の第一印象を決める重要なツールです。
                        「信頼できる会社か」「どんなサービスを提供しているか」——訪問者がすぐに理解できる
                        明確な構成とデザインを設計します。
                    </p>
                    <p style="color:var(--text-muted);line-height:1.8;">
                        WordPressで構築するため、ニュースやブログを自社で更新できます。
                        公開後も長く使い続けられるサイトを目指します。
                    </p>
                </div>
                <div class="reveal">
                    <ul class="service-feature-list">
                        <?php
                        $features = [
                            'ブランドに合わせたオリジナルデザイン',
                            'トップ・会社概要・サービス・採用・お問い合わせ等',
                            'WordPressで自社更新できる仕組みを構築',
                            'スマートフォン・PC全デバイス対応',
                            'Google Analytics・Search Console設置',
                            'SEO基本設定・サイトマップ送信',
                            '問い合わせフォーム＋自動返信設定',
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
                    ['icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>', 'title' => 'ヒアリング・サイト設計', 'desc' => '会社の強み・ターゲット・競合を分析し、サイト構成を設計します。'],
                    ['icon' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/>', 'title' => 'デザイン制作', 'desc' => 'ブランドイメージに合ったオリジナルデザインをFigmaで制作します。'],
                    ['icon' => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>', 'title' => 'WordPress構築', 'desc' => 'オリジナルテーマで実装。ニュース・ブログ更新を管理画面から行えます。'],
                    ['icon' => '<circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>', 'title' => 'SEO・アナリティクス設定', 'desc' => 'Google Analytics・Search Console・SEOプラグイン設定を行います。'],
                    ['icon' => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>', 'title' => '問い合わせフォーム', 'desc' => '自動返信メール付きのお問い合わせフォームを設置します。'],
                    ['icon' => '<path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/>', 'title' => '操作マニュアル・引き継ぎ', 'desc' => '管理画面の使い方マニュアルを作成し、納品時にご説明します。'],
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
                    <div class="pricing-plan">Small</div>
                    <div class="pricing-price">¥150,000 <span>〜</span></div>
                    <div class="pricing-note">納期：4〜5週間 / 〜5ページ</div>
                    <div class="pricing-divider"></div>
                    <ul class="pricing-features">
                        <li>トップ・会社概要・サービス・採用・お問い合わせ</li>
                        <li>WordPressで更新可能</li>
                        <li>レスポンシブ対応</li>
                        <li>SEO基本設定</li>
                        <li>フォーム設置</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-outline btn-full">相談する</a>
                </div>
                <div class="pricing-card featured">
                    <div class="pricing-badge">人気プラン</div>
                    <div class="pricing-plan">Standard</div>
                    <div class="pricing-price">¥300,000 <span>〜</span></div>
                    <div class="pricing-note">納期：6〜8週間 / 〜10ページ</div>
                    <div class="pricing-divider"></div>
                    <ul class="pricing-features">
                        <li>全ページオリジナルデザイン</li>
                        <li>ニュース・ブログ機能</li>
                        <li>Google Analytics設置</li>
                        <li>速度最適化・セキュリティ設定</li>
                        <li>操作マニュアル作成</li>
                        <li>納品後1ヶ月サポート付き</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-primary btn-full">相談する</a>
                </div>
                <div class="pricing-card">
                    <div class="pricing-plan">Enterprise</div>
                    <div class="pricing-price">¥500,000 <span>〜</span></div>
                    <div class="pricing-note">納期：8〜12週間 / ページ数応相談</div>
                    <div class="pricing-divider"></div>
                    <ul class="pricing-features">
                        <li>大規模サイト・多機能システム</li>
                        <li>採用管理・会員機能等</li>
                        <li>多言語対応</li>
                        <li>外部システム連携（CRM等）</li>
                        <li>3ヶ月保守サポート付き</li>
                        <li>定期レポート・改善提案</li>
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
                    ['num' => '01', 'title' => 'ヒアリング・要件定義', 'desc' => '事業内容・ターゲット・必要ページ・機能・予算をヒアリングします。'],
                    ['num' => '02', 'title' => 'サイト設計・デザイン', 'desc' => 'サイトマップ→ワイヤーフレーム→デザインの順で進め、各段階でご確認いただきます。'],
                    ['num' => '03', 'title' => 'WordPress構築・コーディング', 'desc' => 'デザインをWordPressテーマとして実装。コンテンツ入力も行います。'],
                    ['num' => '04', 'title' => 'テスト・修正', 'desc' => '全ページ・全デバイスで動作確認。速度・SEO・セキュリティを最適化します。'],
                    ['num' => '05', 'title' => '公開・引き継ぎ', 'desc' => '本番環境への公開を行い、管理画面の操作方法をご説明します。'],
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
