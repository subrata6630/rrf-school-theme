<?php

$color_settings_type = ot_get_option('color_settings_type');
$site_font = ot_get_option('site_fontt');
$select_color_scheme = ot_get_option('select_color_scheme');
$menu_support_at_most = ot_get_option('menu_support_at_most');
$custom_css = ot_get_option('custom_css');
$custom_js = ot_get_option('custom_js');

if($color_settings_type == 'predefinied') {
    if($select_color_scheme == '1') {
        $theme_color_1 = '#1dd2af';
        $theme_color_2 = '#2ecc71';
        $theme_color_3 = '#3498db';
        $theme_color_4 = '#9b59b6';
        $theme_color_5 = '#e67e22';
        $theme_color_6 = '#e74c3c';
        $theme_color_7 = '#000000';
        $home_wid_color_1 = '#1dd2af';
        $home_wid_color_2 = '#e74c3c';
        $home_wid_color_3 = '#3498db';   
    } elseif($select_color_scheme == '2') {
        $theme_color_1 = '#2b2e4a';
        $theme_color_2 = '#e74545';
        $theme_color_3 = '#8f3749';
        $theme_color_4 = '#53354a';
        $theme_color_5 = '#060c69';
        $theme_color_6 = '#920a07';
        $theme_color_7 = '#f75d7b';
        $home_wid_color_1 = '#454b85';
        $home_wid_color_2 = '#53354a';
        $home_wid_color_3 = '#2b2e4a';   
    } elseif($select_color_scheme == '3') {
        $theme_color_1 = '#48456e';
        $theme_color_2 = '#3983aa';
        $theme_color_3 = '#3dcdd0';
        $theme_color_4 = '#166f53';
        $theme_color_5 = '#1c1755';
        $theme_color_6 = '#0c3950';
        $theme_color_7 = '#479496';
        $home_wid_color_1 = '#3983aa';
        $home_wid_color_2 = '#268e6d';
        $home_wid_color_3 = '#0c3950';   
    } elseif($select_color_scheme == '4') {
        $theme_color_1 = '#00b9a9';
        $theme_color_2 = '#8a8240';
        $theme_color_3 = '#f93e6a';
        $theme_color_4 = '#867028';
        $theme_color_5 = '#279188';
        $theme_color_6 = '#685e3b';
        $theme_color_7 = '#867028';
        $home_wid_color_1 = '#f93e6a';
        $home_wid_color_2 = '#00b9a9';
        $home_wid_color_3 = '#8a8240';   
    } elseif($select_color_scheme == '5') {
        $theme_color_1 = '#3e3e3e';
        $theme_color_2 = '#f67219';
        $theme_color_3 = '#b3a78b';
        $theme_color_4 = '#731b1b';
        $theme_color_5 = '#422511';
        $theme_color_6 = '#6d551b';
        $theme_color_7 = '#ce5d5d';
        $home_wid_color_1 = '#924613';
        $home_wid_color_2 = '#3e3e3e';
        $home_wid_color_3 = '#731b1b';   
    } elseif($select_color_scheme == '6') {
        $theme_color_1 = '#fca7e0';
        $theme_color_2 = '#837940';
        $theme_color_3 = '#f34d4a';
        $theme_color_4 = '#4e2c3f';
        $theme_color_5 = '#830049';
        $theme_color_6 = '#783635';
        $theme_color_7 = '#7f2827';
        $home_wid_color_1 = '#96437b';
        $home_wid_color_2 = '#fca7e0';
        $home_wid_color_3 = '#53480b';   
    } elseif($select_color_scheme == '7') {
        $theme_color_1 = '#69e8de';
        $theme_color_2 = '#2d8ee1';
        $theme_color_3 = '#6634a9';
        $theme_color_4 = '#530c63';
        $theme_color_5 = '#189187';
        $theme_color_6 = '#305d83';
        $theme_color_7 = '#853597';
        $home_wid_color_1 = '#25857d';
        $home_wid_color_2 = '#2c1151';
        $home_wid_color_3 = '#225683';   
    } elseif($select_color_scheme == '8') {
        $theme_color_1 = '#2b1f32';
        $theme_color_2 = '#39621a';
        $theme_color_3 = '#088c7f';
        $theme_color_4 = '#413c66';
        $theme_color_5 = '#382c93';
        $theme_color_6 = '#5bb9b0';
        $theme_color_7 = '#166c64';
        $home_wid_color_1 = '#6d2b93';
        $home_wid_color_2 = '#413c66';
        $home_wid_color_3 = '#5bb9b0';   
    } elseif($select_color_scheme == '9') {
        $theme_color_1 = '#192e4c';
        $theme_color_2 = '#325fa0';
        $theme_color_3 = '#27475d';
        $theme_color_4 = '#0e3855';
        $theme_color_5 = '#2a8887';
        $theme_color_6 = '#47e1df';
        $theme_color_7 = '#82c79a';
        $home_wid_color_1 = '#2a8887';
        $home_wid_color_2 = '#325fa0';
        $home_wid_color_3 = '#82c79a';  
    }
} else {
    $theme_color_1 = ot_get_option('theme_color_1');
    $theme_color_2 = ot_get_option('theme_color_2');
    $theme_color_3 = ot_get_option('theme_color_3');
    $theme_color_4 = ot_get_option('theme_color_4');
    $theme_color_5 = ot_get_option('theme_color_5');
    $theme_color_6 = ot_get_option('theme_color_6');
    $theme_color_7 = ot_get_option('theme_color_7');
    $home_wid_color_1 = ot_get_option('home_wid_color_1');
    $home_wid_color_2 = ot_get_option('home_wid_color_2');
    $home_wid_color_3 = ot_get_option('home_wid_color_3');
}




