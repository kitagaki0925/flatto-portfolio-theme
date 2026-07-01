<?php
defined('ABSPATH') || exit;

// ─── Theme Setup ───────────────────────────────────────────────
function portfolio_pro_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('custom-logo', [
        'height'      => 50,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ]);
    add_image_size('portfolio-thumb', 800, 600, true);
    add_image_size('portfolio-thumb-2x', 1600, 1200, true); // 高解像度(Retina)ディスプレイ向け
    add_image_size('portfolio-hero', 1200, 800, true);
    add_image_size('portfolio-hero-2x', 2400, 1600, true); // 高解像度(Retina)ディスプレイ向け

    register_nav_menus([
        'primary' => __('Primary Menu', 'portfolio-pro'),
        'footer'  => __('Footer Menu', 'portfolio-pro'),
    ]);
}
add_action('after_setup_theme', 'portfolio_pro_setup');

// ─── Enqueue Assets ────────────────────────────────────────────
function portfolio_pro_scripts() {
    $v = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Syne:wght@700;800&display=swap',
        [],
        null
    );
    wp_enqueue_style('portfolio-pro-main', get_template_directory_uri() . '/assets/css/main.css', [], $v);
    wp_enqueue_style('portfolio-pro-style', get_stylesheet_uri(), ['portfolio-pro-main'], $v);

    wp_enqueue_script('portfolio-pro-main', get_template_directory_uri() . '/assets/js/main.js', [], $v, true);
    wp_localize_script('portfolio-pro-main', 'portfolioPro', [
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('portfolio_pro_nonce'),
    ]);
}
add_action('wp_enqueue_scripts', 'portfolio_pro_scripts');

// ─── Portfolio Custom Post Type ────────────────────────────────
function portfolio_pro_register_cpt() {
    $labels = [
        'name'               => __('Works', 'portfolio-pro'),
        'singular_name'      => __('Work', 'portfolio-pro'),
        'add_new'            => __('Add New Work', 'portfolio-pro'),
        'add_new_item'       => __('Add New Work', 'portfolio-pro'),
        'edit_item'          => __('Edit Work', 'portfolio-pro'),
        'view_item'          => __('View Work', 'portfolio-pro'),
        'all_items'          => __('All Works', 'portfolio-pro'),
        'search_items'       => __('Search Works', 'portfolio-pro'),
        'not_found'          => __('No works found.', 'portfolio-pro'),
        'menu_name'          => __('Portfolio', 'portfolio-pro'),
    ];
    register_post_type('portfolio', [
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => ['slug' => 'works'],
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_icon'          => 'dashicons-portfolio',
        'show_in_rest'       => true,
    ]);
}
add_action('init', 'portfolio_pro_register_cpt');

// ─── Portfolio Taxonomy ─────────────────────────────────────────
function portfolio_pro_register_taxonomy() {
    $labels = [
        'name'          => __('Categories', 'portfolio-pro'),
        'singular_name' => __('Category', 'portfolio-pro'),
        'search_items'  => __('Search Categories', 'portfolio-pro'),
        'all_items'     => __('All Categories', 'portfolio-pro'),
        'edit_item'     => __('Edit Category', 'portfolio-pro'),
        'add_new_item'  => __('Add New Category', 'portfolio-pro'),
        'menu_name'     => __('Categories', 'portfolio-pro'),
    ];
    register_taxonomy('portfolio_category', 'portfolio', [
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'work-category'],
    ]);
}
add_action('init', 'portfolio_pro_register_taxonomy');

