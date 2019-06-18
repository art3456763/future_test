<?

$boss = 'mysql';
$charset = 'utf8';
$login = 'root';
$pass = '';
$host = 'localhost';
$db = 'testtask';
$options = [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION];
$dsn = "$boss:host=$host;dbname=$db;charset=$charset";

try {  
	$pdo = new PDO($dsn, $login, $pass, $options); 
}  
catch(PDOException $e) {  
	die( "Ошибка подключения к базе данных!" . $e->getMessage() );
}