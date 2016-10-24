<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
global $woo_options, $woocommerce;
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php if ( $woo_options['woo_boxed_layout'] == 'true' ) echo 'boxed'; ?> <?php if (!class_exists('woocommerce')) echo 'woocommerce-deactivated'; ?>">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php woo_title(''); ?></title>
<?php woo_meta(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
	wp_head();
	woo_head();
?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter38054550 = new Ya.Metrika({
                    id:38054550,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38054550" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</head>

<body <?php body_class(); ?>>
<?php woo_top(); ?>

<div id="wrapper">



	<div id="top">
		<nav class="col-full" role="navigation">
			<?php if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'top-menu' ) ) { ?>
			<?php wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'top-nav', 'menu_class' => 'nav fl', 'theme_location' => 'top-menu' ) ); ?>
			<?php } ?>
			
			<a class="top-btn-call" href="http://xn--b1apfy.xn--p1ai/#отправить-заявку" role="button">Заказать звонок</a>
			<a class="top-btn-price" target="_blank" href="http://xn--b1apfy.xn--p1ai/media/mtk_vismut_price_list.pdf" role="button">Скачать прайс-лист</a>

			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div id="tel-1" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<div id="tel-2" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
			<?php endif; ?>

			<?php
				/*
				if ( class_exists( 'woocommerce' ) ) {
					echo '<ul class="nav wc-nav">';
					woocommerce_cart_link();
					echo '<li class="checkout"><a href="'.esc_url($woocommerce->cart->get_checkout_url()).'">'.__('Checkout','woothemes').'</a></li>';
					echo get_search_form();
					echo '</ul>';
				}
				*/
			?>
			
		</nav>
	</div><!-- /#top -->



    <?php woo_header_before(); ?>

	<header id="header" class="col-full">

		<hgroup>

	    	<div id='header-logo'><a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></div>

	    	<?php if ( is_active_sidebar( 'sidebar-9' ) ) : ?>
				<div class="header-company-name" role="complementary">
					<?php dynamic_sidebar( 'sidebar-9' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?>
				<div class="header-company-description" role="complementary">
					<?php dynamic_sidebar( 'sidebar-10' ); ?>
				</div>
			<?php endif; ?>

		</hgroup>

        <?php woo_nav_before(); ?>

        <div class="clearfix">
	        
	        <div class="header-advantages">
	        	<ul class="header-advantages-list">
	        		<li>Конкурентная цена</li>
	        		<li>Индивидуальный подход</li>
	        		<li>Доставка с оплатой на объекте</li>
	        		<li>Резка в размер</li>
	        		<li>Работаем до последнего заказчика</li>
	        		<li>Собственный автопарк с надежными водителями</li>
	        		<li>Возможность укомплектовать заказ</li>
	        	</ul>
	        </div>

	        <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
				<div class="header-contacts" role="complementary">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div>
			<?php endif; ?>

	    </div>

	    <h3 class="nav-toggle come-down-bitch"><a href="#navigation"><mark class="websymbols">&#178;</mark> <span><?php _e('Navigation', 'woothemes'); ?></span></a></h3>

	    <div class="header-menu-border">
			<nav id="navigation" class="col-full" role="navigation">

				<?php
				if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
					wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'main-nav', 'menu_class' => 'nav fr', 'theme_location' => 'primary-menu' ) );
				} else {
				?>
		        <ul id="main-nav" class="nav fl">
					<?php if ( is_page() ) $highlight = 'page_item'; else $highlight = 'page_item current_page_item'; ?>
					<li class="<?php echo $highlight; ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Home', 'woothemes' ); ?></a></li>
					<?php wp_list_pages( 'sort_column=menu_order&depth=6&title_li=&exclude=' ); ?>
				</ul><!-- /#nav -->
		        <?php } ?>

			</nav><!-- /#navigation -->
		</div>

		<?php woo_nav_after(); ?>

	</header><!-- /#header -->

	<?php woo_content_before(); ?>