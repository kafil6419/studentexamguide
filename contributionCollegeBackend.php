<?php if(isset($_POST['sbmt_'])){
    require_once"header.php";
    
                        $name=$_POST['Cname'];
                        $board=$_POST['select_board'];
            
                        $sub=$_POST['select_subject'];
                        $course=$_POST['select_course'];
                        $year=$_POST['select_year'];
                       
                        $fileName=$_FILES['file_10']['name'];
                        $temp_name=$_FILES['file_10']['tmp_name'];
                        $file_type=$_FILES['file_10']['type'];
                        $allowed_extention = array('pdf','PDF');
                        $file_extension=pathinfo($fileName,PATHINFO_EXTENSION);
                       if(!in_array($file_extension,$allowed_extention)){
                           echo"Only pdf file is acceptable";
                           die();
                       }
                    
                    $str='';
                    for($x=0;$x<4;$x++){
                        $str.=$sub[$x];
                    }
                    $str1='';
                    for($x=0;$x<4;$x++){
                        $str1.=$course[$x];
                    }
                    $conn=mysqli_connect("sql100.epizy.com","epiz_31814636","QMU9Ss1Kq2","epiz_31814636_cbse_exam_guide")or die("Connection Failed");
               
                    $pId="CBT".$year[2].$year[3]."-".$str.$str1;
        
                    $sql="INSERT INTO contribution(paperId,Name,institutionName,class,subject,year,fileName) values('{$pId}','{$name}','{$board}','{$course}','{$sub}','{$year}','{$fileName}')";
                        mysqli_query($conn,$sql) or die("Query failed");
                    move_uploaded_file($temp_name,"CPYQ/".$fileName);
                    echo"
                    <div class='row d-flex justify-content-center my-5'>
                    <div class='col-md-5 '>
                        <center style='color:green;font-size:20px'>File successfully added<center>
                    </div>
                    <div class='row d-flex justify-content-center mt-3'>
                    <div class='col-md-5'>
                    <center><img src='Img/thankyou.jpg' width='300px' height='300px'></img></center>
                    </div>
                    </div>
                    ";
                    mysqli_close($conn);
                }
                ?>
                </div>
                