<?php


namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class NewsForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'news';
    }

}