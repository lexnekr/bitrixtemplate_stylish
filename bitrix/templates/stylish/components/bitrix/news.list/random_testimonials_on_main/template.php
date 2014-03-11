<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
	<?if (!empty($arParams['TESTIMONIALS_TITLE'])):?><h4 class="indent-1"><?=$arParams['TESTIMONIALS_TITLE']?>:</h4><?endif?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
<p class="p1"><?echo $arItem["PREVIEW_TEXT"];?></p>
<span class="clr"><strong><?echo $arItem["NAME"]?></strong><?if (!empty($arItem['PROPERTIES']['TESTIMONIAL_PERSON_POST']['VALUE'])):?>, <?=$arItem['PROPERTIES']['TESTIMONIAL_PERSON_POST']['VALUE']?><?endif?>
<?if (!empty($arItem['PROPERTIES']['TESTIMONIAL_PERSON_COMPANY']['VALUE'])):?>, <?=$arItem['PROPERTIES']['TESTIMONIAL_PERSON_COMPANY']['VALUE']?><?endif?>
<?if (!empty($arItem['PROPERTIES']['TESTIMONIAL_PERSON_SITE']['VALUE'])):?>, 
	<?if($arParams["USE_LINKS"]=="Y"):?>
		<a class="link-2" <?if($arParams["USE_LINKS_NOFOLLOW"]=="Y"):?>rel="nofollow" <?endif?><?if($arParams["USE_LINKS_BLANK"]=="Y"):?>target="_blank" <?endif?>href="http://<?=$arItem['PROPERTIES']['TESTIMONIAL_PERSON_SITE']['VALUE']?>"><?=$arItem['PROPERTIES']['TESTIMONIAL_PERSON_SITE']['VALUE']?></a>
	<?else:?>
		<?=$arItem['PROPERTIES']['TESTIMONIAL_PERSON_SITE']['VALUE']?>
	<?endif?>
<?endif?></span>
	</div><br/>
<?endforeach;?>


