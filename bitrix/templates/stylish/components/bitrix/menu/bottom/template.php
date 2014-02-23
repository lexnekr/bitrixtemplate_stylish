<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul class="footer-menu">
<?foreach($arResult as $arItem):?>
	<li><?if($arItem['ITEM_INDEX'] != 0) :?>|<?endif?><a <?if($arItem["SELECTED"]):?>class="current"<?endif?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
<?endforeach?>
</ul>

<?endif?>