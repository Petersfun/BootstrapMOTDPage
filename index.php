<!DOCTYPE html>
<html lang="en">

    <?php
    $time = microtime();
    $time = explode(' ', $time);
    $time = $time[1] + $time[0];
    $start = $time;
    ?>
   <head>
      <title>Toxic Gaming MOTD</title>
      <meta name="description" content="TGN Jailbreak MOTD" />
      <meta name="keywords" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
      <!--<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css' />-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css">
      <link rel="stylesheet" href="utilities/tipsy/stylesheets/tipsy.css" type='text/css' />
      <link rel="stylesheet" href="css/style.css" type='text/css' />
	  <?php
    include_once "php/utilities.php";
	  ?>
   </head>
   <Nav>
   <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">Toxic Gaming</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
               <li><a href="#Staff" data-toggle="collapse" data-target="#Staff" aria-expanded="false" aria-controls="Staff">Staff</a></li>
			   <li><a href="#commands" data-toggle="collapse" data-target="#commands" aria-expanded="false" aria-controls="commands">Commands</a></li>
			   <li><a href="#vipinfo" data-toggle="collapse" data-target="#vipinfo" aria-expanded="false" aria-controls="vipinfo">VIP Information</a></li>
			   <li><a href="#RULES" data-toggle="collapse" data-target="#RULES" aria-expanded="false" aria-controls="RULES">Rule</a></li>

			   <!--<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Rules<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
				  <li><a href="#RULESGeneral" data-toggle="collapse" data-target="#RULESGeneral" aria-expanded="false" aria-controls="RULESGeneral"><p data-toggle="collapse" data-target="#RULES" aria-expanded="false" aria-controls="RULES">General Rules</p></a></li>
                  <li><a href="#RULESGuard" data-toggle="collapse" data-target="#RULESGuard" aria-expanded="false" aria-controls="RULESGuard"><p data-toggle="collapse" data-target="#RULES" aria-expanded="false" aria-controls="RULES">Guard Rules</p></a></li>
				  <li><a href="#RULESPrisoner" data-toggle="collapse" data-target="#RULESPrisoner" aria-expanded="false" aria-controls="RULESPrisoner"><p data-toggle="collapse" data-target="#RULES" aria-expanded="false" aria-controls="RULES">Prisoner Rules</p></a></li>
				  <li><a href="#RULESAdmin" data-toggle="collapse" data-target="#RULESAdmin" aria-expanded="false" aria-controls="RULESAdmin"><p data-toggle="collapse" data-target="#RULES" aria-expanded="false" aria-controls="RULES">Admin/Mod Rules</p></a></li>
				  <li><a href="#RULESDays" data-toggle="collapse" data-target="#RULESDays" aria-expanded="false" aria-controls="RULESDays"><p data-toggle="collapse" data-target="#RULES" aria-expanded="false" aria-controls="RULES">Predefined Days</p></a></li>
				</ul>-->
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </nav>
   </Nav>
   <body>
      <div class="container">
      <div class="col-md-12">
      <div class="page-header">
        <center><h2>Jailbreak Rules</h2></center>
      </div>
      <div class="col-md-12">
         </br>
         <div name="GAMEOBJECTIVE">
            <div class="panel panel-primary">
               <div class="panel-heading" name="go" data-toggle="collapse" data-target="#go" aria-expanded="false" aria-controls="go"><font size="5"><center>Game Objective</center></font></div>
               <div class="collapse" id="go">
                 <?php
                 DisplayRules("Game Objective");
                 ?>
               </div>
            </div>
         </div>
         </br>
		 <div name="RULES">
            <div class="panel panel-primary">
               <div class="panel-heading" name="RULES" data-toggle="collapse" data-target="#RULES" aria-expanded="false" aria-controls="RULES"><font size="5"><center>Rules</center></font></div>
               <div class="collapse" id="RULES">

			   <ul class="list-group">
			      <li class="list-group-item" name="RULESGeneral" data-toggle="collapse" data-target="#RULESGeneral" aria-expanded="false" aria-controls="RULESGeneral"><font color="green" size="5"><center>General</center></font></li>
				  <div class="collapse" id="RULESGeneral">
            <?php
            DisplayRules("General Rules");
            ?>
				  </div>
				  </ul>

			   <ul class="list-group">
                  <li class="list-group-item" name="RULESGuard" data-toggle="collapse" data-target="#RULESGuard" aria-expanded="false" aria-controls="RULESGuard"><font color="blue" size="5"><center>Guard</center></font></li>
				  <div class="collapse" id="RULESGuard">
            <?php
            DisplayRules("Guard Rules");
            ?>
				  </div>
				</ul>

				  <ul class="list-group">
				  <li class="list-group-item" name="RULESPrisoner" data-toggle="collapse" data-target="#RULESPrisoner" aria-expanded="false" aria-controls="RULESPrisoner"><font color="red" size="5"><center>Prisoners</center></font></li>
				  <div class="collapse" id="RULESPrisoner">
            <?php
            DisplayRules("Prisoner Rules");
            ?>
				  </div>
				  </ul>


				  <ul class="list-group">
				  <li class="list-group-item" name="RULESAdmin" data-toggle="collapse" data-target="#RULESAdmin" aria-expanded="false" aria-controls="RULESAdmin"><font color="orange" size="5"><center>Admins/Mods</center></font></li>
				  <div class="collapse" id="RULESAdmin">
            <?php
            DisplayRules("Admin Rules");
            ?>
				  </div>
				  </ul>

				  <ul class="list-group">
				  <li class="list-group-item" name="RULESDays" data-toggle="collapse" data-target="#RULESDays" aria-expanded="false" aria-controls="RULESDays"><font color="purple" size="5"><center>Predefined Days</center></font></li>
				  <div class="collapse" id="RULESDays">
            <?php
            DisplayRules("PRE-DEFINED Rules");
            ?>
				  </div>
				  <ul>
         </div>
       </div>
         </br>
		 <div name="STAFF">
            <div class="panel panel-primary">
               <div class="panel-heading" name="Staff" data-toggle="collapse" data-target="#Staff" aria-expanded="false" aria-controls="Staff"><font size="5"><center>Staff</center></font></div>
               <div class="collapse" id="Staff">
                  <table class="table">
                     <tr>
                        <th align="center">Rank</th>
                        <th align="center">Name</th>
                        <th align="center">SteamID</th>
						                <th align="center">Profile</th>
						                <th align="center">Last Played</th>
                     </tr>
                     <?php
                      DisplayGroup("Owner");
                      DisplayGroup("Server Manager");
                      DisplayGroup("DEV");
                      DisplayGroup("Community Leader");
                      DisplayGroup("Admin");
                      DisplayGroup("Mod");
                      DisplayGroup("Probationary Mod");
                     ?>
                  </table>
         </div>
       </div>
         </br>
         <div name="VIPINFO">
            <div class="panel panel-primary">
               <div class="panel-heading" name="vipinfo" data-toggle="collapse" data-target="#vipinfo" aria-expanded="false" aria-controls="vipinfo"><font size="5"><center>Vip Info</center></font></div>
               <div class="collapse" id="vipinfo">
                  <ul class="list-group">
                     <li class="list-group-item"><font size="5" color="red">It costs $5 to become VIP. To donate, use either:</font></li>
                     <li class="list-group-item">!donatepaypal</li>
                     <li class="list-group-item">!donateskins</li>
                     <li class="list-group-item"><font size="5" color="red">VIP's Get the following:</font></li>
                     <li class="list-group-item">
                        <div>!ghost</div>
                        - Allows you to walk around while dead.
                     </li>
                     <li class="list-group-item">
                        <div>!skins</div>
                        - Allows you add a custom skin to your weapon.
                     </li>
                     <li class="list-group-item">VIP Players get put first into the guard queue.</li>
                     <li class="list-group-item">You gain Store Credits 3 times faster than normal.</li>
                     <li class="list-group-item">Ad-free gameplay! Toxic Ads will no longer show up to you.</li>
					 <li class="list-group-item"><font size="5" color="red">Be like these cool cats!:</font></li>
                  </ul>
				  <table class="table">
				   <tr>
                        <th align="center">Rank</th>
                        <th align="center">Name</th>
                        <th align="center">SteamID</th>
						<th align="center">Profile</th>
						<th align="center">Last Played</th>
                    </tr>
                  <?php
                     DisplayGroup("VIP");
                     ?>
				  </table>
         </div>
       </div>
         </br>
         <div name="COMMANDS">
            <div class="panel panel-primary">
               <div class="panel-heading" name="commands" data-toggle="collapse" data-target="#commands" aria-expanded="false" aria-controls="commands"><font size="5"><center>Commands</center></font></div>
               <div class="collapse" id="commands">
			   <ul class="list-group">
                  <li class="list-group-item">Mute player: Hold Tab, Select Player then Delete</li>
                  <li class="list-group-item">nominate - Nominate a map.</li>
                  <li class="list-group-item">rtv - Rock the vote.</li>
                  <li class="list-group-item">!store - Store menu to buy and equip.</li>
                  <li class="list-group-item">!guard - To be added to queue</li>
                  <li class="list-group-item">!w - To be Warden</li>
                  <li class="list-group-item">!retire - To resign as Warden</li>
                  <li class="list-group-item">!rules - Server Rules</li>
                  <li class="list-group-item">!lr - Last Request</li>
                  <li class="list-group-item">!calladmin - Report a Player</li>
				  </ul>
               </div>
            </div>
         </div>
         </br>
      </div>
    </div>
      <footer style="text-align: center; width: 100%; margin-top: 15px;">
         <a id="inlinebutton" class="btn btn-primary btn-lg" href="steam://connect/play.toxicgaming.org" role="button">Jailbreak</a>
         <a id="inlinebutton" class="btn btn-primary btn-lg" href="steam://connect/167.114.205.132:27015" role="button">Idle</a>
         <a id="inlinebutton" class="btn btn-primary btn-lg" href="ts3server://ts.toxicgaming.org" role="button">TeamSpeak</a>
		 <br />
		 MOTD webpage made by <a href="https://github.com/Petersfun" style="color:red; text-decoration:none;">Petersfun</a> | <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/80x15.png" /></a>
      </footer>
      <!--Placed at the bottom for faster loading speeds.-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="utilities/tipsy/javascripts/jquery.tipsy.js"></script>
      <script>
         $(".tip").tipsy({ gravity: 'n' });
         </script>

      <?php
        $time = microtime();
        $time = explode(' ', $time);
        $time = $time[1] + $time[0];
        $finish = $time;
        $total_time = round(($finish - $start), 4);
        echo '<center>Page generated in '.$total_time.' seconds.</center>';

        //getAvatar("STEAM_0:1:54737215");
      ?>
   </body>
</html>
