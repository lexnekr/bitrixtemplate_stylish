<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?echo bitrix_sessid_post();?>
<form id="newsletter" action="<?=$arResult["FORM_ACTION"]?>">
	<label><?=$arParams['SUBSCRIBE_FORM_TITLE']?></label>
	<div class="clearfix">
<?foreach($arParams["RUBRICS"] as $RubID => $RubValue):?>
	<input type="hidden" name="sf_RUB_ID[]" id="sf_RUB_ID_<?=$RubValue["ID"]?>" checked  value="<?=$RubValue["ID"]?>"  />
<?endforeach;?>

<input type="text" name="sf_EMAIL" size="20" value="<?=$arResult["EMAIL"]?>" title="<?=GetMessage("subscr_form_email_title")?>" />

<a href="#" onclick="document.getElementById('newsletter').submit()" class="btn btn_">subscribe</a>
	</div>
</form>

