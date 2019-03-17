<?
    // Init config data
    $config = parse_ini_file("/opt/lampp/config.ini");

    $host = $config['HOST'];
    $user = $config['USER'];
    $pass = $config['PASS'];
    $db = $config['DB'];

    

    // Create and verify connection
    $conn = mysql_connect($host, $user, $pass, $db);
    if(!$conn) {
        die('Could not connect: '.mysql_error());
    }
    echo 'Connected successfully';



    // Close connection
    mysql_close($conn);
?>
