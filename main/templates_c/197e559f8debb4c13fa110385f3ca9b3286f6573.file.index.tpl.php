<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-08 04:01:23
         compiled from "D:\Projects\LJ\Git\JZ\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2775354fbb896389d02-11777825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '197e559f8debb4c13fa110385f3ca9b3286f6573' => 
    array (
      0 => 'D:\\Projects\\LJ\\Git\\JZ\\templates\\index.tpl',
      1 => 1425783682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2775354fbb896389d02-11777825',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fbb896413fa5_42012669',
  'variables' => 
  array (
    'hello' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fbb896413fa5_42012669')) {function content_54fbb896413fa5_42012669($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div>
<?php echo $_smarty_tpl->tpl_vars['hello']->value;?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
