<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:01:27
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\components\easter_egg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18605927136255863714fa47-79109193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c80b72991bbcd1c760798fc530b81fef62cd85d' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\components\\easter_egg.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18605927136255863714fa47-79109193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6255863716fc68_00354763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6255863716fc68_00354763')) {function content_6255863716fc68_00354763($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('easter_coming_soon_message','cancel'));
?>

<div class="easter">
    <div class="easter__image-container">
        <img
            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/tux.png"
            class="easter__image"
        />
    </div>

    <p class="easter__text"><?php echo $_smarty_tpl->__("easter_coming_soon_message");?>
</p>

    <div class="easter__close-button">
        <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
    </div>
</div>
<?php }} ?>
