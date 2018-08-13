<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>删除投票</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	    include"connection.php";
		$link=creat_connection();
		@$voteID=$_GET["voteID"];
		@$surveyID=$_GET["surveyID"];
		if ($surveyID) {
			$sql="DROP TABLE survey$surveyID";
	    	$result=execute_sql($link,"jzt_vote",$sql);
	    	$sql1="DELETE FROM creat_ques WHERE ques_ID='$surveyID'";
	    	$result=execute_sql($link,"jzt_vote",$sql1);
		}
		else{
		$sql="DROP TABLE id$voteID";
	    $result=execute_sql($link,"jzt_vote",$sql);
	    $sql1="DELETE FROM creat_vote WHERE voteID='$voteID'";
	    $result=execute_sql($link,"jzt_vote",$sql1);
		}
	    header("location:personal.php");
	    mysqli_free_result($result);
	    mysqli_free_result($result1);
 	    mysqli_close($link);
?>
</body>
</html>