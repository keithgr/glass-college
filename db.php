<?
    // Init config data
    $config = parse_ini_file("/opt/lampp/config.ini");

    $host = $config['HOST'];
    $port = $config['PORT'];
    $user = $config['USER'];
    $pass = $config['PASS'];
    $db = $config['DB'];

    echo $host.$port.$user.$db;

    // Create and verify connection
    $conn = mysqli_connect($host.':'.$port, $user, $pass, $db);
    if(!$conn) {
        die('Could not connect: '.mysql_error());
    }
    echo 'Connected successfully';



    // Close connection
    mysql_close($conn);
?>