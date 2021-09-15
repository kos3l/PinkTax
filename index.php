<?php get_header() ?>
            <?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
                    <div class="row main">
                        <div class="col-6 content" >
                            <p><?php the_content() ?></p>  
                            <img src="<?php the_field('big_logo') ?>" class="logo">
                        </div>
                        <div class="col-6" style="background-image: url(<?php the_field('main_image'); ?>);background-size:cover;background-position:80% 100%">
                        </div>
                    </div>
                    <div class="row color-bar">
                        <div class="col"></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

<?php get_footer() ?>