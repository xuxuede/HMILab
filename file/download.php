<?php
    $file_name="submit.docx";
	if(!file_exists($file_name)){
	    echo "�ļ�������";
		return;
	}
	$fp=fopen($file_name,"r");
	$file_size=filesize($file_name);

	//�����ļ���ͷ
	header("Content-type:application/octet-stream");
	//�����ֽڷ���
    header("Accept-Ranges:bytes");
    //�����ļ��Ĵ�С
    header("Accept-Length:$file_size");
	//��������ļ���
    header("Content-Disposition:attachement;filename=".$file_name);
	//��ͻ��˻�������
	$buffer=1024;
	//��仰�����ж��ļ��Ƿ����
	while(!feof($fp)){
	
	    echo fread($fp,$buffer);
	
	}
	fclose($fp);
?>