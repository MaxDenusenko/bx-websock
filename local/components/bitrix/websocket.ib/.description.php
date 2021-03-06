<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentDescription = array(
    'NAME' => Loc::getMessage("WEBSOOKET_COMPONENT_DETAIL_NAME"),
    'DESCRIPTION' => Loc::getMessage("WEBSOOKET_COMPONENT_DETAIL_DESCRIPTION"),
    'PATH' => array(
        'ID' => 'Websocket'
    ),
);
