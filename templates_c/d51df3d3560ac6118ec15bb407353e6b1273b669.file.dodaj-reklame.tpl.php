<?php /* Smarty version Smarty-3.1.15, created on 2015-12-01 13:35:17
         compiled from ".\templates\new_red\dodaj-reklame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29318565d81d64ee290-54367790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd51df3d3560ac6118ec15bb407353e6b1273b669' => 
    array (
      0 => '.\\templates\\new_red\\dodaj-reklame.tpl',
      1 => 1448973137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29318565d81d64ee290-54367790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_565d81d65441c4_87543571',
  'variables' => 
  array (
    'ust' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565d81d65441c4_87543571')) {function content_565d81d65441c4_87543571($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




	<div class="left">
            <h2>Dodaj reklame</h2>
            <?php if (isset($_GET['msg2'])) {?>
                
                <div style='font-size:20px;font-weight:bold'><?php echo $_GET['msg2'];?>
</div>
            <?php }?>
            Cennik reklam : <br />
            Reklama na górze strony(728x90px) - <?php echo $_smarty_tpl->tpl_vars['ust']->value['reklama_top'];?>
 kredytów <br />
            
            Reklama po prawej stronie nad menu (210x210px) - <?php echo $_smarty_tpl->tpl_vars['ust']->value['reklama_right'];?>
 kredytów <br />
            
            Reklama na dole strony (300x250px) - <?php echo $_smarty_tpl->tpl_vars['ust']->value['reklama_bottom'];?>
 kredytów. <br />
            
            <br />
            Reklama jest wyświetlana przez tydzień. Akceptowany format to jpg,png i gif.
            <br /><br />
            <form action="/upload-reklame.php" method="POST" enctype="multipart/form-data">

                <table>
                <tr>
                <td><b>Nazwa</b></td>
                <td><input type="text" name="name" style="width:250px;"></td>
                </tr>
                <tr>
                <tr>
                <td><b>Adres url</b></td>
                <td><input type="text" name="website" style="width:250px;"></td>
                </tr>
                <tr>
                <td valign="top"><b>Pozycja</b></td>
                <td>
                <select name="position">
                    <option value="top">Górna reklama (728x90px)</option>
                    <option value="right">Reklama w prawym panelu nad menu (210x210px)</option>
                    <option value="bottom">Reklama na dole strony (300x250)</option>
                </select>
                <br /><br />
                </td>
                </tr>
                <tr>
                <td valign="top"><b>Reklama:</b></td>
                <td><input type="hidden" name="MAX_FILE_SIZE" value="10000000000" /><input name="plik1" type="file"/> <br><small></small></td>
                </tr>

                </table>
                <input type="submit" value="Dodaj" name="addcatg">
            </form>

</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
