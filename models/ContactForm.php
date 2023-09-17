<?php

namespace app\models;

use Yii;
use yii\base\Model;


class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;

    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            ['email', 'email'],
            ['body', 'trim'],
            ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'subject' => 'Тема сообщения',
            'body' => 'Текст сообщения',
            'verifyCode' => 'Код проверки',
        ];
    }

    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo(Yii::$app->params['schoolEmail'])
                ->setFrom(Yii::$app->params['schoolEmail'])
                ->setSubject("Обратная связь школы")
                ->setHtmlBody("<h4>Имя: $this->name</br>E-mail: $this->email</br>Тема: $this->subject</br>Сообщение: $this->body</h4>")
                ->send();

            return true;
        }
        return false;
    }
}
