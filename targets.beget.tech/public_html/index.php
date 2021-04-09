<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("My Life");
?>

    <p class="home_text">
        Этот сайт это чисто мое развлечение, а также площадка для проведения разных экспериментов ну и в целях обучения
        конечно!
        Тут я рассказываю и показываю чем живу и как рождаются разные проекты созданные мной. Из основных таких хобби
        которыми я увлекаюсь это
        <b>"Программирование"</b>,
        <b>"Радиоэлектроника"</b>,
        <b>"Изучение английского"</b>,
        <b>"Ремонт авто и мото"</b>.
        Думаю со временем сайт разрастется в нечто большее. Здесь также буду размещать свои достижения и путешествия.
    </p>
    <div class="home_img">
        <img width="1024" alt="poznan.jpg" src="/upload/medialibrary/069/069f3e2bbe51d592f8cee7153749b75e.jpg"
             height="819"
             title="poznan.jpg">
    </div>
    <style>
        .home_text {
            font-family: Arial, Helvetica;
            font-size: 16px;
        }
        .home_img{
            text-align: center;
            margin-bottom: 15px
        }
    </style>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>