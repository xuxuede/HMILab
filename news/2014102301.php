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
    
           $sql="select title from test_news where id=7";

           $sqliTool->execute_dql3($sql);
	
	     ?>
	   </h1>
	   <?php 

	       require_once "../php/SQLiTool.class.php";
 
	       $sqliTool=new SQLiTool();
    
           $sql="select date from test_news where id=7";

		   echo "发布时间:";

           $sqliTool->execute_dql3($sql);
	
	     ?>
       <br/>
	   <script type="text/javascript">
       if (localStorage.pagecount11)
       {
          localStorage.pagecount11=Number(localStorage.pagecount11) +1;
       }else{
          localStorage.pagecount11=1;
       }
         document.write("访问数: " + localStorage.pagecount11 + " 次");
       </script>
	  
  </div>
   <div class="middle">
       <div class="mid">
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 刘小峰教授应邀在10月10-14日成都召开中德双边会议“Sino-German Symposium on Biomimetics： From Animal Sensory System to Locomotion”作了题为“Bird Navigation： from Individual to Group”的报告。该会议在中德科学中心资助下，为中德科学家提供有关仿生学前沿与动态的学术交流平台。约五十位来自多个不同学科的专家做了四十二项大会报告，报告人员包括来自德国波恩、哥廷根、南丹麦、维也纳等大学和中国的中科院成都生物所、中科院沈阳自动化所、中科院昆明动物所、中科院苏州纳米所、南航、北理、清华、中科大、河海等科研院所的研究人员。
	   </p>
        </div>
   </div>	
</body>
<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
</div>
</html>
</html>