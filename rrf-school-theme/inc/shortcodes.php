<?php 

function attendance_shortcode($atts){
    extract( shortcode_atts( array(
        'id' => '',
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => 1, 'post_type' => 'attendance', 'p' => $id)
        );      
         
    $list = '<div class="attendance-single-item">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $total_student = get_post_meta($idd, 'total_student', true);
        $present_student = get_post_meta($idd, 'present_student', true);
        $absent_student = get_post_meta($idd, 'absent_student', true);
        $total_teacher = get_post_meta($idd, 'total_teacher', true);
        $present_teacher = get_post_meta($idd, 'present_teacher', true);
        $absent_teacher = get_post_meta($idd, 'absent_teacher', true);
        $total_employee = get_post_meta($idd, 'total_employee', true);
        $present_employee = get_post_meta($idd, 'present_employee', true);
        $absent_employee = get_post_meta($idd, 'absent_employee', true);
    
        $student_text = __( 'শিক্ষার্থী', 'rrf-education-theme' );
        $teacher_text = __( 'শিক্ষক', 'rrf-education-theme' );
        $employee_text = __( 'কর্মচারী', 'rrf-education-theme' );
        $total_student_text = __( 'মোট শিক্ষার্থীর সংখ‍্যা', 'rrf-education-theme' );
        $present_student_text = __( 'উপস্থিত শিক্ষার্থীর সংখ‍্যা', 'rrf-education-theme' );
        $absent_student_text = __( 'অনুপস্থিত শিক্ষার্থীর সংখ‍্যা', 'rrf-education-theme' );
        $total_teacher_text = __( 'মোট শিক্ষকের সংখ‍্যা', 'rrf-education-theme' );
        $present_teacher_text = __( 'উপস্থিত শিক্ষকের সংখ‍্যা', 'rrf-education-theme' );
        $absent_teacher_text = __( 'ছুটিতে থাকা শিক্ষকের সংখ‍্যা', 'rrf-education-theme' );
        $total_employee_text = __( 'মোট কর্মচারীর সংখ‍্যা', 'rrf-education-theme' );
        $present_employee_text = __( 'উপস্থিত কর্মচারীর সংখ‍্যা', 'rrf-education-theme' );
        $absent_employee_text = __( 'ছুটিতে থাকা কর্মচারীর সংখ‍্যা', 'rrf-education-theme' );
    
        $list .= '
        <div class="row">
            <div class="col-md-4">
                <div class="single-attendance-column">
                    <h3>'.$student_text.'</h3>
                    <p><span>'.$total_student_text.':</span> '.$total_student.'</p>
                    <p><span>'.$present_student_text.':</span> '.$present_student.'</p>
                    <p><span>'.$absent_student_text.':</span> '.$absent_student.'</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-attendance-column">
                    <h3>'.$teacher_text.'</h3>
                    <p><span>'.$total_teacher_text.':</span> '.$total_teacher.'</p>
                    <p><span>'.$present_teacher_text.':</span> '.$present_teacher.'</p>
                    <p><span>'.$absent_teacher_text.':</span> '.$absent_teacher.'</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-attendance-column">
                    <h3>'.$employee_text.'</h3>
                    <p><span>'.$total_employee_text.':</span> '.$total_employee.'</p>
                    <p><span>'.$present_employee_text.':</span> '.$present_employee.'</p>
                    <p><span>'.$absent_employee_text.':</span> '.$absent_employee.'</p>
                </div>
            </div>
        </div>
        ';        
    endwhile;
    $list.= '</div>';
    wp_reset_query();
    return $list;
}
add_shortcode('attendance', 'attendance_shortcode');  


function calendar_shortcode($atts){
    extract( shortcode_atts( array(
        'id' => 'academic',
    ), $atts) );
     
    $q = new WP_Query( array(
            'posts_per_page' => -1,
            'post_type' => array('post', 'notice', 'routine', 'result', 'attendance'),
        ));      
    
    $month_1 = __( 'জানুয়ারী', 'rrf-education-theme' );
    $month_2 = __( 'ফেব্রুয়ারী', 'rrf-education-theme' );
    $month_3 = __( 'মার্চ', 'rrf-education-theme' );
    $month_4 = __( 'এপ্রিল', 'rrf-education-theme' );
    $month_5 = __( 'মে', 'rrf-education-theme' );
    $month_6 = __( 'জুন', 'rrf-education-theme' );
    $month_7 = __( 'জুলাই', 'rrf-education-theme' );
    $month_8 = __( 'আগস্ট', 'rrf-education-theme' );
    $month_9 = __( 'সেপ্টেম্বর', 'rrf-education-theme' );
    $month_10 = __( 'অক্টোবর', 'rrf-education-theme' );
    $month_11 = __( 'নভেম্বর', 'rrf-education-theme' );
    $month_12 = __( 'ডিসেম্বর', 'rrf-education-theme' );
    $day_short_1 = __( 'রবি', 'rrf-education-theme' );
    $day_short_2 = __( 'সোম', 'rrf-education-theme' );
    $day_short_3 = __( 'মঙ্গল', 'rrf-education-theme' );
    $day_short_4 = __( 'বুধ', 'rrf-education-theme' );
    $day_short_5 = __( 'বৃহস্পতি', 'rrf-education-theme' );
    $day_short_6 = __( 'শুক্র', 'rrf-education-theme' );
    $day_short_7 = __( 'শনি', 'rrf-education-theme' );
    $day_full_1 = __( 'রবিবার', 'rrf-education-theme' );
    $day_full_2 = __( 'সোমবার', 'rrf-education-theme' );
    $day_full_3 = __( 'মঙ্গলবার', 'rrf-education-theme' );
    $day_full_4 = __( 'বুধবার', 'rrf-education-theme' );
    $day_full_5 = __( 'বৃহস্পতিবার', 'rrf-education-theme' );
    $day_full_6 = __( 'শুক্রবার', 'rrf-education-theme' );
    $day_full_7 = __( 'শনিবার', 'rrf-education-theme' );
    $legend_1_text = __( 'খবর', 'rrf-education-theme' );
    $legend_2_text = __( 'নোটিশ', 'rrf-education-theme' );
    $legend_3_text = __( 'রুটিন', 'rrf-education-theme' );
    $legend_4_text = __( 'রেজাল্ট', 'rrf-education-theme' );
    $legend_5_text = __( 'হাজিরা', 'rrf-education-theme' );
    
    $list = '
    <script>
        jQuery(document).ready(function($){
            $("#calendar-'.$id.' a.fc-event").remodal();
            $("#calendar-'.$id.'").fullCalendar({
                header: {
                    left: "prev,next today",
                    center: "title",
                    right: "month,basicWeek,basicDay"
                },
                monthNames: [\''.$month_1.'\', \''.$month_2.'\', \''.$month_3.'\', \''.$month_4.'\', \''.$month_5.'\', \''.$month_6.'\', \''.$month_7.'\', \''.$month_8.'\', \''.$month_9.'\', \''.$month_10.'\', \''.$month_11.'\', \''.$month_12.'\'],
                dayNamesShort : [\''.$day_short_1.'\', \''.$day_short_2.'\', \''.$day_short_3.'\', \''.$day_short_4.'\', \''.$day_short_5.'\', \''.$day_short_6.'\', \''.$day_short_7.'\'],
                dayNames : [\''.$day_full_1.'\', \''.$day_full_2.'\', \''.$day_full_3.'\', \''.$day_full_4.'\', \''.$day_full_5.'\', \''.$day_full_6.'\', \''.$day_full_7.'\'],
                defaultDate: "'.date('Y-m-d').'",
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $result_type = get_post_meta($idd, 'result_type', true);
        $upload_routine = get_post_meta($idd, 'upload_routine', true);
        $upload_result = get_post_meta($idd, 'upload_result', true);
        if($result_type == 'file_upload') {
            $event_link = $upload_result;
        } elseif($upload_routine) {
            $event_link = $upload_routine;
        } else {
            $event_link = '#event-detail-'.$idd.''; 
        }
    
        if(get_post_type() == 'post') {
            $class_name = 'theme-1';
        } elseif(get_post_type() == 'notice') {
            $class_name = 'theme-2';
        } elseif(get_post_type() == 'routine') {
            $class_name = 'theme-3';
        } elseif(get_post_type() == 'result') {
            $class_name = 'theme-4';
        } elseif(get_post_type() == 'attendance') {
            $class_name = 'theme-5';
        } else {
            $class_name = 'default-color';
            
        }
    
        if(get_post_type() == 'attendance') {
            $event_title = __( 'হাজিরার তথ‍্য', 'rrf-education-theme' );
        } else {
            $event_title = get_the_title();
        }
    
        $post_content = get_the_content();
        $list .= '
                    {
                        title: "'.$event_title.'",
                        start: "'.get_the_date('Y-m-d', $idd).'",
                        url: "'.$event_link.'",
                        className: "'.$class_name.'"
                    },
        ';        
    endwhile;
    $list.= ']
            });
        });
    </script>
    <ul class="calendar-legends">
        <li class="legend-color-1">'.$legend_1_text.'</li>
        <li class="legend-color-2">'.$legend_2_text.'</li>
        <li class="legend-color-3">'.$legend_3_text.'</li>
        <li class="legend-color-4">'.$legend_4_text.'</li>
        <li class="legend-color-5">'.$legend_5_text.'</li>
    </ul>
    <div id="calendar-'.$id.'"></div> '.do_shortcode('[all_event_modal]').'';
    wp_reset_query();
    return $list;
}
add_shortcode('calendar', 'calendar_shortcode');  


function all_event_modal_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => '',
    ), $atts) );
     
    $q = new WP_Query( array(
            'posts_per_page' => -1,
            'post_type' => array('post', 'notice', 'routine', 'result', 'attendance'),
        ));      
    $publish_date_text = __( 'প্রকাশের তারিখ', 'rrf-education-theme' );    
    $attendance_text = __( 'হাজিরার তথ‍্য', 'rrf-education-theme' );    
    $attendance_date_text = __( 'হাজিরার তারিখ', 'rrf-education-theme' );    
    $list = '<div class="all-event-modal-list">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $list .= '
            <div class="remodal" data-remodal-id="event-detail-'.$idd.'" role="dialog" aria-labelledby="modal-'.$idd.'-Title" aria-describedby="modal-'.$idd.'-Desc">';
        
        if(get_post_type() == 'attendance') {
        $list .='<h2 id="modal-'.$idd.'-Title">'.$attendance_text.'</h2>
                <p class="publish-date">'.$attendance_date_text.': '.get_the_date('l, F j, Y', $idd).'</p>';
        } else {
        $list .='<h2 id="modal-'.$idd.'-Title">' .do_shortcode( get_the_title() ). '</h2>
                <p class="publish-date">'.$publish_date_text.': '.get_the_date('l, F j, Y', $idd).'</p>';
        }
        $list .='<div class="remodal-content">'.wpautop( $post_content ).'</div>';
        
        if(get_post_type() == 'result') {
            $list .=''.do_shortcode('[results id="'.$idd.'"]').'';
        } elseif(get_post_type() == 'attendance') {
            $list .=''.do_shortcode('[attendance id="'.$idd.'"]').'';
        }
    
        $list .='</div>';        
    endwhile;
    $list.= '</div>';
    wp_reset_query();
    return $list;
}
add_shortcode('all_event_modal', 'all_event_modal_shortcode');  


