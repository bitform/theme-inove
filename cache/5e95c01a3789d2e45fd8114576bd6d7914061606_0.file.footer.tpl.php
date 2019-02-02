<?php
/* Smarty version 3.1.31, created on 2019-01-30 21:24:40
  from "/home/criartso/public_html/inoveassessoriadp.com.br/bitform001/themes/deepblue/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c521618eb0ce9_16463334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e95c01a3789d2e45fd8114576bd6d7914061606' => 
    array (
      0 => '/home/criartso/public_html/inoveassessoriadp.com.br/bitform001/themes/deepblue/footer.tpl',
      1 => 1548650162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c521618eb0ce9_16463334 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_show_page_load_time')) require_once '/home/criartso/public_html/inoveassessoriadp.com.br/bitform001/global/smarty_plugins/function.show_page_load_time.php';
?>
                        </div>
                    </div>

                </td>
            </tr>
            </table>

            </div>

            <div class="clear"></div>

        </div>
    </div>
</div>

<div id="footer">
    <span style="float:right"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/footer_right.jpg" width="16" height="37" /></span>
    <span style="float:left"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/footer_left.jpg" width="13" height="37" /></span>
    <div style="padding-top:3px;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['footer_text']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['g_enable_benchmarking']->value) {?>
        <?php echo smarty_function_show_page_load_time(array(),$_smarty_tpl);?>

    <?php }?>
</div>

</body>
</html>
<?php }
}
