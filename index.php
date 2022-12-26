<? 
session_start();
$_SESSION = array();
session_destroy(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoryTell</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body onload="startTime()">
    <div class="header">
        <h1>StoryTell</h1>
        <script src="js/main.js"></script>
        <div id="txt"></div>
    </div>
    <p style="text-align: center" ><?php echo date("d.m.y")?></p>
    <div class="topnav">
        <a href="stories.php">Stories</a>
        <a href="authors.php">Authors</a>
        <a href="contests.php">Contests</a>
        <a href="about.php" style="float:right">About Us</a>
    </div>
    
    <div class="row">
        <div class="leftcolumn">
            <h2>Story of the week</h2>
            <div class="card">
                <h3>True Camping</h3>
                <p>From wild animal attacks to fire disasters</p>
            </div>
            <div class="card">
                <h3>A Bus Stop</h3>
                <p> A creepy story at the bus stop told in first person by a teenager</p>
            </div>
        </div>
        <div class="rightcolumn">
            <h2 align="center">Useful info</h2>
            <div class="card">
                <h3>New contests</h3>
                <p>New Voices Award</p>
            </div>
            <div class="card">
                <h3>Recomended authors</h3>
                <p>Ari Berri</p>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <h2>StoryTell</h2>
    </div>

</body>
</html>