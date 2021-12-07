
<!DOCTYPE html>
<html>
    <head>
        <title>Results Details</title>

        <meta name="viewport" content="width-device-width, initial-scale-1">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script>
    jQuery(document).ready(function($){
        $('#toggler').click(function(event){
            {
                event.preventDefault();
                $('#wrap').toggleClass('toggled');
            }
        });
    });
</script>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-info navbar-light">
  <!-- Brand -->
  <a class="navbar-brand logo" href="index.php"><img src="image/2.jpg" alt="logo" height=50px width=50px ></a>

  <!-- Links -->
  <ul class="navbar-nav font-weight-bold text-light">
    
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="menu.php">Dashboard</a>
    </li>
<br>
<br>
    <!-- Dropdown -->
    <li class="nav-item dropdown ">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          <i class="fa fa-user"></i>
        Student
        
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="add_student.php">Add Student Personal Details</a>
        <a class="dropdown-item" href="view_student.php">Add Student Academic Details</a>
        <a class="dropdown-item" href="edit_student.php">Results</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      <i class="fa fa-user"></i>
        Teacher
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="add_teacher.php">Add Teacher</a>
        <a class="dropdown-item" href="view_teacher.php">View Teacher</a>
        <a class="dropdown-item" href="edit_teacher.php">Explore</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="edit_student.php">Result</a>
    </li>

    <li class="nav-item">
    
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>


<style>

  .btns {
    position: relative;
    margin-left: 620px;
    margin-top: 80px;
    padding: 18px;
    background-color: black;
    font-weight: bold;
    font-size: 36px;
    color: black;
    box-shadow: 80%;
    box-sizing: border-box;
    width: 320px;
    height: 120px;
    border-radius: 17px;
    background-image: url('images/back.jpg');
  }


  </style>

<div class="container bg-success mt-3 pb-5" id="formsetting">
                        <h1 class="text-center text-black">Students Result Management System</h1>
                        <h3 class="text-center text-black pb-4 pt-4 font-weight-bold">Results Section</h3>
                        <br>
                        
                        <a href="alluser.php" class="text-center text-white"><h1><i class="fa fa-user"><br>View All Results</h1></i></a>
                        <br>
                        <hr>
                        <a href="alluser.php" class="text-center text-white"><h1><i class="fa fa-pencil"><br>Update/Edit Results</h1></i></a>
                        <br>
                        <hr>
                        <a href="history.php" class="text-center text-white"><h1><i class="fa fa-eye"><br>View Updated Results History</h1></i></a>
                        <br>
                        <hr>

</div>
</html>
