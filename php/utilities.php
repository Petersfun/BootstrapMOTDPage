<?php
				include_once "/php/config.php";
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
							if ($last_played == NULL)
							{
								$date = 'Not Available';
							}
							else
							{
								$date = new DateTime('@'. $last_played);
								$date = $date->format('g:i a, F j, Y');
								$date = "<font color='red'><b> Last Online: ". $date . "</b></font>";

							if($date == strtotime(date('g:i a, F j, Y')))
							{
								$date = "<font color='green'><b>Online</b></font>";
							}
							}

							return $date;
						}

					function DisplayRules($ruleType = "")
					{
						$json = file_get_contents('Rules.json');
						$data = json_decode($json, true);

						if($ruleType != "")
						{
							for($i=0; $i<count($data[$ruleType]); $i++)
							{
	    					echo "<li class='list-group-item'>". ($i+1) .". " . $data[$ruleType][$i]["Rule"] . "</li>";
							}
						}
						else
						{
							echo "Please Specify a Rule Type.";
						}

					}

					function DisplayGroup($svrgroup = "")
					{
							global $conn;
							$svrgroup = mysqli_real_escape_string($conn, $svrgroup);
							$sqlGroup = "SELECT * FROM `sb_admins` WHERE srv_group LIKE '{$svrgroup}%'";
							$resultGroup = $conn->query($sqlGroup) or die(mysql_error());

							if (!$conn->query($sqlGroup)) {
									echo 'Error: ', $mysqli->error;
							}

							if ($resultGroup->num_rows > 0) {
	            // output data of each row
	            while($row = $resultGroup->fetch_assoc())
							{
										echo "<tr><td>" . $svrgroup . "</td><td>" . $row['user'] . "</td><td>" . $row['authid'] . "</td><td>" . '<a href="http://steamcommunity.com/profiles/' . IDto64($row['authid']) . '">Link</a>' . "</td><td>" . ConvertToDate($row['lastvisit']) . "</td></tr>";
							}
						}
						else
						{
								echo "0 results, Make sure you have correct Rank.";
						}
				}
?>
