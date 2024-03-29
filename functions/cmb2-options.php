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
        'type' => 'text'
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
