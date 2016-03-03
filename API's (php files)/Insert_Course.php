<?php
    //connect to mysql db
    define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','ug_curriculum_management');
	$con = mysqli_connect(HOST,USER,PASS,DB);
    
    //get the curriculum details
    $course_id = $_POST['course_id'];
    $course_name = $_POST['course_name'];
    $course_curriculum = $_POST['course_curriculum'];
    $course_sem = $_POST['course_sem'];
    $course_credits = $_POST['course_credits'];
    $course_objectives = $_POST['course_objectives'];
	$course_outlines = $_POST['course_outlines'];
	$course_outcomes = $_POST['course_outcomes'];
    
	
    //insert into curriculum table
    $sql = "INSERT INTO course(course_id, course_name, course_curriculum, course_sem, course_credits, course_objectives, course_outlines, course_outcomes)
    VALUES('$course_id', '$course_name', '$course_curriculum', '$course_sem', '$course_credits', '$course_objectives', '$course_outlines', '$course_outcomes')";
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