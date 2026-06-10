# Flatto | WEB DESIGN STUDIO — WordPress Theme

**Flatto ポートフォリオサイト**の WordPress テーマです。

- **サイト名**: Flatto | WEB DESIGN STUDIO
- **URL**: <https://www.flatto.website>
- **ベーステーマ**: Portfolio Pro

## 使用技術

- WordPress
- PHP
- HTML5
- CSS3
- JavaScript

## 主な実装内容

- **カスタムロゴ**（`add_theme_support('custom-logo')`、ライト/ダーク切替対応）
- **完全レスポンシブ対応**（モバイル / タブレット / PC）
- **お問い合わせフォーム**（Contact Form 7 連携）
- カスタム投稿タイプ「Portfolio（Works）」+ カテゴリタクソノミー
- スクロールアニメーション（Intersection Observer）/ カウンター / スキルバー
- ダークモードベースのモダンUI（グラスモーフィズム・Bentoグリッド）
- フィルター機能付きポートフォリオグリッド

## インストール方法

1. `portfolio-theme` フォルダを丸ごと ZIP に圧縮
2. WordPress 管理画面 → 外観 → テーマ → 新規追加 → テーマのアップロード
3. ZIP をアップロードして有効化
4. 有効化後、**設定 → パーマリンク** を開いて「保存」を押す（必須）

## 初期設定

### ナビゲーションメニュー
外観 → メニュー で新規メニューを作成し、「Primary Menu」に割り当て

### ポートフォリオ（作品）の追加
管理画面の「Portfolio」→「新規追加」から、タイトル・本文・アイキャッチ・抜粋・カテゴリ、
および右カラムの **Project Details**（Client / Project URL / Technologies Used / My Role / Year）を入力。

### お問い合わせフォーム（Contact Form 7）
1. プラグイン **Contact Form 7** を有効化
2. 外観 → カスタマイズ →「お問い合わせフォーム」で **フォームID** を設定
   （空欄の場合は最初のフォームを自動使用）
3. CF7 のデフォルトCSS・自動 `<p>` 折り返しはテーマ側で無効化済み（`functions.php`）

## カスタマイズ箇所

- **プロフィール画像**: 外観 → カスタマイズ →「プロフィール画像」、または `front-page.php`
- **SNSリンク**: `footer.php` 内の href を変更
- **スキル・実績数値**: `front-page.php` の `$skills` 配列 / `.stat-number[data-count]`
- **カラー**: `assets/css/main.css` の `:root` 変数
  - `--accent-1`: メインカラー（紫 #7c3aed）
  - `--accent-2`: サブカラー（青 #2563eb）
  - `--bg`: 背景色（#080810）

## ファイル構成

```
portfolio-theme/
├── style.css                 # テーマ定義（ヘッダーコメント）
├── functions.php             # テーマ機能（CPT・タクソノミー・メタボックス・CF7・カスタマイザー）
├── header.php                # 共通ヘッダー
├── footer.php                # 共通フッター（SNSリンク）
├── front-page.php            # トップページ
├── index.php                 # ブログ一覧（フォールバック）
├── single.php                # ブログ記事詳細
├── page.php                  # 汎用 固定ページ
├── page-about.php            # 固定ページテンプレート「プロフィール（About）」
├── page-privacy.php          # 固定ページテンプレート「プライバシーポリシー」
├── page-corporate.php        # サービス詳細：コーポレートサイト（slug: corporate）
├── page-web-design.php       # サービス詳細：Webデザイン（slug: web-design）
├── page-lp.php               # サービス詳細：ランディングページ（slug: lp）
├── page-wordpress.php        # サービス詳細：WordPress構築（slug: wordpress）
├── archive-portfolio.php     # 作品一覧（アーカイブ）
├── single-portfolio.php      # 作品詳細
├── 404.php                   # 404ページ
├── template-parts/
│   └── portfolio-card.php    # 作品カードパーツ
└── assets/
    ├── css/
    │   └── main.css          # メインスタイルシート
    ├── js/
    │   └── main.js           # アニメーション・インタラクション
    └── images/
        ├── logo-light.svg    # ロゴ（ライト）
        ├── logo-dark.svg     # ロゴ（ダーク）
        └── favicon.svg       # ファビコン
```

> サービス詳細ページ（corporate / web-design / lp / wordpress）は、対応するスラッグの固定ページを作成すると自動で適用される「`page-{slug}.php`」形式のテンプレートです。

## 推奨プラグイン

- **Contact Form 7** — お問い合わせフォーム（本テーマ連携済み）
- **Yoast SEO** / **All in One SEO** — SEO対策
- **WP Fastest Cache** — ページキャッシュ
- **Smush** — 画像最適化

---

© Flatto | WEB DESIGN STUDIO
