<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="MyStyles.css" type="text/css" rel="stylesheet">
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript">
	var xmlhttp;
	function searchq(str){
		
		if(str.length == 0){
			document.getElementById("op").innerHTML="";
    		document.getElementById("op").style.border="0px";
    		return;
		}
		
		if(window.XMLHttpRequest){
			 xmlhttp=new XMLHttpRequest();	
		}
		else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
	
		var searchTxt = $("input[name='search']").val();
		
		xmlhttp.onreadystatechange=function() {
    		if (this.readyState==4 && this.status==200) {
      		document.getElementById("op").innerHTML=this.responseText;
      		document.getElementById("op").style.border="2px";
    		
			
	}
  }
			xmlhttp.open("GET","search.php?q="+searchTxt,true);
			xmlhttp.send();
	}
 
 </script>
</head>

<body>
	<h1 style="text-align:center;color:#5F5758;font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif">Search Engine</h1>
	<form action="search.php" method="post"> 
		<h1>Changes</h1>
		<div id="one">
        <input id="box" type="text" name="search" placeholder="Search Here" onKeyUp=	"searchq(this.value);">
  	  <div id="op"></div>
      </div>


</form>

</body>
</html>
