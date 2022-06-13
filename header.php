
<!DOCTYPE html>
<html>
  <head>
   
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        a:hover{
            background-color: rgb(255, 51, 133);
             color:white;
            
        }
        .bg_color{
            background-color:rgb(255, 51, 133);
        }
        .font{
            font-family:Tapestry;
            font-size:40px;
        }
        @media(max-width:520px){
            .div_w{
                width:90%;
            }
            .m_margin{
                margin-top:20px;
            }
        }
        #pageloader
        {
        background: rgba( 255, 255, 255, 0.8 );
         display: none;
        height: 100%;
        position: fixed;
          width: 100%;
          z-index: 9999;
        }

        #pageloader img
        {
          left: 50%;
          margin-left: -32px;
          margin-top: -32px;
          position: absolute;
          top: 50%;
        }
    
       
    </style>
   <title><?php echo "$title"?></title>
   
  </head>

  <body id="#body">
    <div class="container-fluid">
  <div class="row bg_color font align-items-center">
    <div class="col-12 align-items-center">
      <center>  <span class=" text-light align-middle" style="font-size:30px">Student Examination Guide </IMG></span></center>
    </div>
  </div>
  <DIV class="row">
    <div class="col-12 ">
        <nav class="navbar navbar-expand-lg  navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
    
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php">Home</a>
                    <a class="nav-item nav-link " aria-current="page" href="about.html">About</a>
                    <a class="nav-item nav-link " aria-current="page" href="syllabus.php">Syllabus</a>
                    <a class="nav-item nav-link " aria-current="page" href="class.php">class 8-9</a>
                    <a class="nav-item nav-link " aria-current="page" href="class10.php">class 10</a>
                    <a class="nav-item nav-link " aria-current="page" href="class11.php">class 11</a>
                    <a class="nav-item nav-link " aria-current="page" href="class12.php">class 12</a>
                      <a class="nav-item nav-link " aria-current="page" href="collegeBackend.php">College</a>
                    <a class="nav-item nav-link " aria-current="page" href="#">Conceptual Points</a>
                     <a class="nav-item nav-link " aria-current="page" href="contribution.php">Contributions (class 8-12)</a>
                       <a class="nav-item nav-link " aria-current="page" href="contribution_college.php">Contributions (college)</a>
                    <a class="nav-item nav-link " aria-current="page" href="">Notes</a>
                    <a class="nav-item nav-link " aria-current="page" href="">Contact Us</a>
                </div>
            </div>
          </nav>
      </div>
  </DIV>