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
    
    $option=$_POST['option'];
    
    $querya="SELECT CODE,name,total from sessional NATURAL JOIN students WHERE rollno='$option'";
    
    $result=mysqli_query($conn,$querya);
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="styles.css"/>
    
    <title>Sessional marks</title>
</head>
<body>

    <div class="container">
    
        <h3 class="text-center" style="margin-top:50px;">Sessionals of Roll No <?php echo $option ?> is :</h3>
        
<table class="table table-bordered" style="margin-top:50px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Roll No</th>
      <th scope="col">Name</th>
      <th scope="col">Code</th>
      <th scope="col">Sessionals</th>
    </tr>
  </thead>
  <tbody>
      <?php while ($row=mysqli_fetch_array($result)){
     ?>
    <tr>
      <th scope="row"><?php echo $option?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['CODE']; ?></td>
      <td><?php echo $row['total']; ?></td>
    </tr>
      <?php } ?>
  </tbody>
</table>

    </div>
    
</body>
</html>