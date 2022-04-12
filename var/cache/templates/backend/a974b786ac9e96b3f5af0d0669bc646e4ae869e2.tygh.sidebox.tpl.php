<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:00:46
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\common\sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11881888746255860e71dd41-31397783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a974b786ac9e96b3f5af0d0669bc646e4ae869e2' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\common\\sidebox.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11881888746255860e71dd41-31397783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6255860e743113_46202752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6255860e743113_46202752')) {function content_6255860e743113_46202752($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
