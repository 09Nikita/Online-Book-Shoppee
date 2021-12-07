
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

     
        <section id="main-form" class="ml-5">
        
                    <h2 class="text-center text-danger pt-5 pb-5 ml-5 font-weight-bold">Student Result Management System</h2>
                    <div class="container bg-danger" id="formsetting">
                        <h3 class=" text-center text-black pb-4 pt-4 font-weight-bold">Add Student Details</h3>
                        <form method="POST" action="as.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12 m-auto">
                                    <div class="form-group">
                                        <p>
                                            Enter your details here...
                                        </p>
                                    
                                        <label class="text-black">First Name</label>
                                        <input type="text" name="pname" placeholder="Enter Your First Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black">email</label>
                                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black">FatherName</label>
                                        <input type="text" name="fathername" placeholder="Enter Your FatherName" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black">Gender</label>
                                        <input type="radio" name="gender" value="male" class="form-check-input ml-2">
                                        <label class="form-check-label text-white pl-4">Male</label>
                                        <input type="radio" name="gender" value="female" class="form-check-input ml-2">
                                        <label class="form-check-label text-white pl-4">Female</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black">City</label>
                                        <input type="text" name="city" placeholder="Enter Your City" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black">Nationality</label>
                                        <input type="text" name="nationality" placeholder="Enter Your Nationality" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12 m-auto">
                                    <div class="form-group">
                                        <br>
                                        
                                        <label class="text-black">Last Name</label>
                                        <input type="text" name="qname" placeholder="Enter Your First Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black">BirthDate</label>
                                        <input type="Date" name="birthdate" placeholder="Enter Your BirthDate" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black">Mobile</label>
                                        <input type="text" name="mobile" placeholder="Enter Your Mobile" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black">District</label>
                                        <input type="text" name="district" placeholder="Enter Your District" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black">State</label>
                                        <input type="text" name="state" placeholder="Enter Your State" class="form-control">
                                    </div>
                                    
                                    <input type="submit" name="add" value="Add Detail" class="btn btn-success px-5 mt-3 mb-3 align-center">
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

    
    
            </body>
</html>