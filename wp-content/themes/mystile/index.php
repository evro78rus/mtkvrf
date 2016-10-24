<?php
// File Security Check
if ( ! function_exists( 'wp' ) && ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?><?php
/**
 * Index Template
 *
 * Here we setup all logic and XHTML that is required for the index template, used as both the homepage
 * and as a fallback template, if a more appropriate template file doesn't exist for a specific context.
 *
 * @package WooFramework
 * @subpackage Template
 */
	get_header();
	global $woo_options;
	
?>

    <?php if ( $woo_options[ 'woo_homepage_banner' ] == "true" ) { ?>
    	
    	<div class="homepage-banner">
    		<?php
				if ( $woo_options[ 'woo_homepage_banner' ] == "true" ) { $banner = $woo_options['woo_homepage_banner_path']; }
				if ( $woo_options[ 'woo_homepage_banner' ] == "true" && is_ssl() ) { $banner = preg_replace("/^http:/", "https:", $woo_options['woo_homepage_banner_path']); }
			?>
			    <img src="<?php echo $banner; ?>" alt="" />
    		<h1><span><?php echo $woo_options['woo_homepage_banner_headline']; ?></span></h1>
    		<div class="description"><?php echo wpautop($woo_options['woo_homepage_banner_standfirst']); ?></div>
    	</div>
    	
    <?php } ?>
    
    <div id="content" class="col-full <?php if ( $woo_options[ 'woo_homepage_banner' ] == "true" ) echo 'with-banner'; ?> <?php if ( $woo_options[ 'woo_homepage_sidebar' ] == "false" ) echo 'no-sidebar'; ?>">
    
    	<?php woo_main_before(); ?>
    
		<section id="main" class="col-left black-line">  
		
		<?php mystile_homepage_content(); ?>		
		
		<?php woo_loop_before(); ?>
		
		<?php if ( $woo_options[ 'woo_homepage_blog' ] == "true" ) { 
			$postsperpage = $woo_options['woo_homepage_blog_perpage'];
		?>
		
		<?php
			
			$the_query = new WP_Query( array( 'posts_per_page' => $postsperpage ) );
			
        	if ( have_posts() ) : $count = 0;
        ?>
        
			<?php /* Start the Loop */ ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php 
				endwhile; 
				// Reset Post Data
				wp_reset_postdata();
			?>
			
			

		<?php else : ?>
        
            <article <?php post_class(); ?>>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
            </article><!-- /.post -->
        
        <?php endif; ?>
        
        <?php } // End query to see if the blog should be displayed ?>
        
        <?php woo_loop_after(); ?>
		                
		</section><!-- /#main -->
		
		<?php woo_main_after(); ?>

        <?php if ( $woo_options[ 'woo_homepage_sidebar' ] == "true" ) get_sidebar(); ?>

        <section class="clearfix">

        	<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
				<div id='отправить-заявку' class='content-contact-form' role="complementary">
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				</div>
			<?php endif; ?>

        	<div id='calc'>
        		
        		<?php if ( is_active_sidebar( 'sidebar-11' ) ) : ?>
					<div id="before-calc">
						<?php dynamic_sidebar( 'sidebar-11' ); ?>
					</div>
				<?php endif; ?>

				<div id="mp_calc" style="width:218px;">
				<div id="mp_calc_zag" style="width:453px;text-indent:0px;font-family:Tahoma, Arial, Helvetica; font-size:12px;color:#000000;background:#C0C0C0;text-align:center;margin:0px;padding:5px 0px 5px 0px;"><a href="http://metallicheckiy-portal.ru/calculator/calculator_metalla" style="text-decoration:none;color:#000000;"><b>Расчет веса металлопроката</b></a></div><iframe id="mp_calc_fr" src="http://metallicheckiy-portal.ru/servis/calcn_v2.php?tp=2&stil=2&pmet=st&pprok=protru&wi=453&he=270&fi=E5E5E5&fz=C0C0C0&kf=FFFFFF&if=&kbs=FFFFFF&kbt=646464&tz=000000&tt=000000&tk=000000&kwi=100&khe=25&kiwi=&kihe=&swi=&she=&ko=89C53A&kn=c6c6c6&kns=FFFFFF&knt=646464&sit=12&rpr=4&rvp=2&sz=&nn=&nk=" scrolling="no" height="270px" width="453px" frameborder="0" marginheight="0" marginwidth="0"></iframe></div><!--/MP calculator-->


				<?php if ( is_active_sidebar( 'sidebar-12' ) ) : ?>
					<div id="after-calc">
						<?php dynamic_sidebar( 'sidebar-12' ); ?>
					</div>
				<?php endif; ?>

			</div>

        </section>

        <div id="providers" class="black-line">
				<h3 id="поставщики" class="homepage-headers">Наши поставщики</h3>
				<div class='providers-images'>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
				<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
					<div class='providers-text' role="complementary">
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					</div>
				<?php endif; ?>
		</div>

        <div class="homepage-content-contacts clearfix black-line">
        	<h3 id="контакты" class="homepage-headers">Контакты</h3>
        	

        	<div class='content-contacts clearfix'>
        		<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
					<div id="homepage-contacts-office" role="complementary">
						<?php dynamic_sidebar( 'sidebar-6' ); ?>
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=RoS3pycEGh2Wzq8DM0t7mPQlv94HKMSn&width=350&height=300&lang=ru_RU&sourceType=constructor&scroll=false"></script>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
					<div class="content-contacts-tel" role="complementary">
						<?php dynamic_sidebar( 'sidebar-8' ); ?>
					</div>
				<?php endif; ?>
        		
        		<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
					<div id="homepage-contacts-warehouse" role="complementary">
						<?php dynamic_sidebar( 'sidebar-7' ); ?>
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=hkOwEEcuZDMZPrRc4WEap1MuMbyJQgPO&width=350&height=300&lang=ru_RU&sourceType=constructor&scroll=false"></script>
					</div>
				<?php endif; ?>
        	</div>

        </div>

    </div><!-- /#content -->
	<script>

		jQuery(document).ready(function(){
    		jQuery("li.product a").replaceWith(function(index, oldHTML){
  				return jQuery("<div>").html(oldHTML);
			});
		});
		
	</script>
<?php get_footer(); ?>