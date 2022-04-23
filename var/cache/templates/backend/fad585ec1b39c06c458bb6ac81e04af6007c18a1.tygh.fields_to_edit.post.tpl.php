<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 18:37:32
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\addons\discussion\hooks\categories\fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94408140962559cbc848d57-36718801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad585ec1b39c06c458bb6ac81e04af6007c18a1' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\addons\\discussion\\hooks\\categories\\fields_to_edit.post.tpl',
      1 => 1643359489,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '94408140962559cbc848d57-36718801',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62559cbc869aa1_56888365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62559cbc869aa1_56888365')) {function content_62559cbc869aa1_56888365($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
