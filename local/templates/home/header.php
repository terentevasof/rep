<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
  <title>
    <? $APPLICATION->ShowTitle() ?>
  </title>
  <? $APPLICATION->ShowHead(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">

  <?php
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/animate.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/aos.css");

  use Bitrix\Main\Page\Asset;

  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");

  ?>
</head>

<body>
  <? $APPLICATION->ShowPanel(); ?>

  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/phone.php"
                )
              ); ?>
              <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/mail.php"
                )
              ); ?>
            </p>
          </div>
          <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/social.php"
            )
          ); ?>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class=""><a href="/" class="h5 text-uppercase text-black"><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/logo.php"
	)
);?></a></h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                  <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_menu"
	),
	false
);?>
            </nav>
          </div>

          
         



        </div>
      </div>
    </div>
    
  </div>




<? if ($APPLICATION->GetCurPage(false) !== '/'): ?>

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
<div class="container">
  <div class="row align-items-center justify-content-center text-center">
	<div class="col-md-10">
	  <h1 class="mb-2"><? $APPLICATION->ShowTitle() ?></h1>
    <div ><?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
	
),
false
);?>
	</div>
  </div>
</div>
</div>

<? endif; ?>