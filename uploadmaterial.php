<?php
include('db.php');
	if (isset($_POST['Products'])) {
		$id = $_POST['Products'];
		//echo "Sucessful! <a href='..//googledrive/admin.php'>Click here</a> to leave this page";
		$query = $db_handle->prepare("SELECT  `downloads` FROM `docspool` WHERE `id` = ?");
		$query->bindparam(1,$id);
		$res = $query->execute();
		$rows = $query->fetch();
		foreach($rows as $row)
		{
			$curr = $row['downloads'];
		}
		$curr+=1;
		$query = $db_handle->prepare("UPDATE  `docspool` SET `downloads`=? WHERE `id` = ?");
		$query->bindparam(1,$curr);
		$query->bindparam(2,$id);
		$res = $query->execute();
		//echo "done";
		//exit;
	}
	else if(isset($_POST['Delete'])) {
		$id = $_POST['Delete'];
		$curr=1;;
		$query = $db_handle->prepare("UPDATE  `docspool` SET `delMindset`=? WHERE `id` = ?");
		$query->bindparam(1,$curr);
		$query->bindparam(2,$id);
		$res = $query->execute();
		echo "Done! Any user that request this page from now will not see it.";
		//exit;
	}
	if (!isset($_FILES['myfile'])) {
	echo "";
	}else{
	$file=$_FILES['myfile'];
	$image= addslashes(file_get_contents($_FILES['myfile']['tmp_name']));
	$image_name= addslashes($_FILES['myfile']['name']);
	//echo substr($image_name,strlen($image_name)-3,3); exit;
	//$image_size= getimagesize($_FILES['myfile']['size']);
	$query = $db_handle->prepare("SELECT  `docname` FROM `docspool` WHERE `docname` = ?");
	$query->bindparam(1,$image_name);
	$res = $query->execute();
	$count = $query->rowCount();
	if($count == 0)
	{
		$doctype = substr($image_name,strlen($image_name)-3,3);
		$folder = "kwasu/";
		$thepath = "kwasu/$image_name";
		if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"$folder/" . $_FILES["myfile"]["name"]))
		{
			$query = $db_handle->prepare("INSERT INTO `docspool`  (doctype,relpath,docname) VALUES (?,?,?)");
			$query->bindparam(1,$doctype);
			$query->bindparam(2,$thepath);
			$query->bindparam(3,$image_name);
			$res = $query->execute();
			if($res)
			{
				echo "Sucessfully uploaded! <a href='..//googledrive/admin.php'>Click here</a> to leave this page";
			}
			else
			{
				echo "Failed to complete uploading! <a href='..//googledrive/admin.php'>Click here</a> to leave this page and try again";
			}
		}
		else
		{
			echo "Failed to upload! <a href='..//googledrive/admin.php'>Click here</a> to leave this page" ;
		}
	}
	else
		{
			echo "Failed! Document already uploaded<a href='../googledrive/admin.php'>Click here</a> to leave this page" ;
		}
		
			
			
	}	
	
if (!isset($_FILES['updatefile'])) {
	echo "";
	}else{
	$file=$_FILES['updatefile'];
	$image= addslashes(file_get_contents($_FILES['updatefile']['tmp_name']));
	$image_name= addslashes($_FILES['updatefile']['name']);
	$query = $db_handle->prepare("SELECT  `docname` FROM `docspool` WHERE `docname` = ?");
	$query->bindparam(1,$image_name);
	$res = $query->execute();
	$count = $query->rowCount();
	if($count > 0)
	{
		$doctype = substr($image_name,strlen($image_name)-3,3);
		$folder = "kwasu/";
		$thepath = "kwasu/$image_name";
		if(move_uploaded_file($_FILES["updatefile"]["tmp_name"],"$folder/" . $_FILES["updatefile"]["name"]))
		{
			echo "Sucessfully uploaded corrected docs! <a href='..//googledrive/admin.php'>Click here</a> to leave this page";
			/*$query = $db_handle->prepare("INSERT INTO `docspool`  (doctype,relpath,docname) VALUES (?,?,?)");
			$query->bindparam(1,$doctype);
			$query->bindparam(2,$thepath);
			$query->bindparam(3,$image_name);
			$res = $query->execute();
			if($res)
			{
				echo "Sucessfully uploaded! <a href='..//googledrive/admin.php'>Click here</a> to leave this page";
			}
			else
			{
				echo "Failed to complete uploading! <a href='..//googledrive/admin.php'>Click here</a> to leave this page and try again";
			}*/
		}
		else
		{
			echo "Failed to upload for correction! <a href='..//googledrive/admin.php'>Click here</a> to leave this page" ;
		}
	}
	else
		{
			echo "Failed! No document to be corrected <a href='../googledrive/admin.php'>Click here</a> to leave this page" ;
		}
		
			
			
	}
?>