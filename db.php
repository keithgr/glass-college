<?
    require('functions.php');

    $pn = $_GET['page_num'];

    $result = get_colleges('technical institute', $pn);
	$content .= '<table class = "table">';
	while($row = $result->fetch_assoc()){
		$content.= '<tr>';
		foreach($row as $value){
			$content.= '<td>'.$value.'</td>';
		}
		$content.= '</tr>';
	}
    echo get_page_count('technical institute');
?>
