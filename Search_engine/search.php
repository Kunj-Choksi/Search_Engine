<?php
	$op='';
	$searchq=$_GET["q"];
		$con=mysqli_connect('localhost','root','','search') or die("Could Not Connect");
		
		$searchq= preg_replace("#[^0-9a-z]#i","",$searchq);
		$res=mysqli_query($con,"SELECT * FROM SEARCH_TABLE where Name LIKE '%$searchq%' OR Surname LIKE  '%$searchq%'") or die("Sorry!!!");
		$c= mysqli_num_rows($res);
		if($c == 0)
		{
			$op ='No Result Found';
		}	
		else{
			while($row = mysqli_fetch_row($res)){
				$fname=$row[0];
				$lname=$row[1];
				
				$op .= '<div>'.$fname.' '.$lname.'</div>';
			}
		}
	
	
echo $op;	

?>