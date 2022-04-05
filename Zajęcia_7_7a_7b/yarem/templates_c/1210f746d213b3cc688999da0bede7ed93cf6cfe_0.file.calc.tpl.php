<?php
/* Smarty version 4.1.0, created on 2022-04-05 11:42:04
  from 'C:\xampp\htdocs\yarem\app\views\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624c0eec97f178_68434058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1210f746d213b3cc688999da0bede7ed93cf6cfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yarem\\app\\views\\calc.tpl',
      1 => 1649151721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624c0eec97f178_68434058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1053039358624c0eec96e6b1_22609386', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1862861691624c0eec96f6e9_07161245', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1053039358624c0eec96e6b1_22609386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1053039358624c0eec96e6b1_22609386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Informacja dodatkowa<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1862861691624c0eec96f6e9_07161245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1862861691624c0eec96f6e9_07161245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<h2>Kalkulator Kredytowy</h2>

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>
  <form  action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
    <fieldset>


      <div class="form-row">
        <div class="col-7">
      <label for="id_kwota">Podaj kwote krydytu</label>
      <input id="id_kwota" type="text"  name="kwota"  placeholder="Kwota" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">

        </div>

        <div class="col-7">

      <label for="id_termin">Podaj termin kredytu(w latach)</label>
      <input id="id_termin" type="text"  name="termin" placeholder="Termin" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->termin;?>
">
        </div>

        <div class="col-7">

      <label for="id_procent">Podaj oprocentowanie roczne</label>
      <input id="id_procent" type="text"  name="procent"  placeholder="Oprocentowanie" class="form-control"value="<?php echo $_smarty_tpl->tpl_vars['form']->value->procent;?>
">
        </div>
      </div>

    </fieldset>
    <input type="submit"  class="btn btn-primary mt-2 mb-2 " style=" margin-left: 10px;"  value="Oblicz"  />


  </form>

  <div class="messages">

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <h4>Wystąpiły błędy: </h4>
    <ol class="err">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
    <?php }?>


    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
    <h4>Wynik</h4>
    <p class="res">
      <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

    </p>
    <?php }?>

  </div>

  <?php
}
}
/* {/block 'content'} */
}
