<?php if(isset($_POST['sbmt_'])){
    require_once"header.php";
    
                        $name=$_POST['Cname'];
                        $board=$_POST['select_board'];
                        $sub=$_POST['select_subject'];
                        $term=$_POST['select_term'];
                        $year=$_POST['select_year'];
                        $class=$_POST['select_class'];
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
                    $conn=mysqli_connect("sql100.epizy.com","epiz_31814636","QMU9Ss1Kq2","epiz_31814636_cbse_exam_guide")or die("Connection Failed");
                    $sql_1="select *from pyq";
                    $sql_2="select *from pyq_10";
                    $sql_3="select *from pyq_11";
                    $sql_4="select *from pyq_12";
                    $result_1=mysqli_query($conn,$sql_1);
                    $result_2=mysqli_query($conn,$sql_2);
                    $result_3=mysqli_query($conn,$sql_3);
                    $result_4=mysqli_query($conn,$sql_4);
                    $count=mysqli_num_rows($result_1)+mysqli_num_rows($result_2)+mysqli_num_rows($result_3)+mysqli_num_rows($result_4);
                    $pId="CBT".$year[2].$year[3]."-".$str.$class.$term;
        
                    $sql="INSERT INTO contribution(paperId,Name,institutionName,class,subject,Term,year,fileName) values('{$pId}','{$name}','{$board}','{$class}','{$sub}','{$term}','{$year}','{$fileName}')";
                        mysqli_query($conn,$sql) or die("Query failed");
                    move_uploaded_file($temp_name,"PYQ/".$fileName);
                    echo"
                    <div class='row d-flex justify-content-center my-5'>
                    <div class='col-md-5 '>
                        <center style='color:green;font-size:20px'>File successfully added<center>
                        <br>After verified by Admin your pdf will reflect.</br>
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
                