<?php
    include_once ("connect.php");
    $CarName = $_POST['CarName'];
    $CarNumber = $_POST['CarNO'];
    $CarColor = $_POST['CarColor'];
    $CarYear = $_POST['Year'];

    $sql = "INSERT INTO cardata(CarName, CarNo, CarColor,Yeer)
    VALUES ('$CarName','$CarNumber','$CarColor','$CarYear')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>Done Save All Data For Car !</h1><a href='data.php'><button type='button'>Show All Cars</button></a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();