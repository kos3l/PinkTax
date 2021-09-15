<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
                    <div class="row upper">
                        <div class="col-6 subpage" >
                            <p><?php the_content() ?></p>  
                        </div>
                        <div class="col-6 scroll-container">
                            <div class="inner-scroll-container">
                                <div class="scroll-text"><img src="<?php the_field('arrow') ?>" alt=""> <p><?php the_field('scroll') ?></p></div>
                                <div class="scroll-text"><img src="<?php the_field('arrow') ?>" alt=""> <p><?php the_field('scroll-2') ?></p></div>
                                <div class="scroll-text"><img src="<?php the_field('arrow') ?>" alt=""> <p><?php the_field('scroll-3') ?></p></div>
                            </div>
                        </div>
                    </div>
                    <div class="row color-bar">
                        <div class="col-6 bar">
                            <div class="bar-inner">
                                <img src="<?php the_field('icon') ?>" alt="">
                                <img src="<?php the_field('icon2') ?>" alt=""> 
                                <img src="<?php the_field('icon3') ?>" id="shirt" alt=""> 
                            </div>
                        </div>
                        <div class="col-6 bar-text">
                            <p><?php the_field('color_bar_text') ?></p>
                        </div>
                    </div>
                    <div class="row main">
                        <div class="col-6" style="background-image: url(<?php the_field('main_image'); ?>);background-size:cover;background-position:80% 100%"></div>
                        <div class="col-6 section">
                            <p class="title"><?php the_field('main-text') ?></p>
                            <p class="intro"><?php the_field('intro') ?></p>
                            <p class="body-text"><?php the_field('body') ?></p>

                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

<?php get_footer() ?>