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
        
    <!-- navegation bar -->
   
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

    <main class="container">

    <div class="main-title"> <h1>Sales team personal information form</h1></div>

    <!-- this is the section where the date is gonna be posting -->
	   <section class="form-row row justify-content-center">
     
		     <form method="post" action="add.php" class="form-horizontal col-md-6 col-md-offset-3">
         
                <p><label for="fName">First name</label><input type="text" name="fName" id="fName" placeholder="Enter employee First Name"></p>
                <p><label for="lName">Last name</label><input type="text" name="lName" id="lName" placeholder="Enter employee Last Name"></p>
                <p><Label for="employeeID">Employee ID</Label><input type="text"  name="employeeID" id="employeeID" placeholder="Enter the Employee ID"></p>
                <p><label for="position">Employee position</label><input type="text" name="position" id = "position" placeholder="Enter employee position name"></p>
                <p><label for="email">Employee email</label><input type="text" name="email" id="email" placeholder="Enter personal employee email"></p>
                <p><label for="dateOfBirth">Date of birth</label><input type="date" name="dateOfBirth" id="dateOfBirth"></p>
                <p><label for="nChildren">Number of children</label><input type="text" name="nChildren" id="nChildren" placeholder="Enter number of children"></p>
                <p><label for="nCars">Number of cars</label><input type="text" name="nCars" id="nCars" placeholder="Enter number of cars"></p>
                <p><label for="lEducation">Level of education</label><input type="text" name="lEducation" id="lEducation" placeholder="Enter level of education"></p>
                <p><label for="country">Country</label><input type="text" name="country" id="country" placeholder="Enter country name"></p>

                <!-- the following are the form buttons -->
                <input class="btn btn-outline-* add" type="submit" name="Submit" value="Add">
                <input class="btn btn-outline-* reset" type="reset" value="Clear">
		    </form>
      </section>
    
    </main>

    <!-- footer section -->

 <footer>
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="./images/logo-footer.png" alt="HR Company Logo">
                </div>
                <div class="footer-info">
                    <h2>Contact Us</h2>
                    <p>Email: info@hrcompany.com</p>
                    <p>Phone: +1 (123) 456-7890</p>
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