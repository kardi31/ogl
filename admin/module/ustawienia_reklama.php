<?php 
if($indexphp!="ok"){exit();}


echo'
<br><br>
<form action="up_reklama.php" method="POST">
<table>
<tr>
<td valign="top"><b>'.$lang['128'].'</b></td>
<td>
<textarea name="rtop" style="width:550px;height:150px;">'.$ust['r_top'].'</textarea><br>
<input type="radio" value="0" name="rtopu"'; if($ust['r_topu']==0){echo'checked="checked"';}echo'> '.$lang['132'].'
<input type="radio" value="1" name="rtopu"'; if($ust['r_topu']==1){echo'checked="checked"';}echo'> '.$lang['133'].'
<input type="radio" value="2" name="rtopu"'; if($ust['r_topu']==2){echo'checked="checked"';}echo'> '.$lang['134'].'
<input type="radio" value="3" name="rtopu"'; if($ust['r_topu']==3){echo'checked="checked"';}echo'> '.$lang['135'].'
<br><br>
</td>
<tr>
<tr>
<td valign="top"><b>'.$lang['129'].'</b></td>
<td>
<textarea name="rpro" style="width:550px;height:150px;">'.$ust['r_pro'].'</textarea><br>
<input type="radio" value="0" name="rprou"'; if($ust['r_prou']==0){echo'checked="checked"';}echo'> '.$lang['132'].'
<input type="radio" value="1" name="rprou"'; if($ust['r_prou']==1){echo'checked="checked"';}echo'> '.$lang['133'].'
<input type="radio" value="2" name="rprou"'; if($ust['r_prou']==2){echo'checked="checked"';}echo'> '.$lang['134'].'
<input type="radio" value="3" name="rprou"'; if($ust['r_prou']==3){echo'checked="checked"';}echo'> '.$lang['135'].'
<br><br>
</td>
<tr>
<tr>
<td valign="top"><b>'.$lang['130'].'</b></td>
<td>
<textarea name="rmenu" style="width:550px;height:150px;">'.$ust['r_menu'].'</textarea><br>
<input type="radio" value="0" name="rmenuu"'; if($ust['r_menuu']==0){echo'checked="checked"';}echo'> '.$lang['132'].'
<input type="radio" value="1" name="rmenuu"'; if($ust['r_menuu']==1){echo'checked="checked"';}echo'> '.$lang['133'].'
<input type="radio" value="2" name="rmenuu"'; if($ust['r_menuu']==2){echo'checked="checked"';}echo'> '.$lang['134'].'
<input type="radio" value="3" name="rmenuu"'; if($ust['r_menuu']==3){echo'checked="checked"';}echo'> '.$lang['135'].'
<br><br>
</td>
<tr>
<tr>
<td valign="top"><b>'.$lang['131'].'</b></td>
<td>
<textarea name="rfot" style="width:550px;height:150px;">'.$ust['r_fot'].'</textarea><br>
<input type="radio" value="0" name="rfotu"'; if($ust['r_fotu']==0){echo'checked="checked"';}echo'> '.$lang['132'].'
<input type="radio" value="1" name="rfotu"'; if($ust['r_fotu']==1){echo'checked="checked"';}echo'> '.$lang['133'].'
<input type="radio" value="2" name="rfotu"'; if($ust['r_fotu']==2){echo'checked="checked"';}echo'> '.$lang['134'].'
<input type="radio" value="3" name="rfotu"'; if($ust['r_fotu']==3){echo'checked="checked"';}echo'> '.$lang['135'].'
<br><br>
</td>
<tr>
</table>
<br>
<input type="submit" Value="'.$lang['136'].'">
</form>

';


?>