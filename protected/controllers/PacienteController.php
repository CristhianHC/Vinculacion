<?php

class PacienteController extends Controller {

    public function actionIndex() {
        $pacientes=paciente::model()->findAll();
            $this->render('index',array('p'=>$pacientes,));
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
        $paciente = $this->loadModel($id);
        $this->render('view', array('paciente' => $paciente,));
    }

    public function actionEdit($id) {
        $paciente = $this->loadModel($id);
        $this->render('edit', array('idPaciente' => $id,));
    }
    public function actionFonasa() {
        $this->render('fonasa');
    }
    public function actionIsapre() {
        $isapre=paciente::model()->findAll();
        $this->render('isapre',array('isapre'=>$isapre));
    }
    public function actionEnfermedades() {
        $this->render('enfermedades');
    }
    /*
     * Dado un id en este caso de paceinte busca dicho paceinte 
     * por clave primaria usando findByPk y devuelve un objeto de 
     * tipo paciente, si no existe manda una exception
     */
     public function loadModel($id) {
        $model=paciente::model()->findByPk($id);
        if ($model===null) 
            throw new CHttpException(404,'La pagina no existe');        
        return $model;
    }   
}
