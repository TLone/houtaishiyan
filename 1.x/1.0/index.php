<?php
$students=mysql_connect(??????,??????,????);
mysql_select_db("?????",$students)or die("不能选择数据库".mysql_error());
mysql_query("SET NAMES utf-8");
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
	
<div class="container-fluid">
  <div class="row-fluid"style="height:30%">
    <div class="span12">
    </div>
  </div>
    <div class="row" >
      <div class="col-xs-5 col-md-offset-4 col-sm-offset-2">
       
<form id="form1" name="form1" method="post" action="">
  <table width="360" border="0">
    <tr>
      <td width="150">用户名：</td>
      <td width="170"><label for="username"></label>    <input type="text" name="username" id="username" />  </td>
      <td width="36">&nbsp;</td>
    </tr>
    <tr>
      <td>密码：</td>
      <td>    <label for="password"></label>    <input type="text" name="password" id="password" /> </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>     <input type="submit" name="login" id="login" value="登陆" />  </p>
      <td>&nbsp;</td>
    </tr>
  </table>
  </form>
  </div>

   </div>
  <div class="row-fluid" style="height:30%">
    <div class="span12">
    </div>
  </div>
</div>
<?php
	$row_num=0;
	if(isset($_POST["login"]))
          {
            if (!isset($_POST["username"]))
                die("请输入用户名");
            if (!isset($_POST["password"]))
                die("请输入密码");
            $user=$_POST["username"];
            $pass=$_POST["password"];
            $sql=sprintf("select * from user1o0 where name='%s' and pass='%s'",$user,$pass);
            $result1=mysql_query($sql,$students)or die ("不能查询语句".mysql_error());
                //$col_num=mysql_num_fields($result);
            $row_num=mysql_num_rows($result1)or die ("不能查询语句".mysql_error());
          }
	if($row_num>0)
    {
?>
   	 <meta http-equiv="refresh" content="0;url=hello.php"/>
<?php
	}
?>

</body>
</html>
