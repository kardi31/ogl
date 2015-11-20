<?php 
session_start();

if($_POST['od']!=""){$od=$_POST['od'];}else{$od="0";}
if($_POST['do']!=""){$do=$_POST['do'];}else{$do="0";}
if($_POST['plec']!=""){$plec=$_POST['plec'];}else{$plec="0";}
if($_POST['online']!=""){$online=$_POST['online'];}else{$online="0";}
if($_POST['img']!=""){$img=$_POST['img'];}else{$img="0";}
if($_POST['woj']!=""){$woj=$_POST['woj'];}else{$woj="0";}
if($_POST['miasto']!=""){$miasto=$_POST['miasto'];}else{$miasto="0";}

header("Location: szukaj/$od/$do/$plec/$online/$img/$woj/$miasto/");
?>