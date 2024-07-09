<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if ($GET["debug"] == "y")
	error_reporting(E_ERROR | E_PARSE);
IncludeTemplateLangFile(__FILE__);
global $APPLICATION, $arRegion, $arSite, $arTheme;
$arSite = CSite::GetByID(SITE_ID)->Fetch();
$htmlClass = ($_REQUEST && isset($_REQUEST['print']) ? 'print' : false);
$bIncludedModule = (\Bitrix\Main\Loader::includeModule("aspro.next")); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>" <?= ($htmlClass ? 'class="' . $htmlClass . '"' : '') ?>>

<script type="text/javascript">
	! function() {
		var t = document.createElement("script");
		t.type = "text/javascript", t.async = !0, t.src = 'https://vk.com/js/api/openapi.js?169', t.onload = function() {
			VK.Retargeting.Init("VK-RTRG-1693489-eO3li"), VK.Retargeting.Hit()
		}, document.head.appendChild(t)
	}();
</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1693489-eO3li" style="position:fixed; left:-999px;" alt="" /></noscript>
<script type="text/javascript">
	! function() {
		var t = document.createElement("script");
		t.type = "text/javascript", t.async = !0, t.src = 'https://vk.com/js/api/openapi.js?169', t.onload = function() {
			VK.Retargeting.Init("VK-RTRG-1693510-5CKy4"), VK.Retargeting.Hit()
		}, document.head.appendChild(t)
	}();
</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1693510-5CKy4" style="position:fixed; left:-999px;" alt="" /></noscript>

<!-- Top.Mail.Ru counter -->
<script type="text/javascript">
	var _tmr = window._tmr || (window._tmr = []);
	_tmr.push({
		id: "3327207",
		type: "pageView",
		start: (new Date()).getTime()
	});
	(function(d, w, id) {
		if (d.getElementById(id)) return;
		var ts = d.createElement("script");
		ts.type = "text/javascript";
		ts.async = true;
		ts.id = id;
		ts.src = "https://top-fwz1.mail.ru/js/code.js";
		var f = function() {
			var s = d.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(ts, s);
		};
		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else {
			f();
		}
	})(document, window, "tmr-code");
</script>
<noscript>
	<div><img src="https://top-fwz1.mail.ru/counter?id=3327207;js=na" style="position:absolute;left:-9999px;" alt="Top.Mail.Ru" /></div>
</noscript>
<!-- /Top.Mail.Ru counter -->

<!-- Top.Mail.Ru counter -->
<script type="text/javascript">
	var _tmr = window._tmr || (window._tmr = []);
	_tmr.push({
		id: "3327210",
		type: "pageView",
		start: (new Date()).getTime()
	});
	(function(d, w, id) {
		if (d.getElementById(id)) return;
		var ts = d.createElement("script");
		ts.type = "text/javascript";
		ts.async = true;
		ts.id = id;
		ts.src = "https://top-fwz1.mail.ru/js/code.js";
		var f = function() {
			var s = d.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(ts, s);
		};
		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else {
			f();
		}
	})(document, window, "tmr-code");
</script>
<noscript>
	<div><img src="https://top-fwz1.mail.ru/counter?id=3327210;js=na" style="position:absolute;left:-9999px;" alt="Top.Mail.Ru" /></div>
</noscript>
<!-- /Top.Mail.Ru counter -->


