<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$d = ceil(count($arResult["SECTIONS"])/2);
$i = 0; 
?>

<?if (!empty($arParams["2_COL_TITLE"])):?><h4 class="indent-1"><?=$arParams['2_COL_TITLE']?>:</h4><?endif?>
<?if (!empty($arParams["2_COL_INTRO_TEXT"])):?><p class="lead"><?=$arParams['2_COL_INTRO_TEXT']?></p><?endif?>
<div class="lists">
	<div class="span4 left-0">
<ul class="list"><?foreach($arResult["SECTIONS"] as $arSection):?>
	<?
	$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

      <?if( $i > 0 && $i%$d == 0):?></ul></div><div class="span4"><ul class="list"><?endif;?>
	<li id="<?=$this->GetEditAreaId($arSection['ID']);?>"><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?echo $arSection["NAME"]?><?if($arParams["COUNT_ELEMENTS"]):?>&nbsp;(<?=$arSection["ELEMENT_CNT"]?>)<?endif;?></a></li>
      <?$i++;?>
<?endforeach;?></ul>
	</div>
</div>
<?if (!empty($arParams["2_COL_MORE_LINK"]) && !empty($arParams["2_COL_MORE_NAME"])):?><a href="<?=$arParams['2_COL_MORE_LINK']?>" class="link"><?=$arParams['2_COL_MORE_NAME']?></a><?endif?>
