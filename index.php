<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
  <link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="srypt.js"></script>
</head>
<body>
  	<header>
    	<div class="container">
      		<div class="logo">Тест Promedia</div>
    	</div>
  	</header>
  	<div class="container">
  		<ul> Правила редактирования текста
  			<li># Заголовок - вся строка, которая начинается с символа # помещается в тег &lt;H1&gt;. При переходе на новую строку, тег закрывается. Символ # удаляется из этой строки. </li>
  			<li>**Жирный текст** - Текст помещенный между ** становится жирным, то есть помещается в тег &lt;b&gt;, символы ** удаляются из этой строки.  </li>
  			<li>*Курсив* - Текст помещенный между * становится курсивным, то есть помещается в тег &lt;i&gt;, символ * удаляется из этой строки. </li>
  			<li>Перенос строки заменяется на &lt;br&gt;</li>
  		</ul>
    	<div class="wraper">
				<textarea id="text" placeholder="Введите текст"></textarea>
  			<div id="otvet">Здесь будет преобразованный текст</div>
		</div>
	</div>
</body>
</html>