<?php
/*
-------------------------------------------
|	Game Server Status					  |	
|	Creator: Broccoli_Go 				  |
|	Email: contact@broccoligo.com		  |
-------------------------------------------
*/
require_once("teamspeak/libraries/TeamSpeak3/TeamSpeak3.php"); // path to teamspeak framework
include ("config.php");

// Teamspeak 3 Stuff
try {
    $ts3_connect = TeamSpeak3::factory("serverquery://".$login.":".$password."@".$host.":".$queryport."/?server_port=".$voiceport);


} catch(Exception $e) {
    echo "<p class='server_error'> ERROR: </p>".$e->getMessage();
}

//Game Server Stuff
function query_source($address)
  {
	$steamApiKey = "885F0D0409C9151DC37B5350BD9A951A"; // Can be found at https://steamcommunity.com/dev/	
    $array = explode(":", $address);

    $server['ip']     = $array[0];
    $server['port']   = $array[1];
	

	$data = json_decode(file_get_contents('https://api.steampowered.com/IGameServersService/GetServerList/v1/?filter=\gameaddr\\'.$server["ip"].':'.$server["port"].'&limit=5000&key='.$steamApiKey.''));
	$main = $data->response->servers[0];
	$server['name'] = $main->name;
	$server['addr'] = $main->addr;
	$server['version'] = $main->version;
	$server['players'] = $main->players;
	$server['gameport'] = $main->gameport;
	$server['max_players'] = $main->max_players;
	$server['map'] = $main->map;
	$server['bots']= $main->bots;
	$server['gamedir'] = $main->gamedir;
	$server['dedicated'] = $main->dedicated;
	$server['secure'] = $main->secure;
	$server['os'] = $main->os;
	$server['gametype'] = $main->gametype;
	return $server;
  };
//Top Manu/Nav Urls
function addLink($links){
	$arrLink         = explode(";", $links);
	$url['link']     = $arrLink[0];
	$url['name']     = $arrLink[1];
	$url['navlink']  = "<li class='nav-item'>
							<a class='nav-link' href='".$url['link'] ."'>".$url['name'] ."</a>
						</li>";
	return $url;
}

?>