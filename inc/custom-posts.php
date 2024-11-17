<?php 
add_action( 'init', 'ppm_quickstart_theme_custom_post' );
function ppm_quickstart_theme_custom_post() {
	register_post_type( 'special-section',
		array(
			'labels' => array(
				'name' => __( 'স্পেশাল কনটেন্ট', 'rrf-education-theme' ),
				'singular_name' => __( 'স্পেশাল কনটেন্ট', 'rrf-education-theme' ),
				'add_new_item' => __( 'নতুন স্পেশাল কনটেন্ট যুক্ত করুন', 'rrf-education-theme' )
			),
			'public' => true,
            'menu_icon' => 'dashicons-book',
			'supports' => array('title', 'page-attributes'),
		)
	);    
	register_post_type( 'attendance',
		array(
			'labels' => array(
				'name' => __( 'হাজিরা', 'rrf-education-theme' ),
				'singular_name' => __( 'হাজিরা', 'rrf-education-theme' ),
				'add_new_item' => __( 'নতুন হাজিরা যুক্ত করুন', 'rrf-education-theme' )
			),
            'menu_icon' => 'dashicons-forms',
			'public' => true,
			'supports' => array('title', 'page-attributes'),
		)
	);  
	register_post_type( 'notice',
		array(
			'labels' => array(
				'name' => __( 'নোটিশ', 'rrf-education-theme' ),
				'singular_name' => __( 'নোটিশ', 'rrf-education-theme' ),
				'add_new_item' => __( 'নতুন নোটিশ যুক্ত করুন', 'rrf-education-theme' )
			),
            'menu_icon' => 'dashicons-exerpt-view',
			'public' => true,
			'supports' => array('title', 'editor', 'page-attributes'),
		)
	);
	register_post_type( 'teacher',
		array(
			'labels' => array(
				'name' => __( 'শিক্ষক', 'rrf-education-theme' ),
				'singular_name' => __( 'শিক্ষক', 'rrf-education-theme' ),
				'add_new_item' => __( 'নতুন শিক্ষক যুক্ত করুন', 'rrf-education-theme' )
			),
            'menu_icon' => 'dashicons-groups',
			'public' => true,
			'supports' => array('title', 'thumbnail', 'page-attributes'),
		)
	);
	register_post_type( 'student',
		array(
			'labels' => array(
				'name' => __( 'শিক্ষার্থী', 'rrf-education-theme' ),
				'singular_name' => __( 'শিক্ষার্থী', 'rrf-education-theme' ),
				'add_new_item' => __( 'নতুন শিক্ষার্থী যুক্ত করুন', 'rrf-education-theme' )
			),
            'menu_icon' => 'dashicons-welcome-learn-more',
			'public' => true,
			'supports' => array('title', 'page-attributes'),
		)
	);
	register_post_type( 'prostudent',
		array(
			'labels' => array(
				'name' => __( 'কৃতি শিক্ষার্থী', 'rrf-education-theme' ),
				'singular_name' => __( 'কৃতি শিক্ষার্থী', 'rrf-education-theme' ),
				'add_new_item' => __( 'নতুন কৃতি শিক্ষার্থী যুক্ত করুন', 'rrf-education-theme' )
			),
            'menu_icon' => 'dashicons-star-filled',
			'public' => true,
			'supports' => array('title', 'thumbnail', 'page-attributes'),
		)
	);
	register_post_type( 'vacency',
		array(
			'labels' => array(
				'name' => __( 'শুন‍্যপদ', 'rrf-education-theme' ),
				'singular_name' => __( 'শুন‍্যপদ', 'rrf-education-theme' ),
				'add_new_item' => __( 'নতুন শুন‍্যপদ যুক্ত করুন', 'rrf-education-theme' )
			),
            'menu_icon' => 'dashicons-location-alt',
			'public' => true,
			'supports' => array('title', 'page-attributes'),
		)
	);
	register_post_type( 'routine',
		array(
			'labels' => array(
				'name' => __( 'রুটিন', 'rrf-education-theme' ),
				'singular_name' => __( 'রুটিন', 'rrf-education-theme' ),
				'add_new_item' => __( 'নতুন রুটিন যুক্ত করুন', 'rrf-education-theme' )
			),
            'menu_icon' => 'dashicons-performance',
			'public' => true,
			'supports' => array('title', 'page-attributes'),
		)
	);
	register_post_type( 'result',
		array(
			'labels' => array(
				'name' => __( 'ফলাফল', 'rrf-education-theme' ),
				'singular_name' => __( 'ফলাফল', 'rrf-education-theme' ),
				'add_new_item' => __( 'নতুন ফলাফল যুক্ত করুন', 'rrf-education-theme' )
			),
            'menu_icon' => 'dashicons-analytics',
			'public' => true,
			'supports' => array('title', 'editor', 'page-attributes'),
		)
	);
	register_post_type( 'committee',
		array(
			'labels' => array(
				'name' => __( 'পরিচালনা কমিটি', 'rrf-education-theme' ),
				'singular_name' => __( 'সদস‍্য', 'rrf-education-theme' ),
				'add_new_item' => __( 'নতুন সদস‍্য যুক্ত করুন', 'rrf-education-theme' )
			),
			'public' => true,
            'menu_icon' => 'dashicons-networking',
			'supports' => array('title', 'thumbnail', 'page-attributes'),
		)
	);
	register_post_type( 'employee',
		array(
			'labels' => array(
				'name' => __( 'কর্মচারী', 'rrf-education-theme' ),
				'singular_name' => __( 'কর্মচারী', 'rrf-education-theme' ),
				'add_new_item' => __( 'নতুন কর্মচারী যুক্ত করুন', 'rrf-education-theme' )
			),
			'public' => true,
            'menu_icon' => 'dashicons-businessman',
			'supports' => array('title', 'page-attributes'),
		)
	);
	register_post_type( 'photogallery',
		array(
			'labels' => array(
				'name' => __( 'ফটোগ‍্যালারি', 'rrf-education-theme' ),
				'singular_name' => __( 'ফটোগ‍্যালারি', 'rrf-education-theme' ),
				'add_new_item' => __( 'নতুন ফটোগ‍্যালারি যুক্ত করুন', 'rrf-education-theme' )
			),
			'public' => true,
            'menu_icon' => 'dashicons-images-alt2',
			'supports' => array('title', 'page-attributes'),
		)
	);

	
}



function ppm_quickstart_custom_post_taxonomy() {
	register_taxonomy(
		'teacher_cat',  
		'teacher', 
		array(
			'hierarchical'          => true,
			'label'                 => __('ক‍্যাটেগরি', 'rrf-education-theme'), 
			'query_var'             => true,
			'show_admin_column'     => true,
			'rewrite'               => array(
				'slug'              => 'teacher-category', 
				'with_front'        => true 
				)
			)
	);
}
add_action( 'init', 'ppm_quickstart_custom_post_taxonomy');   