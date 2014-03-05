<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="navbar navbar_ clearfix">
<div class="navbar-inner navbar-inner_">
	<div class="container">
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_"><?=$arParams["TOP_MENU_NAME"]?></a>                                                 
		<div class="nav-collapse nav-collapse_ collapse">
			<ul class="nav sf-menu sf-js-enabled">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>
	
	<?if (!empty($arItem["PARAMS"]['ICON'])):?>
		<li class="<?if ($arItem["SELECTED"]):?>active <?endif?>li-first"><a href="<?=$arItem["LINK"]?>"><em class="hidden-phone"></em><span class="visible-phone"><?=$arItem["TEXT"]?></span></a></li>
	<?else:?>

		<?if ($arItem["IS_PARENT"]):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="sub-menu <?if ($arItem["SELECTED"]):?> active<?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
					<ul style="display: none;">
			<?else:?>
				<li class="sub-menu <?if ($arItem["SELECTED"]):?> active<?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
					<ul style="display: none;">
			<?endif?>

		<?else:?>

			<?if ($arItem["PERMISSION"] > "D"):?>

				<li<?if ($arItem["SELECTED"]):?> class="active"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

			<?else:?>

				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>

			<?endif?>

		<?endif?>
	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>


			</ul>
		</div>


<?if ($arParams["USE_SOCIAL_ICONS"] == Y):?>
<ul class="social-icons">
	<?if (!empty($arParams["SOCIAL_ICONS_TWITTER"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_TWITTER"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-1.png" alt="Twitter"></a></li><?endif?>
	<?if (!empty($arParams["SOCIAL_ICONS_FACEBOOK"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_FACEBOOK"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-2.png" alt="Facebook"></a></li><?endif?>
	<?if (!empty($arParams["SOCIAL_ICONS_GOOGLE_PLUS"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_GOOGLE_PLUS"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-3.png" alt="Google+"></a></li><?endif?>
	<?if (!empty($arParams["SOCIAL_ICONS_RSS"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_RSS"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-4.png" alt="RSS"></a></li><?endif?>
	<?if (!empty($arParams["SOCIAL_ICONS_GITHUB"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_GITHUB"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-5.png" alt="Github"></a></li><?endif?>
	<?if (!empty($arParams["SOCIAL_ICONS_YARU"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_YARU"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-6.png" alt="Я.ру"></a></li><?endif?>
	<?if (!empty($arParams["SOCIAL_ICONS_VK"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_VK"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-7.png" alt="Вконтакте"></a></li><?endif?>
	<?if (!empty($arParams["SOCIAL_ICONS_LIVEJOURNAL"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_LIVEJOURNAL"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-8.png" alt="Живой Журнал"></a></li><?endif?>
	<?if (!empty($arParams["SOCIAL_ICONS_ODNOKLASSNIKI"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_ODNOKLASSNIKI"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-9.png" alt="Одноклассники"></a></li><?endif?>
	<?if (!empty($arParams["SOCIAL_ICONS_MAIL"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_MAIL"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-10.png" alt="Mail.ru"></a></li><?endif?>
	<?if (!empty($arParams["SOCIAL_ICONS_YOUTUBE"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_YOUTUBE"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-11.png" alt="YouTube"></a></li><?endif?>
	<?if (!empty($arParams["SOCIAL_ICONS_HTML5"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_HTML5"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-12.png" alt="HTML5"></a></li><?endif?>
	<?if (!empty($arParams["SOCIAL_ICONS_INSTAGRAM"])):?><li><a target="_blank" href="<?=$arParams["SOCIAL_ICONS_INSTAGRAM"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/menu/top/images/icon-13.png" alt="Instagram"></a></li><?endif?>
	</ul>
<?endif?>


	</div>
</div>
</div>
<?endif?>