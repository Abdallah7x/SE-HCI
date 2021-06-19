<?php

REQUIRE_ONCE ("../classes/DBconnect.php");
class survey{
    public $id;
    public $fullname;
    public $question111;
    public $question222;
    public $question333;
    public $question444;
    public $question555;
    public $question1;
    public $question2;
    public $question3;
    public $question4;
    public $question5;
   
    public function studentsurvey(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
      $query = "INSERT INTO ssurvey (`id`,`fullname`,`q1a`,`q2a`,`q3a`,`q4a`,`q5a`)
      VALUES (null,'$this->fullname','$this->question111','$this->question222','$this->question333','$this->question444','$this->question555')";
      $result= $mysqli->query($query);
      return $result;
    }

    public function readstudentsurvey(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
      $query = "SELECT * FROM ssurvey";
      $result= $mysqli->query($query);
      return $result;
    }

    public function readteachersurvey(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
      $query = "SELECT * FROM tsurvey";
      $result= $mysqli->query($query);
      return $result;
    }

      public function teachersurvey(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
      $query = "INSERT INTO tsurvey (`id`,`fullname`,`q1a`,`q2a`,`q3a`,`q4a`,`q5a`)
      VALUES (null,'$this->fullname','$this->question1','$this->question2','$this->question3','$this->question4','$this->question5')";
      $result= $mysqli->query($query);
      return $result;
    }
}
?>
