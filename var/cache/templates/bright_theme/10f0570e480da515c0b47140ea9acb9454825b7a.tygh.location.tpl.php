<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:08:53
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\themes\responsive\templates\views\block_manager\render\location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254113338625587f5af17e8-89955778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10f0570e480da515c0b47140ea9acb9454825b7a' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\location.tpl',
      1 => 1649771827,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '254113338625587f5af17e8-89955778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'containers' => 0,
    'show_entry_page' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_625587f5b30543_68263371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625587f5b30543_68263371')) {function content_625587f5b30543_68263371($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('choose_your_country'));
?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['top_panel']) {?>
<div class="tygh-top-panel clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['top_panel'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['header']) {?>
<div class="tygh-header clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['header'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['content']) {?>
<div class="tygh-content clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['content'];?>

</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['containers']->value['footer']) {?>
<div class="tygh-footer clearfix" id="tygh_footer">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['footer'];?>

</div>
<?php }?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    
    <?php if ($_smarty_tpl->tpl_vars['show_entry_page']->value) {?>
        <div id="entry_page"></div>
            <?php echo '<script'; ?>
>
                $('#entry_page').ceDialog('open', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
href: fn_url('companies.entry_page'), resizable: false, title: '<?php echo $_smarty_tpl->__("choose_your_country");?>
', width: 325, height: 420, dialogClass: 'entry-page'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
            <?php echo '</script'; ?>
>
    <?php }?>
<?php }?>

<?php if (fn_check_meta_redirect($_REQUEST['meta_redirect_url'])) {?>
    <meta http-equiv="refresh" content="1;url=<?php echo htmlspecialchars(fn_url(fn_check_meta_redirect($_REQUEST['meta_redirect_url'])), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php }} ?>
