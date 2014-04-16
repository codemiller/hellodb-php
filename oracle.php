<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hello DB!</title>
</head>
<body>
    <h1>Hello Oracle!</h1>
    <p>
        <?php
            $dbhost = getenv('EXT_ORACLE_DB_HOST');
            $dbport = getenv('EXT_ORACLE_DB_PORT'); 
            $dbuser = getenv('EXT_ORACLE_DB_USERNAME');
            $dbpass = getenv('EXT_ORACLE_DB_PASSWORD');
            $dbname = getenv('EXT_ORACLE_DB_NAME');

            try {
                $db = new PDO("oci:dbname=//$dbhost:$dbport/$dbname", $dbuser, $dbpass);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connected successfully \o/';
            } catch (PDOException $e) {
                 echo 'Database connection failed: ' . $e->getMessage();
            }
        ?>
    </p>
</body>
</html>

