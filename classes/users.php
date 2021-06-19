<?php
REQUIRE_ONCE ("connectionToDataBase.php");
class Users{
    public $userID;
    public $userFName;
    public $userMName;
    public $userLName;
    public $email;
    public $phoneNo;
    public $Age;
    public $Gender;
    public $UserType;

    public function AddUsers(){
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "INSERT INTO users (`userID`,`fname`,`mname`,`lname`,`email`,`phoneNo`,`age`,`gender`,`usertypeID`,`Status`)
      VALUES (null,'$this->userFName','$this->userMName','$this->userLName','$this->email','$this->phoneNo','$this->Age','$this->Gender','$this->UserType',1)";
      
     $result= mysqli_query($conn,$query);
      return $result;
    }
    public function contact(){
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "INSERT INTO contact (`id`,`name`,`email`,`number`,`enrolled`,`question`)
      VALUES (null,'$this->name','$this->email','$this->number','$this->enrolled','$this->question')";
      
     $result= mysqli_query($conn,$query);
      return $result;
    }

    public function viewquestions(){
      #view new students(pending)
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "SELECT * from contact ";
      $result= mysqli_query($conn,$query);
      return $result;
    }
    
    public function login($username,$password){
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "SELECT * from users INNER JOIN login  ON (login.userid = users.userID) INNER JOIN usertype ON (usertype.usertypeID = users.usertypeID) INNER JOIN Pages
       ON (Pages.PageID = usertype.PageID) where login.username = '$username' and login.password='$password'";
      $result= mysqli_query($conn,$query);
      return $result;
    }

    public function viewAllUsers(){
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "SELECT * from users";
      $result= mysqli_query($conn,$query);
      return $result;
    }

    public function viewPendingUsers(){
      #view new students(pending)
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "SELECT * from users where Status = 1 and userTypeID = 2";
      $result= mysqli_query($conn,$query);
      return $result;
    }

    public function viewAcceptedUsers(){
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "SELECT * from users where Status = 2";
      $result= mysqli_query($conn,$query);
      return $result;
    }

    public function viewSpecificUserType(){
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "SELECT * from users where usertypeID = '$this->UserType'";
      $result= mysqli_query($conn,$query);
      return $result;
    }

    
    public function GetUserType(){
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "SELECT * from users INNER JOIN login  ON (login.userid = users.userID) INNER JOIN usertype ON (usertype.usertypeID = users.usertypeID) ";
      $result= mysqli_query($conn,$query);
      return $result;
    }

    public function viewSpecificUser($UserID){
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "SELECT * from users where userID = '$UserID'";
      $result= mysqli_query($conn,$query);
      return $result;
    }

    public function acceptAddmission($userID,$UserType,$UserName,$Password){
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "INSERT INTO login (`loginID`,`username`,`password`,`userid`)
      VALUES (null,'$UserName','$Password','$userID')";
      $result= mysqli_query($conn,$query);
      $query = "UPDATE users SET Status = '2',usertypeID='$UserType' WHERE userID = '$userID'";
      $result= mysqli_query($conn,$query);

    }

    public function declineAddmission($userID){
    $connectionToDatabase =  new connectionToDatabase;
    $conn  = $connectionToDatabase->ConnectToDataBase();
    $query = "DELETE FROM users WHERE userID = '$userID'";
    $result= mysqli_query($conn,$query);

    }

    public function viewPendingEUsers(){
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "SELECT * from users where Status = 1 and userTypeID = 5";
      $result= mysqli_query($conn,$query);
      return $result;

    }

    public function viewallUserType($UserType){
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "SELECT * from users where Status = 2 and userTypeID = '$UserType'";
      $result= mysqli_query($conn,$query);
      return $result;

    }

    public function updateUser($userID,$userFName,$userMName,$userLName,$email,$phoneNo,$Age){
      $connectionToDatabase =  new connectionToDatabase;
      $conn  = $connectionToDatabase->ConnectToDataBase();
      $query = "UPDATE users SET fname='{$userFName}' ,mname='{$userMName}' ,lname='{$userLName}',email='{$email}',phoneNo='{$phoneNo}',age='{$Age}' WHERE userID = '{$userID}'";
     
      mysqli_query($conn,$query);
    }

}


?>
