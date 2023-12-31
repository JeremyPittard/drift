<?

/**
 * Generated by the WordPress Option Page generator
 * at http://jeremyhixon.com/wp-tools/option-page/
 */

class BrandSettings
{
    private $brand_settings_options;

    public function __construct()
    {
        add_action('admin_menu', array($this, 'brand_settings_add_plugin_page'));
        add_action('admin_init', array($this, 'brand_settings_page_init'));
    }

    public function brand_settings_add_plugin_page()
    {
        add_menu_page(
            'Brand Settings', // page_title
            'Brand Settings', // menu_title
            'manage_options', // capability
            'brand-settings', // menu_slug
            array($this, 'brand_settings_create_admin_page'), // function
            'dashicons-admin-generic', // icon_url
            2 // position
        );
    }

    public function brand_settings_create_admin_page()
    {
        $this->brand_settings_options = get_option('brand_settings_option_name'); ?>

        <div class="wrap">
            <h2>Brand Settings</h2>
            <p></p>
            <?php settings_errors(); ?>

            <form method="post" action="options.php">
                <?php
                settings_fields('brand_settings_option_group');
                do_settings_sections('brand-settings-admin');
                submit_button();
                ?>
            </form>
        </div>
<?php }

    public function brand_settings_page_init()
    {
        register_setting(
            'brand_settings_option_group', // option_group
            'brand_settings_option_name', // option_name
            array($this, 'brand_settings_sanitize') // sanitize_callback
        );

        add_settings_section(
            'brand_settings_setting_section', // id
            'Settings', // title
            array($this, 'brand_settings_section_info'), // callback
            'brand-settings-admin' // page
        );

        add_settings_field(
            'structured_data_0', // id
            'Structured Data', // title
            array($this, 'structured_data_0_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );

        add_settings_field(
            'facebook_link_1', // id
            'Facebook Link', // title
            array($this, 'facebook_link_1_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );

        add_settings_field(
            'x_formerly_known_as_twitter_but_still_really_twitter_link_2', // id
            'X (formerly known as Twitter, but still really Twitter) Link', // title
            array($this, 'x_formerly_known_as_twitter_but_still_really_twitter_link_2_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );

        add_settings_field(
            'instagram_link_3', // id
            'Instagram Link', // title
            array($this, 'instagram_link_3_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );

        add_settings_field(
            'linkedin_link_4', // id
            'LinkedIn Link', // title
            array($this, 'linkedin_link_4_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );

        add_settings_field(
            'tiktok_link_11', // id
            'TikTok Link', // title
            array($this, 'tiktok_link_11_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );

        add_settings_field(
            'main_contact_email_address_5', // id
            'Main Contact Email Address', // title
            array($this, 'main_contact_email_address_5_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );

        add_settings_field(
            'main_contact_phone_number_6', // id
            'Main Contact Phone Number', // title
            array($this, 'main_contact_phone_number_6_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );

        add_settings_field(
            'show_sitewide_announcement_8', // id
            'Show Sitewide Announcement', // title
            array($this, 'show_sitewide_announcement_8_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );

        add_settings_field(
            'sitewide_announcement_7', // id
            'Sitewide Announcement', // title
            array($this, 'sitewide_announcement_7_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );

        add_settings_field(
            'show_footer_message_10', // id
            'Show Footer Message', // title
            array($this, 'show_footer_message_10_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );

        add_settings_field(
            'footer_message_9', // id
            'Footer Message', // title
            array($this, 'footer_message_9_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );





        add_settings_field(
            'address_12', // id
            'Address', // title
            array($this, 'address_12_callback'), // callback
            'brand-settings-admin', // page
            'brand_settings_setting_section' // section
        );
    }

    public function brand_settings_sanitize($input)
    {
        $sanitary_values = array();
        if (isset($input['structured_data_0'])) {
            $sanitary_values['structured_data_0'] = wp_kses_post($input['structured_data_0']);
        }

        if (isset($input['facebook_link_1'])) {
            $sanitary_values['facebook_link_1'] = sanitize_text_field($input['facebook_link_1']);
        }

        if (isset($input['x_formerly_known_as_twitter_but_still_really_twitter_link_2'])) {
            $sanitary_values['x_formerly_known_as_twitter_but_still_really_twitter_link_2'] = sanitize_text_field($input['x_formerly_known_as_twitter_but_still_really_twitter_link_2']);
        }

        if (isset($input['instagram_link_3'])) {
            $sanitary_values['instagram_link_3'] = sanitize_text_field($input['instagram_link_3']);
        }

        if (isset($input['linkedin_link_4'])) {
            $sanitary_values['linkedin_link_4'] = sanitize_text_field($input['linkedin_link_4']);
        }

        if (isset($input['main_contact_email_address_5'])) {
            $sanitary_values['main_contact_email_address_5'] = sanitize_text_field($input['main_contact_email_address_5']);
        }

        if (isset($input['main_contact_phone_number_6'])) {
            $sanitary_values['main_contact_phone_number_6'] = sanitize_text_field($input['main_contact_phone_number_6']);
        }

        if (isset($input['sitewide_announcement_7'])) {
            $sanitary_values['sitewide_announcement_7'] = sanitize_text_field($input['sitewide_announcement_7']);
        }

        if (isset($input['show_sitewide_announcement_8'])) {
            $sanitary_values['show_sitewide_announcement_8'] = $input['show_sitewide_announcement_8'];
        }

        if (isset($input['footer_message_9'])) {
            $sanitary_values['footer_message_9'] = sanitize_text_field($input['footer_message_9']);
        }

        if (isset($input['show_footer_message_10'])) {
            $sanitary_values['show_footer_message_10'] = $input['show_footer_message_10'];
        }

        if (isset($input['tiktok_link_11'])) {
            $sanitary_values['tiktok_link_11'] = sanitize_text_field($input['tiktok_link_11']);
        }

        if (isset($input['address_12'])) {
            $sanitary_values['address_12'] = sanitize_text_field($input['address_12']);
        }

        return $sanitary_values;
    }

    public function brand_settings_section_info()
    {
    }

    public function structured_data_0_callback()
    {
        printf(
            '
            <p>Go to <a href="https://technicalseo.com/tools/schema-markup-generator" target="_blank">the Technical Seo Structured Content Tool </a> &amp; fill out the form (you most likely want to select local business for schema type). Then copy the snippet it generates and paste it in the field below</p>
            <p>This will then add structured data about your business to the homepage, this is super helpful for people when they are using search engines and organisations like Google and Bing love it.</p>

            <textarea class="large-text" rows="5" name="brand_settings_option_name[structured_data_0]" id="structured_data_0">%s</textarea>
            ',
            isset($this->brand_settings_options['structured_data_0']) ? esc_attr($this->brand_settings_options['structured_data_0']) : ''
        );
    }

    public function facebook_link_1_callback()
    {
        printf(
            '
            <input class="regular-text" type="text" name="brand_settings_option_name[facebook_link_1]" id="facebook_link_1" value="%s">
            ',
            isset($this->brand_settings_options['facebook_link_1']) ? esc_attr($this->brand_settings_options['facebook_link_1']) : ''
        );
    }

    public function x_formerly_known_as_twitter_but_still_really_twitter_link_2_callback()
    {
        printf(
            '<input class="regular-text" type="text" name="brand_settings_option_name[x_formerly_known_as_twitter_but_still_really_twitter_link_2]" id="x_formerly_known_as_twitter_but_still_really_twitter_link_2" value="%s">',
            isset($this->brand_settings_options['x_formerly_known_as_twitter_but_still_really_twitter_link_2']) ? esc_attr($this->brand_settings_options['x_formerly_known_as_twitter_but_still_really_twitter_link_2']) : ''
        );
    }

    public function instagram_link_3_callback()
    {
        printf(
            '<input class="regular-text" type="text" name="brand_settings_option_name[instagram_link_3]" id="instagram_link_3" value="%s">',
            isset($this->brand_settings_options['instagram_link_3']) ? esc_attr($this->brand_settings_options['instagram_link_3']) : ''
        );
    }

    public function linkedin_link_4_callback()
    {
        printf(
            '<input class="regular-text" type="text" name="brand_settings_option_name[linkedin_link_4]" id="linkedin_link_4" value="%s">',
            isset($this->brand_settings_options['linkedin_link_4']) ? esc_attr($this->brand_settings_options['linkedin_link_4']) : ''
        );
    }

    public function main_contact_email_address_5_callback()
    {
        printf(
            '<input class="regular-text" type="text" name="brand_settings_option_name[main_contact_email_address_5]" id="main_contact_email_address_5" value="%s">',
            isset($this->brand_settings_options['main_contact_email_address_5']) ? esc_attr($this->brand_settings_options['main_contact_email_address_5']) : ''
        );
    }

    public function main_contact_phone_number_6_callback()
    {
        printf(
            '<input class="regular-text" type="text" name="brand_settings_option_name[main_contact_phone_number_6]" id="main_contact_phone_number_6" value="%s">',
            isset($this->brand_settings_options['main_contact_phone_number_6']) ? esc_attr($this->brand_settings_options['main_contact_phone_number_6']) : ''
        );
    }

    public function show_sitewide_announcement_8_callback()
    {
        printf(
            '<input type="checkbox" name="brand_settings_option_name[show_sitewide_announcement_8]" id="show_sitewide_announcement_8" value="show_sitewide_announcement_8" %s> <label for="show_sitewide_announcement_8">enables/disables sitewide announcement</label>',
            (isset($this->brand_settings_options['show_sitewide_announcement_8']) && $this->brand_settings_options['show_sitewide_announcement_8'] === 'show_sitewide_announcement_8') ? 'checked' : ''
        );
    }

    public function sitewide_announcement_7_callback()
    {
        printf(
            '<input class="regular-text" type="text" name="brand_settings_option_name[sitewide_announcement_7]" id="sitewide_announcement_7" value="%s">',
            isset($this->brand_settings_options['sitewide_announcement_7']) ? esc_attr($this->brand_settings_options['sitewide_announcement_7']) : ''
        );
    }

    public function show_footer_message_10_callback()
    {
        printf(
            '<input type="checkbox" name="brand_settings_option_name[show_footer_message_10]" id="show_footer_message_10" value="show_footer_message_10" %s> <label for="show_footer_message_10">enables/disables footer message</label>',
            (isset($this->brand_settings_options['show_footer_message_10']) && $this->brand_settings_options['show_footer_message_10'] === 'show_footer_message_10') ? 'checked' : ''
        );
    }

    public function footer_message_9_callback()
    {
        printf(
            '<input class="regular-text" type="text" name="brand_settings_option_name[footer_message_9]" id="footer_message_9" value="%s">',
            isset($this->brand_settings_options['footer_message_9']) ? esc_attr($this->brand_settings_options['footer_message_9']) : ''
        );
    }

    public function tiktok_link_11_callback()
    {
        printf(
            '<input class="regular-text" type="text" name="brand_settings_option_name[tiktok_link_11]" id="tiktok_link_11" value="%s">',
            isset($this->brand_settings_options['tiktok_link_11']) ? esc_attr($this->brand_settings_options['tiktok_link_11']) : ''
        );
    }

    public function address_12_callback()
    {
        printf(
            '<input class="regular-text" type="text" name="brand_settings_option_name[address_12]" id="address_12" value="%s">',
            isset($this->brand_settings_options['address_12']) ? esc_attr($this->brand_settings_options['address_12']) : ''
        );
    }
}
if (is_admin())
    $brand_settings = new BrandSettings();





// Add the Timber context filter if Timber is activated
if (class_exists('Timber')) {
    add_filter('timber/context', 'add_brand_settings_to_timber_context');
}

// Function to add settings to Timber context
function add_brand_settings_to_timber_context($context)
{
    // Retrieve options from the database
    $brand_settings_options = get_option('brand_settings_option_name');

    // Add options to the Timber context
    $context['brand'] = $brand_settings_options;

    return $context;
}

/* 
 * Retrieve this value with:
 * $brand_settings_options = get_option( 'brand_settings_option_name' ); // Array of All Options
 * $structured_data_0 = $brand_settings_options['structured_data_0']; // Structured Data
 * $facebook_link_1 = $brand_settings_options['facebook_link_1']; // Facebook Link
 * $x_formerly_known_as_twitter_but_still_really_twitter_link_2 = $brand_settings_options['x_formerly_known_as_twitter_but_still_really_twitter_link_2']; // X (formerly known as Twitter, but still really Twitter) Link
 * $instagram_link_3 = $brand_settings_options['instagram_link_3']; // Instagram Link
 * $linkedin_link_4 = $brand_settings_options['linkedin_link_4']; // LinkedIn Link
 * $main_contact_email_address_5 = $brand_settings_options['main_contact_email_address_5']; // Main Contact Email Address
 * $main_contact_phone_number_6 = $brand_settings_options['main_contact_phone_number_6']; // Main Contact Phone Number
 * $sitewide_announcement_7 = $brand_settings_options['sitewide_announcement_7']; // Sitewide Announcement
 * $show_sitewide_announcement_8 = $brand_settings_options['show_sitewide_announcement_8']; // Show Sitewide Announcement
 * $footer_message_9 = $brand_settings_options['footer_message_9']; // Footer Message
 * $show_footer_message_10 = $brand_settings_options['show_footer_message_10']; // Show Footer Message
 * $tiktok_link_11 = $brand_settings_options['tiktok_link_11']; // TikTok Link
 * $address_12 = $brand_settings_options['address_12']; // Address
 */


//  Access these valuse in twig files like so
//   {{ brand.what_is_your_name_0 }}, {{ brand_settings.what_is_your_favourite_colour_1 }}