<?php
/*$this->widget('application.extensions.tablesorter.Sorter', array(
    'data'=>$records,
    'columns'=>array(
        
        'nombre',
        'direccion', // Relation value given in model
    )
));*/
$this->widget('application.extensions.tablesorter.Sorter', array(
    'data' => $records,
    'columns' => array(
        'id','nombre',
        'direccion',
        array('header'=>'Nombre',
              'value'=>'nombre'),
    ),
    'filters'=>array( // it was optional
        '',
        '',
        '',
         // won't filter this
        'filter-select', // filter as select box
    ),
    'buttons' => array(// it was optional
        array(
            'delete' => 'disable'), // disable the delete button
    ),
        )
);
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
