<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php

/*-----------------------------------------------------------------------------------*/
/* Start WooThemes Functions - Please refrain from editing this section */
/*-----------------------------------------------------------------------------------*/

// Define the theme-specific key to be sent to PressTrends.
define( 'WOO_PRESSTRENDS_THEMEKEY', 'zdmv5lp26tfbp7jcwiw51ix9sj389e712' );

// WooFramework init
require_once ( get_template_directory() . '/functions/admin-init.php' );

/*-----------------------------------------------------------------------------------*/
/* Load the theme-specific files, with support for overriding via a child theme.
/*-----------------------------------------------------------------------------------*/

$includes = array(
				'includes/theme-options.php', 			// Options panel settings and custom settings
				'includes/theme-functions.php', 		// Custom theme functions
				'includes/theme-actions.php', 			// Theme actions & user defined hooks
				'includes/theme-comments.php', 			// Custom comments/pingback loop
				'includes/theme-js.php', 				// Load JavaScript via wp_enqueue_script
				'includes/sidebar-init.php', 			// Initialize widgetized areas
				'includes/theme-widgets.php',			// Theme widgets
				'includes/theme-install.php',			// Theme installation
				'includes/theme-woocommerce.php',		// WooCommerce options
				'includes/theme-plugin-integrations.php'	// Plugin integrations
				);

// Allow child themes/plugins to add widgets to be loaded.
$includes = apply_filters( 'woo_includes', $includes );

foreach ( $includes as $i ) {
	locate_template( $i, true );
}

/*-----------------------------------------------------------------------------------*/
/* You can add custom functions below */
/*-----------------------------------------------------------------------------------*/

function ddmk_widgets_init() {

	register_sidebar(array(
		'name' => __('Первый телефон', 'mystile'),
		'id' => 'sidebar-1',
		'description' => __('Этот сайдбар для размещения телефона', 'mystile'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p>',
		'after_title' => '</p>',
	) );

	register_sidebar(array(
		'name' => __('Второй телефон', 'mystile'),
		'id' => 'sidebar-2',
		'description' => __('Этот сайдбар для размещения второго телефона', 'mystile'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p>',
		'after_title' => '</p>',
	) );
	register_sidebar(array(
		'name' => __('Контакты в заголовке', 'mystile'),
		'id' => 'sidebar-3',
		'description' => __('Этот сайдбар для размещения контактов в заголовке', 'mystile'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p class="header-headers">',
		'after_title' => '</p>',
	) );
	register_sidebar(array(
		'name' => __('Текст о поставщиках', 'mystile'),
		'id' => 'sidebar-4',
		'description' => __('Этот сайдбар для изменения текста о поставщиках', 'mystile'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p class="header-headers">',
		'after_title' => '</p>',
	) );
	register_sidebar(array(
		'name' => __('Форма заявки на главной странице', 'mystile'),
		'id' => 'sidebar-5',
		'description' => __('Этот сайдбар для размещения формы', 'mystile'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p class="contacts-headers">',
		'after_title' => '</p>',
	) );
	register_sidebar(array(
		'name' => __('Текст над калькулятором на главной', 'mystile'),
		'id' => 'sidebar-11',
		'description' => __('Этот сайдбар для размещения текста', 'mystile'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p class="contacts-headers">',
		'after_title' => '</p>',
	) );
	register_sidebar(array(
		'name' => __('Текст под калькулятором на главной', 'mystile'),
		'id' => 'sidebar-12',
		'description' => __('Этот сайдбар для размещения текста', 'mystile'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p class="contacts-headers">',
		'after_title' => '</p>',
	) );
	register_sidebar(array(
		'name' => __('Адрес офиса на главной внизу', 'mystile'),
		'id' => 'sidebar-6',
		'description' => __('Этот сайдбар для добавления адреса', 'mystile'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p class="header-headers">',
		'after_title' => '</p>',
	) );
	register_sidebar(array(
		'name' => __('Адрес склада на главной внизу', 'mystile'),
		'id' => 'sidebar-7',
		'description' => __('Этот сайдбар для добавления адреса', 'mystile'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p class="header-headers">',
		'after_title' => '</p>',
	) );
	register_sidebar(array(
		'name' => __('Телефоны и почта на главной внизу', 'mystile'),
		'id' => 'sidebar-8',
		'description' => __('Этот сайдбар для добавления телефонов и почты', 'mystile'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p class="header-headers">',
		'after_title' => '</p>',
	) );
	register_sidebar(array(
		'name' => __('Название компании под лого', 'mystile'),
		'id' => 'sidebar-9',
		'description' => __('Этот сайдбар для добавления названия компании', 'mystile'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
	register_sidebar(array(
		'name' => __('Слоган под названием компании', 'mystile'),
		'id' => 'sidebar-10',
		'description' => __('Этот сайдбар для добавления слогана компании', 'mystile'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'ddmk_widgets_init' );

/*-----------------------------------------------------------------------------------*/
/* Don't add any code below here or the sky will fall down */
/*-----------------------------------------------------------------------------------*/
?>