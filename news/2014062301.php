<!DOCTYPE HTML>
<!-- Website template form http://www.mycodes.net/ -->
<html>
<head>
	<meta charset="UTF-8">
	<title>实验室动态-人机互动与认知计算实验室</title>
	<link rel='icon' href='../images/favicon.ico' type=‘image/x-ico’/>
	<link rel="stylesheet" href="../css/style.css" type="text/css"/>
	<script language="javascript" src="../js/showtime.js"></script>
	 
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
	<div id="header">
        <div id="showtime" style="float:right;margin-top:70px;margin-right:15px" width="50px"></div>
		<a href="index.html" class="logo"><img src="../images/logo.png" alt=""></a>
		<ul>
		</ul>
	</div>
  <div class="name">
       <h1>
         <?php 

	       require_once "../php/SQLiTool.class.php";
 
	       $sqliTool=new SQLiTool();
    
           $sql="select title from test_news where id=4";

           $sqliTool->execute_dql3($sql);
	
	     ?>
	   </h1>
	   <?php 

	       require_once "../php/SQLiTool.class.php";
 
	       $sqliTool=new SQLiTool();
    
           $sql="select date from test_news where id=4";

		   echo "发布时间:";

           $sqliTool->execute_dql3($sql);
	
	     ?>
        <br/>

	   <script type="text/javascript">
       if (localStorage.pagecount8)
       {
          localStorage.pagecount8=Number(localStorage.pagecount8) +1;
       }else{
          localStorage.pagecount8=1;
       }
         document.write("访问数: " + localStorage.pagecount8 + " 次");
       </script>
	  
  </div>
   <div class="middle">
       <div class="mid">
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 6月13号，常州市科技局产学研处副处长韦平来到河海大学特种机器人与智能技术重点实验室调研产学研对接情况，校区科技部副部长朱灯林教授、实验室副主任刘小峰教授、蒋爱民教授、徐宁博士参加了交流。韦平副处长观看了认知与机器人实验室的面向老龄化社会的人机自然交互技术，提出与科技局相关处室联合推进实验室技术的转化，以及实验室与对口企业的产学研合作。
	   </p>
        </div>
   </div>	
</body>
<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
</div>
</html>
</html>