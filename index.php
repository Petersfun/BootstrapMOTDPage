<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Toxic Gaming MOTD</title>
      <meta name="description" content="TGN Jailbreak MOTD" />
      <meta name="keywords" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
      <!--<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css' />-->
      <link rel="stylesheet" href="utilities/bootstrap-3.3.4/css/bootstrap.min.css" type='text/css' />
      <link rel="stylesheet" href="utilities/tipsy/stylesheets/tipsy.css" type='text/css' />
      <link rel="stylesheet" href="css/style.css" type='text/css' />
	  <?php 
		include_once "php/config.php";
		include_once "php/utilities.php";
		global $conn;
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
         <small>
            <div class="alert alert-warning alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <center><strong>Info!</strong> Under Development.</center>
			   
			<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
			Complete: 90%
			</div>
			</div>
            </div>
         </small>
      </div>
      <div class="col-md-12">
         </br> 
         <div name="GAMEOBJECTIVE">
            <div class="panel panel-primary">
               <div class="panel-heading" name="go" data-toggle="collapse" data-target="#go" aria-expanded="false" aria-controls="go"><font size="5"><center>Game Objective</center></font></div>
               <div class="collapse" id="go">
                  <li class="list-group-item">1. Prisoner's will attempt to control Prisoner's and force them to partake in several minigames, while also killing rebellious Prisoner's.</li>
                  <li class="list-group-item">2. CT's are regularly known as Guards.</li>
				  <li class="list-group-item">3. T's are regularly known as Prisoners.</li>
                  <li class="list-group-item">4. Prisoner's are regularly known as prisoners.</li>
                  <li class="list-group-item">5. Prisoner's will attempt to defeat CPrisoner's by any means necessary.</li>
               </div>
               <span class="label label-default">Last Update: 7/5/2015</span>
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
				  <li class="list-group-item">1. Do not disrespect/harass/threaten/flame any players.</li>
                  <li class="list-group-item">2. Do not spam chat, voice, or radio commands.</li>
                  <li class="list-group-item">3. Do not hack/exploit.</li>
                  <li class="list-group-item">4. Do not cheat/ghost/glitch.</li>
                  <li class="list-group-item">5. Do not apply other server rules to this server.</li>
                  <li class="list-group-item">6. Do not advertise other gaming websites/servers.	</li>
                  <li class="list-group-item">7. Do not evade punishment.</li>
                  <li class="list-group-item">8. Do not impersonate an admin or any player.</li>
                  <li class="list-group-item">9. Do not expect admin to take any action for any situation without proof.</li>
                  <li class="list-group-item">10. Do not request admins assistance in unnecessary situations; only rule breaking.</li>
                  <li class="list-group-item">11. Do not encourage/antagonize rule breaking.</li>
                  <li class="list-group-item">12. Do not mislead players with incorrect rules. </li>
                  <li class="list-group-item">13. Do not abuse the vote (ban/kick/mute) system.</li>
                  <li class="list-group-item">14. No racial slurs, including coded racism.</li>
                  <li class="list-group-item">15. No scamming, offenders will be permanently banned.</li>
                  <li class="list-group-item">16. Use English only in voice chat.</li>
				  <li class="list-group-item">17. Cell Doors must be opened by 18:30. If cells are unopened at 18:29, then a Freeday will be initiated immediately. If cells continue to be closed for extended periods of times or constantly, CPrisoner's may be (slayed/swap/ctban/kick/ban).</li>
				  <li class="list-group-item">18. No Detours and Delays, Freeze are implied to be in effect at all times. But the possession of guns or grenades is not implied.</li>
				  <li class="list-group-item">19. Freeday does not happen when cells are opened and closed again.</li>
				  <li class="list-group-item">20. Fish-in-the-barrel type games is not allowed.</li>
				  <li class="list-group-item">21. You can only become CPrisoner's by either joining on the first round or being placed on CT through the !guard queue. Breaking this rule will result in (swap/ctban/kick/ban)</li>
				  </div>
				  </ul>
			   
			   <ul class="list-group">
                  <li class="list-group-item" name="RULESGuard" data-toggle="collapse" data-target="#RULESGuard" aria-expanded="false" aria-controls="RULESGuard"><font color="blue" size="5"><center>Guard</center></font></li>  
				  <div class="collapse" id="RULESGuard">		
				  <li class="list-group-item">1. Guards may not talk over warden constantly. Breaking this rule will result in an extended (mute/silence/swap/ctban/kick/ban)</li>
				  <li class="list-group-item">2. Guards may repeat for the warden if it is correct. Misinformation will result in a (slay/swap/ctban/kick/ban)</li>
				  <li class="list-group-item">3. Guards may not stay in armory past 19:20 (40 seconds) (Armory Camping). Breaking this rule will result in a (slay/swap/ctban/kick/ban)</li>
				  <li class="list-group-item">4. Guards may not give Prisoner's weapons of any sort (Weapon Planting). Breaking this rule will result in a (slay/swap/ctban/kick/ban)</li>
				  <li class="list-group-item">5. The Guard who is Last CT must give Last Prisoner LR.</li>
				  <li class="list-group-item">6. Guards may only enter vents if they see a Prisoner go in the vent or by wardens permission.</li>
				  <li class="list-group-item">7. Guards may not wander or roam the map away from the Warden unless searching for rebellious Prisoner's.</li>
				  <li class="list-group-item">8. Guards and Vents: Breaking any of these rules will result in a (slay/swap/ctban/kick/ban)</li>
				  <li class="list-group-item">8a. Guards may not break vent doors unless there is no other way to leave the vent.</li>
				  <li class="list-group-item">8b. Guards may not camp in a vent or in the way of a vent unless they would be baiting.</li>
				  <li class="list-group-item">8c. Guards may kill any Prisoner in vents</li>
				  <li class="list-group-item">9. Guards may not come within close distance to any Prisoner's. The distance is approximately 5 player models away (Baiting) Prisoner's who attack violating CPrisoner's should be pardoned. Killing a T while baiting will result in a (slay/swap/ctban/kick/ban)</li>
				  <li class="list-group-item">10. Guards may only kill Prisoner's that are rebelling or not following the Warden's Orders.</li>
				  <li class="list-group-item">11. Breaking this rule will result in a (slay/swap/ctban/kick/ban). (Freekilling)</li>
				  <li class="list-group-item">12. Guards may only kill Prisoner's that are rebelling or not following the Warden's Orders.</li>
				  <li class="list-group-item">13. Breaking this rule will result in a (slay/swap/ctban/kick/ban). (Freekilling)</li>
				  <li class="list-group-item">15. Guards may not force Prisoner's to stay in a cell.</li>
				  <li class="list-group-item">16. Guards must be with the warden at all times unless pursuing other activities such as rebels/getting health or ammo. (Do not abuse, you can and will be ctbanned).</li>
				  <li class="list-group-item">17. Guards must give a 3 second warning to drop holstered weapons, and unholstered primaries are always KOS.</li>
				  <li class="list-group-item">18. Wardens may not constitute games or orders that break any server rules. Example: A Warden can not order a CT to bait or gun plant.</li>
				  <li class="list-group-item">19. Wardens may not give permission to the entirety of the map with the exception of Hide and Seek days.</li>
				  <li class="list-group-item">20. Wardens must explain games prior to being played unless rules are evident.</li>
				  <li class="list-group-item">21. Only Wardens may give pardons for rebellious Prisoner's</li>
				  <li class="list-group-item">22. Wardens may not use text to give commands.</li>
				  <li class="list-group-item">23. Wardens may not use consecutive "days".	Example: Warden A may not use a warday after Warden B used on the previous round.</li>
				  <li class="list-group-item">24. Wardens may not revoke warden-initiated Freedays or Wardays.</li>
				  <li class="list-group-item">25. Wardens may not use "jump restriction" commands in a row. Breaking this rule will result in a (slay/swap).</li>
				  <li class="list-group-item">26. If no Guards's are willing to Warden, then a freeday may be declared by an Admin accompanying an entire team swap.</li>
				  <li class="list-group-item">27. Wardens can be established within the CPrisoner's to give orders to the Prisoner's through the !w chat command.</li>
				  <li class="list-group-item">28. Guards may not wander or roam the map away from the Warden unless searching for rebellious Prisoner's.</li>
				  </div>
				</ul>
				  
				  <ul class="list-group">
				  <li class="list-group-item" name="RULESPrisoner" data-toggle="collapse" data-target="#RULESPrisoner" aria-expanded="false" aria-controls="RULESPrisoner"><font color="red" size="5"><center>Prisoners</center></font></li>  
				  <div class="collapse" id="RULESPrisoner">	
				  <li class="list-group-item">1. Once a warden has died, Prisoner's must freeze until orders are given or else you are rebelling.</li>
				  <li class="list-group-item">2. Prisoner's who attack Guards are automatically rebelling. Any guard may ask a T to drop a gun.</li>
				  <li class="list-group-item">3. Prisoner's in armory are automatically rebelling.</li>
				  <li class="list-group-item">4. Prisoner's may not find loopholes in orders. If orders are unclear, Prisoner's may ask for a reworded order or an explanation of the order. Example: Warden Tells Prisoner's to stack on his bullets. Prisoner's may not stack on the bullets that are in his gun.</li>
				  <li class="list-group-item">5. Prisoner's who constantly ask to delay or troll are subject to (slay/silence/kick/ban)</li>
				  <li class="list-group-item">6. Prisoner's may ask for one repeat per order. Warden is required to only one repeat per order at the Prisoner's demand. Additional repeats can be made, but are not required.</li>
				  <li class="list-group-item">7. The last Prisoners may type !lr for Last Request. If the final Prisoners was previously rebelling, any Last Request must be acknowledged.</li>
				  <li class="list-group-item">8. Last Requests may not be used to kill Guard's unfairly. Breaking this rule will result in a (slay/kick/ban)</li>
				  <li class="list-group-item">9. Rules must be established in each LR. No party may break these rules or result in appropriate action from an admin.</li>
				  <li class="list-group-item">10. Prisoners's whom rebel between LRs may be killed as if they were rebelling regularly.</li>
				  <li class="list-group-item">11. The Final Prisoner may choose the Rebel option, where he may be killed as if he was a rebelling T.</li>
				  </div>
				  </ul>

				  
				  <ul class="list-group">
				  <li class="list-group-item" name="RULESAdmin" data-toggle="collapse" data-target="#RULESAdmin" aria-expanded="false" aria-controls="RULESAdmin"><font color="orange" size="5"><center>Admins/Mods</center></font></li>  
				  <div class="collapse" id="RULESAdmin">	
				  <li class="list-group-item">1. Do not punish a party without proper reasoning.</li>
				  <li class="list-group-item">2. Server rules require warnings.</li>
				  <li class="list-group-item">3. Admins may mute the entire server to quell mass mic spamming.</li>
				  <li class="list-group-item">4. Admins are not to remove existing punishments on other players without proper reasoning.</li>
				  <li class="list-group-item">5. Admins will not have in-game squabbling. Any issues can be resolved in chat or the forums.</li>
				  <li class="list-group-item">6. Admins cannot punish (slay, mute, etc) another admin for ANY reason and will result in the removal of your admin</li>
				  <li class="list-group-item">7. Do not force map changes unless the current map is bugged or broken.</li>
				  <li class="list-group-item">8. Do not use admin abilities to adversely affect players without consensus from that player or the server, with the exception of punishments.</li>
				  </div>
				  </ul>
				  
				  <ul class="list-group">
				  <li class="list-group-item" name="RULESDays" data-toggle="collapse" data-target="#RULESDays" aria-expanded="false" aria-controls="RULESDays"><font color="purple" size="5"><center>Predefined Days</center></font></li>  
				  <div class="collapse" id="RULESDays">	
				  <li class="list-group-item">1. Panda Freeday: Panda's crouch at all times may not left click, may not teleport, can not climb or jump unless getting to a CT. Pandas may stand up and AFK freeze if they are typing. Pandas may not carry guns, holstered or otherwise.</li>
				  <li class="list-group-item">2. Zombie Freeday: Zombies walk at all times, may Section 7: Pre-defined Rules.</li>
				  <li class="list-group-item">3. Gun toss: No crouching, no bhopping, no cheating, no admin power from anyone, CPrisoner's first, no interference from other players.</li>
				  <li class="list-group-item">4. Shot for Shot: Stay on the wall at all times, no healing, no hiding, no interference from other players.</li>
				  <li class="list-group-item">5. Lava Freeday: Prisoner's may only be on main cell floor if they are on a spray, and may left or right click. Any other areas of the map outside of the main cell floor such as Soccer, Surf, Climb, etc. does not count as main cell floor, and Prisoner's may run around freely in those areas.</li>
				  <li class="list-group-item">6. Warday: CPrisoner's may kill any Prisoner's inside warzone. CPrisoner's may kill Prisoner's that are outside if they are red or have a gun of any type. CPrisoner's may NOT kill Prisoner's while outside of the warzone.</li>
				  </div>
				  <ul>
               </div>
               <span class="label label-default">Last Update: 7/5/2015</span>
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
					 
						$sqlowner = "SELECT * FROM `sb_admins` WHERE srv_group LIKE ''";
                        $sqladmin = "SELECT * FROM `sb_admins` WHERE srv_group LIKE 'Admin'";
                        $sqldev = "SELECT * FROM `sb_admins` WHERE srv_group LIKE 'Dev'";
                        $sqlmod = "SELECT * FROM `sb_admins` WHERE srv_group LIKE 'Mod'";
						
                        if (!$conn->query($sqladmin) || !$conn->query($sqlmod) || !$conn->query($sqldev)) {
                            echo 'Error: ', $mysqli->error;
                        }
						
						$resultowner = $conn->query($sqlowner);
                        $resultadmin = $conn->query($sqladmin);
                        $resultdev = $conn->query($sqldev);
						$resultmod = $conn->query($sqlmod);     
						
                        if ($resultowner->num_rows > 0) {
                                              // output data of each row
											 
                                            while($row = $resultowner->fetch_assoc()) 
											{
											echo "<tr><td>" . "Owner" . "</td><td>" . $row['user'] . "</td><td>" . $row['authid'] . "</td><td>" . '<a href="http://steamcommunity.com/profiles/' . IDto64($row['authid']) . '">Link</a>' . "</td><td>" . ConvertToDate($row['lastvisit']) . "</td></tr>";
											}
                                          } else {
                                              echo "0 results";
                                          }
                      		
							
                        if ($resultdev->num_rows > 0) {
                                              // output data of each row
											 
                                            while($row = $resultdev->fetch_assoc()) 
											{
											echo "<tr><td>" . $row['srv_group'] . "</td><td>" . $row['user'] . "</td><td>" . $row['authid'] . "</td><td>" . '<a href="http://steamcommunity.com/profiles/' . IDto64($row['authid']) . '">Link</a>' . "</td><td>" . ConvertToDate($row['lastvisit']) . "</td></tr>";
											}
                                          } else {
                                              echo "0 results";
                                          }
                      		
                         if ($resultadmin->num_rows > 0) {
                                              // output data of each row
											while($row = $resultadmin->fetch_assoc()) 
											{
											echo "<tr><td>" . $row['srv_group'] . "</td><td>" . $row['user'] . "</td><td>" . $row['authid'] . "</td><td>" . '<a href="http://steamcommunity.com/profiles/' . IDto64($row['authid']) . '">Link</a>' . "</td><td>" . ConvertToDate($row['lastvisit']) . "</td></tr>";
                                            }
						 }
                                          else {
                                              echo "0 results";
                                          }
                        
                        if ($resultmod->num_rows > 0) {
                                              // output data of each row
											while($row = $resultmod->fetch_assoc()) 
											{
											echo "<tr><td>" . $row['srv_group'] . "</td><td>" . $row['user'] . "</td><td>" . $row['authid'] . "</td><td>" . '<a href="http://steamcommunity.com/profiles/' . IDto64($row['authid']) . '">Link</a>' . "</td><td>" . ConvertToDate($row['lastvisit']) . "</td></tr>";
                                            }
						}
											else {
                                              echo "0 results";
                                          }
                                      ?>
                  </table>
               </div>
               <span class="label label-default">Last Update: 7/5/2015</span>
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
                    </tr>
                  <?php
                     $sqlvip = "SELECT * FROM `sb_admins` WHERE srv_group LIKE 'Vip'";
                                       if (!$conn->query($sqlvip)) {
                                           echo 'Error: ', $mysqli->error;
                                       }
                                       $resultvip = $conn->query($sqlvip);
                     
                     if ($resultvip->num_rows > 0) {
                                           // output data of each row
                                           while($row = $resultvip->fetch_assoc()) {
                     		        	echo "<tr><td>" . $row['srv_group'] . "</td><td>" . $row['user'] . "</td><td>" . $row['authid'] . "</td></tr>";
                                           }
                                       } else {
                                           echo "0 results";
                                       }
                     ?>
				  </table>
               </div>
               <span class="label label-default">Last Update: 7/5/2015</span>
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
               <span class="label label-default">Last Update: 7/5/2015</span>
            </div>
         </div>
         </br>
      </div>
      <footer style="text-align: center; width: 100%; margin-top: 15px;">
         <a id="inlinebutton" class="btn btn-primary btn-lg" href="steam://connect/play.toxicgaming.org" role="button">Jailbreak</a>
         <a id="inlinebutton" class="btn btn-primary btn-lg" href="steam://connect/167.114.205.132:27015" role="button">Idle</a>
         <a id="inlinebutton" class="btn btn-primary btn-lg" href="ts3server://ts.toxicgaming.org" role="button">TeamSpeak</a>
		 <br />
		 MOTD webpage made by <font color="red">Petersfun</font>
      </footer>
      <!--Placed at the bottom for faster loading speeds.-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="utilities/bootstrap-3.3.4/js/bootstrap.min.js"></script>
      <script src="utilities/tipsy/javascripts/jquery.tipsy.js"></script>
      <script>
         $(".tip").tipsy({ gravity: 'n' });
         
         
      </script>
   </body>
</html>