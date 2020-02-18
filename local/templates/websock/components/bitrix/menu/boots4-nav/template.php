<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?if (!empty($arResult)):?>
    <ul class="nav justify-content-center">

        <? foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <?if($arItem["SELECTED"]):?>
            <li class="nav-item">
                <a href="<?=$arItem["LINK"]?>"  class="nav-link active"><?=$arItem["TEXT"]?></a>
            </li>
        <?else:?>
            <li class="nav-item">
                <a href="<?=$arItem["LINK"]?>"  class="nav-link"><?=$arItem["TEXT"]?></a>
            </li>
        <?endif?>

        <?endforeach?>

        <?if ($USER->IsAuthorized()):?>
        <li class="nav-item">
            <a class="nav-link" href="<?echo $APPLICATION->GetCurPageParam("logout=yes", array(
                "login",
                "logout",
                "register",
                "forgot_password",
                "change_password"));?>">Logout</a>
        </li>
        <?else:?>
        <li class="nav-item">
            <a class="nav-link" href="/">Sign Up/Sign In</a>
        </li>
        <?endif;?>

    </ul>
<?endif?>
