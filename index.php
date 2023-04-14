<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>

    <link href = "responsive_index.css" rel = "stylesheet" type = "text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
        li:hover{
            background-color:white;
            color:black;
        }
        li:hover a{  /* When i hover li anchor's color will be changed to black    */
            color:black;
            text-decoration:underline;

        }
        .anchor{
            color:white;
            text-decoration:underline;
            font-weight:bold;
            font-size:20px;
            margin:10px;
        }
        li{
            border-radius:10px;
            width:150px;
            text-align:center;
        }
        img{
            height:35px;
        }

        button{
            background-color:#ff5f5f;
            color:white;
            padding:12px;
            border:none;
            border-radius:27px;
            width:55%;
            font-weight:bold;
        }
        .link{
          color:white;
          font-weight:bold;
          text-decoration:none;
        }
        button:hover{
            background-color: #fa7474;
        }

        #row_1{
            display:flex;
            justify-content:space-between;
            margin-bottom:6%;
        }
        
        #row_2{
            display:flex;
            justify-content:space-evenly;
        }
        .ham{
          float:right;
          width:20%;
          color:white;
        }
        .li{
          margin-left:10px;
        }
        .c1{
          margin-left:5%;
        }
        @media screen and (max-width: 570px){
          .cont_1{
              margin:6%;
              margin-left:7%;
              width:85%;
          }
          #row_1{
            margin-bottom:0%;
          }
          .cont_2{
              margin:6%;
              margin-left:4%;
              width:85%;
          }
          #btn_3{
            width:60%;
          }
        }
        @media screen and (min-width:570px) and  (max-width: 770px){
          .cont_1{
              margin:5%;
              margin-left:5%;
              width:90%;
          }
          #row_1{
            margin-bottom:0%;
          }
          .cont_2{
              margin:6%;
              margin-left:4%;
              width:85%;
          }
          #btn_3{
            width:60%;
          }
        }
        @media screen and (min-width: 770px) and (max-width: 1000px){
          .cont_1{
            width:93%;
            margin-bottom:5%;
          }
          .cont_2{
            width:85%;       
            margin-bottom:5%;
            margin-left:9%;    
          }
          #row_1{
            display:inline-block;
          }
          #row_2{
            justify-content:space-between;
            display:inline-block;
          }
          #main{
            display:flex;
          }
          .li{
            margin-left:0px;
          }
          .anchor{
            font-size:20px;
            margin:0px;
          }
        }

        @media screen and (max-width:355px){
          button{
            width:65%;
          }
          #btn_3{
            width:85%;
          }
        }
        @media screen and (min-width:1200px) and (max-width:1400px){
          #btn_3{
            width:65%;
          }
        }
        @media screen and (min-width:1000px) and (max-width:1200px){
          .cont_1{
            width:93%;
            margin-bottom:5%;
            margin-left:16%;            
          }
          .cont_2{
            width:85%;       
            margin-bottom:5%;
            margin-left:25%;    
          }
          #row_1{
            display:inline-block;
          }
          #row_2{
            justify-content:space-between;
            display:inline-block;
          }
          #main{
            display:flex;
          }
          .li{
            margin-left:0px;
          }
          .anchor{
            font-size:17px;
            margin:0px;
          }
          .c1{
            margin-left:-4%;
          }
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-xl navbar-light bg-dark">
            <div class="container-fluid">
            
            <p class = "h3 heading" style = "color:white;">Student Managemnet</p>
          <button class="navbar-toggler ham" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src = "ham.jpg"></span>
          </button>
          <div class="collapse navbar-collapse c1" id="navbarNav">
            <ul class="navbar-nav ul">
              <li class="nav-item li">
                <a class="nav-link anchor" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item li">
                <a class="nav-link anchor" href="search.php">Serach</a>
              </li>
              <li class="nav-item li">
                <a class="nav-link anchor" href="view_total_record.php">View Total</a>
              </li>
              <li class="nav-item li">
                <a class="nav-link anchor" href="delete.php">Delete</a>
              </li>
              <li class="nav-item li">
                <a class="nav-link anchor" href="show_all.php">Show All</a>
              </li>
               <li class="nav-item li">
                <a class="nav-link anchor" href="insert.php">Insert</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
    <br> <br> 
    <div class = "container" id = "main">
        <div class = "row" id = "row_1">
            <div class = "col-md-3  col-sm-2 cont_1" style = "background-color: #6872e2;height:270px;text-align:center;border-radius:25px;" id = cont1>
                <img src = "database.png" style = "height:35%;">
                <h4 class = "mt-2" style = "color:white;">Insert Data</h3>
                <p style = "color:white;font-weight:bold;">Click on below button to insert new reords of student</p>
                <button><a  class = "link" href = "insert.php?">Insert Data</a></button>
            </div>

            <div class = "col-md-3 col-sm-2 cont_1" style = "background-color: #fad249;height:270px;text-align:center;border-radius:25px;">
                <img src = "show.png" style = "height:35%;">
                <h4 class = "mt-2" style = "color:black;font-weight: bold;">Show All Data</h3>
                <p style = "color:black;font-weight:bold;">Click on below button to existing student records</p>
                <button><a  class = "link" href = "show_all.php">Show All Data</a></button>
            </div>

            <div class = "col-md-3 col-sm-2 cont_1" style = "background-color: #ff8988;height:270px;text-align:center;border-radius:25px;">
                <img src = "update.png" class = "mt-2" style = "height:33%;">
                <h4 class = "mt-2" style = "color:white;font-weight:bold;">Total Records</h3>
                <p style = "color:white;font-weight:bold;">Click on below button to view total records</p>
                <button id = "btn_3" ><a  class = "link"  href = "view_total_record.php">View Total Records</a></button>
            </div>
        </div>

   

        <div class = "row" id = "row_2">
            <div class = "col-md-3 col-sm-2  cont_2" style = "background-color: #6872e2;height:270px;text-align:center;border-radius:25px;">
                <img src = "dustbin.png" style = "height:35%;">
                <h4 class = "mt-2" style = "color:white;">Delete Data</h3>
                <p style = "color:white;font-weight:bold;">Click on below button to delete student records</p>
                <button><a  class = "link" href = "delete.php">Delete Data</a></button>
            </div>

            <div class = "col-md-3 col-sm-2  cont_2" style = "background-color: #fad249;height:270px;text-align:center;border-radius:25px;">
                <img src = "search.png" class = "mt-2" style = "height:30%;">
                <h4 class = "mt-3" style = "color:black;font-weight: bold;">Search Data</h3>
                <p style = "color:black;font-weight:bold;">Click on below button to search existing student records</p>
                <button><a  class = "link" href = "search.php">Search Data</a></button>
            </div>

        </div>
    </div>
</body>
</html>