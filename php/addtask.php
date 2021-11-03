<?php
$conn = mysqli_connect("localhost","root","","todoapp") or die(mysqli_error($conn));
if($conn){
    if(isset($_POST['tasktitle'])){

        $tasktitle      = trim(filter_var($_POST['tasktitle'],FILTER_SANITIZE_STRING));
        $datecreation      = trim(filter_var($_POST['tododatecreation'],FILTER_SANITIZE_STRING));
        


        $sql = "INSERT INTO todo(todotitle,tododatecreation,todotype,todouser) VALUES('$tasktitle','$datecreation','today',1)";
        $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        


    }
}
?>