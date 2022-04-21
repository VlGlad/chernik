<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");?><!-- Head Button Slider --> 


<script src="object_manager.js" type="text/javascript"></script>

<section>
<div class="container" id="HBS">
	<div class="col-12">
		<div class="row d-flex justify-content-between align-items-end head_button-itd">
			<h1 class="sect-head-itd w-auto">Сайт для тех, кто любит <br>
			 город и кому интересна история Черниковки</h1>
 <a type="button" href="#scrollspyCards" class="btn btn-success btn-itd btn1-hide-itd d-flex justify-content-center align-items-center">К разделам</a>
		</div>
		 <!-- ------------------------------------------------------ -->
		<div class="myCarousel">
			<div id="carouselExampleIndicators" class="carousel carousel-1 slide" data-bs-touch="true" data-bs-ride="carousel">
				<div class="d-flex justify-content-center align-items-center">
					<div class="carousel-btn-itd" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<img alt="Следующий слайд" src="<?php echo SITE_TEMPLATE_PATH ?>/img/prev.png" class="carousel-icon-itd">
					</div>
						<div class="carousel-inner carousel-inner-1">
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list", 
							"main_slider_temp", // шаблон
							array(
								"IBLOCK_TYPE" => "Slider", // тип инфоблока
								"IBLOCK_ID"   => "12",        // ИД инфоблока
								"NEWS_COUNT"  => "3",        // кол-во выводимых элементов
								"SET_TITLE"   => "N"
							),
							false
							);?>
						</div>
					<div class="carousel-btn-itd" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<img alt="Предыдущий слайд" src="<?php echo SITE_TEMPLATE_PATH ?>/img/next.png" class="carousel-icon-itd">
					</div>
				</div>
				<div class="carousel-indicators carousel-indicators-1">
 <button id="bullets" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> <button id="bullets" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button> <button id="bullets" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
			</div>
		</div>
		 <!-- -------------------------------------------------------- -->
		<div class="btn2-itd d-none">
 <a type="button" href="#scrollspyCards" class="btn btn-success btn-itd d-flex justify-content-center align-items-center">К разделам</a>
		</div>
	</div>
</div>
 </section>
<!-- Head Button Slider --> <!-- Cards --> <section class="sect-itd sect-for-cards-1-itd" id="scrollspyCards">
	<div class="container">
		<div class="row pb-2">
			<h2>Разделы</h2>
		</div>
		<?$APPLICATION->IncludeComponent("bitrix:menu", "middle_menu_templ1", Array(
			"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
			"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
			"DELAY" => "N",	// Откладывать выполнение шаблона меню
			"MAX_LEVEL" => "1",	// Уровень вложенности меню
			"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
				0 => "",
			),
			"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"MENU_CACHE_TYPE" => "N",	// Тип кеширования
			"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
			"ROOT_MENU_TYPE" => "middle",	// Тип меню для первого уровня
			"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
			),
			false
		);?>
	</div>
 </section>
<!-- Cards --> <!-- MAP --> 
<section>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<h2 class="pb-3">Карта района</h2>
			<div class="punkt-main-itd d-flex align-items-center">
				<div class="circle circle1">
				</div>
				<p class="punkt-itd m-0">
					 Религиозные сооружения
				</p>
			</div>
			<div class="punkt-main-itd d-flex align-items-center">
				<div class="circle circle2">
				</div>
				<p class="punkt-itd m-0">
					 Кинотеатры/музеи
				</p>
			</div>
			<div class="punkt-main-itd d-flex align-items-center">
				<div class="circle circle3">
				</div>
				<p class="punkt-itd m-0">
					 Стадионы
				</p>
			</div>
			<div class="punkt-main-itd d-flex align-items-center">
				<div class="circle circle4">
				</div>
				<p class="punkt-itd m-0">
					 Учебные заведения
				</p>
			</div>
			<div class="punkt-main-itd d-flex align-items-center">
				<div class="circle circle5">
				</div>
				<p class="punkt-itd m-0">
					 Дома культуры
				</p>
			</div>
			<div class="punkt-main-itd d-flex align-items-center">
				<div class="circle circle6">
				</div>
				<p class="punkt-itd m-0">
					 Предприятия
				</p>
			</div>
			<div class="punkt-main-itd d-flex align-items-center">
				<div class="circle circle7">
				</div>
				<p class="punkt-itd m-0">
					 Парки
				</p>
			</div>
			<div class="punkt-main-itd d-flex align-items-center">
				<div class="circle circle8">
				</div>
				<p class="punkt-itd m-0">
					 Экскурсии
				</p>
			</div>
		</div>
		 <!-------------------------------------------------------------------------------->
		<div class="col-md-8 col-sm-12 map-holder-itd">
			 <!-- Здесь инлайновые стили от самого яндекса -->
			<!--<div style="border-radius:4px;position:absolute;overflow:hidden;top:0;bottom:0;left:0;right:0;">
 			<a href="https://yandex.ru/maps/172/ufa/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Уфа</a><a href="https://yandex.ru/maps/172/ufa/?ll=56.081293%2C54.814916&mode=usermaps&source=constructorLink&um=constructor%3A488863526f3bd5df7923958b47ee4b418a87d4636f877430673eb26a9bae245f&utm_medium=mapframe&utm_source=maps&z=14" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс.Карты — транспорт, навигация, поиск мест</a><iframe src="https://yandex.ru/map-widget/v1/-/CCU5bRAk0A" width="100%" height="100%" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
			</div>-->
			<div id="map" style="border-radius:4px;position:absolute;overflow:hidden;top:0;bottom:0;left:0;right:0;" ></div>
		</div>
		 <!-------------------------------------------------------------------------------->
	</div>
</div>
 </section>
<!-- MAP -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>