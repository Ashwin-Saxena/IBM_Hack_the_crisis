<?php
$db=new mysqli ('localhost','root','','project');
?>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="info.css">
  </head>
  <body>
    <div class="wrapper">
      <header class="page-header">
        <nav>
          <h2 class="logo"></h2>
          <ul>
            <li>
              <a href="#">Register</a>
            </li>
          </ul>
          <button float class="cta-contact" onclick="location.href='index.php'">Back</button>
        </nav>
      </header>
	  <?php
	  if(isset($_POST["submit"]))
	  {
	  $n=$_POST['name'];
	  $m=$_POST['mob'];
	  $sql1="SELECT * FROM user WHERE mob='{$_POST['mob']}'";
                    $result = mysqli_query($db, $sql1);
                 if($row = mysqli_fetch_assoc($result))
                  {
                echo "Mobile No. already exist";
                 }
                else
		{ 
                   $sql="Insert into user values ('{$n}','{$m}')";
					
			 if($db->query($sql))
			{
				echo "<p class='success'>User Registration Success.</p>";
			}
			else
			{
				echo "<p class='success'>Registration Failed.</p>";
			}
        }
	  }
	  ?>
      
      <main class="page-main">
        <div class="container">
              <form  method="POST" enctype="multipart/form-data">
			  <label> Name </label>
			  <input type="text" placeholder="Name" name="name" required><br><br>
			  <label> Mobile No. </label>
			  <input type="text" placeholder="Mobile No." name="mob" required>
               <br>
			   <br>
                  <div class="logout">
                    <button type="reset" name="Reset" value="Reset">Reset</button>
                    <button type="submit" name="submit">Save Details</button>               
                  </div>
        
              </form>
        </div>
      </main>
   </div>
  </body>
</html>