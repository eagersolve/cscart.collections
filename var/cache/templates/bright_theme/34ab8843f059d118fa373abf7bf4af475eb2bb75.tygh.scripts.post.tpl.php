<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:08:55
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\themes\responsive\templates\addons\hybrid_auth\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1581263290625587f7e17078-84632198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34ab8843f059d118fa373abf7bf4af475eb2bb75' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\themes\\responsive\\templates\\addons\\hybrid_auth\\hooks\\index\\scripts.post.tpl',
      1 => 1649771853,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1581263290625587f7e17078-84632198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_625587f7e4dd84_06838727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625587f7e4dd84_06838727')) {function content_625587f7e4dd84_06838727($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/hybrid_auth/func.js"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/hybrid_auth/func.js"),$_smarty_tpl);
}?><?php }} ?>
