<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

        <?php 
        wp_head();
        get_template_part('inc/custom-css'); 
        $site_layout = ot_get_option('site_layout');
        
        
        ?>
        
       
    </head>
    <body <?php body_class($site_layout); ?>>
     
        
        
        <?php 
            $top_text = ot_get_option('top_text');
            $top_email = ot_get_option('top_email');
            $site_logo = ot_get_option('site_logo');
        ?>     
      

        <div class="site-wrap">
            <div class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="logo">
                                            <a href="<?php echo site_url(); ?>">
                                                <?php if($site_logo) : ?>
                                                <img src="<?php echo $site_logo; ?>" class="site-logo" alt="">
                                                <?php endif; ?>
                                                <h1><?php bloginfo('name'); ?></h1>
                                                <p><?php bloginfo('description'); ?></p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="header-right">
                                            <p><?php echo $top_text; ?><br/> <?php _e( 'ই-মেইল', 'rrf-education-theme' ); ?>: <a href="<?php echo $top_email; ?>"><?php echo $top_email; ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mainmenu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mainmenu">
                                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'nav')); ?>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>  
            