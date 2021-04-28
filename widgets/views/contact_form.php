<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

?>
<?php Pjax::begin(['enableReplaceState' => true, 'enablePushState' => true, 'linkSelector' => false]); ?>
<?php if ($model['success']): ?>
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <h4 style="color: #ffffff; margin-top: 30px;">Ваша заявка принята, наши специалисты свяжутся с вами в ближайщее время!</h4>
            </div>
        </div>
    </div>
<? else: ?>
    <?php $form = ActiveForm::begin(
        [
            'options' => ['data' => ['pjax' => true], 'class' => 'engecom-form']
        ]
    ); ?>
    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Имя', 'class' => 'form-control'])->label(false); ?>
    <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Телефон', 'class' => 'form-control', 'data-phone' => true])->label(false); ?>
    <?= $form->field($model, 'email')->textInput(['placeholder' => 'E-mail', 'class' => 'form-control'])->label(false); ?>

    <?= $form->field($model, 'subject')->textarea(['rows' => 3, 'placeholder' => 'Задайте Ваш вопрос или добавьте комментарий', 'class' => 'form-control'])->label(false) ?>
            <div class="agreement"><p>Отправляя форму обратной связи, вы <a href="/files/agreement.pdf" target="_blank" download="">соглашаетесь</a> с
            условиями <a href="/files/polozhenie-o-pd.pdf" target="_blank" download="">обработки и использования персональных данных</a></p></div>
            <?= $form->field($model, 'reCaptcha')->label(false)->widget(
            \himiklab\yii2\recaptcha\ReCaptcha3::className(),
            [
                'action' => 'index',
            ]
        ) ?>

    <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn form-btn']) ?>

    <?php ActiveForm::end(); ?>
<?php endif; ?>
<? Pjax::end(); ?>
