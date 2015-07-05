<!DOCTYPE html>
<html lang="en">
<head>
    <title>Toxic Gaming MOTD</title>
    <meta name="description" content="TGN Jailbreak MOTD" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="utilities/bootstrap-3.3.4/css/bootstrap.min.css" type='text/css' />
    <link rel="stylesheet" href="utilities/tipsy/stylesheets/tipsy.css" type='text/css' />
    <link rel="stylesheet" href="css/style.css" type='text/css' />
</head>

<body>
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
					<li><a href="#staff" data-toggle="collapse" data-target="#staff" aria-expanded="false" aria-controls="Staff">Staff</a></li>
					<li><a href="#vipinfo" data-toggle="collapse" data-target="#vipinfo" aria-expanded="false" aria-controls="vipinfo">VIP Information</a></li>
					<li><a href="#gamerules" data-toggle="collapse" data-target="#gamerules" aria-expanded="false" aria-controls="gamerules">Game Rules</a></li>
					<li><a href="#generalrules" data-toggle="collapse" data-target="#generalrules" aria-expanded="false" aria-controls="generalrules">General</a></li>
					<li><a href="#predefined" data-toggle="collapse" data-target="#predefined" aria-expanded="false" aria-controls="predefined">Pre-Defined</a></li>
					<li><a href="#commands" data-toggle="collapse" data-target="#commands" aria-expanded="false" aria-controls="commands">Commands</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Jailbreak Rules</h2>
                <small>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Info!</strong> Under Development.
                    </div>
                </small>
            </div>


            <div class="col-md-12">
			</br>
			<a name="staff" data-toggle="collapse" data-target="#staff" aria-expanded="false" aria-controls="staff">
                    <font color="blue" size="5">Staff</font>
                </a>

                <div class="collapse" id="staff">
                    <?php include "./admins.php" ?>
                </div>
				
			
			
				</br>
                <a name="vipinfo" data-toggle="collapse" data-target="#vipinfo" aria-expanded="false" aria-controls="vipinfo">
                    <font color="orange" size="5">VIP Information</font>
                </a>

                <div class="collapse" id="vipinfo">
				<div class="panel panel-primary">
					<div class="panel-heading">It costs $5 to become VIP. To donate, use either:</div>
                    <ul class="list-group">
					<li class="list-group-item">!donatepaypal</li>
                        <li class="list-group-item">!donateskins</li></ul>
					</div>
						<div class="panel panel-primary">
							<div class="panel-heading">What you get in game</div>
					<li class="list-group-item"><div>!ghost</div> - Allows you to walk around while dead.</li>
					<li class="list-group-item"><div>!skins</div> - Allows you to walk around while dead.</li>
					<li class="list-group-item">VIP Players get put first into the guard queue.</li>
					<li class="list-group-item">You gain Store Credits 3 times faster than normal.</li>
					<li class="list-group-item">Ad-free gameplay! Toxic Ads will no longer show up to you.</li>
					</div>
                        <span class="label label-default">
                            Last Update: 7/4/2015
                        </span>
                    </ul>
                </div>
			
			
				</br>
                <a name="go" data-toggle="collapse" data-target="#go" aria-expanded="false" aria-controls="go">
                    <font color="green" size="5">Game Objective</font>
                </a>

                <div class="collapse" id="go">
                    <ul class="list-group">
                        <li class="list-group-item">1. CT's will attempt to control T's and force them to partake in several minigames, while also killing rebellious T's. </li>
						<li class="list-group-item">2. CT's are regularly known as Guards.</li>
						<li class="list-group-item">3. T's are regularly known as prisoners.</li>
						<li class="list-group-item">4. T's will attempt to defeat CT's by any means necessary.</li>
                        <span class="label label-default">
                            Last Update: 7/4/2015
                        </span>
                    </ul>
                </div>

				</br>
                <a name="gamerules" data-toggle="collapse" data-target="#gamerules" aria-expanded="false" aria-controls="gamerules">
                    <font color="red" size="5">Game Rules</font>
                </a>

                <div class="collapse" id="gamerules">
                    <ul class="list-group">
                <li class="list-group-item">1. T's can only become CT's by either joining on the first round or being placed on CT through the !guard queue.
				 Breaking this rule will result in (swap/ctban/kick/ban)</li>
				<li class="list-group-item">2. Wardens can be established within the CT's to give orders to the T's through the !w chat command.</li>
				<ul>
				<li class="list-group-item">2a. If no CT's are willing to Warden, then a freeday may be declared by an admin accompanying an entire team swap.</li>
				<li class="list-group-item">2b. Wardens may not play fish-in-a-barrel type games.</li>
				<li class="list-group-item">2c. Wardens may not use "jump restriction" commands in a row. Breaking this rule will result in a (slay/swap).</li>
				<li class="list-group-item">2d. Wardens may not revoke warden-initiated Freedays or Wardays.</li>
				<li class="list-group-item">2e. Wardens may not use consecutive "days".	Example: Warden A may not use a warday after Warden B used on the previous round.</li>
				<li class="list-group-item">2f. Wardens may not use text to give commands.</li>
				<li class="list-group-item">2g. Only Wardens may give pardons for rebellious T's </li>
				<li class="list-group-item">2h. Wardens must explain games prior to being played unless rules are evident.</li>
				<li class="list-group-item">2i. Wardens may not give permission to the entirety of the map with the exception of Hide and Seek days.</li>
				<li class="list-group-item">2j. Wardens may not constitute games or orders that break any server rules. Example: A Warden can not order a CT to bait or gun plant.</li>
				<li class="list-group-item">2k. CTs must give a 3 second warning to drop holstered weapons, and unholstered primaries are always KOS.</li>
				<li class="list-group-item">2l. Once a warden has died, T’s must freeze until orders are given or else you are rebelling.</li>
				<li class="list-group-item">2m. CTs must be with the warden at all times unless pursuing other activities such as rebels/getting health or ammo. (Do not abuse, you can and will be ctbanned).</li>
				<li class="list-group-item">2n. Freeday does not happen when cells are opened and closed again. Furthermore, T's may not be forced to stay in a cell.</li></br>
				</ul>
				
				<li class="list-group-item">3. Guards may only kill T's that are rebelling or not following the Warden's Orders. Breaking this rule will result in a (slay/swap/ctban/kick/ban). (Freekilling)</li>
				<ul>
				<li class="list-group-item">3a. T's who attack Guards are automatically rebelling. Any guard may ask a T to drop a gun.</li>
				<li class="list-group-item">3b. T's in armory are automatically rebelling.</li>
				<li class="list-group-item">3c. Guards may not come within close distance to any T's. The distance is approximately 5 player models away (Baiting) T's who attack violating CT's should be pardoned. Killing a T while baiting will result in a (slay/swap/ctban/kick/ban)</li></br>
				</ul>
				<li class="list-group-item">4.  Guards and Vents: Breaking any of these rules will result in a (slay/swap/ctban/kick/ban)</li>
				<ul>
				<li class="list-group-item">4a. Guards may not break vent doors unless there is no other way to leave the vent. </li>
				<li class="list-group-item">4b. Guards may not camp in a vent or in the way of a vent unless they would be baiting. </li>
				<li class="list-group-item">4c. Guards may kill any T in vents </li>
				<li class="list-group-item">4d. Guards may only enter vents if they see a T go in the vent or by wardens permission. </li></br>
				</ul>
				<li class="list-group-item">5. Guards may not stay in armory past 19:20 (40 seconds) (Armory Camping). Breaking this rule will result in a (slay/swap/ctban/kick/ban)</li>
				<li class="list-group-item">6. Guards may not give T's weapons of any sort (Weapon Planting). Breaking this rule will result in a (slay/swap/ctban/kick/ban)</li>
				<li class="list-group-item">7. Players may not talk over warden constantly. Breaking this rule will result in an extended (mute/silence/swap/ctban/kick/ban)</li>
				<li class="list-group-item">8. Guards may not wander or roam the map away from the Warden unless searching for rebellious T's.</li></br>

				<li class="list-group-item">9. Whoever is last CT must say that they are Last CT and must commit to being last CT. They may not give orders. The last T may LR.</li>
				<li class="list-group-item">10. Cell Doors must be opened by 18:30. If cells are unopened at 18:29, then a Freeday will be initiated immediately. If cells continue to be closed for extended periods of times or constantly, CT's may be (slayed/swap/ctban/kick/ban).</li>
				<li class="list-group-item">11. Freeze is implied at the end of a command unless ordered otherwise</li></br>

				<li class="list-group-item">12. T's may not find loopholes in orders. If orders are unclear, T's may ask for a reworded order or an explanation of the order. Example: Warden Tells T's to stack on his bullets. T's may not stack on the bullets that are in his gun. </li>
				<ul>
				<li class="list-group-item">12a. T's who constantly ask to delay or troll are subject to (slay/silence/kick/ban)</li></br>
				</ul>
				<li class="list-group-item">13. T's may ask for one repeat per order. Warden is required to only one repeat per order at the T's demand. Additional repeats can be made, but are not required.</li>
				<ul>
				<li class="list-group-item">13a. Other Ct's may repeat for the warden if it is correct. Misinformation will result in a (slay/swap/ctban/kick/ban)</li></br>
				</ul>
				<li class="list-group-item">14. The last T may type !lr for Last Request. If the final T was previously rebelling, any Last Request must be acknowledged.</li>
				<ul>
				<li class="list-group-item">14a. Last Requests may not be used to kill CT's unfairly. Breaking this rule will result in a (slay/kick/ban)</li>
				<li class="list-group-item">14b. Rules must be established in each LR. No party may break these rules or result in appropriate action from an admin.</li>
				<li class="list-group-item">14c. T's whom rebel between LRs may be killed as if they were rebelling regularly.</li>
				<li class="list-group-item">14d. The Final T may choose the Rebel option, where he may be killed as if he was a rebelling T.</li></br>
				</ul>
				<li class="list-group-item">15. No Detours and Delays are implied to be in effect at all times. But the possession of guns or grenades is not implied.</li>
				<li class="list-group-item"><strong> *Definition* Baiting: When a CT is within knifing distance from where a T is supposed to be or in the path of where the T is supposed to be going.</strong></li></br>
				<li class="list-group-item">16. T's are to be forgiven when they are baited.</li>
				<li class="list-group-item">17. If the round starts as ratio freeday, it is to stay as ratio freeday.</li>
				<li class="list-group-item">18. CT's may not give false orders.</li>
				<li class="list-group-item">19. T's may not be renamed more than twice. T's may always be renamed back to T's/prisoners</li>
                        <span class="label label-default">
                            Last Update: 7/4/2015
                        </span>
                    </ul>
                </div>

				</br>
                <a name="generalrules" data-toggle="collapse" data-target="#generalrules" aria-expanded="false" aria-controls="generalrules">
                    <font color="green" size="5">General Rules</font>
                </a>
				<div class="collapse" id="generalrules">

                <ul class="list-group">
					
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
					
                        <span class="label label-default">
                            Last Update: 7/4/2015
                        </span>
                    </ul>
                </div>
				
				
				</br>
                <a name="predefined" data-toggle="collapse" data-target="#predefined" aria-expanded="false" aria-controls="predefined">
                    <font color="orange" size="5">Pre-Defined</font>
                </a>

                <div class="collapse" id="predefined">
				<li class="list-group-item">Panda Freeday: Panda's crouch at all times may not left click, may not teleport, can not climb or jump unless getting to a CT. Pandas may stand up and AFK freeze if they are typing. Pandas may not carry guns, holstered or otherwise.</li>
				<li class="list-group-item">Zombie Freeday: Zombies walk at all times, may Section 7: Pre-defined Rules.</li>
				<li class="list-group-item">Gun toss: No crouching, no bhopping, no cheating, no admin power from anyone, CT's first, no interference from other players.</li>
				<li class="list-group-item">Shot for Shot: Stay on the wall at all times, no healing, no hiding, no interference from other players.</li>
				<li class="list-group-item">Lava Freeday: T's may only be on main cell floor if they are on a spray, and may left or right click. Any other areas of the map outside of the main cell floor such as Soccer, Surf, Climb, etc. does not count as main cell floor, and T's may run around freely in those areas.</li>
				<li class="list-group-item">Warday: CT's may kill any T's inside warzone. CT's may kill T's that are outside if they are red or have a gun of any type. CT's may NOT kill T's while outside of the warzone.</li>
                        <span class="label label-default">
                            Last Update: 7/4/2015
                        </span>
                    </ul>
				</div>
				
				
				</br>
                <a name="commands" data-toggle="collapse" data-target="#commands" aria-expanded="false" aria-controls="commands">
                    <font color="blue" size="5">Commands</font>
                </a>

                <div class="collapse" id="commands">
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
                        <span class="label label-default">
                            Last Update: 7/4/2015
                        </span>
                    </ul>
				</div>

        </div>

        <footer style="text-align: center; width: 100%; margin-top: 15px;">
		<a id="inlinebutton" class="btn btn-primary btn-lg" href="steam://connect/play.toxicgaming.org" role="button">Jailbreak</a><a id="inlinebutton" class="btn btn-primary btn-lg" href="steam://connect/167.114.205.132:27015" role="button">Idle</a><a id="inlinebutton" class="btn btn-primary btn-lg" href="ts3server://ts.toxicgaming.org" role="button">TeamSpeak</a>
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
