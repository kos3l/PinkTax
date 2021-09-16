<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
                    <div class="row upper">
                        <div class="col-lg-6 subpage" >
                            <p><?php the_content() ?></p>  
                        </div>
                        <div class="col-lg-6 scroll-container">
                            <div class="inner-scroll-container">
                                <div class="scroll-text"><img src="<?php the_field('arrow') ?>" alt=""> <p><?php the_field('scroll') ?></p></div>
                                <div class="scroll-text"><img src="<?php the_field('arrow') ?>" alt=""> <p><?php the_field('scroll-2') ?></p></div>
                                <div class="scroll-text"><img src="<?php the_field('arrow') ?>" alt=""> <p><?php the_field('scroll-3') ?></p></div>
                            </div>
                        </div>
                    </div>
                    <div class="row color-bar">
                        <div class="col-lg-6 bar">
                            <div class="bar-inner">
                                <img src="<?php the_field('icon') ?>" alt="">
                                <img src="<?php the_field('icon2') ?>" alt=""> 
                                <img src="<?php the_field('icon3') ?>" id="shirt" alt=""> 
                            </div>
                        </div>
                        <div class="col-lg-6 bar-text">
                            <p><?php the_field('color_bar_text') ?></p>
                        </div>
                    </div>
                    <div class="row content-box">
                        <div class="col-lg-6" id="mobile-img" style="background-image: url(<?php the_field('main_image'); ?>);background-size:cover;background-position:80% 100%"></div>
                        <div class="col-lg-6 section">
                            <p class="title"><?php the_field('main-text') ?></p>
                            <p class="intro" ><?php the_field('intro') ?></p>
                            <p class="body-text"><?php the_field('body') ?></p>
                        </div>
                    </div>
                    <div class="row content-box">
                        <div class="col-lg-6 background section">
                            <p class="title"><?php the_field('main-text1') ?></p>
                            <p class="intro" id="white"><?php the_field('intro1') ?></p>
                            <p class="body-text"><?php the_field('body1') ?></p>
                        </div>
                        <div class="col-lg-6 gallery">
                            <div class="gallery-content">
                                <div class="box-1">
                                    <img src="<?php the_field('picture_1') ?>" alt="">
                                    <img src="<?php the_field('picture_2') ?>" alt="">
                                    <img src="<?php the_field('picture_3') ?>" alt="">
                                </div>
                                <div class="box-2">
                                    <img src="<?php the_field('picture_4') ?>" alt="">
                                    <img src="<?php the_field('picture_5') ?>" alt="">
                                    <img src="<?php the_field('picture_6') ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row headline">
                        <div class="col-lg-6 headline-column">
                            <p class="title"><?php the_field('headline') ?></p>  <br>
                            <p class="intro"><?php the_field('undertext') ?></p>
                        </div>
                    </div>
                    <div class="row bg-image">
                        <div class="col-lg-6" style="width:100vw;height:100%;background-image: url(<?php the_field('banner_image'); ?>);background-size:cover;background-position:80% 70%"></div>
                    </div>
                    <div class="row last-content">
                        <div class="col-lg-5 last">
                            <p class="body-text"><?php the_field('text_column_1') ?></p>
                        </div>
                        <div class="col-lg-5 last">
                            <p class="body-text"><?php the_field('text_column_2') ?></p>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

<?php get_footer() ?>