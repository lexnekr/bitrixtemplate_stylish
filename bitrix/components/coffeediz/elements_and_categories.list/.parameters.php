<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


if(!CModule::IncludeModule("iblock"))
	return;

$arTypesEx = CIBlockParameters::GetIBlockTypes(Array("-"=>" "));


$arIBlocks1col=Array();
$db_iblock = CIBlock::GetList(Array("SORT"=>"ASC"), Array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["1COLUMN_IBLOCK_TYPE"]!="-"?$arCurrentValues["1COLUMN_IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
	$arIBlocks1col[$arRes["ID"]] = $arRes["NAME"];

$arIBlocks2col=Array();
$db_iblock = CIBlock::GetList(Array("SORT"=>"ASC"), Array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["2COLUMN_IBLOCK_TYPE"]!="-"?$arCurrentValues["2COLUMN_IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
	$arIBlocks2col[$arRes["ID"]] = $arRes["NAME"];









$arComponentParameters = array(
   "GROUPS" => array(
      "1COLUMN" => array(
         "NAME" => GetMessage("1COLUMN_PARAMETERS")
      ),
      "2COLUMN" => array(
         "NAME" => GetMessage("2COLUMN_PARAMETERS")
      ),
   ),
   "PARAMETERS" => array(
	"2_COL_TITLE" => Array(
		"PARENT" => "BASE",
		"NAME" => GetMessage("2_COL_TITLE"),
		"TYPE" => "HTML",
		"DEFAULT" => "Наши Возможности",
	),
	"2_COL_INTRO_TEXT" => Array(
		"PARENT" => "BASE",
		"NAME" => GetMessage("2_COL_INTRO_TEXT"),
		"TYPE" => "HTML",
		"DEFAULT" => "В данном двухколоночном списке представлены возможности данного шаблона, которые вы можете штатно использовать без дополнительных доработок.",
	),
	"2_COL_MORE_NAME" => Array(
		"PARENT" => "BASE",
		"NAME" => GetMessage("2_COL_MORE_NAME"),
		"TYPE" => "HTML",
		"DEFAULT" => "Ещё",
	),
	"2_COL_MORE_LINK" => Array(
		"PARENT" => "BASE",
		"NAME" => GetMessage("2_COL_MORE_LINK"),
		"TYPE" => "HTML",
		"DEFAULT" => "#",
	),
      "1COLUMN_TYPE" => array(
         "PARENT" => "BASE",
         "NAME" => GetMessage("1COLUMN_TYPE"),
         "TYPE" => "LIST",
         "VALUES" => array(
			"COLUMN_TYPE_ELEMENT" => GetMessage("COLUMN_TYPE_ELEMENT"),
			"COLUMN_TYPE_CATEGORY" => GetMessage("COLUMN_TYPE_CATEGORY")
			),
         "REFRESH" => "Y"
      ),
      "2COLUMN_TYPE" => array(
         "PARENT" => "BASE",
         "NAME" => GetMessage("2COLUMN_TYPE"),
         "TYPE" => "LIST",
         "VALUES" => array(
			"COLUMN_TYPE_ELEMENT" => GetMessage("COLUMN_TYPE_ELEMENT"),
			"COLUMN_TYPE_CATEGORY" => GetMessage("COLUMN_TYPE_CATEGORY")
			),
         "REFRESH" => "Y"
      ),

		"CACHE_TIME"  =>  Array("DEFAULT"=>36000000),
		"CACHE_FILTER" => array(
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("IBLOCK_CACHE_FILTER"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"CACHE_GROUPS" => array(
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("CP_BNL_CACHE_GROUPS"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),

		"1COLUMN_IBLOCK_TYPE" => Array(
			"PARENT" => "1COLUMN",
			"NAME" => GetMessage("1COLUMN_IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arTypesEx,
			"DEFAULT" => "news",
			"REFRESH" => "Y",
		),
		"1COLUMN_IBLOCK_ID" => Array(
			"PARENT" => "1COLUMN",
			"NAME" => GetMessage("1COLUMN_IBLOCK_ID"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks1col,
			"DEFAULT" => '={$_REQUEST["ID"]}',
			"ADDITIONAL_VALUES" => "Y",
			"REFRESH" => "Y",
		),



		"2COLUMN_IBLOCK_TYPE" => Array(
			"PARENT" => "2COLUMN",
			"NAME" => GetMessage("2COLUMN_IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arTypesEx,
			"DEFAULT" => "news",
			"REFRESH" => "Y",
		),
		"2COLUMN_IBLOCK_ID" => Array(
			"PARENT" => "2COLUMN",
			"NAME" => GetMessage("2COLUMN_IBLOCK_ID"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks2col,
			"DEFAULT" => '={$_REQUEST["ID"]}',
			"ADDITIONAL_VALUES" => "Y",
			"REFRESH" => "Y",
		),

   )
);





if ($arCurrentValues["1COLUMN_TYPE"] == "COLUMN_TYPE_ELEMENT")
{

	$arComponentParameters["PARAMETERS"]["1COLUMN_NEWS_COUNT"] = array(
		"PARENT" => "1COLUMN",
		"NAME" => GetMessage("1COLUMN_NEWS_COUNT"),
		"TYPE" => "STRING",
		"DEFAULT" => "5",
	);

}
else
{


	$arComponentParameters["PARAMETERS"]["1COLUMN_COUNT_ELEMENTS"] = array(
		"PARENT" => "1COLUMN",
		"NAME" => GetMessage("1COLUMN_COUNT_ELEMENTS"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => 'Y',
	);

	$arComponentParameters["PARAMETERS"]["1COLUMN_TOP_DEPTH"] = array(
		"PARENT" => "1COLUMN",
		"NAME" => GetMessage("1COLUMN_TOP_DEPTH"),
		"TYPE" => "STRING",
		"DEFAULT" => '2',
	);

}


if ($arCurrentValues["2COLUMN_TYPE"] == "COLUMN_TYPE_ELEMENT")
{

	$arComponentParameters["PARAMETERS"]["2COLUMN_NEWS_COUNT"] = array(
		"PARENT" => "2COLUMN",
		"NAME" => GetMessage("2COLUMN_NEWS_COUNT"),
		"TYPE" => "STRING",
		"DEFAULT" => "5",
	);

}
else
{


	$arComponentParameters["PARAMETERS"]["2COLUMN_COUNT_ELEMENTS"] = array(
		"PARENT" => "2COLUMN",
		"NAME" => GetMessage("2COLUMN_COUNT_ELEMENTS"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => 'Y',
	);

	$arComponentParameters["PARAMETERS"]["2COLUMN_TOP_DEPTH"] = array(
		"PARENT" => "2COLUMN",
		"NAME" => GetMessage("2COLUMN_TOP_DEPTH"),
		"TYPE" => "STRING",
		"DEFAULT" => '2',
	);

}



?>