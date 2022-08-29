<?php
/**
 * strahovka functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package strahovka
 */

if ( ! function_exists( 'strahovka_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function strahovka_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on strahovka, use a find and replace
		 * to change 'strahovka' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'strahovka', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'strahovka' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'strahovka_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'strahovka_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function strahovka_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'strahovka_content_width', 640 );
}
add_action( 'after_setup_theme', 'strahovka_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function strahovka_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'strahovka' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'strahovka' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'strahovka_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function strahovka_scripts() {
	wp_enqueue_style( 'strahovka-style', get_stylesheet_uri() );

	wp_enqueue_script( 'strahovka-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'strahovka-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'application-6cfd51f9c9d6ce15e191a0e3221b5d21', get_template_directory_uri() . '/js/application-6cfd51f9c9d6ce15e191a0e3221b5d21.js', array(), true );
	wp_enqueue_script( 'jquery.mask.min', get_template_directory_uri() . '/js/jquery.mask.min.js', array(), true );
	wp_enqueue_style( 'application-48cde758163e90beeb9262a014a7cae9', get_template_directory_uri() . '/css/application-48cde758163e90beeb9262a014a7cae9.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'strahovka_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// переименование «Записи»  «Посты»

add_filter('post_type_labels_post', 'rename_posts_labels');
function rename_posts_labels( $labels ){

	$new = array(
		'name'                  => 'Посты',
		'singular_name'         => 'Пост',
		'add_new'               => 'Добавить пост',
		'add_new_item'          => 'Добавить пост',
		'edit_item'             => 'Редактировать пост',
		'new_item'              => 'Новый пост',
		'view_item'             => 'Просмотреть пост',
		'search_items'          => 'Поиск постов',
		'not_found'             => 'Постов не найдено.',
		'not_found_in_trash'    => 'Постов в корзине не найдено.',
		'parent_item_colon'     => '',
		'all_items'             => 'Все посты',
		'archives'              => 'Архивы постов',
		'insert_into_item'      => 'Вставить в пост',
		'uploaded_to_this_item' => 'Загруженные для этого поста',
		'featured_image'        => 'Миниатюра поста',
		'filter_items_list'     => 'Фильтровать список постов',
		'items_list_navigation' => 'Навигация по списку постов',
		'items_list'            => 'Список постов',
		'menu_name'             => 'Посты',
		'name_admin_bar'        => 'Пост', // пункте "добавить"
	);

	return (object) array_merge( (array) $labels, $new );
}

// убрали поле "Сайт" и "Куки" из формы комментирования

add_filter( 'comment_form_default_fields', 'comment_form_default_add_my_fields' );

function comment_form_default_add_my_fields( $fields ) {
	unset( $fields['url'] );
	unset( $fields['cookies'] );
	return $fields;
}