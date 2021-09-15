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
                        <div class="col">
                            <div class="scroll-text"><img src="<?php the_field('arrow') ?>" alt=""> <p><?php the_field('scroll') ?></p></div>
                            <div class="scroll-text"><img src="<?php the_field('arrow') ?>" alt=""> <p><?php the_field('scroll') ?></p></div>
                            <div class="scroll-text"><img src="<?php the_field('arrow') ?>" alt=""> <p><?php the_field('scroll') ?></p></div>
                            <p><?php the_field('scroll') ?></p></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>


<?php get_footer() ?>