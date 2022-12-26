<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoryTell</title>
    <link rel="stylesheet" href="css/style.css" />
	<style>
		form {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			width: auto;
			margin: 0 auto;
			padding: 9px 50px 9px 50px;
			border: 2px solid #7E7474;
		}
		label {
			margin: 5px;
			display: block;
		}
		input[type="text"], input[type="email"], textarea {
			width: 100%;
			padding: 15px;
			margin: 5px;
			border: 2px solid #FFDD93;
			background-color: #C4B6B6;
			border-radius: 5px;
			box-sizing: border-box;
			resize: vertical;
		}
		input[type="submit"] {
			background-color: #C4B6B6;
			color: white;
			padding: 15px;
			border: 2px solid #7E7474;
			border-radius: 5px;
			cursor: pointer;
			float: right;
		}
		input[type="submit"]:hover {
			background-color: black;
			border: 2px solid #7E7474;
		}
		.form-container {
			border-radius: 5px;
			background-color: #7E7474;
		}
	</style>
</head>
<body>
<body onload="startTime()">
    <div class="header">
        <p style="text-align: center" ><?php echo date("d.m.y")?></p>
        <h1>StoryTell</h1>
        <script src="js/main.js"></script>
        <div id="txt"></div>
    </div>
    <div class="topnav">
        <a href="stories.php">Stories</a>
        <a href="authors.php">Authors</a>
        <a href="contests.php">Contests</a>
        <a href="about.php" style="float:right">About Us</a>
    </div>
    
    <div class="row">
        <div class="leftcolumn">
        <h2 align="center">Chat window</h2>
        	<div class="form-container">
		<form action="chat.php" method="post">
			<label for="name"><b>Name:</b></label>
			<input type="text" id="name" name="name" required>
			<br>
			<label for="email"><b>Email:</b></label>
			<input type="email" id="email" name="email" required>
			<br>
			<label for="message"><b>Message:</b></label>
			<textarea id="message" name="message" rows="5" required></textarea>
			<br>
			<input type="submit" value="Submit">
		</form>	
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
            <h2 align="center">Chat</h2>
            <div class="card">
             <h3>New messages</h3>
            <?php if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
            	$name = $_POST['name'];
            	$email = $_POST['email'];
            	$message = $_POST['message'];
            	echo "<b>Name:</b> <i>$name</i>"."<br><br>"."<b>Message:</b> <i>$message</i>";	
            } ?>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <h2>StoryTell</h2>
    </div>
</body>
</html>