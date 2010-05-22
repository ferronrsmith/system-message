<?php
/**
* @version 0.4 beta
* @package System Message
* @copyright (C) 2010 Ferron Smith
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/
 
/** ensure direct access is not attempted */
defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );
 
?>

<?php

/*
	The following code is test code and should not be used

*/

  $setting = "setting.css";
  $original =  "original.css";
  $addition_code = "/*a@344.677*/";
  $CRLF = "\x0d\x0a";
  
  //gettting the contents of the new settings
  $data = file($setting);
  $output = get_content($data);
  
  //gettting the contents of the old file
  $data_o  = file($original);
  $output_o = get_content($data_o);
  
  //checking for addition code
  $exist = strpos($output_o,$addition_code);
 
  if($exist === false) {
	  $fh = fopen($original,"a+");
	  fwrite($fh,$output);
	  fclose($f);
  }
  
  //get the contents of a file
  function get_content($raw_data)
  {
	$out = "" . $CLRF;
	foreach($raw_data as $info) {
		$out .= $info;
	}
	return $out;
  }

?>