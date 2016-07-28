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
    
           $sql="select title from test_news where id=5";

           $sqliTool->execute_dql3($sql);
	
	     ?>
	   </h1>
	   <?php 

	       require_once "../php/SQLiTool.class.php";
 
	       $sqliTool=new SQLiTool();
    
           $sql="select date from test_news where id=5";

		   echo "发布时间:";

           $sqliTool->execute_dql3($sql);
	
	     ?>
       <br/>

	   <script type="text/javascript">
       if (localStorage.pagecount9)
       {
          localStorage.pagecount9=Number(localStorage.pagecount9) +1;
       }else{
          localStorage.pagecount9=1;
       }
         document.write("访问数: " + localStorage.pagecount9 + " 次");
       </script>
	  
  </div>
   <div class="middle">
       <div class="mid">
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;今年我实验室的蒋爱民和徐宁分别获得了国家自然科学基金面上项目和青年项目资助！蒋爱民博士（青年教授）主持“低复杂度FIR滤波器设计理论与方法研究”，徐宁博士主持“数据量匮乏条件下基于混合隐高斯随机场回归的语音转换方法研究”。今年物联网学院总共获得国家自然科学基金项目8项（面上2项，青年6项）。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;  截止今日，2014年本实验室总计有两项国家自然科学基金和两项省自然科学基金在研。
	   </p>
        </div>
   </div>	
</body>
<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
</div>
</html>
</html>