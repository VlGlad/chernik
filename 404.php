<? if ($_SERVER['DOCUMENT_URI'] == "/404.php") {
 $_SERVER['REQUEST_URI'] = $_SERVER['DOCUMENT_URI'];
}
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus('404 Not Found');
@define('ERROR_404', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница не найдена"); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <p class="head-404-itd">404</p>
                <p class="body-404-itd">Запрашиваемая вами страница не найдена :(</p>
                <p class="body-404-itd">Перейти на <a href="./" class="href-404-itd">главную</a></p>
            </div>
        </div>
    </div>
</section>


<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>