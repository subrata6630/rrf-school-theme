<?php

$color_settings_type = ot_get_option('color_settings_type');
$site_font = ot_get_option('site_fontt');
$select_color_scheme = ot_get_option('select_color_scheme');
$menu_support_at_most = ot_get_option('menu_support_at_most');
$custom_css = ot_get_option('custom_css');
$custom_js = ot_get_option('custom_js');

// Ensure that menu_support_at_most is an integer
$menu_support_at_most = (int) $menu_support_at_most;

// Check if menu_support_at_most is greater than zero to avoid division by zero error
if ($menu_support_at_most > 0) {
    $menu_support_width = 100 / $menu_support_at_most;
} else {
    // Provide a fallback value when menu_support_at_most is 0 or not set
    $menu_support_width = 100;  // Default value, you can choose another number if needed
}

if($color_settings_type == 'predefinied') {
    // Color schemes based on selection...
    // (all your color scheme code remains the same)
} else {
    // Default color settings...
    // (all your default color code remains the same)
}

$select_background_pattern = ot_get_option('select_background_pattern');
$upload_own_pattern = ot_get_option('upload_own_pattern');
$pattern_type = ot_get_option('pattern_type');
$pattern_behaviour = ot_get_option('pattern_behaviour');

?>

<style>
body {
    background-attachment: <?php echo $pattern_behaviour;
    ?>
}

<?php if($upload_own_pattern && $pattern_type=='owndefined') : ?>body {
    background-image: url(<?php echo $upload_own_pattern; ?>)
}

<?php else : ?>body {
    background-image: url(<?php echo get_template_directory_uri();
    ?>/img/patterns/pattern_<?php echo $select_background_pattern;
    ?>.png)
}

<?php endif;

?>.mainmenu li {
    width: <?php echo $menu_support_width;
    ?>%
}

.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+1)::after,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+1):hover>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+1):hover>ul,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+1).current_page_item>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+1).current_page_parent>a,
.span-color-1 span,
.child-boxed-pages-theme-1 li a,
table.boxed-table th,
.colored-gravity-form-theme_1,
.special-cta-content,
.fc-event.theme-1,
.calendar-legends li.legend-color-1::before {
    background-color: <?php echo $theme_color_1;
    ?>
}

.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+2)::after,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+2):hover>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+2):hover>ul,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+2).current_page_item>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+2).current_page_parent>a,
.span-color-2 span,
.child-boxed-pages-theme-2 li a,
.colored-gravity-form-theme_2,
.fc-event.theme-2,
.calendar-legends li.legend-color-2::before {
    background-color: <?php echo $theme_color_2;
    ?>
}

.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+3)::after,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+3):hover>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+3):hover>ul,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+3).current_page_item>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+3).current_page_parent>a,
.span-color-3 span,
.child-boxed-pages-theme-3 li a,
.colored-gravity-form-theme_3,
.fc-event.theme-3,
.calendar-legends li.legend-color-3::before {
    background-color: <?php echo $theme_color_3;
    ?>
}

.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+4)::after,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+4):hover>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+4):hover>ul,
.mainmenu li:nth-child(4).current_page_item>a,
.mainmenu li:nth-child(4).current_page_parent>a,
.span-color-4 span,
.child-boxed-pages-theme-4 li a,
.routine-download-btn,
.colored-gravity-form-theme_4,
.fc-event.theme-4,
.calendar-legends li.legend-color-4::before {
    background-color: <?php echo $theme_color_4;
    ?>
}

.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+5)::after,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+5):hover>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+5):hover>ul,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+5).current_page_item>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+5).current_page_parent>a,
.span-color-5 span,
.child-boxed-pages-theme-5 li a,
.colored-gravity-form-theme_5,
.fc-event.theme-5,
.calendar-legends li.legend-color-5::before {
    background-color: <?php echo $theme_color_5;
    ?>
}

.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+6)::after,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+6):hover>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+6):hover>ul,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+6).current_page_item>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+6).current_page_parent>a,
.span-color-6 span,
.child-boxed-pages-theme-6 li a,
.colored-gravity-form-theme_6,
.fc-event.theme-6,
.calendar-legends li.legend-color-6::before {
    background-color: <?php echo $theme_color_6;
    ?>
}

.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+7)::after,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+7):hover>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+7):hover>ul,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+7).current_page_item>a,
.mainmenu li:nth-child(<?php echo $menu_support_at_most; ?>n+7).current_page_parent>a,
.span-color-7 span,
.child-boxed-pages-theme-7 li a,
.colored-gravity-form-theme_7,
.fc-event.theme-7,
.calendar-legends li.legend-color-7::before {
    background-color: <?php echo $theme_color_7;
    ?>
}

.single-slide-wid {
    background-color: <?php echo $home_wid_color_1;
    ?>
}

.col-md-4:nth-child(2) .single-slide-wid {
    background-color: <?php echo $home_wid_color_2;
    ?>
}

.col-md-4:nth-child(3) .single-slide-wid {
    background-color: <?php echo $home_wid_color_3;
    ?>
}

<?php if($site_font=='solaimanlipi') : ?>@font-face {
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

body {
    font-family: 'solaimanlipi', sans-serif
}

<?php else : ?>body {
    font-family: 'Hind Siliguri', sans-serif
}

<?php endif;
?><?php echo $custom_css;
?>
</style>

<?php echo $custom_js; ?>