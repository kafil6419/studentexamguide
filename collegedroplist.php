 <?php 
 if(isset($_POST['sbt1'])){ 
     $title="College_";
 require_once "header.php";
     $conn=mysqli_connect("sql100.epizy.com","epiz_31814636","QMU9Ss1Kq2","epiz_31814636_cbse_exam_guide")or die("Connection Failed");
     $collName=$_POST['select_board'];
     $courName=$_POST['select_subject'];
     $sql2="select distinct(paperName) from College where CollegeName='{$collName}' order by paperName asc";
 $sql3="select distinct(year) from College where  CollegeName='{$collName}' and CourseName='{$courName}' order by year asc";
$result3=mysqli_query($conn,$sql3) or die("Query failed 3");
 $result2=mysqli_query($conn,$sql2) or die("Query failed 2");
?>
                <div class="row m d-flex justify-content-center" id="width_size" >
            <div class="col-md-5  text-center border shadow heightDiv" style="height:380px">
                <form action="collegedroplist.php" method="POST">
                 <div class="form-group mt-4">
                        <select name="select_board" id="slct1" class="form-control" required>
                        <option><?php echo $_POST['select_board'] ?></option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <select name="select_subject" class="form-control my-4" required>
                            <option><?php echo $_POST['select_subject']?></option>
                            </select>
                    </div>
                  
                    <div class="form-group">
                        <select name="paper_name" class="form-control my-4" required>
                        <option value="select" >Select the paperName</option>
                        <?php while($row1=mysqli_fetch_assoc($result2))
                            echo "<option>".$row1['paperName'];?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control my-4" name="select_year" id="" required>
                            <option>Select the year</option>
                            <?php while($row1=mysqli_fetch_assoc($result3))
                            echo "<option>".$row1['year'];?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="sbt" type="submit" class="btn btn-dark w-100"></input>
                    </div>
            </form>
             <?php }
               if(isset($_POST['sbt'])){
                    require_once "header.php";
                     $conn=mysqli_connect("sql100.epizy.com","epiz_31814636","QMU9Ss1Kq2","epiz_31814636_cbse_exam_guide")or die("Connection Failed");
    $boardName=$_POST['select_board'];
    $paper_name=$_POST['paper_name'];
    $sub=$_POST['select_subject'];
    $year=$_POST['select_year'];
    $sql="select *from College where CollegeName='{$boardName}'and CourseName='{$sub}' and paperName='{$paper_name}' and year='{$year}'";
 $result_=mysqli_query($conn,$sql) or die("Query failed");
 //   $row_=mysqli_fetch_assoc($result_) or die("No data found");
    $count=mysqli_num_rows($result_);
    if($count>0){
        $row_=mysqli_fetch_assoc($result_);
?>      <a href="CPYQ/<?php echo $row_['fileName']?>" >Click to open</a>;
    <?php }
    else{
       echo "Pdf not found if arrange any where please support <a href='contribution.php'>click here</a>";
   }
            } 
 
?>
            </div>
        </div>
    </div>
    