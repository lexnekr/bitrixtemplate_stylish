<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"USE_SOCIAL_ICONS" => Array(
		"NAME" => GetMessage("USE_SOCIAL_ICONS"),
		"TYPE" => "CHECKBOX",
		"MULTIPLE" => "N",
		"VALUE" => "Y",
		"DEFAULT" =>"N",
		"REFRESH"=> "Y",
	),	
	"TOP_MENU_NAME" => Array(
		"NAME" => GetMessage("TOP_MENU_NAME"),
		"TYPE" => "HTML",
		"DEFAULT" => "Menu",
	),	
);

if ($arCurrentValues["USE_SOCIAL_ICONS"] == "Y")
{
$arTemplateParameters["SOCIAL_ICONS_TWITTER"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_TWITTER"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
$arTemplateParameters["SOCIAL_ICONS_FACEBOOK"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_FACEBOOK"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
$arTemplateParameters["SOCIAL_ICONS_GOOGLE_PLUS"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_GOOGLE_PLUS"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
$arTemplateParameters["SOCIAL_ICONS_RSS"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_RSS"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
$arTemplateParameters["SOCIAL_ICONS_GITHUB"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_GITHUB"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
$arTemplateParameters["SOCIAL_ICONS_YARU"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_YARU"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
$arTemplateParameters["SOCIAL_ICONS_VK"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_VK"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
$arTemplateParameters["SOCIAL_ICONS_LIVEJOURNAL"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_LIVEJOURNAL"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
$arTemplateParameters["SOCIAL_ICONS_ODNOKLASSNIKI"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_ODNOKLASSNIKI"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
$arTemplateParameters["SOCIAL_ICONS_MAIL"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_MAIL"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
$arTemplateParameters["SOCIAL_ICONS_YOUTUBE"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_YOUTUBE"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
$arTemplateParameters["SOCIAL_ICONS_HTML5"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_HTML5"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
$arTemplateParameters["SOCIAL_ICONS_INSTAGRAM"] = array(
		"NAME" => GetMessage("SOCIAL_ICONS_INSTAGRAM"),
		"TYPE" => "HTML",
		"DEFAULT" => "",
	);
	
}

?>
