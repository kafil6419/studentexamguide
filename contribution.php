<?php 
$title="Contribution";
 require_once "header.php";
?>

<div class="row mt-4 d-flex justify-content-center">
    <div class="col-md-5 d-flex justify-content-center  border border-shadow">
        <p>Upload the PDF </p>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-md-5 border border-shadow">
    <form action="contribution.php" method="POST">
        <div class="form-group mt-4">
            <select name="select_class" id="slct1" class="form-control" required>
                    <option value="0">Select the Class</option>
                    <option value="8">8</option><option value="9">9</option><option value="10">10</option>
                    <option value="11">11</option><option value="12">12</option>
            </select>
                        <div class="form-control my-2">
                        <input id="send-button-first"type="submit"name="submit" value="Send" class="btn btn-sm btn-primary w-100" style="background-color: rgb(255, 51, 133);"> </input>
                      
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
            
            if($class==0){
                echo "<center class='text-danger'>Please select the class</center>";
            }
            else if($class<=10){
                echo"<div class='row'>
                <div class='col'>
                <p class='text-center ' style='font-size:150%'>class ".$class."</p>
                </div>
            </div>";
                ?>
               
                <form id="myform" action="ContBackend.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group ">
                        <input name="Cname" class="form-control" type="text" placeholder="Enter the name" required >
                    </div>
                    <div class="form-group">
                        <select name="select_board" id="slct1" class="form-control my-4" required>
                        <option value="select" >Select the Board</option>
                        <option>CBSE</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <select name="select_subject" class="form-control my-4" required>
                        <option value="select" >Select the subject</option>
                        <option>English </option>
                        <option>Hindi</option>
                        <option>Mathematics</option>
                        <option>Science</option>
                        <option>Social Science</option>
                        <option>Information Tech</option>
                        <option>Sanskrit</option>
                        <option>Urdu</option>
                     </select>
                    </div>
                    
                    <div class="form-group">
                        <select name="select_term" class="form-control my-4" required>
                        <option>Select the Term</option>
                        <option>I</option><option>II</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <select name="select_class" class="form-control my-4">
                        <option value="<?php echo $class?>" ><?php echo $class?></option>
                            </select>
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
                        <input name="file_10" type="file" class="form-control my-4"> 
                    </div>
                    <div class="form-group">
                        <input id="send-button" name="sbmt_" type="submit" class="btn btn-dark w-100" style="background-color: rgb(255, 51, 133);" onclick="myfunction()"></input>
                    </div>
            </form>
            
            <?php }
            else{
                echo"<div class='row'>
                <div class='col'>
                <p class='text-center ' style='font-size:150%'>class ".$class."</p>
                </div>
            </div>";
            ?>
            <form id="myform1"action="ContBackend.php" method="POST" enctype="multipart/form-data" >
                    <div class="form-group ">
                        <input name="Cname" class="form-control" type="text" placeholder="Enter the name" required>
                    </div>
                    <div class="form-group">
                        <select name="select_board" id="slct1" class="form-control my-4"required>
                        <option value="select" >Select the Board</option>
                        <option>CBSE</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <select name="select_subject" class="form-control my-4" required>
                        <option>Select the subject</option>
                        <option>Arabic </option>
                        <option>Bengali</option>
                        <option>French</option>
                        <option>German</option>
                        <option>Gujrati</option>
                        <option>Hindi Core</option>
                        <option>Hindi Elective</option>
                        <option>English Core</option>
                        <option>English Elective</option>
                        <option>Odia</option>
                        <option>Sanskrit Core</option>
                        <option>Sanskrit Elective</option>
                        <option>Urdu Core</option>
                        <option>Urdu Elective Tech</option>
                        <option>Accountancy</option>
                        <option>Biology</option>
                        <option>Bio Technology</option>
                        <option>Business Studies</option>
                        <option>Chemistry</option>
                        <option>Computer Science</option>
                        <option>Economics</option>
                        <option>Geography</option>
                        <option>History</option>
                        <option>Informaics Practics</option>
                        <option>Mathematics</option>
                        <option>Physical Education</option>
                        <option>Physics</option>
                        <option>Political Science</option>
                        <option>Psychology</option>
                        <option>Sociology</option>
                     </select>
                    </div>
                    
                    <div class="form-group">
                        <select name="select_term" class="form-control my-4" required>
                        <option>Select the Term</option>
                        <option>I</option><option>II</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <select name="select_class" class="form-control my-4" >
                        <option value="<?php echo $class?>" ><?php echo $class?></option>
                            </select>
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
                        <input name="file_10" type="file" class="form-control my-4"> 
                    </div>
                    <div class="form-group">
                        <input id="send-button" name="sbmt_" type="submit" class="btn btn-dark w-100" style="background-color: rgb(255, 51, 133);"  onclick="myfunction1()"></input>
                    </div>
            </form>
               
              <?php  }
        }?>
         
    </div>
