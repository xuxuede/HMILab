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
    
           $sql="select title from test_news where id=12";

           $sqliTool->execute_dql3($sql);
	
	     ?>
	   </h1>
	   <?php 

	       require_once "../php/SQLiTool.class.php";
 
	       $sqliTool=new SQLiTool();
    
           $sql="select date from test_news where id=12";

		   echo "发布时间:";

           $sqliTool->execute_dql3($sql);
	
	     ?>
       <br/>
	   <script type="text/javascript">
       if (localStorage.pagecount16)
       {
          localStorage.pagecount16=Number(localStorage.pagecount16) +1;
       }else{
          localStorage.pagecount16=1;
       }
         document.write("访问数: " + localStorage.pagecount16 + " 次");
       </script>
	  
  </div>
   <div class="middle">
       <div class="mid">
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 6月6日-8日，由电气和电子工程师协会消费电子分会（IEEE CE）主办的“ICCE-Taiwan 2015学术会议”在中国台北成功举办,河海大学常州校区人机互动与认知计算实验室研究团队刘小峰教授、蒋爱民教授、徐宁博士以及姚潇博士一行四人赴台湾参会。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 会议旨在促进电子学及相关专业领域的深入交流研讨，内容包括消费电子的基础技术、娱乐与信息系统等五大主题。刘小峰教授任 “计算机网络和传感器技术”会场主席，组织各国学者进行交流讨论。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;  会上，由刘小峰教授及其合作者完成的论文“一种自行车载道路周边空气污染监测传感器”（A Bicycle-borne Sensor for Monitoring Air Pollution near Roadways）获得本次大会的最佳论文奖，论文研究的成果为公共自行车赋予新功能，为城市空气质量监测提供了新方法，可促进更多的人使用绿色低碳交通工具，并关注身边的空气污染。该论文在会议报告和交流研讨的环节中，引起了参会的国内国际研究人员的高度关注。
	   </p>
	    <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 本次会议共收录论文258篇， 6篇论文入选最佳论文提名，4篇论文获最佳论文奖。其中我科研团队共有4篇论文被大会录用，并在大会上进行发表演说。
	   </p>
        </div>
   </div>	
</body>
<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
</div>
</html>
</html>