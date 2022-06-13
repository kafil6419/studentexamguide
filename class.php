<?php  
$title="Class 1 to 9";
 require_once "header.php";
$conn=mysqli_connect("sql100.epizy.com","epiz_31814636","QMU9Ss1Kq2","epiz_31814636_cbse_exam_guide")or die("Connection Failed");
 if(!$conn){
     echo "can't connect database".mysqli_connect_error($conn);
     exit;
 }
 $sql="select distinct(schoolName)from pyq order by schoolName asc"; 
 $sql1="select distinct(class) from pyq order by class asc;";
 $sql2="select distinct(subject) from pyq order by subject asc";
 $sql3="select distinct(year) from pyq order by year";
$result3=mysqli_query($conn,$sql3) or die("Query failed 3");
 $result2=mysqli_query($conn,$sql2) or die("Query failed 2");
 $result1=mysqli_query($conn,$sql1) or die("Query failed 1");
    $result=mysqli_query($conn,$sql) ;

 ?>


        <div class="row ">
        <div class="col text-center">
      
       <!-- <img class="my-2" src="Img/cbselogo.jpg" height="60px" width="60px">-->
          <span class="px-1" id="jamiaheader">Previous Year Question Paper 1 to 9 </span>
  
        </div>
        </div>
        <div class="row m d-flex justify-content-center" id="width_size" >
            <div class="col-md-5  text-center border shadow heightDiv" style="height:450px">
                <p class="text-dark lead text-center text_size"><bold>Select your Requirement</bold></p>
                
                <form action="class.php" method="POST">
                    <div class="form-group">
                        <select name="select_school" id="slct1" class="form-control" required>
                        <option value="select" >Select the school</option>
                     <?php while($row=mysqli_fetch_assoc($result))
                            echo "<option>".$row['schoolName'];?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="select_class" class="form-control my-4">
                        <option value="select" >Select the class</option>
                        <?php while($row1=mysqli_fetch_assoc($result1))
                            echo "<option>".$row1['class'];?></option>
                            </select>
                    </div>
                    <div class="form-group">
                        <select name="select_subject" class="form-control my-4">
                        <option value="select" >Select the subject</option>
                        <?php while($row1=mysqli_fetch_assoc($result2))
                            echo "<option>".$row1['subject'];?></option>
                            </select>
                    </div>
                    <div class="form-group">
                        <select name="select_term" class="form-control my-4">
                        <option value="select" >Select the Term</option>
                        <option value="I">I</option><option value="II">II</option>
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
            <?php
    if(isset($_POST['sbt'])){
    $schoolName=$_POST['select_school'];
    $class=$_POST['select_class'];
    $term=$_POST['select_term'];
    $sub=$_POST['select_subject'];
    $year=$_POST['select_year'];
    $sql_="select *from pyq where schoolName='{$schoolName}' and class='{$class}' and Term='{$term}' and year='{$year}' and subject='{$sub}'";
 $result_=mysqli_query($conn,$sql_);
 $count=mysqli_num_rows($result_);
    if($count>0){
        $row_=mysqli_fetch_assoc($result_);
?>      <a href="PYQ/<?php echo $row_['fileName'];?>">Click to open</a>;
    <?php }
    else{
      echo"Pdf not found";
      //  echo "Pdf not found if arrange any where please support <a href='contribution.php'>click here</a>";
    }
        }
?>
            </div>
        </div>
    </div>
     <?php require_once"footer.php";?>
</body>
</html>