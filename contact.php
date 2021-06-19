<?php
REQUIRE_ONCE ("../classes/DBconnect.php");
class contact{
    public $id;
    public $name;
    public $email;
    public $number;
    public $enrolled;
    public $answer;
    public $question;
    
    public function acceptquestion(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "UPDATE contact SET answer='$this->answer' WHERE id= '$this->id'";
        $result= $mysqli->query($query);
        return $results;
      }

    public function insertcontact(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "INSERT INTO contact (`id`,`name`,`email`,`number`,`enrolled`,`question`)
        VALUES (null,'$this->name','$this->email','$this->number','$this->enrolled','$this->question')";
        $result= $mysqli->query($query);
        return $result;
      }
  
      public function viewfreq(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "SELECT * from contact";
        $result= $mysqli->query($query);
        return $result;
      }

      public function declinequestion($id){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "DELETE FROM contact WHERE id = '$id'";
        $result= $mysqli->query($query);
    
        }

      public function viewquestions(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "SELECT question,name,email,number,id,enrolled from contact ";
        $result= $mysqli->query($query);
        return $result;
      }
}

?>
