<?php
session_start();

AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("WebSocketSender", "OnAfterIBlockElementAddHandler"));

CModule::AddAutoloadClasses(
    '',
    array(
        'WebSocketSender' => '/local/php_interface/helper/WebSocketSender.php',
    )
);
