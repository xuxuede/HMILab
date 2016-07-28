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
<body class="news" ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
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
    
           $sql="select title from test_news where id=1";

           $sqliTool->execute_dql3($sql);
	
	     ?>
	   </h1>
        <?php 

	       require_once "../php/SQLiTool.class.php";
 
	       $sqliTool=new SQLiTool();
    
           $sql="select date from test_news where id=1";

		   echo "发布时间:";

           $sqliTool->execute_dql3($sql);
	
	     ?>
	   <br/>

	   <script type="text/javascript">
       if (localStorage.pagecount5)
       {
          localStorage.pagecount5=Number(localStorage.pagecount5) +1;
       }else{
          localStorage.pagecount5=1;
       }
         document.write("访问数: " + localStorage.pagecount5 + " 次");
       </script>
	  
  </div>
   <div class="middle">
       <div class="mid">
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;近日，实验室蒋爱民博士的论文“Efficient Design of Sparse FIR Filters with Optimized Filter Length”被国际顶级会议ISCAS 2014录用。该会将于2014年6月1日至5日在澳大利亚墨尔本市召开。届时，蒋爱民博士将做分会报告，并与到会专家进行了深入交流与探讨。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp;IEEE ISCAS由美国电气与电子工程师学会（IEEE）电路与系统协会（Circuit and System Society, CAS）组织的协会旗舰会议，与该协会有关的技术委员会与学报、杂志编委会会议也大都在此期间举行，每次会议参会代表平均在2000人左右，录用率40%左右。
	   </p>
	   <p style="line-height:3">
	   &nbsp; &nbsp;&nbsp; &nbsp; 2012年IEEE ISCAS在韩国首尔举行，2013年IEEE ISCAS在北京举行，北京大学是会议主办单位。今年，该会的主题为“Nano/bio circuits and systems applied to enhancing living and lifestyles”。
	   </p>
        </div>
   </div>	
</body>
<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
</div>
</html>
</html>