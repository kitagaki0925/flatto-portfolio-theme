# Portfolio Pro — WordPress Theme

副業Webデザイナー向けのモダンなポートフォリオテーマです。

## デザインの特徴

- **ダークモード** をデフォルトに採用
- **Bentoグリッド** レイアウトでサービスを魅せる
- **スクロールアニメーション** (Intersection Observer)
- **グラスモーフィズム** とグローエフェクト
- **カウンターアニメーション** (実績数値)
- **スキルバーアニメーション**
- **マウスパラレックス** (Heroセクション)
- **フィルター機能付きポートフォリオグリッド**
- **完全レスポンシブ** (モバイル/タブレット/PC)

## インストール方法

1. `portfolio-theme` フォルダを丸ごと ZIP に圧縮
2. WordPress 管理画面 → 外観 → テーマ → 新規追加 → テーマのアップロード
3. ZIP をアップロードして有効化
4. 有効化後、**設定 → パーマリンク** を開いて「保存」を押す（必須）

## 初期設定

### ナビゲーションメニューの設定
外観 → メニュー → 新規メニューを作成し、「Primary Menu」に割り当て

### ポートフォリオ（作品）の追加
1. 管理画面左メニューに「Portfolio」が追加されている
2. 「新規追加」から作品を投稿
3. 入力項目：
   - タイトル（作品名）
   - 本文（詳細説明）
   - アイキャッチ画像（サムネイル）
   - 抜粋（一覧ページの説明文）
   - **Project Details**（右カラム）：
     - Client（クライアント名）
     - Project URL（サイトURL）
     - Technologies Used（使用技術、カンマ区切り）
     - My Role（担当役割）
     - Year（制作年）
   - カテゴリ（Portfolio Category）

### カテゴリの設定
Portfolio → カテゴリ から作品カテゴリを追加（例：WordPress, LP, コーポレート）

## カスタマイズ箇所

### プロフィール画像
`front-page.php` のAboutセクション内、またはカスタマイザー（外観 → カスタマイズ）から設定

### SNSリンク
`footer.php` 内のTwitter・GitHub・LinkedInのhref属性を自身のURLに変更

### スキル
`front-page.php` の `$skills` 配列を編集

### サービス内容
`front-page.php` の Services セクションを直接編集

### カラー変更
`assets/css/foundation/_variables.css` の `:root` 変数を変更：
- `--accent-1`: メインカラー（現在：紫 #7c3aed）
- `--accent-2`: サブカラー（現在：青 #2563eb）
- `--bg`: 背景色（現在：#080810）

## ファイル構成

```
portfolio-theme/
├── style.css               # テーマ定義
├── functions.php           # テーマ機能（CPT、メタボックス、AJAX）
├── header.php              # ヘッダー
├── footer.php              # フッター
├── front-page.php          # トップページ
├── index.php               # ブログ一覧
├── single.php              # ブログ記事
├── page.php                # 固定ページ
├── page-*.php              # 個別固定ページ（about / corporate / lp / privacy / web-design / wordpress）
├── archive-portfolio.php   # 作品一覧
├── single-portfolio.php    # 作品詳細
├── 404.php                 # 404ページ
├── template-parts/
│   └── portfolio-card.php  # 作品カードパーツ
└── assets/
    ├── css/                # FLOCSS 構成（下記参照）
    │   ├── foundation/     # 変数・リセット・ベース
    │   ├── layout/         # l-*  コンテナ・ヘッダー・フッター
    │   ├── component/      # c-*  ボタン・カードなど再利用パーツ
    │   ├── project/        # p-*  ページ・セクション固有のスタイル
    │   └── utility/        # u-*  単機能ヘルパー
    └── js/main.js          # アニメーション・インタラクション
```

## CSS設計

FLOCSS + BEM（`Block__Element--Modifier`）で構成しています。

- クラス接頭辞：`l-` / `c-` / `p-` / `u-`、状態は `is-*`、JSのフックは `js-*`
- 各ファイルは `functions.php` の `portfolio_pro_css_layers()` で
  Foundation → Layout → Component → Project → Utility の順に読み込まれます
- **CSSファイルを追加したときは、`portfolio_pro_css_layers()` の該当レイヤーにファイル名（`_` と `.css` を除いた名前）を追加してください**。追加しないと読み込まれません

## お問い合わせフォーム
AJAXで非同期送信対応。WordPressの `wp_mail()` を使用。
送信先は管理者メールアドレス（設定 → 一般）に届きます。

## 推奨プラグイン
- **Yoast SEO** または **All in One SEO** — SEO対策
- **WP Fastest Cache** — ページキャッシュ高速化
- **Smush** — 画像最適化
- **Contact Form 7** — より高度なフォーム（テーマ内蔵フォームの代替として）
