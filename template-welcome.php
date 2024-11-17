<?php get_header(); /* Template Name: Homepage Template */

$slider_type = ot_get_option('slider_type');
$upload_slider_image = ot_get_option('upload_slider_image');
$upload_slider_images = ot_get_option('upload_slider_images');
$site_layout = ot_get_option('site_layout');
$upload_slider_bullet_no = 0;
$upload_slider_image_no = 0;
?>
                
            <div class="slider-area">
                <?php if($site_layout != 'rrfschoo_fullwidth') : ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                <?php endif; ?>
                            <div class="slide-list">
                                <?php 
                                    if($slider_type == 'slideshow' && ! empty( $upload_slider_images )) : 
                                    $upload_slider_image_id = explode( ',', $upload_slider_images );
                                ?>
                                    <div id="homepage-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <?php foreach($upload_slider_image_id as $slide_image) : ?>
                                            <li data-target="#homepage-carousel" data-slide-to="<?php echo $upload_slider_bullet_no++; ?>"<?php if($upload_slider_bullet_no == '0') : ?> class="active"<?php endif; ?>></li>
                                            <?php endforeach; ?>
                                        </ol>

                                        <div class="carousel-inner" role="listbox">
                                            <?php 
                                                foreach($upload_slider_image_id as $slide_image) : 
                                                $attachment = wp_get_attachment_image_src( $slide_image, 'large' );
                                                $upload_slider_image_no++;
                                            ?>

                                            <div class="item<?php if($upload_slider_image_no == '1') : ?> active<?php endif; ?>">
                                                 <div style="background-image:url(<?php echo $attachment['0']; ?>)" class="single-slide-item">
                                                     <div style="display:none"><img src="<?php echo $attachment['0']; ?>" alt=""></div>
                                                 </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>        
                                <?php else : ?>
                                    <div style="background-image:url(<?php echo $upload_slider_image; ?>)" class="single-slide-item">
                                        <div style="display:none"><img src="<?php echo $upload_slider_image; ?>" alt=""></div>
                                    </div>
                                <?php endif; ?>
                            </div> 
                <?php if($site_layout != 'rrfschoo_fullwidth') : ?>                           
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>                      
            
            <?php if(is_active_sidebar('welcome_widgets')) : ?>        
            <div class="slider-below-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slide-below-widgets">
                                <div class="row">
                                    <?php dynamic_sidebar('welcome_widgets'); ?>
                                </div>
                            </div>                  
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            
                   
            <div class="maincontent-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="maincontent">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="maincontent-text">
                                            <?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?> 
                                               <?php the_content(); ?>
                                            <?php endwhile; endif; ?>
                                        </div>
                                    </div>
                                    <?php get_sidebar(); ?>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>       
        
       

 
                        
<?php get_footer(); ?>