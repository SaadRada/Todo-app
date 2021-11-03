<?php
    $conn = mysqli_connect("localhost","root","","todoapp") or die(mysqli_error($conn));
    if($conn){
        $reponse = "";
        if(isset($_POST["add"])){
            if(empty($_POST["name"]) OR empty($_POST["mail"]) OR empty($_POST["pass"]) OR empty($_POST["cpass"]) ){
                $reponse = "<div class=danger>All fields is required!</div>";
            }
            else{
                $reponse = 1;
                $name = trim(filter_var($_POST['name'],FILTER_SANITIZE_STRING));
                $mail = trim(filter_var($_POST['mail'],FILTER_SANITIZE_STRING));
                $pass = trim(filter_var($_POST['pass'],FILTER_SANITIZE_STRING));
                $cpass = trim(filter_var($_POST['cpass'],FILTER_SANITIZE_STRING));
                $date = date("Y-m-d H:i:s");
                if($pass != $cpass){
                    $reponse = "<div class=danger>password not valide!</div>";
                }
                else{
                    $check_mail = "SELECT * FROM users WHERE useremail = '$mail'";
                    $res_check_mail = mysqli_query($conn,$check_mail) or die(mysqli_error($conn));
                    if(mysqli_num_rows($res_check_mail)>0){
                        $reponse = "<div class=danger>This email is already used</div>";
                    }
                    else{
                        $create_new_user = "INSERT INTO users (userfullname,useremail,userpassword,userdateacc) 
                                            VALUES('$name','$mail','$pass','$date')";
                        $res_create_user = mysqli_query($conn,$create_new_user) or die(mysqli_error($conn));
                        if($res_create_user>0){
                            $reponse = "<div class=success>Account has ben created</div>";
                        }   
                        else{
                            $reponse = "<div class=danger>Something is wrong</div>";
                        }
                    }
                }
            }
        }
    }
    else{
        $reponse = "<div class=danger>cannot connect to DB</div>";
    }
    function getLocationInfoByIp(){
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = @$_SERVER['REMOTE_ADDR'];
        $result  = array('country'=>'', 'city'=>'');
        if(filter_var($client, FILTER_VALIDATE_IP)){
            $ip = $client;
        }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
            $ip = $forward;
        }else{
            $ip = $remote;
        }
        $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
        if($ip_data && $ip_data->geoplugin_countryName != null){
            $result['country'] = $ip_data->geoplugin_countryCode;
            $result['city'] = $ip_data->geoplugin_city;
        }
        echo $ip_data->geoplugin_countryCode;
        return $result;
    }
     getLocationInfoByIp();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="content">
                <h1 class="title">Welcome to Todo App</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem numquam distinctio, dolore eius illo in earum, nisi aut officia ullam, libero assumenda possimus! Magnam cum explicabo voluptas esse, a ad!</p>
            </div>
        </div>
        <div class="login">
            <span class="logo">
                <i class='bx bx-label'></i>
                Todo App
            </span>
            <h1>Create your account for free</h1>
            <form action="login.php" method="POST">
                                <div class="input-group">
                                    <i class='bx bxs-user'></i>
                                    <input type="text" name="name" placeholder="user Name">
                                </div>
                                <div class="input-group">
                                    <i class='bx bx-mail-send'></i>
                                    <input type="email" name="mail" placeholder="email">
                                </div>
                                <div class="input-group">
                                    <i class='bx bxs-lock-alt'></i>
                                    <input type="password" name="pass" placeholder="password">
                                </div>
                                <div class="input-group">
                                    <i class='bx bxs-lock-alt'></i>
                                    <input type="password" name="cpass" placeholder="confirm password">
                                </div>
                                <?php echo $reponse; ?>
                                
                                <button type="submit" class="btn" name="add">Create Account</button>
                                <p>OR</p>
                                <button type="submit" class="btn github">
                                    <i class='bx bxl-github'></i>
                                    Login with github
                                </button>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore.</p>
            </form>
        </div>
    </main>
</body>
</html>