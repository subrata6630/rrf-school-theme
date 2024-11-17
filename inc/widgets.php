<?php 

function ppm_quickstart_widget_areas() {


	register_sidebar( array(
		'name' => __( 'সাইডবার উইজেটসমূহ', 'rrf-education-theme' ),
		'id' => 'sidebar_widgets',
		'before_widget' => '<div class="sidebar-widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );    
    
	register_sidebar( array(
		'name' => __( 'হোমপেজের উইজেটসমূহ', 'rrf-education-theme' ),
		'id' => 'welcome_widgets',
		'before_widget' => '<div class="col-md-4"><div class="single-slide-wid">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );



	register_sidebar( array(
		'name' => __( 'ফুটারের উইজেটসমূহ', 'rrf-education-theme' ),
		'id' => 'footer_widgets',
		'before_widget' => '<div class="col-md-2"><div class="footer-link-wid">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

}
add_action('widgets_init', 'ppm_quickstart_widget_areas');


class rrf_school_theme_noticeboard_widget extends WP_Widget {
    public function __construct(){
        
        $noticeboard_wid_title = __( 'নোটিশবোর্ড', 'rrf-education-theme' );
        
        parent::__construct('rrf_school_theme_noticeboard_widget', $noticeboard_wid_title, array(
            'description' => __('এই উইজেটটি ব‍্যবহার করে সাম্প্রতিক নোটিশ দেখাতে পারবেন।', 'rrf-education-theme')
        ));
    }
    
    public function widget($args, $instance){
        
        $title = $instance['title'];
        $page_id = $instance['page_id'];
        $post = get_post($page_id); 
        $slug = $post->post_name;
        $notice_shortcode = do_shortcode('[notices count="5"]');
        $button_text = $instance['button_text'];
        $page_id_page_markup = '<a href="'.site_url().'/'.$slug.'" class="all-notice-btn">'.$button_text.'</a>';
        
        
        
        echo $args['before_widget'].$args['before_title'].$title.$args['after_title'].$notice_shortcode.$page_id_page_markup.$args['after_widget'];
    }
    
    public function form($instance){
        
        $instance = wp_parse_args( (array) $instance, array( 
            'title' => __('নোটিশ বোর্ড', 'rrf-education-theme'),
            'button_text' => __('সকল নোটিশ দেখুন', 'rrf-education-theme') 
        ) );
        
        $title = $instance['title'];
        $button_text = $instance['button_text'];
        $page_id = $instance['page_id'] = '';
        
    ?>
    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('উইজেট টাইটেল', 'rrf-education-theme'); ?></label>
        <input type="text" value="<?php echo esc_attr($title); ?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('page_id'); ?>"><?php _e('সকল নোটিশ এর পাতা', 'rrf-education-theme'); ?></label>
        <?php
            wp_dropdown_pages(array(
                'id' => $this->get_field_id('page_id'),
                'name' => $this->get_field_name('page_id'),
                'selected' => $instance['page_id'],
            ));       
        ?>
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('button_text'); ?>"><?php _e('বাটন টেক্সট', 'rrf-education-theme'); ?></label>
        <input type="text" value="<?php echo esc_attr($button_text); ?>" name="<?php echo $this->get_field_name('button_text'); ?>" id="<?php echo $this->get_field_id('button_text'); ?>" class="widefat">
    </p>
    <?php
    }
}


class rrf_school_theme_teacherlist_widget extends WP_Widget {
    public function __construct(){
        
        $teacher_list_title = __('শিক্ষকের তালিকা', 'rrf-education-theme');
        
        parent::__construct('rrf_school_theme_teacherlist_widget', $teacher_list_title, array(
            'description' => __('এই উইজেটটি ব‍্যবহার করে শিক্ষকের তালিকা দেখাতে পারবেন।', 'rrf-education-theme')
        ));
    }
    
    public function widget($args, $instance){
        
        $title = $instance['title'];
        $page_id = $instance['page_id'];
        $post = get_post($page_id); 
        $slug = $post->post_name;
        $button_text = $instance['button_text'];
        
        ?>
            <?php echo $args['before_widget']; ?>
                <?php echo $args['before_title']; ?><?php echo $title; ?><?php echo $args['after_title']; ?>
                <div class="wid-teacher-list">
                    <?php
                    global $post;
                    $post_args = array( 'posts_per_page' => 3, 'post_type'=> 'teacher', 'meta_key' => 'teacher_type', 'meta_value' => 'current', 'teacher_cat' => 'Home', 'orderby' => 'menu_order', 'order' => 'ASC');
                    $myposts = get_posts( $post_args );
                    foreach( $myposts as $post ) : setup_postdata($post); ?>

                        <?php 
                            $teacher_designation = get_post_meta($post->ID, 'teacher_designation', true); 
                            $teacher_join_date = get_post_meta($post->ID, 'teacher_join_date', true); 
                        ?>

                        <div class="single-wid-teacher">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <h4><?php the_title(); ?><?php if($teacher_designation) : ?> <span><?php echo $teacher_designation; ?></span><?php endif; ?></h4>
                            <?php if($teacher_join_date) : ?>
                            <p><?php _e('যোগদানের তারিখ', 'rrf-education-theme'); ?>: <?php echo $teacher_join_date; ?></p>
                            <?php endif; ?>
                        </div>

                    <?php endforeach; ?>
                </div>

                <a href="<?php echo site_url(); ?>/<?php echo $slug; ?>" class="all-notice-btn"><?php _e('সকল শিক্ষকের তালিকা', 'rrf-education-theme'); ?></a> 
            <?php echo $args['after_widget']; ?>       
        <?php
    }
    
    public function form($instance){
        
        $instance = wp_parse_args( (array) $instance, array( 
            'title' => __('শিক্ষকদের তালিকা', 'rrf-education-theme'),
            'button_text' => __('সকল শিক্ষকের তালিকা', 'rrf-education-theme') 
        ) );        
        
        $title = $instance['title'];
        $button_text = $instance['button_text'];
        $page_id = $instance['page_id'] = '';
        
    ?>
    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('উইজেট টাইটেল', 'rrf-education-theme'); ?></label>
        <input type="text" value="<?php echo esc_attr($title); ?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('page_id'); ?>"><?php _e('সকল শিক্ষকের তালিকার পাতা', 'rrf-education-theme'); ?></label>
        <?php
            wp_dropdown_pages(array(
                'id' => $this->get_field_id('page_id'),
                'name' => $this->get_field_name('page_id'),
                'selected' => $instance['page_id'],
            ));       
        ?>
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('button_text'); ?>"><?php _e('বাটন টেক্সট', 'rrf-education-theme'); ?></label>
        <input type="text" value="<?php echo esc_attr($button_text); ?>" name="<?php echo $this->get_field_name('button_text'); ?>" id="<?php echo $this->get_field_id('button_text'); ?>" class="widefat">
    </p>
    <?php
    }
}


add_action('admin_enqueue_scripts', 'rrf_school_theme_widget_media_scripts');
function rrf_school_theme_widget_media_scripts() {
    wp_enqueue_media();
    wp_enqueue_script('rrf-school-theme-wid-media', get_template_directory_uri() . '/js/upload-media.js', false, '1.0', true);
}

class rrf_school_theme_founder_widget extends WP_Widget {
    public function __construct(){
        
        $vendor_name_text = __('প্রতিষ্ঠাতা', 'rrf-education-theme');
        
        parent::__construct('rrf_school_theme_founder_widget', $vendor_name_text, array(
            'description' => __('এই উইজেটটি ব‍্যবহার করে প্রতিষ্ঠাতার ছবি ও নাম দেখাতে পারবেন।', 'rrf-education-theme')
        ));
    }
    
    public function widget($args, $instance){
        
        $title = $instance['title'];
        $founder_name = $instance['founder_name'];
        $founder_desc = $instance['founder_desc'];
        $founder_photo = $instance['founder_photo'];
        
        ?>
            <?php echo $args['before_widget']; ?>
            <?php echo $args['before_title']; ?><?php echo $title; ?><?php echo $args['after_title']; ?>
            <div class="wid-photo">
                <img src="<?php echo $founder_photo; ?>" alt="">
                <div class="wid-overlay-txt">
                    <h3><?php echo $founder_name; ?></h3>
                    <p><?php echo $founder_desc; ?></p>
                </div>
            </div>
            <?php echo $args['after_widget']; ?>     
        <?php
    }
    
    public function form($instance){
        
        $instance = wp_parse_args( (array) $instance, array( 
            'title' => __('প্রতিষ্ঠাতা', 'rrf-education-theme'),
            'founder_name' => '' ,
            'founder_desc' => '' 
        ) );        
        
        $title = $instance['title'];
        $founder_name = $instance['founder_name'];
        $founder_desc = $instance['founder_desc'];
        $founder_photo = $instance['founder_photo'];
        
    ?>
    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('উইজেট টাইটেল', 'rrf-education-theme') ?></label>
        <input type="text" value="<?php echo esc_attr($title); ?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('founder_name'); ?>"><?php _e('প্রতিষ্ঠাতার নাম', 'rrf-education-theme') ?></label>
        <input type="text" value="<?php echo esc_attr($founder_name); ?>" name="<?php echo $this->get_field_name('founder_name'); ?>" id="<?php echo $this->get_field_id('founder_name'); ?>" class="widefat">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('founder_desc'); ?>"><?php _e('প্রতিষ্ঠাতার পরিচয়', 'rrf-education-theme') ?></label>
        <input type="text" value="<?php echo esc_attr($founder_desc); ?>" name="<?php echo $this->get_field_name('founder_desc'); ?>" id="<?php echo $this->get_field_id('founder_desc'); ?>" class="widefat">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('founder_photo'); ?>"><?php _e('প্রতিষ্ঠাতার ছবি', 'rrf-education-theme') ?></label>


        <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('founder_photo'); ?>" id="<?php echo $this->get_field_id('founder_photo'); ?>" value="<?php echo $instance['founder_photo']; ?>" style="margin-top:5px;">
        
        <?php
            if ( $instance['founder_photo'] != '' ) :
                echo '<img class="custom_media_image" src="' . $instance['founder_photo'] . '" style="margin:0;padding:0;max-width:100px;display:inline-block" /><br />';
            endif;
        ?>        

        <input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name('founder_photo'); ?>" value="Upload Image" style="margin-top:5px;" />
    </p>
    
    <?php
    }
}

function rrf_school_theme_all_widgets_register(){
    register_widget('rrf_school_theme_noticeboard_widget');
    register_widget('rrf_school_theme_teacherlist_widget');
    register_widget('rrf_school_theme_founder_widget');
}
add_action('widgets_init', 'rrf_school_theme_all_widgets_register');