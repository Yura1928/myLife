<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult)) {
    foreach ($arResult as $arItem) {
        if ($arItem["SELECTED"]) {
            echo '<a href="' . $arItem["LINK"] . '" class="selected-menu">' . $arItem["TEXT"] . '</a>';
        } else {
            echo '<a href="' . $arItem["LINK"] . '" class="main-menu">' . $arItem["TEXT"] . '</a>';
        }
    }
} ?>