<?php include('header.php')?>
<div class="container">
    <div class="row py-3">
        <div class="col mx-auto" >
            <form action="Add file.php" class="mx-auto"style="width:60%" method="POST" enctype="multipart/form-data">
            
                    <div class="form-group">
                    <input name="paperCode" type="text" class="form-control" placeholder="Enter the PaperCode" required>    
                    <select name="slct1" id="slct1" class="form-control my-4" onchange="dept('slct1','slct2','slct3')" required>
                            <option value="select">Select the department</option>
                          <!--  <option value="appliedart">Department of Applied Art</option>
                            <option value="appliedscience">Department of Applied Sciences & Humanities</option>
                            <option value="arabic">Department of ArabicDepartment of Architecture</option>
                            <option value="artedu">Department of Art Education</option>
                            <option value="arthist">Department of Art History & Art Appreciation</option>
                            <option value="biosci">Department of Biosciences</option>
                            <option value="biotech">Department of Biotechnology</option>
                            <option value="chem">Department of Chemistry</option>
                            <option value="civil">Department of Civil Engineering</option>
                            <option value="commerce">Department of Commerce and Business Studies</option>
                            <option value="computerengg">Department of Computer Engineering</option> -->
                            <option value="DCS">Department of Computer Science</option>
                         <!-- <option value="eco">Department of Economics</option>
                            <option value="edustd">Department of Educational Studies</option>
                            <option value="elecengg">Department of Electrical Engineering</option>
                            <option value="commengg">Department of Electronics & Communication Engineering</option>
                            <option value="eng">Department of English</option>
                            <option value="geo">Department of Geography</option>
                            <option value="graphic">Department of Graphic Art</option>
                            <option value="hin">Department of Hindi</option>
                            <option value="hiscult">Department of History and Culture</option>
                            <option value="islamic">Department of Islamic Studies</option>-->
                            <option value="DM">Department of Mathematics</option>
                        <!--    <option value="mecheng">Department of Mechanical Engineering</option>
                            <option value="painting">Department of Painting</option>
                            <option value="persion">Department of Persian</option>
                            <option value="phy">Department of Physics</option>
                            <option value="polsci">Department of Political Science</option>
                            <option value="psychology">Department of Psychology</option>
                            <option value="sansk">Department of Sanskrit</option>
                            <option value="sculpt">Department of Sculpture</option>
                            <option value="sw">Department of Social Work</option>
                            <option value="socialogy">Department of Sociology</option>
                            <option value="teachertraining">Department of Teacher Training & Non-formal Education</option>
                            <option value="tourism">Department of Tourism and Hospitality Management</option>
                            <option value="urdu">Department of Urdu</option>
                            <option value="polytech">University Polytechnic</option>-->
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <select class="form-control my-4" name="slct2" id="slct2" onchange="course('slct2','slct3')"required>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control my-4" name="slct3" id="slct3" required>
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control my-4" name="year" id="" required>
                            <option>Select the year</option>
                           <option>2021</option>
                           <option>2020</option>
                           <option>2019</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <input placeholder="Select File"name="file" type="file" class="form-control my-2" required>
                    <input type="submit" name="submit" class="form-control bg-primary text-light my-3">        
                </div>
            </form>
            <div class="my-3 ">
            <?php
         //   if(isset($_POST['search'])){
         //       $dept=$_POST['slct1'];
         //       $course=$_POST['slct2'];
         //       $paper=$_POST['slct3'];
         //       echo$dept." ".$course." ".$paper." ";
         //       $conn=mysqli_connect("DESKTOP-32I995G","kafil","Learnsql","studymaterial")or die("Connection Failed");
//
         //       $sql= "SELECT *from materials where deptCode='{$dept}' and courseCode='{$course}' and paperName='{$paper}'";
         //       $result = mysqli_query($conn,$sql)or die("Query failed");
         //       $row=mysqli_fetch_assoc($result);
