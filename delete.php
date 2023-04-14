<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Student Record</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
       li:hover{
            background-color:white;
            color:white;
        }
        li:hover a{  
            color:black;
            text-decoration:underline;

        }
        .anchor{
            color:white;
            text-decoration:underline;
            font-weight:bold;
            font-size:20px;
        }
        li{
            border-radius:10px;
            width:150px;
            text-align:center;
        }
        .link{
          color:white;
          font-weight:bold;
          text-decoration:none;
        }
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
        #success{
          display:none;
        }
        #failure{
          display:none;
        }
        #img{
          height:35px;
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
  <h1 style="text-align:center">Delete a Record</h1>

  <?php 

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $flag = 1;
    $found = 0;

    $eno = $_POST['eno'];

    if(strlen($eno) != 12 || $eno == NULL){
      $error_eno = "Enter valid enrollment number";
      $flag = 0;
    }

    if($flag == 1){
        // Establish connection
        $connection = mysqli_connect("localhost", "root", "12345", "studentmanagement");

        if(!$connection){
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failure!</strong> Failed to connect to database.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
        $query = "delete from student where eno = $eno";

        $result = mysqli_query($connection,$query);

        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> Data deleted successfully.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
        else{
          $flag = 0;
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failure!</strong> Data not deleted successfully.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }
  }
  ?>

  <div class = "main">
    <div id = "form">
    <form action = "delete.php" method = "post">
      <div class="mb-3">
        <input type="number" class="form-control" placeholder = "Enrollment Number:" id="c1" name = "eno">
        <?php 
          if(isset($error_eno)){
            echo "<span style = 'color:red;margin-left:5%;'> $error_eno </span>";
          }
        ?>
      </div>
     
  <button  class="btn btn-primary mt-4" id="c2" onclick = "show();">Delete</button>
  </form>  

  </div>

  <div>
      <img src = "dust.jpg" id = "add">
  </div>
  
    </body>
</body>
</html>