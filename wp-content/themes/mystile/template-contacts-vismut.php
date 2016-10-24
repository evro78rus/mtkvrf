<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Template Name: Contacts-vismut
 *
 *
 * @package WooFramework
 * @subpackage Template
 */
	get_header();
	global $woo_options;
?>
       
    <div id="content" class="page col-full">
    
    	<?php woo_main_before(); ?>
    	
		<div id="main" class="fullwidth">
           
        <?php
        	if ( have_posts() ) { $count = 0;
        		while ( have_posts() ) { the_post(); $count++;
        ?>                                                             
                <article <?php post_class(); ?>>
					
					<header>
						<h1><?php the_title(); ?></h1>
					</header>
                    
                    <section class="entry contacts-content">
	                	<?php the_content(); ?>
	               	</section><!-- /.entry -->

	               	<div class="contacts-maps">

						<div class="contacts-maps-office">
							<p>Офис:</p>
	               			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=RoS3pycEGh2Wzq8DM0t7mPQlv94HKMSn&width=500&height=250&lang=ru_RU&sourceType=constructor&scroll=false"></script>
	               		</div>
	               		<div class="contacts-maps-warehouse">
	               			<p>Нажмите на красный указатель, чтобы увидеть схему проезда на склад:</p>
	               			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=hkOwEEcuZDMZPrRc4WEap1MuMbyJQgPO&width=500&height=250&lang=ru_RU&sourceType=constructor&scroll=false"></script>
	               		</div>
	               	</div>

	               	

					<?php edit_post_link( __( '{ Edit }', 'woothemes' ), '<span class="small">', '</span>' ); ?>

                </article><!-- /.post -->
                                                    
			<?php
					} // End WHILE Loop
				} else {
			?>
				<article <?php post_class(); ?>>
                	<p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
                </article><!-- /.post -->
            <?php } ?>  
        
		</div><!-- /#main -->
		
		<?php //woo_main_after(); ?>
		
    </div><!-- /#content -->
		
<?php get_footer(); ?>