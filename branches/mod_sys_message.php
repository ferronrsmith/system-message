<?php
/**
* @version 0.1
* @package System Message
* @copyright (C) 2010 Ferron Smith
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/
 
/** ensure this file is being included by a parent file */
//defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );
 
?>

<?php
	
	$type = $params->get('message_type');
	$msg = $params->get('user_message');

//	echo $msg;
//	echo $type;
	
	switch($type) {
		case "alert":
			echo "<div class=\"alert\">" . $msg . "</div>";
			break;
		case "error":
			echo "<div class=\"error\">" . $msg . "</div>";
			break;
		case "message":
			echo "<div class=\"message\">" . $msg . "</div>";
			break;
	}
	
	// echo "<div class=\"alert\">You must be logged in to submit testimonials</div>"
	
	//echo "<div class=" . $typ .">" . $message . "</div>";	
?>