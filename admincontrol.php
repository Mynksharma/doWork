<?php 
 require 'common.php'; 
if(isset($_GET['marks'])){
    $sql="insert into testscore(perid,date,testsub,marks,totalmarks) values('".$_GET['perid']."','".$_GET['date']."','".$_GET['testsub']."','".$_GET['marks']."','".$_GET['totalmarks']."')";

}
elseif(isset($_GET['adddiary'])){
    $sql="insert into diary(perid,date,homework) values('".$_GET['perid']."','".$_GET['date']."','".$_GET['adddiary']."')";
    }
elseif(isset($_GET['addrem'])){
    $sql="insert into reminder(perid,rem) values('".$_GET['perid']."','".$_GET['addrem']."')";
}
elseif(isset($_GET['del'])){
    $sql="delete from reminder where perid='".$_GET['del']."'";
}
mysqli_query($con,$sql);
header('location:admin.php');
?>