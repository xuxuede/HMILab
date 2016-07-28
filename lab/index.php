<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset:UTF-8"/>
	<!--每2s刷新一次
	<meta http-equiv="refresh" content="2"/>
	-->
	<title>人机互动与认知计算实验室</title>
	<link rel='icon' href='../images/favicon.ico' type=‘image/x-ico’/>
	<link rel="stylesheet" href="../css/style.css" type="text/css"/>
	<script language="javascript" src="../js/showtime.js"></script>
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
	<div id="header">
	    <div id="showtime" style="float:right;margin-top:70px;margin-right:15px" width="50px"></div>
		<a href="index.html" class="logo"><img src="../images/logo.png" alt=""></a>
		<ul>
			<li class="selected">
				<a href="index.php">首页</a>
			</li>
			<li>
				<a href="about.html">实验室介绍</a>
			</li>
                        <li>
				<a href="professors.html">师资队伍</a>
			</li>
			<li>
				<a href="achievement.html">实验室成果</a>
			</li>
			<li>
				<a href="news.php">最新动态</a>
			</li>
                        <li>
				<a href="joinus.html">加入我们</a>
			</li>
		</ul>
	</div>
	<div id="section">
		<div>
			<div>
				<h1>实验室最新活动</h1>
				<p>
			          <?php 

	                     require_once "../php/SQLiTool.class.php";
 
	                     $sqliTool=new SQLiTool();
    
                         $sql="select title from test_news order by id desc limit 4";

                         $sqliTool->execute_dql3($sql);
	
	                   ?>
				</p>
				<a href="news.php" style="float:right"><img src="../images/more.gif"></a>
			</div>
		</div>
	</div>
	<div id="featured">
		<div>
			<div class="article">
				<h2>欢迎来到人机互动与认知计算实验室</h2>
				<img src="../images/lab-direction.png" alt="">
			</div>
			<ul>
				<li>
					<h3>Nao机器人</h3>
					<div>
						<p>
							Nao是一个高58公分的机器人，是Aldebaran Robotics公司花费三年时间的研究成果。
						</p>
						<a href="about.html#robot" class="more">了解详情</a>
					</div>
					<img src="../images/robot1.jpg" alt="">
				</li>
				<li>
					<h3>Nao机器人</h3>
					<div>
						<p>
							Nao是一个高58公分的机器人，是Aldebaran Robotics公司花费三年时间的研究成果。
						</p>
						<a href="about.html#robot" class="more">了解详情</a>
					</div>
					<img src="../images/robot2.jpg" alt="">
				</li>
				<li>
					<h3>Emotiv头盔</h3>
					<div>
						<p>
							 Emotiv头盔是利用脑电波控制计算机软件的一种头盔装置，这种头盔装置可以“阅读”人类大脑思想。
						</p>
						<a href="about.html#emotiv" class="more">了解详情</a>
					</div>
					<img src="../images/header1.jpg" alt="">
				</li>
				<li>
					<h3>Kinect设备</h3>
					<div>
					    <p>
							 Kinect是微软在2010年6月14日对XBOX360体感周边外设正式发布的名字。
						</p>
						<a href="about.html#kinect" class="more">了解详情</a>
					</div>
					<img src="../images/Kinect.jpg" alt="">
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
	</div>
</body>
</html>