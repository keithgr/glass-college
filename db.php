<?
    function db_connect() {
        // Connect and select project3 database
        // mysqli(host, user, password, database_name)
        
        // Init config data
        $config = parse_ini_file("/opt/lampp/config.ini");

        $host = $config['HOST'];
        $port = $config['PORT'];
        $user = $config['USER'];
        $pass = $config['PASS'];
        $db = $config['DB'];
            
        // Create and verify connection
        $sql = new mysqli($host.':'.$port, $user, $pass, $db);
        if ($sql->connect_errno) {
           die("Failed to connect to MySQL: ($sql->connect_errno) $sql->connect_error");
        }
        echo "Connection successful"; //For testing
        return $sql;	
    }

    db_connect();
?>
