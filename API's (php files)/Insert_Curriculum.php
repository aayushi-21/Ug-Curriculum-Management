<?php
    //connect to mysql db
    define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','ug_curriculum_management');
	$con = mysqli_connect(HOST,USER,PASS,DB);
    
    //get the curriculum details
    $curriculum_id = $_POST['curriculum_id'];
    $curriculum_name = $_POST['curriculum_name'];
    $curriculum_batch = $_POST['curriculum_batch'];
    $curriculum_branch = $_POST['curriculum_branch'];
    $curriculum_credits = $_POST['curriculum_credits'];
    $curriculum_flag = $_POST['curriculum_flag'];
    
	
    //insert into curriculum table
    $sql = "INSERT INTO curriculum(curriculum_id, curriculum_name, curriculum_batch, curriculum_branch, curriculum_credits, curriculum_flag)
    VALUES('$curriculum_id', '$curriculum_name', '$curriculum_batch', '$curriculum_branch', '$curriculum_credits', '$curriculum_flag')";
    $result = mysqli_query($con,$sql);
	if($result){
	
	$response["error"] = FALSE;
	echo json_encode($response);
	}
	else
	{
		$response["error"] = TRUE;
	echo json_encode($response);
	}
?>