<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'bigdata');
class DB_con
{
			function __construct()
			{
			$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
			$this->dbh=$con;

			if (mysqli_connect_errno())
			{
			echo "Erreur lors de la connexion : " . mysqli_connect_error();
			}
			}
			public function insert($prenom,$nom,$profession,$adresse,$telephone)
			{
			$ret=mysqli_query($this->dbh,"insert into clients(prenom,nom,profession,adresse,telephone) values('$prenom','$nom','$profession','$adresse','$telephone')");
			return $ret;
			}

			}

?>