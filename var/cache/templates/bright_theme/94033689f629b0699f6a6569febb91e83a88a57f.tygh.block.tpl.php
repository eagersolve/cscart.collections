<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:08:09
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\themes\responsive\templates\views\block_manager\render\block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:731024384625587c907aff8-28833500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94033689f629b0699f6a6569febb91e83a88a57f' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\block.tpl',
      1 => 1649771827,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '731024384625587c907aff8-28833500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'runtime' => 0,
    'location_data' => 0,
    'block' => 0,
    'content_alignment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_625587c90b7633_50214007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625587c90b7633_50214007')) {function content_625587c90b7633_50214007($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("backend:views/block_manager/frontend_render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT') {?>ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>ty-float-left<?php }?>">
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
            </div>
        <?php }?>
    <?php }?>
<?php }?>
<?php }} ?>
