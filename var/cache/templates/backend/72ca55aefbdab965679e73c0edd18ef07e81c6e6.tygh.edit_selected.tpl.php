<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 18:37:31
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\views\categories\components\context_menu\edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104670358262559cbb4e97d7-11581405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72ca55aefbdab965679e73c0edd18ef07e81c6e6' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\views\\categories\\components\\context_menu\\edit_selected.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '104670358262559cbb4e97d7-11581405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62559cbb516fc6_71198887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62559cbb516fc6_71198887')) {function content_62559cbb516fc6_71198887($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-categories mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form",'data'=>array("data-ca-bulkedit-disable-save-button"=>true)));?>

    </span>
</li>
<?php }} ?>
