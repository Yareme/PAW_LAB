<?php
/* Smarty version 4.1.0, created on 2022-04-05 11:39:59
  from 'C:\xampp\htdocs\yarem\app\views\LoginV.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624c0e6fc43011_35861004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dad62db2a7828c8a41ff264b0c3a4fe6e11f7c1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yarem\\app\\views\\LoginV.tpl',
      1 => 1649150896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_624c0e6fc43011_35861004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2056330708624c0e6fbd0088_70814341', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2056330708624c0e6fbd0088_70814341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2056330708624c0e6fbd0088_70814341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
