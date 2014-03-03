<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arRubrics = array();
if (CModule::IncludeModule('subscribe')) {
	$rsRub = CRubric::GetList(array('SORT' => 'ASC', 'NAME' => 'ASC'));
	while ($arRub = $rsRub->Fetch()) {
		$arRubrics[$arRub['ID']] = $arRub['NAME'];
	}
}

$arTemplateParameters ["RUBRICS"] = array(
			'PARENT' => 'BASE',
			'NAME' => GetMessage('RUBRICS'),
			'TYPE' => 'LIST',
			'VALUES' => $arRubrics,
			'MULTIPLE' => 'Y'
);

$arTemplateParameters["SUBSCRIBE_FORM_TITLE"] = array(
		'PARENT' => 'BASE',
		"NAME" => GetMessage("SUBSCRIBE_FORM_TITLE"),
		"TYPE" => "HTML",
		"DEFAULT" => "Newsletter",
	);
?>