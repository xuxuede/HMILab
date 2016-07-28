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
    
           $sql="select title from test_news where id=6";

           $sqliTool->execute_dql3($sql);
	
	     ?>
	   </h1>
	   <?php 

	       require_once "../php/SQLiTool.class.php";
 
	       $sqliTool=new SQLiTool();
    
           $sql="select date from test_news where id=6";

		   echo "发布时间:";

           $sqliTool->execute_dql3($sql);
	
	     ?>
       <br/>
	   <script type="text/javascript">
       if (localStorage.pagecount10)
       {
          localStorage.pagecount10=Number(localStorage.pagecount10) +1;
       }else{
          localStorage.pagecount10=1;
       }
         document.write("访问数: " + localStorage.pagecount10 + " 次");
       </script>
	  
  </div>
   <div class="middle">
       <div class="mid">
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;实验室刘小峰教授指导的“基于公共自行车的城市空气质量检测”（向超胜、祁世鑫、李斌、李思扬同学完成）第一届TI杯国家物联网大赛获得国家一等奖。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 实验室的吴晓寒、王程程、周泉、马峰同学在江苏省电子设计大赛中获得一等奖（指导教师刘小峰教授）。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;刘小峰教授指导的“手镯医生”（郑应峰等同学完成）获得第一届TI被全国生物电子设计大赛国家二等奖。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 实验室周旭、刘策、阎本冲、李殷勇、汪建明同学在假期中开展人机互动的展示中取得显著成绩，完成工作在九州数码广场进行了展示，吸引了大量观众与小朋友的兴趣。在展示中宣传并普及了机器人知识。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;热烈祝贺各位认真学习、刻苦钻研的同学！
	   </p>

        </div>
   </div>	
</body>
<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
</div>
</html>
</html>