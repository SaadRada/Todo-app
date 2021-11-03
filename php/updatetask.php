<?php
$conn = mysqli_connect("localhost","root","","todoapp") or die(mysqli_error($conn));
if($conn){
    if(isset($_POST['todoid'])){

        $todoid    = trim(filter_var($_POST['todoid'],FILTER_SANITIZE_STRING));
        


        $sql = "UPDATE todo SET todoprogress=1 WHERE todoid=$todoid AND todouser=1";
        $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        


    }
}
?>