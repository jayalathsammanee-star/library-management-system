<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		About Us - Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
    /*-------------------------------Main code INDEX ---------------------------------------------------------*/

.wrapper {
    width: 100%; /* Changed from fixed 1350px to 100% for better fit */
}

header {
    /* Height must be 'auto' or large enough (e.g., 100px) to show the logo and nav */
    height: auto; 
    width: 100%;
    background-color: black;
    padding: 10px 0;
    /* Use Flexbox to align logo left and nav right */
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    display: flex;
    align-items: center;
    padding-left: 20px;
}

.logo img {
    padding-left: 0; /* Removed 80px padding to keep it near the edge */
    margin-right: 15px;
}

.logo h1 {
    color: white;
    font-size: 20px;
}

nav {
    padding-right: 50px;
}

nav li {
    display: inline-block;
    margin-left: 30px; /* Space between links */
}

nav li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
}

nav li a:hover {
    color: #ff9800; /* Adds a nice hover effect */
}

section {
    height: 550px;
    width: 100%;
    background-color: grey;
}

section .sec_img {
    height: 550px;
    background-image: url("images1/a18.jpg.jpg");
    background-size: cover;
    background-position: center;
    display: flex; /* Helps center the welcome box */
    align-items: center;
}

.box {
    height: 300px;
    width: 450px;
    background-color: #030002;
    margin: 0 auto; /* Centered by flex parent */
    opacity: .7;
    color: white;
    text-align: center;
    padding-top: 50px;
}

footer {
    width: 100%;
    background-color: black;
    padding: 20px 0;
}

</style>
</head>

<body>
	<div class="wrapper">
		<header>
    <div class="logo">
        <img src="images1/logo.jpg.webp" width="60" height="70" alt="Logo">
        <h1>ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    </div>

    <nav>
        <ul>
            <?php if(isset($_SESSION['login_user'])): ?>
                <li><a href="index.php">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                
                <li><a href="About us.php">ABOUT US</a></li>
            <?php else: ?>
                <li><a href="index.php">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="student_login.php">LOGIN</a></li>
                <li><a href="registration.php">SIGN-UP</a></li>
                
                <li><a href="About us.php">ABOUT US</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

		</header>
            <section>
                <div class="sec_img">
                <br><br><br>
                <div class="box">
                    <br><br><br>
                    <h1 style="text-align: center;font-size: 35px;">Welcome To Library</h1><br><br>
                    <h1 style="text-align: center;font-size: 25px;">Open at: 09.00</h1><br>
                    <h1 style="text-align: center;font-size: 25px;">Close at: 15.00</h1><br>
</div>
        

                </section>
        </div>
        <html>
  
<!-- Newsletter Sign-Up Section -->
<div style="background-color:#e6f2f5; padding: 40px 20px; text-align: center;">
  <h2 style="font-weight: normal; font-size: 28px; color: #333;">SIGN UP FOR<br><strong>THE NEWSLETTER</strong></h2>
  <form style="margin-top: 30px;">
    <input type="email" placeholder="E-mail" style="padding: 10px; width: 250px; border: none; border-radius: 20px; margin-right: 10px;">
    <button type="submit" style="background-color: #d4a73c; color: white; border: none; padding: 10px 25px; border-radius: 25px; cursor: pointer;">Send</button>
  </form>
  <p style="margin-top: 20px; color: #555;">Stay connected with the latest additions to our collection</p>
</div>

<!-- Footer -->
<footer style="text-align: center; padding: 24px; font-size: 20px; background-color: #f5f5f5; color: #555;">
 <strong> Welcome to the Online Library Management System</strong><br><br>
Our platform is designed to bridge the gap between traditional reading and modern convenience,<br>
allowing you to browse, search, and request books from our extensive collection with just a few clicks.<br>
Step inside and explore a sanctuary of information where every page is a new opportunity to learn and grow.<br>
Whether you are a student conducting research or an avid reader seeking your next great story,<br>
 our system provides a seamless experience for managing your borrowed titles, tracking due dates, and discovering new arrivals.
</footer>
</html>
        <?php
        include "footer.php";
        ?>
    </body>    
            
        
   



</html>