<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="language" content="nl" />

        <!-- blueprint CSS framework -->

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap-3.1.1/dist/css/bootstrap.min.css" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->  

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />


        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <?php Yii::app()->bootstrap->register(); ?>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Pame transport verhuis service</a>
                </div>
                <div class="navbar-collapse collapse">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'items' => array(
                            array('label' => 'Home', 'url' => array('/site/index')),
                            array('label' => 'Contact/Boeken', 'url' => array('/site/contact')),
                            array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                        ),
                        'htmlOptions' => array('class' => 'nav navbar-nav navbar-center'),
                    ));
                    ?>
                </div><!--/.nav-collapse -->
            </div>
        </div>



        <div class="container">

            <?php if (isset($this->breadcrumbs) && count($this->breadcrumbs) > 0): ?>
                <?php
                echo TbHtml::breadcrumbs($this->breadcrumbs);
                ?><!-- breadcrumbs -->
            <?php endif ?>


            <div class="jumbotron">
                <?php echo $content; ?>
            </div>
        </div><!-- page -->

        <div id="footer">

            <p class="text-muted">
                Copyright &copy; <?php echo date('Y'); ?> by Patrickswebsite.nl .<br/>
                All Rights Reserved.<br/>
            </p>
        </div><!-- footer -->
    </body>
</html>
