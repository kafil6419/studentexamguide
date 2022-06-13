
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Admin</title>
</head>
<body>
<?php
session_start();
    if(isset($_SESSION['name'])){
        $name=$_SESSION['name'];
     echo"<center>Welcome $name in myAdminPage</center>";
    }
    else{
        header("Location: login.php");
    }
?>
    <div class="container-fluid bg-primary">
        <div class="row">
            <div class="col">
                <ul class="nav nav-fill">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link text-light">Home</a></li>
                    <li class="nav-item">
                        <a href="Add file.php"class="nav-link text-light">Add file</a></li>
                    <li class="nav-item">
                        <a href=""class="nav-link text-light">Update</a>
                    </li>
                    <li class="nav-item">
                        <a href="contributorApproved.php"class="nav-link text-light">Contributors</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
