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
              <a href="#">Death Patient</a>
            </li>
          </ul>
          <button float class="cta-contact" onclick="location.href='main.php'">Home</button>
        </nav>
      </header>
      <main class="page-main">
        <div class="container">
          <?php 
		$sql="SELECT * FROM d";
		$res=$db->query($sql);
		if($res->num_rows>0)
		{
			echo "<table>";
					echo "<tr>";
						echo "<th>SNO</th>";
						echo "<th>Patient Name</th>";
						echo "<th>Address</th>";
						echo "<th>Hospital</th>";
					echo "</tr>";
					$i=0;
				while($row=$res->fetch_assoc())
				{
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row["name"]}</td>";
					echo "<td>{$row["address"]}</td>";
					echo "<td>{$row["h_name"]}</td>";
					echo "</tr>";
				}
			echo "</table>";
		}
		else
		{
		echo "No record found";
		}
		
	?>
         </div>
      </main>
    </div>
		
  </body>
</html>