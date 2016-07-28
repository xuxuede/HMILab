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
    
           $sql="select title from test_news where id=10";

           $sqliTool->execute_dql3($sql);
	
	     ?>
	   </h1>
	   <?php 

	       require_once "../php/SQLiTool.class.php";
 
	       $sqliTool=new SQLiTool();
    
           $sql="select date from test_news where id=10";

		   echo "发布时间:";

           $sqliTool->execute_dql3($sql);
	
	     ?>
       <br/>
	   <script type="text/javascript">
       if (localStorage.pagecount14)
       {
          localStorage.pagecount14=Number(localStorage.pagecount14) +1;
       }else{
          localStorage.pagecount14=1;
       }
         document.write("访问数: " + localStorage.pagecount14 + " 次");
       </script>
	  
  </div>
   <div class="middle">
       <div class="mid">
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;12月31日下午，河海大学常州校区人机互动与认知计算实验室带着NAO机器人去天爱儿童康复中心二部给小朋友们进行机器人展示，让康复中心的孩子享受到高科技的魅力。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;本次二部人群不同于三部的大龄自闭症人群，这些儿童里主要以脑瘫引起的运动障碍人群为多，也有少数大龄的患者。基于这样的前提，本次展示按照几个模块的进行：
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 1.围观人数较多，首先进行了舞蹈展示，这十分吸引小朋友们的注意，也激发小朋友们（包括陪伴的老师和家长）的兴趣，小朋友们看到机器人跳舞感觉十分的兴奋，高兴。
	   </p>
	   <img src="../images/play1.jpg" width="400px"/>
	   <img src="../images/play2.jpg" width="240px" height="305px"/>
	    <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 2.互动环节的人脸追踪，机器人会跟着小朋友们走，这对脑瘫的小朋友十分有帮助，部分移动缓慢的儿童，移动速度几乎和机器人同步，而在康复训练中，很多小孩未能坚持下去，而有了机器人的陪伴更能有兴趣坚持运动下去。而语音功能由于环境问题，总有干扰，加之许多孩子发音不是很准确，所以未能起到多大帮助，但是机器人一些滑稽的动作也能引起大家一阵欢笑。
	   </p>
	    <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;  3.最后形式就是基于Kinect的人体模仿了，有些孩子正缺乏肢体的运动能力，在这个环节当中，虽然只能模仿手部的动作，但孩子们的兴趣还是很高的，对小朋友们的康复训练很有帮助。将来技术更加成熟，机器人更加可以成为孩子们康复之路上的好伙伴。
	   </p>
	    <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 总的来说这次的天爱二部之旅还是挺成功的，让我们更近一步的观察到了机器人对残障的小朋友的帮助以及不足之处，使机器人成为孩子们康复之路上的好伙伴，同时也给康复中心的孩子们带去了欢乐。
	   </p>
        </div>
   </div>	
</body>
<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
</div>
</html>
</html>