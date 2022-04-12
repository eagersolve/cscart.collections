<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:01:29
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\addons\tags\hooks\products\search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1832265556625586391741a4-22737247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3f8beb469efc9b6f02dad975494c27da22efdc4' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\addons\\tags\\hooks\\products\\search_form.post.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1832265556625586391741a4-22737247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6255863919be70_10689012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6255863919be70_10689012')) {function content_6255863919be70_10689012($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div>
<?php }?><?php }} ?>
