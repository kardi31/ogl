<?php /* Smarty version Smarty-3.1.15, created on 2015-12-04 15:41:29
         compiled from ".\templates\new_red\women.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21952564e1fb4e92e19-09225843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e39adebac910c4079be9a6b997612fea39037f7' => 
    array (
      0 => '.\\templates\\new_red\\women.tpl',
      1 => 1449239997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21952564e1fb4e92e19-09225843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564e1fb504bec9_92069839',
  'variables' => 
  array (
    'lang' => 0,
    'u_id' => 0,
    'u_loginn' => 0,
    'u_wiek' => 0,
    'u_miasto' => 0,
    'u_woj' => 0,
    'u_plec' => 0,
    'u_login' => 0,
    'u_img' => 0,
    'u_plecnr' => 0,
    'site_url' => 0,
    'u_online' => 0,
    'u_vip' => 0,
    'gtime' => 0,
    'k' => 0,
    'podstron' => 0,
    'strona' => 0,
    'page_m' => 0,
    'page_start' => 0,
    'page_end' => 0,
    'page_p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564e1fb504bec9_92069839')) {function content_564e1fb504bec9_92069839($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<div class="left">


    <h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[415];?>
</h1>

    <p>

    <center>
        <table >
            <tr>
                <?php $_smarty_tpl->tpl_vars['k'] = new Smarty_variable(0, null, 0);?>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['u_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>

                    <td class="profil-m">
                        <a href="profil/<?php echo $_smarty_tpl->tpl_vars['u_loginn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['u_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/" style="text-decoration:none;" onmouseover="return overlib('<?php echo $_smarty_tpl->tpl_vars['lang']->value[12];?>
 <?php echo $_smarty_tpl->tpl_vars['u_wiek']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<br/><?php echo $_smarty_tpl->tpl_vars['lang']->value[13];?>
 <?php echo $_smarty_tpl->tpl_vars['u_miasto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<br/><?php echo $_smarty_tpl->tpl_vars['lang']->value[14];?>
 <?php echo $_smarty_tpl->tpl_vars['u_woj']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<br/><?php echo $_smarty_tpl->tpl_vars['lang']->value[15];?>
 <?php echo $_smarty_tpl->tpl_vars['u_plec']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
', CAPTION, '<b><center><?php echo $_smarty_tpl->tpl_vars['u_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</center>');" onmouseout="return nd();"><?php if ($_smarty_tpl->tpl_vars['u_img']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=='') {?><?php if ($_smarty_tpl->tpl_vars['u_plecnr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="1") {?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/women.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['u_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/men.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['u_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" /><?php }?><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
upload/zdjecia/<?php echo $_smarty_tpl->tpl_vars['u_img']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['u_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" /><?php }?><br/><center><?php if ($_smarty_tpl->tpl_vars['u_online']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]>=1) {?><img src="images/online.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[16];?>
" alt="Online" key="On"><?php } else { ?><img src="images/ofline.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[17];?>
" alt="Offline" key="Off"><?php }?><b><?php echo $_smarty_tpl->tpl_vars['u_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b><?php if ($_smarty_tpl->tpl_vars['u_vip']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]>=$_smarty_tpl->tpl_vars['gtime']->value) {?><?php echo $_smarty_tpl->tpl_vars['lang']->value[700];?>
<?php }?></center></a></td>
                    <?php if ($_smarty_tpl->tpl_vars['k']->value%5==4) {?></tr><?php }?>
<?php if ($_smarty_tpl->tpl_vars['k']->value%5==4&&$_smarty_tpl->tpl_vars['k']->value!=14) {?><tr><?php }?>
<?php echo $_smarty_tpl->tpl_vars['k']->value++;?>

            <?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['k']->value%5!=4) {?></tr><?php }?>
        </table>
    </center>

    <?php if ($_smarty_tpl->tpl_vars['podstron']->value>1) {?><br><br>
        <center>
            <table border="0">
                <tr>
                    <td style="width:20px;height:20px;" class="td_hover" align="center"><?php if ($_smarty_tpl->tpl_vars['strona']->value>1) {?><a href="kobiety/s-1" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[654];?>
"><<</a><?php } else { ?><<<?php }?></td>
                    <td style="width:20px;height:20px;" class="td_hover" align="center"><?php if ($_smarty_tpl->tpl_vars['page_m']->value>=1) {?><a href="kobiety/s-<?php echo $_smarty_tpl->tpl_vars['page_m']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[656];?>
: <?php echo $_smarty_tpl->tpl_vars['page_m']->value;?>
"><</a><?php } else { ?><<?php }?></td>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['strona'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['name'] = 'strona';
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'] = (int) $_smarty_tpl->tpl_vars['page_start']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['page_end']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['total']);
?>

                        <td style="width:20px;height:20px;" class="td_hover" align="center"><a href="kobiety/s-<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['strona']['index']+1;?>
"><?php if ($_smarty_tpl->tpl_vars['strona']->value==$_smarty_tpl->getVariable('smarty')->value['section']['strona']['index']+1) {?><b><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['strona']['index']+1;?>
</b><?php } else { ?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['strona']['index']+1;?>
<?php }?></a></td>

                    <?php endfor; endif; ?>

                    <td style="width:20px;height:20px;" class="td_hover" align="center"><?php if ($_smarty_tpl->tpl_vars['page_p']->value<=$_smarty_tpl->tpl_vars['podstron']->value) {?><a href="kobiety/s-<?php echo $_smarty_tpl->tpl_vars['page_p']->value;?>
"  title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[656];?>
: <?php echo $_smarty_tpl->tpl_vars['page_p']->value;?>
">></a><?php } else { ?>><?php }?></td>
                    <td style="width:20px;height:20px;" class="td_hover" align="center"><?php if ($_smarty_tpl->tpl_vars['strona']->value!=$_smarty_tpl->tpl_vars['podstron']->value) {?><a href="kobiety/s-<?php echo $_smarty_tpl->tpl_vars['podstron']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[655];?>
(<?php echo $_smarty_tpl->tpl_vars['podstron']->value;?>
)">>></a><?php } else { ?>>><?php }?></td>
                </tr>
            </table>
        </center>
    <?php }?>


</p>


</div>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
