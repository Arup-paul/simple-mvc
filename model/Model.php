<?php

include 'Student.php';

class Model{
     public function getStudentDetails(){

         array(
             "st"=>new Student('Arup','22','student'),
             "st1"=>new Student('Bijoy','23','Bussinessman')
         );

       
      }

      public function getStudent($name){
          $allStudent = $this->getStudentDetails();
          return $allStudent['name'];



      }
}


?>