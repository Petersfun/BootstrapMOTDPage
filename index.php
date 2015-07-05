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
					<li class="active"><a href="#staff" data-toggle="collapse" data-target="#staff" aria-expanded="false" aria-controls="General">Staff</a></li>
                    <li class="active"><a href="#general" data-toggle="collapse" data-target="#General" aria-expanded="false" aria-controls="General">General</a></li>
					<li class="active"><a href="#tt" data-toggle="collapse" data-target="#t" aria-expanded="false" aria-controls="t">T Rules</a></li>
					<li class="active"><a href="#ct" data-toggle="collapse" data-target="#ct" aria-expanded="false" aria-controls="General">CT Rules</a></li>
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
			<a data-toggle="collapse" data-target="#staff" aria-expanded="false" aria-controls="staff">
                    <font color="green" size="5">Staff</font>
                </a>

                <div class="collapse" id="staff">
                    <?php include "./php/admins.php" ?>
                </div>
			
				</br>
                <a data-toggle="collapse" data-target="#General" aria-expanded="false" aria-controls="General">
                    <font color="green" size="5">General</font>
                </a>

                <div class="collapse" id="General">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Rule #1: Don't be gay <a class="tip" title="Testing"></a>
                            <span class="badge"><img src="" /></span>
                        </li>
                        <li class="list-group-item">
                            Rule #2: Fuck if I know.
                            <span class="badge"><img src="" /></span>
                        </li>
                        <span class="label label-default">
                            Last Update: 7/4/2015
                        </span>
                    </ul>
                </div>

				</br>
                <a data-toggle="collapse" data-target="#t" aria-expanded="false" aria-controls="t">
                    <font color="red" size="5">T Rules</font>
                </a>

                <div class="collapse" id="t">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Rule #1: Don't be gay
                            <span class="badge"><img src="" /></span>
                        </li>
                        <li class="list-group-item">
                            Rule #2: Fuck if i know.
                            <span class="badge"><img src="" /></span>
                        </li>
                        <span class="label label-default">
                            Last Update: 7/4/2015
                        </span>
                    </ul>
                </div>

				</br>
				<a name="ct">
                <a data-toggle="collapse" data-target="#ct" aria-expanded="false" aria-controls="ct">
                    <font color="blue" size="5">CT Rules</font>
                </a>
				<div class="collapse" id="ct">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Rule #1: Don't be gay
                            <span class="badge"><img src="" /></span>
                        </li>
                        <li class="list-group-item">
                            Rule #2: Fuck if i know.
                            <span class="badge"><img src="" /></span>
                        </li>
                        <span class="label label-default">
                            Last Update: 7/4/2015
                        </span>
                    </ul>
                </div>
            </div>

        </div>

        <footer style="text-align: right; width: 100%; margin-top: 15px;"></footer>

        <!--Placed at the bottom for faster loading speeds.-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="utilities/bootstrap-3.3.4/js/bootstrap.min.js"></script>
        <script src="utilities/tipsy/javascripts/jquery.tipsy.js"></script>
        <script>
            $(".tip").tipsy({ gravity: 'n' });


        </script>

</body>
</html>
