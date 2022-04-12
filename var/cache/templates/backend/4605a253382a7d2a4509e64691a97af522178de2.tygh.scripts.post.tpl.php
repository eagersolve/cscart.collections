<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 16:58:04
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\addons\product_bundles\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15169839226255856c7b3805-36244927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4605a253382a7d2a4509e64691a97af522178de2' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\addons\\product_bundles\\hooks\\index\\scripts.post.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15169839226255856c7b3805-36244927',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6255856c81e906_96297519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6255856c81e906_96297519')) {function content_6255856c81e906_96297519($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('options','any_option_combinations','product_bundles.any_variation'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            options: '<?php echo strtr($_smarty_tpl->__("options"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            any_option_combinations: '<?php echo strtr($_smarty_tpl->__("any_option_combinations"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            product_bundles_any_variation: '<?php echo strtr($_smarty_tpl->__("product_bundles.any_variation"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
