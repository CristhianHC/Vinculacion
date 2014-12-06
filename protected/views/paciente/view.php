<?php
$this->pageTitle = Yii::app()->name . " -Vista Paciente";
?>
<div class="page-header">
    <h3>Formulario para ver paciente</h3>
</div>
<div class="form-horizontal">
    <?php
    $form = $this->beginWidget('CActiveForm', array());
    ?>
    <fieldset class="table-bordered">
        <div class="control-group">
            <?php echo CHtml::label('Ruc', 'ruc', array('class' => 'input-xlarge', 'class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo CHtml::textField('ruc', $paciente->rut, array('readonly' => true));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo CHtml::label('Nombre', 'nombre', array('class' => 'input-xlarge', 'class' => 'control-label')); ?>
            <div class="controls">
            <?php
            echo CHtml::textField('nombre', $paciente->nombre, array('readonly' => true));
            ?>
            </div>
        </div>
        <div class="control-group">
<?php echo CHtml::label('Edad', 'edad', array('class' => 'input-xlarge', 'class' => 'control-label')); ?>
            <div class="controls">
            <?php
            echo CHtml::textField('edad', $paciente->edad, array('readonly' => true));
            ?>
            </div>
        </div>       
      

    </fieldset>
<?php $this->endWidget(); ?>
</div>