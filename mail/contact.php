<div style="background: #fdb662; width: 700px;margin: 0 auto;padding: 10px;margin-bottom: 20px">
    <br>
    <p align="center"><img src="<?=\Yii::$app->getUrlManager()->getHostInfo()?>/img/logo.png" width="54" height="54" alt=""/></p>
    <p style="font-size: 18px; text-align: center;"><?= Yii::$app->formatter->asDate(new DateTime(), 'd MMMM yyyy года в HH:mm') ?><br>
        поступила заявка с сайта <a href="<?=\Yii::$app->getUrlManager()->getHostInfo()?>" target="_blank">ikkr.spb.ru</a></p>
    <hr width="500">
</div>
<table align="center" border="0" cellspacing="5" cellpadding="5" width="700" class="table-info">
    <?php if (!empty($model->name)): ?>
        <tr>
            <td align="right" style="font-weight: 500;">Имя пользователя:</td>
            <td align="left" style="font-style: italic;"><?=$model->name?>
            </td>
        </tr>
    <?php endif; ?>
    <?php if (!empty($model->phone)): ?>
        <tr>
            <td align="right" style="font-weight: 500;">Телефон:</td>
            <td align="left" style="font-style: italic;"><?=$model->phone?></td>
        </tr>
    <?php endif; ?>
    <?php if (!empty($model->email)): ?>
        <tr>
            <td align="right" style="font-weight: 500;">E-mail:</td>
            <td align="left" style="font-style: italic;"><a href="mailto:<?= $model->email ?>"><?= $model->email ?></a>
            </td>
        </tr>
    <?php endif; ?>
    <?php if (!empty($model->subject)): ?>
        <tr>
            <td align="right" style="font-weight: 500;">Сообщение:</td>
            <td align="left" style="font-style: italic;"><?= $model->subject ?></td>
        </tr>
    <?php endif; ?>
</table>