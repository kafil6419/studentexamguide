<?php 
$title="Contribution (College)";
 require_once "header.php";
 $conn=mysqli_connect("sql100.epizy.com","epiz_31814636","QMU9Ss1Kq2","epiz_31814636_cbse_exam_guide")or die("Connection Failed");
 if(!$conn){
     echo "can't connect database";
     exit;
 }
 $sql="select distinct(CollegeName) from College order by CollegeName";
  $result1=mysqli_query($conn,$sql) or die("Query failed 1"); 
?>
<div class="row mt-4 d-flex justify-content-center">
    <div class="col-md-5 d-flex justify-content-center  border border-shadow">
        <p>Upload the PDF </p>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-md-5 border border-shadow">
    <form action="contribution_college.php" method="POST">
        <div class="form-group mt-4">
            <select name="select_class" id="slct1" class="form-control" required>
                    <option value='0'>Select the Institution/college</option>
                    <?php while($row=mysqli_fetch_assoc($result1))
                    echo "<option>".$row['CollegeName'];?></option>
                    <option value="">Other</option>                    
            </select>
                        <div class="form-control my-2">
                        <input id="send-button-first"type="submit" name="submit" value="Send" class="btn btn-sm btn-primary w-100" style="background-color: rgb(255, 51, 133);"> </input>
                      
                        </div>
        </div> 
</form>  
</div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-md-5 border border-shadow">
        
        <?php 
        if(isset($_POST['submit'])){
            $class=$_POST['select_class'];
            
            if($class=='0'){
                echo "<center class='text-danger'>Please select the class</center>";
                die();
            }
             else if($class==""){
                echo"<div class='row'>
                <div class='col'>
                <p class='text-center ' style='font-size:150%'>Other</p>
                </div>
            </div>";
            
             }
             else{
                 echo"<div class='row'>
                <div class='col'>
                <p class='text-center' style='font-size:150%'>".$class."</p>
                </div>
            </div>";
                 }               
            ?> 
            <form id="myform" action="contributionCollegeBackend.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group ">
                        <input name="Cname" class="form-control" type="text" placeholder="Enter the name" required >
                    </div>
                    <div class="form-group">
                    <input placeholder="Enter the college name" type="text" name="select_board" value="<?php echo $class ?>" class="form-control my-4" >
                    </div> 
                    <div class="form-group">
                    <input type="text" placeholder="Enter the Course Name" name="select_course" class="form-control my-4">
                       </div>
                    <div class="form-group">
                    <input type="text" placeholder="Enter the paper name" name="select_subject" class="form-control my-4" required>
                    </div>
                    
                    <div class="form-group">
                        <select class="form-control my-4" name="select_year" id="" required>
                            <option>Select the year</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>                             
                            <option>2018</option>
                            <option>2017</option>
                            <option>2016</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="file_10" class="form-control my-4" type="file" class="form-control my-4"> 
                    </div>
                    <div class="form-group">
                        <input id="send-button" class="form-control my-4" name="sbmt_" type="submit" class="btn btn-dark w-100" style="background-color: rgb(255, 51, 133);"></input>
                    </div>
            </form> 
   <?php        
}
              ?>
        </div>
        </div>