<?
    require('functions.php');

    $pn = $_GET['page_num'];

    $result = get_colleges('techincal institute', $pn);
    echo $result;
?>
