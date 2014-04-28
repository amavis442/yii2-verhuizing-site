<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
    'Contact',
);
?>

<h1>Contact / Boeking</h1>

<?php if (Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

<?php else: ?>

    <p>
        Heeft u nog vragen of wilt u ons boeken, vul dan onderstaand formulier in.
    </p>

    <div class="form">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'contact-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>

        <p class="note">Velden met een <span class="required">*</span> zijn verplicht.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Contact</h3>
            </div>
            <div class="panel-body">

                <div class="row">
                    <?php echo $form->labelEx($model, 'name'); ?>
                    <?php echo $form->textField($model, 'name'); ?>
                    <?php echo $form->error($model, 'name'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model, 'email'); ?>
                    <?php echo $form->textField($model, 'email'); ?>
                    <?php echo $form->error($model, 'email'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model, 'subject'); ?>
                    <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128)); ?>
                    <?php echo $form->error($model, 'subject'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model, 'body'); ?>
                    <?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50)); ?>
                    <?php echo $form->error($model, 'body'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Boeking</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php echo $form->labelEx($model, 'adres'); ?>
                    <?php echo $form->textField($model, 'adres'); ?>
                    <?php echo $form->error($model, 'adres'); ?>
                </div>
                <div class="row">
                    <?php echo $form->labelEx($model, 'postcode'); ?>
                    <?php echo $form->textField($model, 'postcode'); ?>
                    <?php echo $form->error($model, 'postcode'); ?>
                </div>
                <div class="row">
                    <?php echo $form->labelEx($model, 'plaats'); ?>
                    <?php echo $form->textField($model, 'plaats'); ?>
                    <?php echo $form->error($model, 'plaats'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model, 'telefoon'); ?>
                    <?php echo $form->textField($model, 'telefoon'); ?>
                    <?php echo $form->error($model, 'telefoon'); ?>
                    <p class="hint" style='font-size:10pt'>
			Telefoon of mobiel nummer waar u overdag bereikbaar op bent.
                    </p>
                </div>


                <div class="input-append">
                    <?php echo $form->labelEx($model, 'datum'); ?>
                    <?php
                    $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array('name' => 'datum',
                        'pluginOptions' => array(
                            'format' => 'dd-mm-yyyy'
                        ))
                    );
                    ?><span class="add-on"><icon class="icon-calendar"></icon></span>
                    <?php echo $form->labelEx($model, 'aantal_dagen'); ?>
                    <?php
                    $this->widget('yiiwheels.widgets.select2.WhSelect2', array('name' => 'aantal_dagen',
                        'data' => array(1 => '1', 2 => '2', 3 => '3'),
                        'pluginOptions' => array(
                            'placeholder' => 'type 2amigos',
                            'width' => '50px',
                            'tokenSeparators' => array(',', ' ')
                        ))
                    );
                    ?>
                </div>

            </div>
        </div>

        <?php if (CCaptcha::checkRequirements()): ?>
            <div class="row">
                <?php echo $form->labelEx($model, 'verifyCode'); ?>
                <div>
                    <?php $this->widget('CCaptcha'); ?>
                    <?php echo $form->textField($model, 'verifyCode'); ?>
                </div>
                <div class="hint">Vul de letters in zoals ze in bovenstaand plaatje worden getoond.
                    <br/>De letters zijn niet hoofdletter gevoelig.</div>
                <?php echo $form->error($model, 'verifyCode'); ?>
            </div>
        <?php endif; ?>

        <div class = "row buttons">
            <?php echo TbHtml::submitButton('Versturen', array('color' => TbHtml::BUTTON_COLOR_PRIMARY));
            ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->

<?php endif; ?>