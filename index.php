<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
	<meta name="description" content="Сервис массового создания коротких ссылок. Генератор анонимных ссылок." >
	<meta name="keywords" content="Сервис создания коротких ссылок, short url">
	<meta name="robots" content="index, follow">
	
    <title> Сервис создания коротких ссылок </title>
    
	<link href="css/form.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tools.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	
	<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter37921250 = new Ya.Metrika({ id:37921250, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/37921250" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>

<body>
	<center>
	<form class="form-container" action="#" class="TTWForm" method="post" novalidate="">		
		<div class="form-title"><h2>Сервис массового создания коротких ссылок</h2></div><br>
				
		<div class="form-title">
			Вставьте ссылки по одной или списком.<br>
			Каждая ссылка с новой строки.
			<br>Нажмите генерировать.
		</div><br>	
		
		<textarea class="form-field" rows="50" cols="65" name="longurls" id="longurls" required="required">http://www.beforetogo.com/#application-page!dimmy-133
http://www.beforetogo.com/#application-page!krakov-cafe-106
http://www.beforetogo.com/#application-page!tonet-cafe-120
		</textarea>

		<div class="form-title">
			Список коротких URL: <br>			
		</div>
		
		<div class="results">
						Сервис коротких ссылок предназначен для <br> облегчения  работы с форумами, блогами, новостными сайтами - где  ограничено количество вводимого текста.

		</div>
	</form>   
	<center>
	
	<br>
	
	<button name="shortbtn" class="shortbtn">Генерировать</button>
	
<div>

    <script language="javascript" type="text/javascript">

		$('.shortbtn').click( function() {

			$.ajax({
			  type: 'POST',
			  url: 'response.php?action=shortbtn',
			  data: 'name=' + document.getElementById("longurls").value,
			  success: function(data){
				$('.results').html(data);
			  }
			});

		});

    </script>

</div>	
	

</body>
</html>