<?php



?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My test page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <button id="aaa" type="button">aaa</button>
	<button id="bbb" type="button">bbb</button>
	<div id="aaaa">aaa</div>
  </body>
  <script>
  $( document ).ready(function() {
		var window_ = null;
		$("#aaa").click(function(){
			// 控制子視窗，需設白名單
			// https://www.w3schools.com/jsref/met_win_open.asp
			window_ = window.open('http://127.0.0.1:8084/ccc.php',"_blank", "resizable=yes")
			
			//$(window_.document).find('#aaaa').html("ddd");
			
		});
		
		$("#bbb").click(function(){
			// $(window_.document).find('#aaaa').html("ddd");
			alert(444);
			// 更改視窗大小
			window_.resizeTo(300, 300); 
            window_.focus();  
			
			// 執行子視窗指令
			var rrr = "\<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"\>\</script\>";
			rrr += "\<script\>alert('hahaha');\</script\>";
			$(window_.document).find('#aaaa').html(rrr);
			// 點擊子視窗按鈕
			$(window_.document).find('#bbb').click();
			
			
		});
	  }
  );

  </script>
  
</html>