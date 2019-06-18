<?
include "Database.php";

class Root{
	public function show_message(){
		global $pdo;
		$sql = "SELECT * FROM Test ORDER BY id DESC";
		$stmt = $pdo->query($sql);

		foreach ($stmt as $comments):
		?>
		<article class="comment__item">
			<section class="comment__item--name"><?=$comments["name"]?></section>
			<section class="comment__item--time"><?=$comments["time"]?></section>
			<section class="comment__item--date"><?=$comments["date"]?></section>
			<section class="comment__item--desctiption"><?=$comments["description"]?></section>
		</article>
		<?
		endforeach;
	}

	public function get_message(){
		global $pdo;

		$name = $_POST["name"];
		$description = $_POST["message"];
		$date = date("d.m.Y");
		$time = date("H:i");
		$sql = "INSERT INTO Test(name, description, time, date) VALUES(:n, :ds, :t, :de)";

		$options = array(
			"n" => $name,
			"ds" => $description,
			"t" => $time,
			"de" => $date
		);

		if($name && $description){
			$stmt = $pdo->prepare($sql);
			$stmt->execute($options);

			header("Location: ./");
		}
	}
}