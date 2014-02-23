<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>-<?=strtoupper(LANGUAGE_ID);?>">

<head>

    <title><?$APPLICATION->ShowTitle()?></title>

<?
$APPLICATION->ShowHead();

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/responsive.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/camera.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css');
$APPLICATION->SetAdditionalCSS('http://fonts.googleapis.com/css?family=Open+Sans:400,600,700');
$APPLICATION->SetAdditionalCSS('http://fonts.googleapis.com/css?family=Open+Sans:400');
$APPLICATION->SetAdditionalCSS('http://fonts.googleapis.com/css?family=Open+Sans:600');
$APPLICATION->SetAdditionalCSS('http://fonts.googleapis.com/css?family=Open+Sans:700');

$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.js"); 
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.easing.1.3.js"); 
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/camera.js"); 
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.ui.totop.js"); 
?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico" type="image/x-icon" />






        <script>
      $(document).ready(function(){   
              jQuery('.camera_wrap').camera();
        });    
        </script>                
        <!--[if lt IE 8]>
                  <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
         <![endif]-->
  
  <!--[if (gt IE 9)|!(IE)]><!-->
  <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.mobile.customized.min.js"></script>
  <!--<![endif]-->
          <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/ie.css" type="text/css" media="screen">
  <![endif]-->


  

</head>

<body>

<?$APPLICATION->ShowPanel();?>

<!--==============================header=================================-->
<header class="p0">
    <div class="container">
    	<div class="row">
        	<div class="span12">
            	<div class="header-block clearfix">
                    <div class="clearfix header-block-pad">
                        <h1 class="brand"><a href="/">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/logo.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
</a><span>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/slogan.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
</span></h1>
<?$APPLICATION->IncludeComponent("bitrix:search.form", "top", Array(
	"PAGE" => "#SITE_DIR#search/",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
	),
	false
);?>
                        <span class="contacts">
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_TEMPLATE_PATH."/include/phone.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
<br>
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_TEMPLATE_PATH."/include/E-mail.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?> 
</span>
                    </div>
					
					
<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "N",
	"MENU_CACHE_TIME" => "86400",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "3",
	"CHILD_MENU_TYPE" => "subtop",
	"USE_EXT" => "N",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N",
	"USE_SOCIAL_ICONS" => "Y",
	"TOP_MENU_NAME" => "Меню",
	"SOCIAL_ICONS_TWITTER" => "https://twitter.com/lexnekr",
	"SOCIAL_ICONS_FACEBOOK" => "",
	"SOCIAL_ICONS_GOOGLE_PLUS" => "https://plus.google.com/u/0/112316725504958628550/posts",
	"SOCIAL_ICONS_RSS" => "http://кофедизайн.рф/information/rss/",
	"SOCIAL_ICONS_GITHUB" => "https://github.com/lexnekr/bitrixtemplate_stylish"
	),
	false
);?>					
 
                </div>
            </div>
         </div>   
    </div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "slider",
		"EDIT_TEMPLATE" => ""
	)
);?>
</header>

<section id="content" class="main-content">
<div class="sub-content">
  <div class="container">
    <div class="row">
      <div class="span12">        
        <ul class="thumbnails">
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="<?=SITE_TEMPLATE_PATH?>/img/img-1.png" alt="">
                <h5>Most</h5>
                <h3>popular</h3>
              </div>  
              <div class="thumbnail-pad">
                  <p>Praesent vestibulum molestie lacus. Aenean noy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. </p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="<?=SITE_TEMPLATE_PATH?>/img/img-2.png" alt="">
                <h5>Beauty</h5>
                <h3>Gifts</h3>
              </div>  
              <div class="thumbnail-pad">
                  <p>Praesent vestibulum molestie lacus. Aenean my hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. </p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="<?=SITE_TEMPLATE_PATH?>/img/img-3.png" alt="">
                <h5>Attention</h5>
                <h3>to Detail</h3>
              </div>  
              <div class="thumbnail-pad">
                  <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suipit varius mi. Cum sociis natoque penatibus et.</p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="<?=SITE_TEMPLATE_PATH?>/img/img-4.png" alt="">
                <h5>Award-Winning</h5>
                <h3>Fragrances</h3>
              </div>
              <div class="thumbnail-pad">  
                  <p>Nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">

