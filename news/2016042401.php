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
    
           $sql="select title from test_news where id=13";

           $sqliTool->execute_dql3($sql);
	
	     ?>
	   </h1>
	   <?php 

	       require_once "../php/SQLiTool.class.php";
 
	       $sqliTool=new SQLiTool();
    
           $sql="select date from test_news where id=13";

		   echo "发布时间:";

           $sqliTool->execute_dql3($sql);
	
	     ?>
       <br/>
	   <script type="text/javascript">
       if (localStorage.pagecount17)
       {
          localStorage.pagecount17=Number(localStorage.pagecount17) +1;
       }else{
          localStorage.pagecount17=1;
       }
         document.write("访问数: " + localStorage.pagecount17 + " 次");
       </script>
	  
  </div>
   <div class="middle">
       <div class="mid">
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 4月16-17日，应中共贾汪区委组织部和贾汪区科技镇长团的邀请，学院党委书记秦进东与刘小峰教授赴徐州市贾汪区参加 “教授、博士贾汪行”科技对接活动，并看望了我院在徐州贾汪工业园区挂职的李书旗副主任。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 对接交流会上，秦进东书记介绍了学院的发展情况与科技成果。刘小峰教授重点交流了常州市特种机器人及智能技术实验室的研究方向及有关智能机器人、人机交互和环境监测网等方面的研究成果，并与鸡鸣山农业科技有限公司以及环保局进行了深入细致地对接交流。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 此次对接交流活动有来自南京大学、河海大学、哈尔滨工业大学、长春机械工业第九设计院、天津大学、天津理工大学、江苏师范大学、合肥工业大学、吉林大学等十余所大学的20位教授、博士参加。
	   </p>
        </div>
   </div>	
</body>
<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
</div>
</html>
</html>