$select_background_pattern = ot_get_option('select_background_pattern');
$upload_own_pattern = ot_get_option('upload_own_pattern');
$pattern_type = ot_get_option('pattern_type');
$pattern_behaviour = ot_get_option('pattern_behaviour');

$menu_support_width = 100 / $menu_support_at_most;
?>

<style>
    body {background-attachment: <?php echo $pattern_behaviour; ?>}
    <?php if($upload_own_pattern && $pattern_type == 'owndefined') : ?>
        body {background-image: url(<?php echo $upload_own_pattern; ?>)}
    <?php else : ?>
        body {background-image: url(<?php echo get_template_directory_uri(); ?>/img/patterns/pattern_<?php echo $select_background_pattern; ?>.png)}
    <?php endif; ?>
    
    .mainmenu li {width: <?php echo $menu_support_width; ?>%}
    
    .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+1)::after, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+1):hover > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+1):hover > ul, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+1).current_page_item > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+1).current_page_parent > a, .span-color-1 span, .child-boxed-pages-theme-1 li a, table.boxed-table th, .colored-gravity-form-theme_1, .special-cta-content, .fc-event.theme-1, .calendar-legends li.legend-color-1::before {background-color: <?php echo $theme_color_1; ?>}
    .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+2)::after, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+2):hover > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+2):hover > ul, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+2).current_page_item > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+2).current_page_parent > a, .span-color-2 span, .child-boxed-pages-theme-2 li a, .colored-gravity-form-theme_2, .fc-event.theme-2, .calendar-legends li.legend-color-2::before {background-color: <?php echo $theme_color_2; ?>}
    .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+3)::after, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+3):hover > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+3):hover > ul, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+3).current_page_item > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+3).current_page_parent > a, .span-color-3 span, .child-boxed-pages-theme-3 li a, .colored-gravity-form-theme_3, .fc-event.theme-3, .calendar-legends li.legend-color-3::before {background-color: <?php echo $theme_color_3; ?>}
    .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+4)::after, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+4):hover > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+4):hover > ul, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+4).current_page_item > a, .mainmenu li:nth-child(4).current_page_parent > a, .span-color-4 span, .child-boxed-pages-theme-4 li a, .routine-download-btn, .colored-gravity-form-theme_4, .fc-event.theme-4, .calendar-legends li.legend-color-4::before {background-color: <?php echo $theme_color_4; ?>}
    .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+5)::after, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+5):hover > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+5):hover > ul, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+5).current_page_item > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+5).current_page_parent > a, .span-color-5 span, .child-boxed-pages-theme-5 li a, .colored-gravity-form-theme_5, .fc-event.theme-5, .calendar-legends li.legend-color-5::before {background-color: <?php echo $theme_color_5; ?>}
    .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+6)::after, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+6):hover > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+6):hover > ul, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+6).current_page_item > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+6).current_page_parent > a, .span-color-6 span, .child-boxed-pages-theme-6 li a, .colored-gravity-form-theme_6, .fc-event.theme-6, .calendar-legends li.legend-color-6::before {background-color: <?php echo $theme_color_6; ?>}
    .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+7)::after, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+7):hover > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+7):hover > ul, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+7).current_page_item > a, .mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+7).current_page_parent > a, .span-color-7 span, .child-boxed-pages-theme-7 li a, .colored-gravity-form-theme_7, .fc-event.theme-7, .calendar-legends li.legend-color-7::before {background-color: <?php echo $theme_color_7; ?>} 
    
    .single-slide-wid {background-color:<?php echo $home_wid_color_1; ?>}
    .col-md-4:nth-child(2) .single-slide-wid {background-color:<?php echo $home_wid_color_2; ?>}
    .col-md-4:nth-child(3) .single-slide-wid {background-color:<?php echo $home_wid_color_3; ?>}
    
    <?php if($site_font == 'solaimanlipi') : ?>
    @font-face {
        font-family: 'solaimanlipi';
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/solaimanlipi.eot');
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/solaimanlipi.eot?#iefix') format('embedded-opentype'),
            url('<?php echo get_template_directory_uri(); ?>/fonts/solaimanlipi.woff2') format('woff2'),
            url('<?php echo get_template_directory_uri(); ?>/fonts/solaimanlipi.woff') format('woff'),
            url('<?php echo get_template_directory_uri(); ?>/fonts/solaimanlipi.ttf') format('truetype'),
            url('<?php echo get_template_directory_uri(); ?>/fonts/solaimanlipi.svg#solaimanlipi') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    body { font-family: 'solaimanlipi', sans-serif }
    <?php else : ?>
    body { font-family: 'Hind Siliguri', sans-serif }
    <?php endif; ?>
    
    <?php echo $custom_css; ?>
</style> 


<?php echo $custom_js; ?>