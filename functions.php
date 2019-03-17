<?php
	
/* -----------------------------------------------------------------------
	 These are the global variables
----------------------------------------------------------------------- */
$website_name = 'CSIS-390 Project 3';
$author = 'Eric Breimer';
$pages = array(	'home.php' => 'Home',
								'resume.php' => 'Resume',
								'courses1.php' => 'Courses1',
								'courses2.php' => 'Courses2',
								'courses3.php' => 'Courses3',
								'courses4.php' => 'Courses4'  );
								

/* -----------------------------------------------------------------------
	 Connect to database.  Return mysqli object
----------------------------------------------------------------------- */
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


/* ------------------------------------------------------------------------------------------------------
	 Echos a basic web page with a navbar in the header, a Bootstrap main container and a custom footer
------------------------------------------------------------------------------------------------------ */
function make_basic_page($page_name, $content, $style=null) {
	global $website_name;
	global $author;
	global $pages;
		
	echo 	make_top($website_name, $page_name, $style).'
				<header>
					'.make_navbar($pages, $website_name, $page_name).'
				</header>		
				<main class="container">
					'.$content.'
				</main>
				<footer>
					'.make_footer($pages, $author).'
				</footer>'.
				make_bottom();
}

								
/* -----------------------------------------------------------------------
	 This creates the top of every web page and slices in the
	 website name, page name and optional style, i.e., embedded CSS	 
----------------------------------------------------------------------- */								
function make_top($website_name, $page_name, $style=null) {
	if ($style != null) 
		$style = '<style>'.$style.'</style>';
	
	return '
		<!DOCTYPE html>
		<html lang="en">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>'.$website_name.' - '.$page_name.'</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">
		'.$style.'
		<body>
	';	
}

/* -----------------------------------------------------------------------
	 Creates the bottom of every web page to include the bootstrap javascript
----------------------------------------------------------------------- */								
function make_bottom() {
	return '
			<!-- javascript -->
			<script src="js/jquery.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
		</html>
	';
}


/* -----------------------------------------------------------------------
	 This creates the nav menu from the pages array and active page name
	 Also, slices the website name into the navbar brand area
----------------------------------------------------------------------- */
function make_navbar($pages, $website_name, $active_page) {
	$menu = '';
	foreach ( $pages as $link => $name ) {
		$active = '';
		if ($active_page == $name) 
			$active = 'active';	
		$menu .= '<a class="nav-item nav-link '.$active.'" href="'.$link.'">'.$name.'</a>';
	}

	return '
		<!-- website navbar -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		  <a class="navbar-brand" href=".">'.$website_name.'</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav" 
		  				aria-controls="mainnav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="mainnav">
		    <div class="navbar-nav">
		    	'.$menu.'
		    </div>
		  </div>
		</nav>
	';
}


/* -----------------------------------------------------------------------
	 This creates the page footer with links at bottom
----------------------------------------------------------------------- */
function make_footer($pages, $author) {
  $menu = ''; 
	foreach ( $pages as $link => $name ) {
		$menu .= '<li><a href="'.$link.'">'.$name.'</a></li>';
	}    
	
	return '  
		<footer>
	    <ul>'.$menu.'</ul>
	    <p>
	      &copy; 2019 '.$author.'<br>
	      Built with <a href="https://getbootstrap.com/">Bootstrap 4</a><br>
	      <small>Valid HTML5 + ARIA + SVG 1.1 + MathML 2.0</small>
	    </p>
		</footer>
	';
}


/* --------------------------------------------------------------------------------
	Creates a Bootstrap row with columns that can have four different configuration 
	depending on whether or not side_menu or aside_content are present
-------------------------------------------------------------------------------- */								
function make_main_content($main_article, $side_menu=null, $aside_content=null) {
	// If both side_menu and aside are present
	if ($side_menu && $aside_content) {
		$main_content = '
			<div class="row justify-content-end"> 
				<nav class="col-sm-4 col-lg-3">
					'.$side_menu.'
				</nav>
				<article class="col-sm-8 col-lg-6">
					'.$main_article.'
				</article>
				<aside class="col-sm-4 col-lg-3">
					'.$aside_content.'
				</aside>
			</div>					
		';
	}
	else if ($side_menu) {	  // Side menu only	
		$main_content = '
			<div class="row justify-content-end"> 
				<nav class="col-sm-4 col-lg-3">
					'.$side_menu.'
				</nav>
				<article class="col-sm-8 col-lg-9">
					'.$main_article.'
				</article>
			</div>			
		';
	}
	else if ($aside_content) {		// Aside only
		$main_content = '
			<div class="row justify-content-end"> 
				<article class="col-sm-8 col-lg-9">
					'.$main_article.'
				</article>
				<aside class="col-sm-4 col-lg-3">
					'.$aside_content.'
				</aside>
			</div>			
		';
	}
	else {		// No side menu and no aside
		$main_content = '
			<article>
				'.$main_article.'
			</article>			
		';
	}
	return $main_content;
}



