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
        li:hover a{  /* When i hover li anchor's color will be changed to black    */
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
            width:50%;
            height:100%;
            margin-top:100px;
        }
        .form{
            margin-top:39px;
            margin-left:174px;
            width:30%;
            height:80%;
        }
        .lab{
            font-weight:bold;
        }
        .input{
            border:2px solid skyblue;
        }
        .main{
            display:flex;
        }
        .message{
          color:red;
          font-weight:bold;
        }
        #img{
          height:35px;
        }
        .inp{
          width:30%;
        }
        @media screen and (min-width:570px) and  (max-width: 770px){
            .form{
              width:310px;
              margin-left:90px;
            }
            #add{
            width:350px;
            display:block;
            margin-top:200px;
            margin-bottom:100px;
          } 
          }
          @media screen and (min-width: 770px) and (max-width: 990px){
            .form{
              width:380px;
              margin-left:5px;
            }
            #add{
            width:480px;
            display:block;
            margin-top:200px;
            margin-bottom:100px;
          } 
          }
          @media screen and (min-width:570px) and  (max-width: 770px){
            .form{
              width:350px;
              margin-left:80px;
            }
            #add{
            width:350px;
            display:block;
            margin-top:200px;
            margin-bottom:100px;
          } 
          }
         @media screen and (min-width:355px) and (max-width:570px){
          .form{
              width:350px;
              margin-left:5%;
            }
            #add{
            width:280px;
            display:block;
            margin-top:200px;
            margin-bottom:100px;
          } 
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
        @media screen and (min-width:0px) and (max-width:600px){
          .main{
            display:block;
          }
          #add{
            margin-left:6%;
            height:130%;
            width:85%;
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

  <?php
  $flag = 1;
  $validate = 1;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $connection = mysqli_connect("localhost", "root", "12345", "studentmanagement"); 

        if(!$connection){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failure!</strong> Failed to connect to database.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $eno = $_POST['eno'];
        $mobileNo = $_POST['mobileNo'];
        $sem = $_POST['sem'];
        $dob = $_POST['dob'];
        $img = $_FILES['img'];
        $img_name = $img['name'];
        $img_temp = $img['tmp_name'];

        $destination = "uploads/" . $img_name;

        move_uploaded_file($img_temp, $destination);

        if($firstname == NULL){
          $error_fname = "Enter valid first name";
          $flag = 0;
        }
        if($lastname == NULL){          
          $error_lname = "Enter valid last name";
          $flag = 0;
        }

          if(strlen($eno) != 12 || $eno == NULL){
            $error_eno = "Enter valid enorollment number";
            $flag = 0;
          }

          if(strlen($mobileNo) != 10 || $mobileNo == NULL){
            $error_mob = "Enter valid mobile number";
            $flag = 0;
          }

          if($sem > 8 || $sem == NULL){
            $error_sem = "Enter valid semester";
            $flag = 0;
          }

          if($dob == NULL){
            $error_dob = "Enter valid date of birth";
            $flag = 0;
          }

          if($img_name == NULL){
            $error_img = "Enter student's image<br>";
            $flag = 0;
          }


        // if(flag == 0){
      

     if($flag == 1){
      // establishing connection with database    

      $query = "insert into student values($eno, '$firstname', '$lastname', $mobileNo, '$dob', '$destination')";

      // To validate enrollment number and mobile number
      // $validation = "select eno,mob from student";
      // $valid = mysqli_query($connection,$validation);

      // while($enorll = mysqli_fetch_assoc($valid)){
      //     if($_POST['eno'] == $enorll['eno']  || $_POST['mobileNo'] == $enroll['mob']){
      //       $flag = 0;
      //       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failure!</strong> Enrollment number or mobile number already exists.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
      //       break;
      //     }
      // }

      
      
      try{
        $result = mysqli_query($connection,$query);
        
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Successful!</strong> Data inserted successfully.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
        
        else{
       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failure!</strong> Data not inserted successfully.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
      }

      catch(exception $e){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failure!</strong> Enrollment number or mobile number alreadu exists .<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
      }
    }
        }
    // }
    
?>

  <div class = "main">
        <img src = "student_add.png" id = "add">

        <form action = "insert.php" method = "post" class = "form inp" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1" class = "lab">First Name</label>
              <input name = "first_name" type="text" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">

              <?php 
                if(isset($error_fname)){
                  echo "<span style = 'color:red'>$error_fname</span>";
                }
              ?>
      
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputPassword1" class = "lab">Last Name</label>
                <input name = "last_name"  type="text" class="form-control input" id="exampleInputPassword1" placeholder="Last Name">
            </div>

              <?php 
                if(isset($error_lname)){
                  echo "<span style = 'color:red'>$error_lname</span>";
                }
              ?>
          
            <div class="form-group mt-3">
                <label for="exampleInputPassword1" class = "lab">Enrollment Number:</label>
                <input name = "eno"  type="number" maxlength="12" class="form-control input" id="exampleInputPassword1" placeholder="Enrollment Number:">
               
            </div>

              <?php 
                if(isset($error_eno)){
                  echo "<span style = 'color:red'>$error_eno</span>";
                }
              ?>
            <div class="form-group mt-3">
              <label for="exampleInputPassword1" class = "lab">Mobile Number:</label>
              <input name = "mobileNo"  type="number" maxlength = "10" class="form-control input" id="exampleInputPassword1" placeholder="Mobile Number">

              <?php 
                if(isset($error_mob)){
                  echo "<span style = 'color:red'>$error_mob</span>";
                }
              ?>
             
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputPassword1" class = "lab">Semester:</label>
                <input name = "sem"  type="number" maxlength = "1" class="form-control input" id="exampleInputPassword1" placeholder="Semester:">

                <?php 
                if(isset($error_sem)){
                  echo "<span style = 'color:red'>$error_sem</span>";
                }
              ?>
            
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputPassword1" class = "lab">Date Of Birth:</label>
                <input name = "dob"  type="date" class="form-control input" id="exampleInputPassword1" placeholder="Last Name">
            </div>

            <?php 
                if(isset($error_dob)){
                  echo "<span style = 'color:red'>$error_dob</span>";
                }
              ?>
           
            <div class="form-group mt-3">
                <label for="exampleInputPassword1" class = "lab">Student Image</label>
                <input name = "img"  type="file" class="form-control input" id="exampleInputPassword1">
            </div>

            <?php 
                if(isset($error_img)){
                  echo "<span style = 'color:red'>$error_img</span>";
                }
              ?>
        
           <button type="submit" class="btn btn-primary mt-4">Submit</button>;
      
          </form>
        </div>

    </body>
</body>
</html>
