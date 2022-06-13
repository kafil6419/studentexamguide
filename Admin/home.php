<?php
include('header.php');
   $conn=mysqli_connect("sql100.epizy.com","epiz_31814636","QMU9Ss1Kq2","epiz_31814636_cbse_exam_guide")or die("Connection Failed");
     $sql= "SELECT *from pyq";
     $result = mysqli_query($conn,$sql)or die("Query failed");
        //if(mysqli_num_rows($result)==0){
         //   echo"No record found";
         //   die();
        //}
    
     ?>
<div class="container">
    <div class="row">
        <div class="col my-3">
        <table class="table">
            <thead>
                <th scope="col">S.No</th>
                <th scope="col">PaperId</th>
                <th scope="col">SchoolName</th>
                <th scope="col">Class</th>
                <th scope="col">Subject</th>
                <th scope="col">Term</th>
                <th scope="col">Year</th>
                <th scope="col">file name</th>
                <th scope="col"></th>
            </thead>
            <tbody>
                <?php
                $i=0;
                while($row=mysqli_fetch_assoc($result)){
                    $i++;
                    ?>
                <tr>
                <td scope="row"><?php echo$i?></td>
                <td><?php echo$row['paperId']?></td>
                <td><?php echo$row['schoolName']?></td>
                <td><?php echo$row['class']?></td>
                <td><?php echo$row['subject']?></td>
                <td><?php echo$row['Term']?></td>
                <td><?php echo$row['year']?></td>
                <td><a href="../PYQ/<?php echo$row['fileName']?>"><?php echo$row['fileName']?></a></td>
                <td><a href="delete_file.php?id=<?php echo $row['paperId'];?>" class="btn btn-primary text-light">delete</a></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
        </div>
    </div>
    <?php $sql= "SELECT *from pyq_10";
     $result = mysqli_query($conn,$sql)or die("Query failed");
        if(mysqli_num_rows($result)==0){
            echo"No record found";
            
        }
    ?>
    <div class="row">
        <div class="col">
            Class 10
        </div>
    </div>
    <div class="row">
        <div class="col my-3">
        <table class="table">
            <thead>
                <th scope="col">S.No</th>
                <th scope="col">PaperId</th>
                <th scope="col">SchoolName</th>
                <th scope="col">Class</th>
                <th scope="col">Subject</th>
                <th scope="col">Term</th>
                <th scope="col">Year</th>
                <th scope="col">file name</th>
                <th scope="col"></th>
            </thead>
            <tbody>
                <?php
                $i=0;
                while($row=mysqli_fetch_assoc($result)){
                    $i++;
                    ?>
                <tr>
                <td scope="row"><?php echo$i?></td>
                <td><?php echo $row['paperId']?></td>
                <td><?php echo $row['cName']?></td>
                <td><?php echo $row['BoardName']?></td>
                <td><?php echo $row['subject']?></td>
                <td><?php echo $row['Term']?></td>
                <td><?php echo $row['year']?></td>
                <td><a href="../PYQ/<?php echo$row['fileName']?>"><?php echo$row['fileName']?></a></td>
                <td><a href="delete_file.php?id=<?php echo $row['paperId'];?>" class="btn btn-primary text-light">delete</a></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
        </div>
    </div>
    <?php $sql= "SELECT *from pyq_11";
     $result = mysqli_query($conn,$sql)or die("Query failed");
        if(mysqli_num_rows($result)==0){
            echo"No record found";
           
        }
    ?>
    <div class="row">
        <div class="col">
            Class 11
        </div>
    </div>
    <div class="row">
        <div class="col my-3">
        <table class="table">
            <thead>
                <th scope="col">S.No</th>
                <th scope="col">PaperId</th>
                <th scope="col">SchoolName</th>
                <th scope="col">Class</th>
                <th scope="col">Subject</th>
                <th scope="col">Term</th>
                <th scope="col">Year</th>
                <th scope="col">file name</th>
                <th scope="col"></th>
            </thead>
            <tbody>
                <?php
                $i=0;
                while($row=mysqli_fetch_assoc($result)){
                    $i++;
                    ?>
                <tr>
                <td scope="row"><?php echo$i?></td>
                <td><?php echo$row['paperId']?></td>
                <td><?php echo$row['cName']?></td>
                <td><?php echo$row['BoardName']?></td>
                <td><?php echo$row['subject']?></td>
                <td><?php echo$row['Term']?></td>
                <td><?php echo$row['year']?></td>
                <td><a href="../PYQ/<?php echo$row['fileName']?>.pdf"><?php echo$row['fileName']?></a></td>
                <td><a href="delete_file.php?id=<?php echo $row['paperId'];?>" class="btn btn-primary text-light">delete</a></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
        </div>
    </div>
    <?php $sql= "SELECT *from pyq_12";
     $result = mysqli_query($conn,$sql)or die("Query failed");
        if(mysqli_num_rows($result)==0){
            echo"No record found";
          
        }
    ?>
    <div class="row">
        <div class="col">
            Class 12
        </div>
    </div>
    <div class="row">
        <div class="col my-3">
        <table class="table">
            <thead>
                <th scope="col">S.No</th>
                <th scope="col">PaperId</th>
                <th scope="col">SchoolName</th>
                <th scope="col">Class</th>
                <th scope="col">Subject</th>
                <th scope="col">Term</th>
                <th scope="col">Year</th>
                <th scope="col">file name</th>
                <th scope="col"></th>
            </thead>
            <tbody>
                <?php
                $i=0;
                while($row=mysqli_fetch_assoc($result)){
                    $i++;
                    ?>
                <tr>
                <td scope="row"><?php echo$i?></td>
                <td><?php echo$row['paperId']?></td>
                <td><?php echo$row['cName']?></td>
                <td><?php echo$row['BoardName']?></td>
                <td><?php echo$row['subject']?></td>
                <td><?php echo$row['Term']?></td>
                <td><?php echo$row['year']?></td>
                <td><a href="../PYQ/<?php echo$row['fileName']?>"><?php echo$row['fileName']?></a></td>
                <td><a href="delete_file.php?id=<?php echo $row['paperId'];?>" class="btn btn-primary text-light">delete</a></td>
            </tr>
            <?php }?>
</tbody>
        </table>
        </div>
    </div>
            <?php $sql= "SELECT *from College";
     $result = mysqli_query($conn,$sql)or die("Query failed");
        if(mysqli_num_rows($result)==0){
            echo"No record found";
          
        }
    ?>
    <div class="row">
        <div class="col">
            College
        </div>
    </div>
    <div class="row">
        <div class="col my-3">
        <table class="table">
            <thead>
                <th scope="col">S.No</th>
                <th scope="col">PaperId</th>
                <th scope="col">Name<th>
                <th scope="col">College Name</th>
                <th scope="col">Course Name</th>
                <th scope="col">Paper Name</th>
                <th scope="col">Year</th>
                <th scope="col">file name</th>
                <th scope="col"></th>
            </thead>
            <tbody>
                <?php
                $i=0;
                while($row=mysqli_fetch_assoc($result)){
                    $i++;
                    ?>
                <tr>
                <td scope="row"><?php echo$i?></td>
                <td><?php echo$row['paperId']?></td>
                <td><?php echo$row['cName']?></td>
                <td><?php echo$row['CollegeName']?></td>
                <td><?php echo$row['CourseName']?></td>
                <td><?php echo$row['paperName']?></td>
                <td><?php echo$row['year']?></td>
               
                <td><a href="../CPYQ/<?php echo$row['fileName']?>"><?php echo$row['fileName']?></a></td>
                <td><a href="delete_file.php?id=<?php echo $row['paperId'];?>" class="btn btn-primary text-light">delete</a></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
        </div>
    </div>
</div>