<head>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-T9QHRH5');
	</script>
	<!-- End Google Tag Manager -->

	<script type="text/javascript">
		! function() {
			var t = document.createElement("script");
			t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?168", t.onload = function() {
				VK.Retargeting.Init("VK-RTRG-740021-1p5wL"), VK.Retargeting.Hit()
			}, document.head.appendChild(t)
		}();
	</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-740021-1p5wL" style="position:fixed; left:-999px;" alt="" /></noscript>
	<script type="text/javascript">
		! function() {
			var t = document.createElement("script");
			t.type = "text/javascript", t.async = !0, t.src = 'https://vk.com/js/api/openapi.js?169', t.onload = function() {
				VK.Retargeting.Init("VK-RTRG-1632516-5Z6G9"), VK.Retargeting.Hit()
			}, document.head.appendChild(t)
		}();
	</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1632516-5Z6G9" style="position:fixed; left:-999px;" alt="" /></noscript>



	<title><? $APPLICATION->ShowTitle() ?></title>
	<? $APPLICATION->ShowMeta("viewport"); ?>
	<? $APPLICATION->ShowMeta("HandheldFriendly"); ?>
	<? $APPLICATION->ShowMeta("apple-mobile-web-app-capable", "yes"); ?>
	<? $APPLICATION->ShowMeta("apple-mobile-web-app-status-bar-style"); ?>
	<? $APPLICATION->ShowMeta("SKYPE_TOOLBAR"); ?>
	<? $APPLICATION->ShowHead(); ?>
	<? $APPLICATION->AddHeadString('<script>BX.message(' . CUtil::PhpToJSObject($MESS, false) . ')</script>', true); ?>
	<? if ($bIncludedModule)
		CNext::Start(SITE_ID); ?>
