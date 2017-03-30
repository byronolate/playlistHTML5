<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="imgs/favicon.ico">
<link rel="stylesheet" type="text/css" href="iconos/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/TweenMax.min.js"></script>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<title>MENÚ-BOTÓN</title>
</head>

<body link="#FFFFFF">
<!--header-->
<div style="width:100%; height:80px; overflow:hidden; margin: 0 auto; background-color:#333">

  <div id="contenido">
		
       	<div id="caption" style="height:44px; margin-top:13px;float:left; margin-left:12px; position:absolute"><!--<img src="#" width="150" height="60">--></div>
        
        <div id="backbutton"> <img src="imgs/backbtn.png" width="44" height="44" /> </div>
        
       <div id="pagecaption" style="height:44px; margin-top:20px;float:left; margin-left:12px; position:absolute"> Caption </div>
  </div>

</div>

<!--buttons-->
<div id="panel">

	<a href="CANALES/tv1.html" target="main" style="overflow: hidden;"><div id="btn1" style="float:left;"><i class="fa fa-sign-language fa-5x"></i><p> Nombre1 </p> </div> </a>
    <a href="CANALES/tv1.html" target="main"><div id="btn2" style="float:left;"><i class="fa fa-newspaper-o fa-5x"></i> <p> Nombre2 </p> </div> </a>
    <a href="CANALES/tv1.html" target="main"><div id="btn3" style="float:left"><i class="fa fa-laptop fa-5x"></i> <p> Nombre3 </p> </div> </a>
    <a href="CANALES/tv1.html" target="main"><div id="btn4" style="float:left"><i class="fa fa-envelope fa-5x"></i> <p> Nombre4 </p> </div> </a>
    <!--<a href="5.html" target="main"><div id="btn5" style="float:left"> <p> Contact Us </p> </div> </a>
    <a href="6.html" target="main"><div id="btn6" style="float:left"> <p> Feedback </p> </div> </a>-->
    <div id="content" style="position:absolute"> <iframe name="main" frameborder=0 height=450 width=750></iframe> </div>
    
</div>

<!--footer-->
<div id="footer" style="width:100%; height:58px; overflow:hidden; margin: 0 auto; background-color:#333; margin-top:20px;">
    <div style="width:750px; height:80px; margin: 0 auto;">
    <p style="text-align:center; color:#FFF; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:x-small;">&copy; BOP 2016</p>
    </div>
</div>

<?php
//include file
include_once 'user_agent.php';

//create an instance of UserAgent class
$ua = new UserAgent();

//if site is accessed from mobile, then redirect to the mobile site.
if($ua->is_mobile()){
?>

<script type="text/javascript">
$(document).ready(function(){
  TweenLite.to($("#caption"),2,{css:{top:0},delay:1, ease:Power2.easeOut});
  TweenLite.to($("#btn1"),2,{css:{left:0},delay:2, ease:Power2.easeOut});
  TweenLite.to($("#btn2"),2,{css:{left:20},delay:2.5, ease:Power2.easeOut});
  TweenLite.to($("#btn3"),2,{css:{left:40},delay:3, ease:Power2.easeOut});
  TweenLite.to($("#btn4"),2,{css:{left:0},delay:3.5, ease:Power2.easeOut});  
  });
  
  
  $("#btn1").click(function(){
	  TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#backbutton"),1,{css:{left:257, rotation:-180}, ease:Power2.easeOut}); //left:650, rotation:-180
	  TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	  $("#pagecaption").text("Nombre1");
	 
  });
  
  $("#btn2").click(function(){
	  TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#backbutton"),1,{css:{left:257, rotation:-180}, ease:Power2.easeOut});
	  TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	  $("#pagecaption").text("Nombre2");
	 
  });
  
  $("#btn3").click(function(){
	  TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#backbutton"),1,{css:{left:257, rotation:-180}, ease:Power2.easeOut});
	  TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	  $("#pagecaption").text("Nombre3");
	 
  });
  
  $("#btn4").click(function(){
	  TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#backbutton"),1,{css:{left:257, rotation:-180}, ease:Power2.easeOut});
	  TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	  $("#pagecaption").text("Nombre4");
	 
  });
  
  $("#btn5").click(function(){
	  TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#backbutton"),1,{css:{left:257, rotation:-180}, ease:Power2.easeOut});
	  TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	  $("#pagecaption").text("Nombre5");
	 
  });
  
   $("#btn6").click(function(){
	  TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#backbutton"),1,{css:{left:257, rotation:-180}, ease:Power2.easeOut});
	  TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	  $("#pagecaption").text("Feedback");
	 
  });
  
  
   $("#backbutton").click(function(){
	    TweenLite.to($("#content"),1,{css:{top:500}, ease:Power2.easeIn});
		TweenLite.to($("#backbutton"),1,{css:{left:760, rotation:0}, ease:Power2.easeIn});
		TweenLite.to($("#pagecaption"),1,{css:{top:-60}, ease:Power2.easeOut});
		TweenLite.to($("#caption"),1,{css:{top:0}, ease:Power2.easeOut});
	});   
</script>
<?php  
}else{
?>
<script type="text/javascript">
$(document).ready(function(){
  TweenLite.to($("#caption"),2,{css:{top:0},delay:1, ease:Power2.easeOut});
  TweenLite.to($("#btn1"),2,{css:{left:0},delay:2, ease:Power2.easeOut});
  TweenLite.to($("#btn2"),2,{css:{left:20},delay:2.5, ease:Power2.easeOut});
  TweenLite.to($("#btn3"),2,{css:{left:40},delay:3, ease:Power2.easeOut});
  TweenLite.to($("#btn4"),2,{css:{left:0},delay:3.5, ease:Power2.easeOut});  
  });
  
  
  $("#btn1").click(function(){
	  TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#backbutton"),1,{css:{left:650, rotation:-180}, ease:Power2.easeOut}); //left:650, rotation:-180
	  TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	  $("#pagecaption").text("Nombre1");
	 
  });
  
  $("#btn2").click(function(){
	  TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#backbutton"),1,{css:{left:650, rotation:-180}, ease:Power2.easeOut});
	  TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	  $("#pagecaption").text("Nombre2");
	 
  });
  
  $("#btn3").click(function(){
	  TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#backbutton"),1,{css:{left:650, rotation:-180}, ease:Power2.easeOut});
	  TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	  $("#pagecaption").text("Nombre3");
	 
  });
  
  $("#btn4").click(function(){
	  TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#backbutton"),1,{css:{left:650, rotation:-180}, ease:Power2.easeOut});
	  TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	  $("#pagecaption").text("Nombre4");
	 
  });
  
  $("#btn5").click(function(){
	  TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#backbutton"),1,{css:{left:650, rotation:-180}, ease:Power2.easeOut});
	  TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	  $("#pagecaption").text("Nombre5");
	 
  });
  
   $("#btn6").click(function(){
	  TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#backbutton"),1,{css:{left:650, rotation:-180}, ease:Power2.easeOut});
	  TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	  TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	  $("#pagecaption").text("Feedback");
	 
  });
  
  
   $("#backbutton").click(function(){
	    TweenLite.to($("#content"),1,{css:{top:500}, ease:Power2.easeIn});
		TweenLite.to($("#backbutton"),1,{css:{left:760, rotation:0}, ease:Power2.easeIn});
		TweenLite.to($("#pagecaption"),1,{css:{top:-60}, ease:Power2.easeOut});
		TweenLite.to($("#caption"),1,{css:{top:0}, ease:Power2.easeOut});
	});   
</script>
<?php
}
?>

</body>
</html>
