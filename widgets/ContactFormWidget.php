<?php


namespace app\widgets;

use Yii;
use yii\base\Widget;
use app\models\ContactForm;

class ContactFormWidget extends Widget
{
    public function run() {
        $model = new ContactForm();
        if(Yii::$app->request->isPjax){
            if($model->load(Yii::$app->request->post()) && $model->validate()){
                $model->contact();
                return $this->render('contact_form', compact ('model'));
            }
        }
        return $this->render('contact_form', compact('model'));
    }

}