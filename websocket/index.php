<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

<?$APPLICATION->IncludeComponent("bitrix:websocket.ib", "");?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
