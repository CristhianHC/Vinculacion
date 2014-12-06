<?php echo 'Prabando index';
/*$this->widget('application.extensions.tablesorter.Sorter', array(
    'data'=>$records,
    'columns'=>array(
        
        'nombre',
        'direccion', // Relation value given in model
    )
));*/
?>
<div ng-app ng-controller="AlumnosController" >
    <div >
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ruc</th>
            </tr>
            <tr ng-repeat="alumno in alumnos">

                <td> {{alumno.id}}</td>
                <td> {{alumno.nombre}}</td>
                <td>{{alumno.rut}}</td>

            </tr>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                                function AlumnosController($scope) {
                                    $scope.alumnos = <?php $paciente?>
                                }
            </script>
        </table>
    </div>
</div>        
<?php
   $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Agregar Telefono',
        'type'=>'primary',
        'htmlOptions'=>array(
            'data-toggle'=>'modal',
            'data-target'=>'#myModal',
        ),
    )); ?>
    
    <?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
<h1>dfsdfsd</h1>
   <?php
   $this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'publishDate',
    'attribute'=>'fecha_nacimiento',
    'language' => 'es',
    'htmlOptions' => array('readonly'=>"readonly"),
    'options'=>array(
'autoSize'=>true,
'dateFormat'=>'yy-mm-dd',
'buttonImageOnly'=>true,
'buttonText'=>'Fecha',
'selectOtherMonths'=>true,
'showAnim'=>'slide',
'showButtonPanel'=>true,
'showOn'=>'button', 
'showOtherMonths'=>true, 
'changeMonth' => 'true', 
'changeYear' => 'true', 
'minDate'=>'date("Y-m-d")', 
'maxDate'=> "+20Y",
),
));
   ?>
   <?php 
    $this->endWidget(); 
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'publishDate',
    'attribute'=>'fecha_nacimiento',
    'language' => 'es',
    'htmlOptions' => array('readonly'=>"readonly"),
    'options'=>array(
'autoSize'=>true,
'dateFormat'=>'yy-mm-dd',
'buttonImageOnly'=>true,
'buttonText'=>'Fecha',
'selectOtherMonths'=>true,
'showAnim'=>'slide',
'showButtonPanel'=>true,
'showOn'=>'button', 
'showOtherMonths'=>true, 
'changeMonth' => 'true', 
'changeYear' => 'true', 
'minDate'=>'date("Y-m-d")', 
'maxDate'=> "+20Y",
),
));