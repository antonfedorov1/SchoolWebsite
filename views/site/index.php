<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<?php
foreach ($cats as $cat) {
    echo '<h3 class="news__title">' . $cat->title . '</h3>';
    echo '<span class="news__date">' . $cat->date . '</span>';
    echo '<p class="  ">' . $cat->text . '</p>';
}
?>

<?php
echo \yii\widgets\LinkPager::widget( [
        'pagination' => $pages,
]);

?>


<!--<pre>-->
<?php //print_r($cats)?><!--</pre>-->