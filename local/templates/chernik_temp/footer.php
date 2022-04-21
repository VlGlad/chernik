<?if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){ die(); }?>

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row row1-itd">
            <div class="footer-menu-main-itd col-lg-9 col-sm-12 d-flex flex-lg-row">
                <div class="d-flex flex-column p-0">
                    <a class="footer-menu-itd" href="/istoriya-rayonov/">История районов</a>
                    <a class="footer-menu-itd" href="/ulitsy-i-doma/">Улицы и дома</a>
                    <a class="footer-menu-itd footer-menu-buttom-punkt-itd" href="/uchebnye-zavedeniya/">Учебные заведения</a>
                </div>
                <div class="d-flex flex-column cent-col-itd">
                    <a class="footer-menu-itd" href="/mesta-kulturnogo-dosuga/">Места культурного досуга</a>
                    <a class="footer-menu-itd" href="/religioznye-sooruzheniya/">Религизные сооружения</a>
                    <a class="footer-menu-itd footer-menu-buttom-punkt-itd" href="/promyshlennye-predpriyatiya/">Промышленные предприятия</a>
                </div>
                <div class="d-flex flex-column p-0">
                    <a class="footer-menu-itd" href="/ekskursii/">Экскурсии</a>
                    <a class="footer-menu-itd" href="/parki/">Парки</a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12">
                <div class="phone-itd"><p class="margin-itd">Связаться с нами:<p class="numbers-itd"><a href="#">&ensp;+7-917-427-18-87</a></p></p></div>
            </div>
        </div>

        <div class="row row2-itd">
            <div class="col-lg-4 col-sm-12 d-flex">
                <p class="copyright-itd">Совместный проект УГНТУ и ООО Вебпространство© 2022г.</p>
            </div>

            <div class="col-lg-4 col-sm-12 d-flex justify-content-center align-items-center">
                <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
                    <img src="<?php echo SITE_TEMPLATE_PATH ?>/img/logo.png" class="logo-img-footer-itd " alt="Лого">
                    <b class="logo-text-footer-itd text-white">Черниковка 2022</b>
                </a>
            </div>
            
            <div class="footer-icon-holder-itd col-lg-4 col-sm-12 d-flex justify-content-end align-items-center">
                <div class="">
                    <a href="#"><img src="<?php echo SITE_TEMPLATE_PATH ?>/img/icons/vk.png" class="footer-icon-itd footer-icon-del_margin-itd" alt="ВК"></a>
                    <a href="#"><img src="<?php echo SITE_TEMPLATE_PATH ?>/img/icons/inst.png" class="footer-icon-itd" alt="Инстаграм"></a>
                </div>
            </div>

            <div class="coperight2-holder-itd col-lg-4 col-sm-12 d-flex justify-content-center align-items-center">
                <b class="copyright2-itd copyright2-itd d-none">Совместный проект УГНТУ и ООО Вебпространство© 2022г.</b>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER -->

    <?$asset->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.min.js") ?>
</body>
</html>