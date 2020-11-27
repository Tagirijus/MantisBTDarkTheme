<?php

$g_dark_theme_options = [
    'tagi_default' => 'Tagi (default)',
    'tagi_darker' => 'Tagi (darker)',
    'orange' => 'Orange',
    'ocean' => 'Ocean'
];



auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

layout_page_header( plugin_lang_get( 'title' ) );

layout_page_begin( 'manage_overview_page.php' );

print_manage_menu( 'manage_plugin_page.php' );




?>



<div class="col-md-12 col-xs-12">
<div class="space-10"></div>
<div class="form-container" >

<form id="formatting-config-form" action="<?php echo plugin_page( 'config_edit' )?>" method="post">
    <?php echo form_security_field( 'plugin_MantisBTDarkTheme_config_edit' ) ?>

<div class="widget-box widget-color-blue2">
<div class="widget-header widget-header-small">
    <h4 class="widget-title lighter">
        <i class="ace-icon fa fa-medkit"></i>
        <?php echo plugin_lang_get( 'title' ) . ': ' . plugin_lang_get( 'config' )?>
    </h4>
</div>
<div class="widget-body">
<div class="widget-main no-padding">
<div class="table-responsive">
<table class="table table-bordered table-condensed table-striped">


<!-- dark_theme_option -->
<tr>
	<th class="category">
		<?php echo plugin_lang_get( 'config_menu_option' )?>
	</th>
	<td class="center exclude_special_fields">

		<select name="dark_theme_option">
			<?php

				foreach ($g_dark_theme_options as $key => $value) {
					$option_selected = plugin_config_get( 'dark_theme_option' );
					if ($option_selected == $key) {
						$checked = ' selected';
					} else {
						$checked = '';
					}

					echo (
						'<option value="' . $key . '"' . $checked
						. '>' . $g_dark_theme_options[$key] . '</option>;'
					);
				}
			?>
		</select>

		<!-- <div style="width:98%;margin:0 auto;text-align:left;float:none">
			<label><input type="checkbox" name="menu_projects"
				<?php if( plugin_config_get( 'menu_projects' ) ) {
					echo 'checked="checked"';
				}
				?>
				style="margin-bottom:2.1ex;float:left"
				value="1">&nbsp;<?php echo plugin_lang_get( 'menu_projects_title' ) ?></label>
		</div> -->
	</td>
</tr>



</table>
</div>
</div>
    <div class="widget-toolbox padding-8 clearfix">
        <input type="submit" class="btn btn-primary btn-white btn-round" value="<?php echo lang_get( 'change_configuration' )?>" />
    </div>
</div>
</div>
</form>
</div>
</div>


<?php

layout_page_end();
