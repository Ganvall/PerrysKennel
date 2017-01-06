<!DOCTYPE html>
<?php
$host="localhost"; //Add your SQL Server host here
$user="root"; //SQL Username
$pass="hej123"; //SQL   Password
$dbname="phpskit"; //SQL Database Name
$con=mysqli_connect($host,$user,$pass,$dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
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
            <li><a style="background-color: lightskyblue" href="minahundar.html">MINA HUNDAR</a></li>
            <li><a href="kennel.html">KENNEL</a></li>
            <li><a href="hundskola.html">HUNDSKOLA</a></li>
            <li><a href="bildgalleri.html">BILDGALLERI</a></li>
            <li><a href="guestbook.php">GÄSTBOK</a></li>
            <li><a href="kontakt.html">KONTAKT</a></li>
        </ul>
        <div class="dropdown">
            <button onclick="toggleMenu()" class="dropbtn"> MENY</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="index.html">HEM</a>
                <a style="background-color: lightskyblue" href="minahundar.html">MINA HUNDAR</a>
                <a href="kennel.html">KENNEL</a>
                <a href="hundskola.html">HUNDSKOLA</a>
                <a href="bildgalleri.html">BILDGALLERI</a>
                <a href="guestbook.php">GÄSTBOK</a>
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
        <h2>Mina hundar</h2>
        <hr>
        <?php
        $result = mysqli_query($con,"SELECT name,picturepath,information FROM dog");
        while($row = mysqli_fetch_array($result))
        { ?>
            <p><h3><?php echo $row['name']; ?></h3></b>
            <p><img src="<?php echo $row['picturepath']; ?>" id="dogz"></p>
            <p><?php echo $row['information']; ?></p>
            <hr>
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

