<?php /* Smarty version Smarty-3.1.15, created on 2015-12-04 15:41:29
         compiled from ".\templates\new_red\right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15171564e1fafe570a8-17877362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a02061fd6d8b3437d86281e9d7ca0fe97daece3' => 
    array (
      0 => '.\\templates\\new_red\\right.tpl',
      1 => 1449237557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15171564e1fafe570a8-17877362',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564e1fafe7f2a1_29551432',
  'variables' => 
  array (
    'rightads' => 0,
    'ad' => 0,
    'menu_nazwa_r' => 0,
    'user_id' => 0,
    'menu_tresc_r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564e1fafe7f2a1_29551432')) {function content_564e1fafe7f2a1_29551432($_smarty_tpl) {?></div>
<div class="site_body_right">
            <!----Reklama menu----->


<ul class="bxsliderRight bxslider">
    <?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rightads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value) {
$_smarty_tpl->tpl_vars['ad']->_loop = true;
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['website'];?>
" title='<?php echo $_smarty_tpl->tpl_vars['ad']->value['name'];?>
'><img title='<?php echo $_smarty_tpl->tpl_vars['ad']->value['name'];?>
' alt='<?php echo $_smarty_tpl->tpl_vars['ad']->value['name'];?>
' src='/images/ad/<?php echo $_smarty_tpl->tpl_vars['ad']->value['file'];?>
' /></a></li>
    <?php } ?>
</ul>
<br />
<!----Reklama menu----->

		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu_nazwa_r']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<div class="site_body_right_blok">
			<div class="m_title"><?php if ($_smarty_tpl->tpl_vars['menu_nazwa_r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="Logowanie"&&$_smarty_tpl->tpl_vars['user_id']->value>=1) {?>Menu<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['menu_nazwa_r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<?php }?></div>
			<div class="m_text"> <?php echo $_smarty_tpl->tpl_vars['menu_tresc_r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</div>
		</div>
		<?php endfor; endif; ?>
	
		</div>
<script>
            $(document).ready(function(){
    $('.bxsliderRight').bxSlider({
        mode: 'fade',
        slideWidth: 210,
        auto: true,
        controls:false,
        pause: 12000,
        randomStart: true,
        captions: false,
        pager: false
    });
            });
</script><?php }} ?>
