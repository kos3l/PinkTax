<?php get_header() ?>
            <?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
                    <div class="row main">
                        <div class="col-lg-6 content" >
                            <p><?php the_content() ?></p>  
                            <img src="<?php the_field('big_logo') ?>" class="logo">
                        </div>
                        <div class="col-lg-6" id="landing-img" style="background-image: url(<?php the_field('main_image'); ?>);background-size:cover;background-position:80% 100%">
                        </div>
                    </div>
                    <div class="row color-bar">
                        <div class="col"></div>
                    </div>
                    <div class="row section-home">
                        <div class="col-lg-6 section-img">
                            <img src="<?php the_field('section_image') ?>" alt="">
                        </div>
                        <div class="col-lg-6 section" id="pad" >
                            <div class="flex">
                                <div class="title"><?php the_field('home_headline') ?></div>
                                <div class="intro"><?php the_field('home_intro') ?></div>
                                <div class="body-text" style="margin-top:1rem;"><?php the_field('home_body') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row display">
                        <div class="col-lg-6 flex">
                            <div class="title mobile-center"><?php the_field('example_1') ?></div>
                            <div class="intro mobile-center"  style="margin-bottom:3rem;"><?php the_field('example_intro_1') ?></div>
                            <img src="<?php the_field('example_img_1') ?>"  alt="">
                        </div>
                        <div class="col-lg-6 flex left" >
                            <div class="title mobile-center"> <?php the_field('example_2') ?></div>
                            <div class="intro mobile-center" id="mob-mar"><?php the_field('example_intro_2') ?></div>
                            <img src="<?php the_field('example_img_2') ?>" alt="">
                        </div>
                    </div>
                    <div class="row color-bar">
                        <div class="col">
                            <div class="ban-headline"><?php the_field('banner_text_home') ?></div>
                        </div>
                    </div>
                    <div class="row section-end">
                        <div class="col-lg-4 img-collection">
                            <img src="<?php the_field('img1') ?>" alt="">
                        </div>
                        <div class="col-lg-4 img-collection">
                            <img src="<?php the_field('img2') ?>" alt="">
                        </div>
                        <div class="col-lg-4 img-collection">
                            <img src="<?php the_field('img3') ?>" alt="">
                        </div>
                    </div>
                    <div class="row card-container">
                        <div class="col-lg-9 card-end">
                            <p><?php the_field('card_text') ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

<?php get_footer() ?>