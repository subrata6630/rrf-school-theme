<?php

function filter_site_background_radio_images( $array, $field_id ) {

if ( $field_id == 'select_background_pattern' ) {
    $array = array(
      array(
        'value'   => '0',
        'label'   => __( 'ডিফল্ট', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_0.png'
      ),
      array(
        'value'   => '1',
        'label'   => __( 'প‍্যাটার্ণ ১', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_1.png'
      ),
      array(
        'value'   => '2',
        'label'   => __( 'প‍্যাটার্ণ ২', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_2.png'
      ),
      array(
        'value'   => '3',
        'label'   => __( 'প‍্যাটার্ণ ৩', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_3.png'
      ),
      array(
        'value'   => '4',
        'label'   => __( 'প‍্যাটার্ণ ৪', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_4.png'
      ),
      array(
        'value'   => '5',
        'label'   => __( 'প‍্যাটার্ণ ৫', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_5.png'
      ),
      array(
        'value'   => '6',
        'label'   => __( 'প‍্যাটার্ণ ৬', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_6.png'
      ),
      array(
        'value'   => '7',
        'label'   => __( 'প‍্যাটার্ণ ৭', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_7.png'
      ),
      array(
        'value'   => '8',
        'label'   => __( 'প‍্যাটার্ণ ৮', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_8.png'
      ),
      array(
        'value'   => '9',
        'label'   => __( 'প‍্যাটার্ণ ৯', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_9.png'
      ),
      array(
        'value'   => '10',
        'label'   => __( 'প‍্যাটার্ণ ১০', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_10.png'
      ),
      array(
        'value'   => '11',
        'label'   => __( 'প‍্যাটার্ণ ১১', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_11.png'
      ),
      array(
        'value'   => '12',
        'label'   => __( 'প‍্যাটার্ণ ১২', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_12.png'
      ),
      array(
        'value'   => '13',
        'label'   => __( 'প‍্যাটার্ণ ১৩', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_13.png'
      ),
      array(
        'value'   => '14',
        'label'   => __( 'প‍্যাটার্ণ ১৪', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_14.png'
      ),
    );
  }  

return $array;
  
}
add_filter( 'ot_radio_images', 'filter_site_background_radio_images', 10, 2 ); 


function filter_site_color_radio_images( $array, $field_id ) {

if ( $field_id == 'select_color_scheme' ) {
    $array = array(
      array(
        'value'   => '1',
        'label'   => __( 'কালার থিম ১', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_1.png'
      ),
      array(
        'value'   => '2',
        'label'   => __( 'কালার থিম ২', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_2.png'
      ),
      array(
        'value'   => '3',
        'label'   => __( 'কালার থিম ৩', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_3.png'
      ),
      array(
        'value'   => '4',
        'label'   => __( 'কালার থিম ৪', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_4.png'
      ),
      array(
        'value'   => '5',
        'label'   => __( 'কালার থিম ৫', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_5.png'
      ),
      array(
        'value'   => '6',
        'label'   => __( 'কালার থিম ৬', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_6.png'
      ),
      array(
        'value'   => '7',
        'label'   => __( 'কালার থিম ৭', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_7.png'
      ),
      array(
        'value'   => '8',
        'label'   => __( 'কালার থিম ৮', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_8.png'
      ),
      array(
        'value'   => '9',
        'label'   => __( 'কালার থিম ৯', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_9.png'
      ),
    );
  }  

return $array;
  
}
add_filter( 'ot_radio_images', 'filter_site_color_radio_images', 10, 2 ); 


function select_footer_style_radio_images( $array, $field_id ) {

if ( $field_id == 'select_footer_style' ) {
    $array = array(
      array(
        'value'   => '1',
        'label'   => __( 'ফুটার থিম ১', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/footers/footer_1.png'
      ),
      array(
        'value'   => '2',
        'label'   => __( 'ফুটার থিম ২', 'rrf-education-theme' ),
        'src'     => OT_URL . '/assets/images/footers/footer_2.png'
      )
    );
  }  

return $array;
  
}
add_filter( 'ot_radio_images', 'select_footer_style_radio_images', 10, 2 ); 




/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'rrf_school_custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function rrf_school_custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'rrf-education-theme' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'rrf-education-theme' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'rrf-education-theme' ) . '</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'general_settings',
        'title'       => __( 'সাধারণ সেটিংস', 'rrf-education-theme' )
      ),
      array(
        'id'          => 'text_changes',
        'title'       => __( 'লেখা পরিবর্তন', 'rrf-education-theme' )
      ),
      array(
        'id'          => 'home_settings',
        'title'       => __( 'প্রথম পাতার সেটিংস', 'rrf-education-theme' )
      ),
      array(
        'id'          => 'list_settings',
        'title'       => __( 'বিভিন্ন তালিকার সেটিংস', 'rrf-education-theme' )
      ),
      array(
        'id'          => 'footer_settings',
        'title'       => __( 'ফুটার সেটিংস', 'rrf-education-theme' )
      ),
      array(
        'id'          => 'color_settings',
        'title'       => __( 'রং এর সেটিংস', 'rrf-education-theme' )
      ),
      array(
        'id'          => 'custom_codes',
        'title'       => __( 'কাস্টম কোড', 'rrf-education-theme' )
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'enable_teacher_mobile_number',
        'label'       => __( 'শিক্ষকের মোবাইল নম্বর দেখাবে?', 'rrf-education-theme' ),
        'type'        => 'on-off',
        'section'     => 'list_settings',
        'std'     => 'off',
      ),
      array(
        'id'          => 'enable_teacher_education',
        'label'       => __( 'শিক্ষকের শিক্ষাগত যোগ‍্যতা দেখাবে?', 'rrf-education-theme' ),
        'type'        => 'on-off',
        'section'     => 'list_settings',
        'std'     => 'off',
      ),
      array(
        'id'          => 'select_footer_style',
        'label'       => __( 'ফুটারের স্টাইল নির্বাচন করুন', 'rrf-education-theme' ),
        'type'        => 'radio-image',
        'section'     => 'footer_settings',
        'std'     => '1',
      ),         
      array(
        'id'          => 'site_logo',
        'label'       => __( 'সাইট লগো', 'rrf-education-theme' ),
        'type'        => 'upload',
        'section'     => 'general_settings'
      ),
      array(
        'label'       => __('মোট মেনু‍্য সাপোর্ট করবে', 'rrf-education-theme' ),
        'id'          => 'menu_support_at_most',
        'type'        => 'numeric-slider',
        'std'        => '7',
        'min_max_step'=> '5,9,1',
        'section'     => 'general_settings'
      ),              
      array(
        'id'          => 'site_layout',
        'label'       => __( 'সাইট লে-আউট', 'rrf-education-theme' ),
        'type'        => 'select',
        'std'        => 'Boxed',
        'choices'        => array(
            array(
                'value' => 'boxed_width',
                'label' => __('বক্স আকারে দেখাবে', 'rrf-education-theme' ),
            ),
            array(
                'value' => 'rrfschoo_fullwidth',
                'label' => __('পুর্ণমাপে দেখাবে', 'rrf-education-theme' ),
            )
        ),          
        'section'     => 'general_settings'
      ),
      array(
        'id'          => 'site_fontt',
        'label'       => __( 'সাইট ফন্ট', 'rrf-education-theme' ),
        'type'        => 'select',
        'std'        => 'hind',
        'choices'        => array(
            array(
                'value' => 'hind',
                'label' => __('Hind Siliguri', 'rrf-education-theme' ),
            ),
            array(
                'value' => 'solaimanlipi',
                'label' => __('Solaiman Lipi', 'rrf-education-theme' ),
            )
        ),          
        'section'     => 'general_settings'
      ),        
      array(
        'id'          => 'slider_type',
        'label'       => __( 'হোমপেজের ইমেজ নাকি স্লাইড?', 'rrf-education-theme' ),
        'type'        => 'select',
        'std'        => 'single_image',
        'choices'        => array(
            array(
                'value' => 'single_image',
                'label' => __('একটি ইমেজ', 'rrf-education-theme' ),
            ),
            array(
                'value' => 'slideshow',
                'label' => __('স্লাইডশো', 'rrf-education-theme' ),
            )
        ),          
        'section'     => 'home_settings'
      ),
      array(
        'id'          => 'upload_slider_image',
        'label'       => __( 'স্লাইডার ইমেজ আপলোড করুন', 'rrf-education-theme' ),
        'desc'       => __( 'স্লাইডার ইমেজ এর সাইজ হওয়া উচিত: 1140px by 430px', 'rrf-education-theme' ),
        'type'        => 'upload',
        'section'     => 'home_settings',
        'std'     => 'http://placehold.it/1140x430',
        'condition' => 'slider_type:is(single_image)',
      ), 
      array(
        'id'          => 'upload_slider_images',
        'label'       => __( 'স্লাইডার ইমেজগুলো আপলোড করুন', 'rrf-education-theme' ),
        'desc'       => __( 'স্লাইডার ইমেজগুলোর সাইজ হওয়া উচিত: 1140px by 430px', 'rrf-education-theme' ),
        'type'        => 'gallery',
        'section'     => 'home_settings',
        'condition' => 'slider_type:is(slideshow)',
      ),        
      array(
        'id'          => 'pattern_type',
        'label'       => __( 'প‍্যাটার্ণের ধরন', 'rrf-education-theme' ),
        'type'        => 'select',
        'std'        => 'predefined',
        'choices'        => array(
            array(
                'value' => 'predefined',
                'label' => __('লিস্ট থেকে নির্বাচন করুন', 'rrf-education-theme' ),
            ),
            array(
                'value' => 'owndefined',
                'label' => __('প‍্যাটার্ণ আপলোড করুন', 'rrf-education-theme' ),
            )
        ),          
        'section'     => 'general_settings',
        'condition' => 'site_layout:is(boxed_width)',
      ),
      array(
        'id'          => 'select_background_pattern',
        'label'       => __( 'প‍্যাটার্ণ নির্বাচন করুন', 'rrf-education-theme' ),
        'type'        => 'radio-image',
        'section'     => 'general_settings',
        'std'     => '0',
        'operator'     => 'and',
        'condition' => 'pattern_type:is(predefined),site_layout:is(boxed_width)',
      ),
      array(
        'id'          => 'upload_own_pattern',
        'label'       => __( 'প‍্যাটার্ণ আপলোড করুন', 'rrf-education-theme' ),
        'type'        => 'upload',
        'section'     => 'general_settings',
        'operator'     => 'and',
        'condition' => 'pattern_type:is(owndefined),site_layout:is(boxed_width)',
      ),
      array(
        'id'          => 'pattern_behaviour',
        'label'       => __( 'প‍্যাটার্ণের আচরণ', 'rrf-education-theme' ),
        'type'        => 'select',
        'std'        => 'fixed',
        'choices'        => array(
            array(
                'value' => 'scroll',
                'label' => __('স্ক্রল করবে', 'rrf-education-theme' ),
            ),
            array(
                'value' => 'fixed',
                'label' => __('ফিক্সড হয়ে থাকবে', 'rrf-education-theme' ),
            ),            
        ),          
        'section'     => 'general_settings',
        'condition' => 'site_layout:is(boxed_width)',
      ),        
      array(
        'id'          => 'top_text',
        'label'       => __( 'হেডারের ডান দিকের লেখা', 'rrf-education-theme' ),
        'std'         => __('স্থাপিত: ১৯০০ ইং, EIIN: ০০০০০০', 'rrf-education-theme' ),
        'type'        => 'text',
        'section'     => 'text_changes'
      ),
      array(
        'id'          => 'top_email',
        'label'       => __( 'যোগাযোগের ই-মেইল', 'rrf-education-theme' ),
        'std'         => 'info@rrfinstitute.com',
        'type'        => 'text',
        'section'     => 'text_changes'
      ),
      array(
        'id'          => 'contact_address',
        'label'       => __( 'যোগাযোগের ঠিকানা', 'rrf-education-theme' ),
        'std'         => __('উপজেলা নির্বাহী অফিসের পিছনে, হাইরোড, ভেড়ামারা, কুষ্টিয়া।', 'rrf-education-theme' ),
        'type'        => 'text',
        'section'     => 'text_changes'
      ),
      array(
        'id'          => 'contact_phone',
        'label'       => __( 'যোগাযোগের নম্বর', 'rrf-education-theme' ),
        'std'         => __('010000000000', 'rrf-education-theme' ),
        'type'        => 'text',
        'section'     => 'text_changes'
      ),
      array(
        'id'          => 'copyright_text',
        'label'       => __( 'কপিরাইট নোট', 'rrf-education-theme' ),
        'std'         => __('&copy; ২০১৬, সর্বস্বত্ত সংরক্ষিত। সাইট ডিজাইন: <a href="http://rrfinstitute.com">আর. আর. ফাউন্ডেশন</a>', 'rrf-education-theme' ),
        'type'        => 'text',
        'section'     => 'text_changes'
      ),
      array(
        'id'          => 'color_settings_type',
        'label'       => __( 'কালারের সেটিংস', 'rrf-education-theme' ),
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'predefinied',
                'label' => __('কালার বক্স থেকে নির্বাচন করতে চাই', 'rrf-education-theme' ),
            ),
            array(
                'value' => 'owndefinied',
                'label' => __('নিজেই কালার কাস্টমাইজ করতে চাই', 'rrf-education-theme' ),
            )
        ),          
        'section'     => 'color_settings',
      ),        
      array(
        'id'          => 'select_color_scheme',
        'label'       => __( 'থিমের কালারগ্রুপ নির্বাচন করুন', 'rrf-education-theme' ),
        'type'        => 'radio-image',
        'section'     => 'color_settings',
        'std'         => '1',
        'condition' => 'color_settings_type:is(predefinied)',
      ),        
      array(
        'id'          => 'theme_color_1',
        'label'       => __( 'থিম কালার ১', 'rrf-education-theme' ),
        'std'         => '#1dd2af',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'theme_color_2',
        'label'       => __( 'থিম কালার ২', 'rrf-education-theme' ),
        'std'         => '#2ecc71',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'theme_color_3',
        'label'       => __( 'থিম কালার ৩', 'rrf-education-theme' ),
        'std'         => '#3498db',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'theme_color_4',
        'label'       => __( 'থিম কালার ৪', 'rrf-education-theme' ),
        'std'         => '#9b59b6',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'theme_color_5',
        'label'       => __( 'থিম কালার ৫', 'rrf-education-theme' ),
        'std'         => '#e67e22',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'theme_color_6',
        'label'       => __( 'থিম কালার ৬', 'rrf-education-theme' ),
        'std'         => '#e74c3c',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'theme_color_7',
        'label'       => __( 'থিম কালার ৭', 'rrf-education-theme' ),
        'std'         => '#000000',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'home_wid_color_1',
        'label'       => __( 'প্রথম পাতার বাম দিকের উইজেটের ব‍্যাকগ্রাউন্ড কালার', 'rrf-education-theme' ),
        'std'         => '#1dd2af',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'home_wid_color_2',
        'label'       => __( 'প্রথম পাতার মাঝখানের উইজেটের ব‍্যাকগ্রাউন্ড কালার', 'rrf-education-theme' ),
        'std'         => '#e74c3c',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'home_wid_color_3',
        'label'       => __( 'প্রথম পাতার ডান দিকের উইজেটের ব‍্যাকগ্রাউন্ড কালার', 'rrf-education-theme' ),
        'std'         => '#3498db',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'custom_css',
        'label'       => __( 'কাস্টম সিএসএস', 'rrf-education-theme' ),
        'type'        => 'css',
        'section'     => 'custom_codes',
      ),
      array(
        'id'          => 'custom_js',
        'label'       => __( 'কাস্টম জাভাস্ক্রীপ্ট', 'rrf-education-theme' ),
        'type'        => 'javascript',
        'section'     => 'custom_codes',
      ),
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}