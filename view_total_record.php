<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Records</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
        .cont{
            display:flex;
        }
        .search{
            height:400px;
            width:340px;
            background-color: #6872e2;
            border-radius:20px;
            border:4px solid rgb(211, 24, 221);
            margin:100px;
            margin-top:150px;
            margin-left:85px;
            justify-content: center;
            align-items:center;
            display: flex;
            flex-direction:column;
        }
        #img{
            margin:100px;
            margin-left:436px;
        }
        .count{
            border-radius:100px;
            background-color:#ff5f5f;
            color:white;
            width:150px;
            height:150px;
        }
        .para{
            font-size:100px;
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
        .img{
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
        .head{
          color:white;
          font-size:60px;
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
        @media screen and (min-width:1000px) and (max-width:14000px){
          #img{
              margin:100px;
              margin-left:44px;
            }
        }

        @media screen and (min-width:950px) and (max-width:1000px){
            #img{
              margin:100px;
              margin-left:44px;
            }
            .search{
              margin: 0%;
              margin-top: 14%;
              margin-left: 7%;
            }
        }
        @media screen and (min-width:760px) and (max-width:950px){
          #img{
            margin:100px;
            margin-left:44px;
          }
          #myImage{
            width:191%;
          }
          .search{
              margin: 0%;
              margin-top: 14%;
              margin-left: 7%;
              width:40%;
            }
        }
        @media screen and (min-width:650px) and (max-width:760px)  {
          #img{
            margin:100px;
            margin-left:44px;
          }
          #myImage{
            width:45%;
          }
          .search{
              margin: 0%;
              margin-top: 14%;
              margin-left: 7%;
              width:40%;
            }
        }
        @media screen and (min-width:490px) and (max-width:650px){
          #myImage{
            width:45%;
          }
          #img{
            margin:100px;
            margin-left:44px;
          }
          .search{
              margin: 0%;
              margin-top: 14%;
              margin-left: 7%;
              width:40%;
            }
          .count{
            width:62%;
            height:25%;
          }
          .para{
            font-size:50px;
          }
          .head{
          font-size:247%;
        }
        }
        @media screen and (min-width:0px) and (max-width:490px){
          #myImage{
            width:45%;
          }
          #img{
            margin:100px;
            margin-left:30px;
          }
          .search{
              margin: 0%;
              margin-top: 14%;
              margin-left: 7%;
              width:40%;
            }
          .count{
            width:62%;
            height:25%;
          }
          .para{
            font-size:50px;
          }
          .head{
          font-size:247%;
        }
        } 
      
    </style>

</head>
<body>
<nav class="navbar navbar-expand-xl navbar-light bg-dark">
            <div class="container-fluid">
            <p class = "h3 heading" style = "color:white;">Student Managemnet</p>
          <button class="navbar-toggler ham" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src = "ham.jpg" class = "img"></span>
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

    <div style = "overflow-x:auto; overflow-y:hidden;">
    <div class = "cont row" style = "overflow-x:auto; overflow-y:hidden; flex-wrap:nowrap;">
            <div class = "search col-md-4">
                <h1 class = "head">Count is:</h1>
                <div class = "count mt-5">
                    <?php 
                        $connection = mysqli_connect("localhost", "root", "12345", "studentmanagement");

                        if(!$connection){
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failure!</strong> Failed to connect to database.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }

                        $query = "select * from student";
                        $result = mysqli_query($connection,$query);

                        if(!$result){
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failure!</strong> Failed to find data.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                        else{
                            $num_rows = mysqli_num_rows($result);
                            ?>
                            <p class = "para ms-5"> <?php echo $num_rows ?></p>

                            <?php
                                
                        }
                     
                    ?>
                </div>
        </div>

        <div id = "img" class = "col-md-3">
            <img src = "total.jpg" id = "myImage">
        </div>
    </div>
    </div>
</body>
</html>