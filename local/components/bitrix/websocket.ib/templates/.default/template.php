<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<p id="color">
    <?php if (isset($arResult['COLOR']) && $arResult['COLOR']) : ?>
    #<?=$arResult['COLOR']?>
    <?php endif; ?>
</p>

<script type="text/javascript">

    BX.ready(function(){
        BX.addCustomEvent("onPullEvent", function(module_id,command,params) {

            console.log(module_id,command,params);

            if (module_id == "bg_color" && command == 'check')
            {
                let color = "#"+params.COLOR;
                document.body.style.backgroundColor = color;
                document.getElementById('color').innerText = color;
            }
        });
        BX.PULL.extendWatch('PULL_COLOR');
    });

    <?php if (isset($arResult['COLOR']) && $arResult['COLOR']) : ?>
        document.body.style.backgroundColor = "#<?=$arResult['COLOR']?>";
    <?php endif; ?>

</script>
