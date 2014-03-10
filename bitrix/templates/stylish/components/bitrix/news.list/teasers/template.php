<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="row">
	<div class="span12">        
		<ul class="thumbnails">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
			<li class="span3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="thumbnail <?=$arItem['PROPERTIES']['TEASER_COLOR']['VALUE_XML_ID']?>">
					<div class="caption">
						<?if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" ><?endif?>
						<?if (!empty($arItem['PROPERTIES']['SUBTITLE']['VALUE'])):?><h5><?=$arItem['PROPERTIES']['SUBTITLE']['VALUE']?></h5><?endif?>
						<h3><?echo $arItem["NAME"]?></h3>
				  	</div> 
				  	<div class="thumbnail-pad">
						<?if (!empty($arItem["PREVIEW_TEXT"])):?><p><?echo $arItem["PREVIEW_TEXT"];?></p><?endif?>
						<?if (!empty($arItem['PROPERTIES']['TEASER_LINK']['VALUE'])):?><a href="<?=$arItem['PROPERTIES']['TEASER_LINK']['VALUE']?>" class="btn btn_"><?=$arParams['BUTTON_TEXT']?></a><?endif?>
					</div>
				</div>
			</li>
<?endforeach;?>
		</ul>
	</div>
</div>