<?php
//error_reporting(E_ALL ^ E_DEPRECATED);
//course table sent ,student ,facutlty tabel sent
 // $response_course=array();
  $response = array();//for student table and faculty table
  define('HOST','localhost');
  define('USER','root');
  define('PASS','');
  define('DB','ug_curriculum_management');
  $con = mysqli_connect(HOST,USER,PASS,DB);
  $user_id=$_POST['user_id'];
  $password=$_POST['password'];
  $flag=0;
 // $sql = "insert into course_faculty (uid,course) values ('$uid','$course')"
  $result = "SELECT user_id,password,user_type FROM user";
  $res=mysqli_query($con,$result);
  if($res){
    //$row = mysqli_fetch_array($res);
    while ($row = mysqli_fetch_assoc($res)) {
      if($row["user_id"]==$user_id && $row["password"]==$password)
      {
          $response["user_id"]=$user_id;
        if($row["user_type"]=="Student")
        {
          $result="select user_name from user where user_id=$user_id";
          $res=mysqli_query($con,$result);
          $row = mysqli_fetch_array($res);
          $response["user_name"]=$row["user_name"];
          $response["message"]="Student Login";
		  
          $result="select * from course";
          $res=mysqli_query($con,$result);
          $i=0;
          $response["course"]=array();
          while($row = mysqli_fetch_assoc($res))
          {
            $temp=array();
			$temp["course_id"]=$row["course_id"];
            $temp["course_name"]=$row["course_name"];
            $temp["course_curriculum"]=$row["course_curriculum"];
            $temp["course_sem"]=$row["course_sem"];
            $temp["course_credits"]=$row["course_credits"];
			$temp["course_objectives"]=$row["course_objectives"];
			$temp["course_outlines"]=$row["course_outlines"];
			$temp["course_outcomes"]=$row["course_outcomes"];
          array_push($response["course"],$temp);
          //echo $response["course"]["course"];
            $i=$i+1;
          }
          $response["size"]=$i;
         // $arr=$response["course"];
         // $re=array_merge($response_course,$response);
		 
		  $result="select * from curriculum";
          $res=mysqli_query($con,$result);
		  $j=0;
          $response["curriculum"]=array();
		  while($row = mysqli_fetch_assoc($res))
          {
			$temp1=array();
			$temp1["curriculum_id"]=$row["curriculum_id"];
            $temp1["curriculum_name"]=$row["curriculum_name"];
            $temp1["curriculum_batch"]=$row["curriculum_batch"];
            $temp1["curriculum_branch"]=$row["curriculum_branch"];
            $temp1["curriculum_credits"]=$row["curriculum_credits"];
			$temp1["curriculum_flag"]=$row["curriculum_flag"];
		  array_push($response["curriculum"],$temp1);
          //echo $response["course"]["course"];
            $j=$j+1;
		  }
		  $response["size1"]=$j;
          //$arr=$response["curriculum"];
         // $re=array_merge($response_course,$response);
		  
		  echo json_encode($response);
         // $temp=$response["course"];
         // echo $temp[0]["course"];
         // foreach($arr as $element) echo $element["course"];
          //echo $response["course"][$0];
        }
        else if($row["user_type"]=="Faculty")
        {
          $result="select user_name from user where user_id=$user_id";
          $res=mysqli_query($con,$result);
          $row = mysqli_fetch_array($res);
          $response["user_name"]=$row["user_name"];
          $response["message"]="Faculty Login";
		  
          $result="select * from course";
          $res=mysqli_query($con,$result);
          $i=0;
          $response["course"]=array();
          while($row = mysqli_fetch_assoc($res))
          {
            $temp=array();
            $temp["course_id"]=$row["course_id"];
			$temp["course_name"]=$row["course_name"];
            $temp["course_curriculum"]=$row["course_curriculum"];
            $temp["course_sem"]=$row["course_sem"];
            $temp["course_credits"]=$row["course_credits"];
			$temp["course_objectives"]=$row["course_objectives"];
			$temp["course_outlines"]=$row["course_outlines"];
			$temp["course_outcomes"]=$row["course_outcomes"];
          array_push($response["course"],$temp);
          //echo $response["course"]["course"];
            $i=$i+1;
          }
          $response["size"]=$i;
         // $arr=$response["course"];
         // $re=array_merge($response_course,$response);
		 
		  $result="select * from curriculum";
          $res=mysqli_query($con,$result);
		  $j=0;
          $response["curriculum"]=array();
		  while($row = mysqli_fetch_assoc($res))
          {
			$temp1=array();
			$temp1["curriculum_id"]=$row["curriculum_id"];
            $temp1["curriculum_name"]=$row["curriculum_name"];
            $temp1["curriculum_batch"]=$row["curriculum_batch"];
            $temp1["curriculum_branch"]=$row["curriculum_branch"];
            $temp1["curriculum_credits"]=$row["curriculum_credits"];
			$temp1["curriculum_flag"]=$row["curriculum_flag"];
		  array_push($response["curriculum"],$temp1);
          //echo $response["course"]["course"];
            $j=$j+1;
		  }
		  $response["size1"]=$j;
          //$arr=$response["curriculum"];
         // $re=array_merge($response_course,$response);
		  
		  echo json_encode($response);
         // $temp=$response["course"];
         // echo $temp[0]["course"];
         // foreach($arr as $element) echo $element["course"];
          //echo $response["course"][$0];
        }
		else if($row["user_type"]=="HOD")
        {
          $result="select user_name from user where user_id=$user_id";
          $res=mysqli_query($con,$result);
          $row = mysqli_fetch_array($res);
          $response["user_name"]=$row["user_name"];
          $response["message"]="HOD Login";
		  
          $result="select * from course";
          $res=mysqli_query($con,$result);
          $i=0;
          $response["course"]=array();
          while($row = mysqli_fetch_assoc($res))
          {
            $temp=array();
			$temp["course_id"]=$row["course_id"];
            $temp["course_name"]=$row["course_name"];
            $temp["course_curriculum"]=$row["course_curriculum"];
            $temp["course_sem"]=$row["course_sem"];
            $temp["course_credits"]=$row["course_credits"];
			$temp["course_objectives"]=$row["course_objectives"];
			$temp["course_outlines"]=$row["course_outlines"];
			$temp["course_outcomes"]=$row["course_outcomes"];
          array_push($response["course"],$temp);
          //echo $response["course"]["course"];
            $i=$i+1;
          }
          $response["size"]=$i;
         // $arr=$response["course"];
         // $re=array_merge($response_course,$response);
		 
		  $result="select * from curriculum";
          $res=mysqli_query($con,$result);
		  $j=0;
          $response["curriculum"]=array();
		  while($row = mysqli_fetch_assoc($res))
          {
			$temp1=array();
			$temp1["curriculum_id"]=$row["curriculum_id"];
            $temp1["curriculum_name"]=$row["curriculum_name"];
            $temp1["curriculum_batch"]=$row["curriculum_batch"];
            $temp1["curriculum_branch"]=$row["curriculum_branch"];
            $temp1["curriculum_credits"]=$row["curriculum_credits"];
			$temp1["curriculum_flag"]=$row["curriculum_flag"];
		  array_push($response["curriculum"],$temp1);
          //echo $response["course"]["course"];
            $j=$j+1;
		  }
		  $response["size1"]=$j;
          //$arr=$response["curriculum"];
         // $re=array_merge($response_course,$response);
		  
		  echo json_encode($response);
         // $temp=$response["course"];
         // echo $temp[0]["course"];
         // foreach($arr as $element) echo $element["course"];
          //echo $response["course"][$0];
        }
		else if($row["user_type"]=="AC-UGC")
        {
          $result="select user_name from user where user_id=$user_id";
          $res=mysqli_query($con,$result);
          $row = mysqli_fetch_array($res);
          $response["user_name"]=$row["user_name"];
          $response["message"]="AC-UGC Login";
		  
          $result="select * from course";
          $res=mysqli_query($con,$result);
          $i=0;
          $response["course"]=array();
          while($row = mysqli_fetch_assoc($res))
          {
            $temp=array();
			$temp["course_id"]=$row["course_id"];
            $temp["course_name"]=$row["course_name"];
            $temp["course_curriculum"]=$row["course_curriculum"];
            $temp["course_sem"]=$row["course_sem"];
            $temp["course_credits"]=$row["course_credits"];
			$temp["course_objectives"]=$row["course_objectives"];
			$temp["course_outlines"]=$row["course_outlines"];
			$temp["course_outcomes"]=$row["course_outcomes"];
          array_push($response["course"],$temp);
          //echo $response["course"]["course"];
            $i=$i+1;
          }
          $response["size"]=$i;
         // $arr=$response["course"];
         // $re=array_merge($response_course,$response);
		 
		  $result="select * from curriculum";
          $res=mysqli_query($con,$result);
		  $j=0;
          $response["curriculum"]=array();
		  while($row = mysqli_fetch_assoc($res))
          {
			$temp1=array();
			$temp1["curriculum_id"]=$row["curriculum_id"];
            $temp1["curriculum_name"]=$row["curriculum_name"];
            $temp1["curriculum_batch"]=$row["curriculum_batch"];
            $temp1["curriculum_branch"]=$row["curriculum_branch"];
            $temp1["curriculum_credits"]=$row["curriculum_credits"];
			$temp1["curriculum_flag"]=$row["curriculum_flag"];
		  array_push($response["curriculum"],$temp1);
          //echo $response["course"]["course"];
            $j=$j+1;
		  }
		  $response["size1"]=$j;
          //$arr=$response["curriculum"];
         // $re=array_merge($response_course,$response);
		  
		  echo json_encode($response);
         // $temp=$response["course"];
         // echo $temp[0]["course"];
         // foreach($arr as $element) echo $element["course"];
          //echo $response["course"][$0];
        }
		else if($row["user_type"]=="Director")
        {
          $result="select user_name from user where user_id=$user_id";
          $res=mysqli_query($con,$result);
          $row = mysqli_fetch_array($res);
          $response["user_name"]=$row["user_name"];
          $response["message"]="Director Login";
		  
          $result="select * from course";
          $res=mysqli_query($con,$result);
          $i=0;
          $response["course"]=array();
          while($row = mysqli_fetch_assoc($res))
          {
            $temp=array();
			$temp["course_id"]=$row["course_id"];
            $temp["course_name"]=$row["course_name"];
            $temp["course_curriculum"]=$row["course_curriculum"];
            $temp["course_sem"]=$row["course_sem"];
            $temp["course_credits"]=$row["course_credits"];
			$temp["course_objectives"]=$row["course_objectives"];
			$temp["course_outlines"]=$row["course_outlines"];
			$temp["course_outcomes"]=$row["course_outcomes"];
          array_push($response["course"],$temp);
          //echo $response["course"]["course"];
            $i=$i+1;
          }
          $response["size"]=$i;
         // $arr=$response["course"];
         // $re=array_merge($response_course,$response);
		 
		  $result="select * from curriculum";
          $res=mysqli_query($con,$result);
		  $j=0;
          $response["curriculum"]=array();
		  while($row = mysqli_fetch_assoc($res))
          {
			$temp1=array();
			$temp1["curriculum_id"]=$row["curriculum_id"];
            $temp1["curriculum_name"]=$row["curriculum_name"];
            $temp1["curriculum_batch"]=$row["curriculum_batch"];
            $temp1["curriculum_branch"]=$row["curriculum_branch"];
            $temp1["curriculum_credits"]=$row["curriculum_credits"];
			$temp1["curriculum_flag"]=$row["curriculum_flag"];
		  array_push($response["curriculum"],$temp1);
          //echo $response["course"]["course"];
            $j=$j+1;
		  }
		  $response["size1"]=$j;
          //$arr=$response["curriculum"];
         // $re=array_merge($response_course,$response);
		  
		  echo json_encode($response);
         // $temp=$response["course"];
         // echo $temp[0]["course"];
         // foreach($arr as $element) echo $element["course"];
          //echo $response["course"][$0];
        }
        $flag=1;
        break;
      }
    }
    if($flag==0)
    {
      $response["message"]="Unauthorised Access";
      echo json_encode($response);
    }
    else
    {

    }
  }
  else{
    echo 'Connection failed';
  }
  mysqli_close($con);
?>
