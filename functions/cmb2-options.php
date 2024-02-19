<?php
    add_action('cmb2_admin_init','upshotmedia_register_options_meta_box');
function upshotmedia_register_options_meta_box(){
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
             'closed' => false ,
         ),
     ));
 
     $cmb_options->add_group_field($general_group,array(
         'name' => 'Text',
         'id' => 'Main_title_Text',
         'type' => 'text'
     ));
}

function upshotmedia_get_option( $key = '', $default = false ) {
    if ( function_exists( 'cmb2_get_option' ) ) {
        return cmb2_get_option( 'upshotmedia_options', $key, $default );
    }

    $opts = get_option( 'upshotmedia_options', $default );
    $val = $default;
    if ( 'all' == $key ) {
        $val = $opts;
    } elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
        $val = $opts[ $key ];
    }
    return $val;
}
?>