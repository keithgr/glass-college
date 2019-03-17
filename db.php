<?
    require('functions.php');

    $pn = $_GET['page_num'];

    $result = get_colleges('technical institute', $pn);
    var_dump($result);
?>
