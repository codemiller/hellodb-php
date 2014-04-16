<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hello DB!</title>
</head>
<body>
    <h1>Hello MySQL!</h1>
    <p>
        <?php
            $dbhost = getenv('EXT_MYSQL_DB_HOST');
            $dbport = getenv('EXT_MYSQL_DB_PORT'); 
            $dbuser = getenv('EXT_MYSQL_DB_USERNAME');
            $dbpass = getenv('EXT_MYSQL_DB_PASSWORD');
            $dbname = getenv('EXT_MYSQL_DB_NAME');

            try {
                $db = new PDO("mysql:host=$dbhost;dbname=$dbname;port=$dbport;charset=utf8", $dbuser, $dbpass);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connected successfully \o/';
            } catch (PDOException $e) {
                 echo 'Database connection failed: ' . $e->getMessage();
            }
        ?>
    </p>
</body>
</html>
