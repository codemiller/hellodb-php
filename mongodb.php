<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hello DB!</title>
</head>
<body>
    <h1>Hello MongoDB!</h1>
    <p>
        <?php
            $dbhost = getenv('EXT_MONGO_DB_HOST');
            $dbport = getenv('EXT_MONGO_DB_PORT'); 
            $dbuser = getenv('EXT_MONGO_DB_USERNAME');
            $dbpass = getenv('EXT_MONGO_DB_PASSWORD');
            $dbname = getenv('EXT_MONGO_DB_NAME');

            try {
                $uri = "mongodb://$dbuser:$dbpass@$dbhost:$dbport";
                $mongo = new MongoClient($uri); 
                $db = $mongo->$dbname;
                echo 'Connected successfully \o/';
            } catch (MongoConnectionException $e) {
                 echo 'Database connection failed: ' . $e->getMessage();
            }
        ?>
    </p>
</body>
</html>
