<?php 
$title="College";
 require_once "header.php";
$conn=mysqli_connect("sql100.epizy.com","epiz_31814636","QMU9Ss1Kq2","epiz_31814636_cbse_exam_guide")or die("Connection Failed");
 if(!$conn){
     echo "can't connect database".mysqli_connect_error($conn);
     exit;
 }
 $sql1="select distinct(CollegeName)from College order by CollegeName asc"; 
 $sq4="select distinct(CourseName)from College order by CourseName asc";
 $sql2="select distinct(paperName) from College order by paperName asc";
 $sql3="select distinct(year) from College";
$result3=mysqli_query($conn,$sql3) or die("Query failed 3");
 $result2=mysqli_query($conn,$sql2) or die("Query failed 2");
 $result1=mysqli_query($conn,$sql1) or die("Query failed 1");   
$result4=mysqli_query($conn,$sq4) or die("Query failed 4");
 ?>
        <div class="row ">
        <div class="col text-center">
      
    
          <span class="" id="jamiaheader">Previous Year Question Paper  </span>
  
        </div>
        </div>
        <div class="row m d-flex justify-content-center"  >
            <div class="col-md-5  text-center border shadow heightDiv" style="height:240px">
                <p class="text-dark lead text-center text_size"><bold>Select your Requirement</bold></p>
                
                <form action="collegedroplist.php" method="POST">
                    <div class="form-group">
                        <select name="select_board" id="slct1" class="form-control" required>
                        <option value="select" >Select the College Name</option>
                     <?php while($row=mysqli_fetch_assoc($result1))
                            echo "<option>".$row['CollegeName'];?></option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <select name="select_subject" class="form-control my-4" required>
                        <option value="select" >Select the Course</option>
                        <?php while($row1=mysqli_fetch_assoc($result4))
                            echo "<option>".$row1['CourseName'];?></option>
                            </select>
                    </div>
                    <div class="form-group">
                        <input name="sbt1" type="submit" value="Go" class="btn btn-primary w-100"></input>
                    </div>
                </form>
                </div>
            </div>
               
</body>
</html>