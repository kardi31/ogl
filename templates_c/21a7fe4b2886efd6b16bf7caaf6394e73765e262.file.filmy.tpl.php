<?php /* Smarty version Smarty-3.1.15, created on 2015-11-25 18:15:52
         compiled from ".\templates\new_red\filmy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159565655e42cdc6c50-87472134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a7fe4b2886efd6b16bf7caaf6394e73765e262' => 
    array (
      0 => '.\\templates\\new_red\\filmy.tpl',
      1 => 1448471751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159565655e42cdc6c50-87472134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5655e42ce43c98_65655237',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655e42ce43c98_65655237')) {function content_5655e42ce43c98_65655237($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
    <h1 class="ng">Filmy</h1>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
            <div class="filmyRow">
                <a href='/filmy/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_id'];?>
'>
                    <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['fo_fd'];?>
</strong>
                </a>
                    <div class='small'>Dodał(a): <a href="profil/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_loginn'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_id'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['row']->value['user_login'];?>
</b></a> <br /> Dnia: <?php echo $_smarty_tpl->tpl_vars['row']->value['fo_data'];?>

                        <br />
                        Cena: <b><?php if ($_smarty_tpl->tpl_vars['row']->value['fo_cena']!=0) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['fo_cena'];?>
 <?php } else { ?> Darmowy <?php }?></b>
                    </div>
                    <div>
                        
                <a href='/filmy/<?php echo $_smarty_tpl->tpl_vars['row']->value['fo_id'];?>
'>
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
                </a>
                    </div>
            </div>
                            
                                    <?php if ($_smarty_tpl->tpl_vars['k']->value%3==2) {?> <div class='clearfix'></div><?php }?>
        <?php } ?>
</div>
        <style>
            .filmyRow .description{
                margin-top:8px;
                padding-left:2px;
                padding-right:2px;
            }
            .filmyRow strong{
                font-size: 14px;
                display: block;
                margin: 4px 0px;
            }
            
            .filmyRow div.small{
                font-size:11px;
                margin-bottom:5px;
            }
            .filmyRow{
                width:33%;
                float:left;
                margin-bottom:20px;
            }
            .clearfix:after,.clearfix:before{
                display:block;
                clear:both;
                content:" ";
            }
            
        </style>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
