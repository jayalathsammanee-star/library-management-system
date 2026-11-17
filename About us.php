<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us - Online Library Management System </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #f9f9f9;
    }

    /* FIX: Added Flexbox to Header to show Logo and Nav side-by-side */
    header {
        background-color: #090909;
        display: flex;
        justify-content: space-between; /* This pushes nav to the far right */
        align-items: center; /* Aligns items vertically in the center */
        padding: 25px 70px;
        color: white;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 15px;
        
    }

    .logo h1 {
        font-size: 20px;
        margin: 0;
      
    }

    /* FIX: Improved Nav Styling */
    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
         
    }

    nav li {
        display: inline-block;
        margin-left: 20px;
    }

    nav li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        font-size: 16px;
    }

    nav li a:hover {
        color: #ff9800;
    }

    /* About Section Styles */
    .about-content {
        text-align: center;
        padding: 50px 20px;
        background-color: white;
    }
    .about-content h1 {
        font-size: 32px;
        margin-bottom: 20px;
    }
    .about-content p {
        max-width: 850px;
        margin: 0 auto 15px;
        line-height: 1.8;
        color: #555;
    }

    /* Team Section Styles */
    .team-section {
        background-color: #f4f4f4;
        padding: 60px 20px;
        text-align: center;
    }
    .team-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
        margin-top: 40px;
    }
    .team-card {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        width: 280px;
        transition: transform 0.3s;
    }
    .team-card:hover {
        transform: translateY(-5px);
    }
    .team-card img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
        border: 4px solid #eee;
    }
    .team-card h3 {
        margin: 10px 0 5px;
        color: #333;
    }
    .team-card p {
        color: #777;
        font-size: 14px;
        line-height: 1.4;
    }
</style>
</head>

<body>
	<div class="wrapper">
		<header>
            <div class="logo">
                <img src="images1/logo.jpg.webp" width="60" height="80" alt="Logo">
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

		<section>
            <div class="about-content">
                <h1>Welcome to Online Library Management System</h1>
                <p>Welcome to the Library Management System, a smart and efficient platform designed to manage library activities easily and accurately. This system helps students, librarians, and administrators to search books, issue and return books, manage member details, and keep track of library records in a simple and organized way.</p>
            </div>

            <div class="team-section">
                <h2>Meet Our Team</h2>
                <div class="team-container">
                    <div class="team-card">
                        <img src="images1/main2.jpeg" alt="N.H.Y. Perera">
                        <h3>N.H.Y. Perera</h3>
                        <p><strong>Library Director</strong></p>
                        <p>N.H.Y. Perera brings over 20 years of experience in Online Library Management Systems.</p>
                    </div>
                    <div class="team-card">
                        <img src="images1/main3.jpeg" alt="D.H. Samaranayaka">
                        <h3>D.H. Samaranayaka</h3>
                        <p><strong>Dean of Libraries</strong></p>
                        <p>Most positions require 10+ years of professional experience in an academic or research library.</p>
                    </div>
                </div>
            </div>
		</section>
	</div><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <html>
<!-- Newsletter Sign-Up Section -->
<footer style="background-color:#e6f2f5; padding: 30px 70px; text-align: center;">
  <h2 style="font-weight: normal; font-size: 28px; color: #333;">SIGN UP FOR<br><strong>THE NEWSLETTER</strong></h2>
  <form style="margin-top: 30px;">
    <input type="email" placeholder="E-mail" style="padding: 10px; width: 250px; border: none; border-radius: 20px; margin-right: 10px;">
    <button type="submit" style="background-color: #d4a73c; color: white; border: none; padding: 10px 25px; border-radius: 25px; cursor: pointer;">Send</button>
  </form>
  <p style="margin-top: 20px; color: #555;">Stay connected with the latest additions to our collection</p>
  </footer>
  </html>
</div>
</body>
</html>
  
