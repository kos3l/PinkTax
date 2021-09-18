<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
                    <div class="row upper">
                        <div class="col-lg-6 subpage" >
                            <p><?php the_content() ?></p>  
                        </div>
                        <div class="col-lg-6 scroll-container">
                            <div class="inner-scroll-container">
                            <?php
                                $args = array(
                                    'theme_location' => 'subpage'
                                );
                                ?>
                                <div class="scroll-text"><?php wp_nav_menu( $args); ?></div>

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
                        <div class="col-lg-6" id="mobile-img" style="background-image: url(<?php the_field('tax-image'); ?>);background-size:cover;background-position:80% 100%"></div>
                        <div class="col-lg-6 section" id="anchor1">
                            <p class="title"><?php the_field('main-text') ?></p>
                            <p class="intro" ><?php the_field('intro') ?></p>
                            <p class="body-text"><?php the_field('body-part-1') ?></p>
                            <p class="body-text"><?php the_field('body-part-2') ?></p>
                        </div>
                    </div>
                    <div class="row content-box" id="anchor2">
                        <div class="col-lg-6 background section">
                            <p class="title"><?php the_field('main-text1') ?></p>
                            <p class="intro" id="white"><?php the_field('intro1') ?></p>
                            <p class="body-text"><?php the_field('body-part-3') ?></p>
                            <p class="body-text"><?php the_field('body-part-4') ?></p>
                        </div>
                        <div class="col-lg-6 vid">
                            <div class="video-content">
                                    <iframe src="<?php the_field('yt-video') ?>" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row headline" id="anchor3">
                        <div class="col-lg-6 headline-column">
                            <p class="title"><?php the_field('headline') ?></p>  <br>
                            <p class="intro"><?php the_field('undertext') ?></p>
                        </div>
                    </div>
                    <div class="row bg-image">
                        <div class="col-lg-6" style="width:100vw;height:100%;background-image: url(<?php the_field('banner_image'); ?>);background-size:cover;background-position:80% 60%"></div>
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