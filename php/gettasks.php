<?php
$conn = mysqli_connect("localhost","root","","todoapp") or die(mysqli_error($conn));
if($conn){
    if(isset($_POST['iduser'])){

        $iduser = $_POST['iduser'];

        $sql = "SELECT * FROM todo WHERE todouser=$iduser AND todoprogress=0 ORDER BY todoid DESC";
        $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        if(mysqli_num_rows($res)>0){
            while($data = mysqli_fetch_assoc($res)){
                ?>
                    <div class="todo_list">
                    <div class="check">
                        <input type="checkbox" onclick="updateTask(<?php echo $data['todoid'] ?>)">
                    </div>
                    <div class="title">
                    <?php echo $data['todotitle'] ?>
                    </div>
                    <div class="time">
                        <i class="bx bxs-calendar" ></i>
                        <?php echo $data['tododatecreation'] ?>
                    </div> 
                    </div>
                <?php
            }
        }
        else{
            echo '<div class="noTask">No task Created</div>';
        }


    }
}
?>
