<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<html>
<head>
  <title>Heroku Test</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Heroku Test</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li>
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
      </li>
      <li>
        <a class="nav-link" href="<?php echo ROOT_URL; ?>about">About</a>
      </li>
      <li>
        <a class="nav-link" href="<?php echo ROOT_URL; ?>contact">Contact Us</a>
      </li>
    </ul>
      </div>
</nav>

<?php
class DB_Connect
{
    public function connect()
    {
      $host = "ec2-50-19-124-157.compute-1.amazonaws.com";
	  $user = "nfltllotkrgbnc";
	  $password = "6501404a979c7d7bb1da09c71cd54a6b83fb4986354072611d25bf3c0f0287e0";
	  $dbname = "d58o173hbaukt7";
	  $port = "5432";

      $db = pg_connect( " $url $host $port $dbname $credentials"  );
      if(!$db){
         echo "Error : Unable to open database\n";
      } else {
         echo "Opened database successfully\n";
      }
      return $db;
    }
}
	$db1 = new DB_Connect();
    $conn = $db1->connect();

    $query = "insert into contact.contact(name) values('Rittika Kaushik')";
    $result = pg_query($conn,$query);
    echo $result;
?>

</body>
</html>
