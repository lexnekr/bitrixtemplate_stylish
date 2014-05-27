<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("About");
?><div class="span8">
	<div class="clearfix cols-1">
		<div class="span4 left-0">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/about/about_us.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>		</div>
		<div class="span4">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/about/our_vision.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>		</div>
	</div>
	<h4>our clients</h4>
	Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. 


<?$APPLICATION->IncludeComponent("bitrix:news.line", "clients_logos_list", array(
	"IBLOCK_TYPE" => "Content",
	"IBLOCKS" => array(
		0 => "6",
	),
	"NEWS_COUNT" => "20",
	"FIELD_CODE" => array(
		0 => "PREVIEW_PICTURE",
		1 => "",
	),
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"DETAIL_URL" => "",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "300",
	"CACHE_GROUPS" => "Y",
	"ACTIVE_DATE_FORMAT" => "d.m.Y"
	),
	false
);?>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "4_columns", array(
	"IBLOCK_TYPE" => "-",
	"IBLOCK_ID" => "CLIENTS",
	"NEWS_COUNT" => "8",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"FILTER_NAME" => "",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"PREVIEW_TRUNCATE_LEN" => "",
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
	"ADD_SECTIONS_CHAIN" => "Y",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"PARENT_SECTION" => "",
	"PARENT_SECTION_CODE" => "",
	"INCLUDE_SUBSECTIONS" => "Y",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Новости",
	"PAGER_SHOW_ALWAYS" => "Y",
	"PAGER_TEMPLATE" => "",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "Y",
	"2_COL_TITLE" => "",
	"2_COL_INTRO_TEXT" => "",
	"2_COL_MORE_NAME" => "",
	"2_COL_MORE_LINK" => "/about/news/",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>

</div>   


 
<?$APPLICATION->IncludeComponent("bitrix:news.list", "team_right_collumn", array(
"IBLOCK_TYPE" => "-",
"IBLOCK_ID" => "TEAM",
"NEWS_COUNT" => "6",
"SORT_BY1" => "ACTIVE_FROM",
"SORT_ORDER1" => "DESC",
"SORT_BY2" => "SORT",
"SORT_ORDER2" => "ASC",
"FILTER_NAME" => "",
"FIELD_CODE" => array(
0 => "",
1 => "",
),
"PROPERTY_CODE" => array(
0 => "",
1 => "",
),
"CHECK_DATES" => "Y",
"DETAIL_URL" => "",
"AJAX_MODE" => "N",
"AJAX_OPTION_JUMP" => "N",
"AJAX_OPTION_STYLE" => "N",
"AJAX_OPTION_HISTORY" => "N",
"CACHE_TYPE" => "A",
"CACHE_TIME" => "36000000",
"CACHE_FILTER" => "N",
"CACHE_GROUPS" => "Y",
"PREVIEW_TRUNCATE_LEN" => "",
"ACTIVE_DATE_FORMAT" => "d.m.Y",
"SET_TITLE" => "N",
"SET_STATUS_404" => "N",
"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
"ADD_SECTIONS_CHAIN" => "N",
"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
"PARENT_SECTION" => "",
"PARENT_SECTION_CODE" => "",
"INCLUDE_SUBSECTIONS" => "Y",
"DISPLAY_TOP_PAGER" => "N",
"DISPLAY_BOTTOM_PAGER" => "N",
"PAGER_TITLE" => "Новости",
"PAGER_SHOW_ALWAYS" => "N",
"PAGER_TEMPLATE" => "",
"PAGER_DESC_NUMBERING" => "N",
"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
"PAGER_SHOW_ALL" => "N",
"DISPLAY_DATE" => "N",
"DISPLAY_NAME" => "Y",
"DISPLAY_PICTURE" => "Y",
"DISPLAY_PREVIEW_TEXT" => "Y",
"TITLE_TEXT" => "Our Team",
"AJAX_OPTION_ADDITIONAL" => ""
),
false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>