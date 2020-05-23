<?php
$db=new mysqli ('localhost','root','','project');
?>
<html>
  <head>
    <title>Main</title>
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
          <button float class="cta-contact" onclick="location.href='main.php'">Home</button>
        </nav>
      </header>
	  <?php
	  if(isset($_POST["submit"]))
	  {
	  $n=$_POST['name'];
	  $ad=$_POST['adress'];
	  $h_n=$_POST['Hname'];
	  $p1=$_POST['p1'];
	  $p2=$_POST['p2'];
	  $p3=$_POST['p3'];
	  $p4=$_POST['p4'];
	  $p5=$_POST['p5'];
	  $sql="Insert into p values ('{$n}','{$ad}','{$h_n}','{$p1}','{$p2}','{$p3}','{$p4}','{$p5}')";
	  $db->query($sql);
	  echo "Added Successfully.";
	  }
	  ?>
      
      <main class="page-main">
        <div class="container">
          <table>
            <tbody>
              <form  method="POST" enctype="multipart/form-data">
                <tr>
                  <td>Name</td>
                  <td>
                    <div class="textbox">
                      <input type="text" name="name" placeholder="Enter Name" class="nice" required>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td>
                    <div class="textbox">
                      <input type="Address" name="adress" placeholder="Enter Address" class="nice" required>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Hospital Name</td>
                  <td>
                    <div class="textbox">
                      <input type="text" name="Hname" placeholder="Enter Hospital Name" class="nice" required>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visited Places</td>
                  <td>
                    <div class="textbox">
                      <input type="text" name="p1" placeholder="Enter Place 1" class="nice" required><br>
                      <input type="text" name="p2" placeholder="Enter Place 2" class="nice" required><br>
                      <input type="text" name="p3" placeholder="Enter Place 3" class="nice" required><br>
                      <input type="text" name="p4" placeholder="Enter Place 4" class="nice" required><br>
                      <input type="text" name="p5" placeholder="Enter Place 5" class="nice" required><br>
					  <p>NOTE: Enter NA if place not known</p>
                    </div>
                  </td>
                </tr>
                <td colspan="2">
                  <div class="logout">
                    <input type="reset" name="Reset" value="Reset">
                    <button type="submit" name="submit">Save Details</button>               
                  </div>
                </td>
              </form>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </body>
</html>