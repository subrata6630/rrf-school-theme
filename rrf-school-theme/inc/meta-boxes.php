<?php


function filter_list_item_title_label( $label, $id ) {

  if ( $id == 'students' ) {

    $label = __( 'শিক্ষার্থীর নাম', 'rrf-education-theme' );

  }

  return $label;

}
add_filter( 'ot_list_item_title_label', 'filter_list_item_title_label', 10, 2 );


add_action( 'admin_init', 'ppm_quickstart_custom_meta_boxes' );


function ppm_quickstart_custom_meta_boxes() {


  $special_content_meta_box = array(
    'id'          => 'special_content_meta_box',
    'title'       => __('স্পেশাল সেকশনের তথ‍্য', 'rrf-education-theme'),
    'pages'       => array( 'special-section' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
        array(
            'label' => __('কনটেন্টের ধরণ', 'rrf-education-theme'),
            'id' => 'content_type',
            'type' => 'select',
            'choices' => array(
                array(
                    'value' => 'slideshow',
                    'label' => __('স্লাইডশো', 'rrf-education-theme'),
                ),
                array(
                    'value' => 'carousel',
                    'label' => __('ক‍্যারোসেল', 'rrf-education-theme'),
                ),
                array(
                    'value' => 'parallax',
                    'label' => __('প‍্যারালাক্স কনটেন্ট', 'rrf-education-theme'),
                ),
                array(
                    'value' => 'youtube_video',
                    'label' => __('ইউটিউব ভিডিও', 'rrf-education-theme'),
                ),
                array(
                    'value' => 'google_map',
                    'label' => __('গুগল ম‍্যাপ', 'rrf-education-theme'),
                ),
                array(
                    'value' => 'cta',
                    'label' => __('কল টু একশন', 'rrf-education-theme'),
                ),
                array(
                    'value' => 'features',
                    'label' => __('ফিচার লিস্ট', 'rrf-education-theme'),
                ),
                array(
                    'value' => 'tab',
                    'label' => __('ট‍্যাব', 'rrf-education-theme'),
                ),
                array(
                    'value' => 'accordion',
                    'label' => __('কলাপ্স সেকশন', 'rrf-education-theme'),
                ),               
            ),
        ),
        array(
            'label'       => __('কলাপ্স আইটেমগুলো যুক্ত করুন', 'rrf-education-theme'),
            'id'          => 'accordion_list',
            'type'        => 'list-item',
            'condition' => 'content_type:is(accordion)',
            'settings' => array(
                array(
                    'label' => __('কলাপ্সের কনটেন্ট', 'rrf-education-theme'),
                    'id'    => 'content',
                    'type'  => 'textarea',
                )
            ),
        ), 
        array(
            'label'       => __('ট‍্যাব আইটেমগুলো যুক্ত করুন', 'rrf-education-theme'),
            'id'          => 'tabs_list',
            'type'        => 'list-item',
            'condition' => 'content_type:is(tab)',
            'settings' => array(
                array(
                    'label' => __('ট‍্যাবের কনটেন্ট', 'rrf-education-theme'),
                    'id'    => 'content',
                    'type'  => 'textarea',
                )
            ),
        ),        
        array(
            'label'       => __('ম‍্যাপ Latitude', 'rrf-education-theme'),
            'id'          => 'map_lat',
            'type'        => 'text',
            'condition'   => 'content_type:is(google_map)',
        ),       
        array(
            'label'       => __('কল টু একশন টাইটেল', 'rrf-education-theme'),
            'id'          => 'cta_title',
            'type'        => 'text',
            'condition'   => 'content_type:is(cta)',
        ),      
        array(
            'label'       => __('কল টু একশন কনটেন্ট', 'rrf-education-theme'),
            'id'          => 'cta_content',
            'type'        => 'textarea',
            'condition'   => 'content_type:is(cta)',
        ),      
        array(
            'label'       => __('কল টু একশন লিংক টেক্সট', 'rrf-education-theme'),
            'id'          => 'cta_link_text',
            'type'        => 'text',
            'condition'   => 'content_type:is(cta)',
        ),     
        array(
            'label'       => __('কল টু একশন লিংক', 'rrf-education-theme'),
            'id'          => 'cta_link',
            'type'        => 'text',
            'condition'   => 'content_type:is(cta)',
        ), 
        array(
            'label'       => __('লিংক নতুন ট‍্যাবে ওপেন হবে', 'rrf-education-theme'),
            'id'          => 'link_behavour',
            'type'        => 'select',
            'std'        => '_self',
            'choices'        => array(
                array(
                    'value' => '_self',
                    'label' => __('না', 'rrf-education-theme'),
                ),
                array(
                    'value' => '_blank',
                    'label' => __('হ‍্যা', 'rrf-education-theme'),
                )
            ),
            'condition'   => 'content_type:is(cta)',
        ),        
        array(
            'label'       => __('ম‍্যাপ Longititude', 'rrf-education-theme'),
            'id'          => 'map_long',
            'type'        => 'text',
            'condition'   => 'content_type:is(google_map)',
        ), 
        array(
            'label'       => __('ম‍্যাপ জুম লেভেল', 'rrf-education-theme'),
            'id'          => 'map_zoom',
            'type'        => 'numeric-slider',
            'std'        => '16',
            'min_max_step'=> '8,20,1',
            'condition'   => 'content_type:is(google_map)',
        ), 
        array(
            'label'       => __('ম‍্যাপ আইকন', 'rrf-education-theme'),
            'id'          => 'map_icon',
            'type'        => 'upload',
            'condition'   => 'content_type:is(google_map)',
        ), 
        array(
            'label'       => __('ম‍্যাপের হাইট', 'rrf-education-theme'),
            'id'          => 'map_height',
            'type'        => 'numeric-slider',
            'std'        => '400',
            'min_max_step'=> '100,600,50',
            'condition'   => 'content_type:is(google_map)',
        ),        
        array(
            'label'       => __('ইউটিউব ভিডিও আইডি', 'rrf-education-theme'),
            'id'          => 'youtube_video_id',
            'type'        => 'text',
            'condition'   => 'content_type:is(youtube_video)',
        ), 
        array(
            'label'       => __('প‍্যারালাক্স কনটেন্ট', 'rrf-education-theme'),
            'id'          => 'parallax_content',
            'type'        => 'textarea',
            'condition'   => 'content_type:is(parallax)',
        ), 
        array(
            'label'       => __('প‍্যারালাক্স ব‍্যাকগ্রাউন্ড', 'rrf-education-theme'),
            'id'          => 'parallax_bg',
            'type'        => 'upload',
            'condition'   => 'content_type:is(parallax)',
        ), 
        array(
            'label'       => __('প‍্যারালাক্স সেকশনের হাইট', 'rrf-education-theme'),
            'id'          => 'parallax_height',
            'type'        => 'numeric-slider',
            'std'        => '400',
            'min_max_step'=> '100,600,50',
            'condition'   => 'content_type:is(parallax)',
        ),        
        array(
            'label'       => __('স্লাইড শো এর জন‍্য ছবি আপলোড করুন', 'rrf-education-theme'),
            'id'          => 'slideshow_images',
            'type'        => 'gallery',
            'condition' => 'content_type:is(slideshow)',
        ),
        array(
            'label'       => __('স্লাইড শো এর হাইট', 'rrf-education-theme'),
            'id'          => 'slideshow_height',
            'type'        => 'numeric-slider',
            'std'        => '400',
            'min_max_step'=> '100,600,50',
            'condition'   => 'content_type:is(slideshow)',
        ),
        array(
            'label'       => __('স্লাইড শো এর ক‍্যাপশন শো করবে?', 'rrf-education-theme'),
            'id'          => 'slideshow_caption',
            'type'        => 'on-off',
            'std'        => 'on',
            'condition'   => 'content_type:is(slideshow)',
        ),
        array(
            'label'       => __('ক‍্যারোসেল এর জন‍্য আইটেম যুক্ত করুন', 'rrf-education-theme'),
            'id'          => 'carousel_items',
            'type'        => 'gallery',
            'condition' => 'content_type:is(carousel)',
        ),
        array(
            'label'       => __('ক‍্যারোসেল ইমেজ এর হাইট', 'rrf-education-theme'),
            'id'          => 'carousel_image_height',
            'type'        => 'numeric-slider',
            'std'        => '200',
            'min_max_step'=> '100,600,50',
            'condition'   => 'content_type:is(carousel)',
        ),        
        array(
            'label'       => __('একটি রো তে কতগুলো আইটেম শো করবে?', 'rrf-education-theme'),
            'id'          => 'carousel_items_count',
            'type'        => 'numeric-slider',
            'std'        => '4',
            'min_max_step'=> '2,8,1',
            'condition' => 'content_type:is(carousel)',
        ),
        array(
            'label'       => __('ক‍্যারোসেল অটোপ্লে হবে?', 'rrf-education-theme'),
            'id'          => 'carousel_autoplay',
            'type'        => 'on-off',
            'std'        => 'on',
            'condition'   => 'content_type:is(carousel)',
        ), 
        array(
            'label'       => __('ফিচার কলাম', 'rrf-education-theme'),
            'id'          => 'feature_columns',
            'type'        => 'numeric-slider',
            'std'        => '3',
            'min_max_step'=> '2,6,1',
            'condition'   => 'content_type:is(features)',
        ),         
        array(
            'label'       => __('ফিচার আইটেমগুলো যুক্ত করুন', 'rrf-education-theme'),
            'id'          => 'feature_list',
            'type'        => 'list-item',
            'condition' => 'content_type:is(features)',
            'settings' => array(
                array(
                    'label' => __('আইকন কোড', 'rrf-education-theme'),
                    'id'    => 'icon_code',
                    'type'  => 'text',
                ),
                array(
                    'label' => __('কনটেন্ট', 'rrf-education-theme'),
                    'id'    => 'content',
                    'type'  => 'textarea',
                )
            ),
        ),         
    )
  );
  ot_register_meta_box( $special_content_meta_box );

  $result_meta_box = array(
    'id'          => 'result_meta_box',
    'title'       => __('রেজাল্টের তথ‍্য', 'rrf-education-theme'),
    'pages'       => array( 'result' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('রেজাল্টের ধরন', 'rrf-education-theme'),
        'id'          => 'result_type',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'file_upload',
                'label' => __('ফাইল আপলোড', 'rrf-education-theme'),
            ),
            array(
                'value' => 'result_entry',
                'label' => __('শিক্ষার্থী অনুযায়ী রেজাল্ট', 'rrf-education-theme'),
            )
        )
      ),        
      array(
        'label'       => __('রেজাল্টের ফাইল আপলোড করুন', 'rrf-education-theme'),
        'id'          => 'upload_result',
        'type'        => 'upload',
        'condition' => 'result_type:is(file_upload)',
      ),        
      array(
        'label'       => __('মোট নম্বর টেক্সট', 'rrf-education-theme'),
        'id'          => 'total_no_text',
        'type'        => 'text',
        'std'        => __('মোট নম্বর', 'rrf-education-theme'),
        'condition' => 'result_type:is(result_entry)',
      ),      
      array(
        'label'       => __('প্রাপ্ত নম্বর টেক্সট', 'rrf-education-theme'),
        'id'          => 'total_get_no_text',
        'type'        => 'text',
        'std'        => __('প্রাপ্ত নম্বর', 'rrf-education-theme'),
        'condition' => 'result_type:is(result_entry)',
      ),        
      array(
        'label'       => __('মোট নম্বর', 'rrf-education-theme'),
        'id'          => 'total_no',
        'type'        => 'text',
        'std'        => __('১০০', 'rrf-education-theme'),
        'condition' => 'result_type:is(result_entry)',
      ),
      array(
        'label'       => __('শিক্ষার্থীর রেজাল্ট যুক্ত করুন', 'rrf-education-theme'),
        'id'          => 'student_results',
        'type'        => 'list-item',
        'settings'        => array(
            array(
                'label' => __('শিক্ষার্থীর শাখা', 'rrf-education-theme'),
                'id' => 'division',
                'type' => 'select',
                'choices' => array(
                    array(
                        'value' => __('ক', 'rrf-education-theme'),
                        'label' => __('ক - শাখা', 'rrf-education-theme'),
                    ),
                    array(
                        'value' => __('খ', 'rrf-education-theme'),
                        'label' => __('খ - শাখা', 'rrf-education-theme'),
                    ),
                    array(
                        'value' => __('গ', 'rrf-education-theme'),
                        'label' => __('গ - শাখা', 'rrf-education-theme'),
                    ),
                    array(
                        'value' => __('ঘ', 'rrf-education-theme'),
                        'label' => __('ঘ - শাখা', 'rrf-education-theme'),
                    )
                )                
            ),
            array(
                'label' => __('শিক্ষার্থীর রোল', 'rrf-education-theme'),
                'id' => 'roll',
                'type' => 'text',
            ),
            array(
                'label' => __('শিক্ষার্থীর প্রাপ্ত নম্বর', 'rrf-education-theme'),
                'id' => 'getno',
                'type' => 'text',
            )
        ),  
        'condition' => 'result_type:is(result_entry)',
      ),        
    )
  );
  ot_register_meta_box( $result_meta_box );
    
  $prostudent_meta_box = array(
    'id'          => 'prostudent_meta_box',
    'title'       => __('কৃতি শিক্ষার্থীর তথ‍্য', 'rrf-education-theme'),
    'pages'       => array( 'prostudent' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('তথ‍্য', 'rrf-education-theme'),
        'id'          => 'prostudent_why',
        'type'        => 'text',
      ),       
    )
  );
  ot_register_meta_box( $prostudent_meta_box );

  $attendance_meta_box = array(
    'id'          => 'attendance_meta_box',
    'title'       => __('হাজিরার তথ‍্য', 'rrf-education-theme'),
    'pages'       => array( 'attendance' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('মোট শিক্ষার্থীর সংখ‍্যা', 'rrf-education-theme'),
        'id'          => 'total_student',
        'type'        => 'text',
      ),
      array(
        'label'       => __('আজ উপস্থিত শিক্ষার্থীর সংখ‍্যা', 'rrf-education-theme'),
        'id'          => 'present_student',
        'type'        => 'text',
      ),
      array(
        'label'       => __('আজ অনুপস্থিত শিক্ষার্থীর সংখ‍্যা', 'rrf-education-theme'),
        'id'          => 'absent_student',
        'type'        => 'text',
      ),
      array(
        'label'       => __('মোট শিক্ষকের সংখ‍্যা', 'rrf-education-theme'),
        'id'          => 'total_teacher',
        'type'        => 'text',
      ),
      array(
        'label'       => __('আজ উপস্থিত শিক্ষকের সংখ‍্যা', 'rrf-education-theme'),
        'id'          => 'present_teacher',
        'type'        => 'text',
      ),
      array(
        'label'       => __('আজ ছুটিতে থাকা শিক্ষকের সংখ‍্যা', 'rrf-education-theme'),
        'id'          => 'absent_teacher',
        'type'        => 'text',
      ), 
      array(
        'label'       => __('মোট কর্মচারীর সংখ‍্যা', 'rrf-education-theme'),
        'id'          => 'total_employee',
        'type'        => 'text',
      ),
      array(
        'label'       => __('আজ উপস্থিত কর্মচারীর সংখ‍্যা', 'rrf-education-theme'),
        'id'          => 'present_employee',
        'type'        => 'text',
      ),
      array(
        'label'       => __('আজ ছুটিতে থাকা কর্মচারীর সংখ‍্যা', 'rrf-education-theme'),
        'id'          => 'absent_employee',
        'type'        => 'text',
      ),        
    )
  );
  ot_register_meta_box( $attendance_meta_box );

  $employee_meta_box = array(
    'id'          => 'employee_meta_box',
    'title'       => __('কর্মচারীর তথ‍্য', 'rrf-education-theme'),
    'pages'       => array( 'employee' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('পদবী', 'rrf-education-theme'),
        'id'          => 'employee_designation',
        'type'        => 'text',
      ),
      array(
        'label'       => __('যোগদানের তারিখ', 'rrf-education-theme'),
        'id'          => 'employee_date',
        'type'        => 'text',
      ),        
    )
  );
  ot_register_meta_box( $employee_meta_box );

  $photogallery_meta_box = array(
    'id'          => 'photogallery_meta_box',
    'title'       => __('ফটোগ‍্যালারি', 'rrf-education-theme'),
    'pages'       => array( 'photogallery' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('ছবি আপলোড করুন', 'rrf-education-theme'),
        'id'          => 'gallery_images',
        'type'        => 'gallery',
      ),        
    )
  );
  ot_register_meta_box( $photogallery_meta_box );

  $routine_meta_box = array(
    'id'          => 'routine_meta_box',
    'title'       => __('রুটিনের তথ‍্য', 'rrf-education-theme'),
    'pages'       => array( 'routine' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('রুটিনের ধরণ', 'rrf-education-theme'),
        'id'          => 'routine_type',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'class',
                'label' => __('ক্লাশ রুটিন', 'rrf-education-theme'),
            ),
            array(
                'value' => 'exam',
                'label' => __('পরীক্ষার রুটিন', 'rrf-education-theme'),
            )
        )
      ),
      array(
        'label'       => __('রুটিন আপলোড করুন', 'rrf-education-theme'),
        'id'          => 'upload_routine',
        'type'        => 'upload',
      ),        
    )
  );
  ot_register_meta_box( $routine_meta_box );

  $student_meta_box = array(
    'id'          => 'student_meta_box',
    'title'       => __('শিক্ষার্থী যুক্ত করুন', 'rrf-education-theme'),
    'pages'       => array( 'student' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('শিক্ষার্থী যুক্ত করুন', 'rrf-education-theme'),
        'id'          => 'students',
        'type'        => 'list-item',
        'settings'        => array(
            array(
                'label' => __('শিক্ষার্থীর শাখা', 'rrf-education-theme'),
                'id' => 'division',
                'type' => 'select',
                'choices' => array(
                    array(
                        'value' => __('ক', 'rrf-education-theme'),
                        'label' => __('ক - শাখা', 'rrf-education-theme'),
                    ),
                    array(
                        'value' => __('খ', 'rrf-education-theme'),
                        'label' => __('খ - শাখা', 'rrf-education-theme'),
                    ),
                    array(
                        'value' => __('গ', 'rrf-education-theme'),
                        'label' => __('গ - শাখা', 'rrf-education-theme'),
                    ),
                    array(
                        'value' => __('ঘ', 'rrf-education-theme'),
                        'label' => __('ঘ - শাখা', 'rrf-education-theme'),
                    )
                )                
            ),
            array(
                'label' => __('শিক্ষার্থীর রোল', 'rrf-education-theme'),
                'id' => 'roll',
                'type' => 'text',
            )
        ),          
      ),
    )
  );
  ot_register_meta_box( $student_meta_box );

  $committee_meta_box = array(
    'id'          => 'committee_meta_box',
    'title'       => __('সদস‍্যের তথ‍্য', 'rrf-education-theme'),
    'pages'       => array( 'committee' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('পদ', 'rrf-education-theme'),
        'id'          => 'committee_designation',
        'type'        => 'text',
      ),
      array(
        'label'       => __('শুরুর তারিখ', 'rrf-education-theme'),
        'id'          => 'committee_startdate',
        'type'        => 'text',
      ),
      array(
        'label'       => __('শেষের তারিখ', 'rrf-education-theme'),
        'id'          => 'committee_enddate',
        'type'        => 'text',
      ),
    )
  );
  ot_register_meta_box( $committee_meta_box );
    
  $vacency_meta_box = array(
    'id'          => 'vacency_meta_box',
    'title'       => __('অন‍্যান‍্য তথ‍্য', 'rrf-education-theme'),
    'pages'       => array( 'vacency' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('শুন‍্যপদের বিষয়', 'rrf-education-theme'),
        'id'          => 'vacency_subject',
        'type'        => 'text',
      ),
      array(
        'label'       => __('শুন‍্যপদ সৃষ্টির তারিখ', 'rrf-education-theme'),
        'id'          => 'vacency_date',
        'type'        => 'text',
      ),
    )
  );
  ot_register_meta_box( $vacency_meta_box );

    
  $enable_teacher_mobile_number = ot_get_option( 'enable_teacher_mobile_number' );
  $enable_teacher_education = ot_get_option( 'enable_teacher_education' );
    
  if($enable_teacher_mobile_number == 'on' && $enable_teacher_education == 'on') {
      $teacher_meta_box = array(
        'id'          => 'teacher_meta_box',
        'title'       => __('শিক্ষকের অন‍্যান‍্য তথ‍্য', 'rrf-education-theme'),
        'pages'       => array( 'teacher' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
          array(
            'label'       => __('শিক্ষকের ধরণ', 'rrf-education-theme'),
            'id'          => 'teacher_type',
            'type'        => 'select',
            'choices'        => array(
                array(
                    'value' => 'current',
                    'label' => __('বর্তমান শিক্ষক', 'rrf-education-theme'),
                ),
                array(
                    'value' => 'archive',
                    'label' => __('প্রাক্তণ শিক্ষক', 'rrf-education-theme'),
                )
            )
          ),
          array(
            'label'       => __('শিক্ষকের পদবী', 'rrf-education-theme'),
            'id'          => 'teacher_designation',
            'type'        => 'text',
          ),
          array(
            'label'       => __('শিক্ষকের শিক্ষাগত যোগ‍্যতা', 'rrf-education-theme'),
            'id'          => 'teacher_edu_qualification',
            'type'        => 'text',
          ),
          array(
            'label'       => __('শিক্ষকের মোবাইল নম্বর', 'rrf-education-theme'),
            'id'          => 'teacher_mobile',
            'type'        => 'text',
          ),            
          array(
            'label'       => __('শিক্ষকের যোগদানের তারিখ', 'rrf-education-theme'),
            'id'          => 'teacher_join_date',
            'type'        => 'text',
          ),
        )
      );
  } elseif($enable_teacher_mobile_number == 'on') {
      $teacher_meta_box = array(
        'id'          => 'teacher_meta_box',
        'title'       => __('শিক্ষকের অন‍্যান‍্য তথ‍্য', 'rrf-education-theme'),
        'pages'       => array( 'teacher' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
          array(
            'label'       => __('শিক্ষকের ধরণ', 'rrf-education-theme'),
            'id'          => 'teacher_type',
            'type'        => 'select',
            'choices'        => array(
                array(
                    'value' => 'current',
                    'label' => __('বর্তমান শিক্ষক', 'rrf-education-theme'),
                ),
                array(
                    'value' => 'archive',
                    'label' => __('প্রাক্তণ শিক্ষক', 'rrf-education-theme'),
                )
            )
          ),
          array(
            'label'       => __('শিক্ষকের পদবী', 'rrf-education-theme'),
            'id'          => 'teacher_designation',
            'type'        => 'text',
          ),
          array(
            'label'       => __('শিক্ষকের মোবাইল নম্বর', 'rrf-education-theme'),
            'id'          => 'teacher_mobile',
            'type'        => 'text',
          ),            
          array(
            'label'       => __('শিক্ষকের যোগদানের তারিখ', 'rrf-education-theme'),
            'id'          => 'teacher_join_date',
            'type'        => 'text',
          ),
        )
      );
  } elseif($enable_teacher_education == 'on') {
      $teacher_meta_box = array(
        'id'          => 'teacher_meta_box',
        'title'       => __('শিক্ষকের অন‍্যান‍্য তথ‍্য', 'rrf-education-theme'),
        'pages'       => array( 'teacher' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
          array(
            'label'       => __('শিক্ষকের ধরণ', 'rrf-education-theme'),
            'id'          => 'teacher_type',
            'type'        => 'select',
            'choices'        => array(
                array(
                    'value' => 'current',
                    'label' => __('বর্তমান শিক্ষক', 'rrf-education-theme'),
                ),
                array(
                    'value' => 'archive',
                    'label' => __('প্রাক্তণ শিক্ষক', 'rrf-education-theme'),
                )
            )
          ),
          array(
            'label'       => __('শিক্ষকের পদবী', 'rrf-education-theme'),
            'id'          => 'teacher_designation',
            'type'        => 'text',
          ),
          array(
            'label'       => __('শিক্ষকের শিক্ষাগত যোগ‍্যতা', 'rrf-education-theme'),
            'id'          => 'teacher_edu_qualification',
            'type'        => 'text',
          ),
          array(
            'label'       => __('শিক্ষকের যোগদানের তারিখ', 'rrf-education-theme'),
            'id'          => 'teacher_join_date',
            'type'        => 'text',
          ),
        )
      );
  } else {
      $teacher_meta_box = array(
        'id'          => 'teacher_meta_box',
        'title'       => __('শিক্ষকের অন‍্যান‍্য তথ‍্য', 'rrf-education-theme'),
        'pages'       => array( 'teacher' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
          array(
            'label'       => __('শিক্ষকের ধরণ', 'rrf-education-theme'),
            'id'          => 'teacher_type',
            'type'        => 'select',
            'choices'        => array(
                array(
                    'value' => 'current',
                    'label' => __('বর্তমান শিক্ষক', 'rrf-education-theme'),
                ),
                array(
                    'value' => 'archive',
                    'label' => __('প্রাক্তণ শিক্ষক', 'rrf-education-theme'),
                )
            )
          ),
          array(
            'label'       => __('শিক্ষকের পদবী', 'rrf-education-theme'),
            'id'          => 'teacher_designation',
            'type'        => 'text',
          ),
          array(
            'label'       => __('শিক্ষকের যোগদানের তারিখ', 'rrf-education-theme'),
            'id'          => 'teacher_join_date',
            'type'        => 'text',
          ),
        )
      );  
  }   
    

  ot_register_meta_box( $teacher_meta_box );

  $page_meta_box = array(
    'id'          => 'page_meta_box',
    'title'       => __('পাতার অন‍্যান‍্য তথ‍্য', 'rrf-education-theme'),
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('পাতার ধরণ', 'rrf-education-theme'),
        'id'          => 'page_type',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'general',
                'label' => __('সাধারণ পাতা', 'rrf-education-theme'),
            ),
            array(
                'value' => 'child_page_list',
                'label' => __('সাব পেজের তালিকা', 'rrf-education-theme'),
            ),
            array(
                'value' => 'teachers_list',
                'label' => __('শিক্ষকদের তালিকা', 'rrf-education-theme'),
            ),
            array(
                'value' => 'vacency_list',
                'label' => __('শুন‍্যপদের তালিকা', 'rrf-education-theme'),
            ),
            array(
                'value' => 'employee_list',
                'label' => __('৩য় ও ৪র্থশ্রেনীর কর্মচারীদের তালিকা', 'rrf-education-theme'),
            ),
            array(
                'value' => 'student_list',
                'label' => __('শিক্ষার্থীদের তালিকা', 'rrf-education-theme'),
            ),
            array(
                'value' => 'calendar',
                'label' => __('একাডেমিক ক‍্যালেন্ডার', 'rrf-education-theme'),
            ),
            array(
                'value' => 'noticeboard',
                'label' => __('নোটিশবোর্ড', 'rrf-education-theme'),
            ),
            array(
                'value' => 'routine',
                'label' => __('রুটিন', 'rrf-education-theme'),
            ),
            array(
                'value' => 'result',
                'label' => __('পরীক্ষার ফলাফল', 'rrf-education-theme'),
            ),
            array(
                'value' => 'guardins_panel',
                'label' => __('অভিভাবক কমিটির তালিকা', 'rrf-education-theme'),
            ),
            array(
                'value' => 'photogallery',
                'label' => __('ফটোগ‍্যালারি', 'rrf-education-theme'),
            )
        )
      ),
      array(
        'label'       => __('থিম কালার', 'rrf-education-theme'),
        'id'          => 'subpage_box_theme',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => '1',
                'label' => __('থিম ১', 'rrf-education-theme'),
            ),
            array(
                'value' => '2',
                'label' => __('থিম ২', 'rrf-education-theme'),
            ),
            array(
                'value' => '3',
                'label' => __('থিম ৩', 'rrf-education-theme'),
            ),
            array(
                'value' => '4',
                'label' => __('থিম ৪', 'rrf-education-theme'),
            ),
            array(
                'value' => '5',
                'label' => __('থিম ৫', 'rrf-education-theme'),
            ),
            array(
                'value' => '6',
                'label' => __('থিম ৬', 'rrf-education-theme'),
            ),
            array(
                'value' => '7',
                'label' => __('থিম ৭', 'rrf-education-theme'),
            )
        ),
        'condition' => 'page_type:is(child_page_list)',
      ),
      array(
        'label'       => __('যে শিক্ষকদের তালিকা দেখাবে', 'rrf-education-theme'),
        'id'          => 'teacher_list_cat',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'current',
                'label' => __('বর্তমান শিক্ষকদের তালিকা', 'rrf-education-theme'),
            ),
            array(
                'value' => 'archive',
                'label' => __('প্রাক্তণ শিক্ষকদের তালিকা', 'rrf-education-theme'),
            )
        ),
        'condition' => 'page_type:is(teachers_list)',
      ),
      array(
        'label'       => __('যে শিক্ষার্থীদের তালিকা দেখাবে', 'rrf-education-theme'),
        'id'          => 'student_list_cat',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'all',
                'label' => __('সকল শিক্ষার্থীদের তালিকা', 'rrf-education-theme'),
            ),
            array(
                'value' => 'specific',
                'label' => __('নির্দিষ্ট শিক্ষার্থীদের তালিকা', 'rrf-education-theme'),
            ),
            array(
                'value' => 'pro',
                'label' => __('কৃতি শিক্ষার্থীদের তালিকা', 'rrf-education-theme'),
            )
        ),
        'condition' => 'page_type:is(student_list)',
      ),
      array(
        'label'       => __('যে শিক্ষার্থীদের তালিকা দেখাবে', 'rrf-education-theme'),
        'id'          => 'specific_students_id',
        'type'        => 'custom-post-type-select',
        'post_type'   => 'student',
        'condition' => 'student_list_cat:is(specific)',
      ), 
      array(
        'label'       => __('শিক্ষার্থী তালিকার কলাম', 'rrf-education-theme'),
        'id'          => 'student_list_column',
        'type'        => 'select',
        'std'        => '4',
        'choices'        => array(
            array(
                'value' => '1',
                'label' => __('১ কলাম', 'rrf-education-theme'),
            ),
            array(
                'value' => '2',
                'label' => __('২ কলাম', 'rrf-education-theme'),
            ),
            array(
                'value' => '3',
                'label' => __('৩ কলাম', 'rrf-education-theme'),
            ),
            array(
                'value' => '4',
                'label' => __('৪ কলাম', 'rrf-education-theme'),
            ),
        ),
        'condition' => 'page_type:is(student_list)',
      ),        
      array(
        'label'       => __('রুটিন নির্বাচন করুন', 'rrf-education-theme'),
        'id'          => 'select_routine',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'class',
                'label' => __('ক্লাশ রুটিন', 'rrf-education-theme'),
            ),
            array(
                'value' => 'exam',
                'label' => __('পরীক্ষার রুটিন', 'rrf-education-theme'),
            )
        ),
        'condition' => 'page_type:is(routine)',
      ),
    array(
        'label'       => __('স্পেশাল কনটেন্ট যুক্ত করবেন?', 'rrf-education-theme'),
        'id'          => 'enable_special_content',
        'type'        => 'on-off',
        'std'        => 'off',
    ),        
      array(
        'label'       => __('স্পেশাল কনটেন্ট যুক্ত করুন', 'rrf-education-theme'),
        'id'          => 'page_special_contents',
        'type'        => 'list-item',
        'settings'        => array(
            array(
                'label'       => __('স্পেশাল কনটেন্ট নির্বাচন করুন', 'rrf-education-theme'),
                'id'          => 'special_content_id',
                'type'        => 'custom-post-type-select',
                'post_type'   => 'special-section',
            ),
        ),
        'condition'   => 'enable_special_content:is(on)',
      ),        
        
        
      
    )
  );
  ot_register_meta_box( $page_meta_box );


}