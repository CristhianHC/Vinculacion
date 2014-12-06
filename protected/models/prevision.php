<?php

class prevision extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }    
    /*
     * Funcion de relacion entre prevision a paciente
     */
    public function relations() {
        return array(
            'pacientes'=>array(self::HAS_MANY,'paciente','idprevision')
        );
    }
}
