<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $success = false;
    public $reCaptcha;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'required', 'message' => 'обязательное поле'],
            ['email', 'email', 'skipOnError' => true, 'message' => 'неверный формат E-mail адреса'],
            ['phone', 'match', 'pattern' => '/^\+7\s\([\d]{3}\)\s[\d]{3}-[\d]{2}-[\d]{2}$/i', 'message' => 'неверный формат телефонного номера'],
            ['subject', 'string'],
            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator3::className(),
                'threshold' => 0.5,
                'action' => 'index',
            ],
        ];
    }


    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact()
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose('contact', ['model' => $this])
                ->setTo(Yii::$app->params['adminEmail'])
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setSubject('Новая заявка с сайта Инженерная Комплектация')
                ->send();
            $this->success = true;

            return true;
        }
        return false;
    }
}
