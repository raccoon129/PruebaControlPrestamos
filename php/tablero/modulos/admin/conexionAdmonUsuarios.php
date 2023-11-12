<?

//include(php\db.php);
//$conexion=mysqli_connect("localhost","root","","prototiposistemacontrolprestamos");
$host = 'localhost';
$db = 'prototiposistemacontrolprestamos';
$user = 'root';
$pass = '';

$opciones = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false,
	];

try{
	$spo = new PDO($dsn, $user, $pass, $opciones);
} catch (\PDOException $e){
	throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
	