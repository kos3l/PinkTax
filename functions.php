
<?php
function pinkTax_enqueue_styles() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('tax-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', "pinkTax_enqueue_styles" );

register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
    'footer' => __( 'Footer Menu'),
    'subpage' => __( 'Subpage Menu')
));

function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );
    }
    
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

    function wpb_hook_javascript_footer() {
        ?>
            <script>
                const home = document.getElementById('menu-item-209');
                const subpage = document.getElementById('menu-item-205');
                const mobileHome = document.getElementById('menu-item-210');
                const mobileSubpage = document.getElementById('menu-item-211');

                const currentStyleHome = function () {
                    home.classList.add('nav-line');
                    mobileHome.classList.add('nav-line');
                }
                const currentStyleSub = function () {
                    subpage.classList.add('nav-line');
                    mobileSubpage.classList.add('nav-line');
                }

                if (window.location.href == "http://localhost:8888/wp-site/") {
                currentStyleHome();

                } else if (window.location.href == "http://localhost:8888/wp-site/facts/") {
                    currentStyleSub();
                }

            </script>
        <?php
    }
add_action('wp_footer', 'wpb_hook_javascript_footer');