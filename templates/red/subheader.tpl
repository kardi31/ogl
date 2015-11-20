<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="{$site_url}"/>
<meta http-equiv="content-type" content="text/html; charset={$lang[0]}" />
<title>{$title}</title>
<meta name="keywords" content="{$meta_key}" />
<meta name="description" content="{if $omnie<>"" and !$omnie|is_array}{$omnie|strip_tags|substr:0:250}{else}{$meta_desc}{/if}" />

<link href="templates/{$templa}/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/function.js"></script>
<script type="text/javascript" src="{$site_url}js/jQuery.js"></script>
<script type="text/javascript" src="{$site_url}js/jQuery2.js"></script>
<script type="text/javascript" src="{$site_url}js/overlib_red.js"><!-- overLIB (c) Erik Bosrup --></script>

</head>

<body>