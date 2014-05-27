<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$d = ceil(count($arResult["ITEMS"])/4);
$i = 0; 
?>

<?if (!empty($arParams["2_COL_TITLE"])):?><h4 class="indent-1"><?=$arParams['2_COL_TITLE']?>:</h4><?endif?>
<?if (!empty($arParams["2_COL_INTRO_TEXT"])):?><p class="lead"><?=$arParams['2_COL_INTRO_TEXT']?></p><?endif?>
<div class="lists-width2">
<ul class="list-2"><?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
      <?if( $i > 0 && $i%$d == 0):?></ul><ul class="list-2"><?endif;?>
	<li id="<?=$this->GetEditAreaId($arItem['ID']);?>"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></li>
      <?$i++;?>
<?endforeach;?></ul>
	</div>

<?if (!empty($arParams["2_COL_MORE_LINK"]) && !empty($arParams["2_COL_MORE_NAME"])):?><a href="<?=$arParams['2_COL_MORE_LINK']?>" class="link"><?=$arParams['2_COL_MORE_NAME']?></a><?endif?>