<?php
//  Essential theme supports
function hexShop_theme_setup()
{
    /** automatic feed link*/
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgets **/
    add_theme_support('customize-selective-refresh-widgets');

    // register_nav_menu
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'hexShop'),
            'footer-menu' => __('Footer Menu', 'hexShop'),
        )
    );

    // remove_theme_support
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'hexShop_theme_setup');

// hexShop_copyright_option
function hexShop_copyright_option()
{
    $hexShop_copyright = get_theme_mod('hexShop_copyright_id', __('Copyright &copy; 2024 Company Name - Design: Template Mo', 'hexShop'));
?>
    <p><?php echo wp_kses_post($hexShop_copyright); ?></p>
<?php
}
function hexShop_footer()
{
    get_template_part('/inc/template-parts/footer/footer');
}

// nec files
include_once('inc/common/scripts.php');
include_once('inc/hexShop-kirki.php');
include_once('inc/common/template-function.php');
