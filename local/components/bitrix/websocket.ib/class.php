<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

class WebSocketTestClass extends CBitrixComponent
{
    const COLOR_FIELD = 'ATT_COLOR';

    private function run()
    {
        CPullWatch::Add($this->arParams['USER_ID'], 'PULL_COLOR');

        $elements = CIBlockElement::GetList (
            Array("ID" => "DESC"),
            Array("IBLOCK_ID" => 1),
            false,
            false,
            Array("PROPERTY_".self::COLOR_FIELD)
        );

        $lastElement = $elements->GetNext();

        if ($lastElement) {
            $this->arResult['COLOR'] = $lastElement["PROPERTY_".self::COLOR_FIELD."_VALUE"];
        }

        return true;
    }

    private function includeModules()
    {
        if (!CModule::IncludeModule('iblock') || !CModule::IncludeModule("pull"))
        {
            ShowError("Не удалось подключить модули");
            return false;
        }

        if (!strlen($this->arParams['USER_ID']) > 0)
        {
            ShowError("Не доступно неавторизованым пользвателям");
            return false;
        }

        return true;
    }

    public function executeComponent()
    {
        global $USER;
        $this->arParams['USER_ID'] = $USER->GetID();

        $this->includeModules() && $this->run() && $this->includeComponentTemplate();
    }
}
