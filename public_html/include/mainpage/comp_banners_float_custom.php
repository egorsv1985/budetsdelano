<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?> <?global $isShowFloatBanner;?> <?if($isShowFloatBanner):?>
<div class="wrapper_inner1 wides float_banners">
	 <?$APPLICATION->IncludeComponent(
	"aspro:com.banners.next", 
	"next2_uslugi_custom", 
	array(
		"BANNER_TYPE_THEME" => "FLOAT",
		"BANNER_TYPE_THEME_CHILD" => "20",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CATALOG" => "/catalog/",
		"CHECK_DATES" => "Y",
		"FILTER_NAME" => "arRegionLink",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "aspro_next_adv",
		"NEWS_COUNT" => "9",
		"NEWS_COUNT2" => "20",
		"PROPERTY_CODE" => array(
			0 => "TEXT_POSITION",
			1 => "TARGETS",
			2 => "TEXTCOLOR",
			3 => "URL_STRING",
			4 => "BUTTON1TEXT",
			5 => "BUTTON1LINK",
			6 => "BUTTON2TEXT",
			7 => "BUTTON2LINK",
			8 => "",
		),
		"SET_BANNER_TYPE_FROM_THEME" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"TYPE_BANNERS_IBLOCK_ID" => "1",
		"COMPONENT_TEMPLATE" => "next2_uslugi_custom"
	),
	false
);?>
</div>
<div class="clearfix">
</div>
<?endif;?>