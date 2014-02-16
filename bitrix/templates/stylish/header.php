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
                        <h1 class="brand"><a href="index.html"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></a><span>Fashion brand</span></h1>
                        <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                            <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  >
                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                        </form>
                        <span class="contacts">Call Us Toll Free:  <span>+1 234 567 89 90</span><br>E-mail: <a href="#">company@demolink.org</a></span>
                    </div>
                    <div class="navbar navbar_ clearfix">
                        <div class="navbar-inner navbar-inner_">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>                                                   
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <ul class="nav sf-menu">
                                      <li class="active li-first"><a href="index.html"><em class="hidden-phone"></em><span class="visible-phone">Home</span></a></li>
                                      <li class="sub-menu"><a href="index-1.html">about</a>
                                        <ul>
                                          <li><a href="#">Welcome Message</a></li>
                                          <li class="sub-menu"><a href="#">Company Profile</a>
                                            <ul>
                                              <li><a href="#">Our Capabilities</a></li>
                                              <li><a href="#">Advantages</a></li>
                                              <li><a href="#">Work Team</a></li>
                                              <li><a href="#">Partnership</a></li>
                                              <li><a href="#">Support</a></li>
                                            </ul>
                                          </li>
                                          <li><a href="#">Our History</a></li>
                                          <li><a href="#">Testimonials</a></li>
                                        </ul>
                                      </li>
                                      <li><a href="index-2.html">services</a></li>
                                      <li><a href="index-3.html">collections</a></li>
                                      <li><a href="index-4.html">styles</a></li>
                                      <li><a href="index-5.html">contacts</a></li>
                                    </ul>
                                </div>
                                <ul class="social-icons">
                                    <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-1.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-2.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-3.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-4.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                     </div>   
                </div>
            </div>
         </div>   
    </div>
    <div class="slider">
    <div class="camera_wrap">
        <div data-src="<?=SITE_TEMPLATE_PATH?>/img/slide1.jpg"></div>
        <div data-src="<?=SITE_TEMPLATE_PATH?>/img/slide2.jpg"></div>
        <div data-src="<?=SITE_TEMPLATE_PATH?>/img/slide3.jpg"></div>
    </div>
</div>
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

