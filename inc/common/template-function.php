<?php
// hexShop_logo
function hexShop_logo()
{
    $hexShop_logo = get_theme_mod('hexShop_header_logo', get_template_directory_uri() . '/assets/images/logo.png');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($hexShop_logo); ?>" alt="<?php echo bloginfo(); ?>"></a>
<?php
}

// hexShop_menu
function hexShop_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'main-menu',
            'container'       => false,
            'menu_class'      => 'nav',
        )
    );
}

// hexShop_footer_widget
function hexShop_footer_widget()
{
    register_sidebar(array(
        'name'          => __('Footer Widget 01', 'hexShop'),
        'id'            => 'footer-sidebar-1',
        'description'   => __('Widgets in this area will be shown on footer.', 'hexShop'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<ul>',
        'after_title'   => '</ul>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 02', 'hexShop'),
        'id'            => 'footer-sidebar-2',
        'description'   => __('Widgets in this area will be shown on footer.', 'hexShop'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-heading"><p>',
        'after_title'   => '</p></div>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 03', 'hexShop'),
        'id'            => 'footer-sidebar-3',
        'description'   => __('Widgets in this area will be shown on footer.', 'hexShop'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-heading"><p>',
        'after_title'   => '</p></div>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 04', 'hexShop'),
        'id'            => 'footer-sidebar-4',
        'description'   => __('Widgets in this area will be shown on footer.', 'hexShop'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-heading"><p>',
        'after_title'   => '</p></div>',
    ));
}
add_action('widgets_init', 'hexShop_footer_widget');
