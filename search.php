<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
        #add{
            /* width:80%; */
            height:100%;
            width:80%;
            margin-left: 129px;
        }
        .main{
            display:flex;
        }
        .message{
          color:red;
          font-weight:bold;
        }
        #form{
            width:50%;
        }
        #c1{
          margin-left:5%;
          margin-right:10%;
          margin-top:5%;
          border-color: black;
          border-width: 5px;
        }
        #c2{
            margin-left:5%;
            margin-right:10%;
  
        }
        .img{
          width:45%;
          margin-top:-80px;
        }
        .message{
          font-size:30px;
          height:100px;
        }

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
        #img{
            height:35px;
        }
        .link{
          color:white;
          font-weight:bold;
          text-decoration:none;
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
        .photo{
          width:150px;
          height:100px;
        }
        @media screen and (min-width: 770px) and (max-width: 1000px){
          .li{
            margin-left:0px;
          }
          .anchor{
            font-size:20px;
            margin:0px;
          }
        }
        @media screen and (min-width:1000px) and (max-width:1200px){
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
        .table{
          height:110%;
        }
        td{
          height:20px;
        }
         
    </style>
</head>
<body>

<nav class="navbar navbar-expand-xl navbar-light bg-dark">
            <div class="container-fluid">
            
            <p class = "h3 heading" style = "color:white;">Student Managemnet</p>
          <button class="navbar-toggler ham" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src = "ham.jpg" id = "img"></span>
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
    
    <h1 style = "text-decoration:underline;margin-left:3%;">Search Record:</h1>
        <div class = "main">
            <div id = "form">
            <form action = "search.php" method = "post">
            <div class="mb-3">
            <input type="number" class="form-control" placeholder = "Enrollment Number:" id="c1" name = "eno">
        </div>
     
        <button  class="btn btn-primary mt-4" id="c2" type = "submit">Search</button>
     </form>
    </div>
    </div>
       
        <div style = "overflow-x:auto;">
        <?php   
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $eno = $_POST['eno'];

                    $connection = mysqli_connect("localhost", "root", "12345", "studentmanagement");
    
                    if(!$connection){
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failuer!</strong> Database not connected.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    }
    
                    $query = "select * from student where eno = $eno";
                    $result = mysqli_query($connection,$query);

                    $row = mysqli_fetch_assoc($result);

                    if($result == NULL){
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failuer!</strong> Data not found.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    }
                    if(isset($row['eno'])){
                        ?>
                            <table class = "table mt-5 mytable"> 
                                    <tr class = "table-dark">
                                        <th>
                                            Enrollment Number:
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Mobile Number
                                        </th>
                                        <th>
                                            Date Of Birth
                                        </th>
                                        <th>
                                            Photo
                                        </th>
                                    </tr>

                                    <tr>
                                        <td> <?php echo $row['eno']; ?> </td>
                                        <td> <?php echo $row['fname']; ?> </td>
                                        <td> <?php echo $row['lname']; ?> </td>
                                        <td> <?php echo $row['mob']; ?> </td>
                                        <td> <?php echo $row['dob']; ?> </td>
                                        <td> <img src =  "<?php echo $row['img']; ?>" class = "photo"> </td>
                                    </tr>

                                </table>
                    </div>
                        <?php 
                      }

                      else{
                        ?>
                            <div style = "text-align:center;">
                              <p class = "message">No result found</p>
                              <img src = "noresult.jpeg" class = "img">
                            </div>
                        <?php
                      }
                  }
        ?>    
</body>
</html>