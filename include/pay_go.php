<?php/*v 0.1 - 19.04.2014http://d1php.plID zamówienia: $go_pay['id']Koszt: $go_pay['koszt']Opis: $go_pay['opis']Adres do przekazania przez system statusu płatnści: adres.pl/sprp.php*/if($ust['pay_typ']=="1"){	$sign = md5 ($ust['dotpay'].$go_pay['koszt'].$go_pay['opis'].$go_pay['id'].$ust['dotpay_pin']);	echo'		<html>		<head>			<title>Przekierowanie do płatności cashbill.pl</title>			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		</head>			<body >				<center>				<b>				Proszę czekać trwa przekirowanie do płatności cashbill.pl</b><br><br>				<form action="https://pay.cashbill.pl/form/pay.php" id="go_pay" name="go_pay" method="POST">				<input type="hidden" name="service" value="'.$ust['dotpay'].'"/>				<input type="hidden" name="amount" value="'.$go_pay['koszt'].'"/>				<input type="hidden" name="desc" value="'.$go_pay['opis'].'"/>				<input type="hidden" name="userdata" value="'.$go_pay['id'].'"/>				<input type="hidden" name="sign" value="'.$sign.'"/>				<input type="submit" value="Jeśli przekirowanie nie zadziała klikniuj tu" style="border:0px;background:white;font-size:14px;color:black"/>				</form>				<script>					window.onload = function()					{						document.forms[\'go_pay\'].submit()					}				</script>			</body>		</html>	';}else if($ust['pay_typ']=="2"){//------------------Transferuj------------------------	$md5sum=md5($ust['dotpay']."".$go_pay['koszt']."".$go_pay['id']."".$ust['dotpay_pin']);	header("Location: https://secure.transferuj.pl/?id=".$ust['dotpay']."&md5sum=".$md5sum."&crc=".$go_pay['id']."&opis=".$go_pay['opis']."&kwota=".$go_pay['koszt']."&pow_url=".$go_pay['pow_url']."&wyn_url=".$ust['adres']."sprp.php");//------------------/Transferuj------------------------}else{//------------------DotPay------------------------	header("Location: https://ssl.dotpay.pl/?id=".$ust['dotpay']."&control=".$go_pay['id']."&opis=".$go_pay['opis']."&kwota=".$go_pay['koszt']."&waluta=PLN&typ=0&url=".$go_pay['pow_url']."&urlc=".$ust['adres']."sprp.php?id=".$go_pay['id']."&txtguzik=".$lang[326]);	//------------------/DotPay------------------------}?>