<?php get_header(); ?>
    
<div class="maincontent-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="maincontent">
                    <div class="row">
                        <div class="col-md-8">
                            <?php get_template_part('content/page-content'); ?>
                        </div>

                        <?php get_sidebar(); ?>
                    </div>
                </div>                 
            </div>
        </div>
    </div>
</div>    
                        
<?php get_footer(); ?>