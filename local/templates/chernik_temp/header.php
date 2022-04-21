<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)    die(); ?>

<?php
use Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?
    $asset->addCss(SITE_TEMPLATE_PATH."/css/style.css");
    $asset->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
    $asset->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
    ?>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=755198f2-f469-4ed0-ab53-bd526f8dae49" type="text/javascript"></script>
    <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
    
    <link rel="icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.png" />
</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
    <!-- Header -->	
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <nav class="navbar navbar-expand-lg navbar-light nav-itd d-flex justify-content-between align-items-center">
                    <a class="navbar-brand d-flex justify-content-center align-items-center" href="/">
                        <img src="<?php echo SITE_TEMPLATE_PATH ?>/img/logo.png" class="logo-img-header-itd" alt="Логотип">
                        <b class="logo-text-header-itd text-white">Черниковка 2022</b>
                    </a>
            
                    <div class="menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop">
                        <img src="<?php echo SITE_TEMPLATE_PATH ?>/img/bars.png" class="burger" alt="Меню">
                    </div>
                </nav>

            </div>
        </div>		
    </div>
</header>	
<!-- Header -->


<!-- ofCanvas -->
<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header p-0">
        <header class="ofcanvas-color-itd w-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
    
                        <nav class="navbar navbar-expand-lg navbar-light nav-itd d-flex justify-content-between align-items-center">
                            <a class="navbar-brand d-flex" href="#">
                                <img src="<?php echo SITE_TEMPLATE_PATH ?>/img/logo.png" class="logo-img-header-itd" alt="Логотип">
                                <b class="logo-text-header-itd text-white">Черниковка 2022</b>
                            </a>
                    
                            <div class="menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop">
                                <img src="<?php echo SITE_TEMPLATE_PATH ?>/img/cross.png" class="burger" alt="Меню">
                            </div>
                        </nav>
    
                    </div>
                </div>		
            </div>
        </header>
    </div>
    <div class="offcanvas-body">
        <div class="offcanvas-mobile-itd">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- PC MENU -->
                        <div class="row position-relative pc-menu-itd">
                          <?
                          if (CModule::IncludeModule("iblock")):
                            $i = 0;
                            $iblocks = \CIBlock::GetList();

                            while ($fields = $iblocks->GetNext()) {
                                  
                              if ($fields['CODE'] == "slider-inf"){
                                  continue;
                              }

                              $i++;
                              
                              $iblock_id = $fields['ID'];
                            
                              $my_elements = CIBlockElement::GetList (
                                Array("ID" => "ASC"),
                                Array("IBLOCK_ID" => $iblock_id),
                                false,
                                false,
                                Array('ID', 'NAME', 'DETAIL_PAGE_URL')
                              );?>
                              
                              <div class="d-flex justify-content-between pc-main-href-holder main-href-<?=$i?>">
                                  <div class="row"><a href="<?=$fields['LIST_PAGE_URL']?>/" class="pc-main-href-itd position-relative"><?=$fields['NAME']?></a></div>
                                  <div class="pc-sub-href-holder sub-href-<?=$i?> position-absolute">
                              <?while($ar_fields = $my_elements->GetNext()){?>
                                  <a href="<?=$ar_fields['DETAIL_PAGE_URL']?>/"><?=$ar_fields['NAME']?></a>
                                  
                              <?}?>
                              </div>
                              </div>
                            <?
                            }

                          endif;
                          ?>
                        </div>			
                        <!-- PC MENU -->

                        <!-- MOBILE MENU -->							
                        <div class="accordion accordion-flush d-none" id="accordionFlushExample">
                          <?
                          if (CModule::IncludeModule("iblock")):
                              
                            $i = 0;

                            $iblocks = \CIBlock::GetList();

                            while ($fields = $iblocks->GetNext()) {

                              $i++;

                              $iblock_id = $fields['ID'];
                              
                              $my_elements = CIBlockElement::GetList (
                                Array("ID" => "ASC"),
                                Array("IBLOCK_ID" => $iblock_id),
                                false,
                                false,
                                Array('ID', 'NAME', 'DETAIL_PAGE_URL')
                              );?>

                              <div class="accordion-item">
                                <div class="accordion-header" id="flush-heading<?=$i?>">
                                  <a href="<?=$fields['LIST_PAGE_URL']?>/" class="href-itd"></a>
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?=$i?>" aria-expanded="false" aria-controls="flush-collapse<?=$i?>">
                                    <?=$fields['NAME']?>
                                  </btton>
                                </div>
                                <div id="flush-collapse<?=$i?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?=$i?>" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body d-flex flex-column">
                              
                              <?while($ar_fields = $my_elements->GetNext()){?>
                                  <a href="<?=$ar_fields['DETAIL_PAGE_URL']?>/" class="subitem-itd"><?=$ar_fields['NAME']?></a>
                                  
                                  <?}?>
                                  </div>
                                </div>
                              </div>
                            <?
                            }

                          endif;
                          ?>

                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ofCanvas -->