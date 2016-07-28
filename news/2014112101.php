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
    
           $sql="select title from test_news where id=9";

           $sqliTool->execute_dql3($sql);
	
	     ?>
	   </h1>
	   <?php 

	       require_once "../php/SQLiTool.class.php";
 
	       $sqliTool=new SQLiTool();
    
           $sql="select date from test_news where id=9";

		   echo "发布时间:";

           $sqliTool->execute_dql3($sql);
	
	     ?>
       <br/>
	   <script type="text/javascript">
       if (localStorage.pagecount13)
       {
          localStorage.pagecount13=Number(localStorage.pagecount13) +1;
       }else{
          localStorage.pagecount13=1;
       }
         document.write("访问数: " + localStorage.pagecount13 + " 次");
       </script>
	  
  </div>
   <div class="middle">
       <div class="mid">
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;2014年11月13日下午，“认知与机器人实验室”成员前往世茂香槟湖幼儿园义务展示。当天下午，由老师带到教室。孩子们安静就坐，围成半个圈，充满期待地等着展示。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;实验室成员仔细地与孩子们讨论机器人的变化，并充分调动了孩子们的想象力。首先展示的是机器人的舞蹈，机器人欢快地舞姿吸引着孩子们一起跳动。舞蹈结束后，机器人又“声情并茂”地讲诉了美猴王的故事……
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 在机器人与孩子们互动的过程中，每个小朋友都争先恐后地希望能与机器人接触一番，欢快的气氛感染了在场的每一个人。幼儿园的小朋友们都表示这次的展示非常新奇，给他们留下了很深的印象。最后，在幼儿园老师的安排下，小朋友们依次提问，虽然问题略显幼稚，但是可见孩子们看完机器人展示后也有自己的思考。世贸香槟湖幼儿园的老师也表示这次展示十分成功，激发了孩子们的兴趣，希望下次还能有这样的展示。
	   </p>
        </div>
   </div>	
</body>
<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
</div>
</html>
</html>