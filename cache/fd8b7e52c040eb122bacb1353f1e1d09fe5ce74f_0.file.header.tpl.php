<?php
/* Smarty version 3.1.31, created on 2019-01-30 21:24:40
  from "/home/criartso/public_html/inoveassessoriadp.com.br/bitform001/themes/deepblue/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c521618e193b1_77904478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd8b7e52c040eb122bacb1353f1e1d09fe5ce74f' => 
    array (
      0 => '/home/criartso/public_html/inoveassessoriadp.com.br/bitform001/themes/deepblue/header.tpl',
      1 => 1548650162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c521618e193b1_77904478 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_template_hook')) require_once '/home/criartso/public_html/inoveassessoriadp.com.br/bitform001/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_function_ft_include')) require_once '/home/criartso/public_html/inoveassessoriadp.com.br/bitform001/global/smarty_plugins/function.ft_include.php';
?>
<!DOCTYPE html>
<html dir="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['special_text_direction'];?>
">
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/favicon.ico">
  <?php echo smarty_function_template_hook(array('location'=>"head_top"),$_smarty_tpl);?>

  <?php echo '<script'; ?>
>
  //<![CDATA[
  var g = {
    root_url:       "<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
",
    error_colours:  ["ffbfbf", "ffeded"],
    notify_colours: ["c6e2ff", "f2f8ff"],
    js_debug:       <?php echo $_smarty_tpl->tpl_vars['g_js_debug']->value;?>

  };
  //]]>
  <?php echo '</script'; ?>
>
  <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/css/main.css?v=3_0_0">
  <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/css/styles.css?v=3_0_0">
  <link href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/css/smoothness/jquery-ui-1.8.14.custom.css" rel="stylesheet" type="text/css"/>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/scripts/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/scripts/jquery-ui-1.8.14.custom.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/scripts/general.js?v=3_0_0"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/scripts/rsv.js?v=3_0_0"><?php echo '</script'; ?>
>
  <?php echo $_smarty_tpl->tpl_vars['head_string']->value;?>

  <?php echo $_smarty_tpl->tpl_vars['head_js']->value;?>

  <?php echo $_smarty_tpl->tpl_vars['head_css']->value;?>


  <?php echo smarty_function_template_hook(array('location'=>"head_bottom"),$_smarty_tpl);?>

</head>
<body>

<div id="container" class="admin_container">

	<div id="header"><span
	  style="float:right"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/header_right_shadow.jpg" width="7" height="71" /></span><span
	  style="float:right"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/header_right.jpg" width="10" height="71" /></span>
    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['logo_link']) && !empty($_smarty_tpl->tpl_vars['settings']->value['logo_link'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['settings']->value['logo_link'];?>
"><?php }?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/header_logo.jpg" width="200" height="71" border="0" />
    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['logo_link']) && !empty($_smarty_tpl->tpl_vars['settings']->value['logo_link'])) {?></a><?php }?>
    </div>

	  <div class="outer">
	  <div class="inner">
	    <div class="float-wrap">
	      <table cellspacing="0" cellpadding="0" width="990">
	      <tr>
	        <td width="200" valign="top">

		        <div id="left">
		          <div id="left_nav_top">
		            <?php if ($_smarty_tpl->tpl_vars['is_logged_in']->value && isset($_smarty_tpl->tpl_vars['settings']->value['program_version'])) {?>
					  <?php if ($_smarty_tpl->tpl_vars['settings']->value['release_type'] == "alpha") {?>
					    <b><?php echo $_smarty_tpl->tpl_vars['settings']->value['program_version'];?>
-alpha-<?php echo $_smarty_tpl->tpl_vars['settings']->value['release_date'];?>
</b>
                      <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['release_type'] == "beta") {?>
					    <b><?php echo $_smarty_tpl->tpl_vars['settings']->value['program_version'];?>
-beta-<?php echo $_smarty_tpl->tpl_vars['settings']->value['release_date'];?>
</b>
		              <?php } else { ?>
		                <b><?php echo $_smarty_tpl->tpl_vars['settings']->value['program_version'];?>
</b>
		              <?php }?>
		              <?php if ($_smarty_tpl->tpl_vars['account']->value['account_type'] == "admin") {?>
                         &nbsp;<a href="#" onclick="return ft.check_updates()" class="update_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
</a>
		              <?php }?>
		      	  	<?php } else { ?>
		      	  	  <div style="height: 20px"> </div>
		      	    <?php }?>
		          </div>

                  <?php echo smarty_function_ft_include(array('file'=>"menu.tpl"),$_smarty_tpl);?>


		        </div>
	        </td>
	        <td valign="top">

              <div id="main_top"></div>
              <span style="position: absolute; right: 0px;"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/main_right_shadow.jpg" width="7" height="292" /></span>

                  <div class="content_wrap">

                    <div id="page_content">

<?php }
}
