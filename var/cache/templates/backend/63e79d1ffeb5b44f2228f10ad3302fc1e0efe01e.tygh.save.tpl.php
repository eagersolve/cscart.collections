<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:01:27
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\buttons\save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16919044406255863747fbb0-41280177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63e79d1ffeb5b44f2228f10ad3302fc1e0efe01e' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\buttons\\save.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16919044406255863747fbb0-41280177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_625586374a3bb8_74154679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625586374a3bb8_74154679')) {function content_625586374a3bb8_74154679($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>
<?php }} ?>
