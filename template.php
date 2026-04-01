<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>

<div class="contact-form">

    <div class="contact-form__head">
        <div class="contact-form__head-title"><?= htmlspecialcharsbx($arResult['FORM_TITLE']) ?></div>
        <?php if (!empty($arResult['FORM_DESCRIPTION'])): ?>
            <div class="contact-form__head-text"><?= htmlspecialcharsbx($arResult['FORM_DESCRIPTION']) ?></div>
        <?php endif; ?>
    </div>

    <?php if ($arResult['isFormErrors'] === 'Y'): ?>
        <div class="contact-form__errors">
            <?= $arResult['FORM_ERRORS_TEXT'] ?>
        </div>
    <?php endif; ?>

    <?= $arResult['FORM_HEADER'] ?>

    <div class="contact-form__form">

        <div class="contact-form__form-inputs">
            <?php foreach ($arResult['QUESTIONS'] as $fieldSid => $arQuestion): ?>
                <div class="input contact-form__input">
                    <label class="input__label">

                        <div class="input__label-text">
                            <?= htmlspecialcharsbx($arQuestion['CAPTION']) ?>
                            <?php if ($arQuestion['REQUIRED'] === 'Y'): ?><?= $arResult['REQUIRED_SIGN'] ?><?php endif; ?>
                        </div>

                        <?php
                        $html = $arQuestion['HTML_CODE'];
                        $html = str_replace('<input', '<input class="input__input"', $html);
                        $html = str_replace('<textarea', '<textarea class="input__input"', $html);
                        ?>
                        <?= $html ?>

                        <?php if (!empty($arResult['FORM_ERRORS'][$fieldSid])): ?>
                            <div class="input__notification">
                                <?= htmlspecialcharsbx($arResult['FORM_ERRORS'][$fieldSid]) ?>
                            </div>
                        <?php endif; ?>

                    </label>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">
                Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных данных&raquo;.
            </div>

            <input type="submit" name="web_form_submit"
                   class="form-button contact-form__bottom-button"
                   value="<?= htmlspecialcharsbx(trim($arResult['arForm']['BUTTON']) === '' ? GetMessage('FORM_ADD') : $arResult['arForm']['BUTTON']); ?>" />
        </div>

    </div>

    <?= $arResult['FORM_FOOTER'] ?>

</div>