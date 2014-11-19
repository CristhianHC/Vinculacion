<?php
$this->widget('application.extensions.tablesorter.Sorter', array(
    'data'=>$records,
    'columns'=>array(
        
        'nombre',
        'direccion', // Relation value given in model
    )
));