<?php
    $id=$_GET['id'];
   $conn=mysqli_connect("sql100.epizy.com","epiz_31814636","QMU9Ss1Kq2","epiz_31814636_cbse_exam_guide")or die("Connection Failed");
   $class=$id[10].$id[11];


   if($class<10 && $class >0){
    $sql= "delete from pyq where paperId='{$id}'";
    $result = mysqli_query($conn,$sql)or die("Query failed");
     echo"<script>
        alert('$id successfully delete');
    </script>";
    
   }
   else if($class==11){
       $sql= "delete from pyq_11 where paperId='{$id}'";
    $result = mysqli_query($conn,$sql)or die("Query failed");
     echo"<script>
        alert('$id successfully delete');
    </script>";
   }
   else if($class==10){
       $sql= "delete from pyq_10 where paperId='{$id}'";
    $result = mysqli_query($conn,$sql)or die("Query failed");
     echo"<script>
        alert('$id successfully delete');
    </script>";
   }
   else{
  $sql= "delete from College where paperId='{$id}'";
  echo"<script>
        alert('$id successfully delete');
    </script>";
    $result = mysqli_query($conn,$sql)or die("Query failed");
    
   }
    
    header("location: home.php");
    mysqli_close($conn);
?>