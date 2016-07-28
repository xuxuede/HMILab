<!DOCTYPE HTML>
<!-- Website template form http://www.mycodes.net/ -->
<html>
<head>
	<meta charset="UTF-8">
	<title>实验室动态-人机互动与认知计算实验室</title>
	<link rel='icon' href='../images/favicon.ico' type=‘image/x-ico’/>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
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
    
           $sql="select title from test_news where id=8";

           $sqliTool->execute_dql3($sql);
	
	     ?>
	   </h1>
	   <?php 

	       require_once "../php/SQLiTool.class.php";
 
	       $sqliTool=new SQLiTool();
    
           $sql="select date from test_news where id=8";

		   echo "发布时间:";

           $sqliTool->execute_dql3($sql);
	
	     ?>
       <br/>
	   <script type="text/javascript">
       if (localStorage.pagecount12)
       {
          localStorage.pagecount12=Number(localStorage.pagecount12) +1;
       }else{
          localStorage.pagecount12=1;
       }
         document.write("访问数: " + localStorage.pagecount12 + " 次");
       </script>
	  
  </div>
   <div class="middle">
       <div class="mid">
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;11月17日，北京大学教授，博士生导师，教育部“新世纪优秀人才” 吴玺宏教授应刘小峰教授的邀请到我校进行学术交流。交流期间，吴教授来到我实验室进行参观与访问，与研究团队中进行专业研究的教师和同学就语音信号处理技术以及机器人机交互技术相关领域的研究工作进行了深入探讨，并提出了专业的建议和指导。
	   </p>
	   <img src="../images/wupro1.jpg" width="320px"/>
	   <img src="../images/wupro2.jpg" width="320px"/>
	   <p style="line-height:3">
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18日，吴教授来到吴教授来到校区物联网工程学院为广大师生作学术报告。报告会由学院副院长李庆武教授主持。报告会上，吴教授以“大数据现状与问题-从数据统计分析到语义理解”为题向校区师生介绍了国内外大数据的研究与发展现状，并对深度计算在机器视觉、大词汇连续语音识别、大数据非标注语音合成方面的工作，以及语言理解和智能机器人的研究做了详细的阐述，同时展示他所领导的研究团队的最新研究成果。
	   </p>
	   <h3>吴玺宏 教授简介</h3>
	   <p style="line-height:3">
	   北京大学教授，博士生导师，教育部“新世纪优秀人才”。现任北京大学信息科学技术学院 智能科学系 副主任；视觉与听觉信息处理国家重点实验室副主任；信息科学中心副主任以及北京大学言语听觉研究中心副主任等职务。研究领域：听感知计算模型、心理声学、语音识别、语音合成、人机交互等。
	   </p>
        </div>
   </div>	
</body>
<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
</div>
</html>
</html>