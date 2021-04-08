<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
global $USER;
?>
<html>
<head>
    <?$APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/custom.css">
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">
<? if ($USER->IsAdmin()) {
    $APPLICATION->ShowPanel();
} ?>
<div class="header">
    <div class="header_container">
        <div class="logo">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/local/templates/MyLife/include/logo.php"
                )
            ); ?>
        </div>
        <div class="info_header">
            <div class="support">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/templates/MyLife/include/support.php"
                    )
                ); ?>
            </div>
            <hr>
            <div class="menu">
                <? $APPLICATION->IncludeComponent("bitrix:menu", "Main_menu", Array(
                    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "top",    // Тип меню для остальных уровней
                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "1",    // Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                    "MENU_THEME" => "site",
                    "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                    "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                ),
                    false
                ); ?>
            </div>
        </div>

    </div>
</div>
<div class="container">
