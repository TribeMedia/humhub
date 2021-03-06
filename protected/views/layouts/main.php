<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- start: Meta -->
        <meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- end: Mobile Specific -->

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="<?php echo Yii::app()->baseUrl; ?>/js/html5shiv.js"></script>
        <link id="ie-style" href="<?php echo Yii::app()->baseUrl; ?>/css/ie.css" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
        <link id="ie9style" href="<?php echo Yii::app()->baseUrl; ?>/css/ie9.css" rel="stylesheet">
        <![endif]-->

        <?php
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/bootstrap.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/ekko-lightbox-modified.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/modernizr.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.cookie.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.highlight.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.autosize.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.timeago.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.knob.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/wysihtml5-0.3.0.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/bootstrap3-wysihtml5.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.nicescroll.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.placeholder.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.nicescroll.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.iframe-transport.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.ui.widget.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.fileupload.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.color-2.1.0.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.flatelements.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/desktop-notify-min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/desktop-notify-config.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/app.js');

        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/animate.min.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/bootstrap.min.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/datepicker.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/style.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/resources/font-awesome/css/font-awesome.min.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/bootstrap-wysihtml5.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/flatelements.css');
        ?>

        <!-- start: render additional head (css and js files) -->
        <?php $this->renderPartial('//layouts/head'); ?>
        <!-- end: render additional head -->


        <!-- start: Favicon and Touch Icons -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo Yii::app()->baseUrl; ?>/ico/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo Yii::app()->baseUrl; ?>/ico/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->baseUrl; ?>//ico/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo Yii::app()->baseUrl; ?>/ico/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->baseUrl; ?>/ico/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo Yii::app()->baseUrl; ?>/ico/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo Yii::app()->baseUrl; ?>/ico/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo Yii::app()->baseUrl; ?>/ico/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo Yii::app()->baseUrl; ?>/ico/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo Yii::app()->baseUrl; ?>/ico/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo Yii::app()->baseUrl; ?>/ico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo Yii::app()->baseUrl; ?>/ico/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo Yii::app()->baseUrl; ?>/ico/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- end: Favicon and Touch Icons -->


    </head>

    <body>


        <!-- start: first top navigation bar -->
        <div id="topbar-first" class="topbar">
            <div class="container">
                <div class="topbar-brand hidden-xs">
                    <?php $this->widget('application.widgets.LogoWidget', array()); ?>
                </div>

                <div class="topbar-actions pull-right">
                    <?php $this->widget('application.modules_core.user.widgets.AccountTopMenuWidget'); ?>
                </div>

                <div class="notifications pull-right">

                    <!-- global notifications dropdown -->
                    <?php $this->widget('application.modules_core.notification.widgets.NotificationListWidget'); ?>

                    <!-- Notification addon widget for modules -->
                    <?php $this->widget('application.widgets.NotificationAddonWidget', array('widgets' => array())); ?>

                </div>

            </div>

        </div>
        <!-- end: first top navigation bar -->


        <!-- start: second top navigation bar -->
        <div id="topbar-second" class="topbar">
            <div class="container">
                <ul class="nav ">
                    <!-- load space chooser widget -->
                    <?php $this->widget('application.modules_core.space.widgets.SpaceChooserWidget', array()); ?>

                    <!-- load navigation from widget -->
                    <?php $this->widget('application.widgets.TopMenuWidget', array()); ?>
                </ul>

                <ul class="nav pull-right" id="search-menu-nav">
                    <?php $this->widget('application.widgets.TopMenuRightStackWidget', array()); ?>
                </ul>
            </div>
        </div>

        <!-- end: second top navigation bar -->

        <?php $this->widget('application.modules_core.tour.widgets.TourWidget', array()); ?>

        <!-- start: show content (and check, if exists a sublayout -->
        <?php if (isset($this->subLayout) && $this->subLayout != "") : ?>
            <?php echo $this->renderPartial($this->subLayout, array('content' => $content)); ?>
        <?php else: ?>
            <?php echo $content; ?>
        <?php endif; ?>
        <!-- end: show content -->

        <!-- start: Modal (every lightbox will/should use this construct to show content)-->
        <div class="modal" id="globalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="loader">
                            <div class="sk-spinner sk-spinner-three-bounce">
                                <div class="sk-bounce1"></div>
                                <div class="sk-bounce2"></div>
                                <div class="sk-bounce3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Modal -->

        <script type="text/javascript">
            // Replace the standard checkbox and radio buttons
            $('body').find(':checkbox, :radio').flatelements();
        </script>

        <?php echo HSetting::GetText('trackingHtmlCode'); ?>
    </body>
</html>
