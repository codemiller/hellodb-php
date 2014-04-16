<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hello DB!</title>
</head>
<body>
    <h1>Hello PostgreSQL!</h1>
    <p>
        <?php
            $dbhost = getenv('EXT_POSTGRESQL_DB_HOST');
            $dbport = getenv('EXT_POSTGRESQL_DB_PORT'); 
            $dbuser = getenv('EXT_POSTGRESQL_DB_USERNAME');
            $dbpass = getenv('EXT_POSTGRESQL_DB_PASSWORD');
            $dbname = getenv('EXT_POSTGRESQL_DB_NAME');

            try {
                $db = new PDO("pgsql:host=$dbhost;dbname=$dbname;port=$dbport", $dbuser, $dbpass);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connected successfully \o/';
            } catch (PDOException $e) {
                 echo 'Database connection failed: ' . $e->getMessage();
            }
        ?>
    </p>
</body>
</html>
