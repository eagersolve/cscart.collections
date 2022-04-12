<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:01:27
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\views\products\components\context_menu\edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21306242976255863702a8b8-50484431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00019d430b5f1b0681d5e6f2c34ba857f34e25e7' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\views\\products\\components\\context_menu\\edit_selected.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21306242976255863702a8b8-50484431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6255863704fdb0_36355550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6255863704fdb0_36355550')) {function content_6255863704fdb0_36355550($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-products mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>$_smarty_tpl->tpl_vars['params']->value['form']));?>

    </span>
</li>
<?php }} ?>
