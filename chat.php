<?php
include("./connection.php");
error_reporting(0);

$room_id = $_GET['room_id'];


?>


<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Cover Template · Bootstrap v5.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">

    

    

<!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <style>
      .bd-placehol<div class="card shadow-lg p-3 mb-5 bg-success rounded " >der-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-bg-dark">
    
<div class="  cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Cover</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <form action="" method="post" class="input-group">
            <input type="text" class="form-control" id="SearchInput" style="height:28px ; margin-top:7px; width: 30px; border-top-left-radius:50px; border-bottom-left-radius: 50px; " placeholder="  Search..!!" aria-label="Recipient's username with two button addons">
            <!-- <button class="btn btn-outline-secondary" type="button">Button</button> -->
            
            <button class="btn btn-primary" style="height: 30px; margin-top:2px ; margin-right: 10px; padding-bottom: 30px;" type="submit" id="SendMsgBtn">🔍</button>
        </form>
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
        <a class="nav-link fw-bold py-1 px-0 " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
            aria-controls="offcanvasExample">
            <b>Contacts</b></a>


            <div class="dropdown nav-link fw-bold py-1 px-0">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="50" height="50" class="rounded-circle me-2">
                    
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <!-- <li><a class="dropdown-item" href="#">New project...</a></li> -->
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>    
       
        <!-- <a class="nav-link fw-bold py-1 px-0" href="#">Profile</a> -->
      </nav>
    </div>
  </header>

  <main class="card shadow-lg p-3 mb-5 bg-warning rounded px-3">
    <!-- <a href="" class=""> -->
        <!-- <img src="../blog/img/contact.jpg" alt="" height="50px;" width="50px;"
            style="border:1px solid black ; border-radius:300px;"> -->
        <!-- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg> -->
        <b style="font-family:'Courier New', Courier, monospace; font-size:larger; "><h4>ChatMessages-RoomId : <?php echo $room_id;  ?></h4></b>
    <!-- </a> -->
    <!-- <h1>Cover your page.</h1> -->
  </main>

  <div class="anyClass" id="chat" style="overflow: auto;">
    
    <!-- echo $result['id']; -->

    <!-- 
        <label for="">You : </label>
        <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
        <p>
       
         </p>
        <!-- <span class="time-right">11:00</span> -->
    <!-- </div> -->
    

    
    <!-- <div class="card shadow-lg p-3 mb-5 bg-danger rounded" >
        <label for="">Shubh :</label>
        <!-- <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;"> -->
        <!-- <p>Hello. How are you today?</p>
        <span class="time-right">11:00</span>
    </div> --> 
    <!-- <div class="container">
        <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
        <p>Hello. How are you today?</p>
        <span class="time-right">11:00</span>
    </div> -->

    <!-- <div class="container darker">
        <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
        <p>Hey! I'm fine. Thanks for asking!</p>
        <span class="time-left">11:01</span>
    </div> --> 


  </div>

  <footer class="input-group mt-auto bg-dark text-white-50">
    <!-- <form action="" method="post" class="input-group"> -->
   
        <input type="text" class="form-control" id="MsgInput" name="MsgInput" placeholder="Typing....!!!" aria-label="Recipient's username with two button addons">
        <!-- <button class="btn btn-outline-secondary" type="button">Button</button> -->
        
        <button class="btn btn-success" type="submit" name="SendMsgBtn" id="sendbtn">Send</button>

    <!-- </form> -->
    <!-- <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p> -->
  </footer>
  <br>
  <footer class="mt-auto text-center text-white-50">

    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
</div>



