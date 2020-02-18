<?php


class WebSocketSender
{
    function OnAfterIBlockElementAddHandler(&$arFields)
    {
        //colors ib
        if ($arFields['IBLOCK_ID'] == 1 && $arFields["ID"]>0 && CModule::IncludeModule("pull")) {

            $color = array_shift($arFields['PROPERTY_VALUES'][2]);

            if ($color['VALUE']) {
                //send color
                CPullWatch::AddToStack('PULL_COLOR',
                    Array(
                        'module_id' => 'bg_color',
                        'command' => 'check',
                        'params' => Array("COLOR" => $color['VALUE'])
                    )
                );
            }
        }

    }
}
