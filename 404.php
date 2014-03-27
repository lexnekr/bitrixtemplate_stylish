<? include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 - Страница не найдена!");
?>


    <div class="row block-404">
    	<div class="span8">
			<img src="/bitrix/templates/stylish/img/404/404_ru.png" alt="">
        </div>
    	<div class="span4">
        	<h1>ОЙ!</h1>
        	<h4>404 - страница не найдена</h4>
            <p class="p3">Страница, которую вы ищете, возможно, была удалена, переименована, или она временно недоступна.</p>
            Пожалуйста попробуйте воспользоваться поиском по сайту
<?$APPLICATION->IncludeComponent("bitrix:search.form", "stylish", array(
	"PAGE" => "#SITE_DIR#search/index.php"
	),
	false
);?>

		</div>  
    </div>  


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>