<main class="d-flex flex-nowrap">

    <div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 text-bg-dark"
        style="width: 280px;" id="offcanvasExample">
        <!-- <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> -->
        <svg class="bi pe-none me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
        <div class="offcanvas-header">

            <span class="fs-4">ChatBook </span>
            <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="offcanvas"
                aria-label="Close" style="border:2px solid white ; color:whitesmoke"><b>X</b></button>
        </div>

        <!-- </a> -->

        <hr>

        <div style="overflow:auto ;">


            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">
                        <img src="../blog/img/contact.jpg" alt="" height="50px;" width="20px;">
                        <!-- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg> -->
                        <b style="font-family:'Courier New', Courier, monospace; font-size:larger; ">Shubham</b>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">
                        <img src="../blog/img/contact.jpg" alt="" height="50px;" width="20px;">
                        <!-- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg> -->
                        <b style="font-family:'Courier New', Courier, monospace; font-size:larger; ">Shubham</b>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">
                        <img src="../blog/img/contact.jpg" alt="" height="50px;" width="20px;">
                        <!-- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg> -->
                        <b style="font-family:'Courier New', Courier, monospace; font-size:larger; ">Shubham</b>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">
                        <img src="../blog/img/contact.jpg" alt="" height="50px;" width="20px;">
                        <!-- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg> -->
                        <b style="font-family:'Courier New', Courier, monospace; font-size:larger; ">Shubham</b>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">
                        <img src="../blog/img/contact.jpg" alt="" height="50px;" width="20px;">
                        <!-- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg> -->
                        <b style="font-family:'Courier New', Courier, monospace; font-size:larger; ">Shubham</b>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">
                        <img src="../blog/img/contact.jpg" alt="" height="50px;" width="20px;">
                        <!-- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg> -->
                        <b style="font-family:'Courier New', Courier, monospace; font-size:larger; ">Shubham</b>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">
                        <img src="../blog/img/contact.jpg" alt="" height="50px;" width="20px;">
                        <!-- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg> -->
                        <b style="font-family:'Courier New', Courier, monospace; font-size:larger; ">Shubham</b>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">
                        <img src="../blog/img/contact.jpg" alt="" height="50px;" width="50px;"
                            style="border:1px solid black ; border-radius:300px;">
                        <!-- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg> -->
                        <b style="font-family:'Courier New', Courier, monospace; font-size:larger; ">Shubham
                            KUMAR</b>

                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table" />
                        </svg>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid" />
                        </svg>
                        Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle" />
                        </svg>
                        Customers
                    </a>
                </li>
            </ul>
        </div>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="50" height="50" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <!-- <li><a class="dropdown-item" href="#">New project...</a></li> -->
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
</main>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

        <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>

  
       
<script type="text/javascript" >
function loadXMLDoc() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
       document.getElementById("chat").innerHTML = xhttp.responseText;
    }
};
xhttp.open("GET", "htcont.php", true);
xhttp.send();}
setInterval(function(){
    loadXMLDoc() ;
}, 1000);
windowonload = loadXMLDoc;




    // setInterval(runFunction, 1000);
    //     function runFunction()
    //     {
    //         $.post("htcont.php", {room:'<?php 
        // echo $room_id 
        ?>
        // '},
    //             function(data, status)
    //             {
    //                 document.getElementsByClassName('anyClass')[0].innerrHTML = data ;
    //             }
    //             )
    //             };


// Get the input field
var input = document.getElementById("MsgInput");

// Execute a function when the user presses a key on the keyboard
input.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
  if (event.key === "Enter") {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("sendbtn").click();
  }
});

                $("#sendbtn").click(function(){
                    var clientmsg = $("#MsgInput").val();
                $.post("postmsg.php", {text: clientmsg, room:'<?php echo $room_id ?>', ip:'<?php echo $_SERVER['REMOTE_ADDR']?>'},
                function(data, status){
                    document.getElementsByClassName('anyClass')[0],innerHTML = data ;
                });
                $("#MsgInput").val("");
                return false;
                }); 


                // to scroll down automatically
                
                // $(document).ready(function(){
                //     $('#chat').animate({scrollTop:1000000}, 800)
                // });


          

            </script>

    
  </body>
</html>
