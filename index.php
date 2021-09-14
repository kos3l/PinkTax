<?php get_header() ?>


                <?php while(have_posts()): the_post() ?>
                <div class="row">
                    <div class="col">
                        <h1><?php the_title() ?></h1>
                        <p><?php the_content() ?></p>  
                    </div>
                </div>
                <?php endwhile; ?>

<?php get_footer() ?>