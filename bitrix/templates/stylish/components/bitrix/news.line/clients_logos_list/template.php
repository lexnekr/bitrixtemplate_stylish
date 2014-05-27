<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<ul class="banners">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
<?if($arParams["USE_LINKS"] && !empty($arItem["DETAIL_PAGE_URL"])):?>
<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><img src="<?echo $arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?echo $arItem["NAME"]?>"></a>
<?else:?>
<img src="<?echo $arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?echo $arItem["NAME"]?>">
<?endif;?>
		</li>
	<?endforeach;?>
</ul>



