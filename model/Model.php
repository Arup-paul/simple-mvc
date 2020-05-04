<?php

include 'Student.php';

class Model {
    public function getStudentDetails() {

        return array(
            "Arup" => new Student( 'Arup', '22', 'student' ),
            "Bijoy" => new Student( 'Bijoy', '23', 'Bussinessman' ),
        );

    }

    public function getStudent( $title) {
        $allStudent = $this->getStudentDetails();
        return $allStudent [$title];

    }
}

?>