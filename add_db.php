<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "wtproject";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $rollno=$_POST['rollno'];
    $code=$_POST['code'];
    $series1=$_POST['series1'];
    $series2=$_POST['series2'];
    $assign=$_POST['assign'];
    $total=($series1+$series2)/2+$assign;
    

    $sql="INSERT INTO `sessional` (`rollno`, `code`, `series1`, `series2`, `assignment`, `total`) VALUES ('$rollno', '$code', '$series1', '$series2', '$assign', '$total')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('location:./');
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
mysqli_close($conn);
?>