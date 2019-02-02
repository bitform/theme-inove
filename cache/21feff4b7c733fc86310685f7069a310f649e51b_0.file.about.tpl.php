<?php
/* Smarty version 3.1.31, created on 2019-01-30 22:29:02
  from "/home/criartso/public_html/inoveassessoriadp.com.br/bitform001/themes/default/admin/themes/about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c52252e638d89_21005289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21feff4b7c733fc86310685f7069a310f649e51b' => 
    array (
      0 => '/home/criartso/public_html/inoveassessoriadp.com.br/bitform001/themes/default/admin/themes/about.tpl',
      1 => 1548650126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c52252e638d89_21005289 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/criartso/public_html/inoveassessoriadp.com.br/bitform001/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0" height="35">
  <tr>
    <td width="45"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_themes.gif" width="34" height="29" /></td>
    <td class="title">
      <a href="./"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_themes'];?>
</a>
      <span class="joiner">&raquo;</span>
      <?php echo $_smarty_tpl->tpl_vars['theme_info']->value['theme_name'];?>

    </td>
  </tr>
  </table>

  <div class="subtitle underline margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_theme_info'], 'UTF-8');?>
</div>

  <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


  <table cellspacing="1" cellpadding="1" class="list_table">
  <tr>
    <td width="180" class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_theme'];?>
</td>
    <td class="pad_left_small bold"><?php echo $_smarty_tpl->tpl_vars['theme_info']->value['theme_name'];?>
</td>
  </tr>
  <tr>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_theme_description'];?>
</td>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['theme_info']->value['description'];?>
</td>
  </tr>
  <tr>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_uses_swatches'];?>
</td>
    <td class="pad_left_small">
      <?php if ($_smarty_tpl->tpl_vars['theme_info']->value['uses_swatches'] == "yes") {?>
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>

      <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>

      <?php }?>
    </td>
  </tr>
  <?php if ($_smarty_tpl->tpl_vars['theme_info']->value['uses_swatches'] == "yes") {?>
  <tr>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_available_swatches'];?>
</td>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['theme_info']->value['available_swatches'];?>
</td>
  </tr>
  <?php }?>
  <tr>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_author'];?>
</td>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['theme_info']->value['author'];?>

      <?php if ($_smarty_tpl->tpl_vars['theme_info']->value['author_email'] != '') {?>
        &#8212; <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['theme_info']->value['author_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['theme_info']->value['author_email'];?>
</a>
      <?php }?>
    </td>
  </tr>
  <?php if ($_smarty_tpl->tpl_vars['theme_info']->value['theme_link'] != '') {?>
    <tr>
      <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_author_link'];?>
</td>
      <td class="pad_left_small"><a href="<?php echo $_smarty_tpl->tpl_vars['theme_info']->value['theme_link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['theme_info']->value['theme_link'];?>
</a></td>
    </tr>
  <?php }?>
  <tr>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_version'];?>
</td>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['theme_info']->value['theme_version'];?>
</td>
  </tr>
  </table>

<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);?>

<?php }
}
