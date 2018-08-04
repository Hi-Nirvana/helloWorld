<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>问卷发布</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
// include"connection.php";
$ARRAY = $_REQUEST;
foreach ($array as $value) {
	print $value;
	print ",";
}
// $surveyID=$_POST["surveyID"];
// $link=creat_connection();
// $sql="CREATE TABLE survey$surveyID (
//   `id` int(11) AUTO_INCREMENT,
//   `question` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
//   `answer` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
//   `type` int(5),PRIMARY KEY (`id`)
// )";
// $result=execute_sql($link,"jzt_vote",$sql);
// @mysqli_free_result($result);     
// mysqli_close($link);
?>
</body>