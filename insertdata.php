<?php

  $connect = mysqli_connect("localhost","root","","internshipform");
//รับค่า
    if(isset($_POST['submit'])){
      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $age = $_POST["age"];
      $gender = $_POST["gender"];
      $position = $_POST["position"];
      $starts = $_POST["starts"];
      $finish = $_POST["finish"];
      $university = $_POST["university"];
      $major = $_POST["major"];
      $phone = $_POST["phone"];
      $email = $_POST["email"];

      $doc_type ="Document";
      $filename = $_FILES['file']['name'];
      $fileupload = $_FILES['file']['tmp_name'];
      $fileExt = explode('.',$filename);
      $fileActualExt = strtolower(end($fileExt));
      $allowed = array('docs','docx','pdf');
      if(in_array($fileActualExt,$allowed)){

        $filenamenew = $filename;
        $fileDestination = 'upload/' .$filenamenew;

      
      

      $insert=mysqli_query($connect, "INSERT INTO intern(firstname, lastname, age, gender, position, starts, finish, university, major, phone, email, file) 
      VALUES('$firstname','$lastname','$age','$gender','$position','$starts','$finish','$university','$major','$phone','$email','$filenamenew' )");  

        if($insert==TRUE){

          move_uploaded_file($fileupload,$fileDestination);

          echo "Success";
        }else {
          "Error";}

    
      } 
    }      
?>

