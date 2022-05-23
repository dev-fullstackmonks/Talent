<?php
  require_once "PHPTelnet.php";
	$telnet = new PHPTelnet();
	$telnet->show_connect_error=0;
	$result = $telnet->Connect('Server Ip',PORT,'Password');
	if ($result == 0){
		$telnet->DoCommand('admin add steam_ID 0', $result);
		print_r($result);
		echo "Telnet Server is working!";	
	}else{
		echo "Telnet Server is not working!";	
	}
?>
