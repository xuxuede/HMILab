<!DOCTYPE HTML>
<!-- Website template form http://www.mycodes.net/ -->
<html>
<head>
	<meta charset="UTF-8">
	<title>最新动态-人机互动与认知计算实验室</title>
	<link rel='icon' href='../images/favicon.ico' type=‘image/x-ico’/>
	<link rel="stylesheet" href="../css/style.css" type="text/css"/>
	<script language="javascript" src="../js/showtime.js"></script>
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
	<div id="header">
        <div id="showtime" style="float:right;margin-top:70px;margin-right:15px" width="50px"></div>
		<a href="index.html" class="logo"><img src="../images/logo.png" alt=""></a>
		<ul>
			<li>
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
			<li class="selected">
				<a href="news.php">最新动态</a>
			</li>
            <li>
				<a href="joinus.html">加入我们</a>
			</li>
		</ul>
	</div>

	<div class="midd" >
	    <div class="mid" style = "line-height:3">

             <?php 

	             require_once "../php/SQLiTool.class.php";
				 require_once "../php/NewsListService.class.php";
				 require_once "../php/pageDiv.class.php";
 
	             $sqliTool=new SQLiTool();
    
                 $sql="select title from test_news order by id desc";

				 //$sqliTool->execute_dql($sql);

				 $pageDiv=new PageDiv();
   
                 $pageDiv->pageNow=1;
                 $pageDiv->pageSize=10;
                 $pageDiv->gotoUrl="news.php";
  
                 /* $pageSize=8;
                 $rowCount=0;//这个变量的值，从数据库获取
                 $pageNow=1;//这是变量，默认为1，用户点击超链接获取,我们需要根据用户的点击，来更改这个值 */
  
  
                 //我们需要根据是否有pagenow的值，判断，如果没有值，默认显示第一页
                 if(!empty($_GET['pageNow'])){
  	
  	               $pageDiv->pageNow=$_GET['pageNow'];
                 }
  
  
                 $newsListService = new NewsListService();
                 $newsListService->getPageDiv($pageDiv);//传一个对象即可
                //$pageCount=$employeeService->getPageCount($pageSize);
                //$pageCount=20;
  
               //$res2=$employeeService->getEmpList($pageNow,$pageSize);
  
                echo "<table  width=700  cellspacing=0>";
  
                //echo "<tr><th>id</th><th>title</th></tr>";
                 //这里我们需要循环显示相关用户的信息
                 //这是结果集取出的方式，现在需要换成数组的取出方式
                /*  while($row=$res2->fetch_assoc()){
  	
  	             echo"<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['level']}</td>".
                "<td>{$row['email']}</td><td>{$row['salary']}</td><td><a href='#'>删除用户</a>".
                "</td><td><a href='#'>修改用户</a></td></tr>";
                } */
  
                for($i=0;$i<count($pageDiv->res_array);$i++){
       
                $row=$pageDiv->res_array[$i];
                echo"<tr><td>{$row['id']}</td><td>{$row['title']}</td></tr>";
               }
  
                echo "</table>";
               //打印出页码的超链接
               /* for($i=1;$i<=$pageCount;$i++){
   	
   	           echo "<a href='empList.php?pageNow=$i'>$i</a> &nbsp;"; 	//这里的超链接应该向自身发送请求
              }  */
             //显示上一页以及下一页
              /* if($pageDiv->pageNow>1){
   	          $prePage=$pageDiv->pageNow-1;
              echo"<a href='empList.php?pageNow= $prePage'>上一页</a> &nbsp;";
             }
             if($pageDiv->pageNow<$pageDiv->pageCount){
   	         $nextPage=$pageDiv->pageNow+1;
             echo"<a href='empList.php?pageNow= $nextPage'>下一页</a> &nbsp;";
              } */
               echo  $pageDiv->navigate1;
               echo  $pageDiv->navigate2;
               echo  $pageDiv->navigate3;
   
               echo "当前{$pageDiv->pageNow}页/共 {$pageDiv->pageCount}页";
               //指定跳转到某页
			   //echo "<br/>";
			   echo "<form action='news.php'>";
               echo "跳转到:<input type='text' style='width:50px' name='pageNow'/>";
               echo "<input type='submit' value='GO'>";
               echo  "</form>";
              ?>
             
	    </div>
	</div>

	<div id="footer">
		
			2016 Hohai University<a href='http://hmi.hhuc.edu.cn/'>·人机互动实验室·</a> © 版权所有
		
	</div>
	
</body>
</html>