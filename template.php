<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="news-list">
    <?foreach($arResult["ITEMS"] as $arItem):?>

        <div class="news-card">
            <a class="news-card__link" href="<?=$arItem["DETAIL_PAGE_URL"] ?: '#'?>">

                <?if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
                    <div class="news-card__image">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
                    </div>
                <?endif;?>

                <div class="news-card__body">
                    <div class="news-card__title">
                        <?=$arItem["NAME"]?>
                    </div>

                    <?if(!empty($arItem["PREVIEW_TEXT"])):?>
                        <div class="news-card__text">
                            <?=$arItem["PREVIEW_TEXT"]?>
                        </div>
                    <?endif;?>
                </div>

            </a>
        </div>

    <?endforeach;?>
</div>
