<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("About");
?><div class="span8">
	<div class="clearfix cols-1">
		<div class="span4 left-0">
			<h4>about us</h4>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p>
			<figure class="img-indent"><img src="<?=SITE_TEMPLATE_PATH?>/img/page2-img1.jpg" class="img-radius" alt=""></figure>
			Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. 
		</div>
		<div class="span4">
			<h4>our vision</h4>
			<p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
			<figure class="img-indent"><img src="<?=SITE_TEMPLATE_PATH?>/img/page2-img2.jpg" class="img-radius" alt=""></figure>
			Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. 
		</div>
	</div>
	<h4>our clients</h4>
	Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. 
	<ul class="banners">
		<li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/banner-1.jpg" alt=""></a></li>
		<li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/banner-2.jpg" alt=""></a></li>
		<li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/banner-3.jpg" alt=""></a></li>
		<li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/banner-4.jpg" alt=""></a></li>
		<li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/banner-5.jpg" alt=""></a></li>
		<li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/banner-6.jpg" alt=""></a></li>
		<li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/banner-7.jpg" alt=""></a></li>
		<li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/banner-8.jpg" alt=""></a></li>
	</ul>
	<div class="lists-width2">
		<ul class="list-2">
			<li><a href="#">Vestibulum iaculis</a></li>
			<li><a href="#">Lacinia est</a></li>
			<li><a href="#">Proin dictum</a></li>
			<li><a href="#">Elementum velit</a></li>
		</ul>
		<ul class="list-2">
			<li><a href="#">Proin dictum</a></li>
			<li><a href="#">Elementum velit</a></li>
			<li><a href="#">Consequat ante</a></li>
			<li><a href="#">Lorem ipsum dolor</a></li>
		</ul>
		<ul class="list-2">
			<li><a href="#">Elementum velit</a></li>
			<li><a href="#">Consequat ante</a></li>
			<li><a href="#">Lorem ipsum dolor</a></li>
			<li><a href="#">Sit amet</a></li>
		</ul>
		<ul class="list-2">
			<li><a href="#">Lacinia est</a></li>
			<li><a href="#">Proin dictum</a></li>
			<li><a href="#">Elementum velit</a></li>
			<li><a href="#">Consequat ante</a></li>
		</ul>
	</div>
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