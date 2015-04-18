<?php 
	
	/**
	 *
	 * Template footer
	 *
	 **/
	
	// create an access to the template main object
	global $tpl;
	
	// disable direct access to the file	
	defined('GAVERN_WP') or die('Access denied');
	
?>

	<footer id="gk-footer" class="gk-page">			
		<?php gavern_menu('footermenu', 'gk-footer-menu'); ?>
		
		<div class="gk-copyrights">
			<?php echo str_replace('\\', '', htmlspecialchars_decode(get_option($tpl->name . '_template_footer_content', ''))); ?>
				
			<a href="#top" id="gk-top-link"><?php _e('Back to top', GKTPLNAME); ?></a>
		</div>
		
		
		<?php if(get_option($tpl->name . '_styleswitcher_state', 'Y') == 'Y') : ?>
		<div id="gk-style-area">
			<?php for($i = 0; $i < count($tpl->styles); $i++) : ?>
			<div class="gk-style-switcher-<?php echo $tpl->styles[$i]; ?>">
				<?php foreach($tpl->style_colors[$tpl->styles[$i]] as $stylename => $link) : ?> 
				<a href="#<?php echo $link; ?>"><?php echo $stylename; ?></a>
				<?php endforeach; ?>
			</div>
			<?php endfor; ?>
		</div>
		<?php endif; ?>
		
		<?php if(get_option($tpl->name . '_template_footer_logo', 'Y') == 'Y') : ?>
		<img src="<?php echo gavern_file_uri('images/gavernwp.png'); ?>" class="gk-framework-logo" alt="GavernWP" />
		<?php endif; ?>
		
		<p class="gk-disclaimer">Copyright &copy; 2012. Designed by <a href="http://www.gavick.com">GavickPro</a> - High quality free <a href="http://www.gavick.com">WordPress Themes</a></p>
		<p class="gk-disclaimer">Icons from <a href="http://glyphicons.com">Glyphicons Free</a>, licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a></p>
	</footer>
	
	<?php if(gk_is_active_sidebar('social')) : ?>
	<div id="gk-social-icons" class="<?php echo get_option($tpl->name . '_social_icons_position', 'right'); ?>">
		<?php gk_dynamic_sidebar('social'); ?>
	</div>
	<?php endif; ?>
	
	<?php gk_load('social'); ?>
	
	<?php do_action('gavernwp_footer'); ?>
	
	<?php 
		echo stripslashes(
			htmlspecialchars_decode(
				str_replace( '&#039;', "'", get_option($tpl->name . '_footer_code', ''))
			)
		); 
	?>
	
	<?php wp_footer(); ?>
	
	<?php do_action('gavernwp_ga_code'); ?>
</body>
</html>
