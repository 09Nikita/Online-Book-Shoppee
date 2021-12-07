<?php 
    include 'dbconnect.php';
    $sql = "SELECT * FROM academic";
    $result = mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Teacher Details</title>

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

<div class="container bg-warning mt-5">
        <h1>Update/Edit Results</h1>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">PRN</th>
                            <th scope="col" class="text-center py-2">Email</th>
                            <th scope="col" class="text-center py-2">College</th>
                            <th scope="col" class="text-center py-2">Year</th>
                            <th scope="col" class="text-center py-2">Semester</th>
                            <th scope="col" class="text-center py-2">Marks</th>
                            <th scope="col" class="text-center py-2">OutOf</th>
                            <th scope="col" class="text-center py-2">Percentage</th>
                            <th scope="col" class="text-center py-2">Grade</th>
                            <th scope="col" class="text-center py-2">Result</th>
                            <th scope="col" class="text-center py-2">Clear Subjects</th>
                            <th scope="col" class="text-center py-2">Failed Subjects</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['prn']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['college']?></td>
                        <td class="py-2"><?php echo $rows['year']?></td>
                        <td class="py-2"><?php echo $rows['sem']?></td>
                        <td class="py-2"><?php echo $rows['marks']?></td>
                        <td class="py-2"><?php echo $rows['outof']?></td>
                        <td class="py-2"><?php echo $rows['percentage']?></td>
                        <td class="py-2"><?php echo $rows['grade']?></td>
                        <td class="py-2"><?php echo $rows['result']?></td>
                        <td class="py-2"><?php echo $rows['clear']?></td>
                        <td class="py-2"><?php echo $rows['fail']?></td>
                        <td><a href="selectuserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-success">Edit/Update Result</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

</body>
</html>
