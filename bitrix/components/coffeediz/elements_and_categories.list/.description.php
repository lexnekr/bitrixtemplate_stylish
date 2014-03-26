<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("ELEMENTS_AND_CATEGORIES_LIST"),
	"DESCRIPTION" => GetMessage("ELEMENTS_AND_CATEGORIES_LIST_DESC"), 
	"ICON" => "/images/elements_and_categories_list.gif", 
	"SORT" => 70, 
	"CACHE_PATH" => "Y",
	"PATH" => array( 
		"ID" => "content", 
		"CHILD" => array(
			"ID" => "news", 
			"NAME" => GetMessage("T_IBLOCK_DESC_NEWS"),
			"SORT" => 10, 
		),
	),
);

?>