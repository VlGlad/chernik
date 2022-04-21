<?php
$arUrlRewrite=array (
  2 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/video([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  17 => 
  array (
    'CONDITION' => '#^/promyshlennye-predpriyatiya/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/promyshlennye-predpriyatiya/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/religioznye-sooruzheniya/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/religioznye-sooruzheniya/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/mesta-kulturnogo-dosuga/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/mesta-kulturnogo-dosuga/index.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/uchebnye-zavedeniya/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/uchebnye-zavedeniya/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/istoriya-rayonov/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/istoriya-rayonov/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/ulitsy-i-doma/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/ulitsy-i-doma/index.php',
    'SORT' => 100,
  ),
  19 => 
  array (
    'CONDITION' => '#^/ekskursii/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/ekskursii/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/content/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/kinoteatr/index.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#^/parki/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/parki/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
