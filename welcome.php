<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$log_s_1 = $_COOKIE["log_s_1"];
$log_c_1 = $_COOKIE["log_c_1"];
$log_s_2 = $_COOKIE["log_s_2"];
$log_c_2 = $_COOKIE["log_c_2"];
$log_s_3 = $_COOKIE["log_s_3"];
$log_c_3 = $_COOKIE["log_c_3"];
$log_s_4 = $_COOKIE["log_s_4"];
$log_c_4 = $_COOKIE["log_c_4"];


    $chatlogserver = array($log_s_1, $log_s_2, $log_s_3, $log_s_4);
    $chatlogclient = array($log_c_1, $log_c_2, $log_c_3, $log_c_4);

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/game.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
    </style>
</head>
<body>
    <div id="header">
        <p>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome back!      <a href="reset-password.php" class="btn btn-dark">Reset Your Password</a>     <a href="logout.php" class="btn btn-dark">Sign Out of Your Account</a></p> 
    </div>
    <div id="body">
    <form name="textboxf" action="">
        <div id="textbox">
            <?php 
                if($log_c_4 = "") {
                    for($x = 0; $x < 4; $x++) {
                        if ($chatlogclient[$x] != "NAN") {
                            echo $chatlogclient[$x]."<br>";
                        }
                        if ($chatlogserver[$x] != "NAN") {
                            echo $chatlogserver[$x]."<br>";
                        }
                    }
                } else {
                    echo "Welcome to Cannibal Island!";
                }
            ?>
        </div>
    </form>  
        <form action="">
            <input type="text" name="input" id="commandbox"/>
            <a onClick="postToPHP();" class="btn btn-dark">Send</a>
        </form>
        <a onClick="resetCookies();" class="btn btn-dark">ResetCookies</a>
        <?php
            echo "<br>";
            echo "log_s_1: ".$log_s_1."|| cookie: ".$_COOKIE["log_s_1"]."<br>";
            echo "log_c_1: ".$log_c_1."|| cookie: ".$_COOKIE["log_c_1"]."<br>";
            echo "log_s_2: ".$log_s_2."|| cookie: ".$_COOKIE["log_s_2"]."<br>";
            echo "log_c_2: ".$log_c_2."|| cookie: ".$_COOKIE["log_c_2"]."<br>";
            echo "log_s_3: ".$log_s_3."|| cookie: ".$_COOKIE["log_s_3"]."<br>";
            echo "log_c_3: ".$log_c_3."|| cookie: ".$_COOKIE["log_c_3"]."<br>";
            echo "log_s_4: ".$log_s_4."|| cookie: ".$_COOKIE["log_s_4"]."<br>";
            echo "log_c_4: ".$log_c_4."|| cookie: ".$_COOKIE["log_c_4"]."<br>";
        ?>
    </div>
    <script src="js/game.js"></script>
</body>
</html>