<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<form id="search-form" action="<?=$arResult["FORM_ACTION"]?>" method="GET" class="navbar-form">
	<input type="text" name="q" onblur="if(this.value=='') this.value=''" onfocus="if(this.value =='' ) this.value=''">
	<a href="#" onclick="document.getElementById('search-form').submit()"></a>
</form>