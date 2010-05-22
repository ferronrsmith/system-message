<?php
/**
* @version 0.3
* @package System Message
* @copyright (C) 2010 Ferron Smith
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/
 
/** ensure direct access is not attempted */
defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );
 
?>

<?php
	
	$type = $params->get('message_type');
	$msg = $params->get('user_message');

	//checks the message type and echo the appropriate sys_message
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
?>