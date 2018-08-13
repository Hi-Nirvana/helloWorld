<!DOCTYPE html>
<html lang="en">
<head>

    <title>创建投票</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css1/demo.css" />
        <link rel="stylesheet" type="text/css" href="css1/style1.css" />
		<link rel="stylesheet" type="text/css" href="css1/animate-custom.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link title="style1" rel="stylesheet" href="css2/style.css" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
</head>
<body>
<div class="bg">
<div class="bg-2">
         
    <header>
               <h1><a href="index.html"><span class="clr-1" style=" font-size:45px">我投网</span></a></h1>
         <?php
                session_start();
                if (isset($_SESSION["login_user"])) 
                {
                $login_user=$_SESSION["login_user"];
      
                echo  "<br><p align='center' class='text-1' font-size='40px'>Hello☺".$login_user."</p>";
   
                 }
                 else
                    header("location:login.html");

                ?>
  <nav>
            <ul class="menu">
                <li><a href="index.php">主页</a></li>
                <li><a href="login.php">登录/注册</a></li>
                <li><a href="personal.php">用户中心</a></li>
                <li class="current"><a href="select.html">问卷/投票</a></li>
                <li><a href="connect.php">联系我们</a></li>
            </ul>
         </nav>
    </header>   
	<div class="form_content">

<form action="creatV.php" method="post">
    <fieldset>
        <legend>活动简介</legend>
        <div class="form-row">
            <div class="field-label"><label for="field1">投票标题</label>:</div>
            <div class="field-widget"><input name="field1" id="field1" class="required" title="Enter your name" /></div>
        </div>
        
        <div class="form-row">
            <div class="field-label"><label for="field3">投票描述</label>:</div>
            <div class="field-widget"><textarea class="required" name="field2"></textarea></div>
        </div>
  </fieldset>
  <fieldset>
        <legend>投票详细信息设置</legend>       
        <div class="form-row">
            <div class="field-label"><label for="field4">活动联系电话</label>:</div>
            <div class="field-widget"><input name="field3" id="field4" class="required" title="Enter your name" /></div>
        </div>
        
        <div class="form-row">
            <div class="field-label"><label for="field6">投票后显示结果</label>:</div>
            
            <div class="field-widget">
                <select id="field6" name="field4" class="validate-selection" title="Choose your department">
                    <option>是</option>
                    <option>否</option>

                </select>
            </div>
        </div>
           <div class="form-row">
            <div class="field-label"><label for="field6">投票类型</label>:</div>
            
            <div class="field-widget">
                <select id="field6" name="field5" class="validate-selection" title="Choose your department">
                    
                    <option>图片</option>
                    <option>文档</option>

                </select>
            </div>
        </div>
           
        
        <div class="form-row">
            <div class="field-label"><label for="field6">可投票数</label>:</div>
            
            <div class="field-widget">
                <select id="field6" name="field6" class="validate-selection" title="Choose your department">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>
        </div>
           
        <div class="form-row">
            <div class="field-label"><label for="field7">投票截止日期（年）</label>:</div>
                            <select id="field6" name="field7" class="validate-selection" title="Choose your department">
                    <option>2016</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                </select>

        </div>
                <div class="form-row">
            <div class="field-label"><label for="field7">投票截止日期（月）</label>:</div>
                            <select id="field6" name="field8" class="validate-selection" title="Choose your department">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                </select>

        </div>
         <div class="form-row">
            <div class="field-label"><label for="field7">投票截止日期（日）</label>:</div>
                            <select id="field6" name="field9" class="validate-selection" title="Choose your department">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                     <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                </select>

        </div>
                   <div class="form-row">
            <div class="field-label"><label for="field7">投票截止日期（时）</label>:</div>
                            <select id="field6" name="field10" class="validate-selection" title="Choose your department">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                     <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                </select>
   
           </div>
    
  </fieldset>


  <input  align="center" type="submit" class="text-4" value="创建投票" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input align="center" class="text-4" type="reset" value="重新设置" />
      </form>
 <footer>
      <p><strong>© 2016  Liuning</strong><br></p>
  </footer>	
</body>
</html>