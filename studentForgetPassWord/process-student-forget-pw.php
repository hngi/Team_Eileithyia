<?php


require_once("../config.php");

//CHECK IF THE RECOVER BUTTTON IS CLICKED
if (isset($_POST['student_recoverPwButton'])) {
	
// STORE THE INPUTTED DETAILS FROM THE FORM INTO A VARIABLE
	$thestudentName = htmlentities($_POST['student_recoverName']);

	$thestudentEmail = htmlentities($_POST['student_recoverEmail']);

	//CHECK IF IT IS EMPTY STRING ENTERED INTO THE BOX
    // FIRST STORE THE ERROR IN ARRAY

    $studentForgetPwError = array();

    if (empty($thestudentName)) {
    	
    	$studentForgetPwError[] = "Enter your student Full Name";


    }


    if (empty($thestudentEmail)) {
    	
    	$studentForgetPwError[] = "Enter your student Email Address";

    	
    }


    //IF THE INPUT FIELD ARE NOT EMPTY
	//SELECT ALL FROM THE DATABASE ON THE TEACHERS REGISTRATION TABLE
	// WHERE THE EMAIL ADDRESS AND THE NAME ENTERED IS THE SAME WITH THE ONE IN THE DATABASE

	if (empty($studentForgetPwError)) {
		


		$sql_student = "SELECT * FROM student WHERE fullname = '$thestudentName' AND email = '$thestudentEmail' ";



	$studentQuery = mysqli_query($connection,$sql_student);



	//CHECK THE NUMBER OF ROWS FOUND BACK FROM THE RESULT

	$rows_student = mysqli_num_rows($studentQuery);

	// CHECK IF THE NUMBER OF ROLLS FOUND IS ONE AND NOT EQUALS TO 0
	//THEN FETCH OUT THE DETAILS

	if ($rows_student == 1 ) {
		
		$fetchStudentDet = mysqli_fetch_array($studentQuery);

		//CALL EACH DETAILS OF THE TEACHER AND STORE IT IN A VARIABLE

		$studentFullName = $fetchStudentDet['fullname'];
		$studentEmailAdd = $fetchStudentDet['email'];

       
        $studentGenPw = substr(base_convert(sha1(uniqid(mt_rand())),16, 36), 0 );



		//UPDATE THE PASSWORD WITH THE ABOVE NEW PASSWORD GENERATED TO LOGIN
       
        $updateTeachersPw = "UPDATE student SET password = '$studentGenPw' WHERE fullname = '$thestudentName' AND email = '$thestudentEmail' ";
   


          $sql_Update = mysqli_query($connection, $updateTeachersPw);

 


		$to = "$studentEmailAdd";
		$subject = "Mini-Classroom Student Password Recovery";
	$message = "Here is your new password : $studentGenPw";
        $headers = "From:afaraitsulaimon@gmail.com";

        mail($to, $subject, $message, $headers);

// THEN RETURN TO LOGIN PAGE
        header("location:student-forget-pw.php?status=success");

	      }
	}else{

      	$studentErrMessForgetPw = "<ul>";

      	foreach ($studentForgetPwError as $studentForgetPwErrors) {

      		$studentErrMessForgetPw  .= "<li>$studentForgetPwErrors</li>";
      	}

      	$studentErrMessForgetPw  .= "</ul>";

	


}
}

?>