function special_content_shortcode($atts){
    extract( shortcode_atts( array(
        'id' => '',
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => 1, 'post_type' => 'special-section', 'p' => $id)
        );      
         
    $list = '<div class="special-content-shortcode-wrap" id="special-content-shortcode-'.$id.'">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $content_type= get_post_meta($idd, 'content_type', true); 
        $carousel_items = get_post_meta($idd, 'carousel_items', true); 
        $carousel_items_count = get_post_meta($idd, 'carousel_items_count', true); 
        $carousel_autoplay = get_post_meta($idd, 'carousel_autoplay', true); 
        $carousel_image_height = get_post_meta($idd, 'carousel_image_height', true); 

            if($carousel_autoplay == 'on') {
                $carousel_autoplay_settings = 'true';
            } else {
                $carousel_autoplay_settings = 'false';
            }
        $parallax_content = do_shortcode(get_post_meta($idd, 'parallax_content', true)); 
        $parallax_bg = get_post_meta($idd, 'parallax_bg', true); 
        $parallax_height = get_post_meta($idd, 'parallax_height', true); 
        $map_lat = get_post_meta($idd, 'map_lat', true); 
        $map_long = get_post_meta($idd, 'map_long', true); 
        $map_icon = get_post_meta($idd, 'map_icon', true); 
        $map_height = get_post_meta($idd, 'map_height', true); 
        $map_zoom = get_post_meta($idd, 'map_zoom', true); 
        $youtube_video_id = get_post_meta($idd, 'youtube_video_id', true); 
        $tabs_list = get_post_meta($idd, 'tabs_list', true); 
        $accordion_list = get_post_meta($idd, 'accordion_list', true); 
        $slideshow_images = get_post_meta($idd, 'slideshow_images', true); 
        $slideshow_height = get_post_meta($idd, 'slideshow_height', true); 
        $slideshow_caption = get_post_meta($idd, 'slideshow_caption', true); 
        $feature_columns = get_post_meta($idd, 'feature_columns', true);
        if($feature_columns == '2') {
            $feature_column_code = 'col-sm-6';
        } elseif($feature_columns == '3') {
            $feature_column_code = 'col-md-4';
        } elseif($feature_columns == '4') {
            $feature_column_code = 'col-md-3';
        } elseif($feature_columns == '6') {
            $feature_column_code = 'col-md-2';
        }
        $feature_list = get_post_meta($idd, 'feature_list', true); 
        $cta_title = get_post_meta($idd, 'cta_title', true); 
        $cta_content = get_post_meta($idd, 'cta_content', true); 
        $cta_link_text = get_post_meta($idd, 'cta_link_text', true); 
        $cta_link = get_post_meta($idd, 'cta_link', true); 
        $link_behavour = get_post_meta($idd, 'link_behavour', true); 
        
        $slideshow_bullet_no = 0;
        $tab_no = 0;
        $tab_content_no = 0;
        $accordion_title_id = 0;    
        $accordion_id = 0;    
        $post_content = get_the_content();
    
        $list .= '<div class="special-content-item" id="special-content-item-'.$id.'">';
    
            if($content_type == 'slideshow' && ! empty( $slideshow_images )) {
            $slideshow_images_id = explode( ',', $slideshow_images );  
                $list .='
                <style>
                    #special-content-item-'.$idd.' .special-content-carousel-item {min-height: '.$slideshow_height.'px}
                </style>
                <div id="special-content-carousel-'.$idd.'" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">                
                ';
    
                foreach($slideshow_images_id as $special_slide_image) {
                    $list .='<li data-target="#special-content-carousel-'.$idd.'" data-slide-to="'.$slideshow_bullet_no++.'"></li>';
                }
    
                $list .='
                    </ol>

                    <div class="carousel-inner" role="listbox">                
                ';
                foreach($slideshow_images_id as $special_slide_image) {
                $single_image = wp_get_attachment_image_src( $special_slide_image, 'large' );

                    $list .='
                        <div class="item">
                            <div style="background-image:url('.$single_image[0].')" class="special-content-carousel-item">
                                <div style="display:none"><img src="'.$single_image[0].'" alt=""></div>
                            </div>
                        </div>                    
                    ';   
                }
    
                $list .='
                    </div>

                    <a class="left special-carousel-control" href="#special-content-carousel-'.$idd.'" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right special-carousel-control" href="#special-content-carousel-'.$idd.'" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>                 
                ';
                
            } elseif($content_type == 'carousel' && ! empty( $carousel_items )) { 
                $carousel_items_id = explode( ',', $carousel_items );
                
                $carousel_small_desktop_item_count = $carousel_items_count - 1;
                
                $list .='
                <script>
                    jQuery(document).ready(function($){
                        $("#special-carousel-list-'.$idd.'").owlCarousel({
                            autoplay: '.$carousel_autoplay_settings.',
                            loop: true,
                            nav: true,
                            dots: false,
                            margin: 30,
                            navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                            responsive:{
                                0:{
                                    items: 1
                                },
                                600:{
                                    items: 2
                                },
                                1000:{
                                    items: '.$carousel_small_desktop_item_count.'
                                },
                                1200:{
                                    items: '.$carousel_items_count.'
                                }
                            }                        
                        });
                    });
                </script>  
                <style>
                    #special-carousel-list-'.$idd.' .carousel-image-single {min-height: '.$carousel_image_height.'px}
                </style> 
                <div id="special-carousel-list-'.$idd.'" class="special-carousel-list">
                ';
                
                    foreach($carousel_items_id as $carousel_item) { 
                    $carousel_image_thumb = wp_get_attachment_image_src( $carousel_item, 'medium' );
                    $carousel_image_large = wp_get_attachment_image_src( $carousel_item, 'large' );
                    $carousel_image_meta = wp_prepare_attachment_for_js( $carousel_item );
                    
                    $list .='
                    <div class="single-sp-carousel">
                        <div style="background-image:url('.$carousel_image_thumb[0].')" class="carousel-image-single">
                            <a href="'.$carousel_image_large[0].'"><i class="fa fa-plus"></i></a>
                        </div>
                        <h3>'.$carousel_image_meta['title'].'</h3>
                    </div>                    
                    ';
                        
                    }
                $list .='</div>';
            } elseif($content_type == 'parallax') {
                $list .='
                <style>
                    #parallax-content-area-'.$idd.', #parallax-content-'.$idd.' {min-height:'.$parallax_height.'px;}
                    #parallax-content-table-'.$idd.' {height:'.$parallax_height.'px;}
                    #parallax-bg-'.$idd.' {background-image:url('.$parallax_bg.')}
                </style>
                <div class="parallax-content-area" id="parallax-content-area-'.$idd.'">
                    <div class="parallax-bg" id="parallax-bg-'.$idd.'"></div>
                    <div class="parallax-content" id="parallax-content-'.$idd.'">
                        <div class="parallax-content-table" id="parallax-content-table-'.$idd.'">
                            <div class="parallax-content-tablecell">
                                '.wpautop($parallax_content).'
                            </div>
                        </div>
                    </div>
                </div>                
                ';            
            } elseif($content_type == 'youtube_video') {
                $list .='
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="816" height="459" src="https://www.youtube.com/embed/'.$youtube_video_id.'" frameborder="0" allowfullscreen></iframe>
                </div>                
                ';
            } elseif($content_type == 'google_map') {
                $list .='
                <div style="height:'.$map_height.'px" id="map-canvas"></div>
                <!-- Google Maps API -->
                <script src="https://maps.googleapis.com/maps/api/js"></script>
                <script>
                    function initialize() {
                      var mapOptions = {
                        zoom: '.$map_zoom.',
                        scrollwheel: false,
                        center: new google.maps.LatLng('.$map_lat.', '.$map_long.')
                      };

                      var map = new google.maps.Map(document.getElementById(\'map-canvas\'),
                          mapOptions);


                      var marker = new google.maps.Marker({
                        position: map.getCenter(),
                        icon: \''.$map_icon.'\',
                        map: map
                      });

                    }

                    google.maps.event.addDomListener(window, \'load\', initialize);
                </script>                 
                ';
            } elseif($content_type == 'tab') {
                $list .='
                <div class="special-tab-content" id="special-tab-content-'.$idd.'">
                    <ul class="nav nav-tabs" role="tablist">                
                ';
                foreach($tabs_list as $tab) { 
                    $list .='<li role="presentation"><a href="#single-tab-'.$idd.'-'.$tab_no++.'" role="tab" data-toggle="tab">'.$tab['title'].'</a></li>';   
                }
                
                $list .='
                    </ul>
                    <div class="tab-content">                
                ';
                
                foreach($tabs_list as $tab) { 

                    $list .='
                        <div role="tabpanel" class="tab-pane fade" id="single-tab-'.$idd.'-'.$tab_content_no++.'">
                        '.wpautop($tab['content']).' 
                        </div>                    
                    ';
                }
                $list .='
                    </div>                    
                </div> 
                ';
            } elseif($content_type == 'accordion') {
                $list .='
                <div class="special-collapse-content" id="special-collapse-content-'.$idd.'">
                    <div class="panel-group" id="special-accordion-'.$idd.'" role="tablist" aria-multiselectable="true">                
                ';
                
                foreach($accordion_list as $accordion_item) {
                    
                    $list .='
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="special-ac-headding-'.$idd.'">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#special-accordion-'.$idd.'" href="#special-collapse-'.$idd.'-'.$accordion_title_id++.'" aria-expanded="true">'.$accordion_item['title'].'</a>
                                </h4>
                            </div>
                            <div id="special-collapse-'.$idd.'-'.$accordion_id++.'" class="panel-collapse collapse" role="tabpanel">
                                <div class="panel-body">
                                    '.wpautop($accordion_item['content']).'
                                </div>
                            </div>
                        </div>                    
                    ';
                }
                
                $list .='
                    </div>                   
                </div>                 
                ';
            } elseif($content_type == 'features') {
                $list .='
                <div class="special-features-content" id="special-features-content-'.$idd.'">
                    <div class="row">                
                ';
                
                foreach($feature_list as $feature) {
                    $list .='
                        <div class="'.$feature_column_code.'">
                            <div class="single-feature-item">
                                <div class="feature-icon">
                                    <i class="fa fa-'.$feature['icon_code'].'"></i>
                                </div>
                                
                                <h4>'.$feature['title'].'</h4>
                                
                                '.wpautop($feature['content']).'
                            </div>
                        </div>                    
                    ';
                }
                
                $list .='
                    </div>                   
                </div>                 
                ';                
            } elseif($content_type == 'cta') {
                $list .='
                <div class="special-cta-content" id="special-cta-content-'.$idd.'">
                    <h3>'.$cta_title.'</h3>                 
                    '.wpautop($cta_content).'
                    <a href="'.$cta_link.'" target="'.$link_behavour.'" class="cta-btn">'.$cta_link_text.'</a>
                </div>                 
                ';
            }
    $list .='
        </div>
        ';        
    endwhile;
    $list.= '</div>';
    wp_reset_query();
    return $list;
}
add_shortcode('special_content', 'special_content_shortcode');  



function results_shortcode($atts){
    extract( shortcode_atts( array(
        'id' => '',
    ), $atts) );
    
    $title_text = __( 'শিরোনাম', 'rrf-education-theme' );
    $publish_date_text = __( 'প্রকাশের তারিখ', 'rrf-education-theme' );
    $dl_text = __( 'ডাউনলোড', 'rrf-education-theme' );
    $name_text = __( 'নাম', 'rrf-education-theme' );
    $division_text = __( 'শাখা', 'rrf-education-theme' );
    $roll_text = __( 'রোল', 'rrf-education-theme' );
    $detail_text = __( 'বিস্তারিত দেখুন', 'rrf-education-theme' );
    
    if($id) {
        $q = new WP_Query( array('posts_per_page' => 5, 'post_type' => 'result', 'p' => $id) );
    } else {
        $q = new WP_Query( array('posts_per_page' => -1, 'post_type' => 'result', 'orderby' => 'menu_order','order' => 'ASC') );
        
        $list = '<table class="boxed-table result-list">
            <tr>
                <th class="result-list-name">'.$title_text.'</th>
                <th class="result-list-date">'.$publish_date_text.'</th>
                <th class="result-list-download">'.$dl_text.'</th>   
            </tr>';          
    }
    
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $result_type = get_post_meta($idd, 'result_type', true);
        $upload_result = get_post_meta($idd, 'upload_result', true);
        $total_get_no_text = get_post_meta($idd, 'total_get_no_text', true);
        $total_no_text = get_post_meta($idd, 'total_no_text', true);
        $student_results = get_post_meta($idd, 'student_results', true);
        $total_no = get_post_meta($idd, 'total_no', true);    
    
    if($id) {
        


            $list = '<table class="boxed-table result-list">
                <tr>
                    <th class="resultindv-list-name">'.$name_text.'</th>
                    <th class="resultindv-list-division">'.$division_text.'</th>
                    <th class="resultindv-list-roll">'.$roll_text.'</th>   
                    <th class="resultindv-list-getno">'.$total_get_no_text.'</th>   
                    <th class="resultindv-list-totalno">'.$total_no_text.'</th>   
                </tr>';
        if($student_results) {
            foreach($student_results as $student_result) {
                $list .='
                <tr>
                    <td class="resultindv-list-name">'.$student_result['title'].'</td>
                    <td class="resultindv-list-division">'.$student_result['division'].'</td>
                    <td class="resultindv-list-roll">'.$student_result['roll'].'</td>   
                    <td class="resultindv-list-getno">'.$student_result['getno'].'</td>   
                    <td class="resultindv-list-totalno">'.$total_no.'</td>   
                </tr>                
                ';
            }
        }
        
       

    } else {


            $list .= '
            <tr>
                <td class="result-list-name">'.get_the_title().'</td>
                <td class="result-list-date">'.get_the_date('l, F j, Y', $idd).'</td>';
            if($result_type == 'file_upload') {
                $list .='<td class="result-list-download"><a class="routine-download-btn" href="'.$upload_result.'">'.$dl_text.'</a></td>';
            } else {
                $list .='<td class="result-list-download"><a class="routine-download-btn" href="'.get_permalink().'">'.$detail_text.'</a></td>';
            }
            $list .='</tr>';      
    }
    endwhile; 
    
    $list.= '</table>';
    wp_reset_query();
    return $list;
}
add_shortcode('results', 'results_shortcode');


function routines_shortcode($atts){
    extract( shortcode_atts( array(
        'type' => 'class',
    ), $atts) );
    
    $name_text = __( 'নাম', 'rrf-education-theme' );
    $date_text = __( 'প্রকাশের তারিখ', 'rrf-education-theme' );
    $dl_text = __( 'ডাউনলোড', 'rrf-education-theme' );
     
    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'routine', 'meta_key' => 'routine_type', 'meta_value' => $type, 'orderby' => 'menu_order','order' => 'ASC')
        );      
    $student_link_no = 0;    
    $list = '<table class="boxed-table routine-list">
        <tr>
            <th class="routine-list-name">'.$name_text.'</th>
            <th class="routine-list-date">'.$date_text.'</th>
            <th class="routine-list-download">'.$dl_text.'</th>   
        </tr>';   
    
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $upload_routine = get_post_meta($idd, 'upload_routine', true);
        $list .= '
        <tr>
            <td class="routine-list-name">'.get_the_title().'</td>
            <td class="routine-list-date">'.get_the_date('l, F j, Y', $idd).'</td>
            <td class="routine-list-download"><a class="routine-download-btn" href="'.$upload_routine.'">'.$dl_text.'</a></td>   
        </tr>        
        ';
    endwhile;
    $list.= '</table>';
    wp_reset_query();
    return $list;
}
add_shortcode('routines', 'routines_shortcode');

function students_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => -1,
        'type' => 'all',
        'specific_students_id' => '',
        'student_list_column' => '4',
    ), $atts) );
    
    if($type == 'specific') {
        $q = new WP_Query( array('posts_per_page' => 1, 'post_type' => 'student', 'p' => $specific_students_id) );
    } else {
        $q = new WP_Query( array('posts_per_page' => $count, 'post_type' => 'student', 'orderby' => 'menu_order','order' => 'ASC') );
    }
    
    if($student_list_column == '1'){
        $column_width = 'col-md-12';
    } elseif($student_list_column == '2') {
        $column_width = 'col-md-6';
    } elseif($student_list_column == '3') {
        $column_width = 'col-md-4 col-sm-6';
    } elseif($student_list_column == '4') {
        $column_width = 'col-md-3 col-sm-6';
    }
    
    $division_text = __( 'শাখা', 'rrf-education-theme' );
    $roll_text = __( 'রোল', 'rrf-education-theme' );
    
    $student_link_no = 0;    
    $list = '<div class="student-list">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $student_link_no++;
        $students = get_post_meta($idd, 'students', true);
        $list .= '<h3 class="span-color-'.$student_link_no.'"><span>'.get_the_title().'</span></h3><div class="row">';     
        foreach($students as $student){
            $list .='<div class="'.$column_width.'">
                <div class="single-student-item">
                    <h4>'.$student['title'].'</h4>';
            
                    if($student['division']){
                        $list .='<p>'.$student['division'].' '.$division_text.', '.$roll_text.': '.$student['roll'].'</p>';
                    } else {
                        $list .='<p>'.$roll_text.': '.$student['roll'].'</p>';
                    }
            
            $list .='
                </div>
            </div>';
        }
        $list .='</div>';
    endwhile;
    $list.= '</div>';
    wp_reset_query();
    return $list;
}
add_shortcode('students', 'students_shortcode'); 


