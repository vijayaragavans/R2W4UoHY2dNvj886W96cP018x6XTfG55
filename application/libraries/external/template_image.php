<?php

	$path = "../../../../right/files/ugc/html_template/";

	$valid_formats = array("jpg", "png", "gif", "bmp");
	
	//$user_id = $_REQUEST['user_id'];
	
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['template_img']['name'];
			$size = $_FILES['template_img']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if( $size < (1024*1024) )
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$tmp = $_FILES['template_img']['tmp_name'];
							
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
									
									//$query = "UPDATE users SET user_logo='$actual_image_name' WHERE user_id='$user_id'";
									
									//$response = mysql_query($query);
									echo $actual_image_name;
									die;
								}
							else
								echo $_FILES['template_img']['error'];
								die;
						}
						else
						echo "Image file size max 1 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
?>