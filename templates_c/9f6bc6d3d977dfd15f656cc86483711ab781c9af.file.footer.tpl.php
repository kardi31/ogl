<?php /* Smarty version Smarty-3.1.15, created on 2015-12-04 15:37:05
         compiled from ".\templates\new_red\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23476564e1eb4193c34-22035708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f6bc6d3d977dfd15f656cc86483711ab781c9af' => 
    array (
      0 => '.\\templates\\new_red\\footer.tpl',
      1 => 1449239820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23476564e1eb4193c34-22035708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564e1eb41bc9b2_38791055',
  'variables' => 
  array (
    'bottom1ads' => 0,
    'ad' => 0,
    'bottom2ads' => 0,
    'bottom3ads' => 0,
    'lang' => 0,
    'site_url' => 0,
    'rfotu' => 0,
    'user_id' => 0,
    'vipendd' => 0,
    'vip_time' => 0,
    'rfot' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564e1eb41bc9b2_38791055')) {function content_564e1eb41bc9b2_38791055($_smarty_tpl) {?><div class="bxSliderBottomWrapper">
<ul class="bxsliderBottom bxslider">
    <?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bottom1ads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value) {
$_smarty_tpl->tpl_vars['ad']->_loop = true;
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['website'];?>
"  title='<?php echo $_smarty_tpl->tpl_vars['ad']->value['name'];?>
'><img title='<?php echo $_smarty_tpl->tpl_vars['ad']->value['name'];?>
' alt='<?php echo $_smarty_tpl->tpl_vars['ad']->value['name'];?>
' src='/images/ad/<?php echo $_smarty_tpl->tpl_vars['ad']->value['file'];?>
' /></a></li>
    <?php } ?>
</ul>
</div>
<div class="bxSliderBottomWrapper">
<ul class="bxsliderBottom bxslider">
    <?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bottom2ads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
</div>
<div class="bxSliderBottomWrapper">
<ul class="bxsliderBottom bxslider">
    <?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bottom3ads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
</div>
<script>
    $('.bxsliderBottom').bxSlider({
        mode: 'fade',
        slideWidth: 300,
        auto: true,
        pause: 12000,
        
        controls:false,
        randomStart: true,
        captions: false,
        pager: false
    });
</script>
	</div>


<div class="site_footer">
	<div class="site_footer_left">
		<ul class="footer_menu">
			<li><a href="regulamin/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[645];?>
</a></li>
			<li><a href="polityka/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[600];?>
</a></li>

			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
kontakt/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[9];?>
</a></li>
		</ul>
	</div>
	<div class="site_footer_right">&copy; &nbsp;2015 </div>
</div>

<div> <!----Reklama stopka----->
<?php if ($_smarty_tpl->tpl_vars['rfotu']->value==1||($_smarty_tpl->tpl_vars['rfotu']->value==2&&$_smarty_tpl->tpl_vars['user_id']->value=='')||($_smarty_tpl->tpl_vars['rfotu']->value==3&&$_smarty_tpl->tpl_vars['vipendd']->value<=$_smarty_tpl->tpl_vars['vip_time']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['rfot']->value;?>

<?php }?>		
<!----Reklama profi-----></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/cookie-alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>






<?php }} ?>
