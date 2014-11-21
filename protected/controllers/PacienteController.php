<?php

class PacienteController extends Controller {

    public function actionIndex() {
    $records=Paciente::model()->findAll();
    
    $this->render('index',array(
        'records'=>$records,
    )); 
    }

    public function actionCreate() {
		$model  = new ValidarRegistroPaciente();
                if (isset($_POST['ValidarRegistro'])) {
                    $model->attributes = $_POST['ValidarRegistro'];
                    if (!$model->validate()) {
                        
                    }else{
                    }
                }
   $this->render('create',array('model'=>$model));
    }

    public function actionView($id) {
        $this->render('view', array('idPaciente' => $id,));
    }

    public function actionEdit($id) {
        $this->render('edit', array('idPaciente' => $id,));
    }
    public function actionFonasa() {
        $this->render('fonasa');
    }
    public function actionIsapre() {
        $this->render('isapre');
    }    
}