</div>
<div class="row d-flex  my-3 bg-light justify-content-center ">
    <div class="col-md-5 text-center">
        <p class="lead">Thank you for your support</p>
    </div>
</div>
<div class="row d-flex bg-light justify-content-center ">
    <div class="col-md-11">
    <?php
     $conn=mysqli_connect("sql100.epizy.com","epiz_31814636","QMU9Ss1Kq2","epiz_31814636_cbse_exam_guide")or die("Connection Failed");
     $sql1= "SELECT *from pyq_12 where cName<>'NULL' ";
     $sql2= "SELECT *from pyq_11 where cName<>'NULL' ";
     $sql3= "SELECT *from pyq_10 where cName<>'NULL' ";
     $sql4= "SELECT *from pyq where cName<>'NULL' order by class asc";
     $result1 = mysqli_query($conn,$sql1)or die("Query failed");
     $result2 = mysqli_query($conn,$sql2)or die("Query failed");
     $result3 = mysqli_query($conn,$sql3)or die("Query failed");
     $result4 = mysqli_query($conn,$sql4)or die("Query failed");
        if(mysqli_num_rows($result1)==0 && mysqli_num_rows($result2)==0 && mysqli_num_rows($result3)==0 && mysqli_num_rows($result4)==0){
            echo"No record found";
            die();
        }
        ;
    $i=1;
     ?>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SNO</th>
      <th scope="col">Conributer's Name</th>
      <th scope="col">SchoolName</th>
      <th scope="col">Class</th>
      <th scope="col">Subject</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      while($row1=mysqli_fetch_assoc($result1)){?>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td class="text-break"><?php echo $row1['cName'];?></td>
      <td class="text-break"><?php echo $row1['BoardName'];?></td>
      <td class="text-break"><?php echo "12";?></td>
      <td class="text-break"><?php echo $row1['subject'];$i++;?></td>
    </tr>
    <?php }?>
    <?php 
      while($row2=mysqli_fetch_assoc($result2)){?>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td class="text-break"><?php echo $row2['cName'];?></td>
      <td class="text-break"><?php echo $row2['BoardName'];?></td>
      <td class="text-break"><?php echo "11"?></td>
      <td class="text-break"><?php echo $row2['subject'];$i++;?></td>
    </tr>
    <?php }?>
    <?php 
      while($row3=mysqli_fetch_assoc($result3)){?>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td class="text-break"><?php echo $row3['cName'];?></td>
      <td class="text-break"><?php echo $row3['BoardName'];?></td>
      <td class="text-break"><?php echo "10";?></td>
      <td class="text-break"><?php echo $row3['subject'];$i++;?></td>
    </tr>
    <?php }?>
    <?php 
      while($row4=mysqli_fetch_assoc($result4)){?>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td class="text-break"><?php echo $row4['cName'];?></td>
      <td class="text-break"><?php echo $row4['schoolName'];?></td>
      <td class="text-break"><?php echo $row4['class'];?></td>
      <td class="text-break"><?php echo $row4['subject'];$i++;?></td>
    </tr>
    <?php }?>
  </tbody>
</table>
    </div>
</div>
<div>

<script>

function myfunction1(){
    document.getElementsByTagName("select").required=true;
    document.getElementsByTagName("input").required=true;
        var y= document.getElementsByTagName("select").required;
   var x =  document.getElementsByTagName("input").required;
//  document.getElementById("demo").innerHTML = x;
 if(y==true){
document.getElementById("send-button-first").disabled=true;    
document.getElementById("send-button").disabled=true;
document.getElementById("myform1").submit(); 
//  }
}
function myfunction(){
        document.getElementsByTagName("select").required=true;
    document.getElementsByTagName("input").required=true;
        var y= document.getElementsByTagName("select").required;
   var x =  document.getElementsByTagName("input").required;
  if(y==true){
 document.getElementById("send-button-first").disabled=true;  
document.getElementById("send-button").disabled=true;
document.getElementById("myform").submit(); 
 // }
}
   </script>
   <?php require_once"footer.php";?>
</body>
   
</html>