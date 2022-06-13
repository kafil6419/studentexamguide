<?php
$id=$_GET['id'];
$class=$id[10].$id[11];
$conn=mysqli_connect("sql100.epizy.com","epiz_31814636","QMU9Ss1Kq2","epiz_31814636_cbse_exam_guide")or die("Connection Failed");

                    $sql_1="select *from pyq";
                    $sql_2="select *from pyq_10";
                    $sql_3="select *from pyq_11";
                    $sql_4="select *from pyq_12";
                    $sql_5="select *from college;";
                    $result_1=mysqli_query($conn,$sql_1);
                    $result_2=mysqli_query($conn,$sql_2);
                    $result_3=mysqli_query($conn,$sql_3);
                    $result_4=mysqli_query($conn,$sql_4);
                    $result_5=mysqli_query($conn,$sql_5);
                    $count=mysqli_num_rows($result_1)+mysqli_num_rows($result_2)+mysqli_num_rows($result_3)+mysqli_num_rows($result_4)+mysqli_num_rows($result_5);
                    $pId=$id;
                    $pId[0]='P';
                    $pId[1]='Y';
                    $pId[2]='Q';
                    $pId=$pId."-".$count;

 if($class==10){

    $sql="INSERT INTO pyq_10 (paperId,cName,BoardName,subject,Term,year,fileName) SELECT paperId,Name, institutionName,subject,Term,year,fileName FROM contribution where paperId='{$id}'";
    $sq1_="update pyq_10 set paperId='{$pId}' where paperId='{$id}'";
    mysqli_query($conn,$sql) or die("connection failed pyq_10");
    mysqli_query($conn,$sq1_);
    
    $sql1="delete from contribution where paperid='{$id}'";
    mysqli_query($conn,$sql1);
    mysqli_close($conn);
    header("Location: home.php");
}
else if($class==11){

    $sql="INSERT INTO pyq_11 (paperId,cName,BoardName,subject,Term,year,fileName) SELECT  paperId,Name,institutionName,subject,Term,year,fileName FROM contribution where paperId='{$id}'";
    $sq1_="update pyq_11 set paperId='{$pId}' where paperId='{$id}'";
mysqli_query($conn,$sql) or die("connection failed pyq_11");
    mysqli_query($conn,$sq1_);
$sql1="delete from contribution where paperid='{$id}'";
mysqli_query($conn,$sql1);
mysqli_close($conn);
header("Location: home.php");

}
else if($class==12){
    
    $sql="INSERT INTO pyq_12 (paperId,cName,BoardName,subject,Term,year,fileName) SELECT paperId,Name,institutionName,subject,Term,year,fileName FROM contribution where paperId='{$id}'";
    $sq1_="update pyq_12 set paperId='{$pId}' where paperId='{$id}'";
    mysqli_query($conn,$sql) or die("connection failed pyq_12");
    mysqli_query($conn,$sq1_);
    
    $sql1="delete from contribution where paperid='{$id}'";
    mysqli_query($conn,$sql1);
    mysqli_close($conn);
    header("Location: home.php");


}
else if($class<10 && $class>0) {
    
    $sql="INSERT INTO pyq (paperId,cName,schoolName,class,subject,Term,year,fileName) SELECT paperId,Name,institutionName,class,subject,Term,year,fileName FROM contribution where paperId='{$id}'";
    $sq1_="update pyq set paperId='{$pId}' where paperId='{$id}'";
    mysqli_query($conn,$sql) or die("connection failed pyq");
    mysqli_query($conn,$sq1_);
    
    $sql1="delete from contribution where paperid='{$id}'";
    mysqli_query($conn,$sql1);
    mysqli_close($conn);
    header("Location: home.php");
    }
    else{
        $sql="insert into College(paperId,cName,CollegeName,CourseName,paperName,year,fileName) select paperId,Name,institutionName,class,subject,year,fileName from contribution where paperid='{$id}'";
        $sq1_="update College set paperId='{$pId}' where paperId='{$id}'";
        mysqli_query($conn,$sql) or die("connection failed college");
    mysqli_query($conn,$sq1_);
    
    $sql1="delete from contribution where paperid='{$id}'";
    mysqli_query($conn,$sql1);
    mysqli_close($conn);
    header("Location: home.php");
    }

?>
