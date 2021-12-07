<?php include'dbconnect.php'; ?>
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
        <a class="dropdown-item" href="edit_student.php">Result</a>
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

     
        <section id="main-form" class="ml-5">
        
                    <h2 class="text-center text-danger pt-5 pb-5 ml-5 font-weight-bold">Student Result Management System</h2>
                    <div class="container bg-warning" id="formsetting">
                        <h3 class=" text-center text-black pb-4 pt-4 font-weight-bold">Student Profile Details</h3>
                        <form method="POST" action="as.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <table class="table table-bordered text-black table-responsive">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>FirstName</th>
                                                <th>LastName</th>
                                                <th>FatherName</th>
                                                <th>Gender</th>
                                                <th>Email</th>
                                                <th>BirthDate</th>
                                                <th>Mobile</th>
                                                <th>City</th>
                                                <th>District</th>
                                                <th>State</th>
                                                <th>Nationality</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php
                                        $sql= "select * from student";
                                        $run=mysqli_query($conn,$sql);
                                        $i=1;
                                        while($row=mysqli_fetch_assoc($run))
                                        {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $row['pname']; ?></td>
                                                <td><?php echo $row['qname']; ?></td>
                                                <td><?php echo $row['fathername']; ?></td>
                                                <td><?php echo $row['gender']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['birthdate']; ?></td>
                                                <td><?php echo $row['mobile']; ?></td>
                                                <td><?php echo $row['city']; ?></td>
                                                <td><?php echo $row['district']; ?></td>
                                                <td><?php echo $row['state']; ?></td>
                                                <td><?php echo $row['nationality']; ?></td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

    
    
            </body>
</html>