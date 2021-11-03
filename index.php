<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bx-label'></i>
                <div class="logo_name">TodoApp</div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                    <i class='bx bx-search' ></i>
                    <input type="text" placeholder="search...">
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-sun' ></i>
                    <span class="links_name">Today</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-task'></i>
                    <span class="links_name">Tasks</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-star' ></i>
                    <span class="links_name">Important</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">File manager</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Order</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-heart' ></i>
                    <span class="links_name">Saved</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog' ></i>
                    <span class="links_name">Setting</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-plus' ></i>
                    <span class="links_name">Add </span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                    <i class='bx bx-search' ></i>
                    <input type="text" placeholder="search...">
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-sun' ></i>
                    <span class="links_name">Today</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-task'></i>
                    <span class="links_name">Tasks</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-star' ></i>
                    <span class="links_name">Important</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">File manager</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Order</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-heart' ></i>
                    <span class="links_name">Saved</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog' ></i>
                    <span class="links_name">Setting</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-plus' ></i>
                    <span class="links_name">Add </span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="images/user.jpg" alt="">
                    <div class="name_job">
                        <div class="name">Rada Saad</div>
                        <div class="job">Web Developer</div>
                    </div>
                </div>
                <i class='bx bx-log-in'id="log_out"></i>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="cover">
            <i class='bx bx-label'></i>
            <div class="logo_name">TodoApp</div>
        </div>
        <div class="todo">
            <div class="todo_header">
                Today
            </div>
            <div class="add_task">
                <i class='bx bx-plus' ></i>
                <input type="text" placeholder="Add task..." id="task">
                <button class="addBtn">Add</button>
            </div>
            <div class="todo_list_group">
                <div class="todo_list_title">
                    Created Tasks
                </div>
                <div id="tasks">

                </div>
            </div>
            <div class="todo_list_group done">
                <div class="todo_list_title">
                    Accomplished Tasks
                </div>
                <div id="done_tasks">

                </div>
            </div>
            
        </div>
        <div class="task_reponse">
        <i class='bx bx-check' ></i>
            Task added
        </div>
    </div>
<script src="js/script.js"></script>
</body>
</html>