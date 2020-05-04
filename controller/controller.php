<?php

include 'model/Model.php';

class Controller{

    public $model;

   public function __construct(){
       $this->model = new Model();
   }

   public function invoke(){
    
     if(!isset($_GET['student'])){
       $students =  $this->model->getStudentDetails();
     }else{
        $student =  $this->model->getStudent($_GET['student']);
     }
   }
}


?>