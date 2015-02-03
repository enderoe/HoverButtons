<?php
/**
 * Plugin Name: Social Brothers Hover logo
 * Plugin URI: http://socialbrothers.nl
 * Description: Silence is golden
 * Version: 1.0
 * Author: Andrew Ho
 * Author URI: http://socialbrothers.nl
 * License: Social Brothers BV
 */
 
//include( plugin_dir_path( __FILE__ ) . 'ipn/paypal-ipn.php');



function sbstylescript() {
    wp_enqueue_script('sb_modernizr', plugins_url('socialscript.js',__FILE__), array('jquery'), '1.1', true  );
	wp_enqueue_style('sbstyles', plugins_url('style.css',__FILE__) , false, false, 'screen');
	
}
 add_action( 'wp_enqueue_scripts', 'sbstylescript' );
  
  
  function devoordelenfunc() {
	ob_start();
	
	?>
	<div class="container">
		<div class="row">
			<h3 class="text-center"><?php _e('De voordelen', 'freelink'); ?></h3>
		</div>
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8 col-md-12">
				<div class="col-xs-4">
					<img src="/wp-content/themes/freelink_theme/assets/Euro-2.png" class="img-responsive img-circle center-block voordelen euro" data-alt-src="/wp-content/themes/freelink_theme/assets/Euro.png" alt-text="<?php _e('Vergeet dure bemiddelingsbureaus met hoge fees. Freelink is gratis.<br>Je betaalt alleen voor extra functies. Ons kostenmodel is helder en transparant.', 'freelink'); ?>">
				</div>
				<div class="col-xs-4">
					<img src="/wp-content/themes/freelink_theme/assets/Faster-forward.png" class="img-responsive img-circle voordelen center-block forward" data-alt-src="/wp-content/themes/freelink_theme/assets/Faster-forward-2.png" alt-text="<?php _e('Lorem ipsum fast forward','freelink'); ?>">
				</div>
				<div class="col-xs-4">
					<img src="/wp-content/themes/freelink_theme/assets/Personen.png" class="img-responsive img-circle voordelen center-block personen" data-alt-src="/wp-content/themes/freelink_theme/assets/Personen-2.png" alt-text="<?php _e('Lorem ipsum personen','freelink'); ?>" >
				</div>
			</div>
		</div>
		<div class="row">
			<div class="voordeelContainer">
			<div id="voordelentxt" class="col-lg-offset-1 col-lg-10 col-md-12 text-center" style="margin-top: 41px; padding-bottom: 70px; font-size: 18px;">
				<?php _e('Vergeet dure bemiddelingsbureaus met hoge fees. Freelink is gratis.<br>
				Je betaalt alleen voor extra functies. Ons kostenmodel is helder en transparant.','freelink'); ?>
			</div>
			</div>
		</div>
	</div>
	<?
	
	return ob_get_clean();
}
add_shortcode( 'devoordelen', 'devoordelenfunc' );