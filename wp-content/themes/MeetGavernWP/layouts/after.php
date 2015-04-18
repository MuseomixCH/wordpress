<?php 
	
	/**
	 *
	 * Template elements after the page content
	 *
	 **/
	
	// create an access to the template main object
	global $tpl;
	
	// disable direct access to the file	
	defined('GAVERN_WP') or die('Access denied');
	
?>
		
				<?php if(gk_is_active_sidebar('mainbody_bottom')) : ?>
				<div id="gk-mainbody-bottom">
					<?php gk_dynamic_sidebar('mainbody_bottom'); ?>
				</div>
				<?php endif; ?>
			</section><!-- end of the mainbody section -->
		
			<?php 
			if(
				get_option($tpl->name . '_page_layout', 'right') != 'none' && 
				gk_is_active_sidebar('sidebar') && 
				(
					$args == null || 
					($args != null && $args['sidebar'] == true)
				)
			) : ?>
			<?php do_action('gavernwp_before_column'); ?>
			<aside id="gk-sidebar">
				<?php gk_dynamic_sidebar('sidebar'); ?>
			</aside>
			<?php do_action('gavernwp_after_column'); ?>
			<?php endif; ?>
		</div><!-- end of the #gk-mainbody-columns -->
	</div><!-- end of the .gk-page section -->
</div><!-- end of the .gk-page-wrap section -->	

<?php if(gk_is_active_sidebar('bottom')) : ?>
<div id="gk-bottom" class="gk-page widget-area">
	<?php gk_dynamic_sidebar('bottom'); ?>
</div>
<?php endif; ?>