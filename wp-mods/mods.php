<?php

// get rid of jquery nonsense
function my_jquery_enqueue()
{
    wp_deregister_script('jquery');
}

add_action('wp_enqueue_scripts', 'my_jquery_enqueue');

//get rid of emojis js that is not being used in the front end
add_action('init', 'smartwp_disable_emojis');

function smartwp_disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

function wpb_login_logo()
{
    $site_icon_url = get_site_icon_url();

    if (!empty($site_icon_url)) {
?>
        <style type="text/css">
            .login {
                background-color: white;
            }

            #login h1 a,
            .login h1 a {
                background-image: url(<?php echo esc_url($site_icon_url); ?>);
                height: 200px;
                width: 200px;
                background-size: 100%;
                background-repeat: no-repeat;
                padding-bottom: 10px;
                background-size: contain;
            }
        </style>
<?php
    }
}
add_action('login_enqueue_scripts', 'wpb_login_logo');

// disable theme editors
define('DISALLOW_FILE_EDIT', true);

// add editor the privilege to edit theme

// get the the role object
$role_object = get_role('editor');

// add $cap capability to this role object
$role_object->add_cap('edit_theme_options');

//  custom block category for new blocks
add_filter('block_categories_all', function ($categories) {

    // Adding a new category.
    $categories[] = array(
        'slug'  => 'midsen-layout',
        'title' => 'Midsen'
    );

    return $categories;
});

// Whitelist specific Gutenberg blocks for non admins
// based on https://rudrastyh.com/gutenberg/remove-default-blocks.html#allowed_block_types_all

add_filter('allowed_block_types_all', 'jp_allowed_block_types', 25, 2);

function jp_allowed_block_types($allowed_blocks, $editor_context)
{
    //only block for non admin
    if (!current_user_can('administrator')) {
        return array(
            'core/paragraph',
            'core/html',
            'lazyblock/hero'
        );
    }
    // If the user is an administrator, allow all blocks
    return $allowed_blocks;
}


//remove this for prod
function dump_registered_blocks()
{
    $block_types = WP_Block_Type_Registry::get_instance()->get_all_registered();

    $output = '<ul>';
    foreach ($block_types as $block_type) {
        $output .= '<li>' . esc_html($block_type->name) . '</li>';
    }
    $output .= '</ul>';

    return $output;
}

// Register a shortcode to use in a custom HTML block
function register_blocks_dump_shortcode()
{
    add_shortcode('blocks_dump', 'dump_registered_blocks');
}

add_action('init', 'register_blocks_dump_shortcode');
