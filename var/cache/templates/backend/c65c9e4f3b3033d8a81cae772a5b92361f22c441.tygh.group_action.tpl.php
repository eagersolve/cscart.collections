<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:01:03
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\components\context_menu\items\group_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4548750886255861f2f5d42-81972510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c65c9e4f3b3033d8a81cae772a5b92361f22c441' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\components\\context_menu\\items\\group_action.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4548750886255861f2f5d42-81972510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6255861f33abb6_32459920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6255861f33abb6_32459920')) {function content_6255861f33abb6_32459920($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
?>

<li <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']);?>

    <?php if (!$_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']['class']) {?>
        class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['menu_item_class'], ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <a <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['action_attributes']);?>

        class="cm-process-items cm-submit <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['action_class'], ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dispatch="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
]"
    >
        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>

    </a>
</li>
<?php }} ?>
