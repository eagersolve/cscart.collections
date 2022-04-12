<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:01:29
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\addons\bestsellers\hooks\products\search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9733698586255863922e589-94806751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f21e4da7de0492b77a52c2bd4d4967901bbc4691' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\addons\\bestsellers\\hooks\\products\\search_form.post.tpl',
      1 => 1643359489,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9733698586255863922e589-94806751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62558639250518_42205061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62558639250518_42205061')) {function content_62558639250518_42205061($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sales_amount'));
?>
<div class="control-group">
    <label class="control-label" for="sales_amount_from"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
    <div class="controls">
        <input type="text" name="sales_amount_from" id="sales_amount_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" /> - <input type="text" name="sales_amount_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
    </div>
</div><?php }} ?>
