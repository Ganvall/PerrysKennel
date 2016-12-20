<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel='stylesheet' media='screen and (max-width: 768px)' href='CSS/mobile.css' />
    <link rel='stylesheet' media='screen and (min-width: 769px) and (max-width: 1024px)' href='CSS/tablet.css' />
    <link rel='stylesheet' media='screen and (min-width: 1025px)' href='CSS/general.css' />
    <title>Perrys Kennel</title>
    <meta charset="utf-8">

</head>
<body>
<div id="page-wrap">
    <div id="header">
        <br> <br><br><br><br><br>
        <h1><a id=h1 href="index.html">Perrys Kennel</a></h1>
    </div>
    <div id="nav">
        <ul id="buttons">
            <li><a href="index.html">HEM</a></li>
            <li><a href="minahundar.html">MINA HUNDAR</a></li>
            <li><a href="kennel.html">KENNEL</a></li>
            <li><a href="hundskola.html">HUNDSKOLA</a></li>
            <li><a href="bildgalleri.html">BILDGALLERI</a></li>
            <li><a style="background-color: lightskyblue" href="gästbok.php">GÄSTBOK</a></li>
            <li><a href="kontakt.html">KONTAKT</a></li>
        </ul>
        <div class="dropdown">
            <button onclick="toggleMenu()" class="dropbtn"> MENY</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="index.html">HEM</a>
                <a href="minahundar.html">MINA HUNDAR</a>
                <a href="kennel.html">KENNEL</a>
                <a href="hundskola.html">HUNDSKOLA</a>
                <a href="bildgalleri.html">BILDGALLERI</a>
                <a style="background-color: lightskyblue" href="gästbok.php">GÄSTBOK</a>
                <a href="kontakt.html">KONTAKT</a>
            </div>
        </div>


    </div>
    <div id="sidebar">
        <h2>Nyheter osv</h2>
        <img src="images/Mira-2.jpg" id="dogz">
        <a href="bildgalleri.html">- Nya bilder på Mira finns nu i galleriet.</a>
        <br><br>
        <img src="images/dawg.jpg" id="dogz">
        <a href="gästbok.html">- Skriv gärna i min gästbok!</a>

    </div>
    <div id="center">
        <h2>Gästbok</h2>
        <form action="guestbook.php" method="get">
            Name:<br> <input type="text" name="name"><br><br>
            E-mail:<br> <input type="email" name="email"><br><br>
            Message: <br><textarea cols="50" name="message" rows="10"> </textarea><br><br>
            <input type="submit" name="button">
        </form>
        <br>

        <?php
        $host="localhost"; //Add your SQL Server host here
        $user="root"; //SQL Username
        $pass="hej123"; //SQL   Password
        $dbname="phpskit"; //SQL Database Name
        $con=mysqli_connect($host,$user,$pass,$dbname);

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        if (isset($_GET['button'])) {
            $name = $_GET['name'];
            $email = $_GET['email'];
            $message = $_GET['message'];
            $sql = "INSERT INTO guestbook(name,email,message) VALUES('$name','$email','$message')";

            if ($con->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
        $result = mysqli_query($con,"SELECT name,email,message FROM guestbook");
        while($row = mysqli_fetch_array($result))
        { ?>

            <hr>
            <p> Posted by <b><?php echo $row['name']; ?></b></p>
            <p> From email: <?php echo $row['email']; ?></p>
            <p><?php echo $row['message']; ?></p>
            </p>

        <?php }
        mysqli_close($con);
        ?>

    </div>
    <div id="footer">
        <p id="time"></p>
    </div>
</div>
</body>
<script src="JS/Script.js"></script>
</html>


