

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

    </div>        
  </div>
</div>  
</section>
<footer>
   <div class="container">
    <div class="row">
      <div class="span4 float2">
<?$APPLICATION->IncludeComponent("asd:subscribe.quick.form", "bottom", array(
	"RUBRICS" => array(
		0 => "1",
	),
	"SHOW_RUBRICS" => "N",
	"INC_JQUERY" => "N",
	"NOT_CONFIRM" => "Y",
	"SUBSCRIBE_FORM_NAME" => "Подписка на новости"
	),
	false
);?>
    </div>
    <div class="span8 float">
<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
	"ROOT_MENU_TYPE" => "bottom",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "86400",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "N",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_TEMPLATE_PATH."/include/copyright.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?> 
 <!-- {%FOOTER_LINK} -->
      </div>
    </div>
   </div>
</footer>



<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/superfish.js"></script>
</body>
</html>