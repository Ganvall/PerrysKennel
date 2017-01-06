<!DOCTYPE html>
<?php
include 'connection.php';

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    header("location:adminlogin.php");
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
<div id="center">
    <h2>Lägg till hund</h2>
    <form action="adminminahundar.php" method="get">
        Name:<br> <input type="text" name="name"><br><br>
        Picture Path:<br> <input type="text" name="picturepath"><br><br>
        Information: <br><textarea cols="50" name="information" rows="10"> </textarea><br><br>
    <input type="submit" name="adddogbutton">
    </form>
    <br>
    <?php if (isset($_GET['adddogbutton'])) {
        $name = $_GET['name'];
        $picturepath = $_GET['picturepath'];
        $information = $_GET['information'];
        $sql = "INSERT INTO dog(name,picturepath,information) VALUES('$name','$picturepath','$information')";

        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    ?>

    <hr>
    <br>
    <h2>Ta bort hund</h2>
    <form action="adminminahundar.php" method="get">
        Name:<br> <input type="text" name="name"><br><br>
        <input type="submit" name="deletedogbutton">
    </form>
    <br>

    <?php if (isset($_GET['deletedogbutton'])) {
        $name = $_GET['name'];
        $sql = "DELETE FROM dog WHERE name='$name'";

        if ($con->query($sql) === TRUE) {
            echo "Dog deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    ?>
    <br>
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
</body>
</html>
