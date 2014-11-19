<?php
$this->pageTitle = Yii::app()->name . " -Registro Paciente";
?>
<div class="page-header">
    <h3>Formulario para crear paciente</h3>
</div>
<div class="form-horizontal">
    <?php
    $form = $this->beginWidget('CActiveForm', array
        (
        'method' => 'POST',
        'action' => Yii::app()->createUrl('paciente/create'),
        'id' => 'registro',
        'enableAjaxValidation' => true,
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
            'validateOnChange' => true,
        ),
    ));
    ?>
    <fieldset class="table-bordered">
        <div class="control-group">
            <?php echo $form->labelEx($model, 'ruc', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->textField($model, 'ruc', array('class' => 'input-xlarge'));
                echo $form->error($model, 'ruc', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'nombre', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->textField($model, 'nombre', array('class' => 'input-xlarge'));
                echo $form->error($model, 'nombre', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'edad', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->numberField($model, 'edad', array('class' => 'input-xlarge'));
                echo $form->error($model, 'edad', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'prevision', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->dropDownList($model, 'prevision', array('prompt' => 'Select location', '1' => 'Fonasa', '2' => 'Isapre'), array('class' => 'input-xlarge'));
                echo $form->error($model, 'prevision');
                ?>
            </div>
        </div>  
        <div class="buttons">
            <br>
            <?php
            echo CHtml::submitButton('Registrarme', array('class' => 'btn btn-primary'));
            ?>
            <?php
            echo CHtml::submitButton('Limpiar', array('class' => 'btn'));
            ?>
        </div>
    </fieldset>
    <?php $this->endWidget(); ?>
</div>