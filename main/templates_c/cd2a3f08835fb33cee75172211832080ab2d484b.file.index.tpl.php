<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 09:53:44
         compiled from "D:\Projects\LJ\Git\JZ\templates\global\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2652354fbbff0867aa7-62688268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd2a3f08835fb33cee75172211832080ab2d484b' => 
    array (
      0 => 'D:\\Projects\\LJ\\Git\\JZ\\templates\\global\\index.tpl',
      1 => 1426496018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2652354fbbff0867aa7-62688268',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fbbff0981cf6_22439044',
  'variables' => 
  array (
    'direct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fbbff0981cf6_22439044')) {function content_54fbbff0981cf6_22439044($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['direct']->value=='personnel') {?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/personnel_con.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['direct']->value=='user') {?>

<?php } else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/personnel_con.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
