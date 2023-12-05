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