//
         //       if(mysqli_num_rows($result)==0){
         //           echo"<span class='text-danger'>Not Found</span>";
         //           echo"<br>";
         //           echo"If you found from another student please contribute.";
         //       }
         //       else{
         //       $filename=$row['fileName'];
         //       echo"<span class='text-success'>Click to download</span>";echo"<a class='px-2' href='$filename'>";echo $filename; echo"</a>";
         //       }
         //   }?>
            
            </div>
            </div>
        </div>
    </div>
    <script>
        function dept(s1,s2,s3){
            var s1=document.getElementById(s1);
            var s2=document.getElementById(s2);
            var s3=document.getElementById(s3);
            s2.innerHTML="";
            s3.innerHTML="";
//            if(s1.value == "appliedart"){
//                var optionArray=['select|Select the course','mfa|M.F.A.(Applied Art)','bfa|B.F.A. (Applied Art)','cert1|Certificate in Photography (Self-financed/part-time)','cert2|Certificate in Calligraphy (Self-financed/part-time)','cert3|Certificate in Commercial Art (Self-financed/part-time)'];
//            }
//           else if(s1.value=='appliedscience'){
//            var optionArray=['computational|M.Tech. in Computational Mathematics (Self-Finance)','energysci|M.Tech. in Energy Sciences (Self-Finance)','electronics|M.Sc.(Electronics)','appliedsci|Ph.D.(Applied Science & Humanities)'];
//          
//           }
//           else if(s1.value=="arabic"){
//            var optionArray=['cert_arabic|Certificate in Modern Arabic Language and Translation','dipl_arabic|Diploma in Modern Arabic Language and Translation','advdiploma_arabic|Advanced Diploma in Modern Arabic Language and Translation','ba_arabic|B.A.(Hons.)(Arabic)','ma_arabic|M.A.(Arabic)','mphil_arabic|M.Phil/Ph.D.(Arabic)'];
//           }
//           else if(s1.value=="artedu"){
//            var optionArray=[];
//           }
//           else if(s1.value=="arthist"){
//            var optionArray=[];
//           }
//           else if(s1.value=="biosci"){
//            var optionArray=[];
//           }
//           else if(s1.value=="biotech"){
//            var optionArray=[];
//           }
//           else if(s1.value=="chem"){
//            var optionArray=[];
//            }
//            else if(s1.value=="civil"){
//            var optionArray=[];     
//        }
//        else if(s1.value=="commerce"){
//
//        }
//        else if(s1.value=="computerengg"){
//    
//        }
//        else if(s1.value=="compsci"){
//            var optionArray=[];
//           }
//           else if(s1.value=="eco"){
//            var optionArray=[];
//           }
//           else if(s1.value=="edustd"){
//            var optionArray=[];
//           }
//           else if(s1.value=="elecengg"){
//            var optionArray=[];
//           }
//           else if(s1.value=="commengg"){
//            var optionArray=[];
//            }
//            else if(s1.value=="eng"){
//            var optionArray=[];     
//            }
//        else if(s1.value=="geo"){
//
//        }
//        else if(s1.value=="graphic"){
//    
//        }
//        else if(s1.value=="computerengg"){
//    
//        }
         if(s1.value=="DCS"){
            var optionArray=['select|Select the course','pgdca|PG Diploma in Computer Applications','mca|M.C.A.(Master of Computer Application)','mscBioinfor|M.Sc.(Bioinformatics) (Self-financed, Evening)','phdCS|M.Phil/Ph.D.(Computer Science)'];
           }
//           else if(s1.value=="eco"){
//            var optionArray=[];
//           }
//           else if(s1.value=="edustd"){
//            var optionArray=[];
//           }
//           else if(s1.value=="elecengg"){
//            var optionArray=[];
//           }
//           else if(s1.value=="commengg"){
//            var optionArray=[];
//            }
//            else if(s1.value=="eng"){
//            var optionArray=[];     
//            }
//        else if(s1.value=="geo"){
//
//        }
//        else if(s1.value=="graphic"){
//    
//        }else if(s1.value=="hin"){
//    
//}
//else if(s1.value=="hiscult"){
//    var optionArray=[];
//   }
//   else if(s1.value=="islamic"){
//    var optionArray=[];
//   }
   else if(s1.value=="DM"){
   var optionArray=['select|Select the course','BHM|B.Sc.(Hons.) (Mathematics)','BHA|B.Sc.(Hons.) (Applied Mathematics)','MHC|M.Sc.(Mathematics with Computer Science)','mscComp|M.Sc.Tech.(Industrial Mathematics With Computer Application) (S.F.)','MHMS|M.A./M.Sc.(Mathematics) (Self-financed, Evening)','phdMath|M.Phil/Ph.D.(Mathematics)'];
   }
//   else if(s1.value=="mecheng"){
//    var optionArray=[];
//   }
//   else if(s1.value=="painting"){
//    var optionArray=[];
//    }
//    else if(s1.value=="persion"){
//    var optionArray=[];     
//    }
//else if(s1.value=="phy"){
//
//}
//else if(s1.value=="polsci"){
//
//}
//else if(s1.value=="psychology"){
//    var optionArray=[];
//   }
//   else if(s1.value=="sansk"){
//    var optionArray=[];
//   }
//   else if(s1.value=="sculpt"){
//    var optionArray=[];
//   }
//   else if(s1.value=="sw"){
//    var optionArray=[];
//    }
//    else if(s1.value=="socialogy"){
//    var optionArray=[];     
//    }
//else if(s1.value=="teachertraining"){
//
//}
//else if(s1.value=="tourism"){
//
//}
//else if(s1.value=="urdu"){
//
//}
//else if(s1.value=="polytech"){
//
//}
            for(var option in optionArray){
                var pair = optionArray[option].split("|");
                var newoption = document.createElement("option");
                newoption.value = pair[0];
                newoption.innerHTML=pair[1];
                s2.options.add(newoption);
            }
            
        }

    function course(s2,s3){
        var s2=document.getElementById(s2);
        var s3=document.getElementById(s3);
        s3.innerHTML="";
        if(s2.value=="mca"){
            var subjArray=['Select the Paper','Digital Computer Design','Discrete Mathematical Structures','Algorithmic Problem Solving ','Programming in C','Computer Architecture','Theory of Computation','Operating Systems','Object Oriented Programming in C++','Database Management Systems','Software Engineering','Data Structures and Program Design','Analysis and Design of Algorithms','Artificial Intelligence','Computer Graphics','Programming in Java','Data Communication and Networks','Compiler Design and System Software','Information Security','Machine Learning and Soft Computing'];
        }
        else if(s2.value=="pgdca"){
            var subjArray=['Select the Paper','Problem Solving using C','Applied Operating Systems','Multimedia Applications','Information Systems','Visual Programming','Network Technologies','Database Management Systems'];
        }
        else if(s2.value=="BHM"){
            var subjArray=['select|Select the Paper','Calculus','Analytical Geometry','Set Theory and Number Theory','Computer Fundamentals','Differential Equations','Statistical Techniques','Programming in C (P)','Econometrics','PDE and System of ODE','Numerical Methods','Group Theory','Information Security','Object Oriented Programming','Latex & Web Designing','Computer Graphics','Real Analysis','Ring Theory',' Linear Programming','Mathematical Modelling','Data Structures (P)','Graph Theory','Fuzzy Sets and Logics','Riemann Integration and Series of Fuctions','Multivariate Calculus','Metrics Spaces','Linear Algebra','Modelling and Simulation','Discrete Mathematics','Mathematical Finance','Dynamical Systems','Integral Equations and Calculus of Variations','Complex Analysis','Differential Geometry','Mechanics','Boolean Algebra and Automata Theory','Bio Mathematics','Industrial Mathematics','Applications of Algebra'];    
        }
        else if(s2.value=="BHA"){
            var subjArray=['Select the Paper','Calculus','Analytical Geometry','Set Theory and Number Theory','Computer Fundamentals','Differential Equations','Statistical Techniques','Programming in C (P)','Econometrics','PDE and System of ODE','Numerical Methods','Group Theory','Information Security','Object Oriented Programming','Latex & Web Designing','Computer Graphics','Real Analysis','Ring Theory',' Linear Programming','Mathematical Modelling','Data Structures (P)','Graph Theory','Fuzzy Sets and Logics','Riemann Integration and Series of Fuctions','Multivariate Calculus','Integral Transforms & Applications','Linear Algebra','Modelling and Simulation','Discrete Mathematics','Mathematical Finance','Dynamical Systems','Integral Equations and Calculus of Variations','Complex Analysis','Geometry of Curves and Surfaces','Mechanics','Metric Spaces','Bio Mathematics','Industrial Mathematics','Coding Theory'];    
        }
        else if(s2.value=="MHMS"){
            var subjArray=['Select the Paper','Analysis','Linear Algebra','Mechanics','Topology','Theory of Differential Equations','Introduction to Computers and Programming Fundamentals','Functional Analysis','Complex Analysis','Lattices and Algebras','Fluid Dynamics','Differential Geometry','Operating Systems & Object Oriented Programming']
        }
        for(var option in subjArray){
           // var twin = subjArray[option].split("|");
            var newtwin = document.createElement("option");
          //  newtwin.value=twin[0];
            newtwin.innerHTML=subjArray[option];
            s3.options.add(newtwin);
        }
       // for(var option in subjArray){
       //         var pair = subjArray[option].split("|");
       //         var newoption = document.createElement("option");
       //         newoption.value = pair[0];
       //         newoption.innerHTML=pair[1];
       //         s3.options.add(newoption);
       //     }
    }
    </script> 
        </form>
        </div>

        </div>
    </div>
