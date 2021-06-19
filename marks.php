<?php
REQUIRE_ONCE ("../classes/DBconnect.php");
class Homework{
    public $hw_id;
    public $name;
    public $description;
    public $duedate;
    public $entrydate;
    public $uploads;
    public $subject;
    public $class;
    public $teacher_id;

    public function viewAllHws(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "SELECT * FROM homework ";
        $result= $mysqli->query($query);
        return $result;
      }

     public function SpecificClass($class){
            $db = dbconnect::getInstance();
            $mysqli = $db->getConnection();
            $query = "SELECT * FROM homework WHERE class='$class'";
            $result= $mysqli->query($query);
            return $result;
      }

      public function viewSpecificSubject($subject,$class){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "SELECT * FROM homework WHERE subject='$subject' AND class='$class'";
        $result= $mysqli->query($query);
        return $result;
      }

      public function AddHw(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "INSERT INTO homework (`id`,`name`,`descrip`,`duedate`,`entry`,`subject`,`class`,`uploads`)
        VALUES (null,'$this->name','$this->description','$this->duedate','$this->entrydate','$this->subject','$this->class','$this->uploads')";
          $result= $mysqli->query($query);
          echo $query;
        return $result;
      }

      public function EditHw(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query =  "UPDATE homework SET name='$this->name' ,descrip='$this->desc' ,duedate='$this->duedate',entry='$this->entry',subject='$this->subject',class='$this->class',,uploads='$this->uploads' WHERE hw_id='$this->hw_id'";
        $result= $mysqli->query($query);
        return $result;
      }
      public function DeleteHw(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query =  "DELETE FROM homework WHERE hw_id = '$this->hw_id'";
        $result= $mysqli->query($query);
        return $result;
      }

}
?>