/* -----------------------------------------------------------------------
	 This creates a bootstrap card with the given title, content and
	 background style (primary, success, danger, etc.)
----------------------------------------------------------------------- */
function make_card($title, $content, $style='primary') {
	return '
		<div class="card bg-'.$style.'">
		  <div class="card-header">
		    '.$title.'
		  </div>
		  <div class="card-body bg-light">
		    '.$content.'
		  </div>
		</div>';
}


/* ----------------------------------------------------------------------------
	 This creates a bootstrap list group from the given title, list and style
---------------------------------------------------------------------------- */
function make_listgroup($title, $list, $style='primary') {
	
	$content  = '<ul class="list-group list-group-flush">';
	foreach ($list as $url => $name) {
		$content .= '<a class="list-group-item" href="'.$url.'">'.$name.'</a>';
	}
	$content .= '</ul>';
	
	return '
		<div class="card bg-'.$style.'">
			<h5 class="card-header text-light">'.$title.'</h5>
				'.$content.'
		</div>';
}


/* -----------------------------------------------------------------------
	 This creates a block of HTML for displaying course information.
	 	 
	 By default is will read a CSV file of courses and display them
	 as nested list where the outer list is the course number/id
	 and the inner list are the details (year, semester, course name).
	 
	 If format is table, this will print the list of courses
	 as a table.
	 
----------------------------------------------------------------------- */
function make_courses($file_name, $format='list') {

	/* Reads the CSV file as an array
		each line of the file is treated like an array element */	
	$file = file($file_name);
	
	/* Loop for each element in the file array
		remember each line of the file is treated like an array element */
	foreach ($file as $line) {
		
		// Splits the line into an array based on the commas
		$arr = explode(',', $line);

		/* The code below creates an associative array called record
			Where the course number/id is the array index
			$arr[0] is the year
			$arr[1] is the semester
			$arr[2] is the course number/id, i.e., CSIS-110 
			$arr[3] is the course name, i.e., Intro to CS */
			
		$record[$arr[2]] = array($arr[3], $arr[1], $arr[0]);
	}
	
	$out = '';
	
	if ($format=='list') {
	
		// Format the records as nested lists
		$out .= '<ol>';
		foreach ($record as $id => $details) {
			$out .=  '<li><b>'.$id.'</b>';
				$out .= '<ul>';
				foreach ($details as $value) {
					 $out .= '<li>'.$value.'</li>';
				}
				$out .= '</ul>';
			$out .= '</li>';
		}	
		$out .= '</ol>';
	
	}
	elseif ($format=='table') {
	
		ksort($record); // Sort records by key, i.e., index
	
		// Format the records as a table
		$out .= '<table>';
		foreach ($record as $id => $details) {
			$out .= '<tr><th>'.$id.'</th>';
				foreach ($details as $value) {
					 $out .= '<td>'.$value.'</td>';
				}
			$out .= '</tr>';
		}	
		$out .= '</table>';
	}
	return $out;

}

function get_fields($table_name){
   $db = db_connect();
   $table = $db->query("DESC $table_name");
   $result = [];
   foreach($table as $row){
        array_push($result, $row['Field']);
   }
   $db->close();
    
   return $result;
}

function insert_values($table_name, $values) {
    $fields = get_fields($table_name);
    $sql = "INSERT INTO $table_name (";
    
    $sql .= "{$fields[0]}";
    for ($f = 1; $f < sizeof($fields); $f++) {
        $sql .= ", {$fields[$f]}";
    }
    $sql .= ") VALUES ('{$values[0]}'";
    for ($v = 1; $v < sizeof($values); $v++) {
        if ($values[$v] === null)
            $sql .= ", NULL";
        else
            $sql .= ", '{$values[$v]}'";
    }
    $sql .= ");";
    
    echo $sql;
    
    $db = db_connect();
    $result = $db->query($sql);
    $db->close();
}

function get_college_cards($search_key, $page_num) {
    $limitClause = '';
    if($page_num == 1) {
        $limitClause = 'LIMIT 20';
    }
    else {
        $limitClause = 'LIMIT '.(($page_num - 1)*20).', 20';
    }

    echo $limitClause;
    
    $sql = "SELECT * FROM college WHERE name LIKE '%$search_key%' $limitClause";
    $db = db_connect();
    $result = $db->query($sql);
    
    $content = '';
    foreach($result as $row) {
        $content .= '
        <a href="COLLEGE_PAGE.php">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">'.$row['name'].'</h5>
                    <h6 class="card-subtitle mb-2 text-muted">'.$row['address'].'</h6>
                </div>
            </div>
        </a>
        ';
    }
    
    return $content;
} 

function get_page_count($search_key) {
    $sql = "SELECT count(*) FROM college WHERE name LIKE '%$search_key%'";
    $db = db_connect();
    $result = $db->query($sql);
        
    return ceil($result->fetch_row()[0] / 20);
} 

function generate_carousel_items($search_key) {
    $page_count = get_page_count($search_key);
    $content = '';
    for ($p = 1; $p <= $page_count; $p++) {
        $content .= '
        <div class="hs-item set-bg" data-setbg="img/bg.jpg">
            <div class="container">
                '.get_college_cards($search_key,$p).'
            </div>
        </div>
        ';
    }
}

?>