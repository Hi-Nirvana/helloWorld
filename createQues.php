<!DOCTYPE html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>我投网</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Archivo+Narrow:400,700" rel="stylesheet" type="text/css">
<link href="css/style1.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="wjmk/css/wenjuan_ht.css">
<script src="wjmk/js/jquery.min.js"></script>
<script src="wjmk/js/index.js"></script>
</head>
<body>
<?php
	    include"connection.php";
		$link=creat_connection();
		@$surveyID=$_GET["surveyID"];
		session_start();
                if (isset($_SESSION["login_user"])) 
                {
                $login_user=$_SESSION["login_user"];
                echo  "<p align='right' class='text-2' font-size='40px'>欢迎".$login_user."</p>";
                 }
                 else
                    header("location:login.html");
        $sql="SELECT*FROM creat_ques WHERE ques_ID='$surveyID'";
	    $result=execute_sql($link,"jzt_vote",$sql);
	     $row=mysqli_fetch_assoc($result);
?>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1>我投网◎问卷创建</h1>
		</div>
	</div>
</div>
<div id="wrapper"> 
	<div id="page">
				<div id="content">
					<div class="post">
						<h2 class="title" align="center"><?php  echo $row["title"]; echo"（问卷ID为：".$row["ques_ID"].")";?></h2>
						<div style="clear: both;"></div>
						<div class="entry">
						</div>
					</div>
					<div class="post">

						<div class="entry">
							<?php echo "<p><span class='date'>".$row["des"]."</span></p>";?>
						</div>
					</div>
					<div style="clear: both;"></div>
					<div class="post">
						<h2 class="title" align="center">问卷创建</h2>						
						<div style="clear: both;"></div>
						<div class="entry">

<!-- <a href="javascript:addrow();" style="padding:6px; float:right;"><strong>＋添加选项</strong></a> -->
        <div class=" all_660">
        <div class="yd_box"></div>
        <div class="but" style="padding-top: 20px">
            <h4 align="center"><select id="addquerstions" class="addquerstions" align="center" name="" style="padding:10px;"></h4>
                <option value="-1"><strong>＋添加问题</strong></option>
                <option value="0">单选</option>
                <option value="1">多选</option>
                <!-- <option value="2">填空</option> -->
                <!-- <option value="3">矩阵</option> -->
            </select>
            <!-- <button>提交问题</button> -->
        </div>
        <!--选项卡区域  模板区域---------------------------------------------------------------------------------------------------------------------------------------->
        <div class="xxk_box">
            <div class="xxk_conn hide">
                <!--单选----------------------------------------------------------------------------------------------------------------------------------------->
                <div class="xxk_xzqh_box dxuan ">
                    <textarea name="" cols="" rows="" class="input_wenbk btwen_text btwen_text_dx" placeholder="单选题目"></textarea>
                    <div class="title_itram">
                        <div class="kzjxx_iteam">
                            <input name="" type="radio" value="" class="dxk">
                            <input name="" type="text" class="input_wenbk" value="" placeholder="选项">
                             <a href="javascript:void(0);" class="del_xm">删除</a>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="zjxx">增加选项</a>
                    <!--完成编辑-->
                    <div class="bjqxwc_box">
                        <a href="javascript:void(0);" class="qxbj_but">取消编辑</a>
                        <a href="javascript:void(0);" class="swcbj_but"> 完成编辑</a>
                    </div>
                </div>
                <!--多选----------------------------------------------------------------------------------------------------------------------------------------->
                <div class="xxk_xzqh_box duoxuan hide">
                    <textarea name="" cols="" rows="" class="input_wenbk btwen_text btwen_text_duox" placeholder="多选题目"></textarea>
                    <div class="title_itram">
                        <div class="kzjxx_iteam">
                            <input name="" type="checkbox" value="" class="dxk">
                            <input name="" type="text" class="input_wenbk" value="" placeholder="选项">
                            
                            <a href="javascript:void(0);" class="del_xm">删除</a>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="zjxx">增加选项</a>
                    <!--完成编辑-->
                    <div class="bjqxwc_box">
                        <a href="javascript:void(0);" class="qxbj_but">取消编辑</a>
                        <a href="javascript:void(0);" class="swcbj_but"> 完成编辑</a>
                    </div>
                </div>
                <!-- 填空----------------------------------------------------------------------------------------------------------------------------------------->
                <div class="xxk_xzqh_box tktm hide">
                   <!--  <textarea name="" cols="" rows="" class="input_wenbk btwen_text btwen_text_tk" placeholder="答题区"></textarea> -->
                    <!--完成编辑-->
                    <div class="bjqxwc_box">
                        <a href="javascript:void(0);" class="qxbj_but">取消编辑</a>
                        <a href="javascript:void(0);" class="swcbj_but"> 完成编辑</a>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
                        <form action="showSurvey.php" method="get" enctype="multipart/form-data">

							<input type="hidden" id="surveyID" name="surveyID" value="<?php echo"$surveyID";?>" />
							<input type="submit" class="button" value="发布问卷" style="padding:6px; float:right;"/>
							</form>
				
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>

				<?php
						mysqli_free_result($result);
 			            mysqli_close($link);
 			     ?>
				

</body>
</html>
