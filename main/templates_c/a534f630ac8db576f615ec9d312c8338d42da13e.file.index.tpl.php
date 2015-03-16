<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 11:13:06
         compiled from "D:\Projects\LJ\Git\main\templates\global\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163865506acb2b17ae3-21073022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a534f630ac8db576f615ec9d312c8338d42da13e' => 
    array (
      0 => 'D:\\Projects\\LJ\\Git\\main\\templates\\global\\index.tpl',
      1 => 1426496018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163865506acb2b17ae3-21073022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'direct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5506acb2d59591_81990739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5506acb2d59591_81990739')) {function content_5506acb2d59591_81990739($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['direct']->value=='personnel') {?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/personnel_con.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['direct']->value=='user') {?>

<?php } else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/personnel_con.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
