<?php
add_action('cmb2_admin_init', 'upshotmedia_register_options_meta_box');
function upshotmedia_register_options_meta_box()
{
    $cmb_options = new_cmb2_box(array(
        'id' => 'upshotmedia_option_metabox',
        'title' => 'Theme Settings',
        'object_types' => array('options-page'),
        'option_key' => 'upshotmedia_options'
    ));
    $general_group = $cmb_options->add_field(array(
        'id' => 'upshotmedia_general_group',
        'type' => 'group',
        'repeatable' => false,
        'options' => array(
            'group_title' => 'Public Setting',
            'closed' => false,
        ),
    ));

    $cmb_options->add_group_field($general_group, array(
        'name' => 'Text',
        'id' => 'Main_title_Text',
        'type' => 'text',
    ));
    // logo carousel
    $upshotmedia_logo_carousel = $cmb_options->add_field(array(
        'id' => 'upshotmedia_logo_carousel',
        'type' => 'group',
        'repeatable' => false,
        'options' => array(
            'group_title' => 'Customer Logo',
            'closed' => false,
        )
    ));
    $cmb_options->add_group_field($upshotmedia_logo_carousel, array(
        'name' => 'Images Carousel',
        'id' => 'Images_carousel',
        'desc' => 'Upload an image or enter an URL.',
        'type' => 'file_list'
    ));
    //social Group
    $social_group = $cmb_options->add_field(array(
        'id' => 'upshotmedia_social_group',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Social group {#}',
            'closed' => true,
        ),
    ));
    $cmb_options->add_group_field($social_group, array(
        'name' => 'First Icon',
        'id' => 'footer_icon_1',
        'type' => 'text'
    ));
    $cmb_options->add_group_field($social_group, array(
        'name' => 'First Icon Link',
        'id' => 'footer_icon_link_1',
        'type' => 'text_url',
        'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
    ));
    $cmb_options->add_group_field($social_group, array(
        'name' => 'First Icon class',
        'id' => 'footer_icon_class_1',
        'type' => 'text'
    ));

    // footer panels
    $footer_group = $cmb_options->add_field(array(
        'id' => 'upshotmedia_footer_group',
        'type' => 'group',
        'repeatable' => false,
        'options' => array(
            'group_title' => 'Footer_group',
            'closed' => false,
        ),
    ));
    $cmb_options->add_group_field($footer_group, array(
        'name' => 'Footer Explaine',
        'id' => 'footer_explaine',
        'type' => 'textarea',
        // 'default_cb' => 'set_to_today'
        'required' => false
    ));
    $cmb_options->add_group_field($footer_group, array(
        'name' => 'Footer Logo',
        'id' => 'Footer_Logo',
        'type' => 'file',
        'desc'    => 'Upload an image or enter an URL.',
    ));
    $cmb_options->add_group_field($footer_group, array(
        'name' => 'Footer Color',
        'id' => 'footer_color',
        'type' => 'colorpicker'
    ));
    //footer Group Contact Column
    $footer_group_contact_column = $cmb_options->add_field(array(
        'id' => 'upshotmedia_footer_group_contact_column',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'footer group contact column  {#}',
            'closed' => true,
        ),
    ));
    $cmb_options->add_group_field($footer_group_contact_column, array(
        'name' => 'Title',
        'id' => 'title_contact',
        'type' => 'text'
    ));
    $cmb_options->add_group_field($footer_group_contact_column, array(
        'name' => 'Contact Link',
        'id' => 'contact_link',
        'type' => 'text_url',
        'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet', 'tel'), // Array of allowed protocols
    ));
    $cmb_options->add_group_field($footer_group_contact_column, array(
        'name' => 'Contact Data',
        'id' => 'contact_data',
        'type' => 'text'
    ));
    //services column
    $footer_group_services_column = $cmb_options->add_field(array(
        'id' => 'upshotmedia_footer_group_services_column',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'footer group services column  {#}',
            'closed' => true,
        ),
    ));
    $cmb_options->add_group_field($footer_group_services_column, array(
        'name' => 'Name Link',
        'id' => 'Name_Link',
        'type' => 'text'
    ));
    $cmb_options->add_group_field($footer_group_services_column, array(
        'name' => 'Services Link',
        'id' => 'Services_Link',
        'type' => 'text_url'
    ));
    //footer gallery
    $footer_group_gallery = $cmb_options->add_field(array(
        'id' => 'Footer_gallery_image',
        'type' => 'group',
        'options' => array(
            'group_title' => 'Footer Group Gallery',
            'closed' => true,
        )
    ));
    $cmb_options->add_group_field($footer_group_gallery, array(
        'name' => 'footer gallery',
        'id' => 'footer_gallery',
        'desc' => 'Upload an image or enter an URL.',
        'type' => 'file_list'
    ));
}

function upshotmedia_get_option($key = '', $default = false)
{
    if (function_exists('cmb2_get_option')) {
        return cmb2_get_option('upshotmedia_options', $key, $default);
    }

    $opts = get_option('upshotmedia_options', $default);
    $val = $default;
    if ('all' == $key) {
        $val = $opts;
    } elseif (is_array($opts) && array_key_exists($key, $opts) && false !== $opts[$key]) {
        $val = $opts[$key];
    }
    return $val;
}
