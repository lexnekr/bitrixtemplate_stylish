<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arParams["2_COL_TITLE"])):?><h4 class="indent-1"><?=$arParams['2_COL_TITLE']?>:</h4><?endif?>
<?if (!empty($arParams["2_COL_INTRO_TEXT"])):?><p class="lead"><?=$arParams['2_COL_INTRO_TEXT']?></p><?endif?>

<div class="lists">
<?if ($arParams["1COLUMN_TYPE"] == "COLUMN_TYPE_ELEMENT"):?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "1_column", array(
	"IBLOCK_ID" => $arParams["1COLUMN_IBLOCK_ID"],
	"NEWS_COUNT" => $arParams["1COLUMN_NEWS_COUNT"],
	"FILTER_NAME" => "\$arrFilter1",
	"CACHE_TYPE" => $arParams["CACHE_TYPE"],
	"CACHE_TYPE" => $arParams["CACHE_TIME"],
	"CACHE_TYPE" => $arParams["CACHE_FILTER"],
	"CACHE_TYPE" => $arParams["CACHE_GROUPS"],
	"SET_TITLE" => "N",
	"COL_TYPE_LEFT" => "Y",
	),
	false
);?>
<?else:?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "1_column", array(
	"IBLOCK_ID" => $arParams["1COLUMN_IBLOCK_ID"],
	"COUNT_ELEMENTS" => $arParams["1COLUMN_COUNT_ELEMENTS"],
	"TOP_DEPTH" => $arParams["1COLUMN_TOP_DEPTH"],
	"CACHE_TYPE" => $arParams["CACHE_TYPE"],
	"CACHE_TYPE" => $arParams["CACHE_TIME"],
	"CACHE_TYPE" => $arParams["CACHE_FILTER"],
	"CACHE_TYPE" => $arParams["CACHE_GROUPS"],
	"ADD_SECTIONS_CHAIN" => "N",
	"COL_TYPE_LEFT" => "Y"
	),
	false
);?>
<?endif?>

<?if ($arParams["2COLUMN_TYPE"] == "COLUMN_TYPE_ELEMENT"):?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "1_column", array(
	"IBLOCK_ID" => $arParams["2COLUMN_IBLOCK_ID"],
	"NEWS_COUNT" => $arParams["2COLUMN_NEWS_COUNT"],
	"FILTER_NAME" => "\$arrFilter2",
	"CACHE_TYPE" => $arParams["CACHE_TYPE"],
	"CACHE_TYPE" => $arParams["CACHE_TIME"],
	"CACHE_TYPE" => $arParams["CACHE_FILTER"],
	"CACHE_TYPE" => $arParams["CACHE_GROUPS"],
	"SET_TITLE" => "N",
	"COL_TYPE_LEFT" => "N",
	),
	false
);?>
<?else:?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "1_column", array(
	"IBLOCK_ID" => $arParams["2COLUMN_IBLOCK_ID"],
	"COUNT_ELEMENTS" => $arParams["2COLUMN_COUNT_ELEMENTS"],
	"TOP_DEPTH" => $arParams["2COLUMN_TOP_DEPTH"],
	"CACHE_TYPE" => $arParams["CACHE_TYPE"],
	"CACHE_TYPE" => $arParams["CACHE_TIME"],
	"CACHE_TYPE" => $arParams["CACHE_FILTER"],
	"CACHE_TYPE" => $arParams["CACHE_GROUPS"],
	"ADD_SECTIONS_CHAIN" => "N",
	"COL_TYPE_LEFT" => "N"
	),
	false
);?>
<?endif?>
</div>

<?if (!empty($arParams["2_COL_MORE_LINK"]) && !empty($arParams["2_COL_MORE_NAME"])):?><a href="<?=$arParams['2_COL_MORE_LINK']?>" class="link"><?=$arParams['2_COL_MORE_NAME']?></a><?endif?>






