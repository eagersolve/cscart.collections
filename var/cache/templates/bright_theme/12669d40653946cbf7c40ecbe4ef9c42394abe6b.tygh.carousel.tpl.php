<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:08:18
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\themes\responsive\templates\addons\banners\blocks\carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2012879267625587d22e9915-43080587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12669d40653946cbf7c40ecbe4ef9c42394abe6b' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\themes\\responsive\\templates\\addons\\banners\\blocks\\carousel.tpl',
      1 => 1649771849,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2012879267625587d22e9915-43080587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'block' => 0,
    'banner' => 0,
    'language_direction' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_625587d244a043_45679917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625587d244a043_45679917')) {function content_625587d244a043_45679917($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('prev_page','next','prev_page','next'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div id="banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel ty-scroller"
        data-ca-scroller-item="1"
        data-ca-scroller-item-desktop="1"
        data-ca-scroller-item-desktop-small="1"
        data-ca-scroller-item-tablet="1"
        data-ca-scroller-item-mobile="1"
    >
        <?php  $_smarty_tpl->tpl_vars["banner"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["banner"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["banner"]->key => $_smarty_tpl->tpl_vars["banner"]->value) {
$_smarty_tpl->tpl_vars["banner"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["banner"]->key;
?>
            <div class="ty-banner__image-item ty-scroller__item">
                <?php if ($_smarty_tpl->tpl_vars['banner']->value['type']=="G"&&$_smarty_tpl->tpl_vars['banner']->value['main_pair']['image_id']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url']!='') {?><a class="banner__link" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target']=="B") {?>target="_blank"<?php }?>><?php }?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair'],'class'=>"ty-banner__image",'image_width'=>$_smarty_tpl->tpl_vars['block']->value['content']['width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['content']['height']), 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url']!='') {?></a><?php }?>
                <?php } else { ?>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

                    </div>
                <?php }?>
            </div>
        <?php } ?>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
');
        if (slider.length) {
            slider.owlCarousel({
                direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: 1,
                singleItem : true,
                slideSpeed: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['speed'])===null||$tmp==='' ? 400 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                autoPlay: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['delay']>0 ? $_smarty_tpl->tpl_vars['block']->value['properties']['delay']*1000 : "false", ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="N") {?>
                    pagination: false
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="D") {?>
                    pagination: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="P") {?>
                    pagination: true,
                    paginationNumbers: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="A") {?>
                    pagination: false,
                    navigation: true,
                    navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
']
                <?php }?>
            });
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/banners/blocks/carousel.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/banners/blocks/carousel.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div id="banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel ty-scroller"
        data-ca-scroller-item="1"
        data-ca-scroller-item-desktop="1"
        data-ca-scroller-item-desktop-small="1"
        data-ca-scroller-item-tablet="1"
        data-ca-scroller-item-mobile="1"
    >
        <?php  $_smarty_tpl->tpl_vars["banner"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["banner"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["banner"]->key => $_smarty_tpl->tpl_vars["banner"]->value) {
$_smarty_tpl->tpl_vars["banner"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["banner"]->key;
?>
            <div class="ty-banner__image-item ty-scroller__item">
                <?php if ($_smarty_tpl->tpl_vars['banner']->value['type']=="G"&&$_smarty_tpl->tpl_vars['banner']->value['main_pair']['image_id']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url']!='') {?><a class="banner__link" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target']=="B") {?>target="_blank"<?php }?>><?php }?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair'],'class'=>"ty-banner__image",'image_width'=>$_smarty_tpl->tpl_vars['block']->value['content']['width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['content']['height']), 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url']!='') {?></a><?php }?>
                <?php } else { ?>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

                    </div>
                <?php }?>
            </div>
        <?php } ?>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
');
        if (slider.length) {
            slider.owlCarousel({
                direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: 1,
                singleItem : true,
                slideSpeed: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['speed'])===null||$tmp==='' ? 400 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                autoPlay: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['delay']>0 ? $_smarty_tpl->tpl_vars['block']->value['properties']['delay']*1000 : "false", ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="N") {?>
                    pagination: false
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="D") {?>
                    pagination: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="P") {?>
                    pagination: true,
                    paginationNumbers: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="A") {?>
                    pagination: false,
                    navigation: true,
                    navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
']
                <?php }?>
            });
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
