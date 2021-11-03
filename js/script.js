// sidebare
let btn = document.querySelector("#btn");
let nav = document.querySelector(".sidebar");
let main = document.querySelector(".main");

btn.onclick = function(){
    nav.classList.toggle("active");
    main.classList.toggle("active");
}

// Date now
let today = new Date();
let date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate()+' '+today.getHours()+':'+today.getMinutes();

// get tasks not done
function  getTasks() {
    $.post('php/gettasks.php',{iduser:1},
    function (datagettasks) {
        document.getElementById("tasks").innerHTML = datagettasks;
    }
    )
}
// get done tasks
function  getDoneTasks() {
    $.post('php/getdonetasks.php',{iduser:1},
    function (datagetdonetasks) {
        document.getElementById("done_tasks").innerHTML = datagetdonetasks;
    }
    )
}
getTasks();
getDoneTasks();
// addTask
let task = document.querySelector("#task");
let addTask = document.querySelector(".addBtn");
let reponse = document.querySelector(".task_reponse");

addTask.onclick = function () {
    if(task.value != ""){
        reponse.classList.toggle("show");
        setTimeout(function(){reponse.classList.toggle("show");},1500);
        
         $.post("php/addtask.php",{tasktitle:task.value,tododatecreation:date},
         function (datq) {
            getTasks();
            getDoneTasks();
         }
         );
         task.value = "";
    }
}


// update task
function updateTask(taskid) {
    $.post('php/updatetask.php',{todoid:taskid},
    function (data) {
        getTasks();
        getDoneTasks();
    }
    )
}