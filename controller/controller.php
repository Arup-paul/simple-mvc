<?php

include 'model/Model.php';

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function invoke() {

        if ( !isset( $_GET['Student'] ) ) {
            $students = $this->model->getStudentDetails();
            include 'view/Studentlist.php';
        } else {
            $students = $this->model->getStudent( $_GET['Student'] );
            include 'view/Viewstudent.php';
        }
    }
}

?>