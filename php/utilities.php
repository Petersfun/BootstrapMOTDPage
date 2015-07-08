			   <?php
			   //PHP function by voogru, https://forums.alliedmods.net/showthread.php?t=60899
			   function IDto64($steamId) {
						$iServer = "0";
						$iAuthID = "0";
						 
						$szTmp = strtok($steamId, ":");
						 
						while(($szTmp = strtok(":")) !== false)
						{
							$szTmp2 = strtok(":");
							if($szTmp2 !== false)
							{
								$iServer = $szTmp;
								$iAuthID = $szTmp2;
							}
						}
						if($iAuthID == "0")
							return "0";
					 
						$steamId64 = bcmul($iAuthID, "2");
						$steamId64 = bcadd($steamId64, bcadd("76561197960265728", $iServer));
							if (strpos($steamId64, ".")) {
								$steamId64=strstr($steamId64,'.', true);
							}     
						return $steamId64;
					}
					
					function ConvertToDate($last_played)
					{
						if ($last_played == '')
						{
							$date = 'Not Available';
						}
						else
						{
							$date = new DateTime('@'. $last_played);
							$date = $date->format('F j, Y, g:i a');
							
							return $date;
							//return $last_played;
						}
						
						if($last_played == date_default_timezone_get())
						{
							return echo "<font color = 'green'>Online</font>";
						}
						}
			   ?>