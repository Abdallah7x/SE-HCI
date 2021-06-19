<?php
REQUIRE_ONCE ("../classes/DBconnect.php");
REQUIRE_ONCE "../Model/homework.php";
REQUIRE_ONCE "../Model/marks.php";
REQUIRE_ONCE "../Model/usersModel.php";
session_start();

class controllerProfile 
{
    public function insertHW()
     {
        $homework = new Homework;
		$homework->name= $_REQUEST['namehw'];
		$homework->description= $_REQUEST['desc'];
		$homework->duedate= $_REQUEST['due'];
		$homework->entrydate= $_REQUEST['entry'];
        $homework->subject= $_REQUEST['subject'];
        $homework->class= $_REQUEST['class'];
        $target_dire = "uploads/";
            if (!empty($_FILES["pdf"]["name"]))
            {
                $pdf_name = time() . '-' . basename($_FILES["pdf"]["name"]);
                $target_fileP = $target_dire . $pdf_name;
                $uploadOk = 1;
                $pdfType = strtolower(pathinfo($target_fileP, PATHINFO_EXTENSION));
                if (file_exists($target_fileP)) {
                    $errmsg .= "Failed to upload pdf File already exists.<br>";
                    $uploadOk = 0;
                }
                if ($pdfType != "pdf" && $pdfType != "ppt" && $pdfType != "doc" && $pdfType != "docx") {
                    $errmsg .= "Failed to upload pdf: Allowed formats are \"pdf,doc,docx,ppt\" <br>";
                    $uploadOk = 0;
                }
                if ($uploadOk == 1) {
                    if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_fileP)) {
                        $upload = $target_fileP;
                       
                    } else {
                        $errmsg .= "Sorry, there was an error uploading your pdf file.<br>";
                    }              
             }
        $homework->uploads=$upload;
    	$homework->AddHw();
	}

    public function insertHW()
     {
        $homework = new Homework;
		$homework->name= $_REQUEST['namehw'];
		$homework->description= $_REQUEST['desc'];
		$homework->duedate= $_REQUEST['due'];
		$homework->entrydate= $_REQUEST['entry'];
        $homework->subject= $_REQUEST['subject'];
        $homework->class= $_REQUEST['class'];
        $target_dire = "uploads/";
            if (!empty($_FILES["pdf"]["name"]))
            {
                $pdf_name = time() . '-' . basename($_FILES["pdf"]["name"]);
                $target_fileP = $target_dire . $pdf_name;
                $uploadOk = 1;
                $pdfType = strtolower(pathinfo($target_fileP, PATHINFO_EXTENSION));
                if (file_exists($target_fileP)) {
                    $errmsg .= "Failed to upload pdf File already exists.<br>";
                    $uploadOk = 0;
                }
                if ($pdfType != "pdf" && $pdfType != "ppt" && $pdfType != "doc" && $pdfType != "docx") {
                    $errmsg .= "Failed to upload pdf: Allowed formats are \"pdf,doc,docx,ppt\" <br>";
                    $uploadOk = 0;
                }
                if ($uploadOk == 1) {
                    if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_fileP)) {
                        $upload = $target_fileP;
                       
                    } else {
                        $errmsg .= "Sorry, there was an error uploading your pdf file.<br>";
                    }              
             }
        $homework->uploads=$upload;
    	$homework->AddHw();
	}
   
     }
     public function edit()
     {
        $users = new usersModel;
        $users->userFName= $_REQUEST['fname'];
        $users->userMName= $_REQUEST['mname'];
        $users->userLName= $_REQUEST['lname'];
        $users->email= $_REQUEST['email'];
        $users->phoneNo= $_REQUEST['phone'];
        $users->Age= $_REQUEST['age'];

        if (!empty($_FILES["img"]["name"])) 
        {
            $target_dir = "imgs/";
            $file_name = time() . '-' . basename($_FILES["img"]["name"]);
            $target_file = $target_dir . $file_name;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["img"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $errmsg .= "Failed to upload image: File is not an image.<br>";
                $uploadOk = 0;
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                $errmsg .= "Failed to upload image: File already exists.<br>";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["img"]["size"] > 300000) {
                $errmsg .= "Failed to upload image: File is too large (max: 250KB) <br>";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $errmsg .= "Failed to upload image: Allowed formats are \"PNG, JPG, JPEG\" <br>";
                $uploadOk = 0;
            }
            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    $imgg = $target_file;
                  
                } else {
                    $errmsg .= "Sorry, there was an error uploading your image file.<br>";
                }
            }
              $users->img=$imgg;
                   
    
        } $users->updateUser($_SESSION['userID']);
    }
}
    $cont= new controllerProfile;
    
    if ($_GET['action']=='addHW'){
        $cont->insertHW();
        header("Location:../SSC front end/profile.php");
    }
    else if ($_GET['action']=='edit'){
        $cont->edit();
        header("Location: ../SSC front end/profile.php");
    }


?>
