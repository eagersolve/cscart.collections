<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 18:37:32
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\addons\seo\hooks\categories\fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122216432862559cbc7991c2-62110468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0371dc6e35faefbc515d9e9850f040df44c8a4ab' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\addons\\seo\\hooks\\categories\\fields_to_edit.post.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '122216432862559cbc7991c2-62110468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62559cbc7bc128_84641022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62559cbc7bc128_84641022')) {function content_62559cbc7bc128_84641022($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('seo_name'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <label class="checkbox" for="seo_name">
    	<input type="checkbox" value="seo_name" id="seo_name" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
    <?php echo $_smarty_tpl->__("seo_name");?>
</label>
<?php }?><?php }} ?>
