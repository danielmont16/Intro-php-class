<?php include_once 'database.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Team personal information</title>
    <meta name="author" content="Daniel Montenegro">
    <meta name="Description" content="Dynamic website with database integration">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="./css/styles.css">
</head>

<!-- body section -->
<body>

  <!-- header section -->
    <header>    
      <div class="nav-container">
       
       <div class="logo-container">
           <img src="./images/logo.png" alt="logo HR">
       </div>

       <ul class="container-links" >
           <li><a class="links" href="index.php">Home</a></li>
           <li><a class="links" href="view.php">View</a></li>
       </ul>
      </div>            
    </header>

<!-- main section -->
<main>
<div class="container">
  
<div class="main-title"> <h1>Sales team personal information table</h1></div>

	<div class="row">
		<table class="table">
      <?php        
        $query = 'SELECT * FROM salesEmployees';
        $result = $database->getData($query);
      ?>
      <!-- creating table headings -->
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Employee ID</th>
        <th>Position</th>
        <th>Personal email</th>
        <th>Date of Birth</th>
        <th>Number of Children</th>
        <th>Number of Cars</th>
        <th>Level of Education</th>
        <th>Country</th>
      </tr>
      <!-- iterating into the array result and printing the table in html -->
      <?php
        foreach($result as $key => $res){
          echo "<tr>";
          echo "<td>".$res['fName']."</td>";
          echo "<td>".$res['lName']."</td>";
          echo "<td>".$res['employeeID']."</td>";
          echo "<td>".$res['position']."</td>";
          echo "<td>".$res['email']."</td>";
          echo "<td>".$res['dateOfBirth']."</td>";
          echo "<td>".$res['nChildren']."</td>";
          echo "<td>".$res['nCars']."</td>";
          echo "<td>".$res['lEducation']."</td>";
          echo "<td>".$res['country']."</td>";          
          echo "</tr>";
        }
      ?>
		</table>
	</div>
</div>
</main>

<!-- footer section -->
    
<footer>
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="./images/logo-footer.png" alt="logo HR">
                </div>
                <div class="footer-info">
                    <h2>Contact Us</h2>
                    <p>Email: info@hrxyz.com</p>
                    <p>Phone: +1 (999) 123-4567</p>
                </div>
                <div class="comment">
                    <p>
                    <small>"Lorem Ipsum is simply dummy text of the printing and typesetting industry". </small>
                    </p>
                </div>
            </div>

            <div class="footer-bottom">
                <p><small>© 2023 HR Start-Up. All rights reserved.</small></p>  
            </div>
</footer>

</body>

</html>