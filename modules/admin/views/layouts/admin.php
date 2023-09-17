<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <?= Html::csrfMetaTags() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<div class="container container--main__container">

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            <a href="../site/index"><div class="img-header"></div></a>
            </div>


            <div class="col-sm-8">
                <h1 class="title-in-header">Муниципальное бюджетное общеобразовательное учреждение "Причулымская
                    основная</br> общаеобразовательная школа"</br> Зырянского района</h1>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-sm-3">

            <div class="menu-body">
                <nav class="nav flex-column">

                <ul id="accordion" class="accordion">
                        <li class="sigle-link">
                            <div class="link"><?= Html::a('Главная', ['/']) ?></div>
                        </li>
                        <li>
                            <div class="link"><i class="fa fa-mobile"></i>Сведения об образовательной организации<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><?= Html::a('Основные сведения', ['../site/basic']) ?></li>
                                <li><?= Html::a('Структура и органы управления', ['../site/structure']) ?></li>
                                <li><?= Html::a('Документы', ['../site/documents']) ?></li>
                                <li><?= Html::a('Образование', ['../site/education']) ?></li>
                                <li><?= Html::a('Образовательные стандарты', ['../site/educational']) ?></li>
                                <li><?= Html::a('Руководство.Педагогический состав', ['../site/guide']) ?></li>
                                <li><?= Html::a('Материально-техническое обеспечение и оснащённость образовательного процесса', ['../site/financially']) ?></li>
                                <li><?= Html::a('Стипендии и иные виды материальной поддержки', ['../site/scholarships']) ?></li>
                                <li><?= Html::a('Финансово-хозяйственная деятельность', ['../site/financiallys']) ?></li>
                                <li><?= Html::a('Вакантные места для приёма', ['../site/vacant']) ?></li>
                            </ul>
                        </li>
                        
                        <li class="sigle-link"><div class="link"><?= Html::a('Организация работы с одарёнными детьми', ['../site/organization']) ?></div></li>
                        <li class="sigle-link"><div class="link"><?= Html::a('Безопасность дорожного движения', ['../site/safety']) ?></div></li>
                        <li class="sigle-link"><div class="link"><?= Html::a('Профориентация', ['../site/career']) ?></div></li>
                        <li class="sigle-link"><div class="link"><?= Html::a('Реализация ГТО', ['../site/implementation']) ?></div></li>
                        <li class="sigle-link"><div class="link"><?= Html::a('Родителям', ['../site/parents']) ?></div></li>
                        <li class="sigle-link"><div class="link"><?= Html::a('Дистанционное обучение', ['../site/remote']) ?></div></li>
                        <li class="sigle-link"><div class="link"><?= Html::a('ЕПГУ - предоставление государственных услуг', ['../site/provision']) ?></div></li>
                        
                        <li>
                            <div class="link"><i class="fa fa-globe"></i>Информационная безопасность<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><?= Html::a('Локальные акты', ['../site/local']) ?></li>
                                <li><?= Html::a('Нормативное регулирование', ['../site/normative']) ?></li>
                                <li><?= Html::a('Педагогам', ['../site/educators']) ?></li>
                                <li><?= Html::a('Ученикам', ['../site/students']) ?></li>
                                <li><?= Html::a('Родителям', ['../site/toparents']) ?></li>
                                <li><?= Html::a('Детские безопасные сайты', ['../site/baby']) ?></li>
                            </ul>
                        </li>

            
                        <li class="sigle-link"><div class="link"><?= Html::a('ВсОШ', ['../site/vsosh']) ?></div></li>
                        <li class="sigle-link"><div class="link"><?= Html::a('Противодействие коррупции', ['../site/counteraction']) ?></div></li>
                        <li class="sigle-link"><div class="link"><?= Html::a('Обратная связь', ['../site/contact']) ?></div></li>
                        

                        <li class="sigle-link">
                        <div class="link"><?= Html::a('Меню', ['/admin']) ?>
                            <?php if(!Yii::$app->user->isGuest): ?>
                                <a href="<?= \yii\helpers\Url::to(['/site/logout']) ?>"><i class="fa fa-user"></i>
                                        <?= Yii::$app->user->identity['username']?> (Выход)</a>
                            <?php endif; ?>
                        </div>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <div class="col-sm-9">
        
        <div class="content">
        <?= $content ?>
        </div>
           
        </div>
    </div>



</div>

<footer>
    <div>
        <p>Сделан в 2020г. Официальный сайт МБОУ «Причулымская ООШ»</p>
    </div>
</footer>

</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>