// ─── Portfolio Meta Boxes ───────────────────────────────────────
function portfolio_pro_add_meta_boxes() {
    add_meta_box(
        'portfolio_details',
        __('Project Details', 'portfolio-pro'),
        'portfolio_pro_meta_box_callback',
        'portfolio',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'portfolio_pro_add_meta_boxes');

function portfolio_pro_meta_box_callback($post) {
    wp_nonce_field('portfolio_pro_meta', 'portfolio_pro_meta_nonce');
    $client     = get_post_meta($post->ID, '_portfolio_client', true);
    $url        = get_post_meta($post->ID, '_portfolio_url', true);
    $tech       = get_post_meta($post->ID, '_portfolio_tech', true);
    $year       = get_post_meta($post->ID, '_portfolio_year', true);
    $role       = get_post_meta($post->ID, '_portfolio_role', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="portfolio_client"><?php _e('Client', 'portfolio-pro'); ?></label></th>
            <td><input type="text" id="portfolio_client" name="portfolio_client" value="<?php echo esc_attr($client); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="portfolio_url"><?php _e('Project URL', 'portfolio-pro'); ?></label></th>
            <td><input type="url" id="portfolio_url" name="portfolio_url" value="<?php echo esc_attr($url); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="portfolio_tech"><?php _e('Technologies Used', 'portfolio-pro'); ?></label></th>
            <td>
                <input type="text" id="portfolio_tech" name="portfolio_tech" value="<?php echo esc_attr($tech); ?>" class="regular-text">
                <p class="description"><?php _e('Comma-separated. e.g. WordPress, PHP, JavaScript', 'portfolio-pro'); ?></p>
            </td>
        </tr>
        <tr>
            <th><label for="portfolio_role"><?php _e('My Role', 'portfolio-pro'); ?></label></th>
            <td><input type="text" id="portfolio_role" name="portfolio_role" value="<?php echo esc_attr($role); ?>" class="regular-text" placeholder="<?php _e('e.g. Front-end Developer', 'portfolio-pro'); ?>"></td>
        </tr>
        <tr>
            <th><label for="portfolio_year"><?php _e('Year', 'portfolio-pro'); ?></label></th>
            <td><input type="number" id="portfolio_year" name="portfolio_year" value="<?php echo esc_attr($year); ?>" min="2000" max="2099" class="small-text"></td>
        </tr>
    </table>
    <?php
}

function portfolio_pro_save_meta($post_id) {
    if (!isset($_POST['portfolio_pro_meta_nonce']) || !wp_verify_nonce($_POST['portfolio_pro_meta_nonce'], 'portfolio_pro_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $fields = ['portfolio_client', 'portfolio_url', 'portfolio_tech', 'portfolio_role', 'portfolio_year'];
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = $field === 'portfolio_url'
                ? esc_url_raw($_POST[$field])
                : sanitize_text_field($_POST[$field]);
            update_post_meta($post_id, '_' . $field, $value);
        }
    }
}
add_action('save_post_portfolio', 'portfolio_pro_save_meta');

// ─── Contact Form 7 ─────────────────────────────────────────────
// CF7 のデフォルト CSS を無効化（テーマ側で完全スタイリング）
add_filter( 'wpcf7_load_css', '__return_false' );

// CF7 の自動 <p> 折り返しを無効化（form-group クラスで制御）
add_filter( 'wpcf7_autop_or_not', '__return_false' );

// ─── Excerpt Length ─────────────────────────────────────────────
function portfolio_pro_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'portfolio_pro_excerpt_length');

// ─── Flattoロゴ・ファビコン設定 ─────────────────────────────────
function flatto_favicon() {
    echo '<link rel="icon" type="image/svg+xml" href="' . get_template_directory_uri() . '/assets/images/favicon.svg">';
}
add_action('wp_head', 'flatto_favicon');
add_action('admin_head', 'flatto_favicon');

// ─── Flush Rewrite on Activate ──────────────────────────────────
function portfolio_pro_activate() {
    portfolio_pro_register_cpt();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'portfolio_pro_activate');

// ─── Customizer ─────────────────────────────────────────────────
function portfolio_pro_customize_register($wp_customize) {

    // Contact Form 7 設定
    $wp_customize->add_section('portfolio_pro_contact', [
        'title'    => 'お問い合わせフォーム',
        'priority' => 25,
    ]);
    $wp_customize->add_setting('cf7_contact_id', [
        'default'           => '',
        'sanitize_callback' => 'absint',
    ]);
    $wp_customize->add_control('cf7_contact_id', [
        'label'       => 'Contact Form 7 フォームID',
        'description' => '管理画面 → お問い合わせ → フォーム一覧に表示されるIDを入力。空欄の場合は最初のフォームを自動使用。',
        'section'     => 'portfolio_pro_contact',
        'type'        => 'number',
    ]);

    // プロフィール画像
    $wp_customize->add_section('portfolio_pro_profile', [
        'title'    => 'プロフィール画像',
        'priority' => 30,
    ]);

    $wp_customize->add_setting('about_image', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', [
        'label'   => 'プロフィール画像',
        'section' => 'portfolio_pro_profile',
    ]));
}
add_action('customize_register', 'portfolio_pro_customize_register');
