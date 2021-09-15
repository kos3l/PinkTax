    <div class="row bottom-menu d-lg-none" >
        <div class="col">
                <?php
                $args = array(
                    'theme_location' => 'footer'
                );
                ?>
                <?php wp_nav_menu( $args); ?>
        </div>
    </div>
</div>
    <?php wp_footer(); ?>
</body>
</html>