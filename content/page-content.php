<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?> 
<?php 
    $page_type = get_post_meta($post->ID, 'page_type', true); 
    $subpage_box_theme = get_post_meta($post->ID, 'subpage_box_theme', true); 
    $teacher_list_cat = get_post_meta($post->ID, 'teacher_list_cat', true); 
    $select_routine = get_post_meta($post->ID, 'select_routine', true); 
    $student_list_cat = get_post_meta($post->ID, 'student_list_cat', true); 
    $specific_students_id = get_post_meta($post->ID, 'specific_students_id', true); 
    $student_list_column = get_post_meta($post->ID, 'student_list_column', true); 
    $enable_special_content = get_post_meta($post->ID, 'enable_special_content', true); 
    $page_special_contents = get_post_meta($post->ID, 'page_special_contents', true); 
?>
<div class="maincontent-text">

    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    
    <?php if($page_type != 'general') : ?>
    <div class="page-shortcode-wrapper">
        <?php if($page_type == 'child_page_list') {
            echo do_shortcode('[child_pages theme="'.$subpage_box_theme.'"]');
        } elseif($page_type == 'teachers_list') {
            echo do_shortcode('[teachers type="'.$teacher_list_cat.'"]');
        } elseif($page_type == 'vacency_list') {
            echo do_shortcode('[vacencies]');
        } elseif($page_type == 'employee_list') {
            echo do_shortcode('[employee]');
        } elseif($page_type == 'noticeboard') {
            echo do_shortcode('[notices]');
        } elseif($page_type == 'calendar') {
            echo do_shortcode('[calendar]');
        } elseif($page_type == 'routine') {
            echo do_shortcode('[routines type="'.$select_routine.'"]');
        } elseif($page_type == 'guardins_panel') {
            echo do_shortcode('[committee]');
        } elseif($page_type == 'photogallery') {
            echo do_shortcode('[photogallery]');
        } elseif($page_type == 'student_list' && $student_list_cat == 'all') {
            echo do_shortcode('[students student_list_column="'.$student_list_column.'"]');
        } elseif($page_type == 'student_list' && $student_list_cat == 'specific') {
            echo do_shortcode('[students type="'.$student_list_cat.'" specific_students_id="'.$specific_students_id.'"  student_list_column="'.$student_list_column.'"]');
        } elseif($page_type == 'student_list' && $student_list_cat == 'pro') {
            echo do_shortcode('[prostudents student_list_column="'.$student_list_column.'"]');
        } elseif($page_type == 'result') {
            echo do_shortcode('[results]');
        } ?>
    </div>
    <?php endif; ?>            
</div>

<?php if($page_special_contents && $enable_special_content == 'on') : ?>
<?php 
    foreach($page_special_contents as $page_special_content) : 
    $sp_id = $page_special_content['special_content_id'];
?>

    <h2 class="special-content-title"><?php echo $page_special_content['title']; ?></h2>
    
    <?php echo do_shortcode('[special_content id="'.$sp_id.'"]'); ?>

<?php endforeach; ?>
<?php endif; ?>


<?php endwhile; endif; ?> 