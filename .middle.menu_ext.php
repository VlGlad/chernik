<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?
if (!CModule::IncludeModule('iblock')) {
        die('iblock module');
    }

    $iblocks = \CIBlock::GetList();

    while ($fields = $iblocks->GetNext()) {
        if ($fields['CODE'] == "slider-inf"){
            continue;
        }
        $aMenuLinksNew[] = array(
            $fields['NAME'],
            $fields['LIST_PAGE_URL'],
            $fields['ID'],
            '',
            '',
        );

    }
    $aMenuLinks = array_merge($aMenuLinksNew, $aMenuLinks);
	?>

	