<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css" type="text/css">
    <title>Admin Login</title>
</head>
<body>
   <div class="container">
                    <div class="row mx-auto">
                        <p class="text-center display-5 my-5">Existing Account</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col">
                            <p class="text-center h2">Login </p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <center><img class="rounded-circle my-4" src="../Img/loginIcon.png" height="100px" width="100px"></img></center>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-5">
                            <form action="login.php" method="POST">
                            <div class="form-group">
                                    <label class="my-1">Enter your name</label>
                                <input name="name" class="form-control" type="text" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                    <label class="my-1">Email Id</label>
                                <input name="email" class="form-control" type="email" placeholder="Email" required>
                            </div> 
                            <div class="form-group">
                                <label class="my-1">Password</label>
                                <input name="pswd" class="form-control" type="password" placeholder="Password" required>
                                <small class="form-tex text-muted">Password should be contains 8 characters </small>
                             <!--   <small class="text-danger"><?php echo $pswd_error; ?></small>-->
                                <div class="form-group">
                                    <button name="sbmt_" type="submit" style="width: 100%;" class="btn btn-primary my-3">Login</button>
                                </div>
                            </div>   
                        </form> 
                        </div>    
                    </div>    
        <?php
            if(isset($_POST['sbmt_'])){
                if($_POST['email']=="admin@gmail.com"){
                    if($_POST['pswd']=="1234"){
                        session_start();
                        $_SESSION['name']=$_POST['name'];
                        header("Location: home.php");
                    }
                    else{
                        echo"Password is incorrect";
                    }
                }
                else{
                    echo"Email id is incorrect";
                }
               
            }
        ?>  
                          
</body>
</html>