<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:00:44
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\addons\hidpi\hooks\fileuploader\uploader.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1941305276255860c06a151-74739769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1d4f261dafb99bdbd6666da8c9c090b823b968c' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\addons\\hidpi\\hooks\\fileuploader\\uploader.post.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1941305276255860c06a151-74739769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_image' => 0,
    'show_hidpi_checkbox' => 0,
    'var_name' => 0,
    'id_var_name' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6255860c0c3632_12110901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6255860c0c3632_12110901')) {function content_6255860c0c3632_12110901($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('hidpi.upload_high_res_image','hidpi.upload_high_res_image.tooltip'));
?>
<?php if ($_smarty_tpl->tpl_vars['is_image']->value&&(($tmp = @$_smarty_tpl->tpl_vars['show_hidpi_checkbox']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <input type="hidden" name="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((defined('HIDPI_IS_HIGH_RES_FALSE') ? constant('HIDPI_IS_HIGH_RES_FALSE') : null), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_hidden" class="cm-image-field" />
    <label for="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidpi-mark checkbox">
        <input type="checkbox" name="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((defined('HIDPI_IS_HIGH_RES_TRUE') ? constant('HIDPI_IS_HIGH_RES_TRUE') : null), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['addons']->value['hidpi']['default_upload_high_res_image']==="Y") {?>checked="checked"<?php }?> class="cm-image-field" />
        <?php echo $_smarty_tpl->__("hidpi.upload_high_res_image");?>
 <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign cm-tooltip",'title'=>$_smarty_tpl->__("hidpi.upload_high_res_image.tooltip"),'icon_text'=>''),$_smarty_tpl);?>

    </label>
<?php }?>
<?php }} ?>
