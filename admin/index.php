<?php	
	
    session_start();  // Starting Session
	  
	include("db/config.php");
   
	if(isset($_POST["btn_login"]))			// Jo btnlogin nahi hoy to login page khuli jase.
	{
		
        if(empty($_POST['username']) || empty($_POST['password']))
		{
			echo "Username or Password is invalid";	
		}
		else
		{
		$username = $_POST["username"];
		$password = $_POST["password"];


        $sql = mysql_query("SELECT * from ad_login WHERE username = '$username' AND password = '$password'");		
        $row = mysql_num_rows($sql);

		if($row==1)
		{

			$_SESSION['login_user'] = $username;   // initializing session
			header("location:Home.php");
		}
		else	
		{	
			  echo "Wrong username and password";				// Uname & password khota hase to else ma jase.
			 //$error = "Username or Password is invalid";
		}
		mysql_close($conn); // Clossing Connection
		}
		
	}
?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.startbootstrap.com/flex-admin-v1.2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jan 2016 18:23:31 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>login</title>

    <!-- GLOBAL STYLES -->
    <link href="css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->

    <!-- THEME STYLES -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">

    <!-- THEME DEMO STYLES -->
    <link href="css/demo.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-banner text-center">
                    <h1><i class="fa fa-gears"></i> login</h1>
                </div>
                <div class="portlet portlet-green">
                    <div class="portlet-heading login-heading">
                        <div class="portlet-title">
                            <h4><strong>login</strong>
                            </h4>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <form accept-charset="UTF-8" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <br>
                                <input type="submit" name="btn_login" value="login"  class="btn btn-lg btn-green btn-block">
                                
                            </fieldset>
                            <!-- <br>
                            <p class="small">
                                <a href="index.php">Forgot your password?</a>
                        
                            </p> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- GLOBAL SCRIPTS -->
    <script src="js/jjquery.min.js"></script>
    <script src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- HISRC Retina Images -->
    <script src="js/plugins/hisrc/hisrc.js"></script>

  

   
    <script src="js/flex.js"></script>

</body>



</html>
