<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="barba-wrapper">
    <div class="article-list">

        <?foreach($arResult["ITEMS"] as $arItem):?>

            <a class="article-item article-list__item"
               href="<?=$arItem["DETAIL_PAGE_URL"] ?: '#'?>"
               data-anim="anim-3">

                <div class="article-item__background">
                    <?php
                    // picture from infoblock or default
                    $img = !empty($arItem["PREVIEW_PICTURE"]["SRC"])
                        ? $arItem["PREVIEW_PICTURE"]["SRC"]
                        : $templateFolder."/images/article-item-bg-1.jpg";
                    ?>
                    <img src="<?=$img?>" alt="<?=htmlspecialchars($arItem["NAME"])?>">
                </div>

                <div class="article-item__wrapper">

                    <div class="article-item__title">
                        <?=htmlspecialchars($arItem["NAME"])?>
                    </div>

                    <div class="article-item__content">
                        <?=htmlspecialchars($arItem["PREVIEW_TEXT"])?>
                    </div>

                </div>

            </a>

        <?endforeach;?>

    </div>
</div>