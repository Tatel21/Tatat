<?php
	$con=mysql_connect("localhost","root","") or die ("DOWN!");
		if ($con) {
			mysql_select_db("wardrobe_db",$con);
           
		}
		else
		{
			die("DOWN");
		}	
?>
