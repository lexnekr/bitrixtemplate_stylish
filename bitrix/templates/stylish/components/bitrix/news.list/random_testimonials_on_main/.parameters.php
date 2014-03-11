<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"USE_LINKS" => Array(
		"NAME" => GetMessage("USE_LINKS"),
		"TYPE" => "CHECKBOX",
		"MULTIPLE" => "N",
		"VALUE" => "Y",
		"DEFAULT" =>"Y",
		"REFRESH"=> "Y",
	),	
	"TESTIMONIALS_TITLE" => Array(
		"NAME" => GetMessage("TESTIMONIALS_TITLE"),
		"TYPE" => "HTML",
		"DEFAULT" => "Рекомендации",
	),	
);


if ($arCurrentValues["USE_LINKS"] == "Y")
{
$arTemplateParameters["USE_LINKS_NOFOLLOW"] = array(
		"NAME" => GetMessage("USE_LINKS_NOFOLLOW"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	);
$arTemplateParameters["USE_LINKS_BLANK"] = array(
		"NAME" => GetMessage("USE_LINKS_BLANK"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	);

}

?>
