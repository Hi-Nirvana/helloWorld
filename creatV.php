<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>投票创建</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	    include"connection.php";
	    date_default_timezone_set('prc');
		$link=creat_connection();
		$nowStamp=time();
		$start=date('y-m-d h:i:s',$nowStamp);
		session_start();
	$id=mt_rand(1000000000,9999999999);
	$user=$_SESSION["login_user"];
	$a=$_POST["field1"]; 
	$b=$_POST["field2"]; 
	$c=$_POST["field3"]; 
	$d=$_POST["field4"]; 
	$e=$_POST["field5"]; 
	$f=$_POST["field6"]; 
	$g=$_POST["field7"]; 
	$h=$_POST["field8"]; 
	$i=$_POST["field9"]; 
	$j=$_POST["field10"]; 
	$time=$g."-".$h."-".$i;
	@$timeStamp=strtotime($time, $now);
	if($nowStamp>=$timeStamp)
	{		header("localtion:createVote.php");
			echo "<script type='text/javascript' charset='utf-8'>
			alert('请选择正确的截止日期')</script>";
			exit();
		
	}
    $sql="INSERT INTO creat_vote(voteID,user,title,des,phone,res,type,num,year,month,day,hour,startTime) VALUES ('$id','$user','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$start')";
 	$result=execute_sql($link,"jzt_vote",$sql);
 	if(mysqli_affected_rows($result)=="")
 	{
 			mysqli_free_result($result);
 			mysqli_close($link);
 			header("location:c_vote.php?voteID=$id");
 	}



 ?>

</body>
</html>