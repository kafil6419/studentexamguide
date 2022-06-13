<?php
include('header.php');
$conn=mysqli_connect("sql100.epizy.com","epiz_31814636","QMU9Ss1Kq2","epiz_31814636_cbse_exam_guide")or die("Connection Failed");
$sql= "SELECT *from contribution";
$result = mysqli_query($conn,$sql)or die("Query failed");
   if(mysqli_num_rows($result)==0){
       echo"No record found";
       die();
   }

?>
<div class="container">
    <div class="row">
        <div class="col my-3">
        <table class="table">
            <thead>
                <th scope="col">S.No</th>
                <th scope="col">paperId</th>
                <th scope="col">Name</th>
                <th scope="col">Institutional Name</th>
                <th scope="col">Subject</th>
                <th scope="col">Term</th>
     
                <th scope="col">Year</th>
                <th scope="col">fileName</th>
                <th scope="col">Time</th>
                
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
                <td><?php echo$row['Name']?></td>
                <td><?php echo$row['institutionName']?></td>
                <td><?php echo$row['subject']?></td>
                <td><?php echo$row['Term']?></td>
                <td><?php echo$row['year']?></td>
                <td>  <a href="../CPYQ/<?php echo $row['fileName']?>"><?php echo$row['fileName']?></a></td>
                <td><?php echo$row['Time']?></td>
                <td><a href="Approved.php?id=<?php echo $row['paperId'];?>" class="btn btn-success text-light">Approved</a></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
        </div>
    </div>
</div>