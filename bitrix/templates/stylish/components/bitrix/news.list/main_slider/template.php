<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="slider"> 
<div class="camera_wrap"> 
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"></div>
<?endforeach;?>
</div>
</div>