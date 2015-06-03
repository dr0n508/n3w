<?php


function load_style_script (){
    wp_enqueue_style('bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('owl.carousel.css', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('google-fonts', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('owl.transitions.css', get_template_directory_uri() . '/css/owl.transitions.css');
    wp_enqueue_style('styles.css', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style('owl.theme.css', get_template_directory_uri() . '/css/owl.theme.css');
    wp_enqueue_script('jquery-1.9.1.min.js', get_template_directory_uri() . '/js/jquery-1.9.1.min.js');
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('owl.carousel.js', get_template_directory_uri() . '/js/owl.carousel.js');
    wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js');

}

add_action('wp_enqueue_scripts', 'load_style_script');


/*подддержка миниатюр*/

add_theme_support('post-thumbnails');

/*поддержка меню*/


register_nav_menus(array(
    'menu' => 'Меню',
    'footer-menu' => 'Меню в footer'
));





/*слайдер welcome*/

add_action('init', 'slider');
function slider(){
    register_post_type('slider', array(
        'public' => true,
        'supports' => array('title', 'editor'),
        'labels' => array(
            'name' => 'слайдер wellcome',
            'all_items' => 'все слайды',
            'add_new' => 'добавить слайды',
            'add_new_item' => 'слайды'

        )
    ) );
}
/***слайдер счастливых клиентов***/

add_action('init', 'clients');
function clients(){
    register_post_type('clients', array(
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'labels' => array(
            'name' => 'happy clients',
            'all_items' => 'all happy clients',
            'add_new' => 'add happy client',
            'add_new_item' => 'happy clients'
        )
    ) );
}

/*****services***/

add_action('init', 'services');
function services(){
    register_post_type('services', array(
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'labels' => array(
            'name' => 'наши сервисы',
            'all_items' => 'все сервисы',
            'add_new' => 'добавить новый сервис',
            'add_new_item' => 'наши сервисы'
        )
    ) );
}


/*****your-image****/

add_action('init', 'yourImage');
function yourImage(){
    register_post_type('yourImage', array(
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'labels' => array(
            'name' => 'yourImages',
            'all_items' => 'all yourImages',
            'add_new' => 'add yourImage',
            'add_new_item' => 'yourImages'
        )
    ) );
}

/****What Client’s Say ?**/

register_sidebar(array(


    'name' => 'Виджеты client say',
    'id' => 'client-say',
    'description' => 'виджет client say',
    'before_widget' => '<section class="testimonials col-lg-3">',
    'after_widget' => '</section>',
    'before_title' => '<h4>',
    'after_title' => "</h4>",
));





/****Why Choose Us**/

add_action('init', 'whyUs');
function whyUs(){
    register_post_type('whyUs', array(
        'public' => true,
        'supports' => array('title', 'editor'),
        'labels' => array(
            'name' => 'why chose Us',
            'all_items' => 'why chose Us',
            'add_new' => 'add why chose Us',
            'add_new_item' => 'why chose Us'
        )
    ) );
}



?>