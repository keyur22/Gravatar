<html>
<head>
<script type="text/javaScript">

	function display()
	{	
		var eid = 0;
		var imgsize = 0;
		var eid = document.getElementById('eid').value;
		var imgsize = document.getElementById('imgsize').value;
		
		if(eid!=0 && imgsize!=0)
		{
			if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
			} else {
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
			}
					
			xmlhttp.onreadystatechange = function() {
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)	{
				document.getElementById('display_div').innerHTML = this.responseText;
			}
			}
		
			
					
			xmlhttp.open("GET", "back1.php?eid=" + eid + "&isize=" + imgsize ,true);
			xmlhttp.send();
		}
		
		
	}

</script>
<style>
body{
background-color:#CCCCCC;
}
#tx{
font-size:30px;
font-family:times new roman;
color:grey;
}
#head{
font-size:57px;
color:0095FA;
}
#eid{
    width: 25%;
    box-sizing: border-box;
    border: 2px solid grey;
    border-radius: 5px;
    font-size: 16px;
    background-image: url(img.png);
    background-size:25px;
    background-position: 7px 12px; 
    
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    font-family:times new roman;
    color:grey;
    font-size:20; 
} 
#imgsize{
    width: 10%;
    box-sizing: border-box;
    border: 2px solid grey;
    border-radius: 5px;
    font-size: 16px;
    background-image: url(img.png);
    background-size:25px;
    background-position: 7px 12px; 
    
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    font-family:times new roman;
    color:grey;
    font-size:20; 
} 
</style>
</head>

<body>

<!--<form onchange="display()" </form>>-->
<center>
<div class="container">
	<div class="row">
	<div id="head">Gravator</div>
		<img src="logo.png" style="width:304px;height:228px;">

		<div class="col-md-6" id="tx">
			Enter a valid email id:<br><br>
		</div>
		<div class="col-md-6">
			<input type="text" id="eid" placeholder="Email-id" onchange="display()" required>
		</div>
	</div>
	<br><br>
	
	<div class="row">
		<div class="col-md-6" id="tx">
			<h4><b>Image Size (in Pixels):&nbsp<i>Image size ranges from 1px up to 2048px</i></b></h4>
		</div>
		<div class="col-md-6">
			<input type="number" id="imgsize" min="0" max="2048" placeholder="size" onchange="display()" required>
		</div>
	</div>
	
	<br><br>
	
	
	
	
	
	


<div id="display_div">
</div>

</center>
	
	
</div>
	


</body>

</html>