<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>


<div class="col-md-8 order-md-1">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.register",
        "",
        Array(
            "AUTH" => "Y",
            "REQUIRED_FIELDS" => array("NAME"),
            "SET_TITLE" => "Y",
            "SHOW_FIELDS" => array("EMAIL", "NAME"),
            "SUCCESS_PAGE" => "/websocket",
            "USER_PROPERTY" => array(),
            "USER_PROPERTY_NAME" => "",
            "USE_BACKURL" => "Y"
        )
    );?>
</div>

<div class="col-md-4 order-md-2 mb-4">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.auth.form",
        "",
        Array(
            "AUTH_FORGOT_PASSWORD_URL" => "",
            "AUTH_REGISTER_URL" => "",
            "AUTH_SUCCESS_URL" => "/websocket"
        )
    );?>
</div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
