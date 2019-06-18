<?
	include "root.php";

	Root::get_message();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="css/main.css">
	<title>Future test</title>
</head>
<body>
	<header>
		<article class="header--1">
			<address>
				<section>Телефон: (499)340-94-71</section>
				<section>Email: <span>info@future-group.ru</span></section>
			</address>
			<section>Комментарии</section>
		</article>
		<article class="header--2">
			<img src="image/logotype.jpg" alt="logotype">
		</article>
	</header>
	<main>
		<article class="comment">
			<?
			Root::show_message();
			?>
		</article>
		<form action="" method="post">
			<h1>Оставить комментарий</h1>
			<section>
				Ваше имя
				<input name="name" type="text">
			</section>
			<section>
				Ваш комментарий
				<textarea name="message"></textarea>
			</section>
			<button>Отправить</button>
		</form>
	</main>
	<footer>
		<section class="footer1">
			<img src="image/logotype.jpg" alt="logotype">
		</section>
		<section class="footer2">
			<address>
				<section>Телефон: (499)340-94-71</section>
				<section>Email: <span>info@future-group.ru</span></section>
				<section>Адрес: <span>115088 Москва, ул. 2-ая Машиностроения, д.7, стр. 1</span></section>
			</address>
			<small>© 2010-2014 Future. Все права защищены</small>
		</section>
	</footer>
</body>
</html>