<?php
    abstract class A{
        abstract protected function grades($marks);
    }

    class B extends A{
        public function grades($marks){
            if($marks>90){
                $grades =  "A Grade";
            }else if($marks>80){
                $grades =  "B Grade";
            }else if($marks>70){
                $grades =  "C Grade";
            }else if($marks>60){
                $grades = "D Grades";
            }else{
                $grades = "F Grades";
            }
            return "Your mark : $marks is $grades";
        }
    }
    $obj = new B;
    echo $obj->grades(95);

?>