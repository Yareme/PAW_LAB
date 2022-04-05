<?php
/* Smarty version 4.1.0, created on 2022-04-05 11:35:55
  from 'C:\xampp\htdocs\yarem\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624c0d7b92fa80_56731369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd7e5b60a3f312326e17a35d3fd0ff0f31bee833' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yarem\\app\\views\\templates\\main.tpl',
      1 => 1648679388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624c0d7b92fa80_56731369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
</head>
<body>

<div class="header">
	<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<p>
		<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>

	</p>
</div>

<div class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_684391145624c0d7b92ece8_25881228', 'content');
?>

</div><!-- content -->

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1318486897624c0d7b92f4b0_28466747', 'footer');
?>

	</p>
	<p>
		 Specalizacja PAW grupa 3.
	</p>
</div>

</body>
</html><?php }
/* {block 'content'} */
class Block_684391145624c0d7b92ece8_25881228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_684391145624c0d7b92ece8_25881228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1318486897624c0d7b92f4b0_28466747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1318486897624c0d7b92f4b0_28466747',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
