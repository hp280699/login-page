<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
	<title>LOGIN</title>
	<script>
		var a;
		function f1(){
			a=Math.floor(Math.random()*10000+1);
			document.getElementById('pr').innerHTML=a;
		}
		function ValidCaptcha(){
                      var string1 =a;
                      var string2 =parseInt(document.getElementById('captcha').value);
                      if (string1 == string2){
                        return true;
                      }
                      else{        
                        alert("Invalid Captcha");
                        return false;
                      }
                  }
	</script>
	<style>
		.container{
			position:absolute;
			top:0;
			height:auto;
			width:100%;
		}
		.img_bcg{
			position:absolute;
			top:0;
			width:60%;
			left:15%;
			height:115%;

		}
		#head{
			background-color: #ff9999;
			font-size: 30px;
			color: black;
			font-family: verdana;

		}
		form{
			position:absolute;
			top:0;
			width:49%;
			left:25.5%;
			background-color: white;
			opacity: 0.85;
			border:2px solid black;
		}

		#username{
			border: none;
			border-bottom: 2px solid black;
			opacity: 0.65;
			height: 30px;
			width: 300px;
			font-size: 20px;
		}
		#password{
			border: none;
			border-bottom: 2px solid black;
			opacity: 0.65;
			height: 30px;
			width: 300px;
			font-size: 20px;
		}
		#captcha{
			border: 2px solid black;
			opacity: 0.65;
			font-size: 30px;
			height: 40px;
			width: 100px;
			text-align: center;
		}
		#p1{
			font-family: 'Archivo Black';
			font-size: 20px;
		}
		#pr{
			font-weight: bold;
			font-family: 'Archivo Black';
			font-size: 20px;
			border-style: solid;
			border-color: black;
			background-color: white;
			width: 100px;
		}
		.links{
			font-family: 'amita';
			font-weight: bold;
		}
	</style>
</head>
<body id="body" onload="f1();">
	<img src="backgroundz.png" class="img_bcg">
	<div class="container">
<center>
<form name="login" style="border-style:;border-radius: 5px" onsubmit="return ValidCaptcha();">
	<div id="head"><br><h1 align="center">LOGIN</h1></div>
	<p class="links"align="right">New Registration&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
	<p>&nbsp<input align="left" type="text" id="username" placeholder="Email ID" name="username"></p>
	<p>&nbsp<input type="password" id="password" placeholder="Password" name="password"></p>
	<p  class="links"align="right">Forgot Password?&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
	<p align="center" id="p1">ENTER CAPTCHA:<br></p><p align="center" id="pr"></p><button type="reset"onclick="f1();"><img src=".\download.png" height="30" width="30" alt="reset"></button>
	<p align="center"><input type="text" name="captcha" id="captcha"><br></p><br><br><br>
	<p align="center"><input type="image" src=".\LOGIN.jpg" name="submit" id="submit" value="SIGN IN" height="40" width="150" opacity="0.65"></p><br><br><br>
</form>
</center>
</div>
</body>
</html>