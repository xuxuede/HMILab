<?php
    $file_name="submit.docx";
	if(!file_exists($file_name)){
	    echo "文件不存在";
		return;
	}
	$fp=fopen($file_name,"r");
	$file_size=filesize($file_name);

	//下载文件的头
	header("Content-type:application/octet-stream");
	//按照字节返回
    header("Accept-Ranges:bytes");
    //返回文件的大小
    header("Accept-Length:$file_size");
	//弹出框的文件名
    header("Content-Disposition:attachement;filename=".$file_name);
	//向客户端回送数据
	$buffer=1024;
	//这句话用于判断文件是否结束
	while(!feof($fp)){
	
	    echo fread($fp,$buffer);
	
	}
	fclose($fp);
?>