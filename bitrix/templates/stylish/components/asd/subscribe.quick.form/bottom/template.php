<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

if ($arResult['ACTION']['status']=='error') {
	ShowError($arResult['ACTION']['message']);
} elseif ($arResult['ACTION']['status']=='ok') {
	ShowNote($arResult['ACTION']['message']);
}
?>
<div id="asd_subscribe_res" style="display: none;"></div>
<form action="<?= POST_FORM_ACTION_URI?>" method="post" id="newsletter">
	<?= bitrix_sessid_post()?>
	<input type="hidden" name="asd_subscribe" value="Y" />
	<input type="hidden" name="charset" value="<?= SITE_CHARSET?>" />
	<input type="hidden" name="site_id" value="<?= SITE_ID?>" />
	<input type="hidden" name="asd_rubrics" value="<?= $arParams['RUBRICS_STR']?>" />
	<input type="hidden" name="asd_show_rubrics" value="<?= $arParams['SHOW_RUBRICS']?>" />
	<input type="hidden" name="asd_not_confirm" value="<?= $arParams['NOT_CONFIRM']?>" />
	<input type="hidden" name="asd_key" value="<?= md5($arParams['JS_KEY'].$arParams['RUBRICS_STR'].$arParams['SHOW_RUBRICS'].$arParams['NOT_CONFIRM'])?>" />
<label><?=$arParams['SUBSCRIBE_FORM_NAME']?></label>
	<div class="clearfix">
	<input type="text" name="asd_email" value="" />
	<a href="#" onclick="document.getElementById('newsletter').submit()" class="btn btn_"><?=GetMessage("ASD_SUBSCRIBEQUICK_PODPISATQSA")?></a>
	</div>
	<?if (isset($arResult['RUBRICS'])):?>
		<br/>
		<?foreach($arResult['RUBRICS'] as $RID => $title):?>
		<input type="checkbox" name="asd_rub[]" id="rub<?= $RID?>" value="<?= $RID?>" />
		<label for="rub<?= $RID?>"><?= $title?></label><br/>
		<?endforeach;?>
	<?endif;?>
</form>