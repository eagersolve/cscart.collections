<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 16:57:58
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\addons\help_center\hooks\index\toolbar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:971833540625585662ab861-70054361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3075e6cb8c01187deb6a4dcbccdba5a0d6283ed6' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\toolbar.post.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '971833540625585662ab861-70054361',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_625585662d5be3_77677572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625585662d5be3_77677572')) {function content_625585662d5be3_77677572($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\function.include_ext.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center" href="#">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign help-center__show-help-center--icon"),$_smarty_tpl);?>

        </a>
    </div>
<?php }?>
<?php }} ?>
