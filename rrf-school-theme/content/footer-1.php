<?php 
    $contact_address = ot_get_option('contact_address');
    $contact_phone = ot_get_option('contact_phone');
    $copyright_text = ot_get_option('copyright_text');
    $top_email = ot_get_option('top_email');
?>
                                                                 
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer">
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="footer-logo">
                                    <h1><?php bloginfo('name'); ?></h1>
                                    <p><?php bloginfo('description'); ?></p>
                                </div>
                            </div>

                            <?php dynamic_sidebar('footer_widgets'); ?>

                            <div class="col-md-3">
                                <div class="footer-wid">
                                    <h3><?php _e( 'যোগাযোগের তথ‍্য', 'rrf-education-theme' ); ?></h3>
                                    <p><?php echo $contact_address; ?><br/>
                                    <?php _e( 'ই-মেইল', 'rrf-education-theme' ); ?>: <a href="<?php echo $top_email; ?>"><?php echo $top_email; ?></a><br/>
                                    <?php _e( 'মোবাইল', 'rrf-education-theme' ); ?>: <?php echo $contact_phone; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer-bottom">
                        <p><?php echo $copyright_text; ?></p>
                    </div>
                </div>                         
            </div>
        </div>
    </div>
</div> 