</div>
<?php
    if(isset($_POST['submit'])){
        $paperCode=$_POST['paperCode'];
        $paperName=$_POST['slct3'];
        $deptName=$_POST['slct1'];
        $course=$_POST['slct2'];
        $year=$_POST['year'];
        $fileName=$_FILES['file']['name'];
        $temp_name=$_FILES['file']['tmp_name'];
        $file_type=$_FILES['file']['type'];
        $allowed_extention = array('pdf');
        $file_extension=pathinfo($fileName,PATHINFO_EXTENSION);
       if(!in_array($file_extension,$allowed_extention)){
           echo"Only pdf file is acceptable";
           die();
       }
       if(file_exists("../JmiNotes/".$fileName)){
           echo"file already exist";
       }
       else{
        $conn=mysqli_connect("sql310.epizy.com","epiz_30641663","XTzawtv0ans","epiz_30641663_studymaterial")or die("Connection Failed");
        $sql="INSERT INTO materials values('{$paperCode}','{$paperName}','{$deptName}','{$course}','{$year}','{$fileName}')";
            mysqli_query($conn,$sql) or die("Query failed");
        move_uploaded_file($temp_name,"../JmiNotes/".$fileName);
        echo"File successfully added";
        echo'<a href="home.php">Click here go to home page</a>';   
        // header("Location: https://localhost/jamia/Admin/home.php");
        mysqli_close($conn);
       }
    }
?>
</body>
</html>