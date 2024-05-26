<?php

use function PHPSTORM_META\type;

add_action('cmb2_admin_init', 'upshotmedia_register_options_meta_box');
function upshotmedia_register_options_meta_box()
{
    $cmb_options = new_cmb2_box(array(
        'id' => 'upshotmedia_option_metabox',
        'title' => 'Theme Settings',
        'object_types' => array('options-page'),
        'option_key' => 'upshotmedia_options'
    ));
    // $general_group = $cmb_options->add_field(array(
    //     'id' => 'upshotmedia_general_group',
    //     'type' => 'group',
    //     'repeatable' => false,
    //     'options' => array(
    //         'group_title' => 'Public Setting',
    //         'closed' => false,
    //     ),
    // ));

    // $cmb_options->add_group_field($general_group, array(
    //     'name' => 'Text',
    //     'id' => 'Main_title_Text',
    //     'type' => 'text',
    // ));
    //slider sections
    $upshotmedia_slider = $cmb_options->add_field(array(
        'id' => 'main_slider',
        'name' => 'Main Slider',
        'type' => 'group',
        'repeatable' => true,
        'option' => array(
            'group_title' => 'Main Slider {#}',
            'Closed' => 'true',
        )
    ));
    $cmb_options->add_group_field($upshotmedia_slider, array(
        'id' => 'slider_image',
        'name' => 'Slider Image',
        'type' => 'file',
    ));
    $cmb_options->add_group_field($upshotmedia_slider, array(
        'id' => 'slider_title',
        'name' => 'Slider title',
        'type' => 'text',
    ));
    $cmb_options->add_group_field($upshotmedia_slider, array(
        'id' => 'slider_title_color',
        'name' => 'Slider title color',
        'type' => 'colorpicker',
    ));
    $cmb_options->add_group_field($upshotmedia_slider, array(
        'id' => 'slider_desc',
        'name' => 'Slider Description',
        'type' => 'textarea',
    ));
    $cmb_options->add_group_field($upshotmedia_slider, array(
        'id' => 'slider_desc_color',
        'name' => 'Slider Description color',
        'type' => 'colorpicker',
    ));
    $cmb_options->add_group_field($upshotmedia_slider, array(
        'id' => 'slider_button_name',
        'name' => 'Slider button name',
        'type' => 'text',
    ));
    $cmb_options->add_group_field($upshotmedia_slider, array(
        'id' => 'slider_button_name_color',
        'name' => 'Slider button name color',
        'type' => 'colorpicker',
    ));
    $cmb_options->add_group_field($upshotmedia_slider, array(
        'id' => 'border_color',
        'name' => 'Border color',
        'type' => 'colorpicker',
    ));
    $cmb_options->add_group_field($upshotmedia_slider, array(
        'id' => 'slider_button_url',
        'name' => 'slider Button url',
        'type' => 'text_url',
        'desc' => 'write the buttun title'
    ));
    //services sections
    $upshotmedia_servicse = $cmb_options->add_field(array(
        'id' => 'upshotmedia_services',
        'name' => 'Services Section',
        'type' => 'group',
        'repeatable' => false,
        'option' => array(
            'group title' => 'Services Section',
            'closed' => false
        )
    ));
    $cmb_options->add_group_field($upshotmedia_servicse, array(
        'id' => 'services_subtitle',
        'name' => 'Services Subtitle',
        'type' => 'text',
        'desc' => 'Write the Subtitle'
    ));
    $cmb_options->add_group_field($upshotmedia_servicse, array(
        'id' => 'services_title',
        'name' => 'Services Title',
        'type' => 'text',
        'desc' => 'write the services title'
    ));
    $cmb_options->add_group_field($upshotmedia_servicse, array(
        'id' => 'services_button_text',
        'name' => 'Services Button text',
        'type' => 'text',
        'desc' => 'write the button title'
    ));
    $cmb_options->add_group_field($upshotmedia_servicse, array(
        'id' => 'services_button_url',
        'name' => 'Services Button url',
        'type' => 'text_url',
        'desc' => 'write the buttun title'
    ));
    //services Item
    $upshotmedia_services_item = $cmb_options->add_field(array(
        'id' => 'services_item',
        'name' => 'Services Item',
        'type' => 'group',
        'repeatable' => true,
        'option' => array(
            'group_title' => 'Services Section {#}',
            'closed' => false
        ),
    ));
    $cmb_options->add_group_field($upshotmedia_services_item, array(
        'id' => 'services_icon',
        'name' => 'Services Icon',
        'type' => 'text',
        'desc' => 'Write the icon name'
    ));
    $cmb_options->add_group_field($upshotmedia_services_item, array(
        'id' => 'item_title',
        'name' => 'item Title',
        'type' => 'text',
        'desc' => 'Write the Title name'
    ));
    $cmb_options->add_group_field($upshotmedia_services_item, array(
        'id' => 'item_text',
        'name' => 'item Text Area',
        'type' => 'textarea',
        'desc' => 'Write the Text name'
    ));
    $cmb_options->add_group_field($upshotmedia_services_item, array(
        'id' => 'right_line',
        'name' => 'right_line_class',
        'type' => 'checkbox',
        'desc' => 'add right line to the servicesItem'
    ));
    $cmb_options->add_group_field($upshotmedia_services_item, array(
        'id' => 'bottom_line',
        'name' => 'bottom_line_class',
        'type' => 'checkbox',
        'desc' => 'add bottom line to the servicesItem'
    ));
    //alert-section
    $upshotmedia_Alert_section = $cmb_options->add_field(array(
        'id' => 'Alert_section',
        'name' => 'Alert Section',
        'type' => 'group',
        'repeatable' => false,
        'options' => array(
            'group_title' => 'Alert Section',
            'closed' => false
        )
    ));
    $cmb_options->add_group_field($upshotmedia_Alert_section, array(
        'id' => 'Alert_section_content',
        'name' => 'Alert section content',
        'type' => 'text',
        'desc' => 'Write the Alert content'
    ));
    //about us section
    $upshotmedia_aboutus_section = $cmb_options->add_field(array(
        'id' => 'Aboutus_section',
        'name' => 'About us',
        'type' => 'group',
        'repeatable' => false,
        'options' => array(
            'group_title' => 'About Us Section',
            'closed' => false
        )
    ));
    $cmb_options->add_group_field($upshotmedia_aboutus_section, array(
        'id' => 'aboutus_title',
        'name' => 'About Us Title',
        'type' => 'text',
        'desc' => 'Write the title'
    ));
    $cmb_options->add_group_field($upshotmedia_aboutus_section, array(
        'id' => 'aboutus_content',
        'name' => 'About Us content',
        'type' => 'textarea',
        'desc' => "write Content Of the About Us"
    ));
    $cmb_options->add_group_field($upshotmedia_aboutus_section, array(
        'id' => 'ab_button_text',
        'name' => ' about us Button text',
        'type' => 'text',
        'desc' => 'Write the botton text'
    ));
    $cmb_options->add_group_field($upshotmedia_aboutus_section, array(
        'id' => 'ab_button_url',
        'name' => 'About Us button Text url',
        'type' => 'text_url'
    ));
    //section content 1
    $upshotmedia_section_content_one = $cmb_options->add_field(array(
        'id' => 'section_content_one',
        'name' => 'section Content one',
        'type' => 'group',
        'repeatable' => false,
        'options' => array(
            'group_title' => 'Section Content One',
            'closed' => false
        )
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_one, array(
        'id' => 'title_content_one',
        'name' => 'Title Content One',
        'type' => 'text',
        'desc' => 'ADD Title of the section Content'
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_one, array(
        'id' => 'Desc_content_one',
        'name' => 'Description Of the content one',
        'type' => 'textarea',
        'desc' => 'write the description Content '
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_one, array(
        'id' => 'content_one_button_text',
        'name' => 'content Button text',
        'type' => 'text',
        'desc' => 'Write the botton text'
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_one, array(
        'id' => 'content_one_button_url',
        'name' => 'Contetnt button Text url',
        'type' => 'text_url'
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_one, array(
        'id' => 'content_one_image',
        'name' => 'cotent Image one',
        'type' => 'file',
        'desc' => 'Upload Image'
    ));
    //section content 2
    $upshotmedia_section_content_two = $cmb_options->add_field(array(
        'id' => 'section_content_two',
        'name' => 'section Content two',
        'type' => 'group',
        'repeatable' => false,
        'options' => array(
            'group_title' => 'Section Content two',
            'closed' => false
        )
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_two, array(
        'id' => 'title_content_two',
        'name' => 'Title Content two',
        'type' => 'text',
        'desc' => 'ADD Title of the section Content'
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_two, array(
        'id' => 'Desc_content_two',
        'name' => 'Description Of the content two',
        'type' => 'textarea',
        'desc' => 'write the description Content '
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_two, array(
        'id' => 'content_two_button_text',
        'name' => 'content Button text',
        'type' => 'text',
        'desc' => 'Write the button text'
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_two, array(
        'id' => 'content_two_button_url',
        'name' => 'Contetnt button Text url',
        'type' => 'text_url'
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_two, array(
        'id' => 'content_two_image',
        'name' => 'cotent Image two',
        'type' => 'file',
        'desc' => 'Upload Image'
    ));
    //section content 3
    $upshotmedia_section_content_three = $cmb_options->add_field(array(
        'id' => 'section_content_three',
        'name' => 'section Content three',
        'type' => 'group',
        'repeatable' => false,
        'options' => array(
            'group_title' => 'Section Content three',
            'closed' => false
        )
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_three, array(
        'id' => 'title_content_three',
        'name' => 'Title Content three',
        'type' => 'text',
        'desc' => 'ADD Title of the section Content'
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_three, array(
        'id' => 'Desc_content_three',
        'name' => 'Description Of the content three',
        'type' => 'textarea',
        'desc' => 'write the description Content '
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_three, array(
        'id' => 'content_three_button_text',
        'name' => 'content Button text',
        'type' => 'text',
        'desc' => 'Write the button text'
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_three, array(
        'id' => 'content_three_button_url',
        'name' => 'Contetnt button Text url',
        'type' => 'text_url'
    ));
    $cmb_options->add_group_field($upshotmedia_section_content_three, array(
        'id' => 'content_three_image',
        'name' => 'cotent Image three',
        'type' => 'file',
        'desc' => 'Upload Image'
    ));
    //customer_reviw
    $upshotmedia_background_image = $cmb_options->add_field(array(
        'id' => 'review_background_image',
        'name' => 'Upshot Media Background Image',
        'type' => 'group',
        'repeatable' => false,
        'options' => array(
            'group_title' => 'Review Background Image ',
            'closed' => false
        )
    ));
    $cmb_options->add_group_field($upshotmedia_background_image, array(
        'id' => 'review_background',
        'name' => 'Upshotmedia Review Background Image',
        'type' => 'file',
        'desc' => 'add image for the background'
    ));
    $upshotmedia_review = $cmb_options->add_field(array(
        'id' => 'customer_review',
        'name' => 'Customer Review data',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Customer Review data {#}',
            'cloed' => false,
        )
    ));
    $cmb_options->add_group_field($upshotmedia_review, array(
        'id' => 'customer_img',
        'name' => 'Customer Image',
        'type' => 'file',
        'desc' => 'add Image for the customer profile'
    ));
    $cmb_options->add_group_field($upshotmedia_review, array(
        'id' => 'customer_name',
        'name' => 'customer_name',
        'type' => 'text',
        'desc' => 'add customer name'
    ));
    $cmb_options->add_group_field($upshotmedia_review, array(
        'id' => 'review',
        'name' => 'Review',
        'type' => 'textarea',
        'desc' => 'add customer review'
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
    $cmb_options->add_group_field($footer_group, array(
        'name' => 'CopyRight',
        'id' => 'copyright',
        'type' => 'text',
        'desc' => 'Write the Copyright Text'
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
