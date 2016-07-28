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
    
           $sql="select title from test_news where id=11";

           $sqliTool->execute_dql3($sql);
	
	     ?>
	   </h1>
	   <?php 

	       require_once "../php/SQLiTool.class.php";
 
	       $sqliTool=new SQLiTool();
    
           $sql="select date from test_news where id=11";

		   echo "发布时间:";

           $sqliTool->execute_dql3($sql);
	
	     ?>
       <br/>
	   <script type="text/javascript">
       if (localStorage.pagecount15)
       {
          localStorage.pagecount15=Number(localStorage.pagecount15) +1;
       }else{
          localStorage.pagecount15=1;
       }
         document.write("访问数: " + localStorage.pagecount15 + " 次");
       </script>
	  
  </div>
   <div class="middle">
       <div class="mid">
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 为了响应今年的国际自闭症日，河海大学常州校区人机互动与认知计算实验室小组人员带着NAO机器人去天爱儿童康复中心一部给自闭症小朋友们带来欢乐，同时也让小朋友们领略科技的魅力。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 天爱儿童康复中心一部的小朋友有多类，这一次面相的小朋友主要是自闭症儿童。当小组人员把机器人拿出来的时候，小朋友们对机器人都感到十分的新奇，都不由自主的上前来观察，或动手摸一摸，脸上都带有愉悦的笑容。等开机好了之后，河海大学的学生先给小朋友们展示了机器人的基本的交互功能。机器人先是站起来申了一个懒腰，在调了一段舞蹈，小朋友们也跟着舞蹈舞动身体，接下来还有人脸的追踪、小朋友牵着机器人走以及说故事等节目，小朋友显得十分的兴奋。表演完节目后，便是要进行河海大学学生利用机器人自主开发的人机肢体学习，分为机器人学小朋友以及小朋友学机器人两部分，效果都不错。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;  这一次响应自闭症的活动，带给小朋友欢乐的同时，同时也给实验室的小组人员带来了欢乐，还让学生们发现了一些问题。例如，其中的负责表演的小组说：“在给小朋友们演示的时候，因为小朋友好动，比较喜欢摸机器人，而我们的节目就是通过摸头来结束或开始下个节目，结果造成提前结束了节目，所以我们应该一个一个的进行表演，而不是通过摸头来结束或开始下个节目，这一点要改进。”另一个负责人机肢体学习的说：“我们的这个学习在提示小朋友在哪里做的不对的提示没做的够好，导致有一个动作看起来做得差不多了，但机器人却没有反应，没有提示。”
	   </p>
	    <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 总的来说河海大学常州校区人机互动与认知计算实验室的这一次活动还是成功的。
	   </p>
        </div>
   </div>	
</body>
<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
</div>
</html>
</html>