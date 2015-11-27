<?php /* Smarty version Smarty-3.1.15, created on 2015-11-26 17:02:56
         compiled from ".\templates\new_red\singlefilm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142475655eeae44a843-99659780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a5dc6ad19142898cdcb12e668493f6343833049' => 
    array (
      0 => '.\\templates\\new_red\\singlefilm.tpl',
      1 => 1448553776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142475655eeae44a843-99659780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5655eeae4def87_10142336',
  'variables' => 
  array (
    'row' => 0,
    'logged' => 0,
    'lang' => 0,
    'hasAccess' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655eeae4def87_10142336')) {function content_5655eeae4def87_10142336($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
    <h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['row']->value['fo_fd'];?>
</h1>
    <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
    <center>
        <br><img src="images/lock.png"><br><br>
        <b>Aby wykupić dostęp do danego filmu musisz się zalogować. <a href="register/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[62];?>
</a>. </b>
    </center>
    <?php } else { ?>
        <?php if (!$_smarty_tpl->tpl_vars['hasAccess']->value) {?>
            <div class="singlefilmRow">
                    <div class='small'>Dodał(a): <a href="profil/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_loginn'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_id'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['row']->value['user_login'];?>
</b></a> <br /> Dnia: <?php echo $_smarty_tpl->tpl_vars['row']->value['fo_data'];?>

                        <br />
                    </div>
                    <div>

                            <div>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['fo_custom_file']!=1) {?>

                                    <img src="http://i2.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_fm'];?>
/default.jpg">

                                <?php } else { ?>
                                    <?php if (!$_smarty_tpl->tpl_vars['row']->value['fo_thumb']) {?>
                                        <video width="120" height="90" datarel='<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_id'];?>
' dataid='<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_user'];?>
'>
                                            <source src="/upload/filmy/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_user'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_fm'];?>
" type="video/mp4">
                                            <source src="/upload/filmy/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_user'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_fm'];?>
" type="video/ogg">
                                            Your browser does not support the video tag.
                                          </video>
                                        <canvas></canvas>
                                    <?php } else { ?>
                                        <img src='/upload/filmy/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_user'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_thumb'];?>
' style='width:120px;height:90px;' />
                                    <?php }?>
                                <?php }?>
                                <div class='description'><?php echo $_smarty_tpl->tpl_vars['row']->value['fo_fd'];?>
</div>                                    
                            </div>
                    </div>
            </div>
            <div class='kupDostep'>
                <?php if (isset($_GET['msg'])) {?>

                    <div class='msgInfo'>
                        <?php echo $_GET['msg'];?>

                    </div>

                <?php }?>
                <form method='POST' action='/wyk/mov-access.php'>
                        <br /><br />
                    Cena: <b><?php if ($_smarty_tpl->tpl_vars['row']->value['fo_cena']!=0) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['fo_cena'];?>
 kredytów <?php } else { ?> Darmowy <?php }?></b> <br />
                        <br />
                    <input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_id'];?>
' />
                    <input type='submit' value='Kup dostęp do filmu' />
                </form>
            </div>
        <?php } else { ?>
            <div class="singlefilmRow">
                <div class='small'>Dodał(a): <a href="profil/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_loginn'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_id'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['row']->value['user_login'];?>
</b></a> <br /> Dnia: <?php echo $_smarty_tpl->tpl_vars['row']->value['fo_data'];?>

                    <br />
                </div>
                <div>

                <div>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['fo_custom_file']!=1) {?>
                        <iframe width="500" height="360" src='http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_fm'];?>
'></iframe>

                    <?php } else { ?>
                            <video controls width="500" height="360" datarel='<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_id'];?>
' dataid='<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_user'];?>
'>
                                <source src="/upload/filmy/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_user'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_fm'];?>
" type="video/mp4">
                                <source src="/upload/filmy/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_user'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_fm'];?>
" type="video/ogg">
                                Your browser does not support the video tag.
                              </video>
                            <canvas></canvas>

                    <?php }?>
                    <div class='description'><?php echo $_smarty_tpl->tpl_vars['row']->value['fo_fd'];?>
</div>                                    
                </div>
                </div>
            </div>
        <?php }?>
    <?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
