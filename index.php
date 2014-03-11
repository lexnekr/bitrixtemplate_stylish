<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Ключевые слова");
$APPLICATION->SetPageProperty("description", "Описание");
$APPLICATION->SetTitle("Главная страница");
?>
    	<div class="span8">
        	<div class="clearfix cols-1">
                <div class="span4 left-0">
                    <h4 class="indent-2">Welcome</h4>
                    <p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
					<figure class="img-indent"><img src="<?=SITE_TEMPLATE_PATH?>/img/page1-img1.jpg" alt="" class="img-radius"></figure>
                    Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. 
                </div>
                <div class="span4">
                    <h4 class="indent-2">What We Do</h4>
                    <p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
                    <figure class="img-indent"><img src="<?=SITE_TEMPLATE_PATH?>/img/page1-img2.jpg" alt="" class="img-radius"></figure>
                    Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. 
                </div>
            </div>
            <h4 class="indent-1">our Capabilities:</h4>
            <p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturien.</p>
            <div class="lists">
            	<div class="span4 left-0">
                    <ul class="list">
                        <li><a href="#">Praesent vestibulum molestie lacus aenean</a></li>
                        <li><a href="#">nonummy hendrerit mauris</a></li>
                        <li><a href="#">Phasellus porta fusce suscipit varius mi</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                    </ul>
                </div>
                <div class="span4">
                    <ul class="list">
                        <li><a href="#">Praesent vestibulum molestie lacus aenean</a></li>
                        <li><a href="#">nonummy hendrerit mauris</a></li>
                        <li><a href="#">Phasellus porta fusce suscipit varius mi</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="link">More Info</a>
        </div>    
        <div class="span4">
<?$APPLICATION->IncludeComponent("bitrix:news.list", "main_page_newslist", array(
	"IBLOCK_TYPE" => "-",
	"IBLOCK_ID" => "NEWS",
	"NEWS_COUNT" => "20",
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
	"ACTIVE_DATE_FORMAT" => "f j, Y",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
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
	"DISPLAY_DATE" => "Y",
	"DISPLAY_NAME" => "Y",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "Y",
	"NEWSLIST_TITLE" => "Новости",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "random_testimonials_on_main", array(
	"IBLOCK_TYPE" => "-",
	"IBLOCK_ID" => "TESTIMONIALS",
	"NEWS_COUNT" => "2",
	"SORT_BY1" => "RAND",
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
		1 => "TESTIMONIAL_PERSON_POST",
		2 => "TESTIMONIAL_PERSON_COMPANY",
		3 => "TESTIMONIAL_PERSON_SITE",
		4 => "",
	),
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "N",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "N",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"PREVIEW_TRUNCATE_LEN" => "",
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
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
	"USE_LINKS" => "Y",
	"TESTIMONIALS_TITLE" => "Рекомендации",
	"USE_LINKS_NOFOLLOW" => "Y",
	"USE_LINKS_BLANK" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
        </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>