</head>
<? $bIndexBot = (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Lighthouse') !== false); // is indexed yandex/google bot
?>

<body class="site_<?= SITE_ID ?> <?= ($bIncludedModule ? "fill_bg_" . strtolower(CNext::GetFrontParametrValue("SHOW_BG_BLOCK")) : ""); ?> <?= ($bIndexBot ? "wbot" : ""); ?>" id="main">

	<div id="modal_for_popup"></div>
	<!-- popup -->
	<link rel="stylesheet" href="/popups.css">
	<div class="callback_frame  jqmWindow popup jqm-init" data-modal-id="1" id="five_window">
		<div class="modal__close"></div>
		<a href="/sale/darim_kazhdoe_5_e_okno/">
			<img src="" style="display: none;">
		</a>
	</div>
	<script src="/bitrix/templates/aspro_next/js/custom.js"></script>
	<!-- end popup -->

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9QHRH5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
	<? if (!$bIncludedModule) : ?>
		<? $APPLICATION->SetTitle(GetMessage("ERROR_INCLUDE_MODULE_ASPRO_NEXT_TITLE")); ?>
		<center><? $APPLICATION->IncludeFile(SITE_DIR . "include/error_include_module.php"); ?></center>
</body>

</html><? die(); ?>
<? endif; ?>

<? $arTheme = $APPLICATION->IncludeComponent("aspro:theme.next", ".default", array("COMPONENT_TEMPLATE" => ".default"), false, array("HIDE_ICONS" => "Y")); ?>
<? include_once('defines.php'); ?>
<? CNext::SetJSOptions(); ?>

<div class="wrapper1 <?= ($isIndex && $isShowIndexLeftBlock ? "with_left_block" : ""); ?> <?= CNext::getCurrentPageClass(); ?> <?= CNext::getCurrentThemeClasses(); ?>">
	<? CNext::get_banners_position('TOP_HEADER'); ?>

	<div class="header_wrap visible-lg visible-md title-v<?= $arTheme["PAGE_TITLE"]["VALUE"]; ?><?= ($isIndex ? ' index' : '') ?>">
		<header id="header">
			<? CNext::ShowPageType('header'); ?>
		</header>
	</div>

	<? CNext::get_banners_position('TOP_UNDERHEADER'); ?>

	<? if ($arTheme["TOP_MENU_FIXED"]["VALUE"] == 'Y') : ?>
		<div id="headerfixed">
			<? CNext::ShowPageType('header_fixed'); ?>
		</div>
	<? endif; ?>

	<div id="mobileheader" class="visible-xs visible-sm">
		<? CNext::ShowPageType('header_mobile'); ?>
		<div id="mobilemenu" class="<?= ($arTheme["HEADER_MOBILE_MENU_OPEN"]["VALUE"] == '1' ? 'leftside' : 'dropdown') ?> <?= ($arTheme['HEADER_MOBILE_MENU_COMPACT']['VALUE'] == 'Y' ? 'menu-compact' : '') ?>">
			<? CNext::ShowPageType('header_mobile_menu'); ?>
		</div>
	</div>

	<? if ($arTheme['MOBILE_FILTER_COMPACT']['VALUE'] === 'Y') : ?>
		<div id="mobilefilter" class="visible-xs visible-sm scrollbar-filter"></div>
	<? endif; ?>

	<p class="covid" style="background: #e31e24; color: #fff; text-align: center; padding: 10px; display: none;">
		Поздравляем с Днём народного единства! С 4 по 6 ноября у нас выходные
	</p>

	<?/*filter for contacts*/
	if ($arRegion) {
		if ($arRegion['LIST_STORES'] && !in_array('component', $arRegion['LIST_STORES'])) {
			if ($arTheme['STORES_SOURCE']['VALUE'] != 'IBLOCK')
				$GLOBALS['arRegionality'] = array('ID' => $arRegion['LIST_STORES']);
			else
				$GLOBALS['arRegionality'] = array('PROPERTY_STORE_ID' => $arRegion['LIST_STORES']);
		}
	}
	if ($isIndex) {
		$GLOBALS['arrPopularSections'] = array('UF_POPULAR' => 1);
		$GLOBALS['arrFrontElements'] = array('PROPERTY_SHOW_ON_INDEX_PAGE_VALUE' => 'Y');
	}
	if ($arRegion["NAME"] == "Уфа" && $_SERVER["REQUEST_URI"] == "/") {
	?>
		<div class="main-ufa-banner">
			<div class="maxwidth-theme">
				<div class="banner-content">
					<div class="title">
						Немецкие окна по<br> цене российских
					</div>
					<span class="btn btn-default animate-load" data-event="jqm" data-param-form_id="SERVICES" data-name="order_services" data-autoload-service="Установка оконных конструкций" data-autoload-project="Установка оконных конструкций" data-autoload-product="Установка оконных конструкций"><span>Заказать услугу</span></span>
				</div>
				<div class="img">
					<img src="/images/ufa-banner.png">
				</div>
			</div>
		</div>
	<?php
	}
	?>

	<div class="wraps hover_<?= $arTheme["HOVER_TYPE_IMG"]["VALUE"]; ?>" id="content">
		<? if (!$is404 && !$isForm && !$isIndex) : ?>
			<? $APPLICATION->ShowViewContent('section_bnr_content'); ?>
			<? if ($APPLICATION->GetProperty("HIDETITLE") !== 'Y') : ?>
				<!--title_content-->
				<? CNext::ShowPageType('page_title'); ?>
				<!--end-title_content-->
			<? endif; ?>
			<? $APPLICATION->ShowViewContent('top_section_filter_content'); ?>
		<? endif; ?>

		<? if ($isIndex) : ?>
			<div class="wrapper_inner front <?= ($isShowIndexLeftBlock ? "" : "wide_page"); ?>">
			<? elseif (!$isWidePage) : ?>
				<div class="wrapper_inner <?= ($isHideLeftBlock ? "wide_page" : ""); ?>">
				<? endif; ?>

				<? if (($isIndex && $isShowIndexLeftBlock) || (!$isIndex && !$isHideLeftBlock) && !$isBlog) : ?>
					<div class="right_block <?= (defined("ERROR_404") ? "error_page" : ""); ?> wide_<?= CNext::ShowPageProps("HIDE_LEFT_BLOCK"); ?>">
						<? if (strpos($_SERVER['REQUEST_URI'], "/catalog/") === 0 || strpos($_SERVER['REQUEST_URI'], "/services/") === 0) {
							@include_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer/custom_site-search-line.php');
						}
						?>
					<? endif; ?>

					<div class="middle <?= ($is404 ? 'error-page' : ''); ?>">
						<? CNext::get_banners_position('CONTENT_TOP'); ?>
						<? if (!$isIndex) : ?>
							<div class="container">
								<? //h1
								?>
								<? if ($isHideLeftBlock && !$isWidePage) : ?>
									<div class="maxwidth-theme">
									<? endif; ?>
									<? if ($isBlog) : ?>
										<div class="row">
											<div class="col-md-9 col-sm-12 col-xs-12 content-md <?= CNext::ShowPageProps("ERROR_404"); ?>">
											<? endif; ?>
										<? endif; ?>
										<? CNext::checkRestartBuffer(); ?>