<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
        <meta name="language" content="es" />
        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" media="screen, projection" />
        <?php
        Yii::app()->bootstrap->registerAllCss();
        Yii::app()->bootstrap->registerCoreScripts();
        ?>
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <!--incluimos un archivo javascript en este caso jquery -->
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body>
        <section class="container"  id="page">
            <!-- header -->  
            <section class="navbar  navbar-inverse nav-tabs nav-header">
                <div class="navbar-inner  ">
                    <button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="<?php echo Yii::app()->homeUrl; ?>">
                        <?php echo CHtml::encode(Yii::app()->name); ?>
                    </a>
                    <div class="nav-collapse collapse">
                        <?php
                        $this->widget('bootstrap.widgets.TbMenu', array(
                            'items' => array(
                                array('label' => 'Pacientes', 'url' => array('/paciente/index')),
                            ),
                            'htmlOptions' => array('class' => 'nav navbar-nav')
                        ));
                        ?>
                    </div>
                </div>
            </section>
            <!-- mainmenu -->
            <div class="container-fluid">
                <div class="row-fluid">                
                    <section class="span3">
                        <div class="well sidebar-nav">
                            <ul class="nav nav-list">
                                <?php
                                $this->widget('bootstrap.widgets.TbMenu', array(
                                    'items' => array(
                                        array('label' => 'Registrar Paciente', 'url' => array('/paciente/create')),
                                        array('label' => 'Listar paciente', 'url' => array('/paciente/index')),
                                        array('label' => 'Afiliados a Fenasa', 'url' => array('/paciente/fonasa')),
                                        array('label' => 'Afiliados a Isapre', 'url' => array('/paciente/isapre')),
                                    ),
                                ));
                                ?>
                            </ul>
                        </div>
                    </section>
                    <section class="span9 container-fluid">
                        <?php echo $content; ?>
                        <!-- Aqui va el contenido de las vistas -->
                    </section>
                </div>
                <div id="footer">
                    Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                    All Rights Reserved.<br/>
                </div><!-- footer -->
            </div>
        </section><!-- page -->
    </body>
</html>