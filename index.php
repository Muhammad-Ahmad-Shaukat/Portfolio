<!DOCTYPE html>
<!-- Starting PHP section -->
<?php
    include("connection.php"); // Include PHP file with database connection
    $sql = "SELECT * FROM `user` WHERE `user`.`id` = 1"; // SQL query to fetch user data
    $result = mysqli_query($conn, $sql); // Execute SQL query
    $data = mysqli_fetch_assoc($result); // Fetch data into an associative array
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Page Title -->
    <title>Homepage</title>
</head>
<!-- CSS Styles -->
<style>
    /* Header Styles */
    #header {
        display: block;
        background-color: #cccccc;
        padding: 12px 0px 12px 0px;
    }
    #header a {
        text-decoration: none;
        color: #666666;
        padding: 5px 5px 7px 5px;
        font-size: 18px;
        background-color: #cccccc;
        border-radius: 5px;
    }
    #header a:hover {
        background-color: #666666;
        color: aliceblue;
    }
    #header div {
        padding-left: 25px;
    }

    /* Footer Styles */
    #footer {
        display: block;
        background-color: #cccccc;
    }
    #footer p {
        display: flex;
        color: #666666;
        justify-content: center;
        padding-bottom: 8px;
        padding-top: 5px;
    }
    #icons, #links {
        justify-content: center;
        display: flex;
        padding: 5px 5px 5px 5px;
    }
    #icons a:first-child {
        color: #0077B5; /* LinkedIn Icon Color */
    }
    #icons a:nth-child(3) {
        color: #25D366; /* WhatsApp Icon Color */
    }
    #icons a:nth-child(2), #icons a:nth-child(4) {
        color: #2b3137; /* GitHub and Email Icon Color */
    }
    #footer i {
        padding: 5px 5px 7px 5px;
        font-size: 25px;
    }
    #links a {
        text-decoration: none;
        color: #666666;
        padding: 5px 5px 7px 5px;
        font-size: 18px;
    }
</style>
<body>
    <!-- Header Section -->
    <header id="header">
        <div>
            <!-- Header Links -->
            <a href="#">Home</a>
            <a href="#">Skills</a>
            <a href="#">Projects</a>
            <a href="#">Resume</a>
            <a href="#">Contact</a>
        </div>
    </header>
    <section>
        <!-- Content Section (if any) -->
        <br>
    </section>
    <!-- Footer Section -->
    <footer id="footer">
        <!-- Footer Icons -->
        <div id="icons">
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-github"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#"><i class="fa-solid fa-envelope"></i></a>
        </div>
        <!-- Footer Links -->
        <div id="links">
            <a href="#">Home</a>
            <a href="#">Skills</a>
            <a href="#">Projects</a>
            <a href="#">Resume</a>
            <a href="#">Contact</a>
        </div>
        <!-- Footer Copyright -->
        <p>&copy; <?php echo date('Y'); ?> <?php echo $data['name']; ?></p>
    </footer>
</body>
</html>
