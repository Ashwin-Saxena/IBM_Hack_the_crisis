<?php
$db = new mysqli('localhost','root','','project');
?>
<html>
    <head>
        <title>###</title>
        <link rel="stylesheet" href="Style.css">
    </head>

    <body>

        <div class="container">
		
	<?php
	if(isset($_POST['submit']))
		{
		    $u=$_POST["username"];
			$y=$_POST["pass"];
			$sql='SELECT * FROM `admin`';
			$query=mysqli_query($db,$sql);
			while($s=mysqli_fetch_row($query))
			{
				
			if($s[1]==$y && $s[0]==$u)
			{
				header('Location:main.php');
			}
			else
			{
				echo"Invalid Username or Password";
			}
			}
		}	
		?>
		<header>LOGIN PLEASE</header>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
                
                    <div class="input-field">
                        <INPUT TYPE="TEXT" NAME="username" required>
                        <label>USERNAME</label><BR>
                    </div>
                    <div class="input-field">
                        <INPUT TYPE="password" NAME="pass" required>
                        <label>PASSWORD</label><BR>
                    </div>
                    <div class="button">
                        <div class="inner"></div>
                        <button type="submit" name="submit">Login</button>
						
                    </div>
					
					</form>
					<a href="index.php"><button>Back</button></a>
					<br>
                <div style="float: right;">
                    <a href="forgot.php">Forgot Password</a>
                </div>
            
        </div>
    </body>
</html>
	