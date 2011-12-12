<?php  

function process($input) { 
	require("../l1/include/idtousername.php");
	$input = $input;
	$username = $_COOKIE['username'];
	$otherinput = explode('(', $input);
	if($otherinput['0'] == "message") {
		$input2 = $input;
		$otherinput = explode('","', $otherinput['1']);
		$messageto = $otherinput['0'];
		$messageto = str_replace('"', '', $messageto);
		$messageto = str_replace("'", '', $messageto);
		$messageto = str_replace(")", '', $messageto);
		$messageto = str_replace("(", '', $messageto);
		$message = $otherinput['1'];
		$message = str_replace('"', '', $message);
		$message = str_replace("'", '', $message);
		$message = str_replace(")", '', $message);
		$message = str_replace("(", '', $message);
		$input = "message";
		
	}
	elseif($otherinput['0'] == "idconvert") {
		$input2 = $input;
		$otherinput = explode('","', $otherinput['1']);
		$idcon = $otherinput['0'];
		$idcon = str_replace('"', '', $idcon);
		$idcon = str_replace("'", '', $idcon);
		$idcon = str_replace(")", '', $idcon);
		$idcon = str_replace("(", '', $idcon);
		$input = "idconvert";
	}
	elseif($otherinput['0'] == "return") {
		$input2 = $input;
		$otherinput = explode('","', $otherinput['1']);
		$return = $otherinput['0'];
		$return = str_replace('"', '', $return);
		$return = str_replace("'", '', $return);
		$return = str_replace(")", '', $return);
		$return = str_replace("(", '', $return);
		$input = "return";
	}
	elseif($otherinput['0'] == "assume") {
		$input2 = $input;
		$otherinput = explode('","', $otherinput['1']);
		$assume = $otherinput['0'];
		$assume = str_replace('"', '', $assume);
		$assume = str_replace("'", '', $assume);
		$assume = str_replace(")", '', $assume);
		$assume = str_replace("(", '', $assume);
		$input = "assume";
	}
	//print_r($otherinput);
	// now we'll have a LOT of case statements
	// return("> " . $input . ";\n> " . ";\n>");
		switch($input) {
			case "list":
				return("> " . $input . ";\n> list [this], \n> whoami, \n> help, \n> message(), \n> return(), \n> alive, \n> su, \n> sudo, \n> about, \n> idconvert, \n> assume, \n> mysql_settings, \n> mysql_settings_display(), \n> require() \n> \n> Some of these commands can cause fatalities, if you don't belong here, please leave.  \n> The drop command requires an SQL password, don't use it, just don't use it. \n> Most SQL commands will require a SQL password because they're passed straight to C/PHP's SQL parser \n> Node.js can be administered from this CLI as well \n> Node.js is not hosted on this server! Node.js is the tcp-able version  of THIS interface, \n> nothing else, literally. \n> If you're confused or lost please message 1 -> AidanCornelius \n> See also: 'help' \n> See also: 'sqlhelp' \n> \n> See also: 'about'" . ";\n>");
				break;
			case "whoami":
				return("> " . $input . ";\n> " . $username . ";\n>"); 
				break; 
			case "help":
				return("> " . $input . ";\n> " . "Welcome to the Generative Leadership Programs API and compute console.\n> Basic commands include things like about, msql_settings, whoami, assume, and sudo.\n> Queries should be directed to @AidanCornelius using the message('1->@AidanCornelius','Message') function.;\n>");
				break;	
			case "message":
				if(!empty($messageto)) {
					$messageto = idtousername($messageto);
					return("> " . $input . ";\n> " . "Message from " . $username ." to " . $messageto . ", was not delivered, no authorisation recieved from sql;\n> Message read: " . $message . ";\n>");
					break;
				}
				return("> " . $input . ";\n> " . "message() is a function, not a command. Use: message('userid','message');\n> Nothing left to do;\n>");
				break;
			case "return":
				return("> " . $input . ";\n> " . $return . ";\n>");
				break;
			case "alive":
				return("> " . $input . ";\n> You are connected to the Apollo v.5812 -> Generative Leadership API" . ";\n>");
				break;
			case "su":
			case "sudo":
				return("> " . $input . ";\n> " . "You are a superuser;\n>");
				break;
			case "about":
				return("> " . $input . ";\n> " ."[+] Apollo v.5812 -> Generative Leadership API;\n>");
				break;
			case "idconvert":
				$idconname = idtousername($idcon);
				return("> " . $input . ";\n> ID: " . $idcon . " Username: " . $idconname .";\n>");
				break;
			case "assume": 
				return("> " . $input . ";\n> Hyperlink to assume <a href='#" . $assume . "'>user</a>" . ";\n>");
				break;
			case "mysql_settings":
			case "mysql_settings_display(all)":
			case "mysql_settings_display all":
			case "mysql_settings_display(open)":
			case "mysql_settings_display open":
			case "mysql_settings_display(socket)":
			case "mysql_settings_display socket":	
				require_once("../l1/include/configuration.php");
				$return = sqlconnect("1");
				return("> " . $input . ";\n> " . "[+] Configured in _root/l1/configuration.php;\n> Dumping as plaintext: \n> [+] " . $return . ";\n>");	
				break;
			case "cake":
				return("> " . $input . ";\n> Is a lie" . ";\n>");
				break;
			default:
				return("> " . $input . ";\n> " . "Nothing left to do;\n>");
				break;
		}
		 
}


?>