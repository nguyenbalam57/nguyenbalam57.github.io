<?php 

	$url_type .= (isset($_GET['type'])) ? '&type='.htmlspecialchars($_GET['type']):'';


	switch ($act) {
        case 'man':
			get_items();
			$templates = 'statitics/items';
			break;
		
		default:
			$templates = 'statitics/items';
			break;
	}
	
	function get_items(){
		global $d,$config,$items,$page,$paging,$func,$url_type;
	   
	}
	
?>