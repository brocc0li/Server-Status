<!DOCTYPE html>
<?php
include ("includes/inc.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <meta name="description" content="Provided by Broccoli_Go" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="broccoligo.com">



    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">
	    <link rel="shortcut icon" href="https://solitudegaming.com/favicon.ico"> 
		<link rel="apple-touch-icon" sizes="180x180" href="https://solitudegaming.com/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="https://solitudegaming.com/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="https://solitudegaming.com/favicon-16x16.png">
		<link rel="manifest" href="https://solitudegaming.com/site.webmanifest">
		<link rel="mask-icon" href="https://solitudegaming.com/safari-pinned-tab.svg" color="#ffb400">
		<meta name="msapplication-TileColor" content="#000000">
		<meta name="theme-color" content="#000000">
		<meta property="og:image" content="https://solitudegaming.com/og-image.jpg">
		<meta property="og:image:height" content="400">
		<meta property="og:image:width" content="764">
		<meta property="og:title" content="SolitudeGaming Community Servers">
		<meta property="og:description" content="Garry's Mod, Rust, CSGO, DayZ, GTA:FiveM">
		<meta property="og:url" content="https://solitudegaming.com">
  </head>
  
    <body>
    <!-- Navigation is key to success! -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
		<a class="navbar-brand" href="">
  <?php echo "<img src='".$logo."' height='64' width='300' class='d-inline-block align-top' alt=''>" ?> | Servers
		</a>
	
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo $home; ?>">Home
                <span class="sr-only">(current)</span>
              </a>
			</li>
				<?php 
					foreach($links as $result) {
						echo $result['navlink'], '<br>';
					}
				?>
          </ul>
        </div>
      </div> 
    </nav>
<br><br><br><br><br>
		<div style="margin: auto; width: 100%; ">
                <div class="col-lg-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home1" role="tab" data-toggle="tab">[TS3] <?php echo "".$ts3_connect->virtualserver_name."";?></a>
                        </li>
						<?php foreach($address as $sresult) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#<?php echo $sresult["gamedir"]?>" role="tab" data-toggle="tab">[<?php echo $sresult["gamedir"]?>] <?php
														if(!$sresult["players"] == ''){
															echo $sresult["name"];
														 } else{
															echo "<span style='color: red;'>Offline</span>";
														 }
							echo "</a></li>";	?>
						<?php }?>
                    </ul>
				<div class="tab-content">
                        <br>
                        <div role="tabpanel" class="tab-pane active" id="home1">
                            <h4>Teamspeak Info</h4>
                            <p>
							<?php
								echo "
									<div class='col-lg-9 col-md-8'>
										<div class='table-responsive'>
											<table class='table table-striped'>
												<thead class='thead-inverse'>
													<td>Server Status</td><td class='server_online' style='color: green;'>".$ts3_connect->virtualserver_status."</td>
													<tr>
													<td>Server Name</td><td class='server_name'>".$ts3_connect->virtualserver_name. "" .$ts3_connect->virtualserver_hostbutton_tooltip."</td>
													</tr><tr>
													<td>Server Uptime</td><td class='server_uptame'>".TeamSpeak3_Helper_Convert::seconds($ts3_connect->virtualserver_uptime)."</td>
													</tr><tr>
													<td>Users</td><td class='server_users'>".($ts3_connect->virtualserver_clientsonline-$ts3_connect->virtualserver_queryclientsonline)."/".$ts3_connect->virtualserver_maxclients."</td>
													</tr><tr>
													<td>Channels</td><td class='server_channels'>".$ts3_connect->virtualserver_channelsonline."</td>
													</tr><tr>
													<td>Download</td><td class='server_download'>".TeamSpeak3_Helper_Convert::bytes($ts3_connect->connection_filetransfer_bytes_received_total + $ts3_connect->connection_bytes_received_total)."</td>
													</tr><tr>
													<td>Upload</td><td class='server_upload'>".TeamSpeak3_Helper_Convert::bytes($ts3_connect->connection_filetransfer_bytes_sent_total + $ts3_connect->connection_bytes_sent_total)."</td>
													</tr><tr>
													<td>Connect</td><td><a href='ts3server://".$ts3_connect->getAdapterHost()."/?port=".$voiceport."&nickname=Web_Guest'>Click here</a></td>
													</tr>
												</thead>
											</table>
										</div>
									</div>";
							?>
                            </p>
                        </div>
						<?php foreach($address as $gresult) { ?>
                        <div role="tabpanel" class="tab-pane" id="<?php echo $gresult["gamedir"]?>">
						
                            <h4><?php echo $gresult["gamedir"]?> Info</h4>
                            <p>

									<div class='col-lg-9 col-md-8'>
										<div class='table-responsive'>
											<table class='table table-striped'>
												<thead class='thead-inverse'>
													<td>Server Status</td><td class='server_online'>
													<?php
														if(!$gresult["players"] == ''){
															echo "<span style='color: green;'>Online</span>";
														 } else{
															echo "<span style='color: red;'>Offline</span>";
														 }
													?>
													
													</td>
													<tr>
													<td>Server Name</td><td class='server_name'>
													<?php echo $gresult["name"]?>
													</td>
													</tr><tr>
													<td>Map</td><td class='server_adress'>
													<?php echo $gresult["map"]?>
													</td>
													</tr><tr>
													<td>players</td><td class='server_users'><?php echo $gresult["players"]?>/<?php echo $gresult["max_players"] ?></td>
													</tr><tr>
													<td>Game</td><td class='server_users'><?php echo $gresult["gamedir"]?> </td>
													</tr><tr>
													<td>Game Type</td><td class='server_users'><?php echo $gresult["gametype"]?></td>
													</tr><tr>
													<td>Dedicated</td><td class='server_users'>
													<?php
														if($gresult["dedicated"] == "true"){
															echo "Yes";
														 } else{
															echo "No";
														 }
													?>
													</td>
													</tr><tr>
													<td>OS</td><td class='server_users'>
													<?php
														if($gresult["os"] == "w"){
															echo "Windows";
														 } else{
															echo "Linux";
														 }
													?>
													</td></td>
													</tr><tr> 
													<td>Vac Secure?</td><td class='server_users'>
													<?php
														if($gresult["secure"] == "true"){
															echo "Yes";
														 } else{
															echo "No";
														 }
													?>
													</td></td>
													</tr><tr> 
													<td>Connect</td><td><a href="steam://connect/<?php echo $gresult["ip"]?>:<?php echo $gresult["port"];?>">Click here</a></td>
													</tr>
												</thead>
											</table>
										</div>
									</div>
                            </p>
                        </div>
					<?php	} ?>
				</div>
		</div>
	</div>
    <!-- Bootstrap Core Javascript! -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    


<footer class="container-fluid">
    <p class="text-right small"><?php echo $copyright;  ?></p>
	<p class="text-right small">Website Developed with ♥ by <a href="https://broccoligo.com">Broccoli_Go</a></p>
</footer>