function prostudents_shortcode($atts){
	extract( shortcode_atts( array(
		'student_list_column' => '4',
	), $atts) );
    
    if($student_list_column == '1'){
        $column_width = 'col-md-12';
    } elseif($student_list_column == '2') {
        $column_width = 'col-md-6';
    } elseif($student_list_column == '3') {
        $column_width = 'col-md-4 col-sm-6';
    } elseif($student_list_column == '4') {
        $column_width = 'col-md-3 col-sm-6';
    }    
    
    global $paged;
    $posts_per_page = 12;
    $settings = array(
        'showposts' => $posts_per_page, 
        'post_type' => 'prostudent', 
        'paged' => $paged
    );
	
    $post_query = new WP_Query( $settings );	
    
    $total_found_posts = $post_query->found_posts;
    $total_page = ceil($total_found_posts / $posts_per_page);
    
    $nextpage_text = __( 'পরের পাতা', 'rrf-education-theme' );
    $prevpage_text = __( 'আগের পাতা', 'rrf-education-theme' );
    $loading_text = __( 'লোড হচ্ছে ...', 'rrf-education-theme' );
		
	$list = '
    <script>
        jQuery(document).ready(function($){
            $(".pro-student-list").infinitescroll({
                navSelector  	: ".next-page",
                nextSelector 	: ".next-page a",
                itemSelector 	: ".pro-student-list .infinite-prostudent-item",
                loading: {
                    msgText: "<i class=\'icomoon icomoon-spinner icomoon-rotate\'></i> '.$loading_text.'",
                    img: "data:image/gif;base64,R0lGODlhAQABAHAAACH5BAUAAAAALAAAAAABAAEAAAICRAEAOw=="
                },
                maxPage         : '.$total_page.',                
            },function( newElems ) {
                $(".next-page").show();
            });
            
            $(window).unbind(\'.infscr\');

            $(".next-page").click(function(){
                $(".pro-student-list").infinitescroll(\'retrieve\');
                return false;
            });            
        });
    </script>    
    <div class="row pro-student-list">';
	while($post_query->have_posts()) : $post_query->the_post();
        $idd = get_the_ID();
        $prostudent_why = get_post_meta($idd, 'prostudent_why', true);
		$list .= '
        <div class="'.$column_width.' infinite-prostudent-item">
        <div class="single-prostudent-item">
            '.get_the_post_thumbnail($idd, 'thumbnail').'
            <h4>'.get_the_title().'</h4>
            <p>'.$prostudent_why.'</p>
        </div>
        </div>
		';        
	endwhile;
	$list.= '</div>';
    
    $list.='<div class="next-page">'.get_next_posts_link($nextpage_text, $total_page).'</div>';
    
	
	return $list;
}
add_shortcode('prostudents', 'prostudents_shortcode');	

function notices_shortcode($atts){
	extract( shortcode_atts( array(
		'count' => '',
	), $atts) );
    
    global $paged;
    if($count) {
    $posts_per_page = $count;
    } else {
    $posts_per_page = 20;
    }
    $settings = array(
        'showposts' => $posts_per_page, 
        'post_type' => 'notice', 
        'paged' => $paged
    );
    
    $nextpage_text = __( 'পরের পাতা', 'rrf-education-theme' );
    $loading_text = __( 'লোড হচ্ছে ...', 'rrf-education-theme' );
	
    $post_query = new WP_Query( $settings );	
    
    $total_found_posts = $post_query->found_posts;
    $total_page = ceil($total_found_posts / $posts_per_page);

    if($count) {
    $list ='';
    } else {
	$list = '
    <script>
        jQuery(document).ready(function($){
            $(".notices-list").infinitescroll({
                navSelector  	: ".next-page",
                nextSelector 	: ".next-page a",
                itemSelector 	: ".notices-list li",
                loading: {
                    msgText: "<i class=\'icomoon icomoon-spinner icomoon-rotate\'></i> '.$loading_text.'",
                    img: "data:image/gif;base64,R0lGODlhAQABAHAAACH5BAUAAAAALAAAAAABAAEAAAICRAEAOw=="
                },
                maxPage         : '.$total_page.',                
            },function( newElems ) {
                $(".next-page").show();
            });
            
            $(window).unbind(\'.infscr\');

            $(".next-page").click(function(){
                $(".notices-list").infinitescroll(\'retrieve\');
                return false;
            });            
        });
    </script>';
    }
    
    $list .='<ul class="notices-list">';
	while($post_query->have_posts()) : $post_query->the_post();
        $idd = get_the_ID();
		$list .= '
		<li><a href="'.get_permalink().'">'.get_the_title().' <span>'.get_the_date('l, F j, Y', $idd).'</span></a></li>
		';        
	endwhile;
	$list .= '</ul>';
    
    if($count) {}
    else {
    $list .='<div class="next-page">'.get_next_posts_link($nextpage_text, $total_page).'</div>';
    }
    
	
	return $list;
}
add_shortcode('notices', 'notices_shortcode');	


function vacencies_shortcode($atts){
	extract( shortcode_atts( array(
		'type' => 'current',
	), $atts) );
    
    global $paged;
    $posts_per_page = 20;
    $settings = array(
        'showposts' => $posts_per_page, 
        'post_type' => 'vacency', 
        'orderby' => 'menu_order', 
        'order' => 'ASC', 
        'paged' => $paged
    );
	
    $post_query = new WP_Query( $settings );	
    
    $total_found_posts = $post_query->found_posts;
    $total_page = ceil($total_found_posts / $posts_per_page);
    
    $nextpage_text = __( 'পরের পাতা', 'rrf-education-theme' );
    $name_text = __( 'শুন‍্যপদের নাম', 'rrf-education-theme' );
    $subj_text = __( 'শুন‍্যপদের বিষয়', 'rrf-education-theme' );
    $start_text = __( 'পদ সৃষ্টির তারিখ', 'rrf-education-theme' );
    $loading_text = __( 'লোড হচ্ছে ...', 'rrf-education-theme' );
		
	$list = '
    <script>
        jQuery(document).ready(function($){
            $(".vacency-list").infinitescroll({
                navSelector  	: ".next-page",
                nextSelector 	: ".next-page a",
                itemSelector 	: ".vacency-list tr",
                loading: {
                    msgText: "<i class=\'icomoon icomoon-spinner icomoon-rotate\'></i> '.$loading_text.'",
                    img: "data:image/gif;base64,R0lGODlhAQABAHAAACH5BAUAAAAALAAAAAABAAEAAAICRAEAOw=="
                },
                maxPage         : '.$total_page.',                
            },function( newElems ) {
                $(".next-page").show();
            });
            
            $(window).unbind(\'.infscr\');

            $(".next-page").click(function(){
                $(".vacency-list").infinitescroll(\'retrieve\');
                return false;
            });            
        });
    </script>
    
    <table class="boxed-table">
        <tr>
            <th class="vacency-list-name">'.$name_text.'</th>
            <th class="vacency-list-subject">'.$subj_text.'</th>
            <th class="vacency-list-date">'.$start_text.'</th>     
        </tr>    
    </table>
    <table class="boxed-table vacency-list">
    ';
	while($post_query->have_posts()) : $post_query->the_post();
        $idd = get_the_ID();
        $vacency_subject = get_post_meta($idd, 'vacency_subject', true);
        $vacency_date = get_post_meta($idd, 'vacency_date', true);
		$list .= '
        <tr>
            <td class="vacency-list-name">'.get_the_title().'</td>
            <td class="vacency-list-subject">'.$vacency_subject.'</td>
            <td class="vacency-list-date">'.$vacency_date.'</td>
        </tr>
		';        
	endwhile;
	$list.= '</table>';
    
    $list.='<div class="next-page">'.get_next_posts_link($nextpage_text, $total_page).'</div>';
    
	
	return $list;
}
add_shortcode('vacencies', 'vacencies_shortcode');	


function employee_shortcode($atts){
	extract( shortcode_atts( array(
		'type' => 'current',
	), $atts) );
    
    global $paged;
    $posts_per_page = 20;
    $settings = array(
        'showposts' => $posts_per_page, 
        'post_type' => 'employee', 
        'orderby' => 'menu_order', 
        'order' => 'ASC', 
        'paged' => $paged
    );
	
    $post_query = new WP_Query( $settings );	
    
    $total_found_posts = $post_query->found_posts;
    $total_page = ceil($total_found_posts / $posts_per_page);
    
    $nextpage_text = __( 'পরের পাতা', 'rrf-education-theme' );
    $name_text = __( 'কর্মচারীর নাম', 'rrf-education-theme' );
    $desi_text = __( 'পদবী', 'rrf-education-theme' );
    $start_text = __( 'যোগদানের তারিখ', 'rrf-education-theme' );
    $loading_text = __( 'লোড হচ্ছে ...', 'rrf-education-theme' );
		
	$list = '
    <script>
        jQuery(document).ready(function($){
            $(".employee-list").infinitescroll({
                navSelector  	: ".next-page",
                nextSelector 	: ".next-page a",
                itemSelector 	: ".employee-list tr",
                loading: {
                    msgText: "<i class=\'icomoon icomoon-spinner icomoon-rotate\'></i> '.$loading_text.'",
                    img: "data:image/gif;base64,R0lGODlhAQABAHAAACH5BAUAAAAALAAAAAABAAEAAAICRAEAOw=="
                },
                maxPage         : '.$total_page.',                
            },function( newElems ) {
                $(".next-page").show();
            });
            
            $(window).unbind(\'.infscr\');

            $(".next-page").click(function(){
                $(".employee-list").infinitescroll(\'retrieve\');
                return false;
            });            
        });
    </script>
    
    <table class="boxed-table">
        <tr>
            <th class="employee-list-name">'.$name_text.'</th>
            <th class="employee-list-designation">'.$desi_text.'</th>
            <th class="employee-list-date">'.$start_text.'</th>        
        </tr>   
    </table>    
    <table class="boxed-table employee-list">';
	while($post_query->have_posts()) : $post_query->the_post();
        $idd = get_the_ID();
        $employee_designation = get_post_meta($idd, 'employee_designation', true);
        $employee_date = get_post_meta($idd, 'employee_date', true);
		$list .= '
        <tr>
            <td class="employee-list-name">'.get_the_title().'</td>
            <td class="employee-list-designation">'.$employee_designation.'</td>
            <td class="employee-list-date">'.$employee_date.'</td>
        </tr>
		';        
	endwhile;
	$list.= '</table>';
    
    $list.='<div class="next-page">'.get_next_posts_link($nextpage_text, $total_page).'</div>';
    
	
	return $list;
}
add_shortcode('employee', 'employee_shortcode');

function teachers_shortcode($atts){
	extract( shortcode_atts( array(
		'type' => 'current',
	), $atts) );
    
    global $paged;
    $posts_per_page = 20;
    $settings = array(
        'showposts' => $posts_per_page, 
        'post_type' => 'teacher', 
        'meta_key' => 'teacher_type', 
        'meta_value' => $type, 
        'orderby' => 'menu_order', 
        'order' => 'ASC', 
        'paged' => $paged
    );
	
    $post_query = new WP_Query( $settings );	
    
    $total_found_posts = $post_query->found_posts;
    $total_page = ceil($total_found_posts / $posts_per_page);
    

    
    $nextpage_text = __( 'পরের পাতা', 'rrf-education-theme' );
    $photo_text = __( 'ছবি', 'rrf-education-theme' );
    $name_text = __( 'শিক্ষকের নাম', 'rrf-education-theme' );
    $desi_text = __( 'পদবী', 'rrf-education-theme' );
    $start_text = __( 'যোগদানের তারিখ', 'rrf-education-theme' );
    $mobile_text = __( 'মোবাইল নম্বর', 'rrf-education-theme' );
    $edu_text = __( 'শিক্ষাগত যোগ‍্যতা', 'rrf-education-theme' );
    $loading_text = __( 'লোড হচ্ছে ...', 'rrf-education-theme' );
    
    $enable_teacher_mobile_number = ot_get_option( 'enable_teacher_mobile_number' );
    $enable_teacher_education = ot_get_option( 'enable_teacher_education' );
    if($enable_teacher_mobile_number == 'on') {
        $teacher_mobile_no_header = '<th class="teacher-list-mobileno">'.$mobile_text.'</th>';
    } else {
        $teacher_mobile_no_header = '';
    }
    
    if($enable_teacher_education == 'on') {
        $teacher_education_header = '<th class="teacher-list-edu">'.$edu_text.'</th>';
    } else {
        $teacher_education_header = '';
    }    
		
	$list = '
    <script>
        jQuery(document).ready(function($){
            $(".teacher-list").infinitescroll({
                navSelector  	: ".next-page",
                nextSelector 	: ".next-page a",
                itemSelector 	: ".teacher-list tr",
                loading: {
                    msgText: "<i class=\'icomoon icomoon-spinner icomoon-rotate\'></i> '.$loading_text.'",
                    img: "data:image/gif;base64,R0lGODlhAQABAHAAACH5BAUAAAAALAAAAAABAAEAAAICRAEAOw=="
                },
                maxPage         : '.$total_page.',                
            },function( newElems ) {
                $(".next-page").show();
            });
            
            $(window).unbind(\'.infscr\');

            $(".next-page").click(function(){
                $(".teacher-list").infinitescroll(\'retrieve\');
                return false;
            });            
        });
    </script>
    
    <table class="boxed-table">
        <tr>
            <th class="teacher-list-photo">'.$photo_text.'</th>
            <th class="teacher-list-name">'.$name_text.'</th>
            <th class="teacher-list-designation">'.$desi_text.'</th>
            '.$teacher_mobile_no_header.'
            '.$teacher_education_header.'
            <th class="teacher-list-date">'.$start_text.'</th>        
        </tr>   
    </table>
    
    <table class="boxed-table teacher-list">';
	while($post_query->have_posts()) : $post_query->the_post();
        $idd = get_the_ID();
        $teacher_designation = get_post_meta($idd, 'teacher_designation', true);
        $teacher_join_date = get_post_meta($idd, 'teacher_join_date', true);
        $teacher_mobile = get_post_meta($idd, 'teacher_mobile', true);
        $teacher_edu_qualification = get_post_meta($idd, 'teacher_edu_qualification', true);
    
        if($enable_teacher_mobile_number == 'on') {
            $teacher_mobile_no_content = '<td class="teacher-list-mobileno">'.$teacher_mobile.'</td>';
        } else {
            $teacher_mobile_no_content = '';
        } 
    
        if($enable_teacher_education == 'on') {
            $teacher_education_content = '<td class="teacher-list-edu">'.$teacher_edu_qualification.'</td>';
        } else {
            $teacher_education_content = '';
        }     
    
		$list .= '
        <tr>
            <td class="teacher-list-photo">'.get_the_post_thumbnail($idd, 'thumbnail').'</td>
            <td class="teacher-list-name">'.get_the_title().'</td>
            <td class="teacher-list-designation">'.$teacher_designation.'</td>
            '.$teacher_mobile_no_content.'
            '.$teacher_education_content.'
            <td class="teacher-list-date">'.$teacher_join_date.'</td>
        </tr>
		';        
	endwhile;
	$list.= '</table>';
    
    $list.='<div class="next-page">'.get_next_posts_link($nextpage_text, $total_page).'</div>';
    
	
	return $list;
}
add_shortcode('teachers', 'teachers_shortcode');

function committee_shortcode($atts){
	extract( shortcode_atts( array(
		'type' => 'current',
	), $atts) );
    
    global $paged;
    $posts_per_page = 20;
    $settings = array(
        'showposts' => $posts_per_page, 
        'post_type' => 'committee', 
        'orderby' => 'menu_order', 
        'order' => 'ASC', 
        'paged' => $paged
    );
    
    $nextpage_text = __( 'পরের পাতা', 'rrf-education-theme' );
    $photo_text = __( 'ছবি', 'rrf-education-theme' );
    $name_text = __( 'সদস‍্যের নাম', 'rrf-education-theme' );
    $desi_text = __( 'পদবী', 'rrf-education-theme' );
    $start_text = __( 'শুরুর তারিখ', 'rrf-education-theme' );
    $end_text = __( 'মেয়াদউত্তীর্ণের তারিখ', 'rrf-education-theme' );
	
    $post_query = new WP_Query( $settings );	
    
    $total_found_posts = $post_query->found_posts;
    $total_page = ceil($total_found_posts / $posts_per_page);
    $loading_text = __( 'লোড হচ্ছে ...', 'rrf-education-theme' );
		
	$list = '
    <script>
        jQuery(document).ready(function($){
            $(".committee-list").infinitescroll({
                navSelector  	: ".next-page",
                nextSelector 	: ".next-page a",
                itemSelector 	: ".committee-list tr",
                loading: {
                    msgText: "<i class=\'icomoon icomoon-spinner icomoon-rotate\'></i> '.$loading_text.'",
                    img: "data:image/gif;base64,R0lGODlhAQABAHAAACH5BAUAAAAALAAAAAABAAEAAAICRAEAOw=="
                },
                maxPage         : '.$total_page.',                
            },function( newElems ) {
                $(".next-page").show();
            });
            
            $(window).unbind(\'.infscr\');

            $(".next-page").click(function(){
                $(".committee-list").infinitescroll(\'retrieve\');
                return false;
            });            
        });
    </script>
    
    <table class="boxed-table">
        <tr>
            <th class="committee-list-photo">'.$photo_text.'</th>
            <th class="committee-list-name">'.$name_text.'</th>
            <th class="committee-list-designation">'.$desi_text.'</th>
            <th class="committee-list-startdate">'.$start_text.'</th>        
            <th class="committee-list-enddate">'.$end_text.'</th>        
        </tr>  
    </table>    
    
    <table class="boxed-table committee-list">';
	while($post_query->have_posts()) : $post_query->the_post();
        $idd = get_the_ID();
        $committee_designation = get_post_meta($idd, 'committee_designation', true);
        $committee_startdate = get_post_meta($idd, 'committee_startdate', true);
        $committee_enddate = get_post_meta($idd, 'committee_enddate', true);
		$list .= '
        <tr>
            <td class="committee-list-photo">'.get_the_post_thumbnail($idd, 'thumbnail').'</td>
            <td class="committee-list-name">'.get_the_title().'</td>
            <td class="committee-list-designation">'.$committee_designation.'</td>
            <td class="committee-list-startdate">'.$committee_startdate.'</td>
            <td class="committee-list-enddate">'.$committee_enddate.'</td>
        </tr>
		';        
	endwhile;
	$list.= '</table>';
    
    $list.='<div class="next-page">'.get_next_posts_link($nextpage_text, $total_page).'</div>';
    
	
	return $list;
}
add_shortcode('committee', 'committee_shortcode');	




function photogallery_shortcode($atts){
	extract( shortcode_atts( array(
		'type' => 'current',
	), $atts) );
    
    global $paged;
    $posts_per_page = -1;
    $settings = array(
        'showposts' => $posts_per_page, 
        'post_type' => 'photogallery', 
        'paged' => $paged
    );
	
    $post_query = new WP_Query( $settings );	
    
    
    $date_text = __( 'তারিখে যুক্ত করা হয়েছে।', 'rrf-education-theme' );
		
	$list = '<div class="row">';
	while($post_query->have_posts()) : $post_query->the_post();
        $idd = get_the_ID();
        $gallery = get_post_meta($idd, 'gallery_images', true);
        $gallery_item_no = 0;
    
        $list .='<div class="col-sm-6"><div class="single-gallery-item">
            <div class="gallery-desc-inner">
                <h3>'.get_the_title().'</h3>
                <p>'.get_the_date('F j, Y', $idd).' '.$date_text.'</p>
            </div>
        ';
    
        if( ! empty( $gallery ) ) {

            $gallery_ids = explode( ',', $gallery );

            foreach ( $gallery_ids as $gallery_id ) {
                $attachment = wp_get_attachment_image_src( $gallery_id, 'large' );
                $attachment_thumb = wp_get_attachment_image_src( $gallery_id, 'medium' );
                $image_meta = wp_prepare_attachment_for_js( $gallery_id );
                $gallery_item_no++;
                
                if($gallery_item_no == '1'){
                    $list .='<a href="'.$attachment[0].'" title="'.$image_meta['title'].'">
                        <img src="'.$attachment_thumb[0].'" alt="'.$image_meta['title'].'"/>
                    </a>';
                } else {
                    $list .='<a style="display:none" href="'.$attachment[0].'" title="'.$image_meta['title'].'">
                        <img src="'.$attachment_thumb[0].'" alt="'.$image_meta['title'].'"/>
                    </a>';    
                }
                
            }

        }
        $list .='</div></div>';
	endwhile;
	$list.= '</div>';
    
	
	return $list;
}
add_shortcode('photogallery', 'photogallery_shortcode');	






function colored_form_shortcode( $atts, $content = null  ) {
 
    extract( shortcode_atts( array(
        'id' => '1',
        'theme' => 'theme_1'
    ), $atts ) );
 
    return '<div class="colored-gravity-form colored-gravity-form-'.$theme.'">'.do_shortcode('[gravityform id="'.$id.'" title="false" ajax="true"]').'</div>';
}   
add_shortcode('colored_form', 'colored_form_shortcode');



function child_pages_shortcode( $atts, $content = null  ) {
 
    extract( shortcode_atts( array(
        'theme' => '1'
    ), $atts ) );
    
    global $post;
    
    $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'sort_order' => 'asc' ) );
    
    $post_list = '<ul class="row child-boxed-pages child-boxed-pages-theme-'.$theme.'">';
    foreach( $mypages as $page ) {
		$content = $page->post_content;

		$content = apply_filters( 'the_content', $content );
        
        
        $post_list .= '<li class="col-md-4 col-sm-6"><a href="'.get_page_link( $page->ID ).'"><i class="icomoon icomoon-link-alt"></i> '.$page->post_title.'</a></li>';
        
    }
    $post_list .= '<ul>';
    
    
 
    return $post_list;
}   
add_shortcode('child_pages', 'child_pages_shortcode');