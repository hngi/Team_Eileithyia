<?php 

// This include the constant file where DB settings are declared
include("constants.php");

// -------------------------------------------------------------//
// This main query is what will be used to make any database queries 
    function main_query($sql){

            $conn = new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);

            // Check connection 
            if($conn->connect_error){
                    die("Database connection failed! " . $conn->connect_error);
            }
            $result = $conn->query($sql);
            if($result)
            {
                return $result;
            }else{
                return $conn->error;
            }


    }

// -------------------------------------------------------------//
	
	
// -------------------------------------------------------------//
	

?>