<?php


require_once("../config.php");

//CHECK IF THE RECOVER BUTTTON IS CLICKED
if (isset($_POST['teacher_recoverPwButton'])) {
	
// STORE THE INPUTTED DETAILS FROM THE FORM INTO A VARIABLE
	$theteacherName = htmlentities($_POST['teacher_recoverName']);

	$theteachersEmail = htmlentities($_POST['teacher_recoverEmail']);

	//CHECK IF IT IS EMPTY STRING ENTERED INTO THE BOX
    // FIRST STORE THE ERROR IN ARRAY

    $forgetPwError = array();

    if (empty($theteacherName)) {
    	
    	$forgetPwError[] = "Please kindly enter your Full Name";


    }


    if (empty($theteachersEmail)) {
    	
    	$forgetPwError[] = "Please kindly enter your Email";

    	
    }


    //IF THE INPUT FIELD ARE NOT EMPTY
	//SELECT ALL FROM THE DATABASE ON THE TEACHERS REGISTRATION TABLE
	// WHERE THE EMAIL ADDRESS AND THE NAME ENTERED IS THE SAME WITH THE ONE IN THE DATABASE

	if (empty($forgetPwError)) {
		


		$sql = "SELECT * FROM teachers WHERE fullname = '$theteacherName' AND email = '$theteachersEmail' ";



	$query_sql = mysqli_query($connection,$sql);



	//CHECK THE NUMBER OF ROWS FOUND BACK FROM THE RESULT

	$rows = mysqli_num_rows($query_sql);

	// CHECK IF THE NUMBER OF ROLLS FOUND IS ONE AND NOT EQUALS TO 0
	//THEN FETCH OUT THE DETAILS

	if ($rows == 1 ) {
		
		$fetchTeacherDet = mysqli_fetch_array($query_sql);

		//CALL EACH DETAILS OF THE TEACHER AND STORE IT IN A VARIABLE

		$teacherFullName = $fetchTeacherDet['fullname'];
		$teachersEmailAdd = $fetchTeacherDet['email'];

       
        $teachGenPw = substr(base_convert(sha1(uniqid(mt_rand())),16, 36), 0 );



		//UPDATE THE PASSWORD WITH THE ABOVE NEW PASSWORD GENERATED TO LOGIN
       
        $updateTeachersPw = "UPDATE teachers SET password = '$teachGenPw' WHERE fullname = '$theteacherName' AND email = '$theteachersEmail' ";
   


          $sql_Update = mysqli_query($connection, $updateTeachersPw);

 


		$to = "$teacherFullName";
		$subject = "Mini-Classroom Password Recovery";
		$message = "Here is your new password $teachGenPw";
        $headers = "From:afaraitsulaimon@gmail.com";

        mail($to, $subject, $message, $headers);

// THEN RETURN TO LOGIN PAGE
        header("location:teacher-forget-pw.php?status=recovered");

	      }
	}else{

      	$teacherErrMessForgetPw = "<ul>";

      	foreach ($forgetPwError as $forgetPwErrors) {

      		$teacherErrMessForgetPw  .= "<li>$forgetPwErrors</li>";
      	}

      	$teacherErrMessForgetPw  .= "</ul>";

	


}
}

?>