<?php

	// Deprecated, staying here for reference

	// $root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
	// require_once($root.'/wp-load.php');
	
	
	// if (check_admin_referer('attachments-bulk-delete-nonce')) {
		
	// 	$ids = $_GET["ids"];
		
	// 	$args = array( 
	// 		'post_type' => 'attachment', 
	// 		'numberposts' => -1, 
	// 		'post_status' => null, 
	// 		'post_parent' => null,
	// 		'exclude' => $ids
	// 	);
	// 	$all_other_attachments = get_posts($args);
	// 	$all_other_attachment_urls = array();
	// 	echo "All Attachments:";
	// 	if($all_other_attachments){
	// 		foreach($all_other_attachments as $att){
	// 			echo "<br />".wp_get_attachment_url($att->ID);
	// 			array_push($all_other_attachment_urls, wp_get_attachment_url($att->ID));
	// 		}
	// 	}
		
	// 	$idsArray = explode(',', $_GET["ids"]);
		
	// 	foreach($idsArray as $attachment_id){
	// 		wp_delete_attachment($attachment_id, true);
	// 	}
	// 	echo 'All Attachments deleted.';
	// 	exit;
		
	// }
