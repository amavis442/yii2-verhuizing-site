<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\captcha\Captcha;
use yii\bootstrap\Dropdown;
/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var app\models\ContactForm $model
 */
$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
    <?php if (Yii::$app->mail->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mail->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
    <?php endif; ?>
        </p>

<?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Boeking</h3>
                    </div>
                    <div class="panel-body">
                        <?= $form->field($model, 'adres') ?>
                    <?= $form->field($model, 'postcode') ?>
                    <?= $form->field($model, 'plaats') ?>
                    <?= $form->field($model, 'telefoon')->hint('Telefoon of mobiel nummer waar u overdag bereikbaar op bent.') ?>
                    <?= $form->field($model, 'datum',['template'=>'<div class="row"><div class="col-lg-4">{label}</div><div class="col-lg-6">{input}</div></div>'])->widget(DatePicker::className(),[
                        'clientOptions' => ['dateFormat' => 'dd-mm-yy','showOn'=>'button','buttonImage'=>"images/calendar.gif", 'buttonImageOnly'=>true]
                    ]) ?>
                    <?= $form->field($model, 'aantal_dagen',['template'=>'<div class="row"><div class="col-lg-4">{label}</div><div class="col-lg-6">{input}</div></div>'])->dropDownList(array(1=>1,2=>2,3=>3),array('id'=>'aantal_dagen') ) ?>
                    </div>
                </div>        

                <?=
                $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])
                ?>
                <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>

        </div>

<?php endif; ?>
</div>
