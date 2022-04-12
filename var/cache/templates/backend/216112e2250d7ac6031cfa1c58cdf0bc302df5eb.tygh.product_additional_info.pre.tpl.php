<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:01:15
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\addons\product_variations\hooks\products\product_additional_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2802025196255862b943bc8-37463192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '216112e2250d7ac6031cfa1c58cdf0bc302df5eb' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\product_additional_info.pre.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2802025196255862b943bc8-37463192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6255862b973bd8_81331496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6255862b973bd8_81331496')) {function content_6255862b973bd8_81331496($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_split'=>true,'features_inline'=>true,'features_mini'=>true), 0);?>

<?php }?>
<?php }} ?>
