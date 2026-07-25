<?php
/**
 * Template Name: プロフィール（About）
 *
 * 固定ページに本テンプレートを割り当てるか、
 * スラッグを「about」にした固定ページを作成すると自動適用されます。
 *
 * ※「大切にしている価値観」セクションで、ご本人の背景（ジェンダーレス）を
 *   開示したうえで、それを制作姿勢に結びつける形で記述しています。
 *   トーンや表現を変えたい場合は同セクションを編集してください。
 *
 * @package portfolio-pro
 */
get_header();
?>

<main class="l-main">

    <!-- Hero -->
    <section class="p-service-page__hero">
        <div class="l-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-service-page__back u-fade-up">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M5 12l7 7M5 12l7-7"/></svg>
                トップへ戻る
            </a>
            <div class="c-eyebrow u-fade-up">About</div>
            <h1 class="p-service-page__hero-title u-fade-up u-fade-up-delay-1">
                プロフィール<span class="u-text-gradient">／自己紹介</span>
            </h1>
            <p class="p-service-page__hero-desc u-fade-up u-fade-up-delay-2">
                Webサイトを通じて、お客様の想いを丁寧に形にすること。
                そして、誰にとっても心地よく伝わるWebを届けること。
                その背景にある考え方をご紹介します。
            </p>
        </div>
    </section>

    <!-- Profile -->
    <section class="l-section">
        <div class="l-container">
            <article class="c-wysiwyg c-wysiwyg--legal">

                <h2>はじめに</h2>
                <p>
                    数あるWeb制作者の中から、このページをご覧いただきありがとうございます。
                    大学では工学部の情報系を専攻し、プログラミングやWebの基礎を体系的に学びました。
                    現在はWebデザイナー／デベロッパーとして、WordPressを中心に、
                    コーポレートサイトやランディングページの制作に取り組んでいます。
                </p>
                <p>
                    「デザインだけ」「実装だけ」ではなく、
                    お客様のビジネスや想いをヒアリングするところから、設計・デザイン・実装・公開まで
                    一貫して伴走できることを強みにしています。
                    最新のAIツールも開発に取り入れ、コード品質のチェックや不具合の早期発見に活用することで、
                    高品質な成果物をスピーディにお届けします。
                </p>

                <h2>制作で大切にしていること</h2>
                <p>
                    Webサイトは「作って終わり」ではなく、お客様のビジネスを前に進めるための道具です。
                    見た目の美しさはもちろん、訪れた人が迷わず行動できる導線、
                    更新しやすい仕組み、表示の速さなど、公開後に効果を生むことを意識して設計します。
                </p>

                <h2>大切にしている価値観 — 誰にでも開かれたWebを</h2>
                <p>
                    私が制作において特に大切にしているのは、
                    <strong>多様な価値観や背景を持つ一人ひとりに、敬意を持って向き合う</strong>という姿勢です。
                </p>
                <p>
                    実は私自身、ジェンダーレスとして日々を過ごしています（生まれ持った性別は男性です）。
                    「こうあるべき」という枠に必ずしも収まらない立場だからこそ、
                    人それぞれの違いや、言葉にしづらい想いに自然と目が向きます。
                    その感覚は、Webサイトづくりにもそのまま生きていると感じています。
                </p>
                <p>
                    年齢、性別、立場、考え方——人はそれぞれ違います。
                    だからこそ、特定の誰かだけでなく、できるだけ多くの人にとって
                    「わかりやすい」「心地よい」「自分も歓迎されている」と感じられるWebサイトでありたいと考えています。
                    言葉選び、配色、画像、情報の伝え方の一つひとつに、その配慮を込めています。
                </p>
                <p>
                    多様性に配慮した発信をしたい事業者さま、LGBTQ+フレンドリーな場づくりに取り組まれている方、
                    「自分たちの想いを丁寧にくみ取ってほしい」とお考えの方は、
                    どうぞ安心してご相談ください。
                    立場や背景にかかわらず、フラットに、そして誠実に向き合うことをお約束します。
                </p>

                <h2>これからのこと</h2>
                <p>
                    まだ歩み始めたばかりですが、一件一件のご縁を大切に、
                    お客様と長くお付き合いできる制作者を目指しています。
                    小さなご相談でも歓迎ですので、まずはお気軽にお声がけください。
                </p>

                <div class="p-page__cta">
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="c-button c-button--primary c-button--lg">
                        お問い合わせ・ご相談
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/#works')); ?>" class="c-button c-button--ghost c-button--lg">制作実績を見る</a>
                </div>

            </article>
        </div>
    </section>

</main>

<?php get_footer(); ?>
