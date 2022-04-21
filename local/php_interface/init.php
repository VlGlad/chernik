<?php

function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}


AddEventHandler("iblock", "OnBeforeIBlockElementAdd", "OnBeforeIBlockElementAddHandler");


function OnBeforeIBlockElementAddHandler(&$arFields)
{

    $id_block_field = array(
        "4" => array("4", "24"),
        "5" => array("5", "27"),
        "6" => array("6", "29"),
        "7" => array("8", "22"),
        "8" => array("10", "31"),
        "9" => array("12", "32"),
        "10" => array("15", "33"),
        "11" => array("18", "34")
    );


    // определяем цвет точки по ID блока
    $colors = array(
            "6" => "#FF6868",
            "7" => array(
                "17" => "#FF6868",
                "18" => "#7ACFEA",
                "19" => "#ECC985"
            ),
            "8" => "#C57DDE",
            "9" => "#878ED5",
            "10" => "#682E2E",
            "11" => "#C7E473"
        );
    
    $color = $colors[$arFields["IBLOCK_ID"]];
    
    if ($arFields["IBLOCK_ID"] == "7") {
        $color = $color[$arFields["PROPERTY_VALUES"]["37"]["0"]["VALUE"]];
    }
    
    // переводим координаты в числа
    $coordinates = explode(",", $arFields["PROPERTY_VALUES"][$id_block_field[$arFields["IBLOCK_ID"]]["1"]]["n0"]["VALUE"]);
    array_walk($coordinates, function(&$v){ $v = floatval($v); });
    
    // формируем массив для перевода в json строку
    $point_arr = array(
        "type" => "Feature",
        "id" => $arFields["CODE"],
        "geometry" => array(
            "type" => "Point",
            "coordinates" => $coordinates
        ),
        "properties" => array(
            "balloonContentHeader" => $arFields["NAME"],
            "balloonContentBody" => $arFields["PROPERTY_VALUES"][$id_block_field[$arFields["IBLOCK_ID"]]["0"]]["n0"]["VALUE"],
            "hintContent" => $arFields["NAME"]
        ),
        "options" => array(
            "iconColor" => $color
            )
    );
    

    $filename = "e:\\programs\\OpenServer\\domains\\chernikovka.proj\\data.json";

    $handle = @fopen($filename, 'rw+');
    

    // create the file if needed
    if ($handle === null)
    {
        $handle = fopen($filename, 'w+');
    }

    flock($handle, LOCK_EX);
    
    if ($handle)
    {
        // seek to the end
        fseek($handle, 0, SEEK_END);
    
        // are we at the end of is the file empty
        if (ftell($handle) > 0)
        {
            // move back a byte
            fseek($handle, -2, SEEK_END);
    
            // add the trailing comma
            fwrite($handle, ",\n", 2);
    
            // add the new json string
            fwrite($handle, json_encode($point_arr, JSON_UNESCAPED_UNICODE) . "]}");
        }
        else
        {
            // write the first event inside an array
            fwrite($handle, json_encode(array("type" => "FeatureCollection", "features" => array($point_arr)), JSON_UNESCAPED_UNICODE));
        }
    
            // close the handle on the file
            fclose($handle);
    }

    flock($handle, LOCK_UN);
}
?>
