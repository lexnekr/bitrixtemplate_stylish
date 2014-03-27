<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<form class="form-404" id="form-search" action="<?=$arResult["FORM_ACTION"]?>">
<div class="clearfix">
<input type="text" name="q" value="" size="15" maxlength="50" />
<a href="#" onClick="document.getElementById('form-search').submit()" class="btn btn_ btn-small_"><?=GetMessage("BSF_T_SEARCH_BUTTON");?></a>
</div>
</form>