<?php

$link=mysql_connect("localhost","root","")or die("can not connect");
		mysql_select_db("jobportalsystem",$link) or die("can not select database");
if(isset($_POST["submitbtn"])){
$name=$_FILES["resume"]["name"];
$size=$_FILES["resume"]["size"]/1024;
$type=$_FILES["resume"]["type"];
$tmpnme=$_FILES["resume"]["tmp_name"];

if($type=="application/msword"){
	if($size<=200)
	{
		$random=rand(1111,9999);
		$newname=$random.$name;
		$uplodpath="../uploads/".$newname;
		if(move_uploaded_file($tmpnme,$uplodpath)){
			echo "successful !..<br/>";
			echo "<br/>File name :".$name;
			echo "<br/>File size :".$size."kb";
			echo "<br/>File type :".$type;
			$q="insert into upload(upcv)
	    values ('$tmpnme')";
mysql_query($q,$link)or die("wrong query ");
		mysql_close($link);
			
		}
	}
	else
		echo "<br/>Maximum size limit is 200kb";
}
else
	echo "<br/>Upload only word document !..";
}
header("location:upload